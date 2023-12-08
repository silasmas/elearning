<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>{{config('app.name') }} | {{isset($titre)?$titre:""}}</title>
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon/favicon.ico') }}">
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--owl carousel css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!--magnific popup css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--font awesome css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!--meanmenu css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/meanmenu.css') }}">
    <!--animate css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <!--star preloader-->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell align-middle">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!--end preloader-->
