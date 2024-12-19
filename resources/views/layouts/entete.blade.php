<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/vendor/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/simple-datatables/style.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
          <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/images/téléchargement.jpeg') }}" alt="">
            <span class="d-none d-lg-block"></span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>

        <div class="search-bar">

        </div>

        <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
              <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
              </a>
            </li>



            <li class="nav-item dropdown pe-3">
                @auth()
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="{{ asset('assets/images/avatar3.png') }}" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ Str::upper(\Illuminate\Support\Facades\Auth::user()->roles->role ) }}</span>
              </a>

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                    <li class="dropdown-header">
                    <h6>{{ Str::upper(\Illuminate\Support\Facades\Auth::user()->name ) }}</h6>
                    <span>Web Designer</span>
                    </li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>

                    <li>
                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                        <i class="bi bi-person"></i>
                        <span>Mon profil</span>
                    </a>
                    </li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>

                    <li>
                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                        <i class="bi bi-gear"></i>
                        <span>Parametres</span>
                    </a>
                    </li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Se déconnecter</span>
                        </a>
                    </li>

              </ul>
              @endauth
            </li>
          </ul>
        </nav>
      </header>
      <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">

            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('liste-inventaires') }}">
                <i class="bi bi-clipboard-data"></i>
                <span>Inventaires</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('liste-materiels') }}">
                <i class="bi bi-grid-3x3-gap-fill"></i>
                <span>Matériels </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('liste-utilisateurs') }}">
                <i class="bi bi-people-fill"></i>
                <span>Utilisateurs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('liste-localisations') }}">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Localisations</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('liste-parametres') }}">
                <i class="bi bi-gear-fill"></i>
                <span>Parametres</span>
                </a>
            </li>
        </ul>
      </aside>
      @yield('conetent')

      <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
      <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('assets/vendor/chart.js/chart.umd.js"></script')}}"></script>
      <script src="{{ asset('assets/vendor/echarts/echarts.min.js')}}"></script>
      <script src="{{ asset('assets/vendor/quill/quill.min.js')}}"></script>
      <script src="{{ asset('assets/vendor/simple-datatables/simple-datables.js')}}"></script>
      <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
      <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
