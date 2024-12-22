@extends('layouts.entete')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="card">
            <div class="row m-3">
                <div class="col-lg-2">
                    <a class="btn btn-primary" href="{{ route('dashboard') }}"><i class="bi bi-house-fill"></i>&nbsp; Accueil</a>
                </div>
                <div class="col-lg-8 text-center"><h2>Création type matériel </h2></div>
                <div class="col-lg-2 text-center"></div>
            </div>
        </div>
        <div class="card">

            <div class="card-body">
                <form class="row justify-content-center g-3" action="{{ route('soumission-type-item') }}" method="POST">
                    @csrf
                    <div class="col-md-10">
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Matériel (item)</label>
                            <div class="col-sm-10">
                                <input type="text" name="type_name" class="form-control">
                            </div>
                            <div class="text-danger">
                                @error('type_name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
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
