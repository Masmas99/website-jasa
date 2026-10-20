@props([
    'phone' => '62895411890562',
    'message' => 'Halo Jasa, saya tertarik untuk konsultasi pembuatan website/aplikasi.',
])

@php
    $whatsappUrl = 'https://wa.me/' . $phone . '?text=' . rawurlencode($message);
@endphp

<!-- FLOATING WHATSAPP BUTTON (BOTTOM RIGHT - FULLY RESPONSIVE) -->
<aside class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 z-50 pointer-events-auto" aria-label="Kontak WhatsApp">
    <a href="{{ $whatsappUrl }}"
        target="_blank"
        rel="noopener noreferrer"
        class="group inline-flex items-center gap-2.5 sm:gap-3 p-1 sm:p-1.5 pr-4 sm:pr-6 rounded-full bg-[#2b5fea] hover:bg-[#2051db] text-white shadow-lg shadow-[#2b5fea]/30 hover:shadow-xl hover:shadow-[#2b5fea]/45 hover:-translate-y-1 active:translate-y-0 transition-all duration-300 border border-blue-400/25 select-none"
        title="Hubungi Kami via WhatsApp: 0895411890562">
        
        <!-- White Circular Icon Wrapper -->
        <span class="w-10 h-10 sm:w-12 sm:h-12 bg-white rounded-full flex items-center justify-center shrink-0 shadow-xs group-hover:scale-105 transition-transform duration-300">
            <!-- Blue WhatsApp SVG Icon -->
            <svg class="w-5 h-5 sm:w-6.5 sm:h-6.5 text-[#2b5fea]" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12.01 2.002c-5.51 0-9.99 4.48-9.99 9.99 0 1.76.46 3.48 1.33 4.99L2 22l5.17-1.33c1.46.8 3.12 1.22 4.84 1.22 5.51 0 9.99-4.48 9.99-9.99 0-2.67-1.04-5.18-2.93-7.07-1.89-1.89-4.4-2.93-7.06-2.93zm0 1.83c2.18 0 4.23.85 5.77 2.39 1.54 1.54 2.39 3.59 2.39 5.77 0 4.5-3.66 8.16-8.16 8.16-1.44 0-2.85-.38-4.09-1.1l-.29-.17-3.04.8 1.07-2.94-.19-.31c-.81-1.3-1.24-2.8-1.24-4.34 0-4.5 3.66-8.16 8.16-8.16zm-3.5 4.38c-.19 0-.42.07-.63.3-.22.23-.84.82-.84 2s.86 2.32.98 2.48c.12.16 1.68 2.56 4.07 3.59 1.99.86 2.39.69 2.82.65.43-.04 1.38-.56 1.58-1.11.19-.55.19-1.02.13-1.11-.06-.1-.22-.16-.45-.27-.23-.12-1.38-.68-1.59-.76-.21-.08-.37-.12-.52.12-.16.23-.6 1.02-.73 1.17-.13.15-.27.17-.5.06-.23-.11-.97-.36-1.85-1.14-.68-.61-1.15-1.36-1.28-1.59-.13-.23-.01-.36.1-.47.1-.11.23-.28.35-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.52-1.27-.72-1.73-.19-.46-.39-.4-.54-.4-.14 0-.3-.01-.47-.01z"/>
            </svg>
        </span>

        <!-- Two-tier Text Content -->
        <span class="flex flex-col text-left leading-tight pr-0.5 sm:pr-1">
            <span class="text-[9px] sm:text-[11px] font-black uppercase tracking-[0.16em] text-blue-100/90">
                HUBUNGI
            </span>
            <span class="text-xs sm:text-base font-extrabold text-white tracking-tight -mt-0.5 whitespace-nowrap">
                Hubungi WhatsApp
            </span>
        </span>
    </a>
</aside>
