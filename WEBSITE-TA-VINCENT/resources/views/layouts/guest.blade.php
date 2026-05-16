<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Autentikasi') — UMKM Bersama Maju</title>

    @fonts
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:600,700" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="relative min-h-screen overflow-x-hidden bg-umkm-cream font-sans text-umkm-brown antialiased">
    <x-auth-decorations />

    <div class="relative flex min-h-screen flex-col">
        <header class="relative z-10 border-b border-umkm-sand/40 bg-white/80 shadow-sm shadow-umkm-sand/15 backdrop-blur-md">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-8">
                <a href="{{ route('home') }}" class="group flex items-center gap-3 transition">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-umkm-forest text-white shadow-lg shadow-umkm-forest/30 ring-2 ring-umkm-gold/20 transition group-hover:scale-105 group-hover:shadow-xl">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                            <path d="M12 3c-4 4-6 8-6 12a6 6 0 1 0 12 0c0-4-2-8-6-12Z" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 11v10" stroke-linecap="round"/>
                        </svg>
                    </span>
                    <span class="text-base font-bold tracking-tight text-umkm-brown sm:text-lg">UMKM Bersama Maju</span>
                </a>
                <a href="{{ route('home') }}" class="rounded-full border border-transparent px-3 py-1.5 text-sm font-medium text-umkm-muted transition hover:border-umkm-sand hover:bg-white/60 hover:text-umkm-forest">
                    &larr; Kembali ke beranda
                </a>
            </div>
        </header>

        <main class="relative z-10 flex flex-1 flex-col items-center justify-center px-4 py-10 sm:px-6 sm:py-14">
            @if (session('status'))
                <div class="mb-6 w-full max-w-md rounded-2xl border border-umkm-sage/30 bg-white/90 px-4 py-3 text-center text-sm text-umkm-sage-dark shadow-sm backdrop-blur-sm">
                    {{ session('status') }}
                </div>
            @endif

            @yield('content')
        </main>

        <footer class="relative z-10 py-4 text-center">
            <p class="text-xs text-umkm-muted/80">© {{ date('Y') }} UMKM Bersama Maju</p>
        </footer>
    </div>

    @stack('scripts')
</body>
</html>
