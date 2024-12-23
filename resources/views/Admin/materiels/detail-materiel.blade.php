@extends('layouts.entete')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="card">
            <div class="row m-3">
                <div class="col-lg-4">
                    <a class="btn btn-primary" href="{{ route('dashboard') }}"><i class="bi bi-house-fill"></i>&nbsp; Accueil</a>
                </div>
                <div class="col-lg-4 text-center"><h2>Modifier matériels </h2></div>
                <div class="col-lg-4 text-center"></div>
            </div>
        </div>
        <div class="card">

            <div class="card-body">
                <form class="row justify-content-center g-3" action="{{ route('soumission-modification-materiels', $itemsQr) }}" method="GET">
                    @csrf

                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Noms</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $itemsQr->name }}" >
                    </div>
                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $itemsQr->description }}" >
                    </div>
                    <div class="col-md-5">
                        <label for="inputCity" class="form-label">Identifiant lot</label>
                        <input type="text" class="form-control" id="lot_id" name="lot_id" value="{{ $itemsQr->lot_id }}" >
                    </div>
                    <div class="col-5">
                        <label for="inputAddress2" class="form-label">Quantité</label>
                        <input type="text" class="form-control" id="quantite_id" name="quantite_id" value="{{ $itemsQr->quantite_id }}">
                    </div>

                    <div class="col-5">
                        <label for="inputAddress" class="form-label">Type item</label>
                        <select name="type_item_id" id="type_item_id" class="form-select">
                            <option value="{{ $itemsQr->type_item_id }}">{{ ucfirst($itemsQr->Typeitems ? $itemsQr->Typeitems->type_name : 'Aucune donnée')}}</option>
                          
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="inputPassword4" class="form-label">Status item</label>
                        <select name="status_item_id" id="status_item_id" class="form-select">
                            <option value={{ $itemsQr->status_item_id }}>{{ ucfirst($itemsQr->Status ? $itemsQr->Status->status : 'Aucune donnée')}}</option>

                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="inputState" class="form-label">Etat item</label>
                        <select name="etat_item_id" id="etat_item_id" class="form-select">
                            <option value="{{ $itemsQr->etat_item_id }}">{{ ucfirst($itemsQr->Etatitems ? $itemsQr->Etatitems->state : 'Aucune donnée')}}</option>

                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="inputState" class="form-label">Localisation</label>
                        <select name="localisation_id" id="localisation_id" class="form-select">
                            <option value="{{ $itemsQr->localisation_id }}">{{ ucfirst($itemsQr->Localisations ? $itemsQr->Localisations->name : 'Aucune donnée')}}</option>

                        </select>
                    </div>
                    <div class="col-5">
                        <label for="inputAddress2" class="form-label">Quantité</label>
                        <input type="text" class="form-control" id="numero_unique" name="numero_unique" value="{{ $itemsQr->numero_unique }}">
                    </div>
                    <div class="col-md-5">
                        <label for="inputState" class="form-label">QR Code</label>
                        <div>
                            <img src="{{ Storage::url("qr_codes/user_{$itemsQr->id}.svg") }}" alt="Qr Code">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-primary w-100">Modifier</button>
                    </div>
                </form>
                @if(Session::has('message'))
                    <script>
                        swal("message", "{{ Session::get('message') }}", 'success', {
                            showConfirmButton: false,
                            title: '',
                            timer: 1500
                            //button:true,
                            //button: "OK"
                        });
                    </script>
                @endif
            </div>
        </div>
    </div>
</main>
