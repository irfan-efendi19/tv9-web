<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
        content="Jelajahi berbagai layanan profesional TV9 Nusantara, mulai dari slot iklan televisi, produksi konten Islami, hingga kerja sama live streaming untuk menyebarkan syiar Ahlussunnah Wal Jamaah secara luas.">

    <title>Layanan | TV9 Nusantara</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- External Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link rel="canonical" href="{{ config('app.url') . '/layanan' }}">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
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
    @php
$isProduction = app()->environment('production');
$manifestPath = $isProduction ? '../public_html/build/manifest.json' : public_path('build/manifest.json');
    @endphp
    
    @if ($isProduction && file_exists($manifestPath))
        @php
    $manifest = json_decode(file_get_contents($manifestPath), true);
        @endphp
        <link rel="stylesheet" href="{{ config('app.url') }}/build/{{ $manifest['resources/css/app.css']['file'] }}">
        <script type="module" src="{{ config('app.url') }}/build/{{ $manifest['resources/js/app.js']['file'] }}"></script>
    @else
        @viteReactRefresh
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    @endif
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

    <x-navbar />

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
                <path d="M0 60V30C240 0 480 60 720 40C960 20 1200 0 1440 30V60H0Z" class="fill-tv9-leaf-500" />
            </svg>
        </div>
    </section>

    <!-- SECTION AKSES MULTIPLATFORM -->
    <section class="bg-gray-50 flex items-center justify-center p-8">
        <div class="w-full max-w-5xl" data-aos="fade-up" data-aos-delay="100">
            <!-- Heading -->
            <div class="mb-8">
                <h2 class="title-underline text-2xl font-semibold text-gray-900 tracking-tight">
                    Akses Multiplatform
                </h2>
            </div>
            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <!-- Card 1: TV Digital Kanal 44 UHF -->
                <div class="card bg-gray-100 rounded-2xl p-6 border border-gray-200">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <i class="fa-solid fa-tv text-tv9-green-900 text-xl"></i>
                    </div>
                    <h3 class="text-tv9-green-900 font-semibold text-base mb-4">
                        TV Digital Kanal 44 UHF
                    </h3>
                    <table class="w-full text-base">
                        <tbody>
                            <tr>
                                <td class="text-gray-500 py-1.5">Frekuensi</td>
                                <td class="text-right font-semibold text-tv9-green-900 py-1.5">
                                    658 MHz
                                </td>
                            </tr>
                            <tr>
                                <td class="text-gray-500 py-1.5">Kanal</td>
                                <td class="text-right font-semibold text-tv9-green-900 py-1.5">
                                    44 UHF
                                </td>
                            </tr>
                            <!-- <tr>
                                                                                <td class="text-gray-500 py-1.5">Multipleksing</td>
                                                                                <td class="text-right font-semibold text-tv9-green-900 py-1.5">
                                                                                    Trans TV Surabaya
                                                                                </td>
                                                                                </tr> -->
                            <tr>
                                <td class="text-gray-500 py-1.5">Wilayah</td>
                                <td class="text-right font-semibold text-tv9-green-900 py-1.5">
                                    Jawa Timur-1
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-4 text-xs text-gray-400 border-t pt-3">
                        Mencakup: Surabaya, Mojokerto, Pasuruan, Bangkalan, Gresik, Jombang, Lamongan, Sidoarjo
                    </div>
                </div>
                <!-- Card 2: TV Kabel -->
                <div class="card bg-gray-100 rounded-2xl p-6 border border-gray-200">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <i class="fa-solid fa-tv text-tv9-green-900 text-xl"></i>
                    </div>
                    <h3 class="text-tv9-green-900 font-semibold text-base mb-3">TV
                        Kabel</h3>
                    <p class="text-base text-gray-500 mb-5 leading-relaxed">
                        Temukan kami di daftar channel favorit pada provider TV
                        berbayar pilihan
                        Anda.
                    </p>
                    <ul class="space-y-2.5">
                        <li class="flex items-center gap-2.5 text-base text-gray-600">
                            <i class="fa-solid fa-circle-check text-tv9-green-900 text-base flex-shrink-0"></i>
                            IndiHome
                        </li>
                        <li class="flex items-center gap-2.5 text-base text-gray-600">
                            <i class="fa-solid fa-circle-check text-tv9-green-900 text-base flex-shrink-0"></i>
                            First Media
                        </li>
                        <li class="flex items-center gap-2.5 text-base text-gray-600">
                            <i class="fa-solid fa-circle-check text-tv9-green-900 text-base flex-shrink-0"></i>
                            MNC Vision
                        </li>
                        <li class="flex items-center gap-2.5 text-base text-gray-600">
                            <i class="fa-solid fa-circle-check text-tv9-green-900 text-base flex-shrink-0"></i>
                            TransVision
                        </li>
                    </ul>
                </div>
                <!-- Card 3: Digital & Apps -->
                <div class="card bg-gray-100 rounded-2xl p-6 border border-gray-200">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <i class="fa-solid fa-mobile-screen text-tv9-green-900 text-xl"></i>
                    </div>
                    <h3 class="text-tv9-green-900 font-semibold text-base mb-1">
                        Digital &amp; Apps
                    </h3>
                    <p class="text-base text-gray-500 mb-1">Akses siaran langsung 24
                        jam</p>
                    <a href="https://www.tv9.co.id/live" target="_blank"
                        class="inline-flex items-center gap-1.5 text-base text-tv9-green-900 font-semibold mb-5 hover:underline">
                        www.tv9.co.id/live
                        <i class="fa-solid fa-arrow-up-right-from-square text-base"></i>
                    </a>
                    <p class="text-base text-gray-400 mb-3 uppercase tracking-wide font-medium">
                        Download Aplikasi
                        Kami</p>
                    <!-- Google Play -->
                    <button onclick="showComingSoonAlert()"
                        class="store-btn flex items-center gap-3 bg-gray-900 text-white rounded-xl px-4 py-2.5 mb-2.5 w-full hover:bg-gray-800 transition-colors">
                        <i class="fa-brands fa-google-play text-sky-400 text-xl flex-shrink-0"></i>
                        <div class="leading-tight">
                            <p class="text-[10px] text-gray-400 font-normal">GET IT
                                ON</p>
                            <p class="text-base font-semibold">Google Play</p>
                        </div>
                    </button>
                    <!-- App Store -->
                    <button onclick="showComingSoonAlert()"
                        class="store-btn flex items-center gap-3 bg-gray-900 text-white rounded-xl px-4 py-2.5 w-full hover:bg-gray-800 transition-colors">
                        <i class="fa-brands fa-apple text-white text-xl flex-shrink-0"></i>
                        <div class="leading-tight">
                            <p class="text-[10px] text-gray-400 font-normal">
                                DOWNLOAD ON THE</p>
                            <p class="text-base font-semibold">App Store</p>
                        </div>
                    </button>
                </div>
            </div>
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
                        <i class="fa-solid fa-clapperboard text-tv9-green-900 text-xl"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold text-brand-darkgreen mb-2">TVC (Television Commercial)
                    </h3>
                    <a href="#" class="arrow-link">
                        <!-- Pelajari Lebih Lanjut <i class="fa-solid fa-arrow-right text-xs"></i> -->
                    </a>
                </div>
                <!-- Program Sponsorship -->
                <div class="bg-white rounded-2xl p-8 border border-gray-100 card-hover">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-6"
                        style="background:rgba(201,168,76,0.10)">
                        <i class="fa-solid fa-handshake text-tv9-gold-500 text-xl"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold text-brand-darkgreen mb-2">Program Sponsorship</h3>
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
                        <i class="fa-solid fa-align-left text-sm"></i>
                    </div>
                    <h4 class="font-semibold text-brand-darkgreen mb-2">Running Text</h4>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-gray-100 card-hover">
                    <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4"
                        style="background:rgba(201,168,76,0.10)">
                        <i class="fa-solid fa-clock text-sm"></i>
                    </div>
                    <h4 class="font-semibold text-brand-darkgreen mb-2">Blocking Time</h4>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-gray-100 card-hover">
                    <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4"
                        style="background:rgba(26,74,58,0.07)">
                        <i class="fa-solid fa-tv text-sm"></i>
                    </div>
                    <h4 class="font-semibold text-brand-darkgreen mb-2">Grafis On-Screen</h4>
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
                        <!-- <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-tv9-gold-500 text-xs"></i>Seminars
                                &amp; Workshops
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-tv9-gold-500 text-xs"></i>Mall
                                Exhibitions
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-tv9-gold-500 text-xs"></i>Product
                                Launches
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-tv9-gold-500 text-xs"></i>Gala
                                Dinners
                            </li>
                        </ul> -->
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
                        <!-- <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-xs"></i>Music Concerts
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-xs"></i>Community Festivals
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-xs"></i>Fun Walks &amp; Sports
                            </li>
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fa-solid fa-check text-xs"></i>Open Exhibitions
                            </li>
                        </ul> -->
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
            <p class="section-label mb-4">Mulai Kolaborasi</p>
            <h2 class="font-display text-4xl md:text-5xl font-black text-white mb-5 leading-tight">
                Siap Elevasi Brand Anda <br /> Bersama Kami?
            </h2>
            <p class="text-white/60 text-sm leading-relaxed max-w-xl mx-auto mb-10">
                Dapatkan penawaran kustom yang sesuai dengan tujuan bisnis dan anggaran Anda. Tim ahli kami siap
                membantu.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{route('kontak')}}"
                    class="px-8 py-3.5 bg-black text-white font-bold rounded-full text-sm shadow-lg shadow-yellow-900/30">
                    <i class="fa-solid fa-headset mr-2"></i>Hubungi Tim Marketing
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Partner & Kolaborator</h2>
            <p class="text-gray-500 mt-2">Mitra terpercaya kami</p>
        </div>
        <div class="w-full max-w-[1400px] mx-auto">
            <div class="marquee-wrapper w-full overflow-hidden relative" id="marquee-wrapper">
                <div class="marquee-track flex items-center" id="marquee-track" style="gap: 24px;">

                    {{-- 6 Logo Asli --}}
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/kpu.png') }}" alt="Logo" class="w-full h-full object-contain"
                            draggable="false">
                    </div>

                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Badan-Wakaf-Indonesia-BWI-Logo-BWI.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>

                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/bawaslu.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/beacukai.jpg') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/bhs.png') }}" alt="Logo" class="w-full h-full object-contain"
                            draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/bhs1.png') }}" alt="Logo" class="w-full h-full object-contain"
                            draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/BI_Logo.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Halal-logo-MUI.jpg') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Kopi-Tubruk_Gadjah.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo-ATLAS_& BHS.jpg') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo-DPRD.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/LOGO-uinsa_PNG.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo-Unisma_Malang.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo.png') }}" alt="Logo" class="w-full h-full object-contain"
                            draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo_BAZNAS_RI-Hijau-01.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo_BKKBN_(2020).png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo_bpbd-jatim.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo_kominfo.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo_main-dark.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo_PLN.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo_Siantar_Top.svg.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo-BKKBN-Terbaru.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo-FiberCreme-01-2.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo-icon.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/LOGO-UNUSA-NEW.-Jpg.jpg') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo-web-rsi.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/savoria-new.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/sayang.jpg') }}" alt="Logo" class="w-full h-full object-contain"
                            draggable="false">
                    </div>

                    {{-- Duplikat 6 Logo (clone set) --}}
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/kpu.png') }}" alt="Logo" class="w-full h-full object-contain"
                            draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Badan-Wakaf-Indonesia-BWI-Logo-BWI.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/bawaslu.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/beacukai.jpg') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/bhs.png') }}" alt="Logo" class="w-full h-full object-contain"
                            draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/bhs1.png') }}" alt="Logo" class="w-full h-full object-contain"
                            draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/BI_Logo.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Halal-logo-MUI.jpg') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Kopi-Tubruk_Gadjah.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo-ATLAS_& BHS.jpg') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo-DPRD.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/LOGO-uinsa_PNG.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo-Unisma_Malang.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo.png') }}" alt="Logo" class="w-full h-full object-contain"
                            draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo_BAZNAS_RI-Hijau-01.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo_BKKBN_(2020).png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo_bpbd-jatim.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo_kominfo.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo_main-dark.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo_PLN.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo_Siantar_Top.svg.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo-BKKBN-Terbaru.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/Logo-FiberCreme-01-2.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo-icon.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/LOGO-UNUSA-NEW.-Jpg.jpg') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/logo-web-rsi.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/savoria-new.png') }}" alt="Logo"
                            class="w-full h-full object-contain" draggable="false">
                    </div>
                    <div
                        class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
                        <img src="{{ asset('img/partner/sayang.jpg') }}" alt="Logo" class="w-full h-full object-contain"
                            draggable="false">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="elfsight-app-5d453261-cc99-4c4f-b921-1ce334b79599" data-elfsight-app-lazy></div>

    <x-footer />
    <script src="{{ asset('js/welcome.js') }}"></script>
    <script src="https://elfsightcdn.com/platform.js" async></script>
    <script>
    function showComingSoonAlert() {
        Swal.fire({
            title: 'Akan Segera Rilis',
            text: 'Aplikasi mobile TV9 Nusantara akan segera tersedia di Google Play dan App Store.',
            icon: 'info',
            confirmButtonText: 'OK',
            confirmButtonColor: '#DC2626',
            allowOutsideClick: false,
            allowEscapeKey: false
        });
    }
    </script>
</body>

</html>