<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Primi Passi</title>
    </head>
    <body>
        <h1>Ciao, Benevnuto in laravel</h1>
        <a href="{{route('chisiamo')}}">chi Siamo</a>
        <a href="{{route('prodotti')}}">prodotti</a>
        <a href="{{route('franchising')}}">franchising</a>
        <a href="{{route('dovesiamo')}}">dove siamo</a>
        <a href="{{route('shoponline')}}">shop online</a>
    </body>
</html>
