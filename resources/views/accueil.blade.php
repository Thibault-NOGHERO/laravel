@extends('layouts/main')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cours laravel</title>
    </head>
    <body class="antialiased">

        @section('content')
            <h1>Home</h1>
            <p>Bienvenue sur le site de couisine. Un site test.</p>
        @endsection
    </body>
</html>
