@extends('layouts.dashboard', ['active' => 'pesanan'])

@section('title', 'Pesanan Saya')

@section('content')
    @php
        $queryParams = fn (array $extra = []) => array_filter(array_merge(
            request()->only(['status', 'q', 'sort']),
            $extra
        ), fn ($v) => $v !== null && $v !== '');
    @endphp

    <section class="w-full overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100" id="orders-page">
        <div class="border-b border-gray-100 px-4 py-4 sm:px-5">
            <div class="flex items-center justify-between gap-2">
                <h1 class="flex items-center gap-2 text-base font-bold text-umkm-brown sm:text-lg">
                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-[#e8f0e6] text-[#4a7c44]">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                            <path d="M12 3c-4 4-6 8-6 12a6 6 0 1 0 12 0c0-4-2-8-6-12Z" stroke-linecap="round"/>
                            <path d="M12 11v10" stroke-linecap="round"/>
                        </svg>
                    </span>
                    Pesanan Saya
                </h1>
                <button
                    type="button"
                    id="orders-filter-toggle"
                    class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#f5f6f8] text-gray-500 transition hover:bg-[#e8f0e6] hover:text-[#4a7c44]"
                    aria-label="Filter dan urutkan"
                    aria-expanded="false"
                    aria-controls="orders-filter-panel"
                >
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m0 0a1.5 1.5 0 0 1 3 0m-3 0a1.5 1.5 0 0 0 3 0m0 0h9.75M7.5 12h9.75m-9.75 0a1.5 1.5 0 0 1 3 0m-3 0a1.5 1.5 0 0 0 3 0m-9.75 0h9.75m0 0a1.5 1.5 0 0 1 3 0m-3 0a1.5 1.5 0 0 0 3 0"/>
                    </svg>
                </button>
            </div>

            <form action="{{ route('orders.index') }}" method="GET" class="mt-3" role="search">
                @if ($activeStatus !== 'semua')
                    <input type="hidden" name="status" value="{{ $activeStatus }}">
                @endif
                @if ($sort !== 'terbaru')
                    <input type="hidden" name="sort" value="{{ $sort }}">
                @endif
                <div class="relative">
                    <svg class="pointer-events-none absolute left-3.5 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                    </svg>
                    <input
                        type="search"
                        name="q"
                        value="{{ $search }}"
                        placeholder="Cari nomor pesanan, toko, atau produk..."
                        class="h-10 w-full rounded-xl border border-gray-200 bg-[#f5f6f8] pl-10 pr-4 text-sm text-umkm-brown outline-none transition placeholder:text-gray-400 focus:border-[#4a7c44]/40 focus:bg-white focus:ring-2 focus:ring-[#4a7c44]/15"
                    >
                </div>
            </form>

            <div id="orders-filter-panel" class="mt-3 hidden rounded-xl border border-gray-100 bg-[#f8faf5] p-3" hidden>
                <p class="mb-2 text-[11px] font-bold uppercase tracking-wide text-gray-400">Urutkan</p>
                <div class="flex gap-2">
                    <a
                        href="{{ route('orders.index', $queryParams(['sort' => 'terbaru'])) }}"
                        @class([
                            'flex-1 rounded-lg py-2 text-center text-xs font-semibold transition',
                            'bg-[#4a7c44] text-white' => $sort === 'terbaru',
                            'bg-white text-gray-600 ring-1 ring-gray-200 hover:bg-gray-50' => $sort !== 'terbaru',
                        ])
                    >Terbaru</a>
                    <a
                        href="{{ route('orders.index', $queryParams(['sort' => 'terlama'])) }}"
                        @class([
                            'flex-1 rounded-lg py-2 text-center text-xs font-semibold transition',
                            'bg-[#4a7c44] text-white' => $sort === 'terlama',
                            'bg-white text-gray-600 ring-1 ring-gray-200 hover:bg-gray-50' => $sort !== 'terlama',
                        ])
                    >Terlama</a>
                </div>
            </div>
        </div>

        <nav class="flex overflow-x-auto border-b border-gray-100 px-2 scrollbar-none" aria-label="Filter status pesanan">
            @foreach ($tabs as $key => $label)
                <a
                    href="{{ route('orders.index', $queryParams($key === 'semua' ? [] : ['status' => $key])) }}"
                    @class([
                        'order-tab shrink-0 px-3 py-3 text-xs font-semibold transition sm:px-4 sm:text-sm',
                        'order-tab-active' => $activeStatus === $key,
                        'text-gray-400 hover:text-gray-600' => $activeStatus !== $key,
                    ])
                >
                    {{ $label }}
                    <span @class(['ml-0.5', 'text-[#4a7c44]' => $activeStatus === $key])">({{ $tabCounts[$key] }})</span>
                </a>
            @endforeach
        </nav>

        <div class="space-y-3 p-4 sm:p-5">
            @if ($search !== '')
                <p class="text-xs text-gray-500">
                    {{ count($orders) }} hasil untuk "<span class="font-semibold text-umkm-brown">{{ $search }}</span>"
                </p>
            @endif

            @forelse ($orders as $order)
                <x-dashboard.order-card :order="$order" />
            @empty
                <div class="flex flex-col items-center justify-center rounded-2xl border border-dashed border-gray-200 bg-[#f8faf5] px-6 py-12 text-center">
                    <svg class="h-12 w-12 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15a2.25 2.25 0 0 1 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25Z"/>
                    </svg>
                    <p class="mt-3 text-sm font-semibold text-umkm-brown">Belum ada pesanan</p>
                    <p class="mt-1 text-xs text-gray-500">
                        @if ($search !== '')
                            Coba kata kunci lain atau hapus filter pencarian.
                        @else
                            Pesanan dengan status ini akan muncul di sini.
                        @endif
                    </p>
                    @if ($activeStatus !== 'semua' || $search !== '')
                        <a href="{{ route('orders.index') }}" class="mt-4 text-xs font-semibold text-[#4a7c44] hover:underline">Lihat semua pesanan</a>
                    @endif
                </div>
            @endforelse
        </div>
    </section>
@endsection

@push('scripts')
<script>
    (function () {
        const toggle = document.getElementById('orders-filter-toggle');
        const panel = document.getElementById('orders-filter-panel');
        if (!toggle || !panel) return;

        toggle.addEventListener('click', function () {
            const isHidden = panel.classList.toggle('hidden');
            panel.hidden = isHidden;
            toggle.setAttribute('aria-expanded', isHidden ? 'false' : 'true');
        });
    })();
</script>
@endpush
