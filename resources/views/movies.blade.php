@extends('layouts.base')

@section('contents')
    <div class="container">
        <h2>Movies</h2>
        <div class="row">
            @foreach ($colMovies as $movie)
            <div class="col-4">
                <div class="card h-100">
                    <h5>{{ $movie->title }}</h5>
                    <h6>{{ $movie->original_title }}</h6>
                    <div>{{ $movie->nationality }}</div>
                    <div>{{ $movie->date }}</div>
                    <div>{{ $movie->vote }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection