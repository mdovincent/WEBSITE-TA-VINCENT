@props(['order'])

@php
    $thumbnails = array_slice($order['items'], 0, 3);
@endphp

<article class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition hover:shadow-md">
    <div class="px-4 pt-4 pb-3 sm:px-5">
        <div class="flex items-start gap-3">
            <div class="flex shrink-0 -space-x-2">
                @foreach ($thumbnails as $item)
                    <img
                        src="{{ $item['img'] }}"
                        alt=""
                        class="h-12 w-12 rounded-xl border-2 border-white bg-[#e8f0e6] object-cover ring-1 ring-gray-100"
                        width="48"
                        height="48"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://placehold.co/96x96/e8f0e6/4a7c44?text=UMKM';"
                    >
                @endforeach
                @if ($order['product_count'] > 3)
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl border-2 border-white bg-[#e8f0e6] text-[10px] font-bold text-[#4a7c44] ring-1 ring-gray-100">
                        +{{ $order['product_count'] - 3 }}
                    </span>
                @endif
            </div>

            <div class="min-w-0 flex-1">
                <div class="flex items-start justify-between gap-2">
                    <div class="min-w-0">
                        <p class="truncate text-sm font-bold text-umkm-brown">#{{ $order['invoice'] }}</p>
                        <p class="mt-0.5 truncate text-xs text-gray-500">{{ $order['shop'] }}</p>
                    </div>
                    <x-dashboard.order-status-badge :status="$order['status']" :label="$order['status_label']" class="shrink-0" />
                </div>

                <div class="mt-3 flex items-end justify-between gap-3">
                    <div class="text-xs text-gray-500">
                        <p>{{ $order['date'] }}</p>
                        <p class="mt-0.5 font-medium text-gray-600">{{ $order['product_count'] }} produk</p>
                    </div>
                    <p class="shrink-0 text-base font-bold text-umkm-brown">Rp{{ number_format($order['total'], 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
    </div>

    <a
        href="{{ route('orders.show', $order['invoice_slug']) }}"
        class="flex items-center justify-center gap-1 border-t border-gray-100 bg-[#f8faf5]/60 px-4 py-2.5 text-sm font-semibold text-[#4a7c44] transition hover:bg-[#f8faf5]"
    >
        Lihat Detail
        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
        </svg>
    </a>
</article>
