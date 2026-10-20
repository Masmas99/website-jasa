@props([
    'brandText' => 'jasa',
])

<!-- ======================================================== -->
<!-- MINIMALIST WHITE FOOTER (CROPPED HALFTONE WORDMARK)      -->
<!-- ======================================================== -->
<footer class="bg-white text-neutral-900 border-t border-neutral-100 relative overflow-hidden pt-20 sm:pt-28 pb-0 selection:bg-neutral-900 selection:text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- 4 NAVIGATION & DETAIL COLUMNS -->
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-x-4 sm:gap-x-8 lg:gap-x-12 gap-y-10 sm:gap-y-12 text-sm">
            <!-- Col 1: NAVIGASI -->
            <div>
                <p class="text-[11px] font-mono uppercase tracking-[0.2em] text-neutral-400 mb-6 font-semibold">
                    Navigasi
                </p>
                <ul class="space-y-3.5 text-neutral-600 font-medium">
                    <li><a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Beranda</a></li>
                    <li><a href="{{ route('tentang') }}" class="hover:text-blue-600 transition-colors">Tentang</a></li>
                    <li><a href="{{ route('portofolio') }}" class="hover:text-blue-600 transition-colors">Portofolio</a></li>
                    <li><a href="{{ route('harga') }}" class="hover:text-blue-600 transition-colors">Harga</a></li>
                    <li><a href="{{ route('alur-kerja') }}" class="hover:text-blue-600 transition-colors">Alur Kerja</a></li>
                    <li><a href="{{ Route::has('faq') ? route('faq') : url('/faq') }}" class="hover:text-blue-600 transition-colors">FAQ</a></li>
                    <li><a href="{{ route('layanan') }}" class="hover:text-blue-600 transition-colors">Layanan</a></li>
                </ul>
            </div>

            <!-- Col 2: LAYANAN -->
            <div>
                <p class="text-[11px] font-mono uppercase tracking-[0.2em] text-neutral-400 mb-6 font-semibold">
                    Layanan
                </p>
                <ul class="space-y-3.5 text-neutral-600 font-medium">
                    <li><a href="{{ route('layanan') }}" class="hover:text-blue-600 transition-colors">Web Development</a></li>
                    <li><a href="{{ route('layanan') }}" class="hover:text-blue-600 transition-colors">UI/UX Design</a></li>
                    <li><a href="{{ route('layanan') }}" class="hover:text-blue-600 transition-colors">Mobile Applications</a></li>
                    <li><a href="{{ route('layanan') }}" class="hover:text-blue-600 transition-colors">Brand Identity</a></li>
                    <li><a href="{{ route('layanan') }}" class="hover:text-blue-600 transition-colors">Sistem Informasi</a></li>
                </ul>
            </div>

            <!-- Col 3: SOSIAL MEDIA -->
            <div>
                <p class="text-[11px] font-mono uppercase tracking-[0.2em] text-neutral-400 mb-6 font-semibold">
                    Sosial Media
                </p>
                <ul class="space-y-3.5 text-neutral-600 font-medium">
                    <li><a href="#" class="hover:text-blue-600 transition-colors">Instagram</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition-colors">LinkedIn</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition-colors">GitHub</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition-colors">X (Twitter)</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition-colors">Dribbble</a></li>
                </ul>
            </div>

            <!-- Col 4: KONTAK -->
            <div>
                <p class="text-[11px] font-mono uppercase tracking-[0.2em] text-neutral-400 mb-6 font-semibold">
                    Kontak
                </p>
                <div class="space-y-3.5 text-xs sm:text-sm">
                    <p class="text-blue-600 font-bold text-sm">Jasa Digital</p>
                    <p class="text-neutral-500">Jakarta Selatan, Indonesia</p>
                    <a href="mailto:hello@jasa.id" class="text-neutral-900 hover:text-blue-600 transition-colors block font-mono">
                        hello@jasa.id
                    </a>
                    <p class="text-neutral-400 font-mono text-[11px] pt-1">
                        WIB (GMT+7) &bull; 09:00 - 18:00
                    </p>
                </div>
            </div>
        </div>

        <!-- COPYRIGHT & PRIVACY ROW -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between pt-20 sm:pt-28 pb-8 sm:pb-12 text-xs font-mono text-neutral-400 gap-4">
            <p>&copy; {{ date('Y') }} Jasa. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-neutral-900 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-neutral-900 transition-colors">Terms of Service</a>
            </div>
        </div>

    </div>

    <!-- ======================================================== -->
    <!-- GIANT HALFTONE WORDMARK (TERPOTONG DI BAGIAN BAWAH) -->
    <!-- ======================================================== -->
    <div class="w-full overflow-hidden select-none pointer-events-none leading-none -mb-2 sm:-mb-4">
        <svg viewBox="0 0 1400 220" class="w-full h-auto block" preserveAspectRatio="xMidYMin slice">
            <defs>
                <!-- Halftone Circular Dot Matrix Pattern with modern vibrant blue dots -->
                <pattern id="halftoneDotsPattern" x="0" y="0" width="9" height="9" patternUnits="userSpaceOnUse">
                    <circle cx="4.5" cy="4.5" r="3.4" fill="#2563EB" />
                </pattern>
            </defs>
            <!-- Large Bold Text in Halftone Dots, Positioned so lower half is cut off by viewBox (y="265") -->
            <text x="50%" y="265" text-anchor="middle" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-weight="900" font-size="330" letter-spacing="-0.05em" fill="url(#halftoneDotsPattern)">
                {{ $brandText }}
            </text>
        </svg>
    </div>
</footer>
