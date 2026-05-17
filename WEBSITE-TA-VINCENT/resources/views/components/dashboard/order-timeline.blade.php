@props(['items'])

<ol class="order-timeline space-y-0">
    @foreach ($items as $item)
        <li @class([
            'order-timeline__item',
            'order-timeline__item--done' => $item['done'] && ! ($item['current'] ?? false),
            'order-timeline__item--current' => $item['current'] ?? false,
            'order-timeline__item--pending' => ! $item['done'] && ! ($item['current'] ?? false),
        ])>
            <span class="order-timeline__marker" aria-hidden="true">
                @if ($item['done'] && ! ($item['current'] ?? false))
                    <svg class="h-3.5 w-3.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                @elseif ($item['current'] ?? false)
                    <span class="order-timeline__pulse"></span>
                @endif
            </span>
            <div class="order-timeline__content">
                <p class="text-sm font-semibold text-umkm-brown">{{ $item['label'] }}</p>
                @if ($item['sub'])
                    <p class="mt-0.5 text-xs text-gray-500">{{ $item['sub'] }}</p>
                @endif
            </div>
        </li>
    @endforeach
</ol>
