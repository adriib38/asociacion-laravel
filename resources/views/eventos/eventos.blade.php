@extends('layout')

@section('titulo', 'Eventos')

@section('contenido')
    <h1>Eventos</h1>
    <h2>Proximos eventos.</h2>

    @if (count($events) == 0)
        <p>No hay eventos próximos.</p>
    @else
        {{-- Imprimir todos los eventos --}}
        @foreach ($events as $event)
            <article class="event">
                {{ $event->name }}
                {{ $event->date }}
                {{ $event->description }}
                {{ $event->location }}
                {{ $event->hour }}
                {{ $event->tags }}
                <br>
                {{-- Solo los usuarios logeados podrán acceder a la ficha del evento --}}
                @auth
                    <a href="{{ route('events.show', $event->id) }}">Ver evento</a>
                @else
                    <a href="{{ route('login') }}">Inicia sesión para ver el evento</a>
                @endauth
            </article>
        @endforeach
    @endif

@endsection


