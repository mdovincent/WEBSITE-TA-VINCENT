{{-- Hiasan latar halaman auth — hanya dekorasi visual --}}
<div class="pointer-events-none absolute inset-0 overflow-hidden auth-grain" aria-hidden="true">
    {{-- Gradasi lembut --}}
    <div class="absolute inset-0 bg-gradient-to-br from-umkm-sage/8 via-transparent to-umkm-gold/5"></div>

    {{-- Blob organik --}}
    <div class="absolute -bottom-32 -left-32 h-96 w-96 rounded-full bg-umkm-sage/25 blur-3xl auth-animate-pulse"></div>
    <div class="absolute -bottom-20 right-0 h-80 w-[32rem] rounded-[55%] bg-umkm-sage/20 blur-3xl auth-animate-pulse auth-animate-float-delay"></div>
    <div class="absolute top-1/4 left-1/4 h-48 w-48 rounded-full bg-umkm-gold/10 blur-2xl auth-animate-float-slow"></div>

    {{-- Cincin dekoratif --}}
    <div class="auth-animate-spin absolute -left-20 top-1/3 h-56 w-56 rounded-full border border-umkm-sage/15"></div>
    <div class="auth-animate-spin absolute -right-16 bottom-1/4 h-40 w-40 rounded-full border border-dashed border-umkm-gold/25" style="animation-direction: reverse;"></div>

    {{-- Daun kiri (bayangan) --}}
    <svg class="auth-animate-float-slow absolute -left-6 top-28 h-44 w-44 text-umkm-sage/12 sm:h-56 sm:w-56" viewBox="0 0 120 120" fill="currentColor">
        <path d="M62 8c-8 18-22 28-38 32 14 4 26 14 34 30 6-16 18-28 36-34-20-2-28-14-32-28z"/>
        <path d="M28 78c6 10 14 16 24 18-8 6-12 14-12 22 10-6 18-4 26 4-4-12-2-22 8-30-14 2-28-6-38-14z" opacity=".5"/>
    </svg>
    <svg class="auth-animate-float auth-animate-float-delay absolute left-8 top-[42%] h-16 w-16 text-umkm-sage/20" viewBox="0 0 40 40" fill="currentColor">
        <path d="M20 4c-6 8-10 16-10 24a10 10 0 1 0 20 0c0-8-4-16-10-24z"/>
    </svg>

    {{-- Ranting kanan atas --}}
    <svg class="absolute -right-2 top-0 h-52 w-52 text-umkm-sage/40 sm:h-64 sm:w-64" viewBox="0 0 200 200" fill="none" stroke="currentColor" stroke-width="1.2">
        <path d="M160 30c-20 35-55 50-90 45 25 15 35 40 25 70 30-35 55-50 85-55-15-25-10-45 5-60z" fill="currentColor" fill-opacity=".14"/>
        <path d="M150 40c-15 28-42 40-72 36 20 12 28 32 20 56 24-28 44-40 68-44-12-22-8-38 4-48z" fill="currentColor" fill-opacity=".08"/>
        <path d="M30 120c8 6 18 8 28 4M50 140c12 4 22 2 32-6"/>
        <circle cx="165" cy="28" r="3" fill="currentColor" fill-opacity=".3"/>
        <circle cx="178" cy="45" r="2" fill="currentColor" fill-opacity=".25"/>
    </svg>

    {{-- Garis emas melengkung --}}
    <svg class="absolute right-6 top-[32%] hidden h-36 w-20 text-umkm-gold/45 sm:block" viewBox="0 0 40 120" fill="none" stroke="currentColor" stroke-width="1">
        <path d="M20 4 Q8 40 20 60 T20 116" stroke-linecap="round"/>
        <path d="M28 20 Q36 50 24 70" stroke-linecap="round" opacity=".6"/>
        <path d="M12 35 Q4 55 14 75" stroke-linecap="round" opacity=".4"/>
    </svg>

    {{-- Grid titik emas --}}
    <div class="absolute right-14 top-[36%] hidden grid grid-cols-4 gap-2 sm:grid">
        @foreach (range(1, 12) as $i)
            <span class="h-1 w-1 rounded-full bg-umkm-gold/40 {{ $i % 3 === 0 ? 'opacity-100' : 'opacity-50' }}"></span>
        @endforeach
    </div>

    {{-- Sparkle tersebar --}}
    @php
        $sparkles = [
            ['top' => '18%', 'left' => '12%', 'size' => 'text-sm', 'delay' => ''],
            ['top' => '72%', 'left' => '8%', 'size' => 'text-xs', 'delay' => 'auth-animate-float-delay'],
            ['top' => '22%', 'right' => '18%', 'size' => 'text-xs', 'delay' => 'auth-animate-float-delay-2'],
            ['top' => '65%', 'right' => '12%', 'size' => 'text-sm', 'delay' => 'auth-animate-float-delay'],
            ['top' => '48%', 'left' => '6%', 'size' => 'text-[10px]', 'delay' => 'auth-animate-float-delay-2'],
        ];
    @endphp
    @foreach ($sparkles as $s)
        <span
            class="auth-animate-float absolute text-umkm-gold/55 {{ $s['size'] }} {{ $s['delay'] }}"
            style="top: {{ $s['top'] }}; {{ isset($s['left']) ? 'left: '.$s['left'] : 'right: '.$s['right'] }};"
        >✦</span>
    @endforeach

    {{-- Daun kecil kanan bawah --}}
    <svg class="auth-animate-float-slow auth-animate-float-delay-2 absolute bottom-24 right-[18%] h-10 w-10 text-umkm-sage/30" viewBox="0 0 40 40" fill="currentColor">
        <path d="M20 6c-5 6-8 12-8 18a8 8 0 1 0 16 0c0-6-3-12-8-18z"/>
    </svg>
</div>
