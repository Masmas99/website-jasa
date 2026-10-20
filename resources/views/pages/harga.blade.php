<x-public-layout title="Paket Harga & Investasi - Jasa Digital Agency">

    <!-- BREADCRUMB (DI BAWAH KIRI HEADER, TANPA BACKGROUND) -->
    <x-breadcrumb current="Harga" />

    <!-- HERO SECTION -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-16 sm:pt-6 sm:pb-20 text-center">
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-neutral-950 max-w-4xl mx-auto leading-[1.15] sm:leading-[1.12] break-words">
            Investasi Terencana untuk <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500">Hasil Maksimal</span>.
        </h1>

        <p class="text-base sm:text-lg text-neutral-600 max-w-2xl mx-auto mt-6 leading-relaxed">
            Tanpa biaya tersembunyi. Source code sepenuhnya menjadi hak milik Anda dengan jaminan garansi dan dukungan purna jual.
        </p>
    </section>

    <!-- PRICING CARDS -->
    <section class="pb-20 sm:pb-28 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch max-w-lg lg:max-w-none mx-auto">
            
            <!-- Tier 1: Starter -->
            <div class="rounded-3xl border border-neutral-200 p-8 flex flex-col justify-between bg-white shadow-xs hover:border-neutral-300 transition-all">
                <div>
                    <h3 class="text-xl font-bold text-neutral-900">Starter</h3>
                    <p class="text-xs text-neutral-500 mt-1">Solusi esensial untuk bisnis yang baru mulai go-digital.</p>
                    <div class="mt-6 pb-6 border-b border-neutral-100">
                        <span class="text-3xl sm:text-4xl font-black text-neutral-900">Rp 4.5jt</span>
                        <span class="text-xs text-neutral-400">/ proyek</span>
                    </div>
                    <ul class="mt-6 space-y-3.5 text-xs sm:text-sm text-neutral-600">
                        <li class="flex items-center gap-2.5 font-medium">&check; Desain Responsif (Mobile & Desktop)</li>
                        <li class="flex items-center gap-2.5 font-medium">&check; Maksimal 5 Halaman Konten</li>
                        <li class="flex items-center gap-2.5 font-medium">&check; Integrasi Formulir WhatsApp & Email</li>
                        <li class="flex items-center gap-2.5 font-medium">&check; Setup Domain & SSL Gratis 1 Tahun</li>
                        <li class="flex items-center gap-2.5 text-neutral-400">&times; Sistem Akun / Multi-User</li>
                        <li class="flex items-center gap-2.5 text-neutral-400">&times; Integrasi Payment Gateway</li>
                    </ul>
                </div>
                <div class="mt-8 pt-6 border-t border-neutral-100">
                    <a href="{{ url('/#kontak') }}" class="block text-center py-3.5 px-4 rounded-full border border-neutral-200 hover:border-neutral-400 font-bold text-xs uppercase tracking-wider text-neutral-800 transition-all active:scale-95">
                        Pilih Paket Starter
                    </a>
                </div>
            </div>

            <!-- Tier 2: Professional (Featured) -->
            <div class="rounded-3xl border-2 border-blue-600 p-8 flex flex-col justify-between bg-white shadow-xl shadow-blue-500/10 relative">
                <span class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-blue-600 text-white text-[10px] font-black uppercase tracking-widest px-3.5 py-1 rounded-full shadow-sm">
                    Paling Diminati
                </span>
                <div>
                    <h3 class="text-xl font-bold text-neutral-900">Professional</h3>
                    <p class="text-xs text-neutral-500 mt-1">Platform web dinamis, SaaS, dan aplikasi bisnis berskala menengah.</p>
                    <div class="mt-6 pb-6 border-b border-neutral-100">
                        <span class="text-3xl sm:text-4xl font-black text-blue-600">Rp 12.5jt</span>
                        <span class="text-xs text-neutral-400">/ proyek</span>
                    </div>
                    <ul class="mt-6 space-y-3.5 text-xs sm:text-sm text-neutral-600">
                        <li class="flex items-center gap-2.5 font-semibold text-neutral-900">&check; Sistem Web Dinamis (Laravel / Livewire)</li>
                        <li class="flex items-center gap-2.5 font-semibold text-neutral-900">&check; Dashboard Admin & Manajemen Peran (Roles)</li>
                        <li class="flex items-center gap-2.5">&check; Integrasi Midtrans / Xendit Payment Gateway</li>
                        <li class="flex items-center gap-2.5">&check; Optimasi Kecepatan & Keamanan Standar Bank</li>
                        <li class="flex items-center gap-2.5">&check; Garansi Bug & Maintenance 3 Bulan</li>
                        <li class="flex items-center gap-2.5">&check; 100% Hak Kepemilikan Source Code</li>
                    </ul>
                </div>
                <div class="mt-8 pt-6 border-t border-blue-100">
                    <a href="{{ url('/#kontak') }}" class="block text-center py-3.5 px-4 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 font-bold text-xs uppercase tracking-wider text-white shadow-md shadow-blue-500/25 transition-all active:scale-95">
                        Pilih Paket Professional
                    </a>
                </div>
            </div>

            <!-- Tier 3: Enterprise -->
            <div class="rounded-3xl border border-neutral-200 p-8 flex flex-col justify-between bg-white shadow-xs hover:border-neutral-300 transition-all">
                <div>
                    <h3 class="text-xl font-bold text-neutral-900">Custom Enterprise</h3>
                    <p class="text-xs text-neutral-500 mt-1">Arsitektur kompleks skala enterprise, mobile apps, & microservices.</p>
                    <div class="mt-6 pb-6 border-b border-neutral-100">
                        <span class="text-3xl sm:text-4xl font-black text-neutral-900">Custom</span>
                        <span class="text-xs text-neutral-400">/ disesuaikan</span>
                    </div>
                    <ul class="mt-6 space-y-3.5 text-xs sm:text-sm text-neutral-600">
                        <li class="flex items-center gap-2.5 font-medium">&check; Mobile Apps Native (iOS & Android)</li>
                        <li class="flex items-center gap-2.5 font-medium">&check; Arsitektur Cloud & High-Availability Server</li>
                        <li class="flex items-center gap-2.5 font-medium">&check; Integrasi ERP, SAP, dan Sistem Internal</li>
                        <li class="flex items-center gap-2.5 font-medium">&check; Dedicated Team & Daily Standup Meeting</li>
                        <li class="flex items-center gap-2.5 font-medium">&check; SLA 99.9% Uptime & Dukungan 24/7</li>
                        <li class="flex items-center gap-2.5 font-medium">&check; Kontrak NDA & Keamanan Data Ketat</li>
                    </ul>
                </div>
                <div class="mt-8 pt-6 border-t border-neutral-100">
                    <a href="{{ url('/#kontak') }}" class="block text-center py-3.5 px-4 rounded-full border border-neutral-200 hover:border-neutral-400 font-bold text-xs uppercase tracking-wider text-neutral-800 transition-all active:scale-95">
                        Konsultasi Kustom
                    </a>
                </div>
            </div>

        </div>
    </section>

</x-public-layout>
