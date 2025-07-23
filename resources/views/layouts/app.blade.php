<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    @stack('styles')
</head>

<body>
    <div class="container mx-auto">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>