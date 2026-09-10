<header class="fixed top-0 inset-x-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0" aria-label="RonAyin LPG Home">
                <div class="w-9 h-9 bg-orange-500 rounded-xl flex items-center justify-center shadow-sm">
                    <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 0 0-1.071-.136 9.742 9.742 0 0 0-3.539 6.176 7.547 7.547 0 0 1-1.705-1.715.75.75 0 0 0-1.152-.082A9 9 0 1 0 15.68 4.534a7.46 7.46 0 0 1-2.717-2.248ZM15.75 14.25a3.75 3.75 0 1 1-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 0 1 1.925-3.546 3.75 3.75 0 0 1 3.255 3.718Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <span class="text-lg font-bold tracking-tight text-gray-900">
                    RonAyin <span class="text-orange-500">LPG</span>
                </span>
            </a>

            {{-- Desktop nav --}}
            <nav class="hidden lg:flex items-center gap-8" aria-label="Main navigation">
                <a href="#home"         class="text-sm font-medium text-gray-600 hover:text-orange-500 transition-colors">Home</a>
                <a href="#features"     class="text-sm font-medium text-gray-600 hover:text-orange-500 transition-colors">Features</a>
                <a href="#pricing"      class="text-sm font-medium text-gray-600 hover:text-orange-500 transition-colors">Products</a>
                <a href="#testimonials" class="text-sm font-medium text-gray-600 hover:text-orange-500 transition-colors">Testimonials</a>
                <a href="#contact"      class="text-sm font-medium text-gray-600 hover:text-orange-500 transition-colors">Contact</a>
            </nav>

            {{-- Desktop CTA --}}
            <div class="hidden lg:flex items-center gap-3">
                <x-button href="#signin" variant="ghost" size="sm">Sign In</x-button>
                <x-button href="#get-started" variant="primary" size="sm">Get Started</x-button>
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex flex-col gap-3">
            <a href="#home"         class="text-sm font-medium text-gray-700 hover:text-orange-500 py-2 transition-colors">Home</a>
            <a href="#features"     class="text-sm font-medium text-gray-700 hover:text-orange-500 py-2 transition-colors">Features</a>
            <a href="#pricing"      class="text-sm font-medium text-gray-700 hover:text-orange-500 py-2 transition-colors">Products</a>
            <a href="#testimonials" class="text-sm font-medium text-gray-700 hover:text-orange-500 py-2 transition-colors">Testimonials</a>
            <a href="#contact"      class="text-sm font-medium text-gray-700 hover:text-orange-500 py-2 transition-colors">Contact</a>
            <div class="flex gap-3 pt-2 border-t border-gray-100">
                <x-button href="#signin"      variant="outline"  size="sm" class="flex-1 justify-center">Sign In</x-button>
                <x-button href="#get-started" variant="primary"  size="sm" class="flex-1 justify-center">Get Started</x-button>
            </div>
        </div>
    </div>
</header>

<script>
    (function () {
        const btn   = document.getElementById('mobile-menu-btn');
        const menu  = document.getElementById('mobile-menu');
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
