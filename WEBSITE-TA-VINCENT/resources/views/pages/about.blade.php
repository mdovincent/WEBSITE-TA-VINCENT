@extends('layouts.site', ['active' => 'about'])

@section('title', 'Tentang Kami — UMKM Bersama Maju')
@section('meta_description', 'Kenali misi, visi, dan tim UMKM Bersama Maju dalam mendukung pelaku usaha kecil menengah di Indonesia.')

@section('content')
    {{-- Hero --}}
    <section class="relative overflow-hidden py-14 sm:py-20">
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:gap-16 lg:px-8">
            <div>
                <p class="inline-flex items-center gap-2 rounded-full bg-umkm-cream px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-umkm-muted ring-1 ring-umkm-sand/80">
                    <span aria-hidden="true">🌿</span> Tentang Kami
                </p>
                <h1 class="mt-5 font-serif text-3xl font-bold leading-tight text-umkm-brown sm:text-4xl lg:text-[2.65rem] lg:leading-[1.15]">
                    Bersama UMKM, Membangun Indonesia yang Lebih Kuat
                </h1>
                <p class="mt-5 text-base leading-relaxed text-umkm-muted sm:text-lg">
                    UMKM Bersama Maju hadir sebagai jembatan digital yang menghubungkan produk-produk unggulan UMKM
                    dengan masyarakat luas. Kami percaya setiap transaksi adalah langkah kecil menuju ekonomi
                    nasional yang lebih adil dan berkelanjutan.
                </p>
                <a href="#nilai" class="mt-8 inline-flex items-center gap-2 rounded-full bg-umkm-sage px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-umkm-sage-dark">
                    Kenali Kami Lebih Dekat
                </a>
            </div>
            <div class="relative">
                <div class="absolute -right-8 -top-8 h-[min(100%,420px)] w-[min(100%,420px)] rounded-[40%] bg-umkm-sand/90 blur-2xl lg:right-0 lg:top-0" aria-hidden="true"></div>
                <div class="relative overflow-hidden rounded-[2rem] rounded-br-[3.5rem] bg-umkm-sand p-4 shadow-sm sm:p-6 lg:rounded-[2.5rem] lg:rounded-br-[4.5rem]">
                    <img
                        src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=80"
                        alt="Tim UMKM bekerja di gudang produk lokal"
                        class="h-auto w-full rounded-3xl object-cover"
                        width="900"
                        height="675"
                    >
                </div>
            </div>
        </div>
    </section>

    {{-- Statistik --}}
    <section class="border-t border-umkm-sand/80 py-14 sm:py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @php
                    $stats = [
                        ['icon' => 'store', 'value' => '10.000+', 'title' => 'UMKM Terdaftar', 'desc' => 'Pelaku usaha dari berbagai daerah di Indonesia'],
                        ['icon' => 'box', 'value' => '25.000+', 'title' => 'Produk Unggulan', 'desc' => 'Kurasi produk berkualitas siap dipasarkan'],
                        ['icon' => 'calendar', 'value' => '5+', 'title' => 'Tahun Pengalaman', 'desc' => 'Mendampingi pertumbuhan ekonomi lokal'],
                        ['icon' => 'heart', 'value' => '100%', 'title' => 'Dukungan Lokal', 'desc' => 'Komitmen penuh pada produk dalam negeri'],
                    ];
                @endphp
                @foreach ($stats as $stat)
                    <div class="rounded-2xl border border-umkm-sand/60 bg-white p-6 shadow-sm ring-1 ring-umkm-sand/50 transition hover:-translate-y-0.5 hover:shadow-md">
                        <span class="flex h-12 w-12 items-center justify-center rounded-full border-2 border-umkm-sage/30 bg-white text-umkm-sage">
                            @if ($stat['icon'] === 'store')
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 21h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v6.75c0 .414.336.75.75.75Z"/></svg>
                            @elseif ($stat['icon'] === 'box')
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"/></svg>
                            @elseif ($stat['icon'] === 'calendar')
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/></svg>
                            @else
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/></svg>
                            @endif
                        </span>
                        <p class="mt-4 text-2xl font-bold text-umkm-brown">{{ $stat['value'] }}</p>
                        <p class="mt-1 font-semibold text-umkm-brown">{{ $stat['title'] }}</p>
                        <p class="mt-2 text-sm leading-relaxed text-umkm-muted">{{ $stat['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Nilai --}}
    <section class="bg-white pb-20 pt-4 sm:pb-24" id="nilai">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <p class="inline-block rounded-full bg-umkm-cream px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-umkm-muted">Nilai-Nilai Kami</p>
            <h2 class="mt-4 font-serif text-2xl font-bold text-umkm-brown sm:text-3xl">Fondasi Platform Kami</h2>
            <p class="mx-auto mt-3 max-w-2xl text-sm text-umkm-muted sm:text-base">Prinsip yang menjadi fondasi setiap langkah kami mendampingi UMKM Indonesia.</p>

            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @php
                    $values = [
                        ['title' => 'Kualitas', 'desc' => 'Setiap produk melalui kurasi ketat agar konsumen mendapatkan barang terbaik dari UMKM.', 'icon' => 'star'],
                        ['title' => 'Kepercayaan', 'desc' => 'Transparansi dan keamanan transaksi menjadi prioritas dalam setiap interaksi platform.', 'icon' => 'shield'],
                        ['title' => 'Kolaborasi', 'desc' => 'Kami membangun ekosistem bersama pelaku usaha, mitra logistik, dan komunitas lokal.', 'icon' => 'users'],
                        ['title' => 'Keberlanjutan', 'desc' => 'Mendukung praktik usaha yang ramah lingkungan dan berkelanjutan untuk generasi mendatang.', 'icon' => 'leaf'],
                    ];
                @endphp
                @foreach ($values as $value)
                    <div class="rounded-2xl border border-umkm-sand/60 bg-umkm-cream/50 p-6 shadow-sm">
                        <span class="mx-auto flex h-14 w-14 items-center justify-center rounded-full border-2 border-umkm-sage/30 bg-white text-umkm-sage">
                            @if ($value['icon'] === 'star')
                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"/></svg>
                            @elseif ($value['icon'] === 'shield')
                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/></svg>
                            @elseif ($value['icon'] === 'users')
                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"/></svg>
                            @else
                                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 3c-4 4-6 8-6 12a6 6 0 1 0 12 0c0-4-2-8-6-12Z" stroke-linecap="round"/></svg>
                            @endif
                        </span>
                        <h3 class="mt-4 text-lg font-bold text-umkm-brown">{{ $value['title'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-umkm-muted">{{ $value['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Misi & Visi --}}
    <section class="relative overflow-hidden border-t border-umkm-sand/80 py-16 sm:py-20">
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-2">
                <div class="rounded-3xl border border-umkm-sand/60 bg-white p-8 shadow-lg shadow-umkm-brown/5 sm:p-10">
                    <span class="flex h-12 w-12 items-center justify-center rounded-full bg-umkm-sage/15 text-umkm-forest">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0 13.5-6M3 15l13.5-6M21 3v1.5M21 21v-6m0 0-4.5-2.25M21 15l-4.5-2.25M21 3l-9 4.5"/></svg>
                    </span>
                    <h2 class="mt-4 text-xl font-bold text-umkm-brown sm:text-2xl">Misi Kami</h2>
                    <p class="mt-3 text-sm leading-relaxed text-umkm-muted sm:text-base">
                        Memberdayakan UMKM Indonesia melalui platform digital yang mudah diakses, aman, dan transparan.
                    </p>
                    <ul class="mt-6 space-y-3 text-sm text-umkm-muted">
                        @foreach (['Menghubungkan UMKM dengan pasar yang lebih luas', 'Menyediakan edukasi dan pendampingan digital', 'Menjaga kualitas produk dan kepercayaan konsumen', 'Mendorong pertumbuhan ekonomi lokal berkelanjutan'] as $item)
                            <li class="flex items-start gap-2">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-umkm-sage" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="rounded-3xl border border-umkm-sand/60 bg-white p-8 shadow-lg shadow-umkm-brown/5 sm:p-10">
                    <span class="flex h-12 w-12 items-center justify-center rounded-full bg-umkm-sage/15 text-umkm-forest">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>
                    </span>
                    <h2 class="mt-4 text-xl font-bold text-umkm-brown sm:text-2xl">Visi Kami</h2>
                    <p class="mt-4 text-sm leading-relaxed text-umkm-muted sm:text-base">
                        Menjadi platform marketplace UMKM terdepan di Indonesia yang diakui sebagai pusat belanja
                        produk lokal berkualitas, di mana setiap pelaku usaha kecil memiliki kesempatan yang sama untuk
                        berkembang, berinovasi, dan berkontribusi pada kemakmuran bangsa.
                    </p>
                    <p class="mt-4 text-sm leading-relaxed text-umkm-muted sm:text-base">
                        Kami bermimpi melihat UMKM tidak lagi tertinggal di era digital, melainkan menjadi motor
                        penggerak ekonomi kerakyatan yang tangguh dan berkelanjutan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Tim --}}
    <section class="bg-white py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="font-serif text-2xl font-bold text-umkm-brown sm:text-3xl">Tim Kami</h2>
            <p class="mx-auto mt-3 max-w-xl text-sm text-umkm-muted sm:text-base">Bersama untuk mendukung kemajuan UMKM Indonesia.</p>

            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @php
                    $team = [
                        ['name' => 'Rizky Pratama', 'role' => 'CEO & Founder', 'bio' => 'Visioner di balik misi digitalisasi UMKM Indonesia.', 'img' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=80'],
                        ['name' => 'Siti Aminah', 'role' => 'COO', 'bio' => 'Mengawal operasional dan kemitraan dengan ribuan pelaku UMKM.', 'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=400&q=80'],
                        ['name' => 'Budi Santoso', 'role' => 'CTO', 'bio' => 'Membangun infrastruktur teknologi yang aman dan skalabel.', 'img' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=400&q=80'],
                        ['name' => 'Dewi Lestari', 'role' => 'Head of Marketing', 'bio' => 'Menghubungkan cerita produk lokal dengan konsumen di seluruh negeri.', 'img' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=400&q=80'],
                    ];
                @endphp
                @foreach ($team as $member)
                    <div class="rounded-2xl bg-white p-6 text-left shadow-md ring-1 ring-umkm-sand/50 transition hover:shadow-lg">
                        <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}" class="aspect-square w-full rounded-2xl object-cover" width="400" height="400" loading="lazy">
                        <h3 class="mt-4 font-bold text-umkm-brown">{{ $member['name'] }}</h3>
                        <p class="text-sm font-medium text-umkm-sage-dark">{{ $member['role'] }}</p>
                        <p class="mt-2 text-sm leading-relaxed text-umkm-muted">{{ $member['bio'] }}</p>
                        <div class="mt-4 flex gap-3">
                            <a href="#" class="text-umkm-muted transition hover:text-umkm-forest" aria-label="LinkedIn {{ $member['name'] }}">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.062 2.062 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                            <a href="#" class="text-umkm-muted transition hover:text-umkm-forest" aria-label="Instagram {{ $member['name'] }}">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="border-t border-umkm-sand bg-umkm-cream px-4 pb-16 pt-12 sm:px-6 lg:px-8">
        <div class="relative mx-auto max-w-7xl overflow-hidden rounded-[2rem] bg-umkm-sage px-8 py-12 shadow-lg sm:px-12 sm:py-14">
            <svg class="pointer-events-none absolute right-0 top-0 h-full w-1/2 opacity-10" viewBox="0 0 200 200" fill="currentColor" aria-hidden="true">
                <path d="M62 8c-8 18-22 28-38 32 14 4 26 14 34 30 6-16 18-28 36-34-20-2-28-14-32-28z"/>
            </svg>
            <svg class="pointer-events-none absolute bottom-4 left-8 h-16 w-16 text-white/10" viewBox="0 0 80 80" fill="currentColor" aria-hidden="true">
                <path d="M40 8c-10 14-22 22-36 26 12 4 22 12 28 24 6-12 16-20 28-24-14-4-24-14-28-26z"/>
            </svg>
            <div class="relative flex flex-col items-start justify-between gap-8 lg:flex-row lg:items-center">
                <div class="max-w-xl">
                    <span class="mb-3 inline-block text-2xl" aria-hidden="true">🌿</span>
                    <h2 class="text-2xl font-bold text-white sm:text-3xl">Mari Tumbuh Bersama UMKM Indonesia</h2>
                    <p class="mt-3 text-sm leading-relaxed text-white/85 sm:text-base">
                        Bergabunglah dengan ribuan pelaku usaha dan konsumen yang peduli produk lokal. Daftar sekarang dan jadilah bagian dari perubahan.
                    </p>
                </div>
                <a href="{{ route('register') }}" class="inline-flex shrink-0 items-center gap-2 rounded-full bg-white px-8 py-3.5 text-sm font-bold text-umkm-brown shadow-lg transition hover:bg-umkm-cream">
                    Daftar Sekarang
                    <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <x-site-footer />
@endsection
