<!doctype html>
<html>
<head>
    @include('partials.head')
</head>
<body>
<div class="container-fluid">

    <header class="row">
        @include('partials.navbar')
    </header>

    <div id="main" class="row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('partials.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>

    </div>

    <footer class="row">
        @include('partials.footer')
    </footer>

</div>
</body>
</html>
