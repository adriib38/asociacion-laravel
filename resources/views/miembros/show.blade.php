@extends('layout')

@section('titulo', 'Miembro')

@section('contenido')
    <h1>{{ $member->name }}</h1>
    <img src="/{{ $member->profile_photo_path }}" alt="Foto de perfil de {{ $member->name }} " width="100px">
    <p>Rol: {{ $member->rol }}</p>
    <p>{{ $member->birthday }}</p>

    <br>
    @if ($member->email != null)
        Email: <a href="mailto:{{ $member->email }}" target="_blank">{{ $member->email }}</a>
    @endif
    <br>
    @if ($member->twitter != null)
        Twitter: <a href="https://twitter.com/{{ $member->twitter }}" target="_blank">@ {{ $member->twitter }}</a>
    @endif
    <br>
    @if ($member->instagram != null)
        Instagram: <a href="https://www.instagram.com/{{ $member->instagram }}" target="_blank">@ {{ $member->instagram }}</a>
    @endif
    <br>
    @if ($member->twitch != null)
        Twitch: <a href="https://twitch.tv/{{ $member->twitch }}" target="_blank">@ {{ $member->twitch }}</a>
    @endif

    <p><i>Miembro desde {{ $member->created_at }}.</i></p>

    

@endsection
