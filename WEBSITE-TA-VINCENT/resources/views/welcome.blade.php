<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMKM Bersama Maju — Belanja Produk Lokal Berkualitas</title>
    <meta name="description" content="Temukan produk UMKM pilihan dari seluruh Indonesia. Dukung ekonomi lokal dengan belanja aman dan terpercaya.">

    @fonts

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700" rel="stylesheet">
        <style>
            body { font-family: 'Poppins', system-ui, sans-serif; margin: 0; background: #f9f5eb; color: #1a1a1a; }
        </style>
    @endif
</head>
<body class="min-h-screen bg-umkm-cream font-sans text-[#1a1a1a] antialiased">
    <header class="fixed inset-x-0 top-0 z-50 border-b border-umkm-sand/60 bg-umkm-cream/90 backdrop-blur-md">
        <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
            <a href="#" class="flex shrink-0 items-center gap-2">
                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-umkm-sage/15 text-umkm-sage">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <path d="M12 3c-4 4-6 8-6 12a6 6 0 1 0 12 0c0-4-2-8-6-12Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 11v10" stroke-linecap="round"/>
                    </svg>
                </span>
                <span class="text-base font-bold tracking-tight text-umkm-brown sm:text-lg">UMKM Bersama Maju</span>
            </a>

            <nav class="hidden items-center gap-8 text-sm font-medium text-umkm-muted xl:flex">
                <a href="#" class="text-umkm-sage-dark">Beranda</a>
                <a href="#tentang" class="transition hover:text-umkm-brown">Tentang Kami</a>
                <a href="#produk" class="transition hover:text-umkm-brown">Produk</a>
                <a href="#kategori" class="transition hover:text-umkm-brown">Kategori</a>
                <a href="#berita" class="transition hover:text-umkm-brown">Berita</a>
                <a href="#kontak" class="transition hover:text-umkm-brown">Kontak</a>
            </nav>

            <div class="flex items-center gap-3 sm:gap-4">
                <button type="button" class="rounded-full p-2 text-umkm-brown transition hover:bg-umkm-sand/80" aria-label="Keranjang">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
                    </svg>
                </button>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="rounded-full border-2 border-umkm-brown px-4 py-2 text-sm font-semibold text-umkm-brown transition hover:bg-umkm-brown hover:text-white sm:px-5">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="rounded-full border-2 border-umkm-brown px-4 py-2 text-sm font-semibold text-umkm-brown transition hover:bg-umkm-brown hover:text-white sm:px-5">Masuk / Daftar</a>
                    @endauth
                @else
                    <a href="#" class="rounded-full border-2 border-umkm-brown px-4 py-2 text-sm font-semibold text-umkm-brown transition hover:bg-umkm-brown hover:text-white sm:px-5">Masuk / Daftar</a>
                @endif
                <details class="relative xl:hidden">
                    <summary class="list-none cursor-pointer rounded-full border-2 border-umkm-sand bg-white px-3 py-2 text-sm font-semibold text-umkm-brown [&::-webkit-details-marker]:hidden">
                        Menu
                    </summary>
                    <div class="absolute right-0 mt-2 w-52 rounded-2xl border border-umkm-sand bg-white p-3 shadow-lg">
                        <nav class="flex flex-col gap-1 text-sm font-medium">
                            <a class="rounded-xl px-3 py-2 text-umkm-sage-dark bg-umkm-sage/10" href="#">Beranda</a>
                            <a class="rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-cream" href="#tentang">Tentang Kami</a>
                            <a class="rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-cream" href="#produk">Produk</a>
                            <a class="rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-cream" href="#kategori">Kategori</a>
                            <a class="rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-cream" href="#berita">Berita</a>
                            <a class="rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-cream" href="#kontak">Kontak</a>
                        </nav>
                    </div>
                </details>
            </div>
        </div>
    </header>

    <main>
        <section class="overflow-hidden pt-28 pb-16 sm:pt-32 sm:pb-20" id="produk">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-8">
                    <div class="order-2 lg:order-1">
                        <h1 class="text-3xl font-bold leading-tight tracking-tight text-umkm-brown sm:text-4xl lg:text-[2.75rem] lg:leading-[1.15]">
                            Belanja Produk UMKM Berkualitas, Bangun Ekonomi Bangsa
                        </h1>
                        <p class="mt-5 max-w-xl text-base leading-relaxed text-umkm-muted sm:text-lg">
                            Temukan produk UMKM pilihan terbaik dari seluruh Indonesia. Ayo belanja dan dukung pertumbuhan mereka!
                        </p>
                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="#kategori" class="inline-flex items-center gap-2 rounded-full bg-umkm-sage px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-umkm-sage-dark">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                                    <path d="M12 3c-4 4-6 8-6 12a6 6 0 1 0 12 0c0-4-2-8-6-12Z" stroke-linecap="round"/>
                                </svg>
                                Belanja Sekarang
                            </a>
                            <a href="#kategori" class="inline-flex items-center gap-2 rounded-full border-2 border-umkm-brown bg-transparent px-6 py-3 text-sm font-semibold text-umkm-brown transition hover:bg-umkm-brown hover:text-white">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                                </svg>
                                Jelajahi Produk
                            </a>
                        </div>
                    </div>

                    <div class="relative order-1 lg:order-2">
                        <div class="absolute -right-8 -top-8 h-[min(100%,420px)] w-[min(100%,420px)] rounded-[40%] bg-umkm-sand/90 blur-2xl lg:right-0 lg:top-0" aria-hidden="true"></div>
                        <div class="relative overflow-hidden rounded-[2rem] rounded-br-[3.5rem] bg-umkm-sand p-4 shadow-sm sm:p-6 lg:rounded-[2.5rem] lg:rounded-br-[4.5rem]">
                            <img
                                src="https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&w=900&q=80"
                                width="900"
                                height="700"
                                class="h-auto w-full rounded-3xl object-cover"
                                alt="Produk lokal: kopi, madu, dan camilan UMKM"
                                loading="eager"
                            >
                        </div>
                    </div>
                </div>

                <div class="mt-16 grid gap-10 border-t border-umkm-sand/80 pt-14 sm:grid-cols-3 sm:gap-8" id="tentang">
                    <div class="flex flex-col items-center text-center sm:items-start sm:text-left">
                        <span class="mb-4 flex h-14 w-14 items-center justify-center rounded-full border-2 border-umkm-sage/30 bg-white text-umkm-sage">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.967 3.746 3.746 0 0 1-3.967 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.967-1.043 3.745 3.745 0 0 1-1.043-3.967A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.967 3.746 3.746 0 0 1 3.967-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.967 1.043 3.745 3.745 0 0 1 1.043 3.967A3.745 3.745 0 0 1 21 12Z"/></svg>
                        </span>
                        <h2 class="text-lg font-bold text-umkm-brown">Kualitas Terjamin</h2>
                        <p class="mt-2 text-sm leading-relaxed text-umkm-muted">Produk terbaik yang dikurasi dari UMKM terpercaya.</p>
                    </div>
                    <div class="flex flex-col items-center text-center sm:items-start sm:text-left">
                        <span class="mb-4 flex h-14 w-14 items-center justify-center rounded-full border-2 border-umkm-sage/30 bg-white text-umkm-sage">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0 5.15-2.29M12 12.75V21"/></svg>
                        </span>
                        <h2 class="text-lg font-bold text-umkm-brown">Dukung Ekonomi Lokal</h2>
                        <p class="mt-2 text-sm leading-relaxed text-umkm-muted">Setiap transaksi membantu pelaku usaha di daerahmu berkembang.</p>
                    </div>
                    <div class="flex flex-col items-center text-center sm:items-start sm:text-left">
                        <span class="mb-4 flex h-14 w-14 items-center justify-center rounded-full border-2 border-umkm-sage/30 bg-white text-umkm-sage">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/></svg>
                        </span>
                        <h2 class="text-lg font-bold text-umkm-brown">Aman &amp; Terpercaya</h2>
                        <p class="mt-2 text-sm leading-relaxed text-umkm-muted">Pembayaran dan pengiriman mengikuti standar keamanan platform.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white pb-20 pt-4 sm:pb-24" id="kategori">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <p class="inline-block rounded-full bg-umkm-cream px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-umkm-muted">Kategori Populer</p>
                    <h2 class="mx-auto mt-4 max-w-3xl text-2xl font-bold text-umkm-brown sm:text-3xl">
                        Temukan Produk UMKM Sesuai Kebutuhan Anda
                    </h2>
                </div>

                <div class="mt-12 grid grid-cols-2 gap-4 sm:gap-6 md:grid-cols-4">
                    @php
                        $categories = [
                            ['label' => 'Kerajinan Tangan', 'img' => 'https://images.unsplash.com/photo-1610701596007-11502817dcfe?auto=format&fit=crop&w=500&q=80'],
                            ['label' => 'Makanan & Minuman', 'img' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=500&q=80'],
                            ['label' => 'Camilan & Keripik', 'img' => 'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=500&q=80'],
                            ['label' => 'Madu & Herbal', 'img' => 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=500&q=80'],
                            ['label' => 'Kopi & Teh', 'img' => 'https://images.unsplash.com/photo-1497935586351-b67a49e012bf?auto=format&fit=crop&w=500&q=80'],
                            ['label' => 'Gerabah & Keramik', 'img' => 'https://images.unsplash.com/photo-1610701596100-87b74d1c7ea5?auto=format&fit=crop&w=500&q=80'],
                            ['label' => 'Tekstil & Batik', 'img' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=500&q=80'],
                            ['label' => 'Oleh-oleh Khas', 'img' => 'https://images.unsplash.com/photo-1606787366850-de633012004b?auto=format&fit=crop&w=500&q=80'],
                        ];
                    @endphp
                    @foreach ($categories as $cat)
                        <a href="#" class="group block text-center">
                            <div class="overflow-hidden rounded-3xl bg-umkm-sand/50 shadow-sm ring-1 ring-umkm-sand transition group-hover:ring-umkm-sage/40">
                                <img src="{{ $cat['img'] }}" alt="{{ $cat['label'] }}" class="aspect-[4/3] w-full object-cover transition duration-300 group-hover:scale-105" width="500" height="375" loading="lazy">
                            </div>
                            <p class="mt-3 text-sm font-semibold text-umkm-brown sm:text-base">{{ $cat['label'] }}</p>
                        </a>
                    @endforeach
                </div>

                <div class="mt-12 flex justify-center">
                    <a href="#" class="inline-flex rounded-full bg-umkm-sage px-8 py-3.5 text-sm font-semibold text-white shadow-sm transition hover:bg-umkm-sage-dark">
                        Lihat Semua Kategori
                    </a>
                </div>
            </div>
        </section>

        <section class="border-t border-umkm-sand bg-umkm-cream py-12" id="berita">
            <div class="mx-auto max-w-7xl px-4 text-center text-sm text-umkm-muted sm:px-6 lg:px-8">
                <p id="kontak">Butuh bantuan atau ingin menjual di platform ini? <a href="mailto:kontak@umkmbersamamaju.test" class="font-semibold text-umkm-sage-dark underline-offset-2 hover:underline">Hubungi kami</a></p>
            </div>
        </section>
    </main>

    <footer class="bg-umkm-brown py-8 text-center text-sm text-umkm-cream/90">
        <p>&copy; {{ date('Y') }} UMKM Bersama Maju. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
