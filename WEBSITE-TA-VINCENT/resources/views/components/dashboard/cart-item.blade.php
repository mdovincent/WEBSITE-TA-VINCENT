@props(['item', 'shopId'])

<li
    class="cart-item flex gap-3 px-4 py-4 sm:gap-4 sm:px-5"
    data-cart-item
    data-item-id="{{ $item['id'] }}"
    data-shop-id="{{ $shopId }}"
    data-price="{{ $item['price'] }}"
>
    <label class="flex shrink-0 cursor-pointer items-start pt-1">
        <input
            type="checkbox"
            class="cart-item-check h-4 w-4 rounded border-gray-300 text-[#4a7c44] focus:ring-[#4a7c44]/30"
            data-cart-item-check
            @checked($item['selected'])
            aria-label="Pilih {{ $item['name'] }}"
        >
    </label>

    <img
        src="{{ $item['img'] }}"
        alt="{{ $item['name'] }}"
        class="h-[72px] w-[72px] shrink-0 rounded-xl bg-[#e8f0e6] object-cover ring-1 ring-gray-100"
        width="72"
        height="72"
        loading="lazy"
        onerror="this.onerror=null;this.src='https://placehold.co/144x144/e8f0e6/4a7c44?text=UMKM';"
    >

    <div class="min-w-0 flex-1">
        <p class="line-clamp-2 text-sm font-bold text-umkm-brown">{{ $item['name'] }}</p>
        @if ($item['variant'])
            <p class="mt-0.5 text-xs text-gray-500">Varian: {{ $item['variant'] }}</p>
        @endif
        <p class="mt-1 text-sm font-semibold text-umkm-brown">Rp{{ number_format($item['price'], 0, ',', '.') }}</p>
    </div>

    <div class="flex shrink-0 flex-col items-end gap-2">
        <div class="cart-qty inline-flex items-center rounded-full border border-gray-200 bg-white shadow-sm">
            <button type="button" class="cart-qty-btn flex h-8 w-8 items-center justify-center text-lg text-gray-500 transition hover:text-[#4a7c44]" data-qty-minus aria-label="Kurangi jumlah">−</button>
            <span class="cart-qty-value min-w-[1.75rem] text-center text-sm font-bold text-umkm-brown" data-qty-value>{{ $item['qty'] }}</span>
            <button type="button" class="cart-qty-btn flex h-8 w-8 items-center justify-center text-lg text-gray-500 transition hover:text-[#4a7c44]" data-qty-plus aria-label="Tambah jumlah">+</button>
        </div>
        <button type="button" class="cart-remove text-xs font-semibold text-red-500 transition hover:text-red-600" data-cart-remove>
            Hapus
        </button>
        <div class="text-right">
            <p class="text-[10px] font-medium text-gray-400">Subtotal</p>
            <p class="cart-line-total text-sm font-bold text-[#4a7c44]">Rp{{ number_format($item['price'] * $item['qty'], 0, ',', '.') }}</p>
        </div>
    </div>
</li>
