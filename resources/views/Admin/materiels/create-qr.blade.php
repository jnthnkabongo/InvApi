@extends('layouts.entete')
<main id="main" class="main">
        <div class="card">
            <div class="row m-3 text-center">
                <div class="col-lg-4"></div>
                <div class="col-lg-4"><h2>Génération QR Code </h2></div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
        <div>
            <div class="card">
                <div class="card-body">
                    <form class="row justify-content-center g-3" action="" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Identifiant</label>
                            <input type="text" class="form-control" id="nom_sous_departement" name="nom_sous_departement">
                            <div class="text-danger">
                                @error('nom_sous_departement')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Description</label>
                            <input type="text" class="form-control" id="nom_sous_departement" name="nom_sous_departement">
                            <div class="text-danger">
                                @error('nom_sous_departement')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Description</label>
                            <input type="text" class="form-control" id="nom_sous_departement" name="nom_sous_departement">
                            <div class="text-danger">
                                @error('nom_sous_departement')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Numéro unique</label>
                            <input type="text" class="form-control" id="nom_sous_departement" name="nom_sous_departement">
                            <div class="text-danger">
                                @error('nom_sous_departement')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-10">
                            <button type="submit" class="btn btn-primary w-100">Generation QR Code</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</main>
