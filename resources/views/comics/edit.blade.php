@extends('layouts.main')

@section('content')
    <h1>Stai modificando: {{ $comic->title }}</h1>
    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Visualizza</a>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" class="form-control" id="Title" placeholder="Inserisci il titolo del Comic" name="Title">
        </div>
        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" placeholder="Inserisci il nome della Series" name="series">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" placeholder="Inserisci il nome della Series" name="type">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo di vendita" name="price">
        </div>
        <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="date" class="form-control" id="sale_date" placeholder="Inserisci la data di uscita" name="sale_date">
        </div>
        <div class="form-group">
            <label for="img">IMG</label>
            <input type="text" class="form-control" id="img" placeholder="Inserisci l'url dell'immagine" name="img">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci descrizione del Comic" rows="4"></textarea>
          </div>
        <button type="submit" class="btn btn-primary">Salva</button>
      </form>
@endsection