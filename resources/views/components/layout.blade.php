<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <title>{{ $title }}</title>
</head>

<body class="p-8">
    <header>
        <h1>{{ $heading }}</h1>
        <x-nav />
    </header>
    <main>{{ $slot }}</main>
</body>

</html>
