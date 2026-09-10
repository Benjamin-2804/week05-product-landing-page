<header class="fixed top-0 inset-x-0 z-50 bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-18 py-3">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 shrink-0" aria-label="RonAyin LPG Home">
                <div class="w-9 h-9 bg-orange-500 rounded-xl flex items-center justify-center shadow-sm">
                    <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 0 0-1.071-.136 9.742 9.742 0 0 0-3.539 6.176 7.547 7.547 0 0 1-1.705-1.715.75.75 0 0 0-1.152-.082A9 9 0 1 0 15.68 4.534a7.46 7.46 0 0 1-2.717-2.248ZM15.75 14.25a3.75 3.75 0 1 1-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 0 1 1.925-3.546 3.75 3.75 0 0 1 3.255 3.718Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="leading-tight">
                    <span class="block text-base font-bold text-gray-900 leading-none">RonAyin <span class="text-orange-500">LPG</span></span>
                    <span class="block text-[10px] text-gray-400 font-medium">Pagsanjan, Laguna</span>
                </div>
            </a>

            {{-- Desktop nav --}}
            <nav class="hidden lg:flex items-center gap-8" aria-label="Main navigation">
                <a href="#home"         class="text-sm font-medium text-gray-600 hover:text-orange-500 transition-colors">Home</a>
                <a href="#features"     class="text-sm font-medium text-gray-600 hover:text-orange-500 transition-colors">Why Us</a>
                <a href="#products"     class="text-sm font-medium text-gray-600 hover:text-orange-500 transition-colors">Products</a>
                <a href="#testimonials" class="text-sm font-medium text-gray-600 hover:text-orange-500 transition-colors">Reviews</a>
                <a href="#contact"      class="text-sm font-medium text-gray-600 hover:text-orange-500 transition-colors">Contact</a>
            </nav>

            {{-- Desktop CTAs — call button + order now --}}
            <div class="hidden lg:flex items-center gap-3">
                <a href="tel:+639353558958"
                   class="flex items-center gap-2 text-sm font-semibold text-gray-700 hover:text-orange-500 transition-colors">
                    <svg class="w-4 h-4 text-orange-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>
                    0935-355-8958
                </a>
                <a href="#get-started"
                   class="bg-orange-500 hover:bg-orange-600 text-white text-sm font-semibold px-5 py-2 rounded-full transition-colors shadow-sm">
                    Order Now
                </a>
            </div>

            {{-- Mobile hamburger --}}
            <button
                id="mobile-menu-btn"
                class="lg:hidden p-2 rounded-lg text-gray-600 hover:text-orange-500 hover:bg-orange-50 transition-colors"
                aria-label="Toggle mobile menu"
                aria-expanded="false"
                aria-controls="mobile-menu"
            >
                <svg id="icon-menu" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-menu" class="lg:hidden hidden border-t border-gray-100 bg-white" role="navigation" aria-label="Mobile navigation">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex flex-col gap-1">
            <a href="#home"         class="text-sm font-medium text-gray-700 hover:text-orange-500 hover:bg-orange-50 px-3 py-2.5 rounded-lg transition-colors">Home</a>
            <a href="#features"     class="text-sm font-medium text-gray-700 hover:text-orange-500 hover:bg-orange-50 px-3 py-2.5 rounded-lg transition-colors">Why Us</a>
            <a href="#products"     class="text-sm font-medium text-gray-700 hover:text-orange-500 hover:bg-orange-50 px-3 py-2.5 rounded-lg transition-colors">Products</a>
            <a href="#testimonials" class="text-sm font-medium text-gray-700 hover:text-orange-500 hover:bg-orange-50 px-3 py-2.5 rounded-lg transition-colors">Reviews</a>
            <a href="#contact"      class="text-sm font-medium text-gray-700 hover:text-orange-500 hover:bg-orange-50 px-3 py-2.5 rounded-lg transition-colors">Contact</a>

            <div class="pt-3 mt-1 border-t border-gray-100 flex flex-col gap-2">
                <a href="tel:+639353558958"
                   class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-gray-50 text-sm font-semibold text-gray-700 hover:bg-orange-50 hover:text-orange-500 transition-colors">
                    <svg class="w-4 h-4 text-orange-500 shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>
                    0935-355-8958
                </a>
                <a href="tel:+639973279175"
                   class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-gray-50 text-sm font-semibold text-gray-700 hover:bg-orange-50 hover:text-orange-500 transition-colors">
                    <svg class="w-4 h-4 text-orange-500 shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>
                    0997-327-9175
                </a>
                <a href="#get-started"
                   class="text-center bg-orange-500 hover:bg-orange-600 text-white text-sm font-bold px-5 py-2.5 rounded-full transition-colors mt-1">
                    Order Now
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    (function () {
        const btn       = document.getElementById('mobile-menu-btn');
        const menu      = document.getElementById('mobile-menu');
        const iconMenu  = document.getElementById('icon-menu');
        const iconClose = document.getElementById('icon-close');

        btn.addEventListener('click', () => {
            const isOpen = !menu.classList.contains('hidden');
            menu.classList.toggle('hidden', isOpen);
            iconMenu.classList.toggle('hidden', !isOpen);
            iconClose.classList.toggle('hidden', isOpen);
            btn.setAttribute('aria-expanded', String(!isOpen));
        });

        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                iconMenu.classList.remove('hidden');
                iconClose.classList.add('hidden');
                btn.setAttribute('aria-expanded', 'false');
            });
        });
    })();
</script>
