@props([
    'brandName' => 'Jasa',
])

@php
    $isHome = request()->routeIs('home') || request()->is('/');
    $isTentang = request()->routeIs('tentang') || request()->is('tentang*');
    $isPortofolio = request()->routeIs('portofolio') || request()->is('portofolio*');
    $isHarga = request()->routeIs('harga') || request()->is('harga*');
    $isAlurKerja = request()->routeIs('alur-kerja') || request()->is('alur-kerja*');
    $isFaq = request()->routeIs('faq') || request()->is('faq*');
    $isLayanan = request()->routeIs('layanan') || request()->is('layanan*');
@endphp

<!-- ======================================================== -->
<!-- FLOATING PILL AGENCY HEADER (TRANSFORMS ON SCROLL)       -->
<!-- ======================================================== -->
<header id="mainHeaderWrapper"
    class="fixed top-0 inset-x-0 z-50 transition-all duration-300 ease-in-out px-4 sm:px-6 lg:px-8 py-4 sm:py-5 flex justify-center bg-transparent">
    
    <!-- MORPHING INNER NAVBAR CONTAINER -->
    <div id="navbarPill"
        class="w-full max-w-7xl flex items-center justify-between transition-all duration-300 ease-in-out bg-transparent border border-transparent rounded-none px-0 py-0">
        
        <!-- 1. BRAND LOGO (LOGO GAMBAR DARI USER + TEKS) -->
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 sm:gap-3 group focus:outline-none flex-shrink-0 whitespace-nowrap">
            <img src="{{ asset('logo.png') }}" alt="{{ $brandName }}" class="h-8 sm:h-9 w-auto object-contain flex-shrink-0 group-hover:scale-105 transition-transform" />
            <span class="text-xl sm:text-2xl font-bold tracking-tight text-neutral-900 leading-none">
                {{ $brandName }}
            </span>
        </a>

        <!-- 2. MENU LINK UTAMA (DESKTOP - SATU BARIS RAPI) -->
        <nav class="hidden lg:flex items-center gap-0.5 xl:gap-1.5 flex-shrink-0">
            <!-- Beranda -->
            <a href="{{ route('home') }}"
                class="px-2.5 xl:px-3.5 py-1.5 xl:py-2 text-xs xl:text-sm rounded-full transition-all whitespace-nowrap flex-shrink-0 {{ $isHome ? 'font-bold text-blue-600 bg-blue-50' : 'font-semibold text-neutral-600 hover:text-blue-600' }}">
                Beranda
            </a>

            <!-- Tentang (di kanan Beranda) -->
            <a href="{{ route('tentang') }}"
                class="px-2.5 xl:px-3.5 py-1.5 xl:py-2 text-xs xl:text-sm rounded-full transition-all whitespace-nowrap flex-shrink-0 {{ $isTentang ? 'font-bold text-blue-600 bg-blue-50' : 'font-semibold text-neutral-600 hover:text-blue-600' }}">
                Tentang
            </a>

            <!-- Portofolio -->
            <a href="{{ route('portofolio') }}"
                class="px-2.5 xl:px-3.5 py-1.5 xl:py-2 text-xs xl:text-sm rounded-full transition-all whitespace-nowrap flex-shrink-0 {{ $isPortofolio ? 'font-bold text-blue-600 bg-blue-50' : 'font-semibold text-neutral-600 hover:text-blue-600' }}">
                Portofolio
            </a>

            <!-- Harga -->
            <a href="{{ route('harga') }}"
                class="px-2.5 xl:px-3.5 py-1.5 xl:py-2 text-xs xl:text-sm rounded-full transition-all whitespace-nowrap flex-shrink-0 {{ $isHarga ? 'font-bold text-blue-600 bg-blue-50' : 'font-semibold text-neutral-600 hover:text-blue-600' }}">
                Harga
            </a>

            <!-- Alur Kerja -->
            <a href="{{ route('alur-kerja') }}"
                class="px-2.5 xl:px-3.5 py-1.5 xl:py-2 text-xs xl:text-sm rounded-full transition-all whitespace-nowrap flex-shrink-0 {{ $isAlurKerja ? 'font-bold text-blue-600 bg-blue-50' : 'font-semibold text-neutral-600 hover:text-blue-600' }}">
                Alur Kerja
            </a>

            <!-- FAQ -->
            <a href="{{ route('faq') }}"
                class="px-2.5 xl:px-3.5 py-1.5 xl:py-2 text-xs xl:text-sm rounded-full transition-all whitespace-nowrap flex-shrink-0 {{ $isFaq ? 'font-bold text-blue-600 bg-blue-50' : 'font-semibold text-neutral-600 hover:text-blue-600' }}">
                FAQ
            </a>

            <!-- Layanan (di paling kanan) -->
            <a href="{{ route('layanan') }}"
                class="px-2.5 xl:px-3.5 py-1.5 xl:py-2 text-xs xl:text-sm rounded-full transition-all whitespace-nowrap flex-shrink-0 {{ $isLayanan ? 'font-bold text-blue-600 bg-blue-50' : 'font-semibold text-neutral-600 hover:text-blue-600' }}">
                Layanan
            </a>
        </nav>

        <!-- 3. ACTIONS (CTA BUTTON - SATU BARIS) -->
        <div class="hidden lg:flex items-center flex-shrink-0 whitespace-nowrap">
            <!-- CTA PRIMER (TOMBOL GRADIENT BULAT 'KONSULTASI') -->
            <a href="{{ url('/#kontak') }}"
                class="inline-flex items-center justify-center px-4 xl:px-6 py-2 xl:py-2.5 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold text-xs uppercase tracking-wider shadow-md shadow-blue-500/25 hover:shadow-lg hover:shadow-blue-500/35 hover:scale-105 active:scale-95 transition-all whitespace-nowrap leading-none flex-shrink-0">
                Konsultasi
            </a>
        </div>

        <!-- 4. MOBILE CONTROLS (TOMBOL MENU) -->
        <div class="flex lg:hidden items-center flex-shrink-0">
            <!-- Mobile Hamburger Button -->
            <button type="button" onclick="openAgencyMenu()"
                class="p-2.5 rounded-full border border-neutral-200 text-neutral-700 bg-white/80 hover:bg-neutral-100 transition-colors focus:outline-none shadow-xs"
                aria-label="Buka menu navigasi">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.2">
                    <line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/>
                </svg>
            </button>
        </div>

    </div>
