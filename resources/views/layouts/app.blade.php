<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

            

    <title>@yield('title') | SIS</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- styles -->
    <link href="{{ URL::asset('css/common/common.css') }}" rel="stylesheet">

    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/8cb45c8c3b.js" crossorigin="anonymous"></script>

</body>

</html>