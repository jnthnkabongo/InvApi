@extends('layouts.entete')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="card">
            <div class="row m-3">
                <div class="col-lg-4">
                    <a class="btn btn-primary" href="{{ route('dashboard') }}"><i class="bi bi-house-fill"></i>&nbsp; Accueil</a>
                </div>
                <div class="col-lg-4 text-center"><h2>Liste matériels </h2></div>
                <div class="col-lg-4 text-center">
                    <a class="btn btn-primary" href="{{ route('creer-materiel') }}"><i class="bi bi-plus-circle-fill"></i>&nbsp; Ajouter</a>
                    <a class="btn btn-success" href=""><i class="bi bi-table"></i>&nbsp; Importer</a>
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
                          <th scope="col">Name</th>
                          <th scope="col">Description</th>
                          <th scope="col">Type Item</th>
                          <th scope="col">Quantite Item</th>
                          <th scope="col">Localisation</th>
                          <th scope="col">QR Code</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($liste_items as $itemsQr)
                            <tr>
                                <th scope="row">{{ ($liste_items->perPage() * ($liste_items->currentPage() - 1 ))+ $loop->iteration  }}</th>
                                <td>{{ ucfirst($itemsQr->name) }}</td>
                                <td>{{ ucfirst($itemsQr->description) }}</td>
                                <td>{{ ucfirst($itemsQr->Typeitems ? $itemsQr->Typeitems->type_name : 'Aucune donnée') }}</td>
                                <td>{{ ucfirst($itemsQr->Quantites ? $itemsQr->Quantites->quantite : 'Aucune donnée') }}</td>
                                <td>{{ ucfirst($itemsQr->Localisations ? $itemsQr->Localisations->name : 'Aucune donnée') }}</td>
                                <td><img src="{{ Storage::url("qr_codes/user_{$itemsQr->id}.svg") }}" alt="Qr Code"></td>
                                <td>
                                <a class="btn btn-primary" href="{{ route('detail-materiel', $itemsQr) }}"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-primary" href="{{ route('modification-materiel', $itemsQr->id) }}"><i class="bi bi-pencil"></i></a>
                                <a class="btn btn-danger" href="{{ route('supprimer-materiel', $itemsQr->id) }}"><i class="bi bi-trash"></i></a>
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
