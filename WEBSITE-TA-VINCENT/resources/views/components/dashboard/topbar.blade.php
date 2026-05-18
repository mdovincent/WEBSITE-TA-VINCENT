@php
    $user = Auth::user();
    $dash = $dashboardUrl ?? fn (?string $f = null) => route('dashboard').($f ? '#'.$f : '');
    $avatarUrl = 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=80&h=80&q=80';
    $topbarLinks = [
        ['label' => 'Keranjang', 'count' => $cartItemCount ?? 0, 'icon' => 'cart', 'href' => route('cart.index')],
        ['label' => 'Pesan', 'count' => 1, 'icon' => 'chat', 'href' => $dash('pesan')],
        ['label' => 'Notifikasi', 'count' => 2, 'icon' => 'bell', 'href' => $dash('notifikasi')],
    ];
@endphp

<header class="sticky top-0 z-30 h-[60px] min-w-0 shrink-0 border-b border-gray-200/80 bg-white">
    <div class="flex h-full min-w-0 items-center gap-3 px-4 sm:px-5 lg:px-6">
        {{-- Kolom pencarian mengikuti lebar area tengah (tidak menimpa panel kanan) --}}
        <div class="relative min-w-0 flex-1">
            <svg class="pointer-events-none absolute left-4 top-1/2 h-[18px] w-[18px] -translate-y-1/2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
            </svg>
            <input
                type="search"
                placeholder="Cari produk UMKM, toko, atau nomor pesanan..."
                class="h-9 w-full rounded-full border border-gray-200 bg-[#f5f6f8] pl-11 pr-4 text-sm text-umkm-brown outline-none transition placeholder:text-gray-400 focus:border-[#4a7c44]/50 focus:bg-white focus:ring-2 focus:ring-[#4a7c44]/15"
            >
        </div>

        {{-- Keranjang, pesan, lonceng, profil: diperbesar & digeser ke kanan (urutan sama) --}}
        <div class="ml-auto flex shrink-0 items-center gap-0.5 sm:gap-1.5">
            @foreach ($topbarLinks as $action)
                <a href="{{ $action['href'] }}" class="relative flex h-12 w-12 items-center justify-center rounded-xl text-gray-600 transition hover:bg-gray-100 hover:text-umkm-brown" aria-label="{{ $action['label'] }}">
                    @if ($action['icon'] === 'cart')
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.65"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/></svg>
                    @elseif ($action['icon'] === 'chat')
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.65"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z"/></svg>
                    @else
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.65"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"/></svg>
                    @endif
                    @if ($action['count'] > 0)
                        <span class="absolute right-0.5 top-0.5 flex h-5 min-w-5 items-center justify-center rounded-full bg-[#4a7c44] px-1 text-[11px] font-bold leading-none text-white">{{ $action['count'] }}</span>
                    @endif
                </a>
            @endforeach

            <button type="button" class="ml-1 hidden items-center gap-2.5 rounded-full border border-gray-200 bg-[#f5f6f8] py-1.5 pl-1.5 pr-3 transition hover:bg-gray-50 sm:flex">
                <img src="{{ $avatarUrl }}" alt="{{ $user->name }}" class="h-9 w-9 rounded-full object-cover ring-2 ring-white" width="36" height="36">
                <div class="text-left leading-tight">
                    <p class="max-w-[140px] truncate text-sm font-semibold text-umkm-brown">{{ $user->name }}</p>
                    <p class="text-xs text-[#4a7c44]">Silver Member</p>
                </div>
                <svg class="h-5 w-5 shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
            </button>
        </div>
    </div>
</header>
