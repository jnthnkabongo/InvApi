<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Inventaire Bboxx</title>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}">
    <link href="{{asset('assets/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap-5.2.3-dist//css//bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap-5.2.3-dist//css//bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fontawesome-free-6.2.1-web/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap-5.2.3-dist/css/sidebars.css')}}" rel="stylesheet">
    <link href="{{asset('assets/cdnjs/toastr.min.css')}}">
</head>
<body style="background-image: url('{{ asset('assets/images/logistique-10.png') }}'); background-size: cover; background-position: center; height: 500px">
    <div class="container-fluid">
        @yield('content')
    </div>
</body>
</html>
