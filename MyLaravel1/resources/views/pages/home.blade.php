@extends('layouts.main-layout')

@section('content')
    <div id="container">
        <div id="movies">
            <h1>
                Movies
            </h1>
            <ul>
                @foreach ($movies as $movie)
                    <li>
                        <a href="{{route('movie', $movie -> id)}}">
                            [{{$movie -> id}}]
                            {{$movie -> title}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection