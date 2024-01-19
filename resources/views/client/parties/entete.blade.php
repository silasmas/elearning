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
    <link rel="stylesheet" href="{{ asset('client/assets/ouvert/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/ouvert/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/ouvert/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/ouvert/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/ouvert/css/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/ouvert/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/ouvert/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/ouvert/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/ouvert/css/responsive.css') }}">
    <!--color css-->
    {{-- <link rel="stylesheet" id="triggerColor" href="{{ asset('client/assets/ouvert/css/color-0.css') }}"> --}}
    <!-- modernizr css -->
    <script src="{{ asset('client/assets/ouvert/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--star preloader-->
    {{-- <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell align-middle">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--end preloader-->
    <div id="preloader">
        <div class="loader"></div>
    </div>
