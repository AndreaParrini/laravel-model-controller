@extends('layout.layout')

@section('content')
<div class="container">
    <ul>
        <li><a href="/topmovies">Top 3 Movies</a></li>
    </ul>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-4">
            <div class="card">
                <div class="title">
                    <h3>{{$movie['title']}}</h3>
                </div>
                <div class="original-title">
                    Original Title: {{$movie['original_title']}}
                </div>
                <div class="nationality">
                    Nation: {{$movie['nationality']}}
                </div>
                <div class="date">
                    Date: {{$movie['date']}}
                </div>
                <div class="vote">
                    Vote: {{$movie['vote']}}
                </div>
            </div>
        </div>            
        @endforeach
    </div>
</div>
@endsection