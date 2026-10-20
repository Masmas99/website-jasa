# Product Requirement Document (PRD)

| Parameter | Detail |
| :--- | :--- |
| **Nama Produk** | Web Development Agency / Studio Platform |
| **Dokumen** | Product Requirement Document (PRD) |
| **Versi** | 1.0.0 |
| **Target Rilis** | Q4 2026 |
| **Status** | Siap Implementasi (Ready for Dev) |

---

## 1. Ringkasan Eksekutif & Objektif

### 1.1 Latar Belakang & Masalah

* Calon klien sering mengalami keraguan saat hendak menyewa jasa pembuatan website karena ketiadaan rincian alur kerja yang transparan, minimnya portofolio interaktif dengan studi kasus nyata, serta ketidakjelasan estimasi biaya.
* Proses pra-penjualan (*inquiry* & *briefing*) memakan waktu panjang akibat komunikasi chat manual yang tidak terstruktur tanpa penyaringan kebutuhan awal.

### 1.2 Solusi Produk

Membangun platform website resmi agensi/studio web yang modern, cepat, berestetika profesional (clean modern UI dengan dukungan tema terang/gelap), menyajikan etalase portofolio berbasis studi kasus, kalkulator/tabel paket harga transparan, serta modul *project inquiry form* interaktif yang terhubung langsung ke WhatsApp dan webhook notifikasi instan.

### 1.3 Metrik Keberhasilan (KPIs)

* **Conversion Rate (Inquiry Form):** $\ge 4.5\%$ dari total pengunjung unik harian/bulanan.
* **Core Web Vitals:** Skor performa Google Lighthouse $\ge 90$ pada Mobile dan Desktop (LCP $< 2.0\text{s}$, CLS $< 0.05$, FID/INP $< 100\text{ms}$).
* **Time-to-Inquiry:** Waktu rata-rata pengguna menyelesaikan pengisian formulir *brief* kebutuhan $\le 2$ menit.

---

## 2. Target Audiens (User Persona)

1. **Pemilik Bisnis / UMKM:**
   * *Karakteristik:* Membutuhkan website katalog, profil perusahaan, atau landing page penjualan dalam waktu singkat.
   * *Prioritas:* Harga terjangkau dan transparan, proses tidak berbelit, serta kemudahan kontak via WhatsApp.
2. **Startup Founder / Korporat:**
   * *Karakteristik:* Membutuhkan sistem web kustom, integrasi API, atau aplikasi web terstruktur.
   * *Prioritas:* Kredibilitas teknis, standar keamanan, arsitektur kode bersih, kepemilikan source code, dan SLA yang jelas.
3. **Marketing Manager / Agensi Rekanan:**
   * *Karakteristik:* Mencari mitra *white-label* atau eksekusi landing page berkecepatan tinggi untuk kampanye iklan.
   * *Prioritas:* Kecepatan pengiriman (*turnaround time*), skor SEO on-page, dan optimasi performa konversi.

---

## 3. Peta Situs & Arsitektur Informasi (Sitemap)

```text
├── Beranda (/)
├── Layanan (/services)
│   ├── Landing Page & Web Promosi
│   ├── Website Company Profile
│   ├── E-Commerce / Toko Online
│   └── Custom Web Application
├── Portofolio (/portfolio)
│   └── Detail Studi Kasus (/portfolio/[slug])
├── Paket & Estimasi Biaya (/pricing)
├── Alur Kerja & FAQ (/process)
├── Tentang Kami (/about)
└── Kontak & Brief Proyek (/contact)
```

---

## 4. Rincian Spesifikasi Fitur

### 4.1 Header & Navigasi Global

* **Komponen:**
  * Logo identitas agensi (vektor SVG).
  * Menu link utama: Beranda, Layanan, Portofolio, Harga, Alur Kerja, Tentang.
  * *Theme Switcher* (Mode Gelap / Terang).
  * Tombol CTA Primer: **"Konsultasi Gratis"** atau **"Mulai Proyek"**.
* **Perilaku:**
  * Tipe *sticky navigation* dengan latar belakang transparan/blur (*backdrop-blur*) saat digulir.
  * Tampilan responsif dengan *slide-over drawer* pada perangkat mobile.

### 4.2 Modul Beranda (Home)

* **Hero Section:** Proposisi nilai utama, subheadline penjelas masalah yang diselesaikan, tombol aksi ganda (Lihat Portofolio & Konsultasi Langsung), serta lencana *tech stack* utama.
* **Metrik & Social Proof:** Angka statistik proyek selesai, tingkat kepuasan klien, dan logo klien yang pernah ditangani.
* **Featured Showcase:** Grid 3–4 proyek unggulan dengan cuplikan visual interaktif dan tautan langsung ke *live preview*.
* **Ikhtisar Layanan:** Kartu ringkasan solusi dengan ikon modern.
* **Ulasan / Testimoni:** Slider ulasan autentik mencakup nama klien, jabatan/perusahaan, dan avatar.

