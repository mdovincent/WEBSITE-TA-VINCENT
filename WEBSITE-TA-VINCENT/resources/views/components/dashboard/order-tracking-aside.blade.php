@props(['status'])

@php
    $messages = [
        'selesai' => 'Terima kasih! Pesanan Anda telah selesai diterima.',
        'dikirim' => 'Pesanan sedang dalam perjalanan ke alamat Anda.',
        'diproses' => 'Penjual sedang menyiapkan pesanan Anda.',
        'dibatalkan' => 'Pesanan ini telah dibatalkan.',
    ];
    $message = $messages[$status] ?? $messages['diproses'];
@endphp

<div class="flex flex-col items-center justify-center gap-4 rounded-xl border border-[#dce8da] bg-gradient-to-b from-[#f8faf5] to-white p-5 text-center lg:p-6">
    @if ($status === 'selesai')
        <div class="relative flex h-28 w-28 items-center justify-center" aria-hidden="true">
            <span class="absolute inset-0 rounded-full bg-[#e8f0e6]/80"></span>
            <svg class="relative h-20 w-20 text-[#4a7c44]/70" fill="none" viewBox="0 0 96 96" stroke="currentColor" stroke-width="1.25">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20 32h56v40a4 4 0 0 1-4 4H24a4 4 0 0 1-4-4V32Z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M20 32 28 20h40l8 12"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M36 52h24"/>
            </svg>
            <span class="absolute -bottom-1 -right-1 flex h-9 w-9 items-center justify-center rounded-full bg-[#4a7c44] text-white shadow-md">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
            </span>
        </div>
    @elseif ($status === 'dikirim')
        <div class="flex h-28 w-28 items-center justify-center rounded-full bg-[#eff6ff]" aria-hidden="true">
            <svg class="h-14 w-14 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V7.5a1.125 1.125 0 0 1 1.125-1.125h17.25c.621 0 1.125.504 1.125 1.125v10.375c0 .621-.504 1.125-1.125 1.125H18.75m-7.5-10v4.5m0-4.5h7.5m-7.5 0H6.375"/>
            </svg>
        </div>
    @elseif ($status === 'dibatalkan')
        <div class="flex h-28 w-28 items-center justify-center rounded-full bg-gray-100" aria-hidden="true">
            <svg class="h-14 w-14 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>
        </div>
    @else
        <div class="flex h-28 w-28 items-center justify-center rounded-full bg-[#fff7ed]" aria-hidden="true">
            <svg class="h-14 w-14 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>
        </div>
    @endif

    <p @class([
        'w-full rounded-xl px-4 py-3 text-xs font-medium leading-relaxed sm:text-sm',
        'bg-[#e8f0e6] text-[#3d6b3b]' => $status === 'selesai',
        'bg-[#eff6ff] text-blue-700' => $status === 'dikirim',
        'bg-[#fff7ed] text-orange-700' => $status === 'diproses',
        'bg-gray-100 text-gray-600' => $status === 'dibatalkan',
    ])>
        {{ $message }}
    </p>
</div>
