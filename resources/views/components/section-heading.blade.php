@props([
    'eyebrow'  => null,
    'title'    => '',
    'subtitle' => null,
    'align'    => 'center',   // center | left
])

<div class="{{ $align === 'center' ? 'text-center' : 'text-left' }} mb-16">
    @if ($eyebrow)
        <span class="inline-block text-orange-500 font-bold text-xs uppercase tracking-widest mb-3">
            {{ $eyebrow }}
        </span>
    @endif

    <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 leading-tight">
        {!! $title !!}
    </h2>

    @if ($subtitle)
        <p class="mt-4 text-gray-500 text-lg leading-relaxed {{ $align === 'center' ? 'max-w-2xl mx-auto' : 'max-w-2xl' }}">
            {{ $subtitle }}
        </p>
    @endif
</div>
