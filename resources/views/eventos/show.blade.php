@extends('layout')

@section('titulo', 'Evento')

@section('contenido')
    <h1>{{ $event->name }}</h1>
    <p>{{ $event->date }} a las {{ $event->hour }}</p>
    <p>Descripción: {{ $event->description }}</p>
    <p>{{ $event->location }}</p>
    <p>Tags: {{ $event->tags }}</p>

@endsection


