@props(['active' => 'beranda'])

@php
    $navClass = fn (string $key) => $active === $key
        ? 'dashboard-nav-active'
        : 'text-gray-600 hover:bg-gray-50 hover:text-umkm-brown';
    $dash = $dashboardUrl ?? fn (?string $f = null) => route('dashboard').($f ? '#'.$f : '');
@endphp

<aside class="fixed inset-y-0 left-0 z-40 hidden w-[272px] flex-col border-r border-gray-200/80 bg-white lg:flex">
    <div class="flex h-[60px] shrink-0 items-center gap-2.5 border-b border-gray-100 px-5">
        <a href="{{ $dash() }}" class="flex items-center gap-2.5">
            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-[#4a7c44] text-white shadow-sm">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path d="M12 3c-4 4-6 8-6 12a6 6 0 1 0 12 0c0-4-2-8-6-12Z" stroke-linecap="round"/><path d="M12 11v10" stroke-linecap="round"/></svg>
            </span>
            <span class="text-[15px] font-bold leading-tight text-umkm-brown">UMKM Bersama Maju</span>
        </a>
    </div>

    <nav class="flex-1 overflow-y-auto px-3 py-3">
        <ul class="space-y-0.5 text-[13px]">
            <li>
                <a href="{{ $dash() }}" class="{{ $navClass('beranda') }} flex items-center gap-3 rounded-lg px-3 py-2.5 transition">
                    <svg class="h-[18px] w-[18px] shrink-0 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75V15h4.5v6h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{ route('orders.index') }}" class="{{ $navClass('pesanan') }} flex items-center gap-3 rounded-lg px-3 py-2.5 transition">
                    <svg class="h-[18px] w-[18px] shrink-0 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15a2.25 2.25 0 0 1 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25Z"/></svg>
                    Pesanan Saya
                </a>
            </li>
            <li>
                <a href="{{ route('cart.index') }}" class="{{ $navClass('keranjang') }} flex items-center justify-between rounded-lg px-3 py-2.5 transition">
                    <span class="flex items-center gap-3">
                        <svg class="h-[18px] w-[18px] shrink-0 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/></svg>
                        Keranjang
                    </span>
                    @if (($cartItemCount ?? 0) > 0)
                        <span class="rounded-full bg-[#4a7c44] px-1.5 py-0.5 text-[10px] font-bold leading-none text-white">{{ $cartItemCount }}</span>
                    @endif
                </a>
            </li>
            @foreach ([
                ['key' => 'wishlist', 'hash' => 'wishlist', 'label' => 'Wishlist', 'icon' => 'M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z'],
                ['key' => 'voucher', 'hash' => 'voucher', 'label' => 'Voucher Saya', 'icon' => 'M16.5 6v.75m0 3v.75m0 3v.75M4.5 6v.75m0 3v.75m0 3v.75M4.5 6h15a1.5 1.5 0 0 1 1.5 1.5v12a1.5 1.5 0 0 1-1.5 1.5h-15a1.5 1.5 0 0 1-1.5-1.5v-12A1.5 1.5 0 0 1 4.5 6Z'],
                ['key' => 'umkm', 'hash' => 'umkm-favorit', 'label' => 'UMKM Favorit', 'icon' => 'M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72'],
                ['key' => 'ulasan', 'hash' => 'ulasan', 'label' => 'Ulasan Saya', 'icon' => 'M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z'],
                ['key' => 'pembayaran', 'hash' => 'pembayaran', 'label' => 'Pembayaran', 'icon' => 'M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z'],
                ['key' => 'bantuan', 'hash' => 'bantuan', 'label' => 'Bantuan', 'icon' => 'M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z'],
            ] as $item)
                <li>
                    <a href="{{ $dash($item['hash']) }}" class="{{ $navClass($item['key']) }} flex items-center gap-3 rounded-lg px-3 py-2.5 transition">
                        <svg class="h-[18px] w-[18px] shrink-0 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/></svg>
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        <p class="mb-2 mt-5 px-3 text-[10px] font-bold uppercase tracking-wider text-gray-400">Kategori</p>
        <ul class="space-y-0.5 text-[13px]">
            @foreach ([
                ['Makanan & Minuman', 'M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z'],
                ['Fashion', 'M15.75 6a3.75 3.75 0 0 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z'],
                ['Kerajinan Tangan', 'M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z'],
                ['Kecantikan', 'M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09Z'],
                ['Rumah Tangga', 'm2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75V15h4.5v6h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25'],
            ] as $cat)
                <li>
                    <a href="{{ $dash('produk') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-600 transition hover:bg-gray-50 hover:text-umkm-brown">
                        <svg class="h-4 w-4 shrink-0 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $cat[1] }}"/></svg>
                        {{ $cat[0] }}
                    </a>
                </li>
            @endforeach
            <li>
                <a href="{{ $dash('produk') }}" class="flex items-center gap-0.5 px-3 py-2 text-xs font-semibold text-[#4a7c44] hover:underline">
                    Lihat Semua Kategori
                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                </a>
            </li>
        </ul>
    </nav>

    <div class="shrink-0 border-t border-gray-100 p-4">
        <div class="relative overflow-hidden rounded-xl bg-[#e8f0e6] p-4">
            <p class="pr-16 text-sm font-bold text-[#3d6b3b]">Dukung UMKM Lokal</p>
            <p class="mt-1 pr-14 text-[11px] leading-snug text-gray-600">Belanja produk dalam negeri berkualitas.</p>
            <a href="{{ $dash('produk') }}" class="relative z-10 mt-3 inline-flex rounded-full bg-[#4a7c44] px-4 py-2 text-xs font-semibold text-white shadow-sm transition hover:bg-[#3d6b3b]">
                Belanja Sekarang
            </a>
            <svg class="pointer-events-none absolute bottom-2 right-2 h-16 w-16 text-[#4a7c44]/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/></svg>
        </div>
        <form method="POST" action="{{ route('logout') }}" class="mt-2">
            @csrf
            <button type="submit" class="flex w-full items-center justify-center gap-1.5 py-2 text-xs text-gray-500 transition hover:text-red-500">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25V9M4.5 9h15m-1.5 10.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25V9"/>
                </svg>
                Keluar
            </button>
        </form>
    </div>
</aside>
