<?php

namespace Tests\Feature;

use Tests\TestCase;

class AgencyPagesTest extends TestCase
{
    public function test_home_page_can_be_rendered(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Jasa');
        $response->assertSee('logo.png');
        $response->assertSee('hero.png');
        $response->assertSee('Jasa pembuatan website kustom & aplikasi bisnis.', false);
        $response->assertSee('Beranda');
        $response->assertSee('Kontak');
        $response->assertDontSee('Pelajari Alur Kerja Lengkap Kami');
        $response->assertDontSee('NEW');
        $response->assertSee('Konsultasi');
        $response->assertDontSee('Konsultasi Gratis');
        $response->assertSee('Hubungi WhatsApp');
        $response->assertSee('62895411890562');
        $response->assertSee('Kepercayaan Mitra');
        $response->assertSee('Apa kata mitra kami');
        $response->assertSee('animate-marquee-left');
        $response->assertSee('animate-marquee-right');
        $response->assertSee('profile-icon.png');
        $response->assertDontSee('FINTECH ENGINE');
        $response->assertSee('Pusat Bantuan');
        $response->assertSee('Pertanyaan Seputar Layanan');
        $response->assertSee('Informasi penting dan jawaban lengkap mengenai proses jasa pembuatan website dan aplikasi kami.', false);
    }

    public function test_tentang_page_can_be_rendered(): void
    {
        $response = $this->get('/tentang');

        $response->assertStatus(200);
        $response->assertSee('Beranda');
        $response->assertSee('Tentang');
    }

    public function test_portofolio_page_can_be_rendered(): void
    {
        $response = $this->get('/portofolio');

        $response->assertStatus(200);
        $response->assertSee('Beranda');
        $response->assertSee('Portofolio');
        $response->assertSee('Karya Unggulan');
        $response->assertSee('Lock Jobs');
        $response->assertSee('Jasa Analytics');
        $response->assertSee('Buka studi kasus');
    }

    public function test_portofolio_detail_page_can_be_rendered(): void
    {
        $response = $this->get('/portofolio/lock-jobs');

        $response->assertStatus(200);
        $response->assertSee('Lock Jobs');
        $response->assertSee('Website Aplikasi');
        $response->assertSee('Platform Pengembangan Karier Berbasis AI & Loker Terpadu');
        $response->assertSee('Ringkas proyek');
        $response->assertSee('Butuh hasil serupa?');
        $response->assertSee('CHAT WHATSAPP');
        $response->assertSee('w-6 h-6');
        $response->assertSee('Kunjungi Proyek Live');
        $response->assertDontSee('Tantangan Klien');
        $response->assertDontSee('Fitur Unggulan Sistem');
        $response->assertSee('Proyek Selanjutnya');
    }

    public function test_portofolio_detail_page_returns_404_for_invalid_slug(): void
    {
        $response = $this->get('/portofolio/proyek-tidak-ada');

        $response->assertStatus(404);
    }

    public function test_harga_page_can_be_rendered(): void
    {
        $response = $this->get('/harga');

        $response->assertStatus(200);
        $response->assertSee('Beranda');
        $response->assertSee('Harga');
        $response->assertSee('Investasi Terencana');
    }

    public function test_faq_page_can_be_rendered(): void
    {
        $response = $this->get('/faq');

        $response->assertStatus(200);
        $response->assertSee('Beranda');
        $response->assertSee('FAQ');
        $response->assertSee('Apakah source code menjadi milik kami?');
    }

    public function test_layanan_page_can_be_rendered(): void
    {
        $response = $this->get('/layanan');

        $response->assertStatus(200);
        $response->assertSee('Beranda');
        $response->assertSee('Layanan');
        $response->assertSee('Layanan Rekayasa Digital');
    }

    public function test_kontak_page_can_be_rendered(): void
    {
        $response = $this->get('/kontak');

        $response->assertStatus(200);
        $response->assertSee('Beranda');
        $response->assertSee('Kontak');
        $response->assertSee('Hubungi <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500">tim kami</span>', false);
        $response->assertSee('Tanpa formulir web: gunakan WhatsApp untuk respons cepat', false);
        $response->assertSee('Kontak langsung');
        $response->assertSee('Respons tercepat');
        $response->assertSee('Hubungi WhatsApp');
        $response->assertSee('https://wa.me/62895634074196', false);
        $response->assertSee('jelajahkodeid@gmail.com');
        $response->assertSee('Yogyakarta, Indonesia');
        $response->assertSee('Media sosial');
        $response->assertSee('Terhubung lebih dekat');
    }
}
