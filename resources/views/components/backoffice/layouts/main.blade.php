<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'backoffice') }}</title>

        @vite([
        'resources/bootstrap/shared/js/color-modes.js',
        'resources/sass/app.scss', 
        'resources/bootstrap/dashboard/dashboard.css', 
        'resources/js/app.js', 

        ])
    </head>
    <body>        
        <div id="app">
            {{ $slot }}
        </div>

        @yield('scripts')

        <!-- FOOTER -->
        <footer class="container">
            <p>&copy; backoffice 2023 &middot; version 1.0.0</p>
        </footer>

        @vite([
                'resources/bootstrap/dashboard/dashboard.js'
        ])

    </body>
</html>
