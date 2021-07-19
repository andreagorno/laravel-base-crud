@extends('layouts.main')

@section('content')
    <h1>{{ $comic->title }}</h1>

    <div class="row my-4">
        <div class="col-2">
            <img class="img-fluid" src="{{ $comic->img }}" alt="{{ $comic->title }}">
        </div>
        <div class="col-10">
            <h4>Serie</h4>
            <p>{{ $comic->series }}</p>
            <h4>Tipo</h4>
            <p>{{ $comic->type }}</p>
            <h4>Data di Uscita</h4>
            <p>{{ $comic->sale_date }}</p>
            <h4>Prezzo</h4>
            <p>{{ $comic->price }} &euro;</p>
            <h4>Descrizione</h4>
            <p>{{ $comic->description }}</p>
            
        </div>
    </div>

    <div class="mt-4">
        <a class="btn btn-primary" href="{{ route("comics.index") }}">Torna alla tabella</a>
    </div>
@endsection