</header>

<!-- ======================================================== -->
<!-- RESPONSIVE SLIDE-OVER DRAWER (MOBILE)                    -->
<!-- ======================================================== -->
<!-- Backdrop Overlay -->
<div id="agencyDrawerBackdrop" onclick="closeAgencyMenu()"
    class="fixed inset-0 bg-slate-950/50 backdrop-blur-xs z-50 hidden transition-opacity duration-300 opacity-0 lg:hidden"
    aria-hidden="true"></div>

<!-- Slide-over Drawer Panel -->
<div id="agencyDrawer"
    class="fixed inset-y-0 right-0 z-50 w-[280px] sm:w-[340px] max-w-[85vw] bg-white border-l border-neutral-200 p-6 flex flex-col justify-between shadow-2xl transition-transform duration-300 ease-in-out translate-x-full lg:hidden overflow-y-auto">
    
    <div>
        <!-- Drawer Header with Logo & Close Button -->
        <div class="flex items-center justify-between pb-6 border-b border-neutral-100">
            <div class="flex items-center gap-3">
                <img src="{{ asset('logo.png') }}" alt="{{ $brandName }}" class="h-8 w-auto object-contain flex-shrink-0" />
                <span class="text-xl font-bold tracking-tight text-neutral-900">
                    {{ $brandName }}
                </span>
            </div>

            <button type="button" onclick="closeAgencyMenu()"
                class="p-2 rounded-full text-neutral-400 hover:text-neutral-700 hover:bg-neutral-100 transition-colors focus:outline-none"
                aria-label="Tutup menu">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation Links -->
        <nav class="mt-6 space-y-1.5">
            <!-- Beranda -->
            <a href="{{ route('home') }}" onclick="closeAgencyMenu()"
                class="block px-4 py-3 rounded-2xl text-sm transition-colors {{ $isHome ? 'font-bold bg-blue-50 text-blue-600' : 'font-semibold text-neutral-700 hover:bg-neutral-50' }}">
                Beranda
            </a>

            <!-- Tentang -->
            <a href="{{ route('tentang') }}" onclick="closeAgencyMenu()"
                class="block px-4 py-3 rounded-2xl text-sm transition-colors {{ $isTentang ? 'font-bold bg-blue-50 text-blue-600' : 'font-semibold text-neutral-700 hover:bg-neutral-50' }}">
                Tentang
            </a>

            <!-- Portofolio -->
            <a href="{{ route('portofolio') }}" onclick="closeAgencyMenu()"
                class="block px-4 py-3 rounded-2xl text-sm transition-colors {{ $isPortofolio ? 'font-bold bg-blue-50 text-blue-600' : 'font-semibold text-neutral-700 hover:bg-neutral-50' }}">
                Portofolio
            </a>

            <!-- Harga -->
            <a href="{{ route('harga') }}" onclick="closeAgencyMenu()"
                class="block px-4 py-3 rounded-2xl text-sm transition-colors {{ $isHarga ? 'font-bold bg-blue-50 text-blue-600' : 'font-semibold text-neutral-700 hover:bg-neutral-50' }}">
                Harga
            </a>

            <!-- Alur Kerja -->
            <a href="{{ route('alur-kerja') }}" onclick="closeAgencyMenu()"
                class="block px-4 py-3 rounded-2xl text-sm transition-colors {{ $isAlurKerja ? 'font-bold bg-blue-50 text-blue-600' : 'font-semibold text-neutral-700 hover:bg-neutral-50' }}">
                Alur Kerja
            </a>

            <!-- FAQ -->
            <a href="{{ route('faq') }}" onclick="closeAgencyMenu()"
                class="block px-4 py-3 rounded-2xl text-sm transition-colors {{ $isFaq ? 'font-bold bg-blue-50 text-blue-600' : 'font-semibold text-neutral-700 hover:bg-neutral-50' }}">
                FAQ
            </a>

            <!-- Layanan -->
            <a href="{{ route('layanan') }}" onclick="closeAgencyMenu()"
                class="block px-4 py-3 rounded-2xl text-sm transition-colors {{ $isLayanan ? 'font-bold bg-blue-50 text-blue-600' : 'font-semibold text-neutral-700 hover:bg-neutral-50' }}">
                Layanan
            </a>
        </nav>
    </div>

    <!-- Drawer Footer with CTA -->
    <div class="pt-6 border-t border-neutral-100">
        <a href="{{ url('/#kontak') }}" onclick="closeAgencyMenu()"
            class="w-full flex items-center justify-center py-3.5 px-6 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-blue-500/25 transition-all active:scale-95">
            Konsultasi
        </a>
    </div>

