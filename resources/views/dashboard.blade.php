<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eduplex - Dashboard</title>

    <!-- Google Fonts: Plus Jakarta Sans & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Vite Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #e2e8f0;
            border-radius: 9999px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #cbd5e1;
        }

        /* Smooth Drawer Transitions */
        #sidebar {
            will-change: transform;
        }
    </style>
</head>

<body class="bg-brand-bg font-sans text-slate-800 antialiased min-h-screen flex flex-col lg:flex-row p-3 sm:p-4 lg:p-5 gap-4 lg:gap-6 overflow-x-hidden selection:bg-brand-lime selection:text-slate-900">

    {{-- Hidden Volt Navigation component to maintain compatibility with Breeze test suite --}}
    @auth
        <div class="hidden" aria-hidden="true">
            <livewire:layout.navigation />
        </div>
    @endauth

    <!-- ================= MOBILE BACKDROP ================= -->
    <div id="sidebarBackdrop" onclick="closeSidebar()"
        class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-40 hidden transition-opacity duration-300 opacity-0 lg:hidden"
        aria-hidden="true"></div>

    <!-- ================= SIDEBAR (Off-canvas Drawer on < lg, Static Sidebar on lg+) ================= -->
    <aside id="sidebar"
        class="fixed lg:static inset-y-0 left-0 z-50 w-[280px] sm:w-[300px] lg:w-[260px] xl:w-[270px] bg-brand-dark text-white rounded-r-3xl lg:rounded-3xl flex flex-col justify-between p-5 flex-shrink-0 transition-transform duration-300 ease-in-out -translate-x-full lg:translate-x-0 lg:sticky lg:top-5 lg:h-[calc(100vh-2.5rem)] shadow-2xl lg:shadow-xl overflow-y-auto">
        <div>
            <!-- Brand Logo Header & Mobile Close Button -->
            <div class="flex items-center justify-between mb-8 pt-1 px-1">
                <div class="flex items-center gap-3">
                    <!-- Logo Circle Icon -->
                    <div class="w-10 h-10 rounded-full bg-white text-brand-dark flex items-center justify-center font-extrabold relative shadow-sm flex-shrink-0">
                        <div class="w-8 h-8 rounded-full border-2 border-brand-dark flex items-center justify-center">
                            <div class="w-3 h-3 bg-pink-300 rounded-full"></div>
                        </div>
                    </div>
                    <span class="text-2xl font-bold tracking-tight text-white">Eduplex</span>
                </div>

                <!-- Close Button on Mobile Drawer -->
                <button type="button" onclick="closeSidebar()"
                    class="lg:hidden p-2 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/80 transition-colors focus:outline-none"
                    aria-label="Close sidebar">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Navigation Menu (Hanya Dashboard) -->
            <nav id="navMenu" class="space-y-1.5 sm:space-y-2">
                <!-- Dashboard (Active Pill State) -->
                <a href="{{ route('dashboard') }}" onclick="handleNavClick()"
                    class="flex items-center gap-3.5 px-4 py-3 rounded-full bg-brand-lime text-slate-950 font-bold transition-all shadow-sm">
                    <i data-lucide="layout-grid" class="w-5 h-5 stroke-[2.5]"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
            </nav>
        </div>

        <!-- Mobile App Download Promotion Card -->
        <div id="promoCard"
            class="mt-8 relative bg-brand-lime rounded-3xl p-4 text-brand-dark overflow-visible group flex-shrink-0">
            <!-- Top Center Floating Overlapping Arrow Button -->
            <div class="absolute -top-5 left-1/2 -translate-x-1/2 z-20">
                <a href="#"
                    class="w-11 h-11 rounded-full bg-brand-dark text-white flex items-center justify-center hover:scale-110 active:scale-95 transition-transform border-4 border-brand-dark shadow-md"
                    aria-label="Download app">
                    <i data-lucide="arrow-up-right" class="w-5 h-5 stroke-[2.5]"></i>
                </a>
            </div>

            <div class="pt-4 flex items-end justify-between relative z-10 min-h-[100px]">
                <!-- Left Side: White Wave Label Card -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-3 max-w-[125px] shadow-xs">
                    <!-- Abstract Line Decorative Graphic -->
                    <svg class="w-10 h-6 text-brand-dark mb-1" viewBox="0 0 40 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" stroke-linecap="round">
                        <path d="M4 8 Q 12 2, 20 12 T 36 6"></path>
                        <path d="M4 16 Q 12 10, 20 20 T 36 14"></path>
                    </svg>
                    <p class="font-extrabold text-[12px] leading-tight text-slate-900">Download our mobile app</p>
                </div>

                <!-- Right Side: Phone Screen UI Representation -->
                <div class="w-14 space-y-1.5 opacity-80 pb-1 flex-shrink-0">
                    <div class="w-full h-1.5 bg-brand-dark/20 rounded-full"></div>
                    <div class="w-full h-1.5 bg-brand-dark/20 rounded-full"></div>
                    <div class="w-full h-1.5 bg-brand-dark/20 rounded-full"></div>
                    <div class="w-full h-8 bg-brand-dark/20 rounded-lg"></div>
                </div>
            </div>
        </div>
    </aside>

    <!-- ================= MAIN CONTENT AREA ================= -->
    <main class="flex-1 min-w-0 max-w-[1600px] w-full space-y-5 sm:space-y-6">

        <!-- MOBILE TOP BAR (Visible only on < lg) -->
        <div class="lg:hidden flex items-center justify-between bg-brand-dark text-white px-4 py-3 rounded-2xl shadow-md">
            <div class="flex items-center gap-3">
                <button type="button" onclick="openSidebar()"
                    class="p-2 -ml-1 text-slate-300 hover:text-white hover:bg-slate-800/80 rounded-xl transition-colors focus:outline-none"
                    aria-label="Open navigation menu">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-full bg-white text-brand-dark flex items-center justify-center font-extrabold relative shadow-sm">
                        <div class="w-6 h-6 rounded-full border-2 border-brand-dark flex items-center justify-center">
                            <div class="w-2.5 h-2.5 bg-pink-300 rounded-full"></div>
                        </div>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-white">Eduplex</span>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <!-- Notifications button -->
                <a href="#"
                    class="relative p-2 text-slate-300 hover:text-white rounded-xl hover:bg-slate-800/80 transition-colors"
                    aria-label="Notifications">
                    <i data-lucide="bell" class="w-5 h-5"></i>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-[#fca5a5] rounded-full ring-2 ring-brand-dark"></span>
                </a>
                <!-- Mobile User avatar with Dropdown -->
                <div class="relative" id="mobileProfileContainer">
                    <button type="button" onclick="toggleProfileDropdown('mobile')" class="flex items-center focus:outline-none" aria-label="Menu profil">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=150"
                                alt="Taylor Profile"
                                class="w-8 h-8 rounded-full object-cover ring-2 ring-brand-lime shadow-xs hover:scale-105 transition-transform"
                                onerror="this.src='https://placehold.co/100x100/111726/ffffff?text=T'" />
                            <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-emerald-500 border-2 border-brand-dark rounded-full"></span>
                        </div>
                    </button>

                    <!-- Mobile Dropdown Menu -->
                    <div id="mobileProfileDropdownMenu" class="hidden absolute right-0 mt-2 w-52 bg-white text-slate-800 rounded-2xl shadow-xl border border-slate-100 py-2 z-50">
                        @auth
                            <div class="px-4 py-2 border-b border-slate-100">
                                <p class="text-xs font-bold text-slate-900 truncate">{{ auth()->user()->name }}</p>
                                <p class="text-[11px] text-slate-400 truncate mt-0.5">{{ auth()->user()->email }}</p>
                            </div>
                            <a href="{{ route('profile') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-slate-700 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                                <i data-lucide="user" class="w-4 h-4 text-slate-400"></i>
                                <span>Profil Akun</span>
                            </a>
                            <div class="border-t border-slate-100 my-1"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-rose-600 hover:bg-rose-50 transition-colors text-left">
                                    <i data-lucide="log-out" class="w-4 h-4 text-rose-500"></i>
                                    <span>Keluar (Log Out)</span>
                                </button>
                            </form>
                        @else
                            <div class="px-4 py-2 border-b border-slate-100">
                                <p class="text-xs font-bold text-slate-900">Mode Tamu (Guest)</p>
                                <p class="text-[11px] text-slate-400">Masuk untuk mengelola akun</p>
                            </div>
                            <a href="{{ route('login') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                                <i data-lucide="log-in" class="w-4 h-4 text-slate-400"></i>
                                <span>Masuk (Login)</span>
                            </a>
                            <a href="{{ route('register') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                                <i data-lucide="user-plus" class="w-4 h-4 text-slate-400"></i>
                                <span>Daftar Akun</span>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        <!-- TOP HEADER: Greeting & User Profile Dropdown (Search Dihapus) -->
        <header class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3.5 sm:gap-4 pb-1">
            <!-- Greeting -->
            <div class="min-w-0">
                <h1 class="text-xl xs:text-2xl lg:text-3xl font-extrabold text-slate-900 tracking-tight flex items-center gap-2">
                    <span class="truncate">Welcome back {{ auth()->user()->name ?? 'Taylor' }}</span>
                    <span class="animate-bounce inline-block flex-shrink-0">👋</span>
                </h1>
                <p class="text-xs text-slate-500 font-medium mt-0.5 hidden xs:block">Selamat datang di panel dashboard Anda.</p>
            </div>

            <!-- Profile Menu & Logout (Desktop View on lg+) -->
            <div class="hidden lg:flex items-center gap-3">
                <div class="relative" id="desktopProfileContainer">
                    <button type="button" onclick="toggleProfileDropdown('desktop')"
                        class="flex items-center gap-3 p-1.5 pr-3 bg-white hover:bg-slate-50 border border-slate-200/80 rounded-full transition-all shadow-xs focus:outline-none">
                        <div class="relative flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=150"
                                alt="Taylor Profile"
                                class="w-9 h-9 rounded-full object-cover ring-2 ring-white"
                                onerror="this.src='https://placehold.co/100x100/111726/ffffff?text=T'" />
                            <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-emerald-500 border-2 border-white rounded-full"></span>
                        </div>
                        <div class="text-left min-w-0 max-w-[130px]">
                            <p class="text-xs font-bold text-slate-900 truncate leading-tight">
                                {{ auth()->user()->name ?? 'Taylor' }}
                            </p>
                            <p class="text-[11px] text-slate-400 font-medium truncate">
                                {{ auth()->user()->email ?? 'admin@eduplex.test' }}
                            </p>
                        </div>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400"></i>
                    </button>

                    <!-- Desktop Dropdown Menu -->
                    <div id="desktopProfileDropdownMenu" class="hidden absolute right-0 mt-2 w-56 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 z-50">
                        @auth
                            <div class="px-4 py-2 border-b border-slate-100">
                                <p class="text-xs font-bold text-slate-900 truncate">{{ auth()->user()->name }}</p>
                                <p class="text-[11px] text-slate-400 truncate mt-0.5">{{ auth()->user()->email }}</p>
                            </div>
                            <a href="{{ route('profile') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-slate-700 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                                <i data-lucide="user" class="w-4 h-4 text-slate-400"></i>
                                <span>Profil Akun</span>
                            </a>
                            <div class="border-t border-slate-100 my-1"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-rose-600 hover:bg-rose-50 transition-colors text-left">
                                    <i data-lucide="log-out" class="w-4 h-4 text-rose-500"></i>
                                    <span>Keluar (Log Out)</span>
                                </button>
                            </form>
                        @else
                            <div class="px-4 py-2 border-b border-slate-100">
                                <p class="text-xs font-bold text-slate-900">Mode Tamu (Guest)</p>
                                <p class="text-[11px] text-slate-400">Masuk untuk mengelola akun</p>
                            </div>
                            <a href="{{ route('login') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                                <i data-lucide="log-in" class="w-4 h-4 text-slate-400"></i>
                                <span>Masuk (Login)</span>
                            </a>
                            <a href="{{ route('register') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                                <i data-lucide="user-plus" class="w-4 h-4 text-slate-400"></i>
                                <span>Daftar Akun</span>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </header>

        <!-- ================= MAIN CONTENT (KOSONGAN) ================= -->
        <div class="w-full min-h-[400px]">
            {{-- Area konten dashboard sengaja dibiarkan kosong --}}
        </div>

    </main>

    <!-- ================= JAVASCRIPT ================= -->
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Responsive Drawer Logic
        const sidebar = document.getElementById('sidebar');
        const backdrop = document.getElementById('sidebarBackdrop');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            backdrop.classList.remove('hidden');
            requestAnimationFrame(() => {
                backdrop.classList.add('opacity-100');
            });
            document.body.classList.add('overflow-hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            backdrop.classList.remove('opacity-100');
            setTimeout(() => {
                backdrop.classList.add('hidden');
            }, 300);
            document.body.classList.remove('overflow-hidden');
        }

        // Close on link click on mobile
        function handleNavClick() {
            if (window.innerWidth < 1024) {
                closeSidebar();
            }
        }

        // Profile Dropdown Toggle Logic
        function toggleProfileDropdown(type) {
            const menuId = type === 'mobile' ? 'mobileProfileDropdownMenu' : 'desktopProfileDropdownMenu';
            const menu = document.getElementById(menuId);
            if (menu) {
                menu.classList.toggle('hidden');
                // Re-initialize any dynamic icons inside dropdown if needed
                lucide.createIcons();
            }
        }

        // Close dropdown when clicking outside
        window.addEventListener('click', (e) => {
            const desktopContainer = document.getElementById('desktopProfileContainer');
            const desktopMenu = document.getElementById('desktopProfileDropdownMenu');
            if (desktopContainer && desktopMenu && !desktopContainer.contains(e.target)) {
                desktopMenu.classList.add('hidden');
            }

            const mobileContainer = document.getElementById('mobileProfileContainer');
            const mobileMenu = document.getElementById('mobileProfileDropdownMenu');
            if (mobileContainer && mobileMenu && !mobileContainer.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Close on Escape key
        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                const desktopMenu = document.getElementById('desktopProfileDropdownMenu');
                if (desktopMenu) desktopMenu.classList.add('hidden');
                const mobileMenu = document.getElementById('mobileProfileDropdownMenu');
                if (mobileMenu) mobileMenu.classList.add('hidden');

                if (!sidebar.classList.contains('-translate-x-full') && window.innerWidth < 1024) {
                    closeSidebar();
                }
            }
        });

        // Close automatically if viewport resized to desktop breakpoint
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                document.body.classList.remove('overflow-hidden');
                backdrop.classList.add('hidden');
                backdrop.classList.remove('opacity-100');
            }
        });
    </script>
</body>

</html>
