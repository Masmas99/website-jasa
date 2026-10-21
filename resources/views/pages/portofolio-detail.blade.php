<x-public-layout :title="$project['name'] . ' - Detail Portofolio | Jasa Digital'">

    <!-- BREADCRUMB (DI BAWAH KIRI HEADER) -->
    <x-breadcrumb parent="Portofolio" parentRoute="portofolio" :current="$project['name']" />

    <!-- DETAIL HERO & CONTENT SECTION (TAMPILAN SESUAI GAMBAR REFERENSI 2) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-20 sm:pt-6 sm:pb-28">

        <!-- 1. Headline & Title (Di Atas Gambar & Sidebar) -->
        <div class="mb-8 sm:mb-10 max-w-4xl">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 border border-blue-200 mb-3">
                {{ $project['category'] }}
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-neutral-950 leading-[1.2]">
                {{ $project['name'] }}
            </h1>
            <p class="text-lg sm:text-xl text-neutral-600 font-semibold mt-2">
                {{ $project['headline'] }}
            </p>
        </div>

        <!-- 2. GRID KONTEN: GAMBAR (KIRI) & RINGKAS PROYEK (KANAN - SEJAJAR) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-12 items-start">

            <!-- ======================================================== -->
            <!-- LEFT 2 COLUMNS: MOCKUP IMAGE & NARRATIVE (SESUAI GAMBAR 2) -->
            <!-- ======================================================== -->
            <div class="lg:col-span-2">

                <!-- 1. Large Rounded Mockup Image (Sejajar dengan Ringkas Proyek di Kanan) -->
                <div class="w-full rounded-3xl overflow-hidden border border-neutral-200/90 shadow-lg bg-neutral-950 aspect-[16/10] sm:aspect-[16/9] mb-8 sm:mb-10">
                    <img src="{{ asset($project['image']) }}"
                        alt="{{ $project['name'] }}"
                        class="w-full h-full object-cover object-top"
                        loading="eager" />
                </div>

                <!-- 2. Narrative Paragraphs (Persis Teks Gambar 2) -->
                <div class="space-y-6 text-neutral-700 text-sm sm:text-base leading-relaxed">
                    @foreach ($project['paragraphs'] as $paragraph)
                        <p class="text-justify sm:text-left leading-relaxed">
                            {{ $paragraph }}
                        </p>
                    @endforeach
                </div>

                <!-- 3. Tombol Kunjungi Proyek Live (Sesuai Permintaan) -->
                <div class="pt-8">
                    <a href="{{ $project['live_url'] ?? '#' }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-full bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-blue-500/25 hover:shadow-xl hover:shadow-blue-500/35 hover:scale-105 active:scale-95 transition-all">
                        <span>Kunjungi Proyek Live</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>
                </div>

            </div>

            <!-- ======================================================== -->
            <!-- RIGHT 1 COLUMN: SIDEBAR (PERSIS GAMBAR REFERENSI 2)      -->
            <!-- ======================================================== -->
            <div class="lg:col-span-1 space-y-6 lg:sticky lg:top-28">

                <!-- 1. Card "Ringkas proyek" (Persis Gambar 2 Kanan Atas) -->
                <div class="rounded-3xl bg-white border border-neutral-200/80 p-6 sm:p-7 shadow-xs">
                    <h3 class="text-base font-bold text-neutral-900 mb-5">
                        Ringkas proyek
                    </h3>

                    <div class="space-y-4">
                        <div>
                            <span class="text-[10px] font-mono uppercase tracking-wider text-neutral-400 font-bold block mb-1">
                                KATEGORI
                            </span>
                            <span class="text-sm font-bold text-blue-600 block">
                                {{ $project['category'] }}
                            </span>
                        </div>

                        <div>
                            <span class="text-[10px] font-mono uppercase tracking-wider text-neutral-400 font-bold block mb-1">
                                KLIEN
                            </span>
                            <span class="text-sm font-bold text-neutral-900 block">
                                {{ $project['client'] }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- 2. Dark Navy Card "Butuh hasil serupa?" (Persis Gambar 2 Kanan Bawah) -->
                <div class="rounded-3xl bg-[#0c182d] p-6 sm:p-7 text-white shadow-xl shadow-slate-900/10">
                    <h3 class="text-base sm:text-lg font-bold text-white mb-2">
                        Butuh hasil serupa?
                    </h3>

                    <p class="text-xs text-neutral-300 leading-relaxed mb-6">
                        Hubungi kami lewat WhatsApp dengan konteks studi kasus ini sudah terisi di pesan — tim bisa membalas dengan langkah berikutnya.
                    </p>

                    <!-- Blue WhatsApp Button (Diubah Menjadi Biru Sesuai Permintaan & Logo Diperbesar) -->
                    <a href="https://wa.me/62895411890562?text={{ urlencode('Halo Jasa, saya tertarik dengan studi kasus ' . $project['name'] . '. Saya ingin konsultasi proyek serupa.') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="w-full inline-flex items-center justify-center gap-3 py-3.5 px-6 rounded-full bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-blue-500/25 hover:shadow-xl hover:shadow-blue-500/35 hover:brightness-105 active:scale-95 transition-all">
                        <svg class="w-6 h-6 fill-current flex-shrink-0" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.275.072.376-.044c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.072.043.419-.101.824z"/></svg>
                        <span>CHAT WHATSAPP</span>
                    </a>

                    <!-- Sub Links (Persis Gambar 2) -->
                    <div class="mt-4 pt-3 border-t border-white/10 space-y-2">
                        <a href="mailto:hello@jasa.id?subject={{ urlencode('Tanya Proyek Serupa: ' . $project['name']) }}"
                            class="text-sky-400 hover:text-sky-300 text-xs font-semibold block transition-colors">
                            Kirim email
                        </a>
                        <a href="{{ route('kontak') }}"
                            class="text-neutral-400 hover:text-white text-xs block transition-colors">
                            Halaman kontak lengkap &rarr;
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- PREV / NEXT NAVIGATION SECTION -->
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
