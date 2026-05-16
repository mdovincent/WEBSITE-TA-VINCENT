@extends('layouts.dashboard', ['active' => 'beranda'])

@section('title', 'Beranda')

@section('content')
    @php $dash = $dashboardUrl; @endphp

    {{-- Hero banner --}}
    <section class="dashboard-hero relative overflow-hidden rounded-2xl px-6 py-7 text-white shadow-md sm:px-8 sm:py-8">
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
            <div class="relative mx-auto flex items-end justify-center gap-2 lg:mx-0 lg:justify-end">
                <img src="https://images.unsplash.com/photo-1610701596007-11502817dcfe?auto=format&fit=crop&w=200&q=80" alt="" class="h-24 w-20 rounded-2xl object-cover ring-2 ring-white/40 sm:h-28 sm:w-24" width="96" height="112" loading="lazy">
                <img src="https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=220&q=80" alt="" class="relative z-10 h-32 w-28 rounded-2xl object-cover ring-4 ring-white/50 sm:h-36 sm:w-32" width="128" height="144" loading="lazy">
                <img src="https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=200&q=80" alt="" class="h-24 w-20 rounded-2xl object-cover ring-2 ring-white/40 sm:h-28 sm:w-24" width="96" height="112" loading="lazy">
            </div>
        </div>
        <div class="relative z-10 mt-6 flex justify-center gap-1.5">
            <span class="h-1.5 w-5 rounded-full bg-white"></span>
            <span class="h-1.5 w-1.5 rounded-full bg-white/40"></span>
            <span class="h-1.5 w-1.5 rounded-full bg-white/40"></span>
        </div>
    </section>

    {{-- Quick actions --}}
    <section class="mt-4 rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100">
        <div class="grid grid-cols-5 gap-1 sm:gap-2">
            @foreach ([
                ['label' => 'Pulsa & Tagihan', 'hash' => 'pembayaran', 'color' => 'bg-sky-50 text-sky-600', 'path' => 'M2.25 18.75a60.07 60.07 0 0 1 15.797-8.981M2.25 18.75v3.75c0 .621.504 1.125 1.125 1.125h16.5c.621 0 1.125-.504 1.125-1.125v-3.75M2.25 18.75 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0 5.15-2.29M12 12.75V21'],
                ['label' => 'Voucher', 'hash' => 'voucher', 'color' => 'bg-amber-50 text-amber-600', 'path' => 'M16.5 6v.75m0 3v.75m0 3v.75M4.5 6v.75m0 3v.75m0 3v.75M4.5 6h15a1.5 1.5 0 0 1 1.5 1.5v12a1.5 1.5 0 0 1-1.5 1.5h-15a1.5 1.5 0 0 1-1.5-1.5v-12A1.5 1.5 0 0 1 4.5 6Z'],
                ['label' => 'Gratis Ongkir', 'hash' => 'promo', 'color' => 'bg-emerald-50 text-emerald-600', 'path' => 'M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V7.5a1.125 1.125 0 0 1 1.125-1.125h17.25c.621 0 1.125.504 1.125 1.125v10.375c0 .621-.504 1.125-1.125 1.125H18.75m-7.5-10v4.5m0-4.5h7.5m-7.5 0H6.375'],
                ['label' => 'UMKM Terdekat', 'hash' => 'umkm-favorit', 'color' => 'bg-rose-50 text-rose-600', 'path' => 'M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z'],
                ['label' => 'Promo', 'hash' => 'promo', 'color' => 'bg-violet-50 text-violet-600', 'path' => 'M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z'],
            ] as $action)
                <a href="{{ $dash($action['hash']) }}" class="flex flex-col items-center gap-2 rounded-xl p-2 transition hover:bg-gray-50">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full {{ $action['color'] }}">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $action['path'] }}"/></svg>
                    </span>
                    <span class="text-center text-[10px] font-medium leading-tight text-gray-600 sm:text-[11px]">{{ $action['label'] }}</span>
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
        <div class="dashboard-scroll -mx-1 flex gap-3 overflow-x-auto px-1 pb-1 snap-x snap-mandatory">
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
        <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 xl:grid-cols-4">
            @foreach ($recommendedProducts as $product)
                <x-dashboard.product-card :product="$product" :horizontal="false" />
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

