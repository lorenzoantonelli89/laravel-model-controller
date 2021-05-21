@extends('layouts.main-layout')

@section('content')
    <div id="container">
        <div class="movie">
            <h1>
                Movie
            </h1>
            <h2>
                [{{ $movie -> id }}]
                {{ $movie -> title }}
            </h2>
            <h2>
                {{ $movie -> original_title }} 
            </h2>
            <p>
                {{$movie -> nationality}}
            </p>
            <p>
                {{$movie -> date}}
            </p>

            <a href="{{route('home')}}">
                BACK to HOME
            </a>
        </div>
    </div>
@endsection