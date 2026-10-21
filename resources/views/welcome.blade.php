<x-public-layout title="Jasa - Solusi Digital Modern Tanpa Batas">

    <!-- ======================================================== -->
    <!-- 1. HERO SECTION (#beranda)                               -->
    <!-- Mobile: Badge -> Headline -> Hero Image -> Subheadline -> CTA -->
    <!-- Desktop: 2-Kolom (Kiri: Teks Lengkap, Kanan: Hero Image)  -->
    <!-- ======================================================== -->
    <section id="beranda" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8 sm:pt-20 sm:pb-12 lg:pt-24 lg:pb-14">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-6 sm:gap-y-8 lg:gap-y-0 lg:gap-x-14 xl:gap-x-16 items-center">

            <!-- WRAPPER KONTEN TEKS: contents di mobile (agar hero bisa diapit di tengah), flex di desktop -->
            <div class="contents lg:flex lg:flex-col lg:items-start lg:text-left">

                <!-- 1. BADGE & HEADLINE (Urutan 1 di Mobile & Posisi Atas Kolom Kiri di Desktop) -->
                <div class="order-1 flex flex-col items-start text-left">
                    <!-- Tagline Badge -->
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 border border-blue-100/70 mb-3.5 sm:mb-4">
                        Solusi Software & Web Modern
                    </span>

                    <!-- Giant Headline (WARNA HITAM - DIPERKECIL SEDIKIT) -->
                    <h1 class="text-2xl sm:text-4xl xl:text-5xl font-extrabold tracking-tight text-neutral-950 leading-[1.2] break-words">
                        Jasa pembuatan website kustom & aplikasi bisnis.
                    </h1>
                </div>

                <!-- 3. SUB-HEADLINE & CTA (Urutan 3 di Mobile setelah Hero & Posisi Bawah Kolom Kiri di Desktop) -->
                <div class="order-3 flex flex-col items-start text-left lg:mt-5">
                    <!-- Sub-headline (DIPERKECIL SEDIKIT) -->
                    <p class="text-sm sm:text-base text-neutral-600 leading-relaxed max-w-xl">
                        Jasa merancang dan membangun ekosistem website, sistem informasi, dan aplikasi mobile berkinerja tinggi dengan arsitektur modern, cepat, dan terpercaya.
                    </p>

                    <!-- Action CTA Buttons -->
                    <div class="mt-5 sm:mt-6 lg:mt-8 flex flex-wrap items-center gap-3.5 sm:gap-4">
                        <a href="#kontak"
                            class="inline-flex items-center gap-2 px-7 sm:px-8 py-3.5 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-blue-500/25 hover:shadow-xl hover:shadow-blue-500/35 hover:scale-105 active:scale-95 transition-all">
                            <span>Konsultasi</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="{{ route('portofolio') }}"
                            class="inline-flex items-center gap-2 px-7 sm:px-8 py-3.5 rounded-full bg-white hover:bg-neutral-50 text-neutral-800 border border-neutral-200/90 hover:border-neutral-300 font-bold text-xs uppercase tracking-wider transition-all shadow-xs active:scale-95">
                            <span>Lihat Portofolio</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- 2. GAMBAR HERO TRANSPARAN DENGAN ANIMASI (Urutan 2 di Mobile di tengah & Kolom Kanan di Desktop) -->
            <div class="order-2 lg:order-none relative w-full flex items-center justify-center lg:justify-end py-4 sm:py-6 lg:py-2 select-none pointer-events-none">

                <!-- ANIMASI 1: Pulsing Ambient Gradient Mesh Glow -->
                <div class="absolute w-64 h-64 sm:w-80 sm:h-80 lg:w-[420px] lg:h-[420px] bg-gradient-to-tr from-blue-500/20 via-indigo-400/20 to-cyan-400/25 rounded-full blur-3xl -z-10 animate-pulse pointer-events-none" style="animation-duration: 4s;"></div>

                <!-- ANIMASI 2: Outer Rotating Dashed Orbital Ring -->
                <div class="absolute w-[260px] h-[260px] sm:w-[360px] sm:h-[360px] lg:w-[480px] lg:h-[480px] rounded-full border border-blue-400/25 border-dashed -z-10 pointer-events-none animate-spin" style="animation-duration: 35s;"></div>

                <!-- ANIMASI 3: Inner Counter-Rotating Orbit Ring with Satellite Nodes -->
                <div class="absolute w-[200px] h-[200px] sm:w-[270px] sm:h-[270px] lg:w-[360px] lg:h-[360px] rounded-full border border-indigo-400/30 -z-10 pointer-events-none animate-spin" style="animation-duration: 22s; animation-direction: reverse;">
                    <!-- Satellite Node 1 -->
                    <span class="absolute -top-1.5 left-1/2 -translate-x-1/2 w-3 h-3 bg-blue-500 rounded-full shadow-lg shadow-blue-500/60 ring-4 ring-blue-100/60"></span>
                    <!-- Satellite Node 2 -->
                    <span class="absolute -bottom-1.5 left-1/2 -translate-x-1/2 w-2.5 h-2.5 bg-cyan-400 rounded-full shadow-md shadow-cyan-400/60 ring-2 ring-cyan-100/60"></span>
                </div>

                <!-- Gambar Hero Transparan Diam (Tanpa Hover Zoom, Tidak Bisa Diklik) -->
                <img src="{{ asset('hero.png') }}"
                    alt="Jasa Pembuatan Website Kustom & Aplikasi Bisnis"
                    class="relative z-10 w-full max-w-[320px] sm:max-w-[420px] lg:max-w-[500px] h-auto object-contain select-none pointer-events-none drop-shadow-2xl"
                    draggable="false"
                    loading="eager" />
            </div>

        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 2. LAYANAN OVERVIEW SECTION                              -->
    <!-- ======================================================== -->
    <section class="pt-10 pb-14 sm:pt-14 sm:pb-18 lg:pt-16 lg:pb-20 bg-neutral-50/60 border-t border-neutral-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl lg:max-w-5xl mx-auto mb-10 sm:mb-12">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-[0.25em] text-blue-600 block mb-2 sm:mb-3">Layanan Unggulan</span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-[2.65rem] font-extrabold text-neutral-900 tracking-tight leading-tight">
                    Solusi untuk Pertumbuhan Bisnis Anda
                </h2>
                <p class="text-neutral-600 mt-3 text-sm sm:text-base max-w-2xl mx-auto">Dari konsep awal hingga peluncuran sistem berskala enterprise dengan performa maksimal.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-3xl p-8 border border-neutral-200/80 hover:border-blue-300 shadow-sm hover:shadow-xl hover:shadow-blue-500/5 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all shadow-xs">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 group-hover:text-blue-600 transition-colors">Web Development</h3>
                    <p class="text-neutral-600 text-sm mt-3 leading-relaxed">Website modern, responsif, dan ultra cepat menggunakan Laravel, Livewire, Vue, dan arsitektur Tailwind CSS terbaru.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-3xl p-8 border border-neutral-200/80 hover:border-blue-300 shadow-sm hover:shadow-xl hover:shadow-blue-500/5 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all shadow-xs">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 group-hover:text-blue-600 transition-colors">UI/UX Design</h3>
                    <p class="text-neutral-600 text-sm mt-3 leading-relaxed">Rancangan antarmuka pengguna interaktif dan berkelas dengan riset pengalaman pengguna berstandar internasional.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-3xl p-8 border border-neutral-200/80 hover:border-blue-300 shadow-sm hover:shadow-xl hover:shadow-blue-500/5 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all shadow-xs">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 group-hover:text-blue-600 transition-colors">Mobile Applications</h3>
                    <p class="text-neutral-600 text-sm mt-3 leading-relaxed">Aplikasi native dan cross-platform iOS & Android yang lancar, aman, serta terintegrasi langsung dengan API backend.</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('layanan') }}" class="inline-flex items-center gap-2 text-sm font-bold text-blue-600 hover:text-blue-700">
                    <span>Lihat Semua Layanan Kami Selengkapnya</span>
                    &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 3. PORTOFOLIO OVERVIEW                                   -->
    <!-- ======================================================== -->
    <section class="py-20 sm:py-28 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Karya Terbaik</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-neutral-900 mt-4 tracking-tight">Portofolio & Proyek Pilihan</h2>
            </div>
            <a href="{{ route('portofolio') }}" class="inline-flex items-center gap-1.5 text-sm font-bold text-blue-600 hover:text-blue-700">
                <span>Eksplorasi Seluruh Portofolio</span>
                &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Project 1 -->
            <a href="{{ route('portofolio') }}" class="group rounded-3xl border border-neutral-200/90 bg-neutral-50/50 p-6 sm:p-8 hover:bg-white hover:border-blue-300 hover:shadow-xl hover:shadow-blue-500/5 transition-all block">
                <div class="aspect-video w-full rounded-2xl bg-gradient-to-tr from-blue-600 via-indigo-600 to-cyan-500 p-8 flex flex-col justify-between text-white shadow-inner">
                    <span class="bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold self-start">FinTech SaaS</span>
                    <h4 class="text-2xl font-black">Jasa Analytics Platform</h4>
                </div>
                <div class="mt-6 flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-neutral-900 group-hover:text-blue-600 transition-colors">Platform Keuangan Multi-Tenancy</h3>
                        <p class="text-sm text-neutral-500 mt-1">Laravel &bull; Livewire &bull; Tailwind CSS</p>
                    </div>
                    <span class="w-10 h-10 rounded-full border border-neutral-200 flex items-center justify-center text-neutral-700 group-hover:bg-blue-600 group-hover:border-blue-600 group-hover:text-white transition-all">
                        &rarr;
                    </span>
                </div>
            </a>

            <!-- Project 2 -->
            <a href="{{ route('portofolio') }}" class="group rounded-3xl border border-neutral-200/90 bg-neutral-50/50 p-6 sm:p-8 hover:bg-white hover:border-blue-300 hover:shadow-xl hover:shadow-blue-500/5 transition-all block">
                <div class="aspect-video w-full rounded-2xl bg-gradient-to-tr from-cyan-500 via-blue-500 to-indigo-700 p-8 flex flex-col justify-between text-white shadow-inner">
                    <span class="bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold self-start">E-Commerce</span>
                    <h4 class="text-2xl font-black">Nordic Supply Co.</h4>
                </div>
                <div class="mt-6 flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-neutral-900 group-hover:text-blue-600 transition-colors">Toko Online Ekspor Global</h3>
                        <p class="text-sm text-neutral-500 mt-1">Headless E-Commerce &bull; Payment Gateway</p>
                    </div>
                    <span class="w-10 h-10 rounded-full border border-neutral-200 flex items-center justify-center text-neutral-700 group-hover:bg-blue-600 group-hover:border-blue-600 group-hover:text-white transition-all">
                        &rarr;
                    </span>
                </div>
            </a>
        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 4. ALUR KERJA OVERVIEW                                   -->
    <!-- ======================================================== -->
    <section class="py-20 sm:py-28 bg-neutral-50/60 border-t border-neutral-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-widest text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Metodologi</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-neutral-900 mt-4 tracking-tight">Alur Kerja Cepat & Transparan</h2>
                <p class="text-neutral-600 mt-3 text-sm sm:text-base">Setiap tahap dipantau secara ketat untuk memastikan hasil sesuai ekspektasi Anda.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-3xl border border-neutral-200/80 shadow-xs">
                    <span class="text-3xl font-black text-blue-600">01</span>
                    <h3 class="text-base font-bold text-neutral-900 mt-4">Konsultasi & Riset</h3>
                    <p class="text-neutral-500 text-xs sm:text-sm mt-2 leading-relaxed">Mendalami kebutuhan dan spesifikasi bisnis Anda secara komprehensif.</p>
                </div>
                <div class="bg-white p-6 rounded-3xl border border-neutral-200/80 shadow-xs">
                    <span class="text-3xl font-black text-blue-600">02</span>
                    <h3 class="text-base font-bold text-neutral-900 mt-4">Desain Prototyping</h3>
                    <p class="text-neutral-500 text-xs sm:text-sm mt-2 leading-relaxed">Menyusun wireframe dan antarmuka interaktif bernilai estetika tinggi.</p>
                </div>
                <div class="bg-white p-6 rounded-3xl border border-neutral-200/80 shadow-xs">
                    <span class="text-3xl font-black text-blue-600">03</span>
                    <h3 class="text-base font-bold text-neutral-900 mt-4">Koding & Integrasi</h3>
                    <p class="text-neutral-500 text-xs sm:text-sm mt-2 leading-relaxed">Implementasi arsitektur bersih, aman, dan siap skala besar.</p>
                </div>
                <div class="bg-white p-6 rounded-3xl border border-neutral-200/80 shadow-xs">
                    <span class="text-3xl font-black text-blue-600">04</span>
                    <h3 class="text-base font-bold text-neutral-900 mt-4">Pengujian & Rilis</h3>
                    <p class="text-neutral-500 text-xs sm:text-sm mt-2 leading-relaxed">Quality assurance menyeluruh sebelum deployment ke server produksi.</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('alur-kerja') }}" class="inline-flex items-center gap-2 text-sm font-bold text-blue-600 hover:text-blue-700">
                    <span>Pelajari Alur Kerja Lengkap Kami</span>
                    &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 5. HARGA SECTION                                         -->
    <!-- ======================================================== -->
    <section class="py-20 sm:py-28 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-widest text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Paket Investasi</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-neutral-900 mt-4 tracking-tight">Pilihan Harga Sesuai Kebutuhan</h2>
            <p class="text-neutral-600 mt-3 text-sm sm:text-base">Transparan tanpa biaya tersembunyi dengan garansi kepuasan penuh.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch max-w-lg lg:max-w-none mx-auto">
            <!-- Plan 1 -->
            <div class="rounded-3xl border border-neutral-200 p-8 flex flex-col justify-between bg-white shadow-xs">
                <div>
                    <h3 class="text-lg font-bold text-neutral-900">Starter</h3>
                    <p class="text-xs text-neutral-500 mt-1">Untuk UMKM & Bisnis Baru</p>
                    <div class="mt-6">
                        <span class="text-3xl sm:text-4xl font-black text-neutral-900">Rp 4.5jt</span>
                        <span class="text-xs text-neutral-400">/ proyek</span>
                    </div>
                    <ul class="mt-8 space-y-3 text-xs sm:text-sm text-neutral-600">
                        <li class="flex items-center gap-2">&check; Desain Responsif Mobile</li>
                        <li class="flex items-center gap-2">&check; Hingga 5 Halaman Utama</li>
                        <li class="flex items-center gap-2">&check; Optimasi Kecepatan Standar</li>
                        <li class="flex items-center gap-2">&check; Dukungan 1 Bulan</li>
                    </ul>
                </div>
                <a href="{{ route('harga') }}" class="mt-8 block text-center py-3 px-4 rounded-full border border-neutral-200 hover:border-neutral-300 font-bold text-xs uppercase tracking-wider text-neutral-800 transition-colors">
                    Lihat Rincian
                </a>
            </div>

            <!-- Plan 2 (Featured) -->
            <div class="rounded-3xl border-2 border-blue-600 p-8 flex flex-col justify-between bg-white shadow-xl shadow-blue-500/10 relative">
                <span class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-blue-600 text-white text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full shadow-sm">
                    Paling Populer
                </span>
                <div>
                    <h3 class="text-lg font-bold text-neutral-900">Professional</h3>
                    <p class="text-xs text-neutral-500 mt-1">Untuk Perusahaan Berkembang</p>
                    <div class="mt-6">
                        <span class="text-3xl sm:text-4xl font-black text-blue-600">Rp 12.5jt</span>
                        <span class="text-xs text-neutral-400">/ proyek</span>
                    </div>
                    <ul class="mt-8 space-y-3 text-xs sm:text-sm text-neutral-600">
                        <li class="flex items-center gap-2 font-semibold text-neutral-900">&check; Sistem Informasi / Web App Lengkap</li>
                        <li class="flex items-center gap-2">&check; Dashboard Admin & Laporan</li>
                        <li class="flex items-center gap-2">&check; Integrasi Pembayaran / API</li>
                        <li class="flex items-center gap-2">&check; Optimasi SEO & Performa Tinggi</li>
                        <li class="flex items-center gap-2">&check; Dukungan Prioritas 3 Bulan</li>
                    </ul>
                </div>
                <a href="{{ route('harga') }}" class="mt-8 block text-center py-3 px-4 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 font-bold text-xs uppercase tracking-wider text-white shadow-md shadow-blue-500/25 transition-all">
                    Lihat Rincian
                </a>
            </div>

            <!-- Plan 3 -->
            <div class="rounded-3xl border border-neutral-200 p-8 flex flex-col justify-between bg-white shadow-xs">
                <div>
                    <h3 class="text-lg font-bold text-neutral-900">Custom Enterprise</h3>
                    <p class="text-xs text-neutral-500 mt-1">Kustom Arsitektur Skala Besar</p>
                    <div class="mt-6">
                        <span class="text-3xl sm:text-4xl font-black text-neutral-900">Hubungi Kami</span>
                    </div>
                    <ul class="mt-8 space-y-3 text-xs sm:text-sm text-neutral-600">
                        <li class="flex items-center gap-2">&check; Kebutuhan Sistem Kompleks</li>
                        <li class="flex items-center gap-2">&check; Mobile Apps iOS & Android</li>
                        <li class="flex items-center gap-2">&check; Dedicated DevOps & Cloud Setup</li>
                        <li class="flex items-center gap-2">&check; SLA 99.9% & Perawatan Rutin</li>
                    </ul>
                </div>
                <a href="{{ route('harga') }}" class="mt-8 block text-center py-3 px-4 rounded-full border border-neutral-200 hover:border-neutral-300 font-bold text-xs uppercase tracking-wider text-neutral-800 transition-colors">
                    Diskusi Kustom
                </a>
            </div>
        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 6. KONTAK SECTION                                        -->
    <!-- ======================================================== -->
    <section id="kontak" class="py-20 sm:py-28 bg-gradient-to-b from-neutral-50/60 to-white border-t border-neutral-100">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Mulai Sekarang</span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-neutral-950 mt-4 tracking-tight">Siap Meluncurkan Proyek Impian Anda?</h2>
            <p class="text-neutral-600 text-sm sm:text-base max-w-xl mx-auto mt-4 leading-relaxed">
                Diskusikan kebutuhan proyek Anda bersama tim ahli kami. Kami siap memberikan konsultasi dan rencana eksekusi terbaik.
            </p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <a href="mailto:hello@studiojasa.com"
                    class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-blue-500/25 hover:scale-105 active:scale-95 transition-all">
                    <span>Konsultasi</span>
                    &rarr;
                </a>
            </div>
        </div>
    </section>

</x-public-layout>
