@extends('layouts.dashboard', ['active' => 'pesanan'])

@section('title', 'Detail Pesanan')

@section('content')
    @php
        $ongkir = max(0, $order['total'] - collect($order['items'])->sum(fn ($i) => $i['price'] * $i['qty']));
        $subtotal = collect($order['items'])->sum(fn ($i) => $i['price'] * $i['qty']);
        $dash = $dashboardUrl ?? fn (?string $f = null) => route('dashboard').($f ? '#'.$f : '');
    @endphp

    <section class="w-full space-y-4">
        <div class="flex flex-wrap items-center gap-3 rounded-2xl bg-white px-4 py-3.5 shadow-sm ring-1 ring-gray-100 sm:px-5">
            <a
                href="{{ route('orders.index') }}"
                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#f5f6f8] text-gray-500 transition hover:bg-[#e8f0e6] hover:text-[#4a7c44]"
                aria-label="Kembali ke daftar pesanan"
            >
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                </svg>
            </a>

            <div class="min-w-0 flex-1">
                <p class="truncate text-base font-bold text-umkm-brown sm:text-lg">#{{ $order['invoice'] }}</p>
            </div>

            <x-dashboard.order-status-badge :status="$order['status']" :label="$order['status_label']" class="shrink-0 rounded-full px-3 py-1.5 text-xs" />

            <div class="flex shrink-0 items-center gap-1">
                <button
                    type="button"
                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#f5f6f8] text-gray-500 transition hover:bg-[#e8f0e6] hover:text-[#4a7c44]"
                    aria-label="Cetak pesanan"
                    onclick="window.print()"
                >
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18M6.34 6h11.32c.771 0 1.396.625 1.396 1.396v1.108M6.34 6v-.396c0-.771.625-1.396 1.396-1.396h9.528c.771 0 1.396.625 1.396 1.396V6m0 0v1.108c0 .771-.625 1.396-1.396 1.396H7.736c-.771 0-1.396-.625-1.396-1.396V6Z"/>
                    </svg>
                </button>
                <a
                    href="{{ $dash('bantuan') }}"
                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#f5f6f8] text-gray-500 transition hover:bg-[#e8f0e6] hover:text-[#4a7c44]"
                    aria-label="Bantuan"
                >
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100 sm:p-5">
            <h2 class="mb-4 text-sm font-bold text-umkm-brown sm:text-base">Lacak Pesanan</h2>
            <div class="grid gap-6 lg:grid-cols-[minmax(0,1fr)_minmax(220px,280px)] lg:items-start">
                <x-dashboard.order-timeline :items="$timeline" />
                <x-dashboard.order-tracking-aside :status="$order['status']" />
            </div>
        </div>

        <div class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100 sm:p-5">
            <dl class="grid grid-cols-2 gap-x-4 gap-y-4 text-sm sm:gap-x-8">
                <div>
                    <dt class="text-xs text-gray-400">Tanggal</dt>
                    <dd class="mt-1 font-semibold text-umkm-brown">{{ $order['date'] }}</dd>
                </div>
                <div>
                    <dt class="text-xs text-gray-400">Toko</dt>
                    <dd class="mt-1 font-semibold text-umkm-brown">{{ $order['shop'] }}</dd>
                </div>
                <div>
                    <dt class="text-xs text-gray-400">Pengiriman</dt>
                    <dd class="mt-1 font-semibold text-umkm-brown">{{ $order['shipping'] }}</dd>
                </div>
                <div>
                    <dt class="text-xs text-gray-400">Pembayaran</dt>
                    <dd class="mt-1 font-semibold text-umkm-brown">{{ $order['payment'] }}</dd>
                </div>
            </dl>
        </div>

        <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100">
            <div class="border-b border-gray-100 px-4 py-3.5 sm:px-5">
                <h2 class="text-sm font-bold text-umkm-brown sm:text-base">Produk ({{ $order['product_count'] }})</h2>
            </div>
            <ul class="divide-y divide-gray-100">
                @foreach ($order['items'] as $item)
                    <li class="flex items-center gap-3 px-4 py-3.5 sm:gap-4 sm:px-5 sm:py-4">
                        <img
                            src="{{ $item['img'] }}"
                            alt="{{ $item['name'] }}"
                            class="h-14 w-14 shrink-0 rounded-xl bg-[#e8f0e6] object-cover ring-1 ring-gray-100 sm:h-16 sm:w-16"
                            width="64"
                            height="64"
                            loading="lazy"
                            onerror="this.onerror=null;this.src='https://placehold.co/128x128/e8f0e6/4a7c44?text=UMKM';"
                        >
                        <div class="min-w-0 flex-1">
                            <p class="line-clamp-2 text-sm font-semibold text-umkm-brown">{{ $item['name'] }}</p>
                            <p class="mt-0.5 text-xs text-gray-500">{{ $item['qty'] }} × Rp{{ number_format($item['price'], 0, ',', '.') }}</p>
                        </div>
                        <p class="shrink-0 text-sm font-bold text-umkm-brown sm:text-base">
                            Rp{{ number_format($item['price'] * $item['qty'], 0, ',', '.') }}
                        </p>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100 sm:p-5">
            <h2 class="text-sm font-bold text-umkm-brown sm:text-base">Ringkasan Pembayaran</h2>
            <dl class="mt-4 space-y-2.5 text-sm">
                <div class="flex justify-between text-gray-600">
                    <dt>Subtotal</dt>
                    <dd>Rp{{ number_format($subtotal, 0, ',', '.') }}</dd>
                </div>
                <div class="flex justify-between text-gray-600">
                    <dt>Ongkos kirim</dt>
                    <dd>Rp{{ number_format($ongkir, 0, ',', '.') }}</dd>
                </div>
                <div class="flex justify-between border-t border-gray-100 pt-3">
                    <dt class="text-base font-bold text-umkm-brown">Total</dt>
                    <dd class="text-lg font-bold text-[#4a7c44]">Rp{{ number_format($order['total'], 0, ',', '.') }}</dd>
                </div>
            </dl>
        </div>

        @if (in_array($order['status'], ['selesai', 'dikirim', 'diproses', 'dibatalkan'], true))
            <div class="flex flex-col gap-2 sm:flex-row">
                @if ($order['status'] === 'selesai')
                    <button type="button" class="flex-1 rounded-full border-2 border-[#4a7c44] bg-white py-3 text-sm font-semibold text-[#4a7c44] transition hover:bg-[#f8faf5]">
                        Beli Lagi
                    </button>
                    <button type="button" class="flex-1 rounded-full bg-[#4a7c44] py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#3d6b3b]">
                        Beri Ulasan
                    </button>
                @elseif ($order['status'] === 'dikirim')
                    <button type="button" class="w-full rounded-full bg-[#4a7c44] py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#3d6b3b]">
                        Lacak Pengiriman
                    </button>
                @elseif ($order['status'] === 'diproses')
                    <button type="button" class="w-full rounded-full border border-red-200 bg-red-50 py-3 text-sm font-semibold text-red-600 transition hover:bg-red-100">
                        Batalkan Pesanan
                    </button>
                @elseif ($order['status'] === 'dibatalkan')
                    <button type="button" class="w-full rounded-full bg-[#4a7c44] py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#3d6b3b]">
                        Pesan Ulang
                    </button>
                @endif
            </div>
        @endif
    </section>
@endsection
