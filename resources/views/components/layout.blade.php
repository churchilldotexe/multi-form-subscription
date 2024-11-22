<!DOCTYPE html>
<html lang="en" class="size-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <title>{{ $title }}</title>
</head>

<body class="size-full relative">
    <header class="h-1/4 relative">
        <x-nav />
        <img src="{{ asset('images/bg-sidebar-mobile.svg') }}" role="presentation" alt="" fetchpriority="high"
            class="absolute inset-0 -z-10 size-full object-cover " />
    </header>
    <main class="h-3/4 bg-slate-200">
        {{ $slot }}
    </main>
    <!-- FIX: all of the affected page that doesnt have the footer  -->
    <footer>
        {{ $footer }}
    </footer>
    {{-- here is the back button --}}
</body>

</html>
