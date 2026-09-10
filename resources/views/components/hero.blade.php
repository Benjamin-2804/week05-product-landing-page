@props([
    'productName' => 'RonAyin LPG Store',
    'headline'    => 'Your Trusted LPG Partner',
    'description' => 'Safe, certified, and affordable liquefied petroleum gas delivered straight to your home or business — fast, hassle-free, every time.',
    'primaryCta'  => ['label' => 'Get Started Free', 'href' => '#get-started'],
    'secondaryCta'=> ['label' => 'View Products',    'href' => '#products'],
])

<section
    id="home"
    class="hero-bg relative min-h-screen flex items-center pt-16 overflow-hidden"
>
    {{-- Dark gradient overlay so text stays readable over the photo --}}
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/30" aria-hidden="true"></div>

    {{-- Extra bottom fade for a clean section boundary --}}
    <div class="absolute bottom-0 inset-x-0 h-32 bg-gradient-to-t from-gray-900/60 to-transparent" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

            {{-- Text column --}}
            <div class="flex-1 text-center lg:text-left max-w-2xl mx-auto lg:mx-0">

                <span class="inline-flex items-center gap-2 bg-orange-500/20 text-orange-300 border border-orange-500/40 text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-6 backdrop-blur-sm">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 0 0-1.071-.136 9.742 9.742 0 0 0-3.539 6.176 7.547 7.547 0 0 1-1.705-1.715.75.75 0 0 0-1.152-.082A9 9 0 1 0 15.68 4.534a7.46 7.46 0 0 1-2.717-2.248ZM15.75 14.25a3.75 3.75 0 1 1-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 0 1 1.925-3.546 3.75 3.75 0 0 1 3.255 3.718Z" clip-rule="evenodd" />
                    </svg>
                    {{ $productName }}
                </span>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight text-white mb-6 drop-shadow-lg">
                    {!! $headline !!}
                </h1>

                <p class="text-lg text-gray-200 leading-relaxed mb-10 max-w-xl mx-auto lg:mx-0">
                    {{ $description }}
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
                    <x-button href="{{ $primaryCta['href'] }}" variant="primary" size="lg">
                        {{ $primaryCta['label'] }}
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                        </svg>
                    </x-button>
                    <x-button
                        href="{{ $secondaryCta['href'] }}"
                        variant="outline"
                        size="lg"
                        class="border-white/60 text-white hover:bg-white/10 hover:border-white"
                    >
                        {{ $secondaryCta['label'] }}
                    </x-button>
                </div>

                {{-- Trust badges --}}
                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                    <div class="text-center lg:text-left">
                        <p class="text-2xl font-extrabold text-white">5,000<span class="text-orange-400">+</span></p>
                        <p class="text-xs text-gray-300 mt-0.5">Happy Customers</p>
                    </div>
                    <div class="w-px bg-white/20 hidden sm:block"></div>
                    <div class="text-center lg:text-left">
                        <p class="text-2xl font-extrabold text-white">24/7</p>
                        <p class="text-xs text-gray-300 mt-0.5">Support Available</p>
                    </div>
                    <div class="w-px bg-white/20 hidden sm:block"></div>
                    <div class="text-center lg:text-left">
                        <p class="text-2xl font-extrabold text-white">Same-<span class="text-orange-400">day</span></p>
                        <p class="text-xs text-gray-300 mt-0.5">Metro Delivery</p>
                    </div>
                </div>
            </div>

            {{-- Floating info card — right side --}}
            <div class="flex-1 flex justify-center lg:justify-end">
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl p-8 max-w-sm w-full shadow-2xl">

                    {{-- Store info from the banner in the photo --}}
                    <div class="flex items-center gap-3 mb-6">
                        <img src="{{ Vite::asset("resources/images/RonAyin's LPG Store Logo.png") }}"
                             alt="RonAyin LPG Store Logo"
                             class="w-12 h-12 rounded-2xl object-cover shadow-md shrink-0" />
                        <div>
                            <p class="text-white font-bold text-base leading-tight">RonAyin's LPG Store</p>
                            <p class="text-gray-300 text-xs mt-0.5">Brgy. San Isidro Pagsanjan, Laguna</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3 mb-6">
                        <a href="tel:+639353558958" class="flex items-center gap-3 text-sm text-gray-200 hover:text-orange-300 transition-colors">
                            <span class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center text-orange-400 shrink-0">📞</span>
                            0935-355-8958
                        </a>
                        <a href="tel:+639973279175" class="flex items-center gap-3 text-sm text-gray-200 hover:text-orange-300 transition-colors">
                            <span class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center text-orange-400 shrink-0">📞</span>
                            0997-327-9175
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100063899616677" target="_blank" rel="noopener noreferrer"
                           class="flex items-center gap-3 text-sm text-gray-200 hover:text-orange-300 transition-colors">
                            <span class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center text-orange-400 shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </span>
                            RONAYIN LPG STORE
                        </a>
                    </div>

                    {{-- Brands carried --}}
                    <div class="border-t border-white/10 pt-5">
                        <p class="text-[11px] font-bold text-gray-400 uppercase tracking-widest mb-3">Brands Available</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach (['Petron', 'Regasco', 'Solane', 'LM Gas'] as $brand)
                                <span class="bg-white/10 text-white text-xs font-semibold px-3 py-1 rounded-full border border-white/20">
                                    {{ $brand }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-5">
                        <span class="inline-flex items-center gap-2 bg-orange-500/30 text-orange-200 border border-orange-400/40 text-xs font-bold px-3 py-1.5 rounded-full">
                            ⚡ Fast &amp; Free Delivery
                        </span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
