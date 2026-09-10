<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="@yield('description', 'RonAyin LPG Store – Safe, reliable, and affordable liquefied petroleum gas delivered to your doorstep.')" />
        <title>@yield('title', 'RonAyin LPG Store')</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="antialiased bg-white text-gray-900 overflow-x-hidden">

        <x-navbar />

        <main>
            @yield('content')
        </main>

        <x-footer />

        {{-- ===== PRODUCT MODAL ===== --}}
        <div id="product-modal"
             class="fixed inset-0 z-[100] hidden items-center justify-center p-4"
             role="dialog" aria-modal="true" aria-labelledby="modal-title">

            {{-- Backdrop — dark + blur --}}
            <div id="modal-backdrop"
                 class="absolute inset-0 bg-black/50 backdrop-blur-sm"
                 onclick="closeProductModal()"></div>

            {{-- Panel — smaller, centered --}}
            <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-xs mx-auto overflow-hidden">

                {{-- Close button --}}
                <button onclick="closeProductModal()"
                        class="absolute top-3 right-3 z-10 w-7 h-7 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 text-gray-500 transition-colors"
                        aria-label="Close">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                {{-- Image --}}
                <div id="modal-image-wrap" class="bg-gray-100 aspect-square flex items-center justify-center overflow-hidden">
                    <img id="modal-img" src="" alt="" class="w-full h-full object-cover hidden" />
                    <div id="modal-img-placeholder" class="flex flex-col items-center gap-2">
                        <svg class="w-10 h-10 text-gray-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M3.75 21h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v13.5A1.5 1.5 0 0 0 3.75 21Zm9-6.75a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0Z"/>
                        </svg>
                        <span class="text-xs text-gray-400">Photo coming soon</span>
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-5">
                    <div class="flex items-start justify-between gap-2 mb-2">
                        <div class="min-w-0">
                            <span id="modal-tag" class="hidden text-[10px] font-bold uppercase tracking-wide text-orange-500 mb-0.5 block"></span>
                            <h2 id="modal-title" class="text-base font-bold text-gray-900 leading-tight"></h2>
                        </div>
                        <span id="modal-price" class="text-lg font-extrabold text-orange-500 shrink-0"></span>
                    </div>

                    <p id="modal-description" class="text-xs text-gray-500 leading-relaxed mb-4"></p>

                    <div class="flex gap-2">
                        <a id="modal-order-btn"
                           href="#get-started"
                           onclick="closeProductModal()"
                           class="flex-1 text-center bg-orange-500 hover:bg-orange-600 text-white font-bold text-xs py-2.5 rounded-xl transition-colors">
                            Order This
                        </a>
                        <a href="tel:+639353558958"
                           class="flex-1 text-center border border-gray-200 hover:border-orange-400 hover:text-orange-500 text-gray-600 font-semibold text-xs py-2.5 rounded-xl transition-colors">
                            📞 Call Us
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function openProductModal(name, price, image, description, tag, ctaHref) {
                const modal = document.getElementById('product-modal');

                document.getElementById('modal-title').textContent       = name;
                document.getElementById('modal-price').textContent       = price;
                document.getElementById('modal-description').textContent = description || 'Contact us for more information about this product.';

                // Tag
                const tagEl = document.getElementById('modal-tag');
                if (tag) { tagEl.textContent = tag; tagEl.classList.remove('hidden'); }
                else      { tagEl.classList.add('hidden'); }

                // Image
                const img         = document.getElementById('modal-img');
                const placeholder = document.getElementById('modal-img-placeholder');
                if (image) {
                    img.src = image; img.alt = name;
                    img.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                } else {
                    img.classList.add('hidden');
                    placeholder.classList.remove('hidden');
                }

                // CTA href
                const btn = document.getElementById('modal-order-btn');
                if (ctaHref) { btn.href = ctaHref; }

                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            }

            function closeProductModal() {
                const modal = document.getElementById('product-modal');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = '';
            }

            // Close on Escape key
            document.addEventListener('keydown', e => {
                if (e.key === 'Escape') closeProductModal();
            });
        </script>

    </body>
</html>
