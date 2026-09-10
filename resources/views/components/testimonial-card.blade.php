@props([
    'name'     => 'Customer Name',
    'position' => 'Position, Company',
    'review'   => 'Great service!',
    'avatar'   => null,
    'rating'   => 5,
    'initials' => null,
])

@php
    $initials = $initials ?? strtoupper(substr($name, 0, 1));
@endphp

<figure {{ $attributes->merge([
    'class' => 'flex flex-col bg-white border border-gray-100 rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1'
]) }}>

    {{-- Stars --}}
    <div class="flex gap-0.5 mb-5" aria-label="{{ $rating }} out of 5 stars">
        @for ($i = 1; $i <= 5; $i++)
            <svg class="w-4 h-4 {{ $i <= $rating ? 'text-amber-400' : 'text-gray-200' }}"
                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292Z" />
            </svg>
        @endfor
    </div>

    {{-- Review --}}
    <blockquote class="text-gray-600 text-sm leading-relaxed flex-1 mb-6">
        "{{ $review }}"
    </blockquote>

    {{-- Author --}}
    <figcaption class="flex items-center gap-4 border-t border-gray-50 pt-5">
        @if ($avatar)
            <img
                src="{{ $avatar }}"
                alt="{{ $name }}"
                class="w-11 h-11 rounded-full object-cover ring-2 ring-orange-100"
            />
        @else
            <div class="w-11 h-11 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 font-bold text-sm ring-2 ring-orange-50 shrink-0" aria-hidden="true">
                {{ $initials }}
            </div>
        @endif
        <div>
            <p class="text-sm font-semibold text-gray-900">{{ $name }}</p>
            <p class="text-xs text-gray-400">{{ $position }}</p>
        </div>
    </figcaption>

</figure>
