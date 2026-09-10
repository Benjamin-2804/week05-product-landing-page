@props([
    'name'    => 'Product Name',
    'price'   => '₱0',
    'tag'     => null,
    'image'   => null,   // pass src when photo is ready
    'ctaHref' => '#get-started',
])

<div {{ $attributes->merge([
    'class' => 'group flex flex-col bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300'
]) }}>

    {{-- Photo area --}}
    <div class="relative bg-gray-100 aspect-square overflow-hidden">
        @if ($image)
            <img
                src="{{ $image }}"
                alt="{{ $name }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            />
        @else
            {{-- Placeholder shown until real photo is dropped in --}}
            <div class="w-full h-full flex flex-col items-center justify-center gap-3 bg-gradient-to-br from-gray-100 to-gray-200">
                <svg class="w-12 h-12 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M3.75 21h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v13.5A1.5 1.5 0 0 0 3.75 21Zm9-6.75a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0Z" />
                </svg>
                <span class="text-xs text-gray-400 font-medium">Photo coming soon</span>
            </div>
        @endif

        {{-- Tag badge --}}
        @if ($tag)
            <span class="absolute top-3 left-3 bg-orange-500 text-white text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full shadow">
                {{ $tag }}
            </span>
        @endif
    </div>

    {{-- Info --}}
    <div class="flex items-center justify-between gap-2 px-4 py-4">
        <div class="min-w-0">
            <p class="text-sm font-semibold text-gray-900 truncate">{{ $name }}</p>
            <p class="text-xs text-gray-400 mt-0.5">Tap to order</p>
        </div>
        <div class="flex items-center gap-3 shrink-0">
            <span class="text-base font-extrabold text-orange-500">{{ $price }}</span>
            <a
                href="{{ $ctaHref }}"
                class="bg-orange-500 hover:bg-orange-600 text-white text-xs font-bold px-3 py-1.5 rounded-full transition-colors whitespace-nowrap"
                aria-label="Order {{ $name }}"
            >
                Order
            </a>
        </div>
    </div>

</div>
