@extends('layout.app')

@section('title', ' | Prueba de header')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="container">
        <h1>Pruebas y Ejemplos de sintaxis</h1>
        {{-- FORMA DE HACER LINKS EN BLADES --}}
        <a href="{{ url('/persoas/index') }}">Index de Persoas</a>
    </section>



@stop
