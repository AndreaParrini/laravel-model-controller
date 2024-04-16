<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Model-Controller</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="container">
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
        
    </body>
</html>
