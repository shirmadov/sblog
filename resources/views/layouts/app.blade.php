<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
{{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
        @guest

        @else
            <link rel="stylesheet" href="/css/profile.css?v={{ Config::get('app.media_files_version') }}">
        @endguest
        <link rel="stylesheet" href="/css/main.css?v={{ Config::get('app.media_files_version') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Saira:wght@100;400;500;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>

        @yield('headers')
    </head>
    <body>
    @include('layouts.header.header')
    @yield('content')
    @yield('js')
    </body>
</html>
