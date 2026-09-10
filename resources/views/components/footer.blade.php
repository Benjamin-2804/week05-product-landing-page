<footer id="contact" class="bg-gray-900 text-gray-400">

    {{-- Main footer --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

            {{-- Company info --}}
            <div class="lg:col-span-2">
                <a href="{{ route('home') }}" class="flex items-center gap-2 mb-5" aria-label="RonAyin LPG Home">
                    <img src="{{ Vite::asset("resources/images/RonAyin's LPG Store Logo.png") }}"
                         alt="RonAyin LPG Store Logo"
                         class="h-12 w-auto" />
                </a>
                <p class="text-sm leading-relaxed max-w-sm mb-6">
                    RonAyin LPG Store is your trusted source for safe, certified, and affordable liquefied petroleum gas. Serving homes and businesses across the region since 2015.
                </p>

                {{-- Contact info --}}
                <ul class="flex flex-col gap-3 text-sm mb-6">
                    <li class="flex items-center gap-3">
                        <span class="text-orange-400 text-base shrink-0" aria-hidden="true">📞</span>
                        <a href="tel:+639353558958" class="hover:text-orange-400 transition-colors">0935-355-8958</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-orange-400 text-base shrink-0" aria-hidden="true">📞</span>
                        <a href="tel:+639973279175" class="hover:text-orange-400 transition-colors">0997-327-9175</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-orange-400 text-base shrink-0" aria-hidden="true">✉️</span>
                        <a href="mailto:orders@ronayinlpg.com" class="hover:text-orange-400 transition-colors">orders@ronayinlpg.com</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-orange-400 text-base shrink-0 mt-0.5" aria-hidden="true">📍</span>
                        <span>7FH4+9Q3, San Isidro, Pagsanjan, Laguna</span>
                    </li>
                </ul>

                {{-- Social icons --}}
                <div class="flex gap-4" role="list" aria-label="Social media links">
                    {{-- Facebook --}}
                    <a href="https://www.facebook.com/profile.php?id=100063899616677" target="_blank" rel="noopener noreferrer"
                       class="w-9 h-9 bg-gray-800 hover:bg-orange-500 rounded-lg flex items-center justify-center transition-colors"
                       aria-label="Facebook" role="listitem">
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    {{-- Instagram --}}
                    <a href="https://instagram.com/ronayinlpg" target="_blank" rel="noopener noreferrer"
                       class="w-9 h-9 bg-gray-800 hover:bg-orange-500 rounded-lg flex items-center justify-center transition-colors"
                       aria-label="Instagram" role="listitem">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                        </svg>
                    </a>
                    {{-- TikTok --}}
                    <a href="https://tiktok.com/@ronayinlpg" target="_blank" rel="noopener noreferrer"
                       class="w-9 h-9 bg-gray-800 hover:bg-orange-500 rounded-lg flex items-center justify-center transition-colors"
                       aria-label="TikTok" role="listitem">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                        </svg>
                    </a>
                    {{-- YouTube --}}
                    <a href="https://youtube.com/@ronayinlpg" target="_blank" rel="noopener noreferrer"
                       class="w-9 h-9 bg-gray-800 hover:bg-orange-500 rounded-lg flex items-center justify-center transition-colors"
                       aria-label="YouTube" role="listitem">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Quick links --}}
            <div>
                <h3 class="text-white font-semibold text-sm uppercase tracking-widest mb-5">Quick Links</h3>
                <ul class="flex flex-col gap-3 text-sm">
                    <li><a href="#home"         class="hover:text-orange-400 transition-colors">Home</a></li>
                    <li><a href="#features"     class="hover:text-orange-400 transition-colors">Why Us</a></li>
                    <li><a href="#products"     class="hover:text-orange-400 transition-colors">Products</a></li>
                    <li><a href="#testimonials" class="hover:text-orange-400 transition-colors">Testimonials</a></li>
                    <li><a href="#contact"      class="hover:text-orange-400 transition-colors">Contact</a></li>
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h3 class="text-white font-semibold text-sm uppercase tracking-widest mb-5">Services</h3>
                <ul class="flex flex-col gap-3 text-sm">
                    <li><a href="#products" class="hover:text-orange-400 transition-colors">Home Delivery</a></li>
                    <li><a href="#products" class="hover:text-orange-400 transition-colors">Commercial Supply</a></li>
                    <li><a href="#products" class="hover:text-orange-400 transition-colors">Tank Exchange</a></li>
                    <li><a href="#cta"      class="hover:text-orange-400 transition-colors">Emergency Delivery</a></li>
                    <li><a href="#cta"      class="hover:text-orange-400 transition-colors">Safety Inspection</a></li>
                </ul>
            </div>

        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-sm">
            <p>© {{ date('Y') }} RonAyin LPG Store. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-orange-400 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-orange-400 transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>

</footer>
