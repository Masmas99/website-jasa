<x-public-layout title="Portofolio Proyek - Jasa Digital Agency">

    <!-- BREADCRUMB (DI BAWAH KIRI HEADER, TANPA BACKGROUND) -->
    <x-breadcrumb current="Portofolio" />

    <!-- HERO SECTION -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-16 sm:pt-6 sm:pb-20 text-center">
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-neutral-950 max-w-4xl mx-auto leading-[1.15] sm:leading-[1.12] break-words">
            Karya Unggulan yang <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500">Mendorong Pertumbuhan</span> Nyata.
        </h1>

        <p class="text-base sm:text-lg text-neutral-600 max-w-2xl mx-auto mt-6 leading-relaxed">
            Jelajahi berbagai sistem informasi berskala besar, platform SaaS, dan aplikasi mobile yang telah berhasil kami bangun untuk klien kami. Klik salah satu proyek untuk membaca detail studi kasus lengkap.
        </p>
    </section>

    <!-- PORTFOLIO GRID -->
    <section class="pb-24 sm:pb-32 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @php
            $projectList = $projects ?? \App\Http\Controllers\PortfolioController::getProjects();
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projectList as $slug => $project)
                <!-- Project Card Link -->
                <a href="{{ route('portofolio.detail', $slug) }}"
                    class="group rounded-3xl border border-neutral-200/90 bg-white p-6 hover:border-blue-300 hover:shadow-xl hover:shadow-blue-500/5 transition-all flex flex-col justify-between block focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                    <div>
                        <!-- Visual Header Gradient -->
                        <div class="aspect-video w-full rounded-2xl bg-gradient-to-tr {{ $project['gradient'] }} p-6 flex flex-col justify-between text-white shadow-inner relative overflow-hidden">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.22),transparent_60%)] pointer-events-none"></div>
                            
                            <span class="relative z-10 bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-[11px] font-bold self-start">
                                {{ $project['category'] }}
                            </span>
                            
                            <div class="relative z-10 flex items-end justify-between">
                                <h3 class="text-xl font-black group-hover:translate-x-1 transition-transform">
                                    {{ $project['name'] }}
                                </h3>
                                <span class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-all transform translate-x-2 group-hover:translate-x-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </span>
                            </div>
                        </div>

                        <!-- Content Details -->
                        <h4 class="text-lg font-bold text-neutral-900 mt-5 group-hover:text-blue-600 transition-colors leading-snug">
                            {{ $project['headline'] }}
                        </h4>
                        <p class="text-xs sm:text-sm text-neutral-600 mt-2 leading-relaxed">
                            {{ $project['short_desc'] }}
                        </p>
                    </div>

                    <!-- Bottom Meta & Action -->
                    <div class="mt-6 pt-4 border-t border-neutral-100 flex items-center justify-between text-xs">
                        <span class="font-bold text-blue-600">
                            {{ $project['metric'] }}
                        </span>
                        <span class="inline-flex items-center gap-1 font-bold text-neutral-500 group-hover:text-blue-600 transition-colors">
                            <span>Lihat Detail</span>
                            <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="py-20 sm:py-28 bg-gradient-to-b from-neutral-50/60 to-white border-t border-neutral-100">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-neutral-900 tracking-tight">Punya Ide Proyek Serupa?</h2>
            <p class="text-neutral-600 text-sm sm:text-base mt-3 max-w-xl mx-auto">Mari wujudkan aplikasi dan sistem informasi impian Anda dengan kualitas terbaik.</p>
            <div class="mt-8">
                <a href="{{ url('/#kontak') }}" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-blue-500/25 hover:scale-105 active:scale-95 transition-all">
                    <span>Konsultasi Proyek Anda</span>
                    &rarr;
                </a>
            </div>
        </div>
    </section>

</x-public-layout>
