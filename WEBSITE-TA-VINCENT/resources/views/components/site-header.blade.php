@props(['active' => null])

@php
    $anchor = fn (string $id) => route('home').'#'.$id;
    $navClass = fn (?string $key) => $active === $key
        ? 'text-umkm-sage-dark font-semibold'
        : 'text-umkm-muted transition hover:text-umkm-brown';
@endphp

<header class="fixed inset-x-0 top-0 z-50 border-b border-umkm-sand/60 bg-umkm-cream/90 backdrop-blur-md">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
        <a href="{{ $anchor('beranda') }}" class="flex shrink-0 items-center gap-2">
            <span class="flex h-10 w-10 items-center justify-center rounded-full bg-umkm-sage/15 text-umkm-sage">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                    <path d="M12 3c-4 4-6 8-6 12a6 6 0 1 0 12 0c0-4-2-8-6-12Z" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 11v10" stroke-linecap="round"/>
                </svg>
            </span>
            <span class="text-base font-bold tracking-tight text-umkm-brown sm:text-lg">UMKM Bersama Maju</span>
        </a>

        <nav class="hidden items-center gap-8 text-sm font-medium xl:flex">
            <a href="{{ $anchor('beranda') }}" class="{{ $navClass('beranda') }}">Beranda</a>
            <a href="{{ $anchor('tentang') }}" class="{{ $navClass('tentang') }}">Tentang Kami</a>
            <a href="{{ $anchor('produk') }}" class="{{ $navClass('produk') }}">Produk</a>
            <a href="{{ $anchor('kategori') }}" class="{{ $navClass('kategori') }}">Kategori</a>
            <a href="{{ $anchor('berita') }}" class="{{ $navClass('berita') }}">Berita</a>
            <a href="{{ $anchor('kontak') }}" class="{{ $navClass('kontak') }}">Kontak</a>
        </nav>

        <div class="flex items-center gap-3 sm:gap-4">
            <button type="button" class="rounded-full p-2 text-umkm-brown transition hover:bg-umkm-sand/80" aria-label="Keranjang">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
                </svg>
            </button>
            @auth
                <a href="{{ route('dashboard') }}" class="hidden rounded-full border-2 border-umkm-sand px-4 py-2 text-sm font-semibold text-umkm-brown sm:inline-flex sm:px-5">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="rounded-full border-2 border-umkm-brown px-4 py-2 text-sm font-semibold text-umkm-brown transition hover:bg-umkm-brown hover:text-white sm:px-5">Keluar</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="rounded-full border-2 border-umkm-brown px-4 py-2 text-sm font-semibold text-umkm-brown transition hover:bg-umkm-brown hover:text-white sm:px-5">Masuk</a>
                <a href="{{ route('register') }}" class="hidden rounded-full bg-umkm-sage px-4 py-2 text-sm font-semibold text-white transition hover:bg-umkm-sage-dark sm:inline-flex sm:px-5">Daftar</a>
            @endauth
            <details class="relative xl:hidden">
                <summary class="list-none cursor-pointer rounded-full border-2 border-umkm-sand bg-white px-3 py-2 text-sm font-semibold text-umkm-brown [&::-webkit-details-marker]:hidden">Menu</summary>
                <div class="absolute right-0 mt-2 w-52 rounded-2xl border border-umkm-sand bg-white p-3 shadow-lg">
                    <nav class="flex flex-col gap-1 text-sm font-medium">
                        <a class="rounded-xl px-3 py-2 {{ $active === 'beranda' ? 'bg-umkm-sage/10 text-umkm-sage-dark' : 'text-umkm-muted hover:bg-umkm-cream' }}" href="{{ $anchor('beranda') }}">Beranda</a>
                        <a class="rounded-xl px-3 py-2 {{ $active === 'tentang' ? 'bg-umkm-sage/10 text-umkm-sage-dark' : 'text-umkm-muted hover:bg-umkm-cream' }}" href="{{ $anchor('tentang') }}">Tentang Kami</a>
                        <a class="rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-cream" href="{{ $anchor('produk') }}">Produk</a>
                        <a class="rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-cream" href="{{ $anchor('kategori') }}">Kategori</a>
                        <a class="rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-cream" href="{{ $anchor('berita') }}">Berita</a>
                        <a class="rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-cream" href="{{ $anchor('kontak') }}">Kontak</a>
                    </nav>
                </div>
            </details>
        </div>
    </div>
</header>
