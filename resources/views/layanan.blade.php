<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Jelajahi berbagai layanan profesional TV9 Nusantara, mulai dari slot iklan televisi, produksi konten Islami, hingga kerja sama live streaming untuk menyebarkan syiar Ahlussunnah Wal Jamaah secara luas.">

    <title>Layanan | TV9 Nusantara</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- External Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link rel="canonical" href="{{ config('app.url') . '/layanan' }}">
    <!-- OG Image / Thumbnail -->
    <meta property="og:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta itemprop="image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta name="twitter:image" content="{{ asset('img/thumbnail.jpg') }}" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
    body {
        background: #fafaf7;
        color: #1a1a1a;
    }

    .hero-bg {
        background: linear-gradient(135deg, #0f2e24 0%, #1a4a3a 50%, #2d5c45 100%);
        position: relative;
        overflow: hidden;
    }

    .hero-bg::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse at 80% 50%, rgba(201, 168, 76, 0.12) 0%, transparent 60%),
            radial-gradient(ellipse at 20% 80%, rgba(201, 168, 76, 0.07) 0%, transparent 50%);
        pointer-events: none;
    }

    .hero-grid {
        background-image: linear-gradient(rgba(201, 168, 76, 0.06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(201, 168, 76, 0.06) 1px, transparent 1px);
        background-size: 40px 40px;
    }

    .card-hover {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .card-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(15, 46, 36, 0.12);
    }

    .badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 9999px;
        font-size: 11px;
        font-weight: 500;
        letter-spacing: 0.04em;
        white-space: nowrap;
        flex-shrink: 0;
    }

    .section-label {
        font-size: 11px;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        font-weight: 600;
        color: #c9a84c;
    }

    .arrow-link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 600;
        color: #1a4a3a;
        transition: gap 0.2s;
    }

    .arrow-link:hover {
        gap: 10px;
    }

    .cta-section {
        background: linear-gradient(135deg, #1a4a3a 0%, #0f2e24 100%);
        position: relative;
        overflow: hidden;
    }

    .cta-section::before {
        content: '';
        position: absolute;
        top: -60px;
        right: -60px;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(201, 168, 76, 0.15) 0%, transparent 70%);
    }

    .cta-section::after {
        content: '';
        position: absolute;
        bottom: -40px;
        left: -40px;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(201, 168, 76, 0.10) 0%, transparent 70%);
    }

    .platform-card {
        border-bottom: 3px solid transparent;
        transition: all 0.3s;
    }

    .platform-card:hover {
        border-bottom-color: #c9a84c;
    }

    .event-img-wrap {
        position: relative;
        overflow: hidden;
        border-radius: 16px;
    }

    .event-img-wrap img {
        transition: transform 0.5s;
    }

    .event-img-wrap:hover img {
        transform: scale(1.04);
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(24px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-up {
        animation: fadeUp 0.7s ease both;
    }

    .fade-up-2 {
        animation: fadeUp 0.7s 0.15s ease both;
    }

    .fade-up-3 {
        animation: fadeUp 0.7s 0.30s ease both;
    }

    .divider-gold {
        height: 2px;
        background: linear-gradient(90deg, #c9a84c, transparent);
        width: 48px;
    }
    </style>
</head>

<body class="antialiased">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 px-4 sm:px-8"
        style="background: rgba(0,40,25,0.85); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="max-w-7xl mx-auto flex justify-between items-center h-16">
            <!-- Logo Kiri -->
            <div class="flex flex-row items-center gap-10">
                <a href="{{ route('beranda') }}" class="flex items-center gap-3 no-underline">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('img/logotv9.png') }}" alt="Logo TV9 Nusantara"
                            class="h-9 w-auto object-contain">
                    </div>
                    <span class="text-white font-bold text-xl tracking-tight hidden sm:block">Nusantara</span>
                </a>
            </div>

            <!-- Menu Kanan -->
            <div class="flex items-center gap-3 md:gap-7" x-data="{ open: false }">

                <!-- LIVE Button — selalu tampil di navbar (desktop & mobile) -->
                <a href="{{ route('live') }}"
                    class="flex items-center gap-1.5 px-3 py-1.5 rounded-full text-sm font-bold text-white transition-all duration-200 hover:scale-105"
                    style="background: linear-gradient(135deg, #dc2626, #b91c1c); box-shadow: 0 0 12px rgba(220,38,38,0.5);">
                    <!-- Pulsing dot -->
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                    </span>
                    LIVE
                </a>

                <!-- Desktop Menu Links -->
                <div class="hidden md:flex md:flex-row md:items-center md:gap-7">
                    <a href="{{ route('beranda') }}"
                        class="text-base font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Beranda</a>
                    <a href="{{ route('jadwal') }}"
                        class="text-base font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Jadwal</a>
                    <a href="{{ route('layanan') }}"
                        class="text-base font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Layanan</a>
                    <a href="{{ route('catalog.index') }}"
                        class="text-base font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Program</a>
                    <a href="{{ route('berita.index') }}"
                        class="text-base font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Berita</a>
                </div>

                <!-- Mobile Hamburger Button -->
                <button @click="open = !open" class="md:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- Mobile Dropdown (tanpa LIVE) -->
                <div x-show="open" @click.away="open = false" x-cloak
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2"
                    class="absolute top-full right-0 mt-2 w-48 bg-gray-900 rounded-lg shadow-xl md:hidden z-50">
                    <div class="flex flex-col p-4 space-y-3">
                        <a href="{{ route('beranda') }}"
                            class="text-base font-semibold text-yellow-400 border-l-2 border-yellow-400 pl-3 py-1">Beranda</a>
                        <a href="{{ route('jadwal') }}"
                            class="text-base font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Jadwal</a>
                        <a href="{{ route('layanan') }}"
                            class="text-base font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Layanan</a>
                        <a href="{{ route('catalog.index') }}"
                            class="text-base font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Program</a>
                        <a href="{{ route('berita.index') }}"
                            class="text-base font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Berita</a>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <!-- Spacer for fixed nav -->
    <div class="h-16"></div>

    <!-- ═══════════════════════════════════════HERO SECTION═══════════════════════════════════════ -->
    <section class="hero-bg hero-grid min-h-[88vh] flex items-center relative z-10">
        <div class="max-w-6xl mx-auto px-6 py-24 w-full grid md:grid-cols-2 gap-12 items-center">
            <!-- Left -->
            <div class="relative z-10">
                <p class="section-label mb-4 fade-up">Layanan Media</p>
                <h1 class="font-display text-5xl md:text-6xl leading-[1.1] text-black font-black mb-6 fade-up-2">
                    Solusi Media &amp; <br />
                    <span class="text-black">Komunikasi</span> <br />
                    Terpadu
                </h1>
                <p class="text-black/70 text-base leading-relaxed max-w-md mb-10 fade-up-3">
                    Kami menghadirkan ekosistem promosi yang komprehensif, menggabungkan otoritas penyiaran tradisional
                    dengan ketangkasan media digital nusantara.
                </p>
                <div class="flex flex-wrap gap-4 fade-up-3">
                    <a href="{{ route('kontak') }}"
                        class="px-7 py-3.5 bg-black text-white font-semibold rounded-full text-sm shadow-lg shadow-yellow-900/20">
                        Konsultasi Sekarang
                    </a>
                    <a href="#"
                        class="px-7 py-3.5 border border-black/30 text-black font-semibold rounded-full text-sm backdrop-blur-sm">
                        <i class="fa-solid fa-download mr-2 text-xs"></i>Unduh Rate Card
                    </a>
                </div>
            </div>
            <!-- Right: decorative visual -->
            <div class="hidden md:flex justify-center items-center relative">
                <div class="w-72 h-72 rounded-full border border-black/20 flex items-center justify-center relative">
                    <div class="w-56 h-56 rounded-full border border-black/30 flex items-center justify-center">
                        <div class="w-40 h-40 rounded-full bg-black/10 flex items-center justify-center">
                            <i class="fa-solid fa-broadcast-tower text-black text-6xl"></i>
                        </div>
                    </div>
                    <!-- Orbiting dots -->
                    <span class="absolute top-6 right-6 w-3 h-3 rounded-full bg-black"></span>
                    <span class="absolute bottom-10 left-4 w-2 h-2 rounded-full bg-black/50"></span>
                    <span class="absolute top-1/2 -right-2 w-4 h-4 rounded-full border-2 border-brand-black/40"></span>
                </div>
            </div>
        </div>
        <!-- bottom wave -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 60V30C240 0 480 60 720 40C960 20 1200 0 1440 30V60H0Z" fill="#59ad3f" />
            </svg>
        </div>
    </section>

    <!-- ═══════════════════════════════════════ON-AIR ADVERTISING═══════════════════════════════════════ -->
    <section class="py-24 bg-brand-offwhite" id="on-air">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex items-end justify-between mb-3">
                <div>
                    <p class="section-label mb-3">Traditional Excellence</p>
                    <h2 class="font-display text-4xl font-bold text-brand-darkgreen">On-Air Advertising</h2>
                </div>
            </div>
            <div class="divider-gold mb-4"></div>
            <p class="text-gray-500 max-w-lg mb-14 text-sm leading-relaxed">
                Jangkau jutaan pemirsa setia TV9 Nusantara melalui beragam format penyiaran premium yang dirancang untuk
                dampak maksimal.
            </p>

            <!-- Big 2-col cards -->
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <!-- TVC -->
                <div class="bg-white rounded-2xl p-8 border border-gray-100 card-hover">
                    <div class="w-12 h-12 rounded-xl bg-brand-green/8 flex items-center justify-center mb-6"
                        style="background:rgba(26,74,58,0.08)">
                        <i class="fa-solid fa-clapperboard text-brand-green text-xl" style="color:#1a4a3a"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold text-brand-darkgreen mb-2">TVC (Television Commercial)
                    </h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        Full duration cinematic video ads yang menggugah emosi dan memperkuat identitas brand Anda di
                        layar utama.
                    </p>
                    <a href="#" class="arrow-link">
                        <!-- Pelajari Lebih Lanjut <i class="fa-solid fa-arrow-right text-xs"></i> -->
                    </a>
                </div>
                <!-- Program Sponsorship -->
                <div class="bg-white rounded-2xl p-8 border border-gray-100 card-hover">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-6"
                        style="background:rgba(201,168,76,0.10)">
                        <i class="fa-solid fa-handshake text-brand-gold text-xl" style="color:#c9a84c"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold text-brand-darkgreen mb-2">Program Sponsorship</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        Integrasi organik brand Anda ke dalam konten yang relevan, menciptakan asosiasi positif dengan
                        program favorit pemirsa.
                    </p>
                    <a href="#" class="arrow-link">
                        <!-- Pelajari Lebih Lanjut <i class="fa-solid fa-arrow-right text-xs"></i> -->
                    </a>
                </div>
            </div>

            <!-- Small 3-col cards -->
            <div class="grid sm:grid-cols-3 gap-5">
                <div class="bg-white rounded-2xl p-6 border border-gray-100 card-hover">
                    <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4"
                        style="background:rgba(26,74,58,0.07)">
                        <i class="fa-solid fa-align-left text-sm" style="color:#1a4a3a"></i>
                    </div>
                    <h4 class="font-semibold text-brand-darkgreen mb-2">Running Text</h4>
                    <p class="text-gray-400 text-xs leading-relaxed">Promosi teks berjalan yang efisien untuk informasi
                        cepat dan promo berkala.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-gray-100 card-hover">
                    <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4"
                        style="background:rgba(201,168,76,0.10)">
                        <i class="fa-solid fa-clock text-sm" style="color:#c9a84c"></i>
                    </div>
                    <h4 class="font-semibold text-brand-darkgreen mb-2">Blocking Time</h4>
                    <p class="text-gray-400 text-xs leading-relaxed">Durasi eksklusif untuk acara khusus, talkshow, atau
                        peluncuran produk secara live.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-gray-100 card-hover">
                    <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4"
                        style="background:rgba(26,74,58,0.07)">
                        <i class="fa-solid fa-tv text-sm" style="color:#1a4a3a"></i>
                    </div>
                    <h4 class="font-semibold text-brand-darkgreen mb-2">Grafis On-Screen</h4>
                    <p class="text-gray-400 text-xs leading-relaxed">Penampilan logo dan visual menarik di layar saat
                        program berlangsung.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════OFF-AIR ACTIVATION═══════════════════════════════════════ -->
    <section class="py-24 bg-white" id="off-air">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-4">
                <p class="section-label mb-3">Field Activation</p>
                <h2 class="font-display text-4xl font-bold text-brand-darkgreen">Off-Air Event</h2>
            </div>
            <div class="flex justify-center mb-4">
                <div class="divider-gold"></div>
            </div>
            <p class="text-center text-gray-500 max-w-xl mx-auto mb-16 text-sm leading-relaxed">
                Membangun koneksi personal dan pengalaman nyata antara brand Anda dengan komunitas melalui aktivasi
                lapangan yang dinamis.
            </p>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Indoor -->
                <div class="group">
                    <div class="event-img-wrap mb-6 h-64 bg-brand-green overflow-hidden rounded-2xl flex items-center justify-center"
                        style="background:linear-gradient(135deg,#1a4a3a,#2d5c45)">
                        <i class="fa-solid fa-building text-white/20 text-8xl"></i>
                    </div>
                    <div class="bg-brand-cream rounded-2xl p-7">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-9 h-9 rounded-lg bg-brand-green flex items-center justify-center"
                                style="background:#1a4a3a">
                                <i class="fa-solid fa-building text-white text-sm"></i>
                            </div>
                            <h3 class="font-display text-xl font-bold text-brand-darkgreen">Indoor Events</h3>
                        </div>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-brand-gold text-xs" style="color:#c9a84c"></i>Seminars
                                &amp; Workshops
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-brand-gold text-xs" style="color:#c9a84c"></i>Mall
                                Exhibitions
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-brand-gold text-xs" style="color:#c9a84c"></i>Product
                                Launches
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-brand-gold text-xs" style="color:#c9a84c"></i>Gala
                                Dinners
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Outdoor -->
                <div class="group">
                    <div class="event-img-wrap mb-6 h-64 overflow-hidden rounded-2xl flex items-center justify-center"
                        style="background:linear-gradient(135deg,#2d5c45,#3a7055)">
                        <i class="fa-solid fa-tree text-white/20 text-8xl"></i>
                    </div>
                    <div class="bg-brand-cream rounded-2xl p-7">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center" style="background:#c9a84c">
                                <i class="fa-solid fa-sun text-white text-sm"></i>
                            </div>
                            <h3 class="font-display text-xl font-bold text-brand-darkgreen">Outdoor Events</h3>
                        </div>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-xs" style="color:#c9a84c"></i>Music Concerts
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-xs" style="color:#c9a84c"></i>Community Festivals
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-xs" style="color:#c9a84c"></i>Fun Walks &amp; Sports
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-xs" style="color:#c9a84c"></i>Open Exhibitions
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════NEW MEDIA PRESENCE═══════════════════════════════════════ -->
    <section class="py-24 bg-brand-offwhite" id="new-media">
        <div class="max-w-6xl mx-auto px-6">
            <div class="mb-4">
                <p class="section-label mb-3">Digital Ecosystem</p>
                <h2 class="font-display text-4xl font-bold text-brand-darkgreen">NEW MEDIA</h2>
            </div>
            <div class="divider-gold mb-4"></div>
            <p class="text-gray-500 max-w-lg mb-16 text-sm leading-relaxed">
                Di era digital, kami memastikan pesan Anda melampaui layar televisi. Melalui integrasi media sosial,
                kami menjangkau audiens muda yang dinamis di manapun mereka berada.
            </p>

            <div class="grid sm:grid-cols-3 gap-6">
                <!-- Instagram -->
                <div class="bg-white rounded-2xl p-7 border border-gray-100 card-hover platform-card">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5"
                        style="background:linear-gradient(135deg,#f9a825,#e91e63);box-shadow:0 4px 14px rgba(233,30,99,0.25)">
                        <i class="fa-brands fa-instagram text-white text-xl"></i>
                    </div>
                    <h3 class="font-display text-lg font-bold text-brand-darkgreen mb-2">Instagram</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-5">
                        Membangun estetika visual dan engagement mendalam melalui kurasi konten premium.
                    </p>
                </div>

                <!-- TikTok -->
                <div class="bg-white rounded-2xl p-7 border border-gray-100 card-hover platform-card">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5"
                        style="background:#010101;box-shadow:0 4px 14px rgba(0,0,0,0.2)">
                        <i class="fa-brands fa-tiktok text-white text-xl"></i>
                    </div>
                    <h3 class="font-display text-lg font-bold text-brand-darkgreen mb-2">TikTok</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-5">
                        Mengikuti tren tercepat dengan konten short-form yang viral dan kreatif untuk audiens gen-Z.
                    </p>
                </div>

                <!-- YouTube -->
                <div class="bg-white rounded-2xl p-7 border border-gray-100 card-hover platform-card">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5"
                        style="background:#ff0000;box-shadow:0 4px 14px rgba(255,0,0,0.25)">
                        <i class="fa-brands fa-youtube text-white text-xl"></i>
                    </div>
                    <h3 class="font-display text-lg font-bold text-brand-darkgreen mb-2">YouTube</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-5">
                        Analisis mendalam dan konten long-form yang memberikan nilai edukasi dan informasi yang kuat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════CTA SECTION═══════════════════════════════════════ -->
    <section class="cta-section py-24 px-6">
        <div class="max-w-3xl mx-auto text-center relative z-10">
            <p class="section-label mb-4" style="color:#c9a84c">Mulai Kolaborasi</p>
            <h2 class="font-display text-4xl md:text-5xl font-black text-white mb-5 leading-tight">
                Siap Elevasi Brand Anda <br /> Bersama Kami?
            </h2>
            <p class="text-white/60 text-sm leading-relaxed max-w-xl mx-auto mb-10">
                Dapatkan penawaran kustom yang sesuai dengan tujuan bisnis dan anggaran Anda. Tim ahli kami siap
                membantu.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#"
                    class="px-8 py-3.5 bg-black text-white font-bold rounded-full text-sm shadow-lg shadow-yellow-900/30">
                    <i class="fa-solid fa-headset mr-2"></i>Hubungi Tim Marketing
                </a>
                <a href="#"
                    class="px-8 py-3.5 border border-white/30 text-white font-semibold rounded-full text-sm hover:bg-white/10 transition-colors">
                    <i class="fa-solid fa-folder-open mr-2"></i>Lihat Portofolio
                </a>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════FOOTER CONTENT═══════════════════════════════════════ -->
    <div class="relative bg-white text-black">
        <div class="relative text-black px-4">
            <div class="max-w-7xl mx-auto py-12 lg:py-16">
                <!-- Flex container for two equal columns -->
                <div class="flex flex-wrap -mx-4">
                    <!-- Left Column: About text and social links (SAME WIDTH as right column) -->
                    <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                        <a class="inline-block mb-4">
                            <h1 class="text-3xl lg:text-4xl font-bold text-black">TV9 Nusantara
                            </h1>
                            <h1 class="text-xl lg:text-xl font-semibold text-black">PT. Dakwah
                                Inti Media
                            </h1>
                        </a>
                        <p class="text-black leading-relaxed mb-4">
                            TV9 Nusantara merupakan stasiun televisi lokal di Kota Surabaya dan
                            menjadi salah satu awal televisi swasta di Indonesia yang memiliki
                            karakter
                            pemirsa
                            komunitas
                            yang bernuansa Islam. TV9 dikelola oleh PT. Dakwah Inti Media,
                            perusahaan yang
                            dimiliki oleh
                            KH. Moh. Hasani Mutawakkil `Alallah, S.H.,M.M., termasuk di dalamnya
                            organisasi
                            sosial
                            keagamaan
                            Nahdlatul 'Ulama (PWNU) Jawa Timur ini diluncurkan pada tanggal 31
                            Januari 2010
                            oleh
                            Soekarwo
                            sebagai bagian dari perayaan ulang tahun Nahdlatul 'Ulama ke-84.
                            Bersiaran di
                            kanal
                            42 UHF,
                            TV9
                            telah memperoleh Izin Penyelenggaraan Penyiaran prinsip tertanggal
                            pada 7 Juli
                            2009
                            dan Izin
                            Penyelenggaraan Penyiaran tetap tertanggal pada 23 Juli 2012 dari
                            Menteri
                            Komunikasi
                            dan
                            Informatika Republik Indonesia untuk melakukan siaran sebagai
                            lembaga penyiaran
                            swasta lokal
                            di
                            Surabaya/Jawa Timur.
                        </p>
                        <div class="flex flex-wrap gap-3 mt-6">
                            <a target="_blank" href="https://x.com/TV9NUsantara"
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-black text-black hover:bg-green-50 hover:bg-green-50 transition-all duration-300">
                                <i class="fab fa-x-twitter"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/tv9nusantara"
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-black text-black hover:bg-green-50 hover:bg-green-50 transition-all duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/tv9nusantara/"
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-black text-black hover:bg-green-50 hover:bg-green-50  transition-all duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a target="_blank" href="https://www.youtube.com/@tv9nusantara"
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-black text-black hover:bg-green-50 hover:bg-green-50 transition-all duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a target="_blank" href="https://www.tiktok.com/@tv9nusantara"
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-black text-black hover:bg-green-50 hover:bg-green-50  transition-all duration-300">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Right Column: Address (SAME WIDTH as left column) -->
                    <div class="w-full lg:w-1/2 px-4">
                        <h4 class="text-3xl lg:text-2xl font-semibold text-black mb-4">Alamat
                        </h4>
                        <div class="flex flex-col space-y-2">
                            <p class="text-black/80 leading-relaxed">
                                Jl. Raya Darmo No.96,<br>
                                Darmo, Kec. Wonokromo,<br>
                                Surabaya, Jawa Timur 60241
                            </p>
                            <h4 class="text-3xl lg:text-2xl font-semibold text-black mb-4 mt-4">
                                Kontak</h4>
                            <div class="flex items-center">
                                <a target="_blank" href="https://www.youtube.com/@tv9nusantara"
                                    class="flex items-center justify-center w-10 h-10 text-black  mr-2">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </a>
                                <p>Kokokowd</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ═══════════════════════════════════════FOOTER═══════════════════════════════════════ -->
    <footer class="bg-white border-t border-gray-100 py-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-gray-400 text-sm">
                &copy; {{ date('Y') }} TV9 NUSANTARA - All Rights Reserved
            </p>
        </div>
    </footer>
</body>

</html>