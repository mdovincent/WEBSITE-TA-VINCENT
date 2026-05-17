@props(['step' => 1, 'compact' => false])

@php
    $steps = ['Pesanan', 'Diproses', 'Dikirim', 'Selesai'];
    $step = max(0, min(4, (int) $step));
@endphp

@if ($step > 0)
    <div @class(['order-progress', 'order-progress--compact' => $compact]) role="list" aria-label="Progres pesanan">
        @foreach ($steps as $i => $label)
            @php $n = $i + 1; @endphp
            <div
                role="listitem"
                @class([
                    'order-progress__step',
                    'order-progress__step--done' => $n < $step,
                    'order-progress__step--active' => $n === $step,
                ])
            >
                <span class="order-progress__dot" aria-hidden="true">
                    @if ($n < $step)
                        <svg class="h-2.5 w-2.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                    @endif
                </span>
                @unless ($compact)
                    <span class="order-progress__label">{{ $label }}</span>
                @endunless
            </div>
            @if (! $loop->last)
                <span @class(['order-progress__line', 'order-progress__line--done' => $n < $step])" aria-hidden="true"></span>
            @endif
        @endforeach
    </div>
@endif
