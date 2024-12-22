@extends('layouts.entete')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="card">
            <div class="row m-3">
                <div class="col-lg-2">
                    <a class="btn btn-primary" href="{{ route('dashboard') }}"><i class="bi bi-house-fill"></i>&nbsp; Accueil</a>
                </div>
                <div class="col-lg-8 text-center"><h2>Création d'un utilisateur </h2></div>
                <div class="col-lg-2 text-center"></div>
            </div>
        </div>
        <div class="card">

            <div class="card-body">
                <form class="row justify-content-center g-3" action="{{ route('soumission-utilisateurs') }}" method="POST">
                    @csrf
                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Noms</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <div class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <div class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="col-5">
                        <label for="inputAddress" class="form-label">Role</label>
                        <select name="role_id" id="role_id" class="form-select">
                            <option value="">Choisissez un role</option>
                            @foreach ($liste_roles as $roles)
                                <option value="{{ $roles->id }}">{{ ucfirst($roles->role )}}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">
                            @error('role_id')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="inputPassword4" class="form-label">Region</label>
                        <select name="region_id" id="region_id" class="form-select">
                            <option value="">Choississez une region</option>
                            @foreach ($liste_regions as $regions)
                                <option value="{{ $regions->id }}">{{ ucfirst($regions->name )}}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">
                            @error('region_id')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-10">
                        <label for="inputPassword4" class="form-label">Mot de passe </label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="col-md-10">
                        <button type="submit" class="btn btn-primary w-100">Enregistrer</button>
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
