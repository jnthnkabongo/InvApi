<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthSave;
use App\Http\Requests\credentials;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Passport\HasApiTokens;

class AuthController extends Controller
{
    // public function logins(Request $request){
    //     $request->validate([
    //         'email' => 'required|string|email',
    //         'password' => 'required|string'
    //     ]);
    //     $user = User::where('email', $request->email)->first();
    //     if (! $user || !Hash::check($request->password, $user->password)) {
    //         throw ValidationException::withMessages([
    //             'email' => ['Utilisateur non reconnu(e)'],
    //         ]);
    //     }
    //     $token = $user->createToken('auth_token')->plainTextToken;
    //     return response()->json(['access_token' => $token, 'token_type' => 'Baerer']);
    // }
    public function login(AuthSave $request) {
        $credentials = $request->only('email', 'password');

        // Valider les credentials
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken; // Récupérer le token brut

            return response()->json([
                'message' => 'Connexion réussie',
                'access_token' => $token,
                'user' => $user,
            ], 200);
        }

        return response()->json(['message' => 'Identifiants invalides'], 401);
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return response()->json(['message' => 'Utilisateur creer avec succes']);
    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Deconnexion utilisateur se fait avec succes']);
    }

    public function userConnected(Request $request)
    {
        $user = $request->user();

        if ($user) {
            return response()->json([
                'message' => 'Utilisateur connecté',
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ]
            ]);
        } else {
            return response()->json([
                'message' => 'Aucun utilisateur connecté'
            ], 401);
        }
    }

    public function index()
    {
        return view('Auth.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(credentials $request)
    {
        $credentials = $request->validated();
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            //dd($credentials);
            return redirect()->intended(route('dashboard'))->with('message', 'Bienvenu(e) dans notre app de gestion');
        }
        return to_route('redirect')->withErrors('Les informations saisies ne sont pas correctes')->onlyInput('email');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
