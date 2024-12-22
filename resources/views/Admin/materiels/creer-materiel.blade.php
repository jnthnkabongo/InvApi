@extends('layouts.entete')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="card">
            <div class="row m-3">
                <div class="col-lg-4">
                    <a class="btn btn-primary" href="{{ route('dashboard') }}"><i class="bi bi-house-fill"></i>&nbsp; Accueil</a>
                </div>
                <div class="col-lg-4 text-center"><h2>Création d'un matériel </h2></div>
                <div class="col-lg-4 text-center"></div>
            </div>
        </div>
        <div class="card">

            <div class="card-body">
                <form class="row justify-content-center g-3" action="{{ route('soumission-materiels') }}" method="POST">
                    @csrf
                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" value="" >
                        <div class="text-danger">
                            @error("name")
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="" >
                        <div class="text-danger">
                            @error("description")
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="col-5">
                        <label for="inputAddress" class="form-label">Lot matériel</label>
                        <select name="lot_id" id="lot_id" class="form-select">
                            <option value="">Choisissez le lot du matériel</option>
                            @foreach ($liste_lot as $Lot)
                                <option value="{{ $Lot->id }}">{{ ucfirst($Lot->lot_number) }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">
                            @error("lot_id")
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="inputCity" class="form-label">Type matériel</label>
                        <select name="type_item_id" id="type_item_id" class="form-select">
                            <option value="">Choisissez le type de matériel</option>
                            @foreach ($liste_type_item as $TypeMateriel)
                                <option value="{{ $TypeMateriel->id }}">{{ $TypeMateriel->type_name }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">
                            @error("type_item_id")
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-5">
                        <label for="inputAddress2" class="form-label">Quantité</label>
                        <input type="number" class="form-control" id="quantite_id" name="quantite_id" value="">
                        <div class="text-danger">
                            @error("quantite_id")
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-5">
                        <label for="inputAddress2" class="form-label">Numéro unique</label>
                        <input type="number" class="form-control" id="numero_unique" name="numero_unique" value="">
                        <div class="text-danger">
                            @error("numero_unique")
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="inputPassword4" class="form-label">Status item</label>
                        <select name="status_item_id" id="status_item_id" class="form-select">
                            <option value="">Choisissez le status du matériel</option>
                            @foreach ($liste_status_item as $State)
                                <option value="{{ $State->id }}">{{ ucfirst($State->status) }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">
                            @error("status_item_id")
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="inputState" class="form-label">Etat item</label>
                        <select name="etat_item_id" id="etat_item_id" class="form-select">
                            <option value="">Choisissez l'Etat du matériel</option>
                            @foreach ($liste_etat_item as $Etat)
                                <option value="{{ $Etat->id }}">{{ ucfirst($Etat->state) }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">
                            @error("etat_item_id")
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="inputState" class="form-label">Shop</label>
                        <select name="localisation_id" id="localisation_id" class="form-select">
                            <option value="">Choisissez le DC / RC/ Shop</option>
                            @foreach ($liste_shop as $Shop)
                                <option value="{{ $Shop->id }}">{{ ucfirst($Shop->name )}}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">
                            @error("localisation_id")
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">

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
