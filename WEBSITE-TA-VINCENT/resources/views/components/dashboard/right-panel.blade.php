@php
    $favoriteShops = $favoriteShops ?? [];
    $dash = $dashboardUrl ?? fn (?string $f = null) => route('dashboard').($f ? '#'.$f : '');
@endphp

<aside class="hidden h-full w-[300px] shrink-0 flex-col overflow-y-auto border-l border-gray-200/60 bg-[#f0f2f5] xl:flex">
    <div class="flex flex-col gap-4 px-2 py-3 sm:px-3">
        <div class="flex flex-col gap-4">
            <section id="pesanan" class="scroll-mt-24 min-h-[200px] flex flex-col rounded-[1.5rem] bg-white p-4 shadow-sm ring-1 ring-gray-100">
                <div class="mb-3 flex items-center justify-between gap-2">
                    <h2 class="text-sm font-bold text-umkm-brown">Pesanan Saya</h2>
                    <x-dashboard.section-link :href="route('orders.index')" />
                </div>
                <div class="flex items-center justify-center py-3">
                    <div class="grid w-full grid-cols-4 gap-2 text-center">
                        @foreach ([
                            ['label' => 'Belum Bayar', 'count' => 1, 'status' => null, 'path' => 'M6 6h12a1.5 1.5 0 0 1 1.5 1.5v9a1.5 1.5 0 0 1-1.5 1.5H6A1.5 1.5 0 0 1 4.5 16.5v-9A1.5 1.5 0 0 1 6 6Zm0 0h12M7.5 9.75h9M7.5 13.5h6'],
                            ['label' => 'Dikemas', 'count' => 2, 'status' => 'diproses', 'path' => 'M5.25 7.5h13.5L21 10.5v6.75a1.5 1.5 0 0 1-1.5 1.5H4.5A1.5 1.5 0 0 1 3 17.25V10.5L5.25 7.5Zm1.5 0v3.75m12 0V7.5m-12 3.75h12'],
                            ['label' => 'Dikirim', 'count' => 0, 'status' => 'dikirim', 'path' => 'M3.75 16.5h.75m0 0a1.5 1.5 0 1 0 0 0Zm15 0h.75m0 0a1.5 1.5 0 1 0 0 0Zm-15 0v-6h12v6M7.5 10.5l-1.5-3.75h12L16.5 10.5'],
                            ['label' => 'Selesai', 'count' => 8, 'status' => 'selesai', 'path' => 'M5.25 12.75l3.75 3.75 9-9'],
                        ] as $status)
                            <a href="{{ route('orders.index', $status['status'] ? ['status' => $status['status']] : []) }}" class="group flex flex-col items-center gap-2 rounded-2xl border border-gray-100 bg-[#f8faf5] px-1.5 py-2.5 transition hover:bg-gray-50">
                                <span class="relative flex h-12 w-12 items-center justify-center rounded-full bg-[#e8f0e6] text-[#4a7c44]">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $status['path'] }}"/></svg>
                                    @if ($status['count'] > 0)
                                        <span class="absolute -right-0.5 -top-0.5 flex h-4 min-w-4 items-center justify-center rounded-full bg-[#4a7c44] px-1 text-[10px] font-bold text-white">{{ $status['count'] }}</span>
                                    @endif
                                </span>
                                <span class="text-[11px] font-semibold leading-tight text-gray-600">{{ $status['label'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="saldo" class="min-h-[210px] flex flex-col rounded-[1.5rem] bg-white p-4 shadow-sm ring-1 ring-gray-100">
                <div class="mb-3 flex items-center justify-between gap-2">
                    <h2 class="text-sm font-bold text-umkm-brown">Saldo Saya</h2>
                    <span class="text-sm font-medium text-gray-400 opacity-0" aria-hidden="true">—</span>
                </div>
                <div class="flex w-full flex-1 flex-col items-center justify-center py-3.5 text-center">
                    <p class="w-full text-2xl font-bold tracking-tight text-[#4a7c44]">Rp 250.000</p>
                    <button type="button" class="mt-4 w-full rounded-full bg-[#4a7c44] py-3 text-sm font-semibold text-white transition hover:bg-[#3d6b3b]">
                        Top Up
                    </button>
                </div>
                <nav class="mt-4 flex w-full flex-row items-stretch justify-between gap-2 border-t border-gray-100 pt-3 text-[11px] font-semibold text-[#4a7c44]" aria-label="Menu saldo">
                    <a href="{{ $dash('pembayaran') }}" class="flex flex-1 items-center justify-center rounded-xl border border-gray-100 bg-[#f9faf8] px-2 py-1.5 text-center leading-tight hover:bg-gray-50">Riwayat</a>
                    <a href="{{ $dash('pembayaran') }}" class="flex flex-1 items-center justify-center rounded-xl border border-gray-100 bg-[#f9faf8] px-2 py-1.5 text-center leading-tight hover:bg-gray-50">Metode Pembayaran</a>
                    <a href="{{ $dash('voucher') }}" class="flex flex-1 items-center justify-center rounded-xl border border-gray-100 bg-[#f9faf8] px-2 py-1.5 text-center leading-tight hover:bg-gray-50">Voucher Saya</a>
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
