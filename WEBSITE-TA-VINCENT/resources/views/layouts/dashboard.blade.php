<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard Admin')</title>
    <meta name="description" content="Dashboard admin UMKM Bersama Maju." />

    @fonts
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:600,700" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="relative min-h-screen bg-umkm-cream font-sans text-[#1a1a1a] antialiased">
    <main class="min-h-screen">
        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>
