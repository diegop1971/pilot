<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'backoffice') }}</title>

        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

        @vite([
                'resources/js/app.js',
                'resources/sass/app.scss',  
            ])
    </head>
    <body>    
        <div id="app">
            <x-frontoffice.mainUsersNavBar></x-frontoffice.mainUsersNavBar>
            <x-frontoffice.home.header></x-frontoffice.home.header>
            {{ $slot }}
        </div>

        @yield('scripts')

        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
    </body>
</html>