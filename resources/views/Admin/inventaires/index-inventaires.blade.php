@extends('layouts.entete')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="card">
            <div class="row m-3">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 text-center"><h2>Liste matériels inventoriés</h2></div>
                <div class="col-lg-3 text-center">
                    <a class="btn btn-primary" href=""> <i class="bi bi-plus-circle-fill"></i>&nbsp; Ajouter</a>
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
                        <th scope="col">N</th>
                        <th scope="col">Utilisateur</th>
                        <th scope="col">Item</th>
                        <th scope="col">Date inventaire</th>
                        <th scope="col">Actions</th>
                      </thead>
                      <tbody>
                        @forelse ( $liste_inventaires as $inventaires)
                            <tr>
                                <td scope="col">{{ ($liste_inventaires->perPage() * ($liste_inventaires->currentPage() - 1 ))+ $loop->iteration }}</td>
                                <td scope="col">{{ ucfirst($inventaires->User ? $inventaires->User->name : 'Aucune donnée')}}</td>
                                <td scope="col">{{ ucfirst($inventaires->Item ? $inventaires->Item->name : 'Aucune donnée' )}}</td>
                                <td scope="col">{{ ucfirst($inventaires->date_inventaire)}}</td>
                                <td>
                                    <a class="btn btn-primary" href=""><i class="bi bi-eye"></i></a>
                                    <a class="btn btn-primary" href=""><i class="bi bi-pencil"></i></a>
                                    <a class="btn btn-danger" href=""><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="cell" colspan="12">
                                    <div class="" style="text-align: center">Aucun item a été enregistrer</div>
                                </td>
                            </tr>
                        @endforelse
                        <tr>


                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
</main>
