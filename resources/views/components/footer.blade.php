<footer class="bg-black border-t border-neutral-800 mt-16">
    <div class="max-w-7xl mx-auto px-6 py-16
                flex flex-col md:flex-row
                justify-between items-start gap-14">

        <!-- LEFT: LOGO + TEXT -->
        <div class="max-w-sm">
            <div class="text-2xl font-extrabold tracking-widest font-orbitron">
                SPECTRA<span class="text-purple-400">X</span>
            </div>

            <p class="text-sm text-gray-400 mt-4 leading-relaxed">
                © {{ now()->year }} SpectraX Esports. All rights reserved.
            </p>
        </div>

        <!-- RIGHT: ICONS + NAV -->
        <div class="flex flex-col items-end gap-6">

            <!-- ICONS -->
            <div class="flex gap-3">
                <a href="#" class="social-icon" aria-label="Instagram">
                    <span class="material-symbols-outlined">photo_camera</span>
                </a>

                <a href="#" class="social-icon" aria-label="Facebook">
                    <span class="material-symbols-outlined">groups</span>
                </a>
            </div>

            <!-- NAV -->
            <nav class="flex gap-6 text-sm font-semibold tracking-widest">
                <a href="{{ url('/') }}" class="footer-link">HOME</a>
                <a href="{{ url('/team') }}" class="footer-link">TEAM</a>
                <a href="{{ url('/shop') }}" class="footer-link">SHOP</a>
                <a href="{{ url('/games') }}" class="footer-link">GAMES</a>
                <a href="{{ url('/contact') }}" class="footer-link">CONTACT</a>
            </nav>

        </div>
    </div>
</footer>
