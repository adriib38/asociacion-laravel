@extends('layout')

@section('titulo', 'Inicio')

@section('contenido')
    <h1>AAAM</h1>
    <p>Nos gustan los mangos.</p>

    @auth
        <p>Estás logueado.</p>
        <p>Nombre: {{ Auth::user()->name }}</p>
    @else
        <p>No estás logueado.</p>
    @endauth
@endsection
