<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') — UMKM Bersama Maju</title>

    @fonts

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="min-h-screen bg-[#f0f2f5] font-sans text-umkm-brown antialiased">
    <div class="flex min-h-screen">
        <x-dashboard.sidebar :active="$active ?? 'beranda'" />

        <div class="flex min-w-0 flex-1 flex-col lg:ml-[272px]">
            <x-dashboard.topbar />

            <div class="flex min-h-0 flex-1">
                <main class="min-w-0 flex-1 overflow-y-auto p-4 sm:p-5 lg:p-6 xl:mr-[292px]">
                    @if (session('success'))
                        <div class="mb-4 rounded-xl border border-umkm-sage/30 bg-white px-4 py-3 text-sm font-medium text-umkm-sage-dark shadow-sm" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @yield('content')
                </main>

                <x-dashboard.right-panel />
            </div>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
