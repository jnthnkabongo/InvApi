<?php

namespace App\Http\Controllers;

use App\Http\Requests\saveItem;
use App\Models\communes;
use App\Models\etatitems;
use App\Models\items;
use App\Models\localisations;
use App\Models\lots;
use App\Models\Shops;
use App\Models\statusitems;
use App\Models\typesitems;
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
          $qrCode = QrCode::size('30')->generate($itemsQr->numero_unique);

          $fileName = "qr_codes/user_{$itemsQr->numero_unique}.svg";
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
    public function soumission(items $items, saveItem $request){
        try {
            $items->name = $request->name;
            $items->description = $request->description;
            $items->lot_id = $request->lot_id;
            $items->type_item_id = $request->type_item_id;
            $items->quantite_id = $request->quantite_id;
            $items->numero_unique = $request->numero_unique;
            $items->status_item_id = $request->status_item_id;
            $items->etat_item_id = $request->etat_item_id;
            $items->localisation_id = $request->localisation_id;
            //dd($items);
            $items->save();
            return redirect()->route('liste-materiels')->with('message', 'Opération réussi !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Une erreur est survenue : ' . $th->getMessage());
        }
    }

    public function generationQR (){
        $items = items::all();

        foreach ($items as $itemsQr) {
            $qrCode = QrCode::size(50)->generate($itemsQr->numero_unique);

            $fileName = "qr_codes/user_{$itemsQr->numero_unique}.svg";
            Storage::disk('public')->put($fileName, $qrCode);
        }
        return view('Admin.materiels.generationqr', compact('items'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $liste_lot = lots::orderBy('lot_number', 'asc')->get();
        $liste_type_item = typesitems::orderBy('type_name', 'asc')->get();
        $liste_status_item = statusitems::orderBy('status', 'asc')->get();
        $liste_etat_item = etatitems::orderBy('state', 'asc')->get();
        $liste_shop = Shops::orderBy('name', 'asc')->get();
        return view('Admin.materiels.creer-materiel', compact('liste_lot','liste_type_item','liste_status_item','liste_etat_item','liste_shop'));
    }

    /**
     * Display the specified resource.
     */
    public function show(items $itemsQr)
    {
        $liste_item = typesitems::all();
        $liste_status = statusitems::all();
        $liste_etats = etatitems::all();
        $liste_communes = communes::all();
        $liste_localisations = localisations::all();
        return view('Admin.materiels.detail-materiel', compact('itemsQr','liste_item','liste_status','liste_etats','liste_communes','liste_localisations'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(items $itemsQr)
    {
        $liste_item = typesitems::all();
        $liste_status = statusitems::all();
        $liste_etats = etatitems::all();
        $liste_communes = communes::all();
        $liste_localisations = localisations::all();
        return view('Admin.materiels.modifier-materiel', compact('itemsQr','liste_item','liste_status','liste_etats','liste_communes','liste_localisations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, items $itemsQr)
    {
        try {
            $itemsQr->name = $request->name;
            $itemsQr->description = $request->description;
            $itemsQr->lot_id = $request->lot_id;
            $itemsQr->type_item_id = $request->type_item_id;
            $itemsQr->quantite_id = $request->quantite_id;
            $itemsQr->numero_unique = $request->numero_unique;
            $itemsQr->status_item_id = $request->status_item_id;
            $itemsQr->etat_item_id = $request->etat_item_id;
            $itemsQr->localisation_id = $request->localisation_id;
            $itemsQr->update();
            return redirect()->route('liste-materiels')->with('message', 'Opération réussi !');

        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Une erreur est survenue : ' . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
