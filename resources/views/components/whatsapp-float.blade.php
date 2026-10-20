@props([
    'phone' => '62895411890562',
    'message' => 'Halo Jasa, saya tertarik untuk konsultasi pembuatan website/aplikasi.',
])

@php
    $whatsappUrl = 'https://wa.me/' . $phone . '?text=' . rawurlencode($message);
@endphp

<!-- FLOATING WHATSAPP BUTTON (BOTTOM LEFT - ICON ONLY) -->
<aside class="fixed bottom-4 left-4 sm:bottom-6 sm:left-6 z-50 pointer-events-auto" aria-label="Kontak WhatsApp">
    <a href="{{ $whatsappUrl }}"
        target="_blank"
        rel="noopener noreferrer"
        class="group w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-[#2b5fea] hover:bg-[#2051db] text-white flex items-center justify-center shadow-lg shadow-[#2b5fea]/35 hover:shadow-xl hover:shadow-[#2b5fea]/50 hover:scale-110 active:scale-95 transition-all duration-300 border border-blue-400/30 select-none"
        aria-label="Hubungi WhatsApp"
        title="Hubungi WhatsApp: 0895411890562">
        
        <!-- White WhatsApp SVG Icon -->
        <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.01 2.002c-5.51 0-9.99 4.48-9.99 9.99 0 1.76.46 3.48 1.33 4.99L2 22l5.17-1.33c1.46.8 3.12 1.22 4.84 1.22 5.51 0 9.99-4.48 9.99-9.99 0-2.67-1.04-5.18-2.93-7.07-1.89-1.89-4.4-2.93-7.06-2.93zm0 1.83c2.18 0 4.23.85 5.77 2.39 1.54 1.54 2.39 3.59 2.39 5.77 0 4.5-3.66 8.16-8.16 8.16-1.44 0-2.85-.38-4.09-1.1l-.29-.17-3.04.8 1.07-2.94-.19-.31c-.81-1.3-1.24-2.8-1.24-4.34 0-4.5 3.66-8.16 8.16-8.16zm-3.5 4.38c-.19 0-.42.07-.63.3-.22.23-.84.82-.84 2s.86 2.32.98 2.48c.12.16 1.68 2.56 4.07 3.59 1.99.86 2.39.69 2.82.65.43-.04 1.38-.56 1.58-1.11.19-.55.19-1.02.13-1.11-.06-.1-.22-.16-.45-.27-.23-.12-1.38-.68-1.59-.76-.21-.08-.37-.12-.52.12-.16.23-.6 1.02-.73 1.17-.13.15-.27.17-.5.06-.23-.11-.97-.36-1.85-1.14-.68-.61-1.15-1.36-1.28-1.59-.13-.23-.01-.36.1-.47.1-.11.23-.28.35-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.52-1.27-.72-1.73-.19-.46-.39-.4-.54-.4-.14 0-.3-.01-.47-.01z"/>
        </svg>
    </a>
</aside>
