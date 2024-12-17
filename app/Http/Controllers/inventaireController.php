<?php

namespace App\Http\Controllers;

use App\Models\inventaires;
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
        return view('Admin.inventaires.index-inventaires');
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

        $inventory = new inventaires();
        $inventory->user_id = Auth::id();
        $inventory->item_id = $request->item_id;
        $inventory->date_inventaire = now()->toDateString();
        $inventory->save();
        return response()->json(['message' => 'Valeur enregistrée avec succes'], 201);
    }
}
