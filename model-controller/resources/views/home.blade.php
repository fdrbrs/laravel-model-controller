<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <style>

            h1{
                text-align: center;
            }

            .movies{
                display: flex;
                flex-wrap: wrap;
            }

            .card{
                width: 220px;
                margin: 2rem;
                border: 1px solid black;
                border-radius: 10px;
                padding: 1rem;
            }
        </style>
           
    </head>
    <body>
       <h1>MOVIES</h1>

       <div class="movies">

            @foreach($movies as $movie)

            <div class="card">

            <div class="line">
                <span>Titolo:</span>
                <strong>{{$movie['title']}}</strong>
            </div>
            <div class="line">
                <span>Titolo Originale:</span>
                <strong>{{$movie['original_title']}}</strong>

            </div>
            <div class="line">
                <span>Nazionalità:</span>
                <strong>{{$movie['nationality']}}</strong>

            </div>
            <div class="line">
                <span>Data:</span>
                <strong>{{$movie['date']}}</strong>

            </div>
            <div class="line">
                <span>Voto:</span>
                <strong>{{$movie['vote']}}</strong>

            </div>

            </div>

            @endforeach

       </div>
    </body>
</html>
