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
                <form class="row justify-content-center g-3" action="" method="GET">
                    @csrf
                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="identifiant" name="identifiant" value="" readonly>
                    </div>
                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Description</label>
                        <input type="text" class="form-control" id="nom_complet" name="nom_complet" value="" >
                    </div>

                    <div class="col-5">
                        <label for="inputAddress" class="form-label">Lot matériel</label>
                        <select name="departement_id" id="departement_id" class="form-select">
                            <option value=""></option>

                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="inputCity" class="form-label">Type matériel</label>
                        <select name="" id="" class="form-select">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col-5">
                        <label for="inputAddress2" class="form-label">Quantité</label>
                        <input type="number" class="form-control" id="" name="quantite" value="">
                    </div>
                    <div class="col-5">
                        <label for="inputAddress2" class="form-label">Numéro unique</label>
                        <input type="number" class="form-control" id="" name="quantite" value="">
                    </div>
                    <div class="col-md-5">
                        <label for="inputPassword4" class="form-label">Status item</label>
                        <select name="" id="" class="form-select">
                            <option value=""></option>

                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="inputState" class="form-label">Etat item</label>
                        <select name="region_id" id="region_id" class="form-select">
                            <option value=""></option>

                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="inputState" class="form-label">Shop</label>
                        <select name="" id="" class="form-select">
                            <option value=""></option>

                        </select>
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
