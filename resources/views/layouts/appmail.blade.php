<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{--Font awesome cdn--}}
    <link href="{{ asset('css/hedrine.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-md">
            <div class="container">
                <!-- Logo ulb et logo hedrine entête -->

                <header>
                    <img src="{{ asset('images/ulb-icon.png') }}" class="img-fluid d-block mx-auto mx-md-0"  alt="Responsive image">
                    <img src="{{ asset('images/hedrine6b.png') }}" style="width: 42%;float: right;" class="img-fluid d-block mx-auto mx-md-0 hedrine_logo"  alt="Responsive image">
                </header>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
