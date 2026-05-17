@props(['item', 'shopId'])

<li class="cart-item flex gap-3 border-b border-gray-50 px-4 py-3 last:border-b-0 sm:px-5" data-cart-item data-item-id="{{ $item['id'] }}" data-shop-id="{{ $shopId }}" data-price="{{ $item['price'] }}">
    <label class="flex shrink-0 cursor-pointer items-start pt-1">
        <input
            type="checkbox"
            class="cart-item-check h-4 w-4 rounded border-gray-300 text-[#4a7c44] focus:ring-[#4a7c44]/30"
            data-cart-item-check
            @checked($item['selected'])
            aria-label="Pilih {{ $item['name'] }}"
        >
    </label>

    <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}" class="h-16 w-16 shrink-0 rounded-xl object-cover ring-1 ring-gray-100" width="64" height="64" loading="lazy">

    <div class="min-w-0 flex-1">
        <p class="line-clamp-2 text-sm font-semibold text-umkm-brown">{{ $item['name'] }}</p>
        @if ($item['variant'])
            <p class="mt-0.5 text-xs text-gray-500">Varian: {{ $item['variant'] }}</p>
        @endif
        <p class="mt-1 text-sm font-bold text-umkm-brown">Rp{{ number_format($item['price'], 0, ',', '.') }}</p>

        <div class="mt-2 flex flex-wrap items-center justify-between gap-2">
            <div class="cart-qty inline-flex items-center rounded-full border border-gray-200 bg-[#f5f6f8]">
                <button type="button" class="cart-qty-btn flex h-8 w-8 items-center justify-center rounded-full text-gray-600 transition hover:bg-white hover:text-umkm-brown" data-qty-minus aria-label="Kurangi jumlah">−</button>
                <span class="cart-qty-value min-w-[1.5rem] text-center text-sm font-semibold text-umkm-brown" data-qty-value>{{ $item['qty'] }}</span>
                <button type="button" class="cart-qty-btn flex h-8 w-8 items-center justify-center rounded-full text-gray-600 transition hover:bg-white hover:text-umkm-brown" data-qty-plus aria-label="Tambah jumlah">+</button>
            </div>
            <div class="text-right">
                <p class="text-[10px] text-gray-400">Subtotal</p>
                <p class="cart-line-total text-sm font-bold text-umkm-brown">Rp{{ number_format($item['price'] * $item['qty'], 0, ',', '.') }}</p>
            </div>
        </div>

        <button type="button" class="cart-remove mt-2 text-xs font-semibold text-red-500 transition hover:text-red-600" data-cart-remove>
            Hapus
        </button>
    </div>
</li>
