@extends('layouts.dashboard', ['active' => 'beranda'])

@section('title', 'Beranda')

@section('content')
    @php $dash = $dashboardUrl; @endphp

    @php
        $heroSlides = [
            [
                ['data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 320 240%22%3E%3Crect width=%22320%22 height=%22240%22 fill=%22%23f4f6ed%22/%3E%3Ctext x=%22160%22 y=%22120%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22%234a7c44%22%3EKeripik%3C/text%3E%3C/svg%3E', 'Keripik'],
                ['data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 320 240%22%3E%3Crect width=%22320%22 height=%22240%22 fill=%22%23d8f5e2%22/%3E%3Ctext x=%22160%22 y=%22120%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22%233d6b3b%22%3ESemangka%3C/text%3E%3C/svg%3E', 'Semangka'],
                ['data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 320 240%22%3E%3Crect width=%22320%22 height=%22240%22 fill=%22%23fde2c8%22/%3E%3Ctext x=%22160%22 y=%22120%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22%233b5323%22%3EMadu%3C/text%3E%3C/svg%3E', 'Madu'],
            ],
            [
                ['data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 320 240%22%3E%3Crect width=%22320%22 height=%22240%22 fill=%22%23eaf7ff%22/%3E%3Ctext x=%22160%22 y=%22120%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22%23386b98%22%3ESayuran%20Segar%3C/text%3E%3C/svg%3E', 'Sayuran segar'],
                ['data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 320 240%22%3E%3Crect width=%22320%22 height=%22240%22 fill=%22%23fff5d4%22/%3E%3Ctext x=%22160%22 y=%22120%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22%23a66327%22%3EPizza%20UMKM%3C/text%3E%3C/svg%3E', 'Pizza UMKM'],
                ['data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 320 240%22%3E%3Crect width=%22320%22 height=%22240%22 fill=%22%23f7e8e2%22/%3E%3Ctext x=%22160%22 y=%22120%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22%23755235%22%3EMasakan%20Rumahan%3C/text%3E%3C/svg%3E', 'Masakan rumahan'],
            ],
            [
                ['data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 320 240%22%3E%3Crect width=%22320%22 height=%22240%22 fill=%22%23f6f0ff%22/%3E%3Ctext x=%22160%22 y=%22120%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22%232d3b5b%22%3ECokelat%3C/text%3E%3C/svg%3E', 'Cokelat'],
                ['data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 320 240%22%3E%3Crect width=%22320%22 height=%22240%22 fill=%22%23fff1e5%22/%3E%3Ctext x=%22160%22 y=%22120%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22%23554830%22%3ERoti%20Artisan%3C/text%3E%3C/svg%3E', 'Roti artisan'],
                ['data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 320 240%22%3E%3Crect width=%22320%22 height=%22240%22 fill=%22%23e9f2df%22/%3E%3Ctext x=%22160%22 y=%22120%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22%233d6b3b%22%3EKue%20Tradisional%3C/text%3E%3C/svg%3E', 'Kue tradisional'],
            ],
        ];
    @endphp

    {{-- Hero banner --}}
    <section class="dashboard-hero relative overflow-hidden rounded-2xl px-6 py-7 text-white shadow-md sm:px-8 sm:py-8" id="dashboard-hero" aria-label="Promo beranda">
        <div class="relative z-10 flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
            <div class="max-w-md">
                <h1 class="text-xl font-bold leading-snug sm:text-2xl lg:text-[1.6rem]">
                    Belanja Produk UMKM Berkualitas &amp; Terpercaya
                </h1>
                <p class="mt-2 text-sm leading-relaxed text-white/90">
                    Temukan berbagai produk terbaik dari UMKM pilihan di seluruh Indonesia.
                </p>
                <a href="{{ $dash('produk') }}" class="mt-5 inline-flex rounded-full bg-white px-6 py-2.5 text-sm font-bold text-[#4a7c44] shadow-md transition hover:bg-gray-50">
                    Belanja Sekarang
                </a>
            </div>
            <div class="relative mx-auto h-40 w-[18rem] sm:h-48 sm:w-[22rem] lg:mx-0 lg:h-56 lg:w-[26rem]">
                @foreach ($heroSlides as $slideIndex => $images)
                    <div
                        class="dashboard-hero-slide absolute inset-0 flex items-end justify-center gap-2 lg:justify-end {{ $slideIndex === 0 ? 'is-active' : '' }}"
                        data-hero-slide
                        role="group"
                        aria-roledescription="slide"
                        aria-label="Slide {{ $slideIndex + 1 }} dari {{ count($heroSlides) }}"
                    >
                        @foreach ($images as $imgIndex => [$src, $alt])
                            <img
                                src="{{ $src }}"
                                alt="{{ $alt }}"
                                class="rounded-2xl object-cover {{ $imgIndex === 1 ? 'relative z-10 h-40 w-32 ring-4 ring-white/50 sm:h-48 sm:w-36' : 'h-28 w-20 ring-2 ring-white/40 sm:h-32 sm:w-24' }}"
                                width="{{ $imgIndex === 1 ? 144 : 96 }}"
                                height="{{ $imgIndex === 1 ? 176 : 112 }}"
                                loading="{{ $slideIndex === 0 ? 'eager' : 'lazy' }}"
                                onerror="this.onerror=null;this.src='https://placehold.co/{{ $imgIndex === 1 ? 144 : 96 }}x{{ $imgIndex === 1 ? 176 : 112 }}/ffffff/4a7c44?text=UMKM'"
                            >
                        @endforeach
                    </div>
                @endforeach

                <div class="absolute inset-x-0 bottom-0 flex items-center justify-between px-2 sm:px-3">
                    <button type="button" data-hero-prev class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/20 text-white transition hover:bg-white/30 focus:outline-none focus:ring-2 focus:ring-white/60" aria-label="Sebelumnya">
                        <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.75" class="h-4 w-4"><path d="M12.5 15 7.5 10l5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                    <button type="button" data-hero-next class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/20 text-white transition hover:bg-white/30 focus:outline-none focus:ring-2 focus:ring-white/60" aria-label="Berikutnya">
                        <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.75" class="h-4 w-4"><path d="M7.5 15 12.5 10 7.5 5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="relative z-10 mt-6 flex justify-center gap-1.5" role="tablist" aria-label="Navigasi slide promo">
            @foreach ($heroSlides as $i => $_)
                <button
                    type="button"
                    data-hero-dot="{{ $i }}"
                    role="tab"
                    aria-selected="{{ $i === 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $i + 1 }}"
                    @class([
                        'rounded-full bg-white transition-all duration-300',
                        'h-1.5 w-5' => $i === 0,
                        'h-1.5 w-1.5 bg-white/40 hover:bg-white/60' => $i !== 0,
                    ])
                ></button>
            @endforeach
        </div>
    </section>

    {{-- Quick actions --}}
    <section class="mt-4 rounded-2xl bg-white px-4 py-5 shadow-sm ring-1 ring-gray-100 sm:px-6">
        <div class="mx-auto flex max-w-3xl flex-wrap items-start justify-center gap-x-5 gap-y-4 sm:gap-x-8 md:gap-x-10">
            @foreach ([
                ['label' => 'Pulsa & Tagihan', 'hash' => 'pembayaran', 'color' => 'bg-sky-50 text-sky-600', 'path' => 'M2.25 18.75a60.07 60.07 0 0 1 15.797-8.981M2.25 18.75v3.75c0 .621.504 1.125 1.125 1.125h16.5c.621 0 1.125-.504 1.125-1.125v-3.75M2.25 18.75 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0 5.15-2.29M12 12.75V21'],
                ['label' => 'Voucher', 'hash' => 'voucher', 'color' => 'bg-amber-50 text-amber-600', 'path' => 'M16.5 6v.75m0 3v.75m0 3v.75M4.5 6v.75m0 3v.75m0 3v.75M4.5 6h15a1.5 1.5 0 0 1 1.5 1.5v12a1.5 1.5 0 0 1-1.5 1.5h-15a1.5 1.5 0 0 1-1.5-1.5v-12A1.5 1.5 0 0 1 4.5 6Z'],
                ['label' => 'Gratis Ongkir', 'hash' => 'promo', 'color' => 'bg-emerald-50 text-emerald-600', 'path' => 'M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V7.5a1.125 1.125 0 0 1 1.125-1.125h17.25c.621 0 1.125.504 1.125 1.125v10.375c0 .621-.504 1.125-1.125 1.125H18.75m-7.5-10v4.5m0-4.5h7.5m-7.5 0H6.375'],
                ['label' => 'UMKM Terdekat', 'hash' => 'umkm-favorit', 'color' => 'bg-rose-50 text-rose-600', 'path' => 'M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z'],
                ['label' => 'Promo', 'hash' => 'promo', 'color' => 'bg-violet-50 text-violet-600', 'path' => 'M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z'],
            ] as $action)
                <a href="{{ $dash($action['hash']) }}" class="flex w-[4.75rem] shrink-0 flex-col items-center gap-2 rounded-xl p-1.5 transition hover:bg-gray-50 sm:w-20">
                    <span class="flex h-12 w-12 items-center justify-center rounded-full {{ $action['color'] }}">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $action['path'] }}"/></svg>
                    </span>
                    <span class="w-full text-center text-[10px] font-medium leading-tight text-gray-600 sm:text-[11px]">{{ $action['label'] }}</span>
                </a>
            @endforeach
        </div>
    </section>

    {{-- Flash Sale --}}
    <section id="flash-sale" class="scroll-mt-24 mt-5">
        <div class="mb-3 flex flex-wrap items-center justify-between gap-2">
            <div class="flex items-center gap-2 sm:gap-3">
                <h2 class="text-base font-bold text-umkm-brown">Flash Sale</h2>
                <div class="flex items-center gap-0.5 rounded-md bg-red-500 px-2 py-1 text-xs font-bold text-white tabular-nums" id="flash-countdown">
                    <span id="cd-h">02</span>
                    <span class="opacity-80">:</span>
                    <span id="cd-m">45</span>
                    <span class="opacity-80">:</span>
                    <span id="cd-s">12</span>
                </div>
            </div>
            <x-dashboard.section-link :href="$dash('produk')" />
        </div>
        <div class="dashboard-scroll flex gap-3 overflow-x-auto pb-2 pt-0.5 snap-x snap-mandatory sm:gap-4">
            @foreach ($flashSaleProducts as $product)
                <x-dashboard.product-card :product="$product" :flash="true" />
            @endforeach
        </div>
    </section>

    {{-- Rekomendasi --}}
    <section id="produk" class="scroll-mt-24 mt-5 pb-4">
        <div class="mb-3 flex items-center justify-between">
            <h2 class="text-base font-bold text-umkm-brown">Rekomendasi Untuk Anda</h2>
            <x-dashboard.section-link :href="$dash('produk')" />
        </div>
        <div class="dashboard-scroll flex gap-3 overflow-x-auto pb-2 pt-0.5 snap-x snap-mandatory sm:gap-4">
            @foreach ($recommendedProducts as $product)
                <x-dashboard.product-card :product="$product" />
            @endforeach
        </div>
    </section>

    {{-- Anchor navigasi (tanpa tampilan besar) --}}
    @foreach (['keranjang', 'wishlist', 'voucher', 'ulasan', 'pembayaran', 'bantuan', 'pesan', 'notifikasi'] as $anchorId)
        <span id="{{ $anchorId }}" class="sr-only" tabindex="-1"></span>
    @endforeach
