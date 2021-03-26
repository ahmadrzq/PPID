<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="PPID Kementerian Dalam Negeri">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="K4GH55mcTEUidWR4ViQFx2UyTvD8fdi8WLa4CP4e">
    <title>PPID Kota Probolinggo</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/assets_v1/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Chart -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/ajax/libs/Chart.js/2.8.0/Chart.min.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/assets_v1/css/main.css')}}">
    <style type="text/css">
        .card.card-md img {
            width: 100% !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('web/layouts/header')
    <!-- /.navbar -->

    @yield('content')

    <!-- Footer -->
    @include('web/layouts/footer')
    
    
    <script type="text/javascript" src="{{asset('web/assets_v1/vendor/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/assets_v1/vendor/popper/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/assets_v1/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/assets_v1/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/assets_v1/js/sidebar-mobile.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/app.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>

</html>