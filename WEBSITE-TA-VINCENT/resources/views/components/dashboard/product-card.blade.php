@props([
    'product',
    'flash' => false,
    'horizontal' => true,
])

@php
    $formatPrice = fn (int $n) => 'Rp '.number_format($n, 0, ',', '.');
    $isGrid = ! $horizontal;
    $sizeClass = $horizontal ? 'w-[148px] shrink-0 snap-start sm:w-[158px]' : 'w-full min-w-0';
    $imageWrapClass = $isGrid
        ? 'relative h-[140px] w-full overflow-hidden bg-gray-100 sm:h-[152px]'
        : 'relative aspect-square overflow-hidden bg-gray-100';
    $dash = $dashboardUrl ?? fn (?string $f = null) => route('dashboard').($f ? '#'.$f : '');
    $productLink = $dash('produk');
@endphp

<article {{ $attributes->merge(['class' => $sizeClass]) }}>
    <a href="{{ $productLink }}" class="group block overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-100 transition hover:shadow-md">
        <div class="{{ $imageWrapClass }}">
            <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" class="h-full w-full object-cover object-center transition duration-300 group-hover:scale-105" width="{{ $isGrid ? 200 : 172 }}" height="{{ $isGrid ? 152 : 172 }}" loading="lazy">
            @if ($flash && $product['discount'])
                <span class="absolute left-2 top-2 rounded-md bg-red-500 px-1.5 py-0.5 text-[10px] font-bold text-white">-{{ $product['discount'] }}%</span>
            @endif
            @unless($flash)
                <button type="button" class="absolute right-2 top-2 rounded-full bg-white/90 p-1.5 text-umkm-muted shadow-sm transition hover:text-red-500" aria-label="Tambah ke wishlist">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/></svg>
                </button>
            @endunless
        </div>
        <div class="{{ $isGrid ? 'p-2' : 'p-2.5' }}">
            <h3 class="line-clamp-2 {{ $isGrid ? 'min-h-[2.25rem]' : 'min-h-[2.5rem]' }} text-xs font-medium leading-snug text-umkm-brown">{{ $product['name'] }}</h3>
            <div class="mt-1.5 flex flex-wrap items-baseline gap-1">
                <span class="text-sm font-bold {{ $flash ? 'text-red-600' : 'text-umkm-brown' }}">{{ $formatPrice($product['price']) }}</span>
                @if ($product['original'])
                    <span class="text-[10px] text-umkm-muted line-through">{{ $formatPrice($product['original']) }}</span>
                @endif
            </div>
            <p class="mt-1 flex items-center gap-1 text-[10px] text-gray-500">
                <span class="flex items-center gap-0.5 font-medium text-amber-500">
                    <svg class="h-3 w-3 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292Z"/></svg>
                    {{ $product['rating'] }}
                </span>
                <span class="text-gray-300">|</span>
                <span>{{ $product['sold'] }} terjual</span>
            </p>
        </div>
    </a>
</article>
