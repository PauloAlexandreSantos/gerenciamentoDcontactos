@extends('layouts.merge.dashboard')
@section('titulo', 'Gerenciamento de Contactos')
@section('content')

    <a href="{{ route('people.index') }}">Pessoas</a>
<br>
    <a href="{{ route('country.index') }}">Contactos p/ País</a>
@endsection
