@extends('layouts.entete')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="card">
            <div class="row m-3">
                <div class="col-lg-3">
                    <a class="btn btn-primary" href="{{ route('dashboard') }}"><i class="bi bi-house-fill"></i>&nbsp; Accueil</a>
                </div>
                <div class="col-lg-6 text-center"><h2>Liste DC / SHOP / Localisation </h2></div>
                <div class="col-lg-3 text-center">
                    <a class="btn btn-primary" href="{{ route('creation-localisation') }}"><i class="bi bi-plus-circle-fill"></i>&nbsp; Ajouter</a>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <table class="table">
                        <div class="card">
                            <div class="row m-2">
                                <div class="col-lg-6 row mb-3">
                                    <form action="">
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Recipient's username">
                                            <span class="btn btn-primary">Rechercher</span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 row mb-3">
                                    <form action="">
                                        <div class="input-group">
                                            <input type="date" class="form-control" placeholder="Username" aria-label="Username">
                                            <span class="input-group-text">@</span>
                                            <input type="date" class="form-control" placeholder="Server" aria-label="Server">
                                            <button class="btn btn-primary">Filtrer</button>
                                          </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Regions</th>
                          <th scope="col">Shop</th>
                          <th scope="col">Localisation</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($liste_regions as $region)
                            <tr>
                                <th scope="row">{{ ($liste_regions->perPage() * ($liste_regions->currentPage() - 1 ))+ $loop->iteration  }}</th>
                                <td>{{ ucfirst($region->Regions ? $region->Regions->name : 'Aucune donnée') }}</td>
                                <td>{{ ucfirst($region->Localisation ? $region->Localisation->name :'Aucune donnée') }}</td>
                                <td>{{ ucfirst($region->name) }}</td>
                                <td>
                                <a class="btn btn-primary" href="{{ route('create-qr') }}"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-primary" href="{{ route('modification-materiel', $region->id) }}"><i class="bi bi-pencil"></i></a>
                                <a class="btn btn-danger" href="{{ route('supprimer-materiel', $region->id) }}"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </section>
    </div>
</main>
