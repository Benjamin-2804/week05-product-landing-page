@extends('layouts.app')

@section('title', 'RonAyin LPG Store  ESafe & Reliable Gas Delivery')
@section('description', 'RonAyin LPG Store delivers safe, DOE-certified liquefied petroleum gas to homes and businesses. Order online or call us for same-day delivery.')

@section('content')

    {{-- ===== 1. HERO ===== --}}
    <x-hero
        product-name="RonAyin LPG Store"
        headline='Your Trusted<br /><span class="text-orange-500">LPG Partner</span>'
        description="Safe, certified, and affordable liquefied petroleum gas delivered straight to your home or business. Fast, hassle-free, every time."
        :primary-cta="['label' => 'Shop Products', 'href' => '#products']"
        :secondary-cta="['label' => 'Contact Us',   'href' => '#contact']"
    />

    {{-- ===== 2. FEATURES ===== --}}
    <section id="features" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Why customers keep coming back</h2>
                <p class="text-gray-500 mt-3 max-w-xl mx-auto">We've been serving Pagsanjan and nearby areas for years. Here's what we're known for.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <x-feature-card
                    title="DOE Safety Certified"
                    description="All our tanks are checked and certified. We don't deliver anything we wouldn't use ourselves."
                    :highlight="true"
                >
                    <x-slot:icon>
                        <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Fast Delivery"
                    description="Order in the morning, get it in the afternoon. We deliver same-day within our coverage area."
                >
                    <x-slot:icon>
                        <svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875H3.75a3 3 0 1 0 5.25-2.032 3.001 3.001 0 0 0-2.73-2.918V15h-3v-1.5ZM6 16.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                            <path d="M15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75ZM19.5 19.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Always Available"
                    description="Call or text us anytime. We're a family business  Ethere's always someone ready to take your order."
                >
                    <x-slot:icon>
                        <svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Tank Exchange"
                    description="Bring your empty tank, swap it for a full one. Quick, easy, no hassle."
                >
                    <x-slot:icon>
                        <svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M15.97 2.47a.75.75 0 0 1 1.06 0l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 1 1-1.06-1.06l3.22-3.22H7.5a.75.75 0 0 1 0-1.5h11.69l-3.22-3.22a.75.75 0 0 1 0-1.06Zm-7.94 9a.75.75 0 0 1 0 1.06l-3.22 3.22H16.5a.75.75 0 0 1 0 1.5H4.81l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Honest Prices"
                    description="No hidden charges, no surprises. What you see is what you pay  Ealways."
                >
                    <x-slot:icon>
                        <svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                            <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z" clip-rule="evenodd" />
                            <path d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Multiple Brands"
                    description="We carry Petron, Regasco, Solane, and LM Gas  Eso you can stick with the brand you trust."
                >
                    <x-slot:icon>
                        <svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-2.079 3.208-4.772 3.208-8.017 0-3.313-1.652-5.76-3.762-7.21A8.987 8.987 0 0 0 12 2a8.987 8.987 0 0 0-3.735.8C6.152 4.241 4.5 6.688 4.5 10.003c0 3.245 1.264 5.938 3.208 8.017a19.58 19.58 0 0 0 2.683 2.282 16.974 16.974 0 0 0 1.144.742l.07.041ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

            </div>
        </div>
    </section>

    {{-- ===== 3. PRODUCTS ===== --}}
    <section id="products" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Products & Parts</h2>
                <p class="text-gray-500 mt-3">Tanks, regulators, hoses, and more. Click any item to view details.</p>
            </div>

            {{-- Category filter tabs --}}
            <div class="flex flex-wrap gap-2 justify-center mb-10" id="category-filters">
                @foreach (['All', 'LPG Tanks', 'Regulators', 'Hoses & Fittings', 'Accessories'] as $cat)
                    <button
                        type="button"
                        data-filter="{{ $cat }}"
                        onclick="filterProducts(this)"
                        class="text-sm font-medium px-4 py-2 rounded-full border transition-colors
                               {{ $loop->first
                                    ? 'bg-orange-500 text-white border-orange-500'
                                    : 'bg-white text-gray-600 border-gray-200 hover:border-orange-300 hover:text-orange-500' }}"
                    >
                        {{ $cat }}
                    </button>
                @endforeach
            </div>

            {{-- Product grid --}}
            <div id="product-grid" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
                <x-pricing-card data-category="LPG Tanks"       name="11 kg LPG Tank"          price="₱1,100"   tag="Home Use"    cta-href="#get-started"
                    :image="Vite::asset('resources/images/11 kg lpg.jpg')"
                    description="Perfect for small households. Lightweight, easy to carry, and fits standard stove regulators. Ideal for 1 E person homes with moderate cooking use." />
                <x-pricing-card data-category="LPG Tanks"       name="22 kg LPG Tank"          price="₱2,204"   tag="Best Seller"  cta-href="#get-started"
                    :image="Vite::asset('resources/images/22 kg lpg.jpg')"
                    description="Our most popular size. Great for medium-sized families, small restaurants, and carinderias. Lasts longer between refills and saves you more per kilo." />
                <x-pricing-card data-category="LPG Tanks"       name="50 kg LPG Tank"          price="₱4,600"   tag="Commercial"   cta-href="#get-started"
                    :image="Vite::asset('resources/images/50kg.jpg')"
                    description="Built for heavy commercial use  Erestaurants, bakeries, and food businesses with high daily gas consumption. Reduces how often you need to reorder." />
                <x-pricing-card data-category="LPG Tanks"       name="2.7 kg Portable Tank"    price="₱380"                        cta-href="#get-started"
                    :image="Vite::asset('resources/images/2.7kg.jpg')"
                    description="Compact and travel-friendly. Great for camping, small stalls, or as a backup tank at home. Works with standard portable stove connectors." />
                <x-pricing-card data-category="Regulators"      name="Standard Regulator"      price="₱120"                        cta-href="#get-started"
                    :image="Vite::asset('resources/images/Regulator.jpg')"
                    description="Compatible with most household LPG tanks and stoves. Regulates gas pressure for safe and consistent flow. Replacement or spare unit." />
                <x-pricing-card data-category="Regulators"      name="High-Pressure Regulator" price="₱280"                        cta-href="#get-started"
                    :image="Vite::asset('resources/images/High pressure regulator.jpg')"
                    description="For commercial burners and equipment that require higher gas pressure. More durable build, suitable for heavy daily use." />
                <x-pricing-card data-category="Regulators"      name="Dual-Stage Regulator"    price="₱350"                        cta-href="#get-started"
                    :image="Vite::asset('resources/images/Dual stage regulator.jpg')"
                    description="Two-stage pressure reduction for more consistent gas flow. Good choice for businesses that need steady pressure throughout the day." />
                <x-pricing-card data-category="Hoses & Fittings" name="LPG Rubber Hose (1m)"  price="₱95"                         cta-href="#get-started"
                    :image="Vite::asset('resources/images/1m hose.jpg')"
                    description="1-meter LPG-grade rubber hose. Connects your tank regulator to your stove or burner. Heat-resistant and pressure-tested." />
                <x-pricing-card data-category="Hoses & Fittings" name="LPG Rubber Hose (2m)"  price="₱160"                        cta-href="#get-started"
                    :image="Vite::asset('resources/images/2m.jpg')"
                    description="2-meter LPG-grade rubber hose. Useful when your stove is farther from the tank. Heat-resistant and pressure-tested." />
                <x-pricing-card data-category="Hoses & Fittings" name="Hose Clamp Set"         price="₱45"                         cta-href="#get-started"
                    :image="Vite::asset('resources/images/hose clamp.jpg')"
                    description="Secure your LPG hose connections tightly. Prevents gas leaks at the joints. Fits standard hose diameters. Sold as a set of two clamps." />
                {{-- Last row: 2 items  Ecentred with col-start --}}
                <x-pricing-card data-category="Hoses & Fittings" class="xl:col-start-2" name="Quick-Connect Fitting" price="₱75"  cta-href="#get-started"
                    :image="Vite::asset('resources/images/quick connect.jpg')"
                    description="Makes connecting and disconnecting your LPG hose faster and safer. No tools needed. Compatible with standard tank and stove connectors." />
                <x-pricing-card data-category="Accessories"     name="LPG Safety Cap"          price="₱35"                         cta-href="#get-started"
                    :image="Vite::asset('resources/images/safety cap.jpg')"
                    description="Protective cap that covers the tank valve when not in use. Prevents accidental gas release and keeps dust and debris out of the valve." />
            </div>

            <p class="text-center text-sm text-gray-400 mt-10">
                Need something not on the list?
                <a href="#contact" class="text-orange-500 hover:underline font-medium ml-1">Message us ↁE/a>
            </p>

        </div>
    </section>

    {{-- ===== 4. STORE PHOTOS ===== --}}
    <section id="showcase" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Our Store</h2>
                <p class="text-gray-500 mt-3">Located at Brgy. San Isidro, Pagsanjan, Laguna. Drop by or call ahead for pickup.</p>
            </div>

            {{-- Photo grid  Enatural aspect ratio, no cropping --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-12">
                <div class="rounded-2xl overflow-hidden shadow-sm">
                    <img src="{{ Vite::asset('resources/images/Stacked.jpg') }}"
                         alt="LPG tanks stacked at RonAyin store"
                         class="w-full h-auto" />
                </div>
                <div class="rounded-2xl overflow-hidden shadow-sm">
                    <img src="{{ Vite::asset('resources/images/Stacked 2.jpg') }}"
                         alt="LPG tanks available at RonAyin store"
                         class="w-full h-auto" />
                </div>
                <div class="rounded-2xl overflow-hidden shadow-sm">
                    <img src="{{ Vite::asset('resources/images/140660599_112675307448584_3543176545709897582_n.jpg') }}"
                         alt="RonAyin LPG Store"
                         class="w-full h-auto" />
                </div>
                <div class="rounded-2xl overflow-hidden shadow-sm">
                    <img src="{{ Vite::asset('resources/images/486840628_1137077201765590_573406302113235066_n.jpg') }}"
                         alt="RonAyin LPG Store products"
                         class="w-full h-auto" />
                </div>
            </div>

            {{-- How it works + Map side by side --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-0">

                {{-- How to order --}}
                <div class="bg-gray-50 rounded-2xl p-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-6">How to Order</h3>
                    <div class="flex flex-col gap-5">
                        @foreach ([
                            ['step' => '1', 'title' => 'Call or Text Us',         'body' => '0935-355-8958 or 0997-327-9175. Tell us what you need and your address.'],
                            ['step' => '2', 'title' => 'We Prepare Your Order',   'body' => 'We check stock and get your tank or parts ready. Usually takes just a few minutes.'],
                            ['step' => '3', 'title' => 'Delivered to Your Door',  'body' => 'Same-day delivery. Our rider checks connections and makes sure everything is safe before leaving.'],
                        ] as $s)
                            <div class="flex items-start gap-4">
                                <div class="w-9 h-9 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm font-bold shrink-0">
                                    {{ $s['step'] }}
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">{{ $s['title'] }}</p>
                                    <p class="text-gray-500 text-sm mt-0.5">{{ $s['body'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Map --}}
                <div class="flex flex-col gap-4">
                    <div class="rounded-2xl overflow-hidden shadow-sm border border-gray-200 flex-1">
                        <iframe
                            title="RonAyin LPG Store location"
                            src="https://maps.google.com/maps?q=7FH4%2B9Q3+San+Isidro+Pagsanjan+Laguna+Philippines&output=embed"
                            width="100%"
                            height="280"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full"
                        ></iframe>
                    </div>
                    <a
                        href="https://maps.google.com/?q=7FH4%2B9Q3+San+Isidro+Pagsanjan+Laguna+Philippines"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex items-center justify-center gap-2 bg-gray-50 hover:bg-orange-50 border border-gray-200 hover:border-orange-300 text-gray-700 hover:text-orange-500 font-semibold text-sm py-3 rounded-xl transition-colors"
                    >
                        <svg class="w-4 h-4 text-orange-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-2.079 3.208-4.772 3.208-8.017 0-3.313-1.652-5.76-3.762-7.21A8.987 8.987 0 0 0 12 2a8.987 8.987 0 0 0-3.735.8C6.152 4.241 4.5 6.688 4.5 10.003c0 3.245 1.264 5.938 3.208 8.017a19.58 19.58 0 0 0 2.683 2.282 16.974 16.974 0 0 0 1.144.742l.07.041ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                        </svg>
                        Open in Google Maps
                    </a>
                </div>

            </div>

        </div>
    </section>

    {{-- ===== 5. TESTIMONIALS ===== --}}
    <section id="testimonials" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">What our customers say</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <x-testimonial-card
                    name="Maria S."
                    position="Pagsanjan"
                    initials="M"
                    :rating="5"
                    review="Nagtawag lang ako ng umaga, nadeliver na ng tanghali. Yung rider nag-check pa ng connections bago umalis. Sobrang bilis talaga!" />

                <x-testimonial-card
                    name="Ramon C."
                    position="Restaurant owner, nearby area"
                    initials="R"
                    :rating="5"
                    review="Dalawang taon na kaming gumagamit ng RonAyin para sa aming restaurant. Hindi pa kami nabigo kahit minsan. Tama lang ang presyo at laging on-time." />

                <x-testimonial-card
                    name="Tita Nely"
                    position="Regular customer"
                    initials="N"
                    :rating="5"
                    review="Dito na lang talaga ako bumibili. Malapit, mabilis, at hindi magastos. Yung mga tauhan nila magalang at maayos." />

                <x-testimonial-card
                    name="Bernard L."
                    position="Bakery owner, Laguna"
                    initials="B"
                    :rating="5"
                    review="Para sa aming bakery na mataas ang gamit ng gas, malaking tulong ang RonAyin. Laging may stock at maaasahan." />

                <x-testimonial-card
                    name="Jenny R."
                    position="Catering business"
                    initials="J"
                    :rating="5"
                    review="Gusto ko na may hose at regulator din sila. One stop na lahat. Hindi na ako pumupunta pa sa ibang lugar." />

                <x-testimonial-card
                    name="Carlo M."
                    position="Food stall, Pagsanjan"
                    initials="C"
                    :rating="5"
                    review="Yung 11 kg na tank sakto lang sa aming tindahan. Presyo hindi lumalayo, at palagi silang sumasagot pag tinawagan mo." />

            </div>
        </div>
    </section>

    {{-- ===== 6. CONTACT / CTA ===== --}}
    <section id="cta" class="py-16 bg-orange-500">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-3">Need gas? Give us a ring.</h2>
            <p class="text-orange-100 mb-8 text-lg">We're based in Brgy. San Isidro, Pagsanjan, Laguna. Call or text us and we'll sort you out.</p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-10">
                <a href="tel:+639353558958"
                   class="bg-white text-orange-500 font-bold text-base px-8 py-3.5 rounded-full hover:bg-orange-50 transition-colors shadow-sm">
                    📞 0935-355-8958
                </a>
                <a href="tel:+639973279175"
                   class="bg-white text-orange-500 font-bold text-base px-8 py-3.5 rounded-full hover:bg-orange-50 transition-colors shadow-sm">
                    📞 0997-327-9175
                </a>
                <a href="https://www.facebook.com/profile.php?id=100063899616677"
                   target="_blank" rel="noopener noreferrer"
                   class="bg-orange-600 text-white font-bold text-base px-8 py-3.5 rounded-full hover:bg-orange-700 transition-colors">
                    Message on Facebook
                </a>
            </div>

            <p class="text-orange-100 text-sm">Or fill in the form below and we'll get back to you.</p>
        </div>
    </section>

    {{-- ===== 7. ORDER FORM ===== --}}
    <section id="get-started" class="py-16 bg-white">
        <div class="max-w-xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Place an Order</h2>
                <p class="text-gray-500 mt-2 text-sm">Fill this in and we'll confirm your order shortly.</p>
            </div>

            <form class="bg-gray-50 border border-gray-200 rounded-2xl p-7" action="#" method="POST">
                @csrf
                <div class="flex flex-col gap-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="reg-fname" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                            <input id="reg-fname" type="text" name="first_name" required placeholder="Juan"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition bg-white" />
                        </div>
                        <div>
                            <label for="reg-lname" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                            <input id="reg-lname" type="text" name="last_name" required placeholder="dela Cruz"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition bg-white" />
                        </div>
                    </div>
                    <div>
                        <label for="reg-phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <input id="reg-phone" type="tel" name="phone" required placeholder="09XX XXX XXXX"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition bg-white" />
                    </div>
                    <div>
                        <label for="reg-address" class="block text-sm font-medium text-gray-700 mb-1">Delivery Address</label>
                        <input id="reg-address" type="text" name="address" required placeholder="House no., Street, Barangay, City"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition bg-white" />
                    </div>
                    <div>
                        <label for="reg-product" class="block text-sm font-medium text-gray-700 mb-1">What do you need?</label>
                        <select id="reg-product" name="product" required
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition">
                            <option value="" disabled selected>Select a product</option>
                            <optgroup label="LPG Tanks">
                                <option value="11kg">11 kg LPG Tank  E₱1,100</option>
                                <option value="22kg">22 kg LPG Tank  E₱2,204</option>
                                <option value="50kg">50 kg LPG Tank  E₱4,600</option>
                                <option value="2.7kg">2.7 kg Portable Tank  E₱380</option>
                            </optgroup>
                            <optgroup label="Regulators">
                                <option value="std-reg">Standard Regulator  E₱120</option>
                                <option value="hp-reg">High-Pressure Regulator  E₱280</option>
                                <option value="ds-reg">Dual-Stage Regulator  E₱350</option>
                            </optgroup>
                            <optgroup label="Hoses & Fittings">
                                <option value="hose-1m">LPG Rubber Hose 1m  E₱95</option>
                                <option value="hose-2m">LPG Rubber Hose 2m  E₱160</option>
                                <option value="clamp">Hose Clamp Set  E₱45</option>
                                <option value="fitting">Quick-Connect Fitting  E₱75</option>
                            </optgroup>
                            <optgroup label="Accessories">
                                <option value="cap">LPG Safety Cap  E₱35</option>
                            </optgroup>
                        </select>
                    </div>
                    <div>
                        <label for="reg-notes" class="block text-sm font-medium text-gray-700 mb-1">Anything else? <span class="text-gray-400 font-normal">(optional)</span></label>
                        <textarea id="reg-notes" name="notes" rows="3"
                            placeholder="Preferred delivery time, notes, etc."
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition resize-none bg-white"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold text-base py-3 rounded-lg transition-colors">
                        Submit Order
                    </button>
                    <p class="text-center text-xs text-gray-400">
                        Rather call?
                        <a href="tel:+639353558958" class="text-orange-500 hover:underline font-medium">0935-355-8958</a>
                    </p>
                </div>
            </form>
        </div>
    </section>

@endsection
