@php
    $favoriteShops = $favoriteShops ?? [];
    $dash = $dashboardUrl ?? fn (?string $f = null) => route('dashboard').($f ? '#'.$f : '');
@endphp

<aside class="hidden w-[292px] shrink-0 bg-[#f0f2f5] xl:fixed xl:right-0 xl:top-[60px] xl:z-20 xl:flex xl:h-[calc(100vh-60px)] xl:flex-col xl:overflow-y-auto">
    <div class="flex min-h-full flex-1 flex-col gap-4 p-4">
        {{-- Pesanan & Saldo: tinggi sama, konten rata tengah --}}
        <div class="flex min-h-0 flex-1 flex-col gap-4">
            <section id="pesanan" class="scroll-mt-24 flex min-h-0 flex-1 flex-col rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100">
                <div class="mb-3 flex shrink-0 items-center justify-between gap-2">
                    <h2 class="text-sm font-bold text-umkm-brown">Pesanan Saya</h2>
                    <x-dashboard.section-link :href="$dash('pesanan')" />
                </div>
                <div class="flex flex-1 items-center justify-center py-1">
                    <div class="grid w-full grid-cols-4 gap-1 text-center">
                        @foreach ([['label' => 'Belum Bayar', 'count' => 1], ['label' => 'Dikemas', 'count' => 2], ['label' => 'Dikirim', 'count' => 0], ['label' => 'Selesai', 'count' => 8]] as $status)
                            <a href="{{ $dash('pesanan') }}" class="group flex flex-col items-center gap-2 rounded-xl px-1 py-2 transition hover:bg-gray-50">
                                <span class="relative flex h-11 w-11 items-center justify-center rounded-full bg-[#e8f0e6] text-[#4a7c44]">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"/></svg>
                                    @if ($status['count'] > 0)
                                        <span class="absolute -right-0.5 -top-0.5 flex h-4 min-w-4 items-center justify-center rounded-full bg-[#4a7c44] px-1 text-[9px] font-bold text-white">{{ $status['count'] }}</span>
                                    @endif
                                </span>
                                <span class="text-[10px] font-medium leading-tight text-gray-500">{{ $status['label'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="saldo" class="flex min-h-0 flex-1 flex-col rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100">
                <div class="mb-3 flex shrink-0 items-center justify-between gap-2">
                    <h2 class="text-sm font-bold text-umkm-brown">Saldo Saya</h2>
                    <span class="text-xs font-medium text-gray-400 opacity-0" aria-hidden="true">—</span>
                </div>
                <div class="flex w-full flex-1 flex-col items-center justify-center py-2 text-center">
                    <p class="w-full text-xl font-bold tracking-tight text-[#4a7c44]">Rp 250.000</p>
                    <button type="button" class="mt-3 w-full rounded-full bg-[#4a7c44] py-2.5 text-xs font-semibold text-white transition hover:bg-[#3d6b3b]">
                        Top Up
                    </button>
                </div>
                <nav class="mt-3 grid w-full shrink-0 grid-cols-3 gap-x-1 border-t border-gray-100 pt-3" aria-label="Menu saldo">
                    <a href="{{ $dash('pembayaran') }}" class="flex min-h-[2.25rem] items-center justify-center px-0.5 text-center text-[10px] font-medium leading-tight text-[#4a7c44] hover:underline">Riwayat</a>
                    <a href="{{ $dash('pembayaran') }}" class="flex min-h-[2.25rem] items-center justify-center px-0.5 text-center text-[10px] font-medium leading-tight text-[#4a7c44] hover:underline">Metode Pembayaran</a>
                    <a href="{{ $dash('voucher') }}" class="flex min-h-[2.25rem] items-center justify-center px-0.5 text-center text-[10px] font-medium leading-tight text-[#4a7c44] hover:underline">Voucher Saya</a>
                </nav>
            </section>
        </div>

        <section id="promo" class="scroll-mt-24 shrink-0 overflow-hidden rounded-2xl bg-gradient-to-br from-[#e8f0e6] to-[#dce8da] p-4 shadow-sm ring-1 ring-[#4a7c44]/10">
            <p class="text-[10px] font-bold uppercase tracking-wider text-[#4a7c44]">Gratis Ongkir</p>
            <p class="mt-1 text-base font-bold leading-snug text-umkm-brown">Min. belanja<br>Rp 50.000</p>
            <a href="{{ $dash('produk') }}" class="mt-3 inline-flex rounded-full bg-[#4a7c44] px-5 py-2 text-xs font-semibold text-white hover:bg-[#3d6b3b]">
                Belanja Sekarang
            </a>
            <div class="mt-2 flex justify-end">
                <svg class="h-14 w-14 text-[#4a7c44]/25" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V7.5a1.125 1.125 0 0 1 1.125-1.125h17.25c.621 0 1.125.504 1.125 1.125v10.375c0 .621-.504 1.125-1.125 1.125H18.75m-7.5-10v4.5m0-4.5h7.5m-7.5 0H6.375"/></svg>
            </div>
        </section>

        <section id="umkm-favorit" class="scroll-mt-24 shrink-0 rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100">
            <div class="mb-3 flex items-center justify-between">
                <h2 class="text-sm font-bold text-umkm-brown">UMKM Favorit</h2>
                <x-dashboard.section-link :href="$dash('umkm-favorit')" />
            </div>
            <div class="grid grid-cols-4 gap-2">
                @foreach ($favoriteShops as $shop)
                    <a href="{{ $dash('umkm-favorit') }}" class="flex flex-col items-center text-center">
                        <img src="{{ $shop['img'] }}" alt="{{ $shop['name'] }}" class="h-11 w-11 rounded-full object-cover ring-2 ring-gray-100" width="44" height="44" loading="lazy">
                        <span class="mt-1.5 line-clamp-2 text-[9px] font-medium leading-tight text-gray-500">{{ $shop['name'] }}</span>
                    </a>
                @endforeach
            </div>
        </section>
    </div>
</aside>
