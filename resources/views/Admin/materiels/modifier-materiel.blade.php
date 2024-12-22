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
                <form class="row justify-content-center g-3" action="" method="GET">
                    @csrf
                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Identifiant</label>
                        <input type="text" class="form-control" id="identifiant" name="identifiant" value="{{ $itemsQr->id }}" readonly>
                    </div>
                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Noms</label>
                        <input type="text" class="form-control" id="nom_complet" name="nom_complet" value="{{ $itemsQr->name }}" >
                    </div>

                    <div class="col-md-5">
                        <label for="inputCity" class="form-label">Identifiant lot</label>
                        <input type="text" class="form-control" id="fonction" name="fonction" value="{{ $itemsQr->lot_id }}" >
                    </div>
                    <div class="col-5">
                        <label for="inputAddress2" class="form-label">Quantité</label>
                        <input type="text" class="form-control" id="" name="quantite" value="{{ $itemsQr->quantite_id }}">
                    </div>

                    <div class="col-5">
                        <label for="inputAddress" class="form-label">Type item</label>
                        <select name="departement_id" id="departement_id" class="form-select">
                            <option value="{{ $itemsQr->type_item_id }}">{{ ucfirst($itemsQr->Typeitems ? $itemsQr->Typeitems->type_name : 'Aucune donnée')}}</option>
                            @foreach ($liste_item as $item)
                                <option value="{{ $item->id }}">{{ ucfirst($item->type_name)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="inputPassword4" class="form-label">Status item</label>
                        <select name="" id="" class="form-select">
                            <option value={{ $itemsQr->status_item_id }}>{{ ucfirst($itemsQr->Status ? $itemsQr->Status->status : 'Aucune donnée')}}</option>
                            @foreach ($liste_status as $statut)
                                <option value="{{ $statut->id }}">{{ ucfirst($statut->status)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="inputState" class="form-label">Etat item</label>
                        <select name="region_id" id="region_id" class="form-select">
                            <option value="{{ $itemsQr->etat_item_id }}">{{ ucfirst($itemsQr->Etatitems ? $itemsQr->Etatitems->state : 'Aucune donnée')}}</option>
                            @foreach ($liste_etats as $etat_item)
                                <option value="{{ $etat_item->id }}">{{ $etat_item->state }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="inputState" class="form-label">Commune</label>
                        <select name="" id="" class="form-select">
                            <option value="{{ $itemsQr->commune_id }}">{{ ucfirst($itemsQr->Communes ? $itemsQr->Communes->name : 'Aucune donnée')}}</option>
                            @foreach ($liste_communes as $communes)
                                <option value="{{ $communes->id }}">{{ $communes->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="inputState" class="form-label">Localisation</label>
                        <select name="" id="" class="form-select">
                            <option value="{{ $itemsQr->localisation_id }}">{{ ucfirst($itemsQr->Localisations ? $itemsQr->Localisations->name : 'Aucune donnée')}}</option>
                            @foreach ($liste_localisations as $localisations)
                                <option value="{{ $localisations->id }}">{{ ucfirst($localisations->name)}}</option>
                            @endforeach
                        </select>
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
