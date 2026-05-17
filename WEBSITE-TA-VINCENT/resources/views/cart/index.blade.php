@extends('layouts.dashboard', ['active' => 'keranjang'])

@section('title', 'Keranjang Belanja')

@section('content')
    @php
        $shopCount = count($shops);
        $productCount = $cartCount;
        $dash = $dashboardUrl;
    @endphp

    @if ($shopCount === 0)
        <section class="mx-auto flex max-w-xl flex-col items-center justify-center rounded-2xl bg-white px-6 py-16 text-center shadow-sm ring-1 ring-gray-100">
            <div class="flex h-20 w-20 items-center justify-center rounded-full bg-[#e8f0e6] text-[#4a7c44]/40">
                <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.25" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
                </svg>
            </div>
            <h1 class="mt-5 text-base font-bold text-umkm-brown">Keranjang masih kosong</h1>
            <p class="mt-2 max-w-xs text-sm text-gray-500">Yuk, dukung UMKM lokal! Temukan produk berkualitas dari pengrajin dan pelaku usaha di seluruh Indonesia.</p>
            <a href="{{ $dash('produk') }}" class="mt-6 inline-flex rounded-full bg-[#4a7c44] px-8 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#3d6b3b]">
                Mulai Belanja
            </a>
        </section>
    @else
        <div id="cart-page" class="mx-auto max-w-xl pb-44" data-shipping-per-shop="{{ $shippingPerShop }}" data-voucher-discount="{{ $voucher['discount'] }}">
            <div class="mb-4 flex items-start justify-between gap-3">
                <div>
                    <h1 class="text-base font-bold text-umkm-brown">Keranjang Belanja</h1>
                    <p class="mt-0.5 text-xs text-gray-500" id="cart-header-meta">{{ $shopCount }} toko · {{ $productCount }} produk</p>
                </div>
                <div class="flex items-center gap-1">
                    <button
                        type="button"
                        id="cart-clear-btn"
                        class="flex h-9 w-9 items-center justify-center rounded-full text-gray-400 transition hover:bg-red-50 hover:text-red-500"
                        aria-label="Kosongkan keranjang"
                        title="Kosongkan keranjang"
                    >
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                        </svg>
                    </button>
                    <a href="{{ route('dashboard') }}" class="flex h-9 w-9 items-center justify-center rounded-full text-gray-400 transition hover:bg-gray-50 hover:text-umkm-brown" aria-label="Kembali ke beranda">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div id="cart-shops" class="space-y-4">
                @foreach ($shops as $shop)
                    <x-dashboard.cart-shop :shop="$shop" />
                @endforeach
            </div>

            <button
                type="button"
                id="cart-voucher-toggle"
                class="mt-4 flex w-full items-center gap-3 rounded-2xl border border-dashed border-[#4a7c44]/40 bg-[#f8faf5] px-4 py-3.5 text-left transition hover:border-[#4a7c44]/60 hover:bg-[#f0f5ee]"
            >
                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#e8f0e6] text-[#4a7c44]">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75M4.5 6v.75m0 3v.75m0 3v.75M4.5 6h15a1.5 1.5 0 0 1 1.5 1.5v12a1.5 1.5 0 0 1-1.5 1.5h-15a1.5 1.5 0 0 1-1.5-1.5v-12A1.5 1.5 0 0 1 4.5 6Z"/>
                    </svg>
                </span>
                <span class="min-w-0 flex-1">
                    <span class="block text-sm font-semibold text-umkm-brown">Gunakan voucher</span>
                    <span class="block text-xs text-gray-500">{{ $voucher['label'] }} · kode <span class="font-mono font-semibold">{{ $voucher['code'] }}</span></span>
                </span>
                <span id="cart-voucher-badge" class="hidden shrink-0 rounded-lg bg-[#4a7c44] px-2 py-1 text-[10px] font-bold text-white">Hemat Rp{{ number_format($voucher['discount'], 0, ',', '.') }}</span>
                <svg class="h-4 w-4 shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                </svg>
            </button>

            <div class="cart-checkout-bar fixed bottom-0 z-20 border-t border-gray-200 bg-white/95 px-4 py-4 shadow-[0_-4px_20px_rgba(0,0,0,0.06)] backdrop-blur-md">
                <dl class="mb-3 space-y-1.5 text-sm">
                    <div class="flex justify-between text-gray-600">
                        <dt>Subtotal</dt>
                        <dd id="cart-subtotal" class="font-medium text-umkm-brown">Rp0</dd>
                    </div>
                    <div class="flex justify-between text-gray-600">
                        <dt>Ongkos kirim</dt>
                        <dd id="cart-shipping" class="font-medium text-umkm-brown">Rp0</dd>
                    </div>
                    <div id="cart-discount-row" class="hidden flex justify-between text-[#4a7c44]">
                        <dt>Diskon voucher</dt>
                        <dd id="cart-discount" class="font-medium">-Rp0</dd>
                    </div>
                </dl>

                <label class="mb-3 flex cursor-pointer items-center gap-2">
                    <input type="checkbox" id="cart-select-all" class="h-4 w-4 rounded border-gray-300 text-[#4a7c44] focus:ring-[#4a7c44]/30">
                    <span class="text-sm font-semibold text-umkm-brown" id="cart-select-all-label">Pilih semua (0)</span>
                </label>

                <button
                    type="button"
                    id="cart-checkout-btn"
                    disabled
                    class="w-full rounded-full bg-[#4a7c44] py-3.5 text-sm font-bold text-white shadow-md transition hover:bg-[#3d6b3b] disabled:cursor-not-allowed disabled:bg-gray-300 disabled:shadow-none"
                >
                    Checkout (0) — Rp0
                </button>
            </div>
        </div>
    @endif
