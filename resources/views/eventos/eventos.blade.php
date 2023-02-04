@extends('layout')

@section('titulo', 'Eventos')

@section('contenido')
    <h1>Eventos</h1>
    <h2>Proximos eventos.</h2>

    @if (count($events) == 0)
        <p>No hay eventos próximos.</p>
    @else
        @foreach ($events as $event)
            <article class="event">
                {{ $event->name }}
                {{ $event->date }}
                {{ $event->description }}
                {{ $event->location }}
                {{ $event->hour }}
                {{ $event->tags }}
            </article>
        @endforeach
    @endif

@endsection


