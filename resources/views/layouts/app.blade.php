<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="antialiased">
    <header class="container-fluid bg-white">
        @include('partials.navbar')
    </header>
    <main id="main" class="row border">
        @yield('content')
    </main>
    <footer class="container-fluid site-footer">
        @include('partials.footer')
    </footer>
    </body>
</html>
