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
            'jasa-analytics' => [
                'slug' => 'jasa-analytics',
                'name' => 'Jasa Analytics',
                'category' => 'FinTech SaaS',
                'headline' => 'Platform Keuangan Multi-Tenancy Berskala Enterprise',
                'short_desc' => 'Dashboard analitik keuangan real-time dengan pengolahan jutaan transaksi harian tanpa latensi.',
                'metric' => '+240% Efisiensi Operasional',
                'metric_label' => 'Kecepatan Rekonsiliasi Kas Harian',
                'client' => 'PT Finansial Asia Teknologi',
                'year' => '2025',
                'duration' => '3 Bulan',
                'role' => 'Full-stack System Architecture & UI/UX Design',
                'gradient' => 'from-blue-600 via-indigo-600 to-cyan-500',
                'technologies' => ['Laravel 11', 'Vue.js 3', 'Tailwind CSS', 'PostgreSQL', 'Redis', 'Docker'],
                'overview' => 'Jasa Analytics adalah sistem analitik keuangan multi-tenant yang dirancang untuk membantu grup perusahaan memantau arus kas, rekonsiliasi perbankan otomatis, dan proyeksi likuiditas secara real-time. Dibangun dengan arsitektur modular yang mampu menangani lebih dari 2 juta transaksi per hari tanpa degradasi performa.',
                'challenge' => 'Klien menghadapi kendala latensi tinggi saat mengolah rekonsiliasi data dari belasan bank mitra berbeda. Proses manual sebelumnya memakan waktu hingga 8 jam setiap penutupan buku harian serta rawan selisih data akibat perbedaan format mutasi bank.',
                'solution' => 'Kami merancang pipeline ETL terdistribusi menggunakan Laravel Queue terhubung ke cluster Redis performa tinggi. Antarmuka dibuat interaktif dan responsif dengan Vue.js serta Tailwind CSS, dilengkapi enkripsi data end-to-end level bank dan audit trail kepatuhan regulasi.',
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
                'short_desc' => 'Platform e-commerce headless dengan integrasi multi-mata uang dan payment gateway otomatis.',
                'metric' => '0.4s Rata-rata Loading',
                'metric_label' => 'Skor Performa Google Lighthouse 99/100',
                'client' => 'Nordic Supply Trading Ltd',
                'year' => '2025',
                'duration' => '2.5 Bulan',
                'role' => 'Headless E-Commerce Development & API Integration',
                'gradient' => 'from-cyan-500 via-blue-500 to-indigo-700',
                'technologies' => ['Laravel 11', 'Livewire 3', 'Tailwind CSS', 'Stripe API', 'Meilisearch', 'Cloudflare Edge'],
                'overview' => 'Nordic Supply adalah platform perdagangan lintas negara yang menghubungkan produsen furnitur premium dengan pembeli internasional di 28 negara. Menggunakan pendekatan headless e-commerce untuk menjamin kecepatan akses super cepat dari belahan benua mana pun.',
                'challenge' => 'Toko online sebelumnya mengalami tingkat keranjang belanja ditinggalkan (abandoned cart) sebesar 68% akibat kecepatan load yang lambat di wilayah Amerika Utara dan Asia, serta kesulitan konversi mata uang dinamis dan perhitungan pajak otomatis per negara tujuan.',
                'solution' => 'Kami membangun ulang storefront menggunakan Laravel Livewire dengan caching edge Cloudflare dan pencarian instan via Meilisearch. Integrasi Stripe multi-currency dan automated tax calculation mempermudah transaksi checkout hanya dalam 2 langkah cepat.',
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
                'category' => 'EdTech Platform',
                'headline' => 'Learning Management System Terdistribusi untuk 50K+ Pengguna',
                'short_desc' => 'Platform manajemen pembelajaran daring dengan streaming video adaptif dan kuis interaktif.',
                'metric' => '50K+ Mahasiswa Aktif',
                'metric_label' => 'Kapasitas Ujian Serentak Tanpa Server Down',
                'client' => 'Yayasan Pendidikan Nusantara',
                'year' => '2024',
                'duration' => '4 Bulan',
                'role' => 'End-to-End LMS Architecture & Video Infrastructure',
                'gradient' => 'from-indigo-600 via-purple-600 to-blue-800',
                'technologies' => ['Laravel 11', 'MySQL 8', 'Tailwind CSS', 'HLS Video Streaming', 'AWS S3', 'Redis'],
                'overview' => 'EduPlex LMS adalah ekosistem pendidikan digital modern yang memfasilitasi perkuliahan daring, ujian terenkripsi anti-curang, dan tracking progres belajar bagi lebih dari 50.000 mahasiswa aktif di berbagai universitas rekanan.',
                'challenge' => 'Sistem lama sering mengalami crash server ketika ujian semester serentak diikuti oleh puluhan ribu mahasiswa dalam waktu bersamaan. Selain itu biaya bandwidth video sangat tinggi sebelum ada kompresi adaptif.',
                'solution' => 'Penerapan arsitektur stateless dengan database read/write replica dan distributed caching. Video materi di-encode menggunakan format HLS (HTTP Live Streaming) adaptif yang menghemat konsumsi kuota mahasiswa hingga 45%.',
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
                'category' => 'HealthTech Mobile',
                'headline' => 'Aplikasi Telehealth & Rekam Medis Elektronik Terintegrasi',
                'short_desc' => 'Aplikasi mobile iOS & Android untuk konsultasi dokter online dan reservasi klinik terpadu.',
                'metric' => 'Rating 4.9 di App Store',
                'metric_label' => '100.000+ Konsultasi Pasien Terlayani',
                'client' => 'Medika Healthcare Network',
                'year' => '2024',
                'duration' => '3.5 Bulan',
                'role' => 'Mobile App Development & Secure Backend API',
                'gradient' => 'from-blue-500 via-teal-500 to-emerald-500',
                'technologies' => ['Flutter', 'Laravel REST API', 'WebRTC', 'PostgreSQL', 'Firebase'],
                'overview' => 'MedikaCare menghubungkan pasien dengan lebih dari 350 dokter spesialis berlisensi melalui video call berkualitas tinggi, tebus resep obat daring yang diantar langsung, serta riwayat rekam medis terenkripsi sesuai standar regulasi kesehatan.',
                'challenge' => 'Kebutuhan kepatuhan keamanan data medis pasien (HIPAA compliance), penanganan sinyal video di daerah jaringan seluler terbatas, dan sinkronisasi jadwal praktik dokter dengan sistem informasi rumah sakit (SIMRS).',
                'solution' => 'Membangun aplikasi lintas platform menggunakan Flutter dengan WebRTC berdaya kompresi adaptif. Backend Laravel menangani otentikasi biometrik, enkripsi basis data AES-256, dan webhook integrasi ke apotek rekanan terdekat.',
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
                'category' => 'Logistics & IoT',
                'headline' => 'Fleet & Supply Chain System Berbasis Sensor IoT & GPS',
                'short_desc' => 'Tracking armada truk berbasis IoT dan GPS dengan algoritma rute tercepat berbasis AI.',
                'metric' => '-30% Biaya Bahan Bakar',
                'metric_label' => 'Optimalisasi Rute & Pengurangan Idle Time Armada',
                'client' => 'Trans Logistik Utama Indonesia',
                'year' => '2025',
                'duration' => '4 Bulan',
                'role' => 'IoT Telemetry Ingestion & Real-time Web Dashboard',
                'gradient' => 'from-sky-500 via-indigo-600 to-blue-700',
                'technologies' => ['Laravel 11', 'Node.js', 'MQTT', 'Google Maps API', 'Redis', 'TimescaleDB'],
                'overview' => 'LogiTrack Pro adalah platform monitoring armada logistik skala nasional yang mengawasi lebih dari 1.200 unit truk pengiriman bahan pokok. Sistem membaca data telemetri GPS, suhu kontainer, kecepatan, dan konsumsi BBM per detik.',
                'challenge' => 'Volume telemetri IoT masuk mencapai 15.000 ping per detik dari seluruh penjuru rute pengiriman yang membutuhkan penyimpanan data time-series berkecepatan tinggi tanpa membuat web dashboard lambat.',
                'solution' => 'Kombinasi Node.js MQTT broker dan Laravel backend dengan penyimpanan TimescaleDB. Algoritma pemilihan rute cerdas memberikan panduan pengemudi untuk menghindari kemacetan dan menghemat konsumsi BBM.',
                'features' => [
                    'Real-time GPS Live Tracking & Geofencing Alert Area Larangan',
                    'Sensor Suhu Cold Storage Kontainer dengan SMS/WA Alarm Darurat',
                    'Driver Behavior Monitoring (peringatan rem mendadak & ngebut)',
                    'Jadwal Pemeliharaan & Servis Berkala Armada Otomatis',
                    'Surat Jalan Digital (e-POD) dengan tanda tangan digital & foto serah terima',
                    'Integrasi Biaya Tol (e-Toll) & Reimbursement Bahan Bakar',
                ],
            ],
            'apex-asset-erp' => [
                'slug' => 'apex-asset-erp',
                'name' => 'Apex Asset ERP',
                'category' => 'Enterprise ERP',
                'headline' => 'Sistem Manajemen Aset & Penyusutan Korporasi Multinasional',
                'short_desc' => 'Solusi ERP kustom untuk inventarisasi dan penyusutan aset bernilai miliaran rupiah.',
                'metric' => 'Audit ISO 27001 Lolos',
                'metric_label' => 'Akurasi Neraca Nilai Aset Tetap Mencapai 100%',
                'client' => 'Apex Mega Corp Tbk',
                'year' => '2024',
                'duration' => '5 Bulan',
                'role' => 'Enterprise Architecture, Database Design & Migration',
                'gradient' => 'from-indigo-700 via-blue-600 to-slate-800',
                'technologies' => ['Laravel 11', 'PostgreSQL', 'Docker', 'Tailwind CSS', 'REST API', 'Redis'],
                'overview' => 'Apex Asset ERP adalah solusi perusahaan tingkat korporat yang mencatat, melacak, dan menghitung depresiasi lebih dari 80.000 unit aset fisik (mesin pabrik, gedung kantor, inventaris IT) di 12 cabang di Indonesia.',
                'challenge' => 'Pencatatan aset sebelumnya tersebar di puluhan spreadsheet yang rentan selisih data, metode depresiasi pajak yang tidak sinkron, dan kesulitan melacak mutasi aset antar departemen.',
                'solution' => 'Sistem ERP terpusat dengan barcode/QR code scan pada tiap aset fisik. Mengimplementasikan rumus perhitungan penyusutan otomatis metode garis lurus dan saldo menurun ganda sesuai PSAK dan perpajakan Indonesia.',
                'features' => [
                    'Siklus Hidup Aset Lengkap: Pengadaan, Registrasi, Mutasi, hingga Penghapusan',
                    'Perhitungan Depresiasi Fiskal & Komersial Otomatis Setiap Bulan',
                    'Scanning Barcode & QR Tagging via Aplikasi Mobile Lapangan',
                    'Approval Workflow Berjenjang (Manager, Finance, Direksi)',
                    'Integrasi Jurnal Umum Otomatis ke Software Akuntansi Korporasi',
                    'Kesiapan Audit Eksternal (Big 4) dengan laporan kepatuhan otomatis',
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
