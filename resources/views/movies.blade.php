@extends('layouts.base')

@section('contents')
    <div class="container">
        <h2 class="text-center">Movies</h2>
        <div class="row">
            @foreach ($colMovies as $movie)
            <div class="col-4">
                <div class="card p-3 mb-3">
                    <h5>Titolo: {{ $movie->title }}</h5>
                    <h6>Titolo originale: {{ $movie->original_title }}</h6>
                    <div>Nazione: {{ $movie->nationality }}</div>
                    <div>Anno di uscita: {{ $movie->date }}</div>
                    <div>Voto: {{ $movie->vote }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection