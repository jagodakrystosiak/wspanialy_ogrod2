<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jagoda Krystosiak">
        <link rel="icon" type="{{ asset('images/icon.png') }}" sizes="310x310" href="{{ asset('images/icon.png') }}">

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/form.css') }}" rel="stylesheet">
        <link href="{{ asset('css/media.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navigation.css') }}" rel="stylesheet">
        <link href="{{ asset('css/positioning.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tables.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ asset('js/lightbox.js') }}"></script> 
        <script src="{{ asset('js/funkcje.js') }}"></script>
    </head>
    <body>
        <header>
            @include('layouts.navbar')
        </header>
        <section>
            @yield('content')
        </section>
        <footer>
            <img src="{{ asset('images/trawa-tło.png') }}" alt="Trawa">
            &copy;JK
        </footer>
    </body>
</html>