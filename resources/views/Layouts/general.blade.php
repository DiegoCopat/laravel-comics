<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('resources/sass/app.scss') }}">
        <title>@yield('page-title', 'Laravel | Comics')</title>
    </head>

    <body>
        <header>
            @include('partials.header')
        </header>
        
        <main>
            @yield('main-top')
            @yield('main-center')
            @yield('main-bottom')
        </main>
    </body>

</html>