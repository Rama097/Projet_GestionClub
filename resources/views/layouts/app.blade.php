<!doctype html> 
<html lang="en">

<head>
<title> Gestion de Club </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/charts-c3/plugin.css') }}"/>

<!-- MAIN Project CSS file -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body data-theme="light" class="font-nunito">
<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="assets/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
            <p>Vueillez patientez svp...</p>
        </div>
    </div>


    {{-- Condition qui permet de se connecter avant d'acceder au left bar, navbar et rightbar --}}
   @auth      
    @include('layouts.navbar')  
        
    @include('layouts.leftbar')


    @include('layouts.rightbar')
   @endauth
    
    <!-- mani page content body part -->
    <div id="main-content">
         @yield('content') 
    </div>
    
</div>
<!-- Javascript -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>    
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>

<!-- page vendor js file -->
<script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>

<!-- page js file -->
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
