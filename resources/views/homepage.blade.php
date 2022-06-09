<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        <a href="{{route('pag2')}}">Pagina 2</a>
        <a href="{{route('pag3')}}">Pagina 3</a>
    </body>
</html>
