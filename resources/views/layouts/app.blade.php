<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>


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
       <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">

                    <div class="row">
                        <div class="col-2 ">
                            <img src="{{ asset('images/ulb-icon.png') }}" class="img-fluid d-block mx-auto mx-md-0" alt="Responsive image">
                        </div>
                        <div class="col-3">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-6 ml-md-auto text-center">

                            <img src="{{ asset('images/hedrine6b.png') }}" class="img-fluid" alt="Responsive image">

                        </div>
                    </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="col-10 ">
                            <img src="{{ asset('images/universite-grenoble.png') }}" class="img-fluid d-block mx-auto " style="margin-left:12rem" alt="Responsive image">
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    {!! NoCaptcha::renderJs() !!}
    <script src="{{ asset('/adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


</body>
</html>
