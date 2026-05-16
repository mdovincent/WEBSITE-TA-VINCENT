@props(['href' => '#', 'label' => 'Lihat Semua'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center gap-0.5 text-xs font-semibold text-umkm-forest transition hover:text-umkm-forest-dark sm:text-sm']) }}>
    {{ $label }}
    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
    </svg>
</a>
