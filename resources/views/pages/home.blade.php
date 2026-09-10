@extends('layouts.app')

@section('title', 'RonAyin LPG Store – Safe & Reliable Gas Delivery')
@section('description', 'RonAyin LPG Store delivers safe, DOE-certified liquefied petroleum gas to homes and businesses. Order online or call us for same-day delivery.')

@section('content')

    {{-- ===== 1. HERO ===== --}}
    <x-hero
        product-name="RonAyin LPG Store"
        headline='Your Trusted<br /><span class="text-orange-500">LPG Partner</span>'
        description="Safe, certified, and affordable liquefied petroleum gas delivered straight to your home or business — fast, hassle-free, every time."
        :primary-cta="['label' => 'Shop Products', 'href' => '#products']"
        :secondary-cta="['label' => 'Contact Us',   'href' => '#contact']"
    />

    {{-- ===== 2. FEATURES ===== --}}
    <section id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <x-section-heading
                eyebrow="Why Choose Us"
                title='Everything You Need from an <span class="text-orange-500">LPG Provider</span>'
                subtitle="From safety compliance to same-day delivery, we've built our service around what matters most to you."
            />

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <x-feature-card
                    title="DOE Safety Certified"
                    description="All cylinders pass rigorous Department of Energy standards and are inspected before every delivery to ensure your family's safety."
                    :highlight="true"
                >
                    <x-slot:icon>
                        <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Same-Day Delivery"
                    description="Order before noon and get your LPG delivered the same day within metro areas. Morning and afternoon slots available."
                >
                    <x-slot:icon>
                        <svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875H3.75a3 3 0 1 0 5.25-2.032 3.001 3.001 0 0 0-2.73-2.918V15h-3v-1.5ZM6 16.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                            <path d="M15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75ZM19.5 19.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="24/7 Customer Support"
                    description="Our dedicated support team is always on standby — call, text, or message us on social media any time of the day or night."
                >
                    <x-slot:icon>
                        <svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M4.804 21.644A6.707 6.707 0 0 0 6 21.75a6.721 6.721 0 0 0 3.583-1.029c.774.182 1.584.279 2.417.279 5.322 0 9.75-3.97 9.75-9 0-5.03-4.428-9-9.75-9s-9.75 3.97-9.75 9c0 2.409 1.025 4.587 2.674 6.192.232.226.277.428.254.543a3.73 3.73 0 0 1-.814 1.686.75.75 0 0 0 .44 1.223ZM8.25 10.875a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25ZM10.875 12a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875-1.125a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z" clip-rule="evenodd" />
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Easy Tank Exchange"
                    description="Swap your empty cylinder for a full one in minutes. No waiting in line — just call ahead and we'll have your replacement ready."
                >
                    <x-slot:icon>
                        <svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M15.97 2.47a.75.75 0 0 1 1.06 0l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 1 1-1.06-1.06l3.22-3.22H7.5a.75.75 0 0 1 0-1.5h11.69l-3.22-3.22a.75.75 0 0 1 0-1.06Zm-7.94 9a.75.75 0 0 1 0 1.06l-3.22 3.22H16.5a.75.75 0 0 1 0 1.5H4.81l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Competitive Pricing"
                    description="Transparent, fair pricing with zero hidden charges. Bulk and regular customers get exclusive discounts."
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
                    title="Wide Service Coverage"
                    description="We deliver across Metro Manila and nearby provinces. Our growing fleet ensures you're never far from reliable LPG supply."
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
    <section id="products" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <x-section-heading
                eyebrow="Our Products"
                title='LPG Tanks &amp; <span class="text-orange-500">Parts</span>'
                subtitle="From household cylinders to commercial tanks and accessories — everything you need for safe and reliable LPG use."
            />

            {{-- Category filter tabs --}}
            <div class="flex flex-wrap gap-2 justify-center mb-10">
                @foreach (['All', 'LPG Tanks', 'Regulators', 'Hoses & Fittings', 'Accessories'] as $cat)
                    <button
                        type="button"
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
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">

                {{-- LPG Tanks --}}
                <x-pricing-card name="11 kg LPG Tank"          price="₱580"   tag="Home Use"   cta-href="#get-started" />
                <x-pricing-card name="22 kg LPG Tank"          price="₱1,050" tag="Best Seller" cta-href="#get-started" />
                <x-pricing-card name="50 kg LPG Tank"          price="₱2,300" tag="Commercial"  cta-href="#get-started" />
                <x-pricing-card name="2.7 kg Portable Tank"    price="₱380"                     cta-href="#get-started" />
                <x-pricing-card name="100 kg Bulk Tank"        price="₱4,800" tag="Industrial"  cta-href="#get-started" />

                {{-- Regulators --}}
                <x-pricing-card name="Standard Regulator"      price="₱120"                     cta-href="#get-started" />
                <x-pricing-card name="High-Pressure Regulator" price="₱280"                     cta-href="#get-started" />
                <x-pricing-card name="Dual-Stage Regulator"    price="₱350"                     cta-href="#get-started" />

                {{-- Hoses & Fittings --}}
                <x-pricing-card name="LPG Rubber Hose (1m)"   price="₱95"                      cta-href="#get-started" />
                <x-pricing-card name="LPG Rubber Hose (2m)"   price="₱160"                     cta-href="#get-started" />
                <x-pricing-card name="Hose Clamp Set"          price="₱45"                      cta-href="#get-started" />
                <x-pricing-card name="Quick-Connect Fitting"   price="₱75"                      cta-href="#get-started" />

                {{-- Accessories --}}
                <x-pricing-card name="Gas Leak Detector"       price="₱220"  tag="Safety"      cta-href="#get-started" />
                <x-pricing-card name="LPG Safety Cap"          price="₱35"                      cta-href="#get-started" />
                <x-pricing-card name="Tank Trolley / Cart"     price="₱450"                     cta-href="#get-started" />

            </div>

            <p class="text-center text-sm text-gray-400 mt-10">
                Looking for bulk orders or items not listed here?
                <a href="#contact" class="text-orange-500 hover:underline font-medium ml-1">Contact us →</a>
            </p>

        </div>
    </section>

    {{-- ===== 4. PRODUCT SHOWCASE ===== --}}
    <section id="showcase" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <x-section-heading
                eyebrow="Product Showcase"
                title='A Complete LPG Solution <span class="text-orange-500">for Every Need</span>'
                subtitle="From our intuitive ordering dashboard to mobile-friendly experience, managing your gas supply has never been this easy."
            />

            {{-- Dashboard preview --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                <div>
                    <div class="relative bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-200">
                        <div class="flex items-center gap-2 px-5 py-3 border-b border-gray-100 bg-gray-50">
                            <span class="w-3 h-3 bg-red-400 rounded-full"></span>
                            <span class="w-3 h-3 bg-yellow-400 rounded-full"></span>
                            <span class="w-3 h-3 bg-green-400 rounded-full"></span>
                            <div class="flex-1 mx-4 bg-gray-200 rounded-full h-5 flex items-center px-3">
                                <span class="text-[10px] text-gray-400">ronayinlpg.com/dashboard</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-6">
                                <div>
                                    <p class="text-xs text-gray-400 font-medium uppercase tracking-widest">Dashboard</p>
                                    <p class="text-lg font-bold text-gray-900">Welcome back, Juan!</p>
                                </div>
                                <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Active</span>
                            </div>
                            <div class="grid grid-cols-3 gap-4 mb-6">
                                <div class="bg-orange-50 rounded-2xl p-4 text-center">
                                    <p class="text-2xl font-extrabold text-orange-500">3</p>
                                    <p class="text-[11px] text-gray-500 mt-1">Orders This Month</p>
                                </div>
                                <div class="bg-blue-50 rounded-2xl p-4 text-center">
                                    <p class="text-2xl font-extrabold text-blue-500">22kg</p>
                                    <p class="text-[11px] text-gray-500 mt-1">Last Tank Size</p>
                                </div>
                                <div class="bg-green-50 rounded-2xl p-4 text-center">
                                    <p class="text-2xl font-extrabold text-green-500">₱1,050</p>
                                    <p class="text-[11px] text-gray-500 mt-1">Last Order</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded-2xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-xs font-semibold text-gray-700">Latest Order</p>
                                    <span class="text-[10px] bg-orange-100 text-orange-600 px-2 py-0.5 rounded-full font-semibold">Out for Delivery</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-orange-100 rounded-xl flex items-center justify-center">
                                        <svg class="w-4 h-4 text-orange-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 0 0-1.071-.136 9.742 9.742 0 0 0-3.539 6.176 7.547 7.547 0 0 1-1.705-1.715.75.75 0 0 0-1.152-.082A9 9 0 1 0 15.68 4.534a7.46 7.46 0 0 1-2.717-2.248ZM15.75 14.25a3.75 3.75 0 1 1-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 0 1 1.925-3.546 3.75 3.75 0 0 1 3.255 3.718Z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-xs font-semibold text-gray-800">22 kg LPG Cylinder × 1</p>
                                        <p class="text-[11px] text-gray-400">ETA: 30 minutes</p>
                                    </div>
                                    <p class="text-sm font-bold text-gray-900">₱1,050</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-6">
                    <h3 class="text-2xl font-extrabold text-gray-900">Track Every Order in Real Time</h3>
                    <p class="text-gray-500 leading-relaxed">Our dashboard gives you full visibility into your orders, delivery status, and billing history — all in one place.</p>
                    @foreach ([
                        ['title' => 'Live Delivery Tracking',     'body' => 'Monitor your delivery from dispatch to doorstep with real-time status updates.'],
                        ['title' => 'Order History & Invoices',   'body' => 'Access past orders and download invoices for accounting and expense tracking.'],
                        ['title' => 'Easy Reordering',            'body' => 'Reorder your last purchase in one tap — no need to fill out the form again.'],
                        ['title' => 'Multiple Delivery Addresses','body' => 'Save your home, office, and other locations for faster repeat orders.'],
                    ] as $highlight)
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-orange-100 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-orange-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-900 mb-1">{{ $highlight['title'] }}</p>
                                <p class="text-sm text-gray-500">{{ $highlight['body'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Mobile view --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1 flex flex-col gap-6">
                    <h3 class="text-2xl font-extrabold text-gray-900">Order Anytime, Anywhere</h3>
                    <p class="text-gray-500 leading-relaxed">Our mobile-optimized experience means you can place an order, check delivery status, and manage your account from any smartphone.</p>
                    <div class="flex flex-wrap gap-3">
                        <span class="bg-orange-100 text-orange-700 text-xs font-semibold px-4 py-2 rounded-full">📱 Mobile Friendly</span>
                        <span class="bg-orange-100 text-orange-700 text-xs font-semibold px-4 py-2 rounded-full">⚡ Fast Loading</span>
                        <span class="bg-orange-100 text-orange-700 text-xs font-semibold px-4 py-2 rounded-full">🔔 Push Notifications</span>
                        <span class="bg-orange-100 text-orange-700 text-xs font-semibold px-4 py-2 rounded-full">🌐 Works Offline</span>
                    </div>
                    <x-button href="#products" variant="primary" size="md" class="self-start">
                        Browse Products
                    </x-button>
                </div>

                {{-- Phone mockup --}}
                <div class="order-1 lg:order-2 flex justify-center">
                    <div class="relative">
                        <div class="w-56 bg-gray-900 rounded-[2.5rem] p-3 shadow-2xl border-4 border-gray-800">
                            <div class="bg-white rounded-[2rem] overflow-hidden">
                                <div class="flex items-center justify-between px-5 pt-3 pb-1">
                                    <span class="text-[10px] font-semibold text-gray-700">9:41</span>
                                    <div class="flex gap-1">
                                        <span class="w-4 h-1.5 bg-gray-700 rounded-sm"></span>
                                        <span class="w-3 h-1.5 bg-gray-700 rounded-sm"></span>
                                        <span class="w-1.5 h-1.5 bg-gray-700 rounded-full"></span>
                                    </div>
                                </div>
                                <div class="px-4 pb-6 pt-2">
                                    <div class="flex items-center justify-between mb-4">
                                        <div>
                                            <p class="text-[10px] text-gray-400">Good morning,</p>
                                            <p class="text-sm font-bold text-gray-900">Juan 👋</p>
                                        </div>
                                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center text-orange-500 font-bold text-xs">J</div>
                                    </div>
                                    <button class="w-full bg-orange-500 text-white text-xs font-bold py-3 rounded-2xl mb-4">
                                        + New Order
                                    </button>
                                    <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-widest mb-2">Recent</p>
                                    <div class="flex items-center gap-2 bg-gray-50 rounded-xl p-3 mb-2">
                                        <div class="w-7 h-7 bg-orange-100 rounded-lg flex items-center justify-center text-orange-500 text-xs">🔥</div>
                                        <div class="flex-1">
                                            <p class="text-[10px] font-semibold text-gray-800">22 kg Cylinder</p>
                                            <p class="text-[9px] text-gray-400">Delivered · Sep 8</p>
                                        </div>
                                        <span class="text-[10px] font-bold text-green-600">✓</span>
                                    </div>
                                    <div class="flex items-center gap-2 bg-orange-50 rounded-xl p-3">
                                        <div class="w-7 h-7 bg-orange-200 rounded-lg flex items-center justify-center text-orange-600 text-xs">🚚</div>
                                        <div class="flex-1">
                                            <p class="text-[10px] font-semibold text-gray-800">11 kg Cylinder</p>
                                            <p class="text-[9px] text-orange-500">On the way · ETA 30min</p>
                                        </div>
                                        <span class="w-2 h-2 bg-orange-400 rounded-full animate-pulse"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute top-5 left-1/2 -translate-x-1/2 w-20 h-4 bg-gray-900 rounded-b-2xl"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===== 5. TESTIMONIALS ===== --}}
    <section id="testimonials" class="py-24 bg-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <x-section-heading
                eyebrow="Testimonials"
                title='Loved by Homes &amp; <span class="text-orange-500">Businesses</span>'
                subtitle="Don't just take our word for it — here's what our customers have to say."
            />

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <x-testimonial-card name="Maria Santos"    position="Homemaker, Quezon City"     initials="M" :rating="5"
                    review="Super reliable! I ordered in the morning and it was delivered by lunch. The delivery guy even checked the connections for leaks before leaving." />
                <x-testimonial-card name="Ramon Cruz"      position="Restaurant Owner, Manila"    initials="R" :rating="5"
                    review="We switched all our commercial tanks to RonAyin two years ago and it's been the best decision. Price is fair, service is excellent." />
                <x-testimonial-card name="Jenelyn Reyes"   position="Catering Business, Caloocan" initials="J" :rating="5"
                    review="The range of products is impressive — from tanks to regulators and hoses, everything I need is in one place. Delivery is always on time." />
                <x-testimonial-card name="Bernard Lim"     position="Bakery Owner, Pasig"         initials="B" :rating="5"
                    review="Ang bilis ng delivery at ang bait ng staff! Lahat ng kailangan namin sa LPG ay available dito. Hindi na kami nag-alala sa gas supply namin." />
                <x-testimonial-card name="Ana Villanueva"  position="Property Manager, Makati"    initials="A" :rating="4"
                    review="I manage 12 residential units and RonAyin handles all of them without a hitch. Wide product selection and fast delivery make them the best." />
                <x-testimonial-card name="Carlo Mendoza"   position="Food Stall Operator, Taguig" initials="C" :rating="5"
                    review="As a small business owner, every peso counts. Their prices are fair, hoses and regulators are quality, and support is always quick to respond." />

            </div>
        </div>
    </section>

    {{-- ===== 6. CALL TO ACTION ===== --}}
    <section id="cta" class="py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 relative overflow-hidden">

        <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-orange-500 rounded-full opacity-10 blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-amber-500 rounded-full opacity-10 blur-3xl"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block bg-orange-500/20 text-orange-400 text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-6">
                Get Started Today
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight mb-6">
                Ready to Never Run Out of <span class="text-orange-400">Gas Again?</span>
            </h2>
            <p class="text-lg text-gray-400 leading-relaxed max-w-2xl mx-auto mb-10">
                Join thousands of households and businesses that trust RonAyin LPG for tanks, parts, and fast delivery.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-10">
                <x-button href="#get-started" variant="primary" size="lg">
                    Start Free Trial
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                    </svg>
                </x-button>
                <x-button href="tel:+639353558958" variant="outline" size="lg" class="border-gray-600 text-gray-300 hover:border-orange-400 hover:text-orange-400">
                    Contact Sales
                </x-button>
                <x-button href="#get-started" variant="ghost" size="lg" class="text-gray-400 hover:text-orange-400">
                    Register Now
                </x-button>
            </div>

            <div class="flex flex-wrap gap-6 justify-center text-sm text-gray-500">
                @foreach (['Fast same-day delivery', 'DOE certified products', 'Free leak check on delivery'] as $trust)
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                        </svg>
                        {{ $trust }}
                    </span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== 7. ORDER FORM ===== --}}
    <section id="get-started" class="py-24 bg-orange-500">
        <div class="max-w-xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-white">Place an Order</h2>
                <p class="text-orange-100 mt-3">Fill in the form and we'll confirm your order shortly.</p>
            </div>

            <form class="bg-white rounded-3xl p-8 shadow-2xl" action="#" method="POST">
                @csrf
                <div class="flex flex-col gap-5">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="reg-fname" class="block text-sm font-medium text-gray-700 mb-1.5">First Name</label>
                            <input id="reg-fname" type="text" name="first_name" required placeholder="Juan"
                                class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition" />
                        </div>
                        <div>
                            <label for="reg-lname" class="block text-sm font-medium text-gray-700 mb-1.5">Last Name</label>
                            <input id="reg-lname" type="text" name="last_name" required placeholder="dela Cruz"
                                class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition" />
                        </div>
                    </div>
                    <div>
                        <label for="reg-phone" class="block text-sm font-medium text-gray-700 mb-1.5">Phone Number</label>
                        <input id="reg-phone" type="tel" name="phone" required placeholder="09XX XXX XXXX"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition" />
                    </div>
                    <div>
                        <label for="reg-address" class="block text-sm font-medium text-gray-700 mb-1.5">Delivery Address</label>
                        <input id="reg-address" type="text" name="address" required placeholder="House no., Street, Barangay, City"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition" />
                    </div>
                    <div>
                        <label for="reg-product" class="block text-sm font-medium text-gray-700 mb-1.5">Product</label>
                        <select id="reg-product" name="product" required
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition">
                            <option value="" disabled selected>Select a product</option>
                            <optgroup label="LPG Tanks">
                                <option value="11kg">11 kg LPG Tank – ₱580</option>
                                <option value="22kg">22 kg LPG Tank – ₱1,050</option>
                                <option value="50kg">50 kg LPG Tank – ₱2,300</option>
                                <option value="2.7kg">2.7 kg Portable Tank – ₱380</option>
                                <option value="100kg">100 kg Bulk Tank – ₱4,800</option>
                            </optgroup>
                            <optgroup label="Regulators">
                                <option value="std-reg">Standard Regulator – ₱120</option>
                                <option value="hp-reg">High-Pressure Regulator – ₱280</option>
                                <option value="ds-reg">Dual-Stage Regulator – ₱350</option>
                            </optgroup>
                            <optgroup label="Hoses & Fittings">
                                <option value="hose-1m">LPG Rubber Hose 1m – ₱95</option>
                                <option value="hose-2m">LPG Rubber Hose 2m – ₱160</option>
                                <option value="clamp">Hose Clamp Set – ₱45</option>
                                <option value="fitting">Quick-Connect Fitting – ₱75</option>
                            </optgroup>
                            <optgroup label="Accessories">
                                <option value="detector">Gas Leak Detector – ₱220</option>
                                <option value="cap">LPG Safety Cap – ₱35</option>
                                <option value="trolley">Tank Trolley / Cart – ₱450</option>
                            </optgroup>
                        </select>
                    </div>
                    <div>
                        <label for="reg-notes" class="block text-sm font-medium text-gray-700 mb-1.5">Notes <span class="text-gray-400">(optional)</span></label>
                        <textarea id="reg-notes" name="notes" rows="3"
                            placeholder="Preferred delivery time, special instructions, etc."
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition resize-none"></textarea>
                    </div>
                    <x-button type="submit" variant="primary" size="lg" class="w-full justify-center">
                        Submit Order
                    </x-button>
                    <p class="text-center text-xs text-gray-400">
                        Prefer to call?
                        <a href="tel:+639353558958" class="text-orange-500 hover:underline font-medium">0935-355-8958</a>
                    </p>
                </div>
            </form>
        </div>
    </section>

@endsection
