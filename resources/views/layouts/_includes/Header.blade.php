<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="">


    <title>@yield('titulo')</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="/dashboard/css/simplebar.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="/dashboard/css/feather.css">
    <link rel="stylesheet" href="/dashboard/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/dashboard/css/style.css">
    <link rel="stylesheet" href="/dashboard/css/select2.css">
    <link rel="stylesheet" href="/dashboard/css/dropzone.css">
    <link rel="stylesheet" href="/dashboard/css/uppy.min.css">
    <link rel="stylesheet" href="/dashboard/css/jquery.steps.css">
    <link rel="stylesheet" href="/dashboard/css/jquery.timepicker.css">
    <link rel="stylesheet" href="/dashboard/css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="/dashboard/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="/dashboard/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="/dashboard/css/app-dark.css" id="darkTheme" disabled>

    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>



</head>

<body class="vertical light">
    <div class="wrapper">






