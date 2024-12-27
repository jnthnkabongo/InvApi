<?php

namespace App\Http\Controllers;

use App\Models\inventaires;
use App\Models\User;
use Dotenv\Parser\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inventaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_inventaires = inventaires::paginate('10');
        return view('Admin.inventaires.index-inventaires', compact('liste_inventaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function destroy(string $id)
    {
        //
    }

    // Partie Api qui interagis avec Flutter //

    public function inventaire(Request $request){
        $request->validate(['item_id' => 'required|string|max:255']);
        $request->validate(['user_id' => 'required|integer']);

        $inventory = new inventaires();
        $inventory->user_id = $request->user_id;
        $inventory->item_id = $request->item_id;
        $inventory->date_inventaire = now()->toDateString();
        $inventory->save();
        return response()->json(['message' => 'Valeur enregistrée avec succes'], 201);
    }
    public function listemateriels(){
        $userId = Auth::id();
        if ($userId) {
            $user = User::find($userId);
            if ($user) {
                $liste_materiels = Inventaires::orderBy('created_at', 'desc')->where('user_id', $userId)->get();
            return response()->json(['user_id' => $userId, 'user_name' => $user->name,'data' => $liste_materiels]);

            }else {
            return response()->json(['error' => 'Utilisateur non authentifié'], 404);
            }
        }else{
            return response()->json(['error' => 'Utilisateur non authentifié'], 404);

        }
    }
}
