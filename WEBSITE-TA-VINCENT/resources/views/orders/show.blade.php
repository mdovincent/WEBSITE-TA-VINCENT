@extends('layouts.dashboard', ['active' => 'pesanan'])

@section('title', 'Detail Pesanan')

@section('content')
    @php
        $ongkir = max(0, $order['total'] - collect($order['items'])->sum(fn ($i) => $i['price'] * $i['qty']));
        $subtotal = collect($order['items'])->sum(fn ($i) => $i['price'] * $i['qty']);
    @endphp

    <section class="mx-auto max-w-xl space-y-4">
        <div class="flex items-center gap-3">
            <a href="{{ route('orders.index') }}" class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-200 text-gray-500 transition hover:bg-gray-50 hover:text-umkm-brown" aria-label="Kembali">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/></svg>
            </a>
            <div class="min-w-0 flex-1">
                <h1 class="text-base font-bold text-umkm-brown">Detail Pesanan</h1>
                <p class="truncate text-xs text-gray-500">#{{ $order['invoice'] }}</p>
            </div>
            <x-dashboard.order-status-badge :status="$order['status']" :label="$order['status_label']" class="shrink-0" />
        </div>

        <div class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100 sm:p-5">
            <h2 class="mb-4 text-sm font-bold text-umkm-brown">Lacak Pesanan</h2>
            @if ($progressStep > 0)
                <div class="mb-5">
                    <x-dashboard.order-progress :step="$progressStep" />
                </div>
            @endif
            <x-dashboard.order-timeline :items="$timeline" />
        </div>

        <div class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100 sm:p-5">
            <dl class="grid grid-cols-2 gap-3 text-sm">
                <div>
                    <dt class="text-gray-400">Tanggal</dt>
                    <dd class="mt-0.5 font-semibold text-umkm-brown">{{ $order['date'] }}</dd>
                </div>
                <div>
                    <dt class="text-gray-400">Toko</dt>
                    <dd class="mt-0.5 font-semibold text-umkm-brown">{{ $order['shop'] }}</dd>
                </div>
                <div>
                    <dt class="text-gray-400">Pengiriman</dt>
                    <dd class="mt-0.5 font-semibold text-umkm-brown">{{ $order['shipping'] }}</dd>
                </div>
                <div>
                    <dt class="text-gray-400">Pembayaran</dt>
                    <dd class="mt-0.5 font-semibold text-umkm-brown">{{ $order['payment'] }}</dd>
                </div>
            </dl>
        </div>

        <div class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-100">
            <div class="border-b border-gray-100 px-4 py-3 sm:px-5">
                <h2 class="text-sm font-bold text-umkm-brown">Produk ({{ $order['product_count'] }})</h2>
            </div>
            <ul class="divide-y divide-gray-100">
                @foreach ($order['items'] as $item)
                    <li class="flex items-center gap-3 px-4 py-3 sm:px-5">
                        <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}" class="h-14 w-14 shrink-0 rounded-xl object-cover ring-1 ring-gray-100" width="56" height="56" loading="lazy">
                        <div class="min-w-0 flex-1">
                            <p class="line-clamp-2 text-sm font-semibold text-umkm-brown">{{ $item['name'] }}</p>
                            <p class="mt-0.5 text-xs text-gray-500">{{ $item['qty'] }} × Rp{{ number_format($item['price'], 0, ',', '.') }}</p>
                        </div>
                        <p class="shrink-0 text-sm font-bold text-umkm-brown">Rp{{ number_format($item['price'] * $item['qty'], 0, ',', '.') }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100 sm:p-5">
            <h2 class="text-sm font-bold text-umkm-brown">Ringkasan Pembayaran</h2>
            <dl class="mt-3 space-y-2 text-sm">
                <div class="flex justify-between text-gray-600">
                    <dt>Subtotal</dt>
                    <dd>Rp{{ number_format($subtotal, 0, ',', '.') }}</dd>
                </div>
                <div class="flex justify-between text-gray-600">
                    <dt>Ongkos kirim</dt>
                    <dd>Rp{{ number_format($ongkir, 0, ',', '.') }}</dd>
                </div>
                <div class="flex justify-between border-t border-gray-100 pt-2 text-base font-bold text-umkm-brown">
                    <dt>Total</dt>
                    <dd>Rp{{ number_format($order['total'], 0, ',', '.') }}</dd>
                </div>
            </dl>
        </div>

        <div class="flex flex-col gap-2 sm:flex-row">
            @if ($order['status'] === 'selesai')
                <button type="button" class="flex-1 rounded-full border-2 border-[#4a7c44] bg-white py-3 text-sm font-semibold text-[#4a7c44] transition hover:bg-[#f8faf5]">
                    Beli Lagi
                </button>
                <button type="button" class="flex-1 rounded-full bg-[#4a7c44] py-3 text-sm font-semibold text-white transition hover:bg-[#3d6b3b]">
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
                <button type="button" class="w-full rounded-full bg-[#4a7c44] py-3 text-sm font-semibold text-white transition hover:bg-[#3d6b3b]">
                    Pesan Ulang
                </button>
            @endif
        </div>
    </section>
@endsection
