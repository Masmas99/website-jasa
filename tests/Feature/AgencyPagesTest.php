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
        $response->assertSee('Alur Kerja');
        $response->assertDontSee('NEW');
        $response->assertSee('Konsultasi');
        $response->assertDontSee('Konsultasi Gratis');
        $response->assertSee('Hubungi WhatsApp');
        $response->assertSee('62895411890562');
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
    }

    public function test_harga_page_can_be_rendered(): void
    {
        $response = $this->get('/harga');

        $response->assertStatus(200);
        $response->assertSee('Beranda');
        $response->assertSee('Harga');
        $response->assertSee('Investasi Terencana');
    }

    public function test_alur_kerja_page_can_be_rendered(): void
    {
        $response = $this->get('/alur-kerja');

        $response->assertStatus(200);
        $response->assertSee('Beranda');
        $response->assertSee('Alur Kerja');
        $response->assertSee('Discovery');
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
}
