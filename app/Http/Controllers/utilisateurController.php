<?php

namespace App\Http\Controllers;

use App\Http\Requests\saveUtilisateur;
use App\Models\regions;
use App\Models\roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class utilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_utilisateurs = User::paginate('10');
        return view('Admin.utilisateurs.liste-utilisateurs', compact('liste_utilisateurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $liste_roles = roles::orderBy('role','asc')->get();
        $liste_regions = regions::orderBy('name','asc')->get();
        return view('Admin.utilisateurs.creation-utilisateur', compact('liste_roles','liste_regions'));
    }

    public function soumission(User $utilisateur, saveUtilisateur $request){
        try {
            $utilisateur->name = $request->name;
            $utilisateur->email = $request->email;
            $utilisateur->password = Hash::make($request->password);
            $utilisateur->role_id = $request->role_id;
            $utilisateur->region_id = $request->region_id;
            //dd($utilisateur);
            $utilisateur->save();

            return redirect()->route('liste-utilisateurs')->with('message', 'Opération réussi !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Une erreur est survenue : ' . $th->getMessage());
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(User $utilisateur)
    {
        $liste_roles = roles::orderBy('role','asc')->get();
        $liste_regions = regions::orderBy('name','asc')->get();
        return view('Admin.utilisateurs.modification-utilisateur', compact('utilisateur','liste_roles','liste_regions'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $utilisateur)
    {
        $liste_roles = roles::orderBy('role','asc')->get();
        $liste_regions = regions::orderBy('name','asc')->get();
        return view('Admin.utilisateurs.detail-utilisateur', compact('utilisateur','liste_roles','liste_regions'));
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
    public function update(Request $request, User $utilisateur)
    {
        try {
            $utilisateur->name = $request->name;
            $utilisateur->email = $request->email;
            $utilisateur->role_id = $request->role_id;
            $utilisateur->region_id = $request->region_id;
            $utilisateur->password = $request->password;
            //dd($utilisateur);
            $utilisateur->update();

            return redirect()->route('liste-utilisateurs')->with('message', 'Opération réussi !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Une erreur est survenue : ' . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $utilisateur)
    {
        try{
            $utilisateur->delete();
            return back()->with('message','Suppression reussi !');
        } catch (\Throwable $th) {

            return redirect()->back()->with('message', 'Une erreur est survenue : ' . $th->getMessage());
        }
    }
}
