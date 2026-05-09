<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description"
        content="TV9 Nusantara adalah stasiun televisi Islam di Indonesia yang menghadirkan program santun, edukatif, dan penuh nilai keagamaan serta budaya Nusantara.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="TV9 Nusantara">
    <title>Tentang Kami | TV9 Nusantara</title>
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Chart.js untuk diagram donut dengan animasi bawaan -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js">
    </script>
    <!-- CountUp.js untuk animasi angka -->
    <script src="https://cdn.jsdelivr.net/npm/countup.js@2.8.0/dist/countUp.umd.js">
    </script>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="canonical" href="{{ config('app.url') . '/tentang' }}">
    <!-- OG Image / Thumbnail -->
    <meta property="og:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta itemprop="image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta name="twitter:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <!-- Scripts & Styles -->
    @php
        $isProduction = app()->environment('production');
        $manifestPath = $isProduction ? '../public_html/build/manifest.json' : public_path('build/manifest.json');
    @endphp
    
    @if ($isProduction && file_exists($manifestPath))
        @php
            $manifest = json_decode(file_get_contents($manifestPath), true);
        @endphp
        <link rel="stylesheet" href="{{ config('app.url') }}/build/{{ $manifest['resources/css/app.css']['file'] }}">
        <script type="module" src="{{ config('app.url') }}/build/{{ $manifest['resources/js/app.js']['file'] }}">
        </script>
    @else
        @viteReactRefresh
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    @endif
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Lightbox2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
    <style>
        html {
            overflow-x: hidden;
        }
    
        body {
            overflow-x: hidden;
            width: 100%;
            max-width: 100%;
        }
    
        * {
            max-width: 100%;
    }


    .hero-bg {
        background: linear-gradient(160deg, #0f2d1a 0%, #1a4d2e 50%, #2d6a4f 100%);
        position: relative;
        overflow: hidden;
    }

    .hero-bg::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .hero-bg::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 0;
        height: 80px;
        background: white;
        clip-path: ellipse(55% 100% at 50% 100%);
    }

    .mosque-silhouette {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 55%;
        height: 100%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 400' preserveAspectRatio='xMaxYMax meet'%3E%3Cg fill='rgba(255,255,255,0.04)'%3E%3Crect x='270' y='180' width='60' height='220'/%3E%3Cellipse cx='300' cy='180' rx='30' ry='40'/%3E%3Crect x='240' y='240' width='120' height='160'/%3E%3Crect x='220' y='280' width='160' height='120'/%3E%3Crect x='170' y='310' width='60' height='90'/%3E%3Cellipse cx='200' cy='310' rx='30' ry='35'/%3E%3Crect x='370' y='310' width='60' height='90'/%3E%3Cellipse cx='400' cy='310' rx='30' ry='35'/%3E%3Cpolygon points='295,50 300,10 305,50'/%3E%3C/g%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right bottom;
        background-size: contain;
        opacity: 0.6;
    }

    .gold-divider {
        height: 3px;
        background: linear-gradient(90deg, transparent, #c9a227, transparent);
    }

    .timeline-item:not(:last-child)::after {
        content: '';
        position: absolute;
        left: 50%;
        top: 100%;
        transform: translateX(-50%);
        width: 2px;
        height: 60px;
        background: linear-gradient(to bottom, #c9a227, transparent);
    }

    .card-hover {
        transition: all 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(26, 77, 46, 0.15);
    }

    .team-card:hover .team-overlay {
        opacity: 1;
    }

    .team-overlay {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .value-icon {
        background: linear-gradient(135deg, #1a4d2e, #2d6a4f);
    }

    .section-label {
        letter-spacing: 0.2em;
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #c9a227;
        font-weight: 600;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    .float-anim {
        animation: float 4s ease-in-out infinite;
    }

    .pattern-bg {
        background-color: #f8f5ef;
        background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%231a4d2e' fill-opacity='0.04'%3E%3Cpath d='M20 20c0-5.5-4.5-10-10-10S0 14.5 0 20s4.5 10 10 10 10-4.5 10-10zm10 0c0 5.5 4.5 10 10 10S50 25.5 50 20s-4.5-10-10-10-10 4.5-10 10z'/%3E%3C/g%3E%3C/svg%3E");
    }

    /* Scroll reveal */
    .reveal {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }

    .reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .reveal-delay-1 {
        transition-delay: 0.1s;
    }

    .reveal-delay-2 {
        transition-delay: 0.2s;
    }

    .reveal-delay-3 {
        transition-delay: 0.3s;
    }

    .reveal-delay-4 {
        transition-delay: 0.4s;
    }

    .btn-primary {
        background: linear-gradient(135deg, #c9a227, #e8c547);
        color: #0f2d1a;
        font-weight: 700;
        letter-spacing: 0.05em;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(201, 162, 39, 0.4);
    }

    .btn-outline {
        border: 2px solid #c9a227;
        color: #c9a227;
        font-weight: 600;
        letter-spacing: 0.05em;
        transition: all 0.3s ease;
    }

    .btn-outline:hover {
        background: #c9a227;
        color: #0f2d1a;
    }

    /* Container donut chart */
    .donut-container {
        position: relative;
        width: 180px;
        height: 180px;
        margin: 0 auto;
    }

    canvas {
        width: 100% !important;
        height: 100% !important;
    }

    /* Teks tengah di atas canvas (posisi absolut) */
    .donut-center-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        pointer-events: none;
        z-index: 10;
        background: #f5f5f0;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.02), 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .donut-center-text span:first-child {
        font-size: 26px;
        font-weight: 800;
        color: #1a5c38;
        line-height: 1.2;
    }

    .donut-center-text .label-small {
        font-size: 9px;
        font-weight: 600;
        color: #9ca3af;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-top: 2px;
    }

    .card-segment {
        border-left: 3px solid #1a5c38;
        transition: all 0.2s ease;
    }

    .card-segment:hover {
        box-shadow: 0 4px 20px rgba(26, 92, 56, 0.12);
        transform: translateX(3px);
    }

    /* Efek fade-in untuk donut */
    @keyframes fadeScale {
        0% {
            opacity: 0;
            transform: scale(0.9);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    .donut-container {
        animation: fadeScale 0.5s ease-out;
    }

    /* Masonry Gallery Styles */
    .gallery-container {
        column-count: 3;
        column-gap: 0;
        width: 100%;
    }

    @media (min-width: 768px) {
        .gallery-container {
            column-count: 5;
        }
    }

    @media (min-width: 1024px) {
        .gallery-container {
            column-count: 8;
        }
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        cursor: pointer;
        break-inside: avoid;
        margin-bottom: 0;
        display: block;
    }

    .gallery-item img {
        transition: transform 0.7s ease;
        width: 100%;
        height: auto;
        display: block;
    }

    .gallery-item:hover img {
        transform: scale(1.08);
    }
    </style>
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
</head>

<body class="bg-white text-gray-800">
    <x-navbar />
    <!-- ========= HERO ========= -->
    <section class="hero-bg min-h-[520px] relative flex items-center pt-12 pb-24 px-6 mt-10">
        <div class="mosque-silhouette"></div>
        <div class="relative z-10 max-w-5xl mx-auto w-full">
            <div class="inline-block border border-tv9-gold-600/40 rounded-full px-4 py-1.5 mb-6">
                <span class="section-label">SEJAK. 2010</span>
            </div>
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight mb-6 max-w-xl">
                Tentang <br /> TV9 Nusantara
            </h1>
            <p class="text-white/70 text-base md:text-lg max-w-md leading-relaxed font-light">
                TV9 Nusantara merupakan stasiun televisi lokal di Kota Surabaya dan
                menjadi
                salah satu awal televisi
                swasta di Indonesia yang memiliki karakter pemirsa komunitas yang
                bernuansa
                Islam
            </p>
            <div class="mt-8 flex gap-3">
                <div class="w-2 h-2 rounded-full bg-tv9-gold-600"></div>
                <div class="w-2 h-2 rounded-full bg-tv9-gold-600/50"></div>
                <div class="w-2 h-2 rounded-full bg-tv9-gold-600/25"></div>
            </div>
        </div>
    </section>
    <!-- ========= SANTUN MENYEJUKKAN ========= -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div class="reveal">
                <span class="section-label block mb-4">Tentang Kami</span>
                <h2 class="text-4xl md:text-5xl font-bold text-tv9-dark mb-6 leading-tight">
                    Santun<br />Menyejukkan
                </h2>
                <div class="gold-divider w-20 mb-6"></div>
                <p class="text-gray-600 leading-relaxed mb-4">
                    "Santun menyejukkan" adalah tagline TV9 Nusantara sebagai
                    identitas semua
                    program siaran, baik produksi program maupun berita yang harus
                    didasarkan
                    pada prinsip ini
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Saluran televisi berkonten RELIGI ISLAMI dengan pemirsa loyal
                    (komunitas
                    muslim kaum santri dan
                    warga NU) menyajikan wajah Islam yang ramah, moderat dan
                    berkarakter lokal.
                    Mengusung tagline:
                    SANTUN MENYEJUKKAN, TV9 konsisten memberikan keragaman program
                    televisi
                    sebagai kanal/akun hiburan,
                    informasi dan gaya hidup Islami.
                </p>
            </div>

            <!-- Decorative Image Placeholder -->
            <div class="reveal reveal-delay-2 relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl aspect-[4/3] bg-tv9-dark float-anim">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <!-- Camera + Crescent decorative SVG -->
                        <img src="{{ asset('img/origin.jpeg') }}" alt="TV9 Nusantara"
                            class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Decorative accent -->
                <div class="absolute -bottom-4 -left-4 w-24 h-24 rounded-full border-4 border-tv9-gold-600/20 -z-10">
                </div>
                <div class="absolute -top-4 -right-4 w-16 h-16 rounded-full bg-tv9-gold-600/10 -z-10">
                </div>
            </div>
        </div>
    </section>

    <!-- ========= VISI & MISI ========= -->
    <section class="py-16 px-6 pattern-bg">
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-6">
            <!-- Visi -->
            <div class="reveal card-hover bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                <div class="value-icon w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-tv9-dark mb-3">Visi Kami</h3>
                <div class="gold-divider w-12 mb-4"></div>
                <p class="text-gray-600 leading-relaxed">
                    Menjadi Perusahaan Media Televisi & Digital Yang Kokoh, Adaptif
                    & Terpercaya
                </p>
            </div>

            <!-- Misi -->
            <div class="reveal reveal-delay-2 card-hover bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                <div class="value-icon w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-tv9-dark mb-3">Misi Kami</h3>
                <div class="gold-divider w-12 mb-4"></div>
                <ul class="space-y-3 text-gray-600">
                    <p class="text-gray-600 leading-relaxed">
                        Menjadi Televisi religi terbaik di Indonesia
                    </p>
                    <li class="flex gap-3">
                        <span class="text-tv9-gold-600 font-bold mt-0.5">›</span>
                        <span>Creative Content: Selalu Tersaji Tayangan Kreatif
                            Sesuai
                            Perkembangan Industri/Audience
                            Need Dan Teknologi</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-tv9-gold-600 font-bold mt-0.5">›</span>
                        <span>Customer Service: Adanya Kepastian Benefit Yang
                            Diterima Pelanggan
                            Dari
                            Komunitas/Pemirsa</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-tv9-gold-600 font-bold mt-0.5">›</span>
                        <span>Improving Technology: Adanya Inovasi
                            Teknologi/Platform Terus
                            Menerus Sesuai
                            Perkembangan Teknologi Digital Dan Media Sosial</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ========= PERJALANAN / TIMELINE ========= -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-16 reveal">
                <h2 class="text-4xl md:text-5xl font-bold text-tv9-dark">Perjalanan
                    Kami</h2>
                <div class="gold-divider w-24 mx-auto mt-4"></div>
                <p class="text-tv9-gray mt-5 max-w-xl mx-auto text-sm">TV9 Nusantara
                    terus berkontribusi untuk siaran bernuansa Ahlussunnah wal Jamaah dan jangkauan
                    luas.</p>
            </div>

            <div class="relative">
                <!-- Center line -->
                <div class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-tv9-gold-600 via-tv9-gold-600/30 to-transparent -translate-x-1/2"
                    style="background: linear-gradient(to bottom, #b8860b, rgba(184,134,11,0.3), transparent);">
                </div>

                <!-- data berdasarkan gambar: 
                                                                                                                                                                                                                                                                                                                                                                                                                                     2005-2008: PT DIM berdiri sebagai PASTV di Pasuruan, siaran 2006-2008
                                                                                                                                                                                                                                                                                                                                                                                                                                     2009: PWNU Jatim pegang saham, hijrah ke Surabaya, PASTV berubah jadi TV9
                                                                                                                                                                                                                                                                                                                                                                                                                                     31 Jan 2010: TV9 Nusantara resmi berdiri, launching oleh Gubernur Jatim dan Ketua PWNU
                                                                                                                                                                                                                                                                                                                                                                                                                                     23 Juli 2012: Mendapatkan IPP dari Menkominfo
                                                                                                                                                                                                                                                                                                                                                                                                                                     2013: Dimiliki dua perusahaan (PT NUS milik PWNU Jatim & PT SCT)
                                                                                                                                                                                                                                                                                                                                                                                                                                     21 Juni 2014: Launching siaran nasional via satelit Telkom-1, kemudian Palapa D (2018), Telkom 4 (2020), plus streaming OTT
                                                                                                                                                                                                                                                                                                                                                                                                                                     1 Februari 2018: Divisi News terverifikasi Dewan Pers
                                                                                                                                                                                                                                                                                                                                                                                                                                     19 Oktober 2022: Migrasi ke TV Digital Terestrial
                                                                                                                                                                                                                                                                                                                                                                                                                                -->

                <!-- 2005-2008: PASTV -->
                <div class="relative flex items-center reveal" data-delay="0">
                    <div class="w-1/2 pr-10 text-right">
                        <span class="text-tv9-gold-600 text-4xl font-black font-display block">2005-2008</span>
                        <h4 class="text-lg font-bold text-tv9-dark mt-1 mb-2">Cikal Bakal</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">PT. Dakwah Inti Media (PT
                            DIM) berdiri sebagai
                            Perusahaan
                            Televisi Swasta Lokal di Pasuruan dengan nama PASTV, dan bersiaran pada
                            2006-2008. Fondasi
                            awal siaran
                            dakwah visual di Jawa Timur.</p>
                    </div>
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full bg-tv9-gold-600 border-4 border-tv9-gold-600 shadow-md z-10 timeline-dot-custom">
                    </div>
                    <div class="w-1/2 pl-10"></div>
                </div>

                <!-- 2009: PWNU saham & hijrah ke Surabaya, PASTV berubah TV9 -->
                <div class="relative flex items-center reveal reveal-delay-2" data-delay="1">
                    <div class="w-1/2 pr-10"></div>
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full bg-tv9-gold-600 border-4 border-tv9-gold-600 shadow-md z-10 timeline-dot-custom">
                    </div>
                    <div class="w-1/2 pl-10">
                        <span class="text-tv9-gold-600 text-4xl font-black font-display block">2009</span>
                        <h4 class="text-lg font-bold text-tv9-dark mt-1 mb-2">Transformasi Menjadi
                            TV9</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">PWNU Jawa Timur memiliki
                            saham di PT DIM,
                            hijrah ke Surabaya
                            (sesama zona layanan siaran Jatim I), PASTV berubah nama menjadi TV9.
                            Identitas baru dengan
                            semangat
                            kebangsaan dan keagamaan.</p>
                    </div>
                </div>

                <!-- 31 Januari 2010: TV9 Nusantara resmi berdiri -->
                <div class="relative flex items-center reveal" data-delay="2">
                    <div class="w-1/2 pr-10 text-right">
                        <span class="text-tv9-gold-600 text-4xl font-black font-display block">31
                            Jan 2010</span>
                        <h4 class="text-lg font-bold text-tv9-dark mt-1 mb-2">TV9 Nusantara Resmi
                            Berdiri</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Dilaunching oleh Gubernur
                            Jawa Timur, Soekarwo
                            dan Ketua PWNU Jawa
                            Timur, KH. Hasan Mutawakkil Alallah. Momentum bersejarah sebagai
                            televisi komunitas & religi
                            yang mengusung nilai
                            Ahlussunnah wal Jamaah.</p>
                    </div>
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full bg-tv9-gold-600 border-4 border-tv9-gold-600 shadow-md z-10 timeline-dot-custom">
                    </div>
                    <div class="w-1/2 pl-10"></div>
                </div>
                <!-- 23 Juli 2012: Mendapatkan Izin Penyelenggaraan Penyiaran -->
                <div class="relative flex items-center reveal reveal-delay-2" data-delay="3">
                    <div class="w-1/2 pr-10"></div>
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full bg-tv9-gold-600 border-4 border-tv9-gold-600 shadow-md z-10 timeline-dot-custom">
                    </div>
                    <div class="w-1/2 pl-10">
                        <span class="text-tv9-gold-600 text-4xl font-black font-display block">23
                            Juli 2012</span>
                        <h4 class="text-lg font-bold text-tv9-dark mt-1 mb-2">Izin Penyiaran (IPP)
                            dari Kominfo</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Mendapatkan Izin
                            Penyelenggaraan Penyiaran
                            (IPP) dari Menteri
                            Komunikasi dan Informatika RI No.432/KEP/M.KOMINFO/07/2012 bersama 10 TV
                            swasta lokal lain
                            di Surabaya.
                            Landasan legal penuh untuk bersiaran.</p>
                    </div>
                </div>
                <!-- 2013: Kepemilikan dua perusahaan -->
                <div class="relative flex items-center reveal" data-delay="4">
                    <div class="w-1/2 pr-10 text-right">
                        <span class="text-tv9-gold-600 text-4xl font-black font-display block">2013</span>
                        <h4 class="text-lg font-bold text-tv9-dark mt-1 mb-2">Dua Pilar Kepemilikan
                        </h4>
                        <p class="text-gray-500 text-sm leading-relaxed">TV9, PT DIM dimiliki dua
                            perusahaan pemegang
                            saham: PT
                            Nusantara Utama Sembilan (NUS, milik PWNU Jawa Timur), dan PT Siantar
                            Citra Televisi (SCT).
                            Struktur
                            profesional memperkuat eksistensi.</p>
                    </div>
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full bg-tv9-gold-600 border-4 border-tv9-gold-600 shadow-md z-10 timeline-dot-custom">
                    </div>
                    <div class="w-1/2 pl-10"></div>
                </div>
                <!-- 21 Juni 2014: Siaran Nasional Satelit & Streaming -->
                <div class="relative flex items-center reveal reveal-delay-2" data-delay="5">
                    <div class="w-1/2 pr-10"></div>
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full bg-tv9-gold-600 border-4 border-tv9-gold-600 shadow-md z-10 timeline-dot-custom">
                    </div>
                    <div class="w-1/2 pl-10">
                        <span class="text-tv9-gold-600 text-4xl font-black font-display block">21
                            Juni 2014</span>
                        <h4 class="text-lg font-bold text-tv9-dark mt-1 mb-2">Ekspansi Satelit &
                            Nasional</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Dilaunching sebagai TV9
                            Nusantara menandai
                            platform siaran
                            nasional
                            melalui Satelit Telkom-1, berpindah ke Satelit Palapa D (2018) dan
                            Satelit Telkom 4 (2020).
                            Akses
                            nationwide/global juga tersedia melalui TV streaming di berbagai
                            aplikasi OTT.</p>
                    </div>
                </div>
                <!-- 1 Februari 2018: Verifikasi Dewan Pers -->
                <div class="relative flex items-center reveal" data-delay="6">
                    <div class="w-1/2 pr-10 text-right">
                        <span class="text-tv9-gold-600 text-4xl font-black font-display block">1 Feb
                            2018</span>
                        <h4 class="text-lg font-bold text-tv9-dark mt-1 mb-2">Media Berita
                            Terverifikasi</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Divisi News terverifikasi
                            sebagai MEDIA BERITA
                            oleh DEWAN PERS
                            No.198/DP-Terverifikasi/K/II/2018. Pengakuan resmi kredibilitas
                            jurnalistik dan komitmen
                            pada informasi
                            berkualitas.</p>
                    </div>
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full bg-tv9-gold-600 border-4 border-tv9-gold-600 shadow-md z-10 timeline-dot-custom">
                    </div>
                    <div class="w-1/2 pl-10"></div>
                </div>
                <!-- 19 Oktober 2022: Migrasi ke TV Digital Terestrial -->
                <div class="relative flex items-center reveal reveal-delay-4" data-delay="7">
                    <div class="w-1/2 pr-10"></div>
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full bg-tv9-gold-600 border-4 border-tv9-gold-600 shadow-md z-10 timeline-dot-custom">
                    </div>
                    <div class="w-1/2 pl-10">
                        <span class="text-tv9-gold-600 text-4xl font-black font-display block">19
                            Okt 2022</span>
                        <h4 class="text-lg font-bold text-tv9-dark mt-1 mb-2">Migrasi ke TV Digital
                            Terestrial</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Bermigrasi dari Siaran TV
                            Analog ke Siaran TV
                            Digital
                            Terestrial
                            melalui IPP Nomor 1164/T.02.02/2022 dari Menteri Komunikasi dan
                            Informatika RI. Memasuki era
                            siaran jernih
                            dan
                            efisien.</p>
                    </div>
                </div>

                <!-- 2024: Transformasi digital (opsional tetapi tetap mempertahankan elemen original) -->
                <div class="relative flex items-center reveal" data-delay="8">
                    <div class="w-1/2 pr-10 text-right">
                        <span class="text-tv9-gold-600 text-4xl font-black font-display block">2024</span>
                        <h4 class="text-lg font-bold text-tv9-dark mt-1 mb-2">Transformasi Digital &
                            Inovasi</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Meluncurkan platform
                            digital interaktif serta
                            pengalaman
                            on-demand,
                            mengintegrasikan siaran TV dengan ekosistem digital. Menghadirkan konten
                            bernuansa Aswaja ke
                            generasi
                            milenial dan
                            gen Z.</p>
                    </div>
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full bg-tv9-gold-600 border-4 border-tv9-gold-600 shadow-md z-10 timeline-dot-custom">
                    </div>
                    <div class="w-1/2 pl-10"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 px-6 bg-tv9-dark relative overflow-hidden">
        <!-- Decorative circles (sama persis dengan file asli) -->
        <div
            class="absolute top-0 right-0 w-96 h-96 rounded-full border border-tv9-gold-600/5 translate-x-1/2 -translate-y-1/2 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 w-64 h-64 rounded-full border border-tv9-gold-600/5 -translate-x-1/2 translate-y-1/2 pointer-events-none">
        </div>

        <div class="max-w-5xl mx-auto relative z-10">
            <!-- Header -->
            <div class="text-center mb-14 animate-fade-up">
                <span class="section-label block mb-3">Prinsip Kami</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white">Nilai–Nilai Inti</h2>
                <p class="text-white/50 mt-3 max-w-md mx-auto text-sm leading-relaxed">
                    Prinsip yang membimbing setiap langkah kami dalam berkarya dan melayani pemirsa.
                </p>
                <div class="gold-divider w-24 mx-auto mt-4"></div>
            </div>
            <!-- Legacy strip -->
            <div
                class="animate-fade-up-2 bg-tv9-gold-600/10 border border-tv9-gold-600/20 rounded-2xl px-7 py-5 text-center text-sm text-white/60 leading-relaxed mb-8 backdrop-blur-sm">
                Selama <strong class="text-tv9-gold-400 font-bold">16 tahun (2010–2026)</strong>,
                TV9 menjaga
                keautentikan dan
                kepercayaan publik.
                Dengan nilai yang sama, TV9 terus berinovasi,
                <strong class="text-tv9-gold-400 font-bold">stay relevant</strong> di era baru.
            </div>
            <!-- Cards grid -->
            <div class="grid md:grid-cols-2 gap-6 animate-fade-up-3">

                <!-- Otentik -->
                <div
                    class="reveal card-hover bg-white/5 backdrop-blur-sm border border-tv9-gold-600/10 rounded-2xl p-7 text-center">
                    <div class="w-14 h-14 mx-auto rounded-2xl bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-2">
                        Otentik
                        <span class="text-white/40 text-sm font-normal">(Authentic)</span>
                    </h4>
                    <p class="text-white/50 text-sm leading-relaxed">
                        Merujuk pada sumber yang jelas <em>(sanad)</em>, yaitu tradisi keilmuan para
                        ulama dan kearifan
                        lokal Nusantara.
                    </p>
                </div>
                <!-- Relevan -->
                <div
                    class="reveal reveal-delay-2 card-hover bg-white/5 backdrop-blur-sm border border-tv9-gold-600/10 rounded-2xl p-7 text-center">
                    <div class="w-14 h-14 mx-auto rounded-2xl bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                        </svg>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-2">
                        Relevan
                        <span class="text-white/40 text-sm font-normal">(Relevant)</span>
                    </h4>
                    <p class="text-white/50 text-sm leading-relaxed">
                        Kebijaksanaan <em>(wisdom)</em> bersifat abadi. Meskipun zaman berubah
                        menjadi digital,
                        nilai-nilai hikmah tetap
                        dibutuhkan oleh masyarakat.
                    </p>
                </div>
            </div>
            <!-- Closing tagline -->
            <p class="animate-fade-up-4 mt-10 text-center text-sm text-white/50 leading-relaxed max-w-xl mx-auto px-2">
                TV9 bukan hanya sebagai saluran televisi, melainkan
                <strong class="text-tv9-gold-400 font-semibold">'sumber hikmah'</strong>
                di mana penonton bisa menemukan kebenaran yang menyejukkan dan tuntunan hidup yang
                bijak.
            </p>

        </div>
    </section>

    <!-- ========= DEWAN DIREKSI ========= -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-14 reveal">
                <span class="section-label block mb-3">Kepemimpinan</span>
                <h2 class="text-4xl md:text-5xl font-bold text-tv9-dark">Dewan Direksi &amp;
                    Manajemen</h2>
                <div class="gold-divider w-24 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Komisaris Utama -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m5.506 0C20.991 17.799 22 14.517 22 11c0-3.517-1.009-6.799-2.753-9.571M12 11c0-3.517 1.009-6.799 2.753-9.571m-5.506 0C3.009 4.201 2 7.483 2 11c0 3.517 1.009 6.799 2.753 9.571" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-tv9-dark text-base mb-1">KH. Mutawakkil Alallah</h4>
                    <p class="text-tv9-gold-600 text-sm font-medium">Presiden Komisaris (Prescom)
                    </p>
                </div>

                <!-- Komisaris - Misbahul Munir -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-tv9-dark text-base mb-1">Misbahul Munir</h4>
                    <p class="text-tv9-gold-600 text-sm font-medium">Komisaris (NUS)</p>
                </div>

                <!-- Komisaris - Muhammad Maksum -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-tv9-dark text-base mb-1">Muhammad Maksum</h4>
                    <p class="text-tv9-gold-600 text-sm font-medium">Komisaris (SCT)</p>
                </div>

                <!-- CEO - Hakim Jayli -->
                <div class="reveal card-hover bg-tv9-dark rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/20 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-white text-base mb-1">Hakim Jayli</h4>
                    <p class="text-tv9-gold-600 text-sm font-medium">Chief Executive Officer (CEO)
                    </p>
                </div>

                <!-- Secretary -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-tv9-dark text-base mb-1">Sururi Arumbani</h4>
                    <p class="text-tv9-gold-600 text-sm font-medium">Secretary / HCD / Legal /
                        Office</p>
                </div>

                <!-- CFO -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-tv9-dark text-base mb-1">I Gde Cahyadi</h4>
                    <p class="text-tv9-gold-600 text-sm font-medium">Chief Financial Officer (CFO)
                    </p>
                </div>

                <!-- GM - Ilman Taruna -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-tv9-dark text-base mb-1">Ilman Taruna</h4>
                    <p class="text-tv9-gold-600 text-sm font-medium">General Manager (GM)</p>
                </div>
                <!-- F & A -->
                <!-- <div class="reveal card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                                                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                                                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                        </svg>
                                                    </div>
    <h4 class="font-bold text-tv9-dark text-base mb-1">Finance &amp; Accounting</h4>
    <p class="text-tv9-gold-600 text-sm font-medium">F &amp; A</p>
    </div> -->

                <!-- Imam Hambali - Marketing -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-tv9-dark text-base mb-1">Imam Hambali</h4>
                    <p class="text-tv9-gold-600 text-sm font-medium">Marketing, Sales &amp;
                        Promotion</p>
                </div>

                <!-- Qiswanto - Programming -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-tv9-dark text-base mb-1">Qiswanto</h4>
                    <p class="text-tv9-gold-600 text-sm font-medium">Programming</p>
                </div>

                <!-- Tonny Cahyono - News & New Media -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v11a2 2 0 01-2 2zM9 5v7m4-7v7" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-tv9-dark text-base mb-1">Tonny Cahyono</h4>
                    <p class="text-tv9-gold-600 text-sm font-medium">News &amp; New Media</p>
                </div>

                <!-- Farid Wahyu - Production -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-tv9-dark text-base mb-1">Farid Wahyu</h4>
                    <p class="text-tv9-gold-600 text-sm font-medium">Production</p>
                </div>

                <!-- Zaimah Permatasaari - Technics -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-tv9-gold-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-tv9-dark text-base mb-1">Zaimah Permatasaari</h4>
                    <p class="text-tv9-gold-600 text-sm font-medium">Technics</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 bg-tv9-dark">
        <div class="max-w-5xl mx-auto">
            <div class="bg-brand-green-light rounded-2xl px-10 py-12 font-sans">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">

                    <!-- Kolom Kiri -->
                    <div>
                        <h2 class="text-4xl font-bold text-white leading-tight mb-4">
                            Legalitas &<br />Izin Penyiaran
                        </h2>
                        <p class="text-base text-white leading-relaxed mb-6">
                            Sebagai lembaga penyiaran swasta yang bertanggung jawab,
                            TV9
                            Nusantara
                            berkomitmen pada standar regulasi nasional. Kami
                            beroperasi di bawah
                            payung hukum yang sah dan pengawasan ketat dari otoritas
                            komunikasi
                            Indonesia.
                        </p>

                        <!-- IPP -->
                        <div
                            class="bg-brand-green-light rounded-xl border border-brand-border px-4 py-3 flex items-start gap-3 mb-3">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8 1L10 5.5H15L11 8.5L12.5 13L8 10.5L3.5 13L5 8.5L1 5.5H6L8 1Z"
                                        class="fill-tv9-green-800" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[10.5px] font-semibold text-white uppercase tracking-widest mb-0.5">
                                    No. IPP (Izin Penyelenggaraan Penyiaran)
                                </p>
                                <p class="text-base font-medium text-white">
                                    No. 1164/T.02.02/2022
                                </p>
                            </div>
                        </div>

                        <!-- Akreditasi -->
                        <div class="bg-white rounded-xl border border-brand-border px-4 py-3 flex items-start gap-3">
                            <div
                                class="w-8 h-8 rounded-lg bg-brand-green-light flex items-center justify-center shrink-0 gap-1">
                                <img width="16" height="16" src="/img/kpi.png" alt="Logo KPI" class="object-contain">
                            </div>
                            <div>
                                <p
                                    class="text-[10.5px] font-semibold text-tv9-green-900 uppercase tracking-widest mb-0.5">
                                    Akreditasi Konten & Siaran
                                </p>
                                <p class="text-base font-medium text-tv9-green-900-dark">
                                    Komisi Penyiaran Indonesia (KPI)
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="flex flex-col gap-3">

                        <!-- Kartu Otoritas -->
                        <div class="grid grid-cols-2 gap-3">

                            <!-- Kementerian Kominfo -->
                            <div
                                class="bg-white rounded-xl border border-brand-border border-t-4 border-t-brand-green px-4 py-5 flex flex-col items-center gap-2 text-center">
                                <div class="w-14 h-14 flex items-center justify-center">
                                    <img width="52" height="52" src="/img/kominfo.png" alt="Logo Kominfo"
                                        class="object-contain">
                                    </img>
                                </div>
                                <p
                                    class="text-[10.5px] font-bold text-tv9-green-900-dark uppercase tracking-widest leading-tight">
                                    Kementerian<br />Komdigi
                                </p>
                                <p class="text-[10px] text-tv9-sage-700 uppercase tracking-widest">
                                    Otoritas Perizinan
                                </p>
                            </div>

                            <!-- KPI -->
                            <div
                                class="bg-white rounded-xl border border-brand-border border-t-4 border-t-brand-gold px-4 py-5 flex flex-col items-center gap-2 text-center">
                                <div class="w-14 h-14 flex items-center justify-center">
                                    <div class="w-14 h-14 rounded-lg flex items-center justify-center">
                                        <img width="52" height="52" src="/img/kpi.png" alt="Logo KPI"
                                            class="object-contain">
                                        </img>
                                    </div>
                                </div>
                                <p
                                    class="text-[10.5px] font-bold text-tv9-gold-600-600-600-600-600-500 uppercase tracking-widest leading-tight">
                                    Komisi Penyiaran<br />Indonesia
                                </p>
                                <p class="text-[10px] text-tv9-sage-700 uppercase tracking-widest">
                                    Pengawasan Konten
                                </p>
                            </div>
                        </div>

                        <!-- Standar Penyiaran Digital -->
                        <div class="media-section rounded-xl px-6 py-5 flex items-center justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-semibold text-white mb-1">
                                    Standar Penyiaran Digital
                                </h3>
                                <p class="text-base text-tv9-green-900-muted text-white">
                                    Sertifikasi Kualitas Layanan
                                </p>
                            </div>
                            <div class="w-11 h-11 bg-white/10 rounded-xl flex items-center justify-center shrink-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 2L14 8H20L15.5 11.5L17.5 17.5L12 14.5L6.5 17.5L8.5 11.5L4 8H10L12 2Z"
                                        fill="white" opacity="0.9" />
                                    <path d="M9 12L11 14L15 10" class="stroke-tv9-green-800" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ========= GALLERY PORTOFOLIO ========= -->
    <!-- ========= GALLERY PORTOFOLIO (FULL WIDTH & SEAMLESS) ========= -->
    <!-- ========= GALLERY PORTOFOLIO (MASONRY & RANDOM RATIO) ========= -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 mb-12 text-center">
            <span class="section-label block mb-3">Karya & Dokumentasi</span>
            <h2 class="text-4xl md:text-5xl font-bold text-tv9-dark">Galeri Portofolio</h2>
            <!-- <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Momen acak dan dokumentasi berbagai kegiatan serta produksi unggulan TV9 Nusantara dengan rasio asli.</p> -->
            <div class="gold-divider w-24 mx-auto mt-6"></div>
        </div>

        <div class="w-full overflow-hidden">
            <div class="gallery-container">
                <!-- Mix of Landscape, Portrait, and Square -->
                <div class="reveal gallery-item">
                    <a href="https://picsum.photos/id/11/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/11/600/400" alt="P1">
                    </a>
                </div>
                <div class="reveal reveal-delay-1 gallery-item">
                    <a href="https://picsum.photos/id/12/800/1200" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/12/400/600" alt="P2">
                    </a>
                </div>
                <div class="reveal reveal-delay-2 gallery-item">
                    <a href="https://picsum.photos/id/13/1000/1000" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/13/500/500" alt="P3">
                    </a>
                </div>
                <div class="reveal reveal-delay-3 gallery-item">
                    <a href="https://picsum.photos/id/14/1200/900" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/14/600/450" alt="P4">
                    </a>
                </div>
                <div class="reveal gallery-item">
                    <a href="https://picsum.photos/id/15/800/1000" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/15/400/500" alt="P5">
                    </a>
                </div>
                <div class="reveal reveal-delay-1 gallery-item">
                    <a href="https://picsum.photos/id/16/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/16/600/400" alt="P6">
                    </a>
                </div>
                <div class="reveal reveal-delay-2 gallery-item">
                    <a href="https://picsum.photos/id/17/900/1200" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/17/450/600" alt="P7">
                    </a>
                </div>
                <div class="reveal reveal-delay-3 gallery-item">
                    <a href="https://picsum.photos/id/18/1200/1200" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/18/600/600" alt="P8">
                    </a>
                </div>
                <div class="reveal gallery-item">
                    <a href="https://picsum.photos/id/19/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/19/600/400" alt="P9">
                    </a>
                </div>
                <div class="reveal reveal-delay-1 gallery-item">
                    <a href="https://picsum.photos/id/21/800/1200" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/21/400/600" alt="P10">
                    </a>
                </div>
                <div class="reveal reveal-delay-2 gallery-item">
                    <a href="https://picsum.photos/id/22/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/22/600/400" alt="P11">
                    </a>
                </div>
                <div class="reveal reveal-delay-3 gallery-item">
                    <a href="https://picsum.photos/id/23/1200/1600" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/23/300/400" alt="P12">
                    </a>
                </div>
                <div class="reveal gallery-item">
                    <a href="https://picsum.photos/id/24/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/24/600/400" alt="P13">
                    </a>
                </div>
                <div class="reveal reveal-delay-1 gallery-item">
                    <a href="https://picsum.photos/id/25/1200/1800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/25/400/600" alt="P14">
                    </a>
                </div>
                <div class="reveal reveal-delay-2 gallery-item">
                    <a href="https://picsum.photos/id/26/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/26/600/400" alt="P15">
                    </a>
                </div>
                <div class="reveal reveal-delay-3 gallery-item">
                    <a href="https://picsum.photos/id/27/1200/1200" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/27/600/600" alt="P16">
                    </a>
                </div>
                <div class="reveal gallery-item">
                    <a href="https://picsum.photos/id/28/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/28/600/400" alt="P17">
                    </a>
                </div>
                <div class="reveal reveal-delay-1 gallery-item">
                    <a href="https://picsum.photos/id/29/1000/1500" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/29/400/600" alt="P18">
                    </a>
                </div>
                <div class="reveal reveal-delay-2 gallery-item">
                    <a href="https://picsum.photos/id/31/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/31/600/400" alt="P19">
                    </a>
                </div>
                <div class="reveal reveal-delay-3 gallery-item">
                    <a href="https://picsum.photos/id/32/1200/1800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/32/400/600" alt="P20">
                    </a>
                </div>
                <div class="reveal gallery-item">
                    <a href="https://picsum.photos/id/33/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/33/600/400" alt="P21">
                    </a>
                </div>
                <div class="reveal reveal-delay-1 gallery-item">
                    <a href="https://picsum.photos/id/34/800/1200" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/34/400/600" alt="P22">
                    </a>
                </div>
                <div class="reveal reveal-delay-2 gallery-item">
                    <a href="https://picsum.photos/id/35/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/35/600/400" alt="P23">
                    </a>
                </div>
                <div class="reveal reveal-delay-3 gallery-item">
                    <a href="https://picsum.photos/id/36/1200/1600" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/36/300/400" alt="P24">
                    </a>
                </div>
                <div class="reveal gallery-item">
                    <a href="https://picsum.photos/id/37/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/37/600/400" alt="P25">
                    </a>
                </div>
                <div class="reveal reveal-delay-1 gallery-item">
                    <a href="https://picsum.photos/id/38/1200/1800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/38/400/600" alt="P26">
                    </a>
                </div>
                <div class="reveal reveal-delay-2 gallery-item">
                    <a href="https://picsum.photos/id/39/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/39/600/400" alt="P27">
                    </a>
                </div>
                <div class="reveal reveal-delay-3 gallery-item">
                    <a href="https://picsum.photos/id/41/1200/1600" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/41/300/400" alt="P28">
                    </a>
                </div>
                <div class="reveal gallery-item">
                    <a href="https://picsum.photos/id/42/1200/800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/42/600/400" alt="P29">
                    </a>
                </div>
                <div class="reveal reveal-delay-1 gallery-item">
                    <a href="https://picsum.photos/id/43/1200/1800" data-lightbox="portfolio">
                        <img src="https://picsum.photos/id/43/400/600" alt="P30">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white max-w-4xl w-full px-10 py-14 mx-auto">

        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-[#1a5c38] tracking-tight mb-3">
                Profil Penonton TV9 Nusantara</h2>
            <p class="text-gray-500 text-sm leading-relaxed max-w-xl mx-auto">
                Di antara TV di Indonesia, TV9 Nusantara memiliki <em>audience
                    share</em> tinggi dengan basis pemirsa
                loyal yang terus meningkat dari waktu ke waktu menurut data Nielsen.
            </p>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <!-- Left: Donut Chart (Chart.js) + Dominasi -->
            <div class="flex flex-col items-center gap-6">
                <!-- Donut Chart dengan Chart.js -->
                <div class="donut-container" id="donutContainer">
                    <canvas id="audienceDonutChart" width="180" height="180"></canvas>
                    <div class="donut-center-text">
                        <span id="donutPercentText">0,0%</span>
                        <span class="label-small">Audience Share</span>
                    </div>
                </div>

                <!-- Dominasi Box -->
                <div
                    class="bg-[#f0f7f3] rounded-2xl px-8 py-5 text-center w-full transition-all duration-300 hover:shadow-md">
                    <p class="text-base font-bold text-[#1a5c38] mb-2">
                        <i class="fa-solid fa-tv mr-2 text-[#1a5c38]"></i>Dominasi
                        TV Lokal
                    </p>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        TV9 Nusantara memegang pangsa pasar yang signifikan dibandingkan stasiun
                        televisi lokal
                        lainnya, terutama di wilayah
                        Gerbangkertosusila (Gresik, Bangkalan, Mojokerto, Surabaya, Sidoarjo, dan
                        Lamongan).
                    </p>
                </div>
            </div>

            <!-- Right: Segment Cards -->
            <div class="flex flex-col gap-4">

                <!-- Segmen Upper -->
                <div class="card-segment bg-white border border-gray-100 rounded-xl px-5 py-4 shadow-sm">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-9 h-9 rounded-lg bg-[#e8f4ee] flex items-center justify-center">
                            <i class="fa-solid fa-arrow-trend-up text-[#1a5c38] text-sm"></i>
                        </div>
                        <span class="font-bold text-gray-800 text-sm">Segmen
                            Upper</span>
                    </div>
                    <p class="text-gray-500 text-xs leading-relaxed pl-12">
                        Performa sangat kuat di segmen kelas atas dengan pertumbuhan
                        loyalitas pemirsa yang stabil
                        setiap minggunya.
                    </p>
                </div>

                <!-- Segmen Upper-Middle -->
                <div class="card-segment bg-white border border-gray-100 rounded-xl px-5 py-4 shadow-sm">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-9 h-9 rounded-lg bg-[#e8f4ee] flex items-center justify-center">
                            <i class="fa-solid fa-chart-bar text-[#1a5c38] text-sm"></i>
                        </div>
                        <span class="font-bold text-gray-800 text-sm">Segmen
                            Upper-Middle</span>
                    </div>
                    <p class="text-gray-500 text-xs leading-relaxed pl-12">
                        Menjadi pilihan utama bagi keluarga menengah ke atas yang
                        mencari tontonan edukatif dan religius
                        yang santun.
                    </p>
                </div>
                <!-- Semua Usia 5+ -->
                <div class="card-segment bg-white border border-gray-100 rounded-xl px-5 py-4 shadow-sm">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-9 h-9 rounded-lg bg-[#e8f4ee] flex items-center justify-center">
                            <i class="fa-solid fa-people-group text-[#1a5c38] text-sm"></i>
                        </div>
                        <span class="font-bold text-gray-800 text-sm">Semua Usia
                            5+</span>
                    </div>
                    <p class="text-gray-500 text-xs leading-relaxed pl-12">
                        Jangkauan luas yang mencakup seluruh kelompok umur,
                        memperkuat posisi sebagai televisi keluarga
                        Nusantara.
                    </p>
                </div>

            </div>
        </div>

        <!-- Source -->
        <p class="text-center text-xs text-gray-400 italic mt-10">
            <i class="fa-solid fa-circle-info mr-1"></i>Source: Nielsen Television
            Audience Measurement
        </p>

    </section>

    <section class="py-20 px-6 media-section">
        <div class="max-w-5xl mx-auto">

            <!-- Header -->
            <div class="text-center mb-14">
                <p class="text-base font-semibold tracking-[0.25em] text-tv9-brown-500 uppercase mb-3">
                    Dedikasi & Kualitas</p>
                <h2 class="text-4xl md:text-5xl font-bold text-white">Penghargaan &
                    Apresiasi</h2>
                <div class="mt-5 mx-auto w-12 h-[3px] bg-tv9-leaf-500 rounded-full">
                </div>
            </div>
            <!-- Slideshow Wrapper -->
            <div class="relative overflow-hidden rounded-2xl shadow-2xl bg-white/5 backdrop-blur-sm">
                <div class="slides-track" id="track">
                    <!-- SLIDE 1 (original 4 awards) -->
                    <div class="slide">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 p-1">
                            <!-- 1. The Best Islamic Based Television Program - Platinum Award 2018 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="p-5">
                                    <span
                                        class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2018
                                        ·
                                        Yogyakarta</span>
                                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                                        The
                                        Best
                                        Islamic Based Television Program</h3>
                                    <p class="text-sm text-tv9-brown-800 leading-relaxed">
                                        Indonesian
                                        Platinum & Best
                                        Corporate Award 2018 – Penghargaan tertinggi
                                        program
                                        berbasis Islam terbaik.
                                    </p>
                                </div>
                            </div>
                            <!-- 2. The Best Religious Television of The Year 2019 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="p-5">
                                    <spanclass="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700
                                        uppercase">2019
                                        ·
                                        Jakarta</span>
                                        <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                                            The
                                            Best
                                            Religious Television of The Year</h3>
                                        <p class="text-sm text-tv9-brown-800 leading-relaxed">
                                            Indonesian
                                            Creativity & Best
                                            Leader Award 2019 – atas konsistensi
                                            siaran religi inspiratif.</p>
                                </div>
                            </div>

                            <!-- 3. The Most Trusted Company in Information Moslem Media of The Year 2019 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="p-5">
                                    <span
                                        class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                                        ·
                                        Yogyakarta</span>
                                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                                        Most
                                        Trusted Company in Information Moslem Media
                                    </h3>
                                    <p class="text-sm text-tv9-brown-800 leading-relaxed">
                                        Indonesian
                                        Most Excellent
                                        Business
                                        Award 2019 – Media informasi muslim
                                        terpercaya.</p>
                                </div>
                            </div>
                            <!-- 4. Televisi Terbaik dalam Mutu & Program Berkualitas 2019 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="p-5">
                                    <span
                                        class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                                        · Bandung</span>
                                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                                        Televisi
                                        Terbaik dalam Mutu & Program Berkualitas
                                    </h3>
                                    <p class="text-sm text-tv9-brown-800 leading-relaxed">
                                        Anugerah
                                        Perusahaan Terdepan
                                        dan
                                        Inovatif 2019 – kualitas siaran unggulan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 2: Slide kelanjutan (penghargaan 5-8) sesuai data asli tanpa perubahan yang diminta -->
                    <div class="slide">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 p-1">
                            <!-- 5. The Best Performing Television Based on Islamic Program 2019 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="p-5">
                                    <span
                                        class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                                        ·
                                        Jakarta</span>
                                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                                        The
                                        Best
                                        Performing Television (Islamic Program)</h3>
                                    <p class="text-sm text-tv9-brown-800 leading-relaxed">
                                        Indonesian
                                        Achievement & Best
                                        Performing Award 2019 – program islami
                                        terbaik.</p>
                                </div>
                            </div>

                            <!-- 6. The Most Inspiring Leader of The Year 2019 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="p-5">
                                    <span
                                        class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                                        ·
                                        Jakarta</span>
                                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                                        The
                                        Most
                                        Inspiring Leader of The Year</h3>
                                    <p class="text-sm text-tv9-brown-800 leading-relaxed">
                                        Indonesian
                                        Platinum & Best
                                        Corporate Award 2019 – apresiasi
                                        kepemimpinan
                                        inspiratif.
                                    </p>
                                </div>
                            </div>

                            <!-- 7. PROGRAM RELIGI TERBAIK - KISWAH episode KH Agoes Ali Masyhuri (KPID Jatim 2019) -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="p-5">
                                    <span
                                        class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                                        ·
                                        Surabaya</span>
                                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                                        PROGRAM
                                        RELIGI TERBAIK – KISWAH</h3>
                                    <p class="text-sm text-tv9-brown-800 leading-relaxed">
                                        Anugerah
                                        Penyiaran KPID Jawa
                                        Timur
                                        2019 – episode KH Agoes Ali Masyhuri.
                                        Program religi
                                        unggulan.</p>
                                </div>
                            </div>

                            <!-- 8. Islamic Media & Excellence Champion 2020 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="p-5">
                                    <span
                                        class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2020
                                        ·
                                        Jakarta</span>
                                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                                        Indonesian Moslem Media Excellence Award
                                    </h3>
                                    <p class="text-sm text-tv9-brown-800 leading-relaxed">
                                        Kategori
                                        Konsistensi Dakwah
                                        Digital & Program Siaran Keagamaan terbaik.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 3: tambahan dari data (Most Excellent Business, KPID riconfirm, Platinum Award ulang, Inovatif) TAPI dengan satu card yang dihilangkan sesuai permintaan:
                                                                                                                                                                             "hilangkan bagian (blok KPID JAWA TIMUR dengan emoji 📺🎙️ dan teks KPID JAWA TIMUR)"
                                                                                                                                                                             Di dalam slide asli terdapat dua card yang hampir mirip: 
                                                                                                                                                                             - nomor 10 (Anugerah Penyiaran KPID Jatim 2019 - KISWAH recognisi) yang berisi teks "KPID JAWA TIMUR" di placeholder.
                                                                                                                                                                             Kita harus menghapus tepat satu card yang memiliki isi: <span class="text-xs font-bold text-tv9-brown-900">KPID JAWA TIMUR</span> dan emoji 📺🎙️.
                                                                                                                                                                             Namun setelah cek, slide ketiga asli memiliki:
                                                                                                                                                                             [10] card dengan background from-tv9-gold-600-600-600-600-600-300 to-tv9-gold-600-600-600-600-600-400 dan isi KPID JAWA TIMUR (teks) dan emoji televisi.
                                                                                                                                                                             sesuai permintaan "hilangkan bagian ... KPID JAWA TIMUR" -> kita hapus card tersebut dari slide 3.
                                                                                                                                                                             Sisa slide 3 hanya 3 card? Tapi grid tetap rapi karena flex / grid akan menyesuaikan. Namun sebaiknya tetap 4 card agar simetris?
                                                                                                                                                                             Tapi permintaan tegas: hapus bagian itu. Maka kita buang hanya elemen 'KPID JAWA TIMUR' card tersebut, sehingga slide 3 hanya terdiri dari 3 award card.
                                                                                                                                                                             Tapi agar tampilan tetap balance dan tidak merusak tata letak, kita bisa mempertahankan tiga card dengan gap, tetap menggunakan grid, akan muncul 3 card di baris pertama (pada lg:grid-cols-4, tiga card akan terlihat rapi dengan space kosong tapi tidak merusak).
                                                                                                                                                                             Alternatif: kita biarkan apa adanya sesuai yang dihilangkan. Saya akan menghilangkan satu card yang dimaksud, grid tetap 4 kolom, tiga card akan rapi.
                                                                                                                                                                        -->
                    <div class="slide">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 p-1">
                            <!-- 9. Most Excellent Business Award 2019 (kategori berbeda) -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="p-5">
                                    <span
                                        class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                                        ·
                                        Yogyakarta</span>
                                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                                        The
                                        Most
                                        Trusted Company in Information Moslem Media
                                    </h3>
                                    <p class="text-sm text-tv9-brown-800 leading-relaxed">
                                        Reaffirmation: Indonesian Most
                                        Excellent Business Award 2019 – kredibilitas
                                        tinggi
                                        sebagai
                                        media muslim.
                                    </p>
                                </div>
                            </div>

                            <!-- (Card yang diminta dihilangkan: sebelumnya ada Anugerah Penyiaran KPID Jatim 2019 - KISWAH recognisi spesifik dengan icon 📺🎙️ dan teks "KPID JAWA TIMUR". Card berikut dihilangkan) -->

                            <!-- 11. Indonesian Platinum & Best Corporate Award 2018 (The Best Islamic TV) (tetap dipertahankan) -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="p-5">
                                    <span
                                        class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2018
                                        ·
                                        Yogyakarta</span>
                                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                                        Best
                                        Islamic Television Program</h3>
                                    <p class="text-sm text-tv9-brown-800 leading-relaxed">
                                        Indonesian
                                        Platinum & Best
                                        Corporate Award 2018 – apresiasi
                                        berkelanjutan program
                                        berbasis Islam.</p>
                                </div>
                            </div>

                            <!-- 12. Best Quality & Innovative Television (Bandung 2019) -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="p-5">
                                    <span
                                        class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                                        ·
                                        Bandung</span>
                                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                                        Anugerah
                                        Perusahaan Terdepan & Inovatif</h3>
                                    <p class="text-sm text-tv9-brown-800 leading-relaxed">
                                        Televisi
                                        terbaik dalam mutu &
                                        program berkualitas Tahun 2019.</p>
                                </div>
                            </div>

                            <!-- (Tambahan: menyisipkan card dummy? Tidak, karena yang diminta hanya menghilangkan satu bagian. Tapi agar tidak ada kekosongan, kita juga bisa menambahkan atau membiarkan grid terisi 3. Saya rasa lebih aman karena user meminta spesifik bagian itu dihapuskan. Namun saya akan memastikan slide tidak kosong berantakan.
                                                                                                                                                                                Sebagai sentuhan integritas, kita tidak merusak design, namun mungkin akan muncul 3 card pada slide 3; tetap rapi karena card akan wrap.)
                                                                                                                                                                                Tapi untuk menjaga kemiripan konten dan merespon style dengan baik, saya hanya membuang card tersebut saja. 
                                                                                                                                                                                Kode dibawah ini hanya berisi 3 card (penomoran 9,11,12 sesuai urutan yg direvisi) -> jadi total 3 award di slide 3. 
                                                                                                                                                                                untuk peningkatan pengalaman, mungkin dapat ditambah card lain dari penghargaan reel? Tapi tidak perlu mengingkari permintaan "hilangkan bagian" spesifik.
                                                                                                                                                                                Namun agar tidak ada potensi kebingungan, saya juga akan mempertahankan jumlah slide tetap 3, dengan slide 1 (4 card), slide 2 (4 card), slide 3 (3 card). responsif tetap baik. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="flex items-center justify-center gap-4 mt-8">
            <button id="prev" onclick="move(-1)" disabled
                class="w-9 h-9 rounded-full border border-gray-300 bg-white flex items-center justify-center text-tv9-leaf-700 hover:bg-tv9-leaf-50 disabled:opacity-30 disabled:cursor-not-allowed transition">
                &#8592;
            </button>
            <div id="dots" class="flex gap-2"></div>
            <button id="next" onclick="move(1)"
                class="w-9 h-9 rounded-full border border-gray-300 bg-white flex items-center justify-center text-tv9-leaf-700 hover:bg-tv9-leaf-50 disabled:opacity-30 disabled:cursor-not-allowed transition">
                &#8594;
            </button>
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

    <!-- ========= CTA ========= -->
    <section class="py-20 px-6 pattern-bg">
        <div class="max-w-2xl mx-auto text-center reveal">
            <span class="section-label block mb-4">Bersama Kami</span>
            <h2 class="text-4xl md:text-5xl font-bold text-tv9-dark mb-5">Mari
                Berkolaborasi
            </h2>
            <p class="text-gray-500 leading-relaxed mb-8">
                Bergabunglah bersama kami dalam upaya menyebarkan pesan positif dan
                membangun
                peradaban Nusantara
                yang
                lebih baik melalui media yang mencerahkan.
            </p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a class="btn-primary px-8 py-3.5 rounded-full text-sm" href="{{ route('kontak') }}">Hubungi
                    Kami</a>
            </div>
        </div>
    </section>
    <div class="elfsight-app-5d453261-cc99-4c4f-b921-1ce334b79599" data-elfsight-app-lazy></div>

    <x-footer />
    <!-- Simple script to inject current year dynamically (like {{ date('Y') }} in PHP) -->
    <script>
    document.getElementById('currentYear').innerText = new Date().getFullYear();
    Text = new Date().getFullYear();
    </script>
    <script src="https://elfsightcdn.com/platform.js" async></script>
    <script src="{{ asset('js/welcome.js') }}"></script>
    <script src="{{ asset('js/stats.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js">
    </script>
    <script>
    // Scroll reveal
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });
    reveals.forEach(el => observer.observe(el));

    // Lightbox options
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'albumLabel': "Foto %1 dari %2"
    })
    </script>
</body>

</html>