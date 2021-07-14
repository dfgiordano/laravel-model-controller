<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <title>Laravel's movies</title>
    </head>
    <body>
        @include('header')
        {{-- @dump($movies) --}}
        @include('main')
        @include('footer')
       
    </body>
</html>