@endsection

@if ($shopCount > 0)
    @push('scripts')
    <script>
        (function () {
            const page = document.getElementById('cart-page');
            if (!page) return;

            const shippingPerShop = parseInt(page.dataset.shippingPerShop, 10) || 0;
            const voucherDiscount = parseInt(page.dataset.voucherDiscount, 10) || 0;
            let voucherApplied = false;

            const fmt = function (n) {
                return 'Rp' + n.toLocaleString('id-ID');
            };

            function allItems() {
                return Array.from(page.querySelectorAll('[data-cart-item]'));
            }

            function selectedItems() {
                return allItems().filter(function (el) {
                    return el.querySelector('[data-cart-item-check]').checked;
                });
            }

            function itemLineTotal(el) {
                const price = parseInt(el.dataset.price, 10);
                const qty = parseInt(el.querySelector('[data-qty-value]').textContent, 10) || 1;
                return price * qty;
            }

            function updateLineTotal(el) {
                el.querySelector('.cart-line-total').textContent = fmt(itemLineTotal(el));
            }

            function shopsWithSelection() {
                const shopIds = new Set();
                selectedItems().forEach(function (el) {
                    shopIds.add(el.dataset.shopId);
                });
                return shopIds.size;
            }

            function syncShopCheckbox(shopEl) {
                const items = shopEl.querySelectorAll('[data-cart-item-check]');
                const shopCheck = shopEl.querySelector('[data-cart-shop-check]');
                if (!items.length) return;
                const allChecked = Array.from(items).every(function (c) { return c.checked; });
                const someChecked = Array.from(items).some(function (c) { return c.checked; });
                shopCheck.checked = allChecked;
                shopCheck.indeterminate = someChecked && !allChecked;
            }

            function syncSelectAll() {
                const items = allItems();
                const selectAll = document.getElementById('cart-select-all');
                if (!selectAll || !items.length) return;
                const checked = items.filter(function (el) {
                    return el.querySelector('[data-cart-item-check]').checked;
                }).length;
                selectAll.checked = checked === items.length && items.length > 0;
                selectAll.indeterminate = checked > 0 && checked < items.length;
                document.getElementById('cart-select-all-label').textContent = 'Pilih semua (' + checked + ')';
            }

            function updateSummary() {
                const selected = selectedItems();
                const subtotal = selected.reduce(function (sum, el) {
                    return sum + itemLineTotal(el);
                }, 0);
                const shopCount = shopsWithSelection();
                const shipping = shopCount * shippingPerShop;
                const discount = voucherApplied && selected.length > 0 ? voucherDiscount : 0;
                const total = Math.max(0, subtotal + shipping - discount);

                document.getElementById('cart-subtotal').textContent = fmt(subtotal);
                document.getElementById('cart-shipping').textContent = fmt(shipping);
                document.getElementById('cart-discount-row').classList.toggle('hidden', discount === 0);
                document.getElementById('cart-discount').textContent = '-' + fmt(discount).replace('Rp', 'Rp');

                const btn = document.getElementById('cart-checkout-btn');
                const n = selected.length;
                btn.disabled = n === 0;
                btn.textContent = 'Checkout (' + n + ') — ' + fmt(total);

                syncSelectAll();
                page.querySelectorAll('[data-cart-shop]').forEach(syncShopCheckbox);

                const shopsLeft = page.querySelectorAll('[data-cart-shop]').length;
                const itemsLeft = allItems().length;
                document.getElementById('cart-header-meta').textContent = shopsLeft + ' toko · ' + itemsLeft + ' produk';
            }

            page.querySelectorAll('[data-cart-item]').forEach(function (row) {
                const check = row.querySelector('[data-cart-item-check]');
                check.addEventListener('change', updateSummary);

                row.querySelector('[data-qty-minus]').addEventListener('click', function () {
                    const val = row.querySelector('[data-qty-value]');
                    let n = parseInt(val.textContent, 10) || 1;
                    if (n > 1) {
                        val.textContent = n - 1;
                        updateLineTotal(row);
                        updateSummary();
                    }
                });

                row.querySelector('[data-qty-plus]').addEventListener('click', function () {
                    const val = row.querySelector('[data-qty-value]');
                    let n = parseInt(val.textContent, 10) || 1;
                    if (n < 99) {
                        val.textContent = n + 1;
                        updateLineTotal(row);
                        updateSummary();
                    }
                });

                row.querySelector('[data-cart-remove]').addEventListener('click', function () {
                    const shop = row.closest('[data-cart-shop]');
                    row.remove();
                    if (shop && !shop.querySelector('[data-cart-item]')) {
                        shop.remove();
                    }
                    if (!allItems().length) {
                        window.location.reload();
                    }
                    updateSummary();
                });
            });

            page.querySelectorAll('[data-cart-shop]').forEach(function (shopEl) {
                const shopCheck = shopEl.querySelector('[data-cart-shop-check]');
                shopCheck.addEventListener('change', function () {
                    shopEl.querySelectorAll('[data-cart-item-check]').forEach(function (c) {
                        c.checked = shopCheck.checked;
                    });
                    updateSummary();
                });
            });

            const selectAll = document.getElementById('cart-select-all');
            if (selectAll) {
                selectAll.addEventListener('change', function () {
                    allItems().forEach(function (row) {
                        row.querySelector('[data-cart-item-check]').checked = selectAll.checked;
                    });
                    updateSummary();
                });
            }

            document.getElementById('cart-voucher-toggle').addEventListener('click', function () {
                voucherApplied = !voucherApplied;
                document.getElementById('cart-voucher-badge').classList.toggle('hidden', !voucherApplied);
                this.classList.toggle('ring-2', voucherApplied);
                this.classList.toggle('ring-[#4a7c44]/30', voucherApplied);
                updateSummary();
            });

            document.getElementById('cart-clear-btn').addEventListener('click', function () {
                if (confirm('Kosongkan semua produk di keranjang?')) {
                    document.getElementById('cart-shops').innerHTML = '';
                    updateSummary();
                    setTimeout(function () { window.location.reload(); }, 100);
                }
            });

            document.getElementById('cart-checkout-btn').addEventListener('click', function () {
                if (!this.disabled) {
                    alert('Checkout berhasil disimulasikan. Terima kasih telah berbelanja produk UMKM!');
                }
            });

            allItems().forEach(updateLineTotal);
            updateSummary();
        })();
    </script>
    @endpush
@endif
