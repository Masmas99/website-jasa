<x-public-layout title="Portofolio Proyek - Jasa Digital Agency">

    <!-- BREADCRUMB (DI BAWAH KIRI HEADER, TANPA BACKGROUND) -->
    <x-breadcrumb current="Portofolio" />

    <!-- HERO SECTION -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-14 sm:pt-6 sm:pb-18 text-center">
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-neutral-950 max-w-4xl mx-auto leading-[1.15] sm:leading-[1.12] break-words">
            Karya Unggulan yang <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500">Mendorong Pertumbuhan</span> Nyata.
        </h1>

        <p class="text-base sm:text-lg text-neutral-600 max-w-2xl mx-auto mt-6 leading-relaxed">
            Jelajahi berbagai sistem informasi berskala besar, platform SaaS, dan aplikasi mobile yang telah berhasil kami bangun untuk klien kami. Klik salah satu proyek untuk membaca detail studi kasus lengkap.
        </p>
    </section>

    <!-- PORTFOLIO GRID (TAMPILAN SESUAI GAMBAR REFERENSI 1) -->
    <section class="pb-24 sm:pb-32 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @php
            $projectList = $projects ?? \App\Http\Controllers\PortfolioController::getProjects();
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projectList as $slug => $project)
                <!-- Project Card Item -->
                <div class="group rounded-3xl border border-neutral-200/90 bg-white overflow-hidden shadow-sm hover:shadow-xl hover:border-blue-300 transition-all flex flex-col justify-between">
                    
                    <!-- 1. Mockup Image Banner with Dark Gradient Overlay & Text Inside -->
                    <a href="{{ route('portofolio.detail', $slug) }}" class="relative w-full aspect-[16/10] overflow-hidden bg-neutral-900 block focus:outline-none">
                        <img src="{{ asset($project['image']) }}"
                            alt="{{ $project['name'] }}"
                            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
                            loading="lazy" />

                        <!-- Dark Gradient Overlay (Meniru Gambar 1) -->
                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/95 via-neutral-950/45 to-transparent flex flex-col justify-end p-6">
                            <span class="text-xs font-bold uppercase tracking-wider text-blue-500 drop-shadow-xs">
                                {{ $project['category'] }}
                            </span>
                            <h3 class="text-2xl font-black text-white mt-1 tracking-tight drop-shadow-sm">
                                {{ $project['name'] }}
                            </h3>
                        </div>
                    </a>

                    <!-- 2. Content Body & Action Link (Meniru Gambar 1) -->
                    <div class="p-6 sm:p-7 flex flex-col justify-between flex-1">
                        <p class="text-neutral-600 text-sm leading-relaxed line-clamp-3">
                            {{ $project['short_desc'] }}
                        </p>

                        <div class="mt-6 pt-2">
                            <a href="{{ route('portofolio.detail', $slug) }}"
                                class="inline-flex items-center gap-1.5 text-blue-600 hover:text-blue-700 font-bold text-sm group/btn focus:outline-none">
                                <span>Buka studi kasus</span>
                                <span class="group-hover/btn:translate-x-1.5 transition-transform duration-200">&rarr;</span>
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="py-20 sm:py-28 bg-gradient-to-b from-neutral-50/60 to-white border-t border-neutral-100">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-neutral-900 tracking-tight">Punya Ide Proyek Serupa?</h2>
            <p class="text-neutral-600 text-sm sm:text-base mt-3 max-w-xl mx-auto">Mari wujudkan aplikasi dan sistem informasi impian Anda dengan kualitas terbaik.</p>
            <div class="mt-8">
                <a href="{{ route('kontak') }}" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-blue-500/25 hover:scale-105 active:scale-95 transition-all">
                    <span>Konsultasi Proyek Anda</span>
                    &rarr;
                </a>
            </div>
        </div>
    </section>

</x-public-layout>
