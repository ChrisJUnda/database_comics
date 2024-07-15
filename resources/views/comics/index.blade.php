@extends('layouts.app')
@section('main')
    <h1>
        Index Fumetti
    </h1>
    <a href="{{ route('comics.show') }}">
        Crea Nuovo Fumetto
    </a>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">
                    {{ $comic->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
