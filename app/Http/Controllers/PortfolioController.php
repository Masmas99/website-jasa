<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Data portofolio proyek lengkap dengan detail studi kasus.
     *
     * @return array<string, array<string, mixed>>
     */
    public static function getProjects(): array
    {
        return [
            'lock-jobs' => [
                'slug' => 'lock-jobs',
                'name' => 'Lock Jobs',
                'category' => 'Website Aplikasi',
                'headline' => 'Platform Pengembangan Karier Berbasis AI & Loker Terpadu',
                'short_desc' => 'Lock Jobs adalah platform pengembangan karier berbasis teknologi yang dirancang untuk membantu pencari kerja dalam menyusun resume profesional, meningkatkan kompetensi, serta mengakses peluang kerja...',
                'image' => 'images/portofolio/lock-jobs.png',
                'metric' => '98.4% ATS Pass Rate',
                'metric_label' => 'Tingkat Kelolosan Seleksi Resume ATS Pengguna',
                'client' => 'Lock Jobs',
                'year' => '2025',
                'duration' => '3 Bulan Pengerjaan',
                'role' => 'End-to-End AI Web Application & UI/UX Design',
                'gradient' => 'from-sky-500 via-blue-600 to-indigo-700',
                'technologies' => ['Laravel 11', 'Vue.js 3', 'Tailwind CSS', 'OpenAI API', 'PostgreSQL', 'Redis'],
                'paragraphs' => [
                    'Lock Jobs adalah platform pengembangan karier berbasis teknologi yang dirancang untuk membantu pencari kerja dalam menyusun resume profesional, meningkatkan kompetensi, serta mengakses peluang kerja yang relevan dengan kualifikasi yang dimiliki. Platform ini memanfaatkan teknologi berbasis Artificial Intelligence (AI) untuk mengoptimalkan kualitas resume, sehingga lebih sesuai dengan standar rekrutmen modern dan mampu melewati proses seleksi berbasis Applicant Tracking System (ATS).',
                    'Platform ini ditujukan bagi berbagai segmen pengguna, mulai dari lulusan baru hingga profesional berpengalaman yang ingin mengembangkan atau mengalihkan jalur kariernya. Lock Jobs menyediakan berbagai fitur yang mendukung proses pencarian kerja, mulai dari generator CV otomatis berbasis kata kunci industri, modul tes simulasi wawancara kerja cerdas, hingga pencocokan lowongan kerja terverifikasi secara real-time.',
                ],
                'overview' => 'Lock Jobs adalah platform pengembangan karier modern berbasis kecerdasan buatan (AI) yang mendampingi para pencari kerja dari pembuatan CV hingga lolos wawancara kerja.',
                'challenge' => 'Sebagian besar pelamar kerja gagal di tahap awal karena resume tidak ramah sistem ATS dan tidak memiliki persiapan wawancara yang terstruktur sesuai deskripsi pekerjaan sasaran.',
                'solution' => 'Kami membangun platform web interaktif dengan scoring ATS instan, generator resume cerdas, dan simulator interview berbasis AI menggunakan Laravel, Vue, dan integrasi LLM teroptimasi.',
                'features' => [
                    'AI Resume Optimizer berstandar ATS internasional dengan live scoring',
                    'Job Matching Engine berdasarkan analisis kecocokan skill & riwayat kerja',
                    'Simulasi Wawancara Kerja Interaktif dengan umpan balik AI otomatis',
                    'Portal Lowongan Kerja Terverifikasi dengan Filter Multi-Kategori',
                    'Dashboard Pelacak Lamaran Kerja (Application Tracker) Terpadu',
                    'Eksport CV Profesional Multi-Format (PDF, Word, Plain ATS Text)',
                ],
            ],
            'jasa-analytics' => [
                'slug' => 'jasa-analytics',
                'name' => 'Jasa Analytics',
                'category' => 'Website Aplikasi',
                'headline' => 'Platform Keuangan Multi-Tenancy Berskala Enterprise',
                'short_desc' => 'Dashboard analitik keuangan real-time dengan pengolahan jutaan transaksi harian tanpa latensi dan rekonsiliasi kas otomatis multi-bank.',
                'image' => 'images/portofolio/jasa-analytics.png',
                'metric' => '+240% Efisiensi Operasional',
                'metric_label' => 'Kecepatan Rekonsiliasi Kas Harian',
                'client' => 'PT Finansial Asia Teknologi',
                'year' => '2025',
                'duration' => '3 Bulan Pengerjaan',
                'role' => 'Full-stack System Architecture & UI/UX Design',
                'gradient' => 'from-blue-600 via-indigo-600 to-cyan-500',
                'technologies' => ['Laravel 11', 'Vue.js 3', 'Tailwind CSS', 'PostgreSQL', 'Redis', 'Docker'],
                'paragraphs' => [
                    'Jasa Analytics adalah sistem analitik keuangan multi-tenant yang dirancang untuk membantu grup perusahaan memantau arus kas, rekonsiliasi perbankan otomatis, dan proyeksi likuiditas secara real-time. Dibangun dengan arsitektur modular yang mampu menangani lebih dari 2 juta transaksi per hari tanpa degradasi performa.',
                    'Platform ini menghubungkan puluhan rekening koran perbankan mitra secara terpusat, mengotomatiskan pencocokan transaksi debit-kredit, serta menyajikan visualisasi metrik kesehatan finansial yang akurat bagi jajaran eksekutif dan auditor keuangan.',
                ],
                'overview' => 'Jasa Analytics adalah sistem analitik keuangan multi-tenant yang dirancang untuk membantu grup perusahaan memantau arus kas dan rekonsiliasi kas perbankan otomatis.',
                'challenge' => 'Klien menghadapi kendala latensi tinggi saat mengolah data mutasi dari belasan bank mitra berbeda yang memakan waktu hingga 8 jam tiap penutupan buku harian.',
                'solution' => 'Penerapan pipeline ETL terdistribusi dengan Laravel Queue dan cluster Redis, dipadukan enkripsi end-to-end level bank dan audit trail kepatuhan regulasi.',
                'features' => [
                    'Multi-Tenancy Isolation dengan pemisahan basis data per entitas bisnis',
                    'Real-time Financial Ledger & Auto-reconciliation Engine',
                    'Role-based Access Control (RBAC) dengan proteksi 2FA & IP Whitelisting',
                    'Automated PDF Financial Reporting & Export Excel Terkompresi',
                    'Webhook Integration dengan Open API Bank Indonesia',
                    'Audit Log & Compliance Tracking yang tidak dapat dimanipulasi (Immutable)',
                ],
            ],
            'nordic-supply' => [
                'slug' => 'nordic-supply',
                'name' => 'Nordic Supply',
                'category' => 'E-Commerce Global',
                'headline' => 'Toko Ekspor Skala Global dengan Arsitektur Headless',
                'short_desc' => 'Platform e-commerce headless dengan integrasi multi-mata uang dinamis, perhitungan pajak lintas negara, dan checkout instan 2 langkah.',
                'image' => 'images/portofolio/nordic-supply.png',
                'metric' => '0.4s Rata-rata Loading',
                'metric_label' => 'Skor Performa Google Lighthouse 99/100',
                'client' => 'Nordic Supply Trading Ltd',
                'year' => '2025',
                'duration' => '2.5 Bulan Pengerjaan',
                'role' => 'Headless E-Commerce Development & API Integration',
                'gradient' => 'from-cyan-500 via-blue-500 to-indigo-700',
                'technologies' => ['Laravel 11', 'Livewire 3', 'Tailwind CSS', 'Stripe API', 'Meilisearch', 'Cloudflare Edge'],
                'paragraphs' => [
                    'Nordic Supply adalah platform perdagangan lintas negara yang menghubungkan produsen furnitur premium dengan pembeli internasional di 28 negara. Menggunakan pendekatan headless e-commerce untuk menjamin kecepatan akses super cepat dari belahan benua mana pun.',
                    'Dengan optimasi jaringan Cloudflare Edge dan integrasi sistem pembayaran multi-mata uang otomatis, pembeli dari berbagai negara dapat menyelesaikan transaksi dalam hitungan detik tanpa hambatan konversi kurs.',
                ],
                'overview' => 'Platform perdagangan lintas benua dengan teknologi headless e-commerce berkecepatan tinggi.',
                'challenge' => 'Tingkat keranjang belanja ditinggalkan (abandoned cart) sebesar 68% akibat kecepatan load yang lambat di wilayah Amerika Utara dan Asia.',
                'solution' => 'Membangun ulang storefront dengan Laravel Livewire, edge caching Cloudflare, Meilisearch, dan Stripe multi-currency checkout.',
                'features' => [
                    'Headless Architecture dengan response time sub-500ms global',
                    'Multi-Currency & Geo-IP auto currency selector (USD, EUR, GBP, IDR, SGD)',
                    'Instant Search & Filter dengan toleransi salah ketik via Meilisearch',
                    'Integrasi Logistik Global (DHL Express, FedEx & tracking kargo otomatis)',
                    'Checkout 2 Langkah yang teroptimasi konversi mobile',
                    'Dashboard Manajemen Inventori Multi-Gudang Internasional',
                ],
            ],
            'eduplex-lms' => [
                'slug' => 'eduplex-lms',
                'name' => 'EduPlex LMS',
                'category' => 'Platform EdTech',
                'headline' => 'Learning Management System Terdistribusi untuk 50K+ Mahasiswa',
                'short_desc' => 'Platform manajemen pembelajaran daring dengan streaming video adaptif, kuis interaktif, dan ujian terenkripsi anti-curang.',
                'image' => 'images/portofolio/eduplex-lms.png',
                'metric' => '50K+ Mahasiswa Aktif',
                'metric_label' => 'Kapasitas Ujian Serentak Tanpa Server Down',
                'client' => 'Yayasan Pendidikan Nusantara',
                'year' => '2024',
                'duration' => '4 Bulan Pengerjaan',
                'role' => 'End-to-End LMS Architecture & Video Infrastructure',
                'gradient' => 'from-indigo-600 via-purple-600 to-blue-800',
                'technologies' => ['Laravel 11', 'MySQL 8', 'Tailwind CSS', 'HLS Video Streaming', 'AWS S3', 'Redis'],
                'paragraphs' => [
                    'EduPlex LMS adalah ekosistem pendidikan digital modern yang memfasilitasi perkuliahan daring, ujian terenkripsi anti-curang, dan tracking progres belajar bagi lebih dari 50.000 mahasiswa aktif di berbagai universitas rekanan.',
                    'Dilengkapi video player hemat kuota berbasis teknologi HLS serta sistem Computer Based Test (CBT) yang toleran terhadap gangguan koneksi internet mahasiswa saat ujian berlangsung.',
                ],
                'overview' => 'Platform pembelajaran digital berskala besar untuk puluhan ribu mahasiswa serentak.',
                'challenge' => 'Sistem lama sering crash ketika ujian semester serentak diikuti oleh puluhan ribu mahasiswa dalam waktu bersamaan.',
                'solution' => 'Arsitektur database read/write replica, video streaming HLS adaptif hemat kuota, dan caching terdistribusi Redis.',
                'features' => [
                    'Streaming Video Adaptif (360p - 1080p) hemat bandwidth',
                    'Computer Based Test (CBT) dengan auto-save offline tolerance',
                    'Anti-Cheat Detector (pantau pindah tab & deteksi aktivitas mencurigakan)',
                    'Sistem Forum Diskusi & Konsultasi Dosen Real-time',
                    'Penerbitan Sertifikat Digital Otomatis dengan Verifikasi QR Code',
                    'Dashboard Nilai & Analitik Capaian Kompetensi Kurikulum',
                ],
            ],
            'medikacare' => [
                'slug' => 'medikacare',
                'name' => 'MedikaCare',
                'category' => 'Aplikasi Mobile',
                'headline' => 'Aplikasi Telehealth & Rekam Medis Elektronik Terintegrasi',
                'short_desc' => 'Aplikasi mobile iOS & Android untuk konsultasi dokter online via video call HD, tebus resep obat, dan rekam medis elektronik.',
                'image' => 'images/portofolio/medikacare.png',
                'metric' => 'Rating 4.9 di App Store',
                'metric_label' => '100.000+ Konsultasi Pasien Terlayani',
                'client' => 'Medika Healthcare Network',
                'year' => '2024',
                'duration' => '3.5 Bulan Pengerjaan',
                'role' => 'Mobile App Development & Secure Backend API',
                'gradient' => 'from-blue-500 via-teal-500 to-emerald-500',
                'technologies' => ['Flutter', 'Laravel REST API', 'WebRTC', 'PostgreSQL', 'Firebase'],
                'paragraphs' => [
                    'MedikaCare menghubungkan pasien dengan lebih dari 350 dokter spesialis berlisensi melalui video call berkualitas tinggi, tebus resep obat daring yang diantar langsung, serta riwayat rekam medis terenkripsi sesuai standar regulasi kesehatan.',
                    'Aplikasi ini memangkas waktu tunggu antrean rumah sakit hingga 70% dan memudahkan pemantauan kesehatan berkala bagi pasien kronis secara jarak jauh.',
                ],
                'overview' => 'Aplikasi telehealth terpadu menghubungkan ratusan dokter dengan pasien di seluruh Indonesia.',
                'challenge' => 'Kebutuhan kepatuhan keamanan data medis pasien (HIPAA compliance) dan penanganan sinyal video di jaringan seluler terbatas.',
                'solution' => 'Aplikasi Flutter dengan WebRTC adaptif, backend Laravel terenkripsi AES-256, dan webhook integrasi apotek.',
                'features' => [
                    'Video & Voice Call Konsultasi HD berlatensi rendah via WebRTC',
                    'Rekam Medis Elektronik Terenkripsi (EHR) berstandar SatuSehat',
                    'Booking Antrean Online Klinik & Notifikasi Pengingat Jadwal',
                    'E-Resep Digital langsung terhubung ke kurir antar obat',
                    'Pembayaran Otomatis dengan Asuransi & Virtual Account',
                    'Chat Interaktif Dokter-Pasien dengan upload lampiran hasil lab',
                ],
            ],
            'logitrack-pro' => [
                'slug' => 'logitrack-pro',
                'name' => 'LogiTrack Pro',
                'category' => 'Sistem IoT & Logistik',
                'headline' => 'Fleet & Supply Chain System Berbasis Sensor IoT & GPS',
                'short_desc' => 'Tracking armada truk berbasis IoT dan GPS dengan algoritma rute tercepat berbasis AI untuk efisiensi bahan bakar dan armada.',
                'image' => 'images/portofolio/logitrack-pro.png',
                'metric' => '-30% Biaya Bahan Bakar',
                'metric_label' => 'Optimalisasi Rute & Pengurangan Idle Time Armada',
                'client' => 'Trans Logistik Utama Indonesia',
                'year' => '2025',
                'duration' => '4 Bulan Pengerjaan',
                'role' => 'IoT Telemetry Ingestion & Real-time Web Dashboard',
                'gradient' => 'from-sky-500 via-indigo-600 to-blue-700',
                'technologies' => ['Laravel 11', 'Node.js', 'MQTT', 'Google Maps API', 'Redis', 'TimescaleDB'],
                'paragraphs' => [
                    'LogiTrack Pro adalah platform monitoring armada logistik skala nasional yang mengawasi lebih dari 1.200 unit truk pengiriman bahan pokok. Sistem membaca data telemetri GPS, suhu kontainer, kecepatan, dan konsumsi BBM per detik.',
                    'Sistem memberikan peringatan dini terhadap anomali suhu muatan beku dan perilaku mengemudi berisiko guna menjaga keselamatan pengiriman barang ke seluruh Indonesia.',
                ],
                'overview' => 'Sistem manajemen armada logistik dan telemetri IoT berkecepatan tinggi.',
                'challenge' => 'Volume telemetri IoT masuk mencapai 15.000 ping per detik yang membutuhkan penyimpanan time-series berkecepatan tinggi.',
                'solution' => 'Kombinasi Node.js MQTT broker dan Laravel backend dengan penyimpanan TimescaleDB serta rute AI.',
                'features' => [
                    'Real-time GPS Live Tracking & Geofencing Alert Area Larangan',
                    'Sensor Suhu Cold Storage Kontainer dengan SMS/WA Alarm Darurat',
                    'Driver Behavior Monitoring (peringatan rem mendadak & ngebut)',
                    'Jadwal Pemeliharaan & Servis Berkala Armada Otomatis',
                    'Surat Jalan Digital (e-POD) dengan tanda tangan digital & foto serah terima',
                    'Integrasi Biaya Tol (e-Toll) & Reimbursement Bahan Bakar',
                ],
            ],
        ];
    }

    /**
     * Tampilkan halaman daftar portofolio.
     */
    public function index(): View
    {
        $projects = self::getProjects();

        return view('pages.portofolio', [
            'projects' => $projects,
        ]);
    }

    /**
     * Tampilkan halaman detail studi kasus portofolio.
     */
    public function show(string $slug): View
    {
        $projects = self::getProjects();

        if (! isset($projects[$slug])) {
            abort(404, 'Proyek portofolio tidak ditemukan.');
        }

        $project = $projects[$slug];

        // Navigasi proyek berikutnya & sebelumnya
        $slugs = array_keys($projects);
        $currentIndex = (int) array_search($slug, $slugs, true);
        $prevSlug = $currentIndex > 0 ? $slugs[$currentIndex - 1] : null;
        $nextSlug = $currentIndex < count($slugs) - 1 ? $slugs[$currentIndex + 1] : null;

        $prevProject = $prevSlug ? $projects[$prevSlug] : null;
        $nextProject = $nextSlug ? $projects[$nextSlug] : null;

        return view('pages.portofolio-detail', [
            'project' => $project,
            'prevProject' => $prevProject,
            'nextProject' => $nextProject,
        ]);
    }
}
