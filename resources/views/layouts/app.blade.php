<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    <main>
        @yield('main-content')
    </main>
    @include('partials.footer')
</body>
</html>