<x-public-layout :title="$project['name'] . ' - Detail Portofolio | Jasa Digital'">

    <!-- BREADCRUMB (DI BAWAH KIRI HEADER) -->
    <x-breadcrumb parent="Portofolio" parentRoute="portofolio" :current="$project['name']" />

    <!-- HERO HEADER SECTION -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12 sm:pt-6 sm:pb-16">
        <div class="max-w-4xl">
            <!-- Category Badge -->
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 border border-blue-100/80 mb-4">
                {{ $project['category'] }}
            </span>

            <!-- Giant Title -->
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-neutral-950 leading-[1.15] break-words">
                {{ $project['name'] }}
            </h1>

            <p class="text-lg sm:text-xl text-neutral-700 font-medium mt-3 leading-snug">
                {{ $project['headline'] }}
            </p>

            <p class="text-sm sm:text-base text-neutral-600 mt-4 leading-relaxed max-w-3xl">
                {{ $project['short_desc'] }}
            </p>

            <!-- Project Meta Pills -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-8 pt-6 border-t border-neutral-200/80">
                <div>
                    <span class="text-[11px] font-mono uppercase tracking-wider text-neutral-400 block font-semibold">Klien</span>
                    <span class="text-sm font-bold text-neutral-900 mt-0.5 block truncate">{{ $project['client'] }}</span>
                </div>
                <div>
                    <span class="text-[11px] font-mono uppercase tracking-wider text-neutral-400 block font-semibold">Tahun</span>
                    <span class="text-sm font-bold text-neutral-900 mt-0.5 block">{{ $project['year'] }}</span>
                </div>
                <div>
                    <span class="text-[11px] font-mono uppercase tracking-wider text-neutral-400 block font-semibold">Durasi</span>
                    <span class="text-sm font-bold text-neutral-900 mt-0.5 block">{{ $project['duration'] }}</span>
                </div>
                <div>
                    <span class="text-[11px] font-mono uppercase tracking-wider text-neutral-400 block font-semibold">Peran Kami</span>
                    <span class="text-sm font-bold text-neutral-900 mt-0.5 block truncate">{{ $project['role'] }}</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SHOWCASE HERO BANNER -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 sm:mb-20">
        <div class="relative w-full rounded-3xl overflow-hidden bg-gradient-to-tr {{ $project['gradient'] }} p-8 sm:p-12 lg:p-16 text-white shadow-2xl">
            <!-- Ambient Pattern Background -->
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.2),transparent_60%)] pointer-events-none"></div>
            
            <div class="relative z-10 max-w-2xl">
                <span class="inline-block bg-white/20 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Studi Kasus Proyek
                </span>
                <h2 class="text-2xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">
                    {{ $project['name'] }}
                </h2>
                <p class="text-white/90 text-sm sm:text-base mt-4 leading-relaxed max-w-xl">
                    {{ $project['headline'] }}
                </p>

                <!-- Impact Stat Ribbon -->
                <div class="mt-8 sm:mt-10 inline-flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-6 bg-white/15 backdrop-blur-md px-5 py-3.5 rounded-2xl border border-white/20">
                    <span class="text-2xl sm:text-3xl font-black text-white">
                        {{ $project['metric'] }}
                    </span>
                    <span class="text-xs sm:text-sm text-white/90 font-medium">
                        {{ $project['metric_label'] }}
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- CASE STUDY MAIN CONTENT & SIDEBAR -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20 sm:pb-28">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">

            <!-- LEFT 2 COLUMNS: CASE STUDY DETAIL -->
            <div class="lg:col-span-2 space-y-12">

                <!-- 1. Ringkasan Proyek -->
                <div>
                    <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-blue-600 mb-2">
                        <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                        <span>01. Ringkasan Proyek</span>
                    </div>
                    <h3 class="text-2xl font-bold text-neutral-900 tracking-tight">Tentang Sistem & Latar Belakang</h3>
                    <p class="text-neutral-700 text-sm sm:text-base mt-4 leading-relaxed">
                        {{ $project['overview'] }}
                    </p>
                </div>

                <!-- 2. Tantangan Bisnis -->
                <div class="p-6 sm:p-8 rounded-3xl bg-neutral-50 border border-neutral-200/80">
                    <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-amber-600 mb-2">
                        <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                        <span>02. Tantangan Bisnis</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-neutral-900 tracking-tight">Kendala yang Harus Dipecahkan</h3>
                    <p class="text-neutral-700 text-sm sm:text-base mt-4 leading-relaxed">
                        {{ $project['challenge'] }}
                    </p>
                </div>

                <!-- 3. Solusi & Pendekatan Teknis -->
                <div>
                    <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-blue-600 mb-2">
                        <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                        <span>03. Solusi Kami</span>
                    </div>
                    <h3 class="text-2xl font-bold text-neutral-900 tracking-tight">Pendekatan Rekayasa Sistem</h3>
                    <p class="text-neutral-700 text-sm sm:text-base mt-4 leading-relaxed">
                        {{ $project['solution'] }}
                    </p>
                </div>

                <!-- 4. Fitur-Fitur Utama yang Dibangun -->
                <div class="pt-4">
                    <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-blue-600 mb-2">
                        <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                        <span>04. Kapabilitas Utama</span>
                    </div>
                    <h3 class="text-2xl font-bold text-neutral-900 tracking-tight mb-6">Fitur Unggulan yang Diimplementasikan</h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach ($project['features'] as $feature)
                            <div class="flex items-start gap-3 p-4 rounded-2xl bg-white border border-neutral-200/80 shadow-xs">
                                <div class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span class="text-xs sm:text-sm font-medium text-neutral-800 leading-snug">
                                    {{ $feature }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <!-- RIGHT 1 COLUMN: SIDEBAR (STACK, SPECS, CTA) -->
            <div class="space-y-8">

                <!-- Tech Stack Card -->
                <div class="rounded-3xl bg-neutral-50/70 border border-neutral-200/80 p-6 sm:p-7">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-neutral-900 mb-4 flex items-center gap-2">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        <span>Teknologi Digunakan</span>
                    </h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($project['technologies'] as $tech)
                            <span class="px-3.5 py-1.5 rounded-full text-xs font-semibold bg-white border border-neutral-200 text-neutral-800 shadow-2xs">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- Info Card -->
                <div class="rounded-3xl bg-white border border-neutral-200/80 p-6 sm:p-7 shadow-xs space-y-4">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-neutral-900 border-b border-neutral-100 pb-3">
                        Detail Ringkas
                    </h4>
                    <div>
                        <span class="text-xs text-neutral-400 block font-medium">Kategori Industri</span>
                        <span class="text-sm font-bold text-neutral-800">{{ $project['category'] }}</span>
                    </div>
                    <div>
                        <span class="text-xs text-neutral-400 block font-medium">Klien Resmi</span>
                        <span class="text-sm font-bold text-neutral-800">{{ $project['client'] }}</span>
                    </div>
                    <div>
                        <span class="text-xs text-neutral-400 block font-medium">Tahun Rilis</span>
                        <span class="text-sm font-bold text-neutral-800">{{ $project['year'] }}</span>
                    </div>
                    <div>
                        <span class="text-xs text-neutral-400 block font-medium">Durasi Eksekusi</span>
                        <span class="text-sm font-bold text-neutral-800">{{ $project['duration'] }}</span>
                    </div>
                </div>

                <!-- Sticky Contact Callout Card -->
                <div class="rounded-3xl bg-gradient-to-br from-blue-600 to-indigo-700 p-6 sm:p-7 text-white shadow-xl shadow-blue-500/15">
                    <span class="text-[11px] font-bold uppercase tracking-widest text-blue-200 block mb-2">Konsultasi Serupa</span>
                    <h4 class="text-lg font-bold leading-snug">Ingin Membangun Solusi Seperti Ini?</h4>
                    <p class="text-xs text-blue-100 mt-2 leading-relaxed">
                        Diskusikan kebutuhan spesifik arsitektur, estimasi biaya, dan jadwal peluncuran sistem Anda bersama tim engineer kami.
                    </p>
                    <div class="mt-6 space-y-2.5">
                        <a href="https://wa.me/62895411890562?text={{ urlencode('Halo Jasa, saya tertarik dengan studi kasus proyek ' . $project['name'] . '. Saya ingin konsultasi proyek serupa.') }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-full bg-white text-blue-600 font-bold text-xs uppercase tracking-wider hover:bg-neutral-100 active:scale-95 transition-all shadow-md">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.275.072.376-.044c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.072.043.419-.101.824z"/></svg>
                            <span>WhatsApp Kami</span>
                        </a>
                        <a href="{{ url('/#kontak') }}"
                            class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-full bg-blue-500/40 hover:bg-blue-500/60 text-white font-bold text-xs uppercase tracking-wider border border-white/20 transition-all">
                            <span>Kirim Pesan</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- PREV / NEXT PROJECT NAVIGATION -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 sm:pb-24 border-t border-neutral-100 pt-12">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
            
            <!-- Previous -->
            <div class="w-full sm:w-auto">
                @if ($prevProject)
                    <a href="{{ route('portofolio.detail', $prevProject['slug']) }}" class="group flex items-center gap-3 text-left">
                        <span class="w-10 h-10 rounded-full border border-neutral-200 flex items-center justify-center text-neutral-600 group-hover:bg-blue-600 group-hover:border-blue-600 group-hover:text-white transition-all flex-shrink-0">
                            &larr;
                        </span>
                        <div>
                            <span class="text-[11px] font-mono uppercase tracking-wider text-neutral-400 block font-semibold">Proyek Sebelumnya</span>
                            <span class="text-sm font-bold text-neutral-900 group-hover:text-blue-600 transition-colors">{{ $prevProject['name'] }}</span>
                        </div>
                    </a>
                @else
                    <div class="opacity-0 pointer-events-none hidden sm:block w-32"></div>
                @endif
            </div>

            <!-- Back to All -->
            <a href="{{ route('portofolio') }}" class="px-5 py-2.5 rounded-full border border-neutral-200 text-xs font-bold uppercase tracking-wider text-neutral-700 hover:bg-neutral-50 transition-all">
                Semua Portofolio
            </a>

            <!-- Next -->
            <div class="w-full sm:w-auto text-right">
                @if ($nextProject)
                    <a href="{{ route('portofolio.detail', $nextProject['slug']) }}" class="group flex items-center justify-end gap-3 text-right">
                        <div>
                            <span class="text-[11px] font-mono uppercase tracking-wider text-neutral-400 block font-semibold">Proyek Selanjutnya</span>
                            <span class="text-sm font-bold text-neutral-900 group-hover:text-blue-600 transition-colors">{{ $nextProject['name'] }}</span>
                        </div>
                        <span class="w-10 h-10 rounded-full border border-neutral-200 flex items-center justify-center text-neutral-600 group-hover:bg-blue-600 group-hover:border-blue-600 group-hover:text-white transition-all flex-shrink-0">
                            &rarr;
                        </span>
                    </a>
                @else
                    <div class="opacity-0 pointer-events-none hidden sm:block w-32"></div>
                @endif
            </div>

        </div>
    </section>

</x-public-layout>