@endsection

@push('scripts')
<script>
    (function () {
        const hero = document.getElementById('dashboard-hero');
        if (hero) {
            const slides = hero.querySelectorAll('[data-hero-slide]');
            const dots = hero.querySelectorAll('[data-hero-dot]');
            let current = 0;
            let timer = null;
            const interval = 4500;
            const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            function goTo(index) {
                if (!slides.length) return;
                current = (index + slides.length) % slides.length;
                slides.forEach(function (slide, i) {
                    slide.classList.toggle('is-active', i === current);
                });
                dots.forEach(function (dot, i) {
                    const active = i === current;
                    dot.setAttribute('aria-selected', active ? 'true' : 'false');
                    dot.classList.toggle('h-1.5', true);
                    dot.classList.toggle('w-5', active);
                    dot.classList.toggle('w-1.5', !active);
                    dot.classList.toggle('bg-white', active);
                    dot.classList.toggle('bg-white/40', !active);
                    dot.classList.toggle('hover:bg-white/60', !active);
                });
            }

            function next() {
                goTo(current + 1);
            }

            function startAutoplay() {
                if (reducedMotion || slides.length < 2) return;
                stopAutoplay();
                timer = setInterval(next, interval);
            }

            function stopAutoplay() {
                if (timer) clearInterval(timer);
                timer = null;
            }

            dots.forEach(function (dot) {
                dot.addEventListener('click', function () {
                    goTo(parseInt(dot.getAttribute('data-hero-dot'), 10));
                    startAutoplay();
                });
            });

            const prevBtn = hero.querySelector('[data-hero-prev]');
            const nextBtn = hero.querySelector('[data-hero-next]');

            if (prevBtn) {
                prevBtn.addEventListener('click', function () {
                    goTo(current - 1);
                    startAutoplay();
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function () {
                    goTo(current + 1);
                    startAutoplay();
                });
            }

            hero.addEventListener('mouseenter', stopAutoplay);
            hero.addEventListener('mouseleave', startAutoplay);

            goTo(0);
            startAutoplay();
        }

        let total = 2 * 3600 + 45 * 60 + 12;
        const h = document.getElementById('cd-h');
        const m = document.getElementById('cd-m');
        const s = document.getElementById('cd-s');
        if (!h) return;
        setInterval(function () {
            if (total <= 0) return;
            total--;
            h.textContent = String(Math.floor(total / 3600)).padStart(2, '0');
            m.textContent = String(Math.floor((total % 3600) / 60)).padStart(2, '0');
            s.textContent = String(total % 60).padStart(2, '0');
        }, 1000);
    })();
</script>
@endpush

