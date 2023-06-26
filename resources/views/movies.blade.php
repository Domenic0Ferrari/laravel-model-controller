@extends('layouts.base')

@section('contents')
    <div class="container">
        <h2>Movies</h2>
        <div class="row">
            @foreach ($colMovies as $movie)
            <div class="col-4">
                <div class="card">
                    <h5>{{ $movie->title }}</h5>
                    <h6></h6>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection