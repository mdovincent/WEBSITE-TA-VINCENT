@props(['shop'])

@php $shopCheckId = 'cart-shop-check-'.$shop['id']; @endphp

<section class="cart-shop overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100" data-cart-shop data-shop-id="{{ $shop['id'] }}">
    <div class="flex items-center justify-between gap-3 border-b border-gray-100 bg-[#f8faf5]/90 px-4 py-3 sm:px-5">
        <label for="{{ $shopCheckId }}" class="flex min-w-0 flex-1 cursor-pointer items-center gap-2.5">
            <input
                type="checkbox"
                id="{{ $shopCheckId }}"
                class="cart-shop-check h-4 w-4 shrink-0 rounded border-gray-300 text-[#4a7c44] focus:ring-[#4a7c44]/30"
                data-cart-shop-check
                aria-label="Pilih semua dari {{ $shop['name'] }}"
            >
            <img src="{{ $shop['img'] }}" alt="" class="h-9 w-9 shrink-0 rounded-full object-cover ring-2 ring-white" width="36" height="36" loading="lazy">
            <span class="truncate text-sm font-bold text-umkm-brown">{{ $shop['name'] }}</span>
        </label>
        <label for="{{ $shopCheckId }}" class="shrink-0 cursor-pointer text-[11px] font-semibold text-gray-500 transition hover:text-[#4a7c44]">
            Pilih semua
        </label>
    </div>

    <ul class="divide-y divide-gray-100">
        @foreach ($shop['items'] as $item)
            <x-dashboard.cart-item :item="$item" :shop-id="$shop['id']" />
        @endforeach
    </ul>
</section>
