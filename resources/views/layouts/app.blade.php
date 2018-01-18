<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cat Friends!</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Indie+Flower');
        </style>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah');
        </style>
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <div id="app">

            <div class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="/">Cats!</a>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="content">
                    @yield('content')

                </div>
        </div>

        <!-- JavaScript -->
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
