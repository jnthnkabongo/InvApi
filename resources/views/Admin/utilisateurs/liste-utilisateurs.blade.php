@extends('layouts.entete')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="card">
            <div class="row m-3">
                <div class="col-lg-4">
                    <a class="btn btn-primary" href="{{ route('dashboard') }}"><i class="bi bi-house-fill"></i>&nbsp; Accueil</a>
                </div>
                <div class="col-lg-4 text-center"><h2>Liste utilisateur </h2></div>
                <div class="col-lg-4 text-center">
                    <a class="btn btn-primary" href="{{ route('creation-utilisateurs') }}"><i class="bi bi-plus-circle-fill"></i>&nbsp; Ajouter</a>
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
                          <th scope="col">E-mail</th>
                          <th scope="col">Roles</th>
                          <th scope="col">Regions</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($liste_utilisateurs as $utilisateur)
                            <tr>
                                <th scope="row">{{ ($liste_utilisateurs->perPage() * ($liste_utilisateurs->currentPage() - 1 ))+ $loop->iteration  }}</th>
                                <td>{{ ucfirst($utilisateur->name) }}</td>
                                <td>{{ ucfirst($utilisateur->email) }}</td>
                                <td>{{ ucfirst($utilisateur->Roles ? $utilisateur->Roles->role : 'Aucune donnée') }}</td>
                                <td>{{ ucfirst($utilisateur->Regions ? $utilisateur->Regions->name :'Aucune donnée') }}</td>
                                <td>
                                <a class="btn btn-primary" href="{{ route('create-qr') }}"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-primary" href="{{ route('afficher-modification-utilisateurs', $utilisateur->id) }}"><i class="bi bi-pencil"></i></a>
                                <a class="btn btn-danger" href="{{ route('supprimer-utilisateurs', $utilisateur->id) }}"><i class="bi bi-trash"></i></a>
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
