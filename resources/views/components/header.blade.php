<nav class="sticky top-0 z-50 w-full bg-black text-white border-b border-neutral-800 font-orbitron">
    <div class="max-w-7xl mx-auto flex items-center justify-between py-4 px-6">

        <!-- LOGO -->
        <a href="{{ url('/') }}" class="text-3xl font-extrabold tracking-widest">
            SPECTRA<span class="text-purple-400">X</span>
        </a>

        <!-- NAV LINKS -->
        <ul class="hidden md:flex items-center space-x-5 text-sm font-semibold tracking-wide">
            <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="separator">|</li>
            <li><a href="{{ url('/team') }}" class="nav-link">Team</a></li>
            <li class="separator">|</li>
            <li><a href="{{ url('/games') }}" class="nav-link">Games</a></li>
            <li class="separator">|</li>
            <li><a href="{{ url('/shop') }}" class="nav-link">Shop</a></li>
            <li class="separator">|</li>
            <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
        </ul>

        <!-- ICON BUTTONS -->
        <div class="hidden md:flex items-center space-x-3">
            <button class="icon-btn">
                <span class="material-symbols-outlined text-white text-[22px]">search</span>
            </button>

            @auth
            <a href="{{ url('/admin') }}" class="icon-btn">
                <span class="material-symbols-outlined text-[22px]">account_circle</span>
            </a>
            @else
            <a href="{{ url('/admin/login') }}" class="icon-btn">
                <span class="material-symbols-outlined text-[22px]">account_circle</span>
            </a>
            @endauth


        </div>

        <!-- MOBILE MENU BUTTON -->
        <button
            class="md:hidden p-2 rounded bg-purple-600"
            onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-white text-[28px]">menu</span>
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="hidden md:hidden bg-black border-t border-neutral-800 px-6 pb-4 space-y-3">
        <a href="{{ url('/') }}" class="mobile-link">Home</a>
        <a href="{{ url('/team') }}" class="mobile-link">Team</a>
        <a href="{{ url('/games') }}" class="mobile-link">Games</a>
        <a href="{{ url('/shop') }}" class="mobile-link">Shop</a>
        <a href="{{ url('/contact') }}" class="mobile-link">Contact</a>
    </div>
</nav>