</div>

<!-- ======================================================== -->
<!-- JAVASCRIPT: SCROLL TRANSFORMATION LOGIC                  -->
<!-- ======================================================== -->
<script>
    // Scroll Transformation: Transparent at top -> Floating rounded pill on scroll
    const mainHeaderWrapper = document.getElementById('mainHeaderWrapper');
    const navbarPill = document.getElementById('navbarPill');

    function handleHeaderScroll() {
        if (window.scrollY > 20) {
            // STATE: SCROLLED (FLOATING CAPSULE / PILL DENGAN BLUR)
            mainHeaderWrapper.classList.remove('py-4', 'sm:py-5');
            mainHeaderWrapper.classList.add('py-2', 'sm:py-3');

            navbarPill.classList.remove('max-w-7xl', 'bg-transparent', 'border-transparent', 'px-0', 'py-0', 'rounded-none');
            navbarPill.classList.add(
                'max-w-[1200px]',
                'bg-white/85',
                'backdrop-blur-md',
                'rounded-full',
                'border',
                'border-neutral-200/90',
                'shadow-lg',
                'shadow-black/5',
                'px-4',
                'sm:px-6',
                'py-2',
                'sm:py-2.5'
            );
        } else {
            // STATE: TOP OF PAGE (BENAR-BENAR TRANSPARAN SEPERTI AWAL)
            mainHeaderWrapper.classList.add('py-4', 'sm:py-5');
            mainHeaderWrapper.classList.remove('py-2', 'sm:py-3');

            navbarPill.classList.add('max-w-7xl', 'bg-transparent', 'border-transparent', 'px-0', 'py-0', 'rounded-none');
            navbarPill.classList.remove(
                'max-w-[1200px]',
                'bg-white/85',
                'backdrop-blur-md',
                'rounded-full',
                'border',
                'border-neutral-200/90',
                'shadow-lg',
                'shadow-black/5',
                'px-4',
                'sm:px-6',
                'py-2',
                'sm:py-2.5'
            );
        }
    }

    window.addEventListener('scroll', handleHeaderScroll, { passive: true });
    // Trigger on page load
    handleHeaderScroll();

    // Mobile Slide-over Drawer Logic
    const agencyDrawer = document.getElementById('agencyDrawer');
    const agencyDrawerBackdrop = document.getElementById('agencyDrawerBackdrop');

    function openAgencyMenu() {
        agencyDrawer.classList.remove('translate-x-full');
        agencyDrawerBackdrop.classList.remove('hidden');
        requestAnimationFrame(() => {
            agencyDrawerBackdrop.classList.add('opacity-100');
        });
        document.body.classList.add('overflow-hidden');
    }

    function closeAgencyMenu() {
        agencyDrawer.classList.add('translate-x-full');
        agencyDrawerBackdrop.classList.remove('opacity-100');
        setTimeout(() => {
            agencyDrawerBackdrop.classList.add('hidden');
        }, 300);
        document.body.classList.remove('overflow-hidden');
    }

    // Close on Escape Key
    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeAgencyMenu();
        }
    });

    // Close on Screen Resize to Desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            closeAgencyMenu();
        }
    });
</script>
