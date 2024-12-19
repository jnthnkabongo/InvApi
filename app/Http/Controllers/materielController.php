<?php

namespace App\Http\Controllers;

use App\Models\items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class materielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_items = items::paginate('10');

        foreach ($liste_items as $itemsQr) {
          $qrCode = QrCode::size('30')->generate($itemsQr->id);

          $fileName = "qr_codes/user_{$itemsQr->id}.svg";
          Storage::disk('public')->put($fileName, $qrCode);
        }
        return view('Admin.materiels.liste-materiels', compact('liste_items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function generationQR (){
        $items = items::all();

        foreach ($items as $itemsQr) {
            $qrCode = QrCode::size(50)->generate($itemsQr->id);

            $fileName = "qr_codes/user_{$itemsQr->id}.svg";
            Storage::disk('public')->put($fileName, $qrCode);
        }
        return view('Admin.materiels.generationqr', compact('items'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return view('Admin.materiels.create-qr');
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