### 4.3 Modul Layanan (Services)

* Menampilkan daftar layanan terstruktur:
  1. *High-Converting Landing Page*
  2. *Corporate Company Profile*
  3. *E-Commerce & Online Store Solution*
  4. *Custom Web Application & API Integration*
* Setiap item memuat:
  * Manfaat dan problem-solving utama.
  * Fitur bawaan (Responsive Mobile, On-Page SEO, Speed Tuning, Admin Panel/CMS).
  * Tumpukan teknologi (*Tech Stack*).
  * Tombol langsung menuju form dengan parameter layanan terisi otomatis (*pre-filled*).

### 4.4 Modul Portofolio & Studi Kasus (Portfolio)

* **Filter Dinamis:** Kategori (Semua, Landing Page, Company Profile, E-Commerce, Web App).
* **Card Proyek:** Pratinjau gambar tajam, judul proyek, tag teknologi yang dipakai, tautan ke web aktif, dan tombol detail.
* **Halaman Studi Kasus (`/portfolio/[slug]`):**
  * Ringkasan masalah klien (*The Challenge*).
  * Solusi desain antarmuka dan arsitektur kode (*The Solution*).
  * Metrik pencapaian (misal: *Lighthouse score 98*, kenaikan transaksi $35\%$).

### 4.5 Modul Paket Harga (Pricing)

* **Tiga Opsi Tingkatan (Tiers):**
  * **Paket Starter (Landing Page):** Cocok untuk UMKM / promo produk tunggal.
  * **Paket Bisnis (Company Profile):** Solusi korporat multi-halaman dengan CMS.
  * **Paket Kustom (Custom Web App / E-Commerce):** Solusi bisnis dengan logika kompleks.
* **Tabel Perbandingan Fitur:**
  * Alokasi jumlah halaman dan revisi.
  * Domain & Hosting (opsional/termasuk).
  * Masa garansi *bug-fixing* & pemeliharaan berkala.
  * Hak kepemilikan *source code*.

### 4.6 Modul Alur Kerja & FAQ (Process & FAQ)

* **5 Tahap Pengerjaan Transparan:**
  1. *Discovery & Scope Definition:* Penentuan kebutuhan, fitur, dan timeline.
  2. *UI/UX Wireframing:* Desain mockup visual interaktif sebelum koding.
  3. *Development & Clean Code:* Penulisan kode modular dan berstandar industri.
  4. *Testing & Optimization:* Uji lintas peramban, keamanan formulir, dan skor performa.
  5. *Handover & Go-Live:* Penerbitan domain, pelatihan admin panel, dan penyerahan repositori/aset.
* **FAQ Accordion:** Menjelaskan sistem pembayaran termin (misal: DP $50\%$ dan pelunasan $50\%$ saat lolos pengujian), ketentuan penambahan fitur di tengah jalan, serta hak cipta aset.

### 4.7 Modul Kontak & Brief Formulir (Inquiry Form)

* **Input Formulir:**
  * Nama Lengkap & Nama Brand/Perusahaan.
  * Alamat Email & Nomor WhatsApp aktif.
  * Pilihan kategori website (Pilihan ganda / checkbox).
  * Estimasi anggaran proyek (*Budget range*).
  * Ekspektasi tanggal peluncuran (*Deadline*).
  * Kolom catatan detail / referensi website rujukan.
* **Integrasi Notifikasi:**
  * Webhook instan ke bot Telegram / Discord tim dev setiap ada data masuk.
  * Pengiriman email konfirmasi otomatis ke calon klien.
* **Quick Action:** Tombol melayang WhatsApp (*floating button*) dengan templat pesan pembuka otomatis.

---

## 5. Kebutuhan Non-Fungsional (Non-Functional Requirements)

* **Performa & Rendering:** Memanfaatkan Server-Side Rendering (SSR) atau Static Site Generation (SSG) untuk memastikan waktu pemuatan halaman di bawah 2 detik. Semua gambar dikonversi otomatis ke format modern (WebP/AVIF) dengan fitur *lazy loading*.
* **Keamanan:** Sanitasi input di sisi klien dan server untuk mitigasi serangan XSS, CSRF, dan SQL Injection. Penerapan *rate-limiting* pada endpoint pengiriman formulir guna menangkal spam bot.
* **SEO & Metadata:** Integrasi OpenGraph tags, dynamic title/meta description, otomatisasi sitemap XML, dan markup JSON-LD (Schema.org) untuk entitas *ProfessionalService*.
* **Aksesibilitas (a11y):** Kontras warna teks memenuhi standar minimal WCAG 2.1 AA baik di mode terang maupun gelap.
