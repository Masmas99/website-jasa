@props([
    'current' => '',
])

<!-- ======================================================== -->
<!-- BREADCRUMB NAVIGATION (DI BAWAH KIRI HEADER, TANPA BACKGROUND) -->
<!-- ======================================================== -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 sm:pt-32 pb-2 w-full">
    <nav class="flex items-center gap-2 text-xs sm:text-sm font-medium text-neutral-500" aria-label="Breadcrumb">
        <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">
            Beranda
        </a>
        <span class="text-neutral-400 select-none">&gt;</span>
        <span class="font-bold text-neutral-900">
            {{ $current }}
        </span>
    </nav>
</div>
