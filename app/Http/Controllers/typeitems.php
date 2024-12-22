<?php

namespace App\Http\Controllers;

use App\Http\Requests\saveItem;
use App\Models\typesitems;
use Illuminate\Http\Request;

class typeitems extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_type_materiel = typesitems::paginate('10');
        return view('Admin.type-materiels.liste-type-materiel', compact('liste_type_materiel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.type-materiels.creation-type-materiel');
    }
    public function soumission(typesitems $item, saveItem $request){
        try {
            $item->type_name = $request->type_name;
            $item->save();
            return redirect()->route('liste-type-item')->with('message', 'Opération réussi !');

        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Une erreur est survenue : ' . $th->getMessage());
        }
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
}
