@props(['shop'])

<section class="cart-shop overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm ring-1 ring-gray-100/80" data-cart-shop data-shop-id="{{ $shop['id'] }}">
    <div class="flex items-center gap-2.5 border-b border-gray-100 bg-[#f8faf5]/80 px-4 py-3 sm:px-5">
        <label class="flex cursor-pointer items-center gap-2.5">
            <input
                type="checkbox"
                class="cart-shop-check h-4 w-4 rounded border-gray-300 text-[#4a7c44] focus:ring-[#4a7c44]/30"
                data-cart-shop-check
                aria-label="Pilih semua dari {{ $shop['name'] }}"
            >
            <img src="{{ $shop['img'] }}" alt="" class="h-8 w-8 rounded-full object-cover ring-2 ring-white" width="32" height="32" loading="lazy">
            <span class="text-sm font-bold text-umkm-brown">{{ $shop['name'] }}</span>
        </label>
        <span class="ml-auto text-[11px] font-medium text-gray-400">Pilih semua</span>
    </div>

    <ul class="divide-y divide-gray-50">
        @foreach ($shop['items'] as $item)
            <x-dashboard.cart-item :item="$item" :shop-id="$shop['id']" />
        @endforeach
    </ul>
</section>
