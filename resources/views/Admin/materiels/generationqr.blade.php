@extends('layouts.entete')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="card">
            <div class="row m-3">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-6 text-center"><h2>Liste matériels </h2></div>
                <div class="col-lg-3 text-center">
                    <a class="btn btn-primary" href=""><i class="bi bi-plus-circle-fill"></i>&nbsp; Ajouter</a>
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
                          <th scope="col">Position</th>
                          <th scope="col">Age</th>
                          <th scope="col">Start Date</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($items as $itemsQr)
                            <tr>
                                <th scope="row">1</th>
                                <td>Raheem Lehner</td>
                                <td>Dynamic Division Officer</td>
                                <td>47</td>
                                <td><img src="{{ Storage::url("qr_codes/user_{$itemsQr->id}.svg") }}" alt="Qr Code"></td>
                                <td>
                                <a class="btn btn-primary" href="{{ route('create-qr') }}"><i class="bx bx-qr-scan"></i></a>
                                <a class="btn btn-primary" href=""><i class="bi bi-pencil"></i></a>
                                <a class="btn btn-danger" href=""><i class="bi bi-trash"></i></a>
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
