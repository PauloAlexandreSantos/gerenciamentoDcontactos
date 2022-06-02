<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Sistema de Gerenciamento de Contactos feito como teste de admissão para a alfasoft">
    <meta name="author" content="Paulo Alexandre Fernandes dos Santos, LINKEDIN:chandinho">


    <title>@yield('titulo')</title>

    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>



</head>
