@props([
    'icon'        => '🔥',
    'title'       => 'Feature Title',
    'description' => 'Short description of the feature.',
    'highlight'   => false,
])

<div {{ $attributes->merge([
    'class' => 'group flex flex-col gap-4 p-8 rounded-2xl border transition-all duration-300 hover:-translate-y-1 hover:shadow-xl '
             . ($highlight
                ? 'bg-orange-500 border-orange-500 text-white shadow-lg shadow-orange-200'
                : 'bg-white border-gray-200 text-gray-900 shadow-sm hover:border-orange-300')
]) }}>

    {{-- Icon container --}}
    <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl shrink-0
                {{ $highlight ? 'bg-orange-400' : 'bg-orange-100 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300' }}">
        {!! $icon !!}
    </div>

    <div>
        <h3 class="text-lg font-bold mb-2 {{ $highlight ? 'text-white' : 'text-gray-900' }}">
            {{ $title }}
        </h3>
        <p class="text-sm leading-relaxed {{ $highlight ? 'text-orange-100' : 'text-gray-500' }}">
            {{ $description }}
        </p>
    </div>

</div>
