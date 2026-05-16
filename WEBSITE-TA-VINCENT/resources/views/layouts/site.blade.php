<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'UMKM Bersama Maju')</title>
    <meta name="description" content="@yield('meta_description', 'Platform belanja produk UMKM berkualitas dari seluruh Indonesia.')">

    @fonts
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:600,700" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="relative flex min-h-screen flex-col bg-umkm-cream font-sans text-[#1a1a1a] antialiased">
    <x-site-background />
    <x-site-header :active="($active ?? null)" />

    <main class="relative flex-1">
        @yield('content')
    </main>

    @hasSection('footer')
        @yield('footer')
    @else
        <x-site-footer class="relative z-10 mt-auto" />
    @endif

    @stack('scripts')
</body>
</html>
