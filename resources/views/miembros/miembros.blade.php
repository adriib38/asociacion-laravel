@extends('layout')

@section('titulo', 'Miembros')

@section('contenido')
    <h1>Miembros ({{ count($members) }})</h1>

    @if (count($members) == 0)
        <p>No hay miembros.</p>
    @else
        {{-- Imprimir todos los miembros --}}
        @foreach ($members as $member)
            <article class="member">
                <img src="{{ $member->profile_photo_path }}" alt="Foto de {{ $member->name}}" width="100">
                <h2>{{ $member->name }}</h2>
                {{-- Solo los usuarios logeados podrán acceder a la ficha del evento --}}
                @auth
                    <a href="{{ route('members.show', $member->id) }}">Ver usuario</a>
                @else
                    <a href="{{ route('login') }}">Inicia sesión para ver más información del miembro</a>
                @endauth
            </article>
        @endforeach
    @endif

@endsection


