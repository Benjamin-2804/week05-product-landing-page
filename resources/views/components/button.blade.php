@props([
    'href'    => null,
    'type'    => 'button',
    'variant' => 'primary',   // primary | secondary | outline | ghost
    'size'    => 'md',        // sm | md | lg
])

@php
    $base = 'inline-flex items-center justify-center font-semibold rounded-full transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2';

    $variants = [
        'primary'   => 'bg-orange-500 hover:bg-orange-600 text-white focus:ring-orange-400 shadow-sm hover:shadow-md',
        'secondary' => 'bg-gray-900 hover:bg-gray-800 text-white focus:ring-gray-700 shadow-sm hover:shadow-md',
        'outline'   => 'border-2 border-orange-500 text-orange-500 hover:bg-orange-50 focus:ring-orange-400',
        'ghost'     => 'text-gray-700 hover:text-orange-500 hover:bg-orange-50 focus:ring-orange-300',
    ];

    $sizes = [
        'sm' => 'text-xs px-4 py-2',
        'md' => 'text-sm px-6 py-2.5',
        'lg' => 'text-base px-8 py-3.5',
    ];

    $classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
