<?php

namespace App\Http\Controllers;

use App\Models\localisations;
use App\Models\Shops;
use Illuminate\Http\Request;

class localisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_regions = Shops::paginate('10');
        return view('Admin.localisations.liste-localisation', compact('liste_regions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.localisations.creation-localisation');
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
