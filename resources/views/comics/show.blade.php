@extends('layouts.app')
@section('main')
    <h1>
        {{ $comic->title }}
    </h1>
    <img src="{{ $comic->thumb }}" alt="">
    <p>
        Prezzo: {{ $comic->price }}
    </p>
    <p>
        {{ $comic->description }}
    </p>
    <p>
        Artisti: {{ $comic->artists }}
    </p>
    <p>
        Scrittori: {{ $comic->writers }}
    </p>
    <p>
        Serie: {{ $comic->series }}
    </p>
    <p>
        Data di pubblicazione: {{ $comic->sale_date }}
    </p>
    <p>
        Genere: {{ $comic->type }}
    </p>
@endsection
