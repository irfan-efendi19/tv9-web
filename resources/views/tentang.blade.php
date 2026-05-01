<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
      content="Jurnalisme Maslahat dari Jurnal9 TV9. Informasi terpercaya seputar inspirasi Islami, dinamika pesantren, dan kisah-kisah menyejukkan dari Nusantara. Santun, mencerahkan, dan berintegritas.">
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
    
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    
    <link rel="canonical" href="{{ config('app.url') . '/tentang' }}">
    <!-- OG Image / Thumbnail -->
    <meta property="og:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta itemprop="image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta name="twitter:image" content="{{ asset('img/thumbnail.jpg') }}" />
    
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
      rel="stylesheet">
    <style>
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
    </style>
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
</head>

<body class="bg-white text-gray-800">
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
                    class="flex items-center gap-1.5 px-3 py-1.5 rounded-full text-sm font-bold text-white transition-all duration-200 hover:scale-105 bg-gradient-to-br from-red-600 to-red-700 shadow-[0_0_12px_rgba(220,38,38,0.5)]">
                    <!-- Pulsing dot -->
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                    </span>
                    SIARAN LANGSUNG
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
                            class="text-base font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Beranda</a>
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
    <!-- ========= HERO ========= -->
    <section class="hero-bg min-h-[520px] relative flex items-center pt-12 pb-24 px-6 mt-10">
      <div class="mosque-silhouette"></div>
      <div class="relative z-10 max-w-5xl mx-auto w-full">
            <div class="inline-block border border-tv9-gold-600/40 rounded-full px-4 py-1.5 mb-6">
              <span class="section-label">SEJAK. 2010</span>
            </div>
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight mb-6 max-w-xl">
                Tentang <span class="text-tv9-gold-600">TV9</span><br />Nusantara
                </h1>
                <p class="text-white/70 text-base md:text-lg max-w-md leading-relaxed font-light">
                Menjadi jangkar budaya dan spiritualitas Nusantara di era digital. Membawa kesejukan melalui syiar
                yang
                santun dan mencerahkan.
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
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio ullam cum veritatis natus suscipit a
                    doloribus alias vel quos nam!
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga possimus repellendus dolor esse nemo,
                    illum neque minus veritatis. Neque quas ab fuga sit asperiores expedita. Voluptatum delectus ab,
                    consectetur facilis cum, quia quibusdam aperiam officia, quo quidem debitis eveniet nam cumque
                    voluptate fugit fugiat. Dolore rem ducimus explicabo cumque blanditiis.
                    </p>
                    </div>

            <!-- Decorative Image Placeholder -->
            <div class="reveal reveal-delay-2 relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl aspect-[4/3] bg-tv9-dark float-anim">
                  <div class="absolute inset-0 flex items-center justify-center">
                    <!-- Camera + Crescent decorative SVG -->
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
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    </div>
                <h3 class="text-2xl font-bold text-tv9-dark mb-3">Visi Kami</h3>
                <div class="gold-divider w-12 mb-4"></div>
                <p class="text-gray-600 leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim laboriosam eaque amet odio nobis, non
                    consectetur accusantium commodi praesentium ipsum.
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
                  <li class="flex gap-3">
                        <span class="text-tv9-gold-600 font-bold mt-0.5">›</span>
                        <span>Memberdayakan umat melalui konten edukatif yang berbasis pada kearifan lokal.</span>
                        </li>
                        <li class="flex gap-3">
                        <span class="text-tv9-gold-600 font-bold mt-0.5">›</span>
                        <span>Membangun ekosistem media yang sehat, kredibel, dan inovatif.</span>
                        </li>
                        <li class="flex gap-3">
                        <span class="text-tv9-gold-600 font-bold mt-0.5">›</span>
                        <span>Mendorong dialog antarbulaya demi terciptanya perdamaian dunia.</span>
                        </li>
                        </ul>
                        </div>
                        </div>
                        </section>

    <!-- ========= PERJALANAN / TIMELINE ========= -->
    <section class="py-20 px-6 bg-white">
      <div class="max-w-3xl mx-auto">
        <div class="text-center mb-16 reveal">
          <span class="section-label block mb-3">Sejarah</span>
                <h2 class="text-4xl md:text-5xl font-bold text-tv9-dark">Perjalanan Kami</h2>
                <div class="gold-divider w-24 mx-auto mt-4"></div>
                </div>

            <div class="relative">
              <!-- Center line -->
                <div
                  class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-tv9-gold-600 via-tv9-gold-600/30 to-transparent -translate-x-1/2">
                </div>

                <!-- 2010 -->
                <div class="relative flex items-center mb-16 reveal">
                  <div class="w-1/2 pr-10 text-right">
                        <span class="text-tv9-gold-600 text-4xl font-black font-display block">2010</span>
                        <h4 class="text-lg font-bold text-tv9-dark mt-1 mb-2">Peletakan Batu Pertama</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">TV9 Nusantara didirikan di Surabaya sebagai
                          televisi komunitas berbasis religi yang mengutamakan nilai Ahlussunnah wal Jamaah.</p>
                        </div>
                    <div
                      class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full bg-tv9-gold-600 border-4 border-tv9-gold-600 shadow-md z-10">
                    </div>
                    <div class="w-1/2 pl-10"></div>
                    </div>

                <!-- 2015 -->
                <div class="relative flex items-center mb-16 reveal reveal-delay-2">
                  <div class="w-1/2 pr-10"></div>
                    <div
                      class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full bg-tv9-gold-600 border-4 border-tv9-gold-600 shadow-md z-10">
                    </div>
                    <div class="w-1/2 pl-10">
                        <span class="text-tv9-gold-600 text-4xl font-black font-display block">2015</span>
                        <h4 class="text-lg font-bold text-tv9-dark mt-1 mb-2">Ekspansi Satelit</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Memperluas jangkauan ke seluruh wilayah
                          Asia
                          Tenggara melalui siaran satelit, menghadirkan layar premium menjangkau konten bermutu ke
                          berbagai pelosok.</p>
                        </div>
                        </div>

                <!-- 2024 -->
                <div class="relative flex items-center reveal reveal-delay-4">
                  <div class="w-1/2 pr-10 text-right">
                        <span class="text-tv9-gold-600 text-4xl font-black font-display block">2024</span>
                        <h4 class="text-lg font-bold text-tv9-dark mt-1 mb-2">Transformasi Digital</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Meluncurkan platform Digital Minaret,
                          mengintegrasikan siaran TV dengan pengalaman digital interaktif dan on-demand.</p>
                        </div>
                    <div
                      class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full bg-tv9-gold-600 border-4 border-tv9-gold-600 shadow-md z-10">
                    </div>
                    <div class="w-1/2 pl-10"></div>
                    </div>
                    </div>
                    </div>
                    </section>

    <!-- ========= NILAI-NILAI INTI ========= -->
    <section class="py-20 px-6 bg-tv9-dark relative overflow-hidden">
      <!-- Decorative circles -->
        <div
          class="absolute top-0 right-0 w-96 h-96 rounded-full border border-tv9-gold-600/5 translate-x-1/2 -translate-y-1/2">
        </div>
        <div
          class="absolute bottom-0 left-0 w-64 h-64 rounded-full border border-tv9-gold-600/5 -translate-x-1/2 translate-y-1/2">
        </div>

        <div class="max-w-5xl mx-auto relative z-10">
          <div class="text-center mb-14 reveal">
            <span class="section-label block mb-3">Prinsip Kami</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white">Nilai–Nilai Inti</h2>
                <p class="text-white/50 mt-3 max-w-md mx-auto text-sm">Prinsip yang membimbing setiap langkah kami
                  dalam
                  berkarya dan melayani pemirsa.</p>
                <div class="gold-divider w-24 mx-auto mt-4"></div>
                </div>

            <div class="grid md:grid-cols-3 gap-6">
              <!-- Integritas -->
                <div class="reveal card-hover bg-white/5 backdrop-blur-sm border border-tv9-gold-600/10 rounded-2xl p-7 text-center">
                  <div class="w-14 h-14 mx-auto rounded-2xl bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-tv9-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                  </div>
                  <h4 class="text-white font-bold text-lg mb-2">Integritas</h4>
                    <p class="text-white/50 text-sm leading-relaxed">Kejujuran dan konsistensi dalam setiap
                      informasi
                      yang disampaikan kepada publik.</p>
                    </div>

                <!-- Komunitas -->
                <div
                  class="reveal reveal-delay-2 card-hover bg-white/5 backdrop-blur-sm border border-tv9-gold-600/10 rounded-2xl p-7 text-center">
                  <div class="w-14 h-14 mx-auto rounded-2xl bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-tv9-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                  </div>
                  <h4 class="text-white font-bold text-lg mb-2">Komunitas</h4>
                    <p class="text-white/50 text-sm leading-relaxed">Membangun harmoni dan mempersatukan perbedaan
                      antar
                      elemen bangsa.</p>
                    </div>

                <!-- Keunggulan -->
                <div
                  class="reveal reveal-delay-4 card-hover bg-white/5 backdrop-blur-sm border border-tv9-gold-600/10 rounded-2xl p-7 text-center">
                  <div class="w-14 h-14 mx-auto rounded-2xl bg-tv9-gold-600/10 flex items-center justify-center mb-4">
                    <svg class="w-7 h-7 text-tv9-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                  </div>
                  <h4 class="text-white font-bold text-lg mb-2">Keunggulan</h4>
                    <p class="text-white/50 text-sm leading-relaxed">Kualitas penyiaran terbaik dengan standar
                      estetika
                      dan teknologi terkini.</p>
                    </div>
                    </div>
                    </div>
                    </section>

    <!-- ========= DEWAN DIREKSI ========= -->
    <section class="py-20 px-6 bg-white">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-14 reveal">
          <span class="section-label block mb-3">Kepemimpinan</span>
                <h2 class="text-4xl md:text-5xl font-bold text-tv9-dark">Dewan Direksi &amp; Manajemen</h2>
                <div class="gold-divider w-24 mx-auto mt-4"></div>
                </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
              <!-- Card template for each person -->
              <div class="reveal group">
                <div class="relative rounded-2xl overflow-hidden mb-4 bg-gray-100 aspect-[3/4]">
                        <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-tv9-dark to-tv9-green-mid">
                          <svg class="w-20 h-20 text-white/20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                  d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                                </svg>
                                </div>
                        <div class="team-overlay absolute inset-0 bg-tv9-gold-600/20 flex items-end p-4">
                          <div class="w-full h-0.5 bg-tv9-gold-600"></div>
                        </div>
                        </div>
                    <h4 class="font-bold text-tv9-dark text-sm">Dr. Ahmad Ridwan</h4>
                    <p class="text-tv9-gold-600 text-xs font-medium mt-0.5">Direktur Utama</p>
                    <p class="text-gray-400 text-xs mt-1 leading-relaxed">Veteran media dengan pengalaman 20 tahun
                      di
                      bidang penyiaran nasional.</p>
                    </div>

                <div class="reveal reveal-delay-1 group">
                  <div class="relative rounded-2xl overflow-hidden mb-4 bg-gray-100 aspect-[3/4]">
                        <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-tv9-dark to-tv9-green-mid">
                          <svg class="w-20 h-20 text-white/20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                  d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                                </svg>
                                </div>
                        <div class="team-overlay absolute inset-0 bg-tv9-gold-600/20 flex items-end p-4">
                          <div class="w-full h-0.5 bg-tv9-gold-600"></div>
                        </div>
                        </div>
                    <h4 class="font-bold text-tv9-dark text-sm">Sri Aminah, M.A.</h4>
                    <p class="text-tv9-gold-600 text-xs font-medium mt-0.5">Direktur Program &amp;
                      Konten</p>
                    <p class="text-gray-400 text-xs mt-1 leading-relaxed">Praktisi komunikasi yang lebih fokus pada
                      pengembangan konten edukatif Nusantara.</p>
                    </div>

                <div class="reveal reveal-delay-2 group">
                  <div class="relative rounded-2xl overflow-hidden mb-4 bg-gray-100 aspect-[3/4]">
                        <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-tv9-dark to-tv9-green-mid">
                          <svg class="w-20 h-20 text-white/20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                  d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                                </svg>
                                </div>
                        <div class="team-overlay absolute inset-0 bg-tv9-gold-600/20 flex items-end p-4">
                          <div class="w-full h-0.5 bg-tv9-gold-600"></div>
                        </div>
                        </div>
                    <h4 class="font-bold text-tv9-dark text-sm">Ir. Bambang Sutedja</h4>
                    <p class="text-tv9-gold-600 text-xs font-medium mt-0.5">Direktur Operasional</p>
                    <p class="text-gray-400 text-xs mt-1 leading-relaxed">Insinyur berpengalaman yang mengawasi
                      infrastruktur dan efektivitas penyiaran digital TV9.</p>
                    </div>

                <div class="reveal reveal-delay-3 group">
                  <div class="relative rounded-2xl overflow-hidden mb-4 bg-gray-100 aspect-[3/4]">
                        <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-tv9-dark to-tv9-green-mid">
                          <svg class="w-20 h-20 text-white/20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                  d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                                </svg>
                                </div>
                        <div class="team-overlay absolute inset-0 bg-tv9-gold-600/20 flex items-end p-4">
                          <div class="w-full h-0.5 bg-tv9-gold-600"></div>
                        </div>
                        </div>
                    <h4 class="font-bold text-tv9-dark text-sm">Hafidz Abdullah</h4>
                    <p class="text-tv9-gold-600 text-xs font-medium mt-0.5">Kepala Strategi Digital</p>
                    <p class="text-gray-400 text-xs mt-1 leading-relaxed">Inovator digital yang mentransformasi TV9
                      menjadi pemain media terkemuka di Indonesia.</p>
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
                        <div class="bg-brand-green-light rounded-xl border border-brand-border px-4 py-3 flex items-start gap-3 mb-3">
                          <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                              <path d="M8 1L10 5.5H15L11 8.5L12.5 13L8 10.5L3.5 13L5 8.5L1 5.5H6L8 1Z" class="fill-tv9-green-800" />
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
                          <div class="w-8 h-8 rounded-lg bg-brand-green-light flex items-center justify-center shrink-0 gap-1">
                            <img width="16" height="16" src="/img/kpi.png" alt="Logo KPI" class="object-contain">
                          </div>
                          <div>
                                <p class="text-[10.5px] font-semibold text-tv9-green-900 uppercase tracking-widest mb-0.5">
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
                                <img width="52" height="52" src="/img/kominfo.png" alt="Logo Kominfo" class="object-contain">
                                </img>
                              </div>
                              <p class="text-[10.5px] font-bold text-tv9-green-900-dark uppercase tracking-widest leading-tight">
                                Kementerian<br />Kominfo
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
                                  <img width="52" height="52" src="/img/kpi.png" alt="Logo KPI" class="object-contain">
                                  </img>
                                </div>
                              </div>
                                <p class="text-[10.5px] font-bold text-tv9-gold-600-600-600-600-600-500 uppercase tracking-widest leading-tight">
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
                              <path d="M12 2L14 8H20L15.5 11.5L17.5 17.5L12 14.5L6.5 17.5L8.5 11.5L4 8H10L12 2Z" fill="white" opacity="0.9" />
                                    <path d="M9 12L11 14L15 10" class="stroke-tv9-green-800" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round" />
                                    </svg>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </section>


    <section class="py-20 px-4 sm:px-6 max-w-6xl mx-auto">

        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between mb-8 sm:mb-10">
          <div class="mb-6 sm:mb-0">
            <p class="text-xs font-semibold tracking-widest text-amber-700 uppercase mb-2">
              Eksplorasi Kreatif</p>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 title-underline">
              Portfolio &amp;
              Karya
              Unggulan</h2>
          </div>
          <div class="flex gap-2 mt-2 sm:mt-0">
            <button class="nav-btn" id="prevBtn" aria-label="Previous">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" class="stroke-gray-800" stroke-width="2.2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="15 18 9 12 15 6" />
                    </svg>
                    </button>
                    <button class="nav-btn" id="nextBtn" aria-label="Next">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" class="stroke-gray-800" stroke-width="2.2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="9 18 15 12 9 6" />
                    </svg>
                    </button>
                    </div>
                    </div>

        <!-- Cards Slider -->
        <div class="relative overflow-hidden">
            <div class="flex gap-3 sm:gap-6 no-scrollbar transition-transform duration-500 ease-in-out" id="portfolioTrack">
              <!-- Card 1 -->
              <div class="card-wrap flex-none w-80 sm:w-72" onclick="openVideo('https://www.youtube.com/watch?v=dQw4w9WgXcQ')">
                <div class="thumb">
                  <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/hqdefault.jpg" alt="Jejak Spiritual Pesisir"
                    class="absolute inset-0 w-full h-full object-cover" />
                  <div class="thumb-overlay">
                    <div class="play-btn">
                      <svg width="18" height="18" viewBox="0 0 24 24" class="fill-tv9-green-900">
                        <polygon points="5 3 19 12 5 21 5 3" />
                      </svg>
                    </div>
                  </div>
                  <span class="badge">Documentary</span>
                </div>
                <div class="p-4">
                  <h3 class="text-base font-bold text-gray-900 mb-1">Jejak
                    Spiritual Pesisir
                  </h3>
                  <p class="text-sm text-gray-500 leading-relaxed">Sebuah
                    narasi mendalam
                    tentang
                    harmoni antara
                    tradisi leluhur dan nilai-nilai keagamaan di sepanjang
                    pesisir Utara
                    Jawa.
                  </p>
                </div>
              </div>

                <!-- Card 2 -->
                <div class="card-wrap flex-none w-80 sm:w-72" onclick="openVideo('https://www.youtube.com/watch?v=9bZkp7q19f0')">
                  <div class="thumb">
                    <img src="https://img.youtube.com/vi/9bZkp7q19f0/hqdefault.jpg" alt="Satu Abad Kebangkitan"
                      class="absolute inset-0 w-full h-full object-cover" />
                    <div class="thumb-overlay">
                      <div class="play-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" class="fill-tv9-green-900">
                          <polygon points="5 3 19 12 5 21 5 3" />
                        </svg>
                      </div>
                    </div>
                    <span class="badge">Special Coverage</span>
                  </div>
                  <div class="p-4">
                    <h3 class="text-base font-bold text-gray-900 mb-1">Satu Abad
                      Kebangkitan
                    </h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Liputan
                      eksklusif rangkaian
                      peringatan satu
                      abad organisasi massa terbesar, merangkum sejarah dan
                      masa depan umat.
                    </p>
                  </div>
                </div>

                <!-- Card 3 -->
                <div class="card-wrap flex-none w-80 sm:w-72" onclick="openVideo('https://www.youtube.com/watch?v=kXYiU_JCYtU')">
                  <div class="thumb">
                    <img src="https://img.youtube.com/vi/kXYiU_JCYtU/hqdefault.jpg" alt="Festival Budaya Nusantara"
                      class="absolute inset-0 w-full h-full object-cover" />
                    <div class="thumb-overlay">
                      <div class="play-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" class="fill-tv9-green-900">
                          <polygon points="5 3 19 12 5 21 5 3" />
                        </svg>
                      </div>
                    </div>
                    <span class="badge">Event Highlights</span>
                  </div>
                  <div class="p-4">
                    <h3 class="text-base font-bold text-gray-900 mb-1">Festival
                      Budaya Nusantara
                    </h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Rangkuman
                      momen-momen magis
                      dari festival
                      budaya yang menyatukan berbagai etnis di Indonesia dalam
                      satu panggung.
                    </p>
                  </div>
                </div>

                <!-- Card 4 -->
                <div class="card-wrap flex-none w-80 sm:w-72" onclick="openVideo('https://www.youtube.com/watch?v=JGwWNGJdvx8')">
                  <div class="thumb">
                    <img src="https://img.youtube.com/vi/JGwWNGJdvx8/hqdefault.jpg" alt="Arsitektur Warisan"
                      class="absolute inset-0 w-full h-full object-cover" />
                    <div class="thumb-overlay">
                      <div class="play-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" class="fill-tv9-green-900">
                          <polygon points="5 3 19 12 5 21 5 3" />
                        </svg>
                      </div>
                    </div>
                    <span class="badge">Short Film</span>
                  </div>
                  <div class="p-4">
                    <h3 class="text-base font-bold text-gray-900 mb-1">
                      Arsitektur Warisan</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Menelusuri
                      keindahan
                      arsitektur
                      bersejarah
                      Indonesia yang menjadi saksi bisu peradaban dan
                      keagungan masa lalu.</p>
                  </div>
                </div>

                <!-- Card 5 -->
                <div class="card-wrap flex-none w-80 sm:w-72" onclick="openVideo('https://www.youtube.com/watch?v=tgbNymZ7vqY')">
                  <div class="thumb">
                    <img src="https://img.youtube.com/vi/tgbNymZ7vqY/hqdefault.jpg" alt="Suara Alam Borneo"
                      class="absolute inset-0 w-full h-full object-cover" />
                    <div class="thumb-overlay">
                      <div class="play-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" class="fill-tv9-green-900">
                          <polygon points="5 3 19 12 5 21 5 3" />
                        </svg>
                      </div>
                    </div>
                    <span class="badge">Nature</span>
                  </div>
                  <div class="p-4">
                    <h3 class="text-base font-bold text-gray-900 mb-1">Suara
                      Alam Borneo</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Perjalanan
                      mendalam ke
                      jantung
                      hutan
                      Kalimantan, merekam keanekaragaman hayati yang semakin
                      terancam
                      modernisasi.
                    </p>
                  </div>
                </div>

            </div>
            </div>

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
                    <span class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2018
                      ·
                      Yogyakarta</span>
                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                      The
                      Best
                      Islamic Based Television Program</h3>
                    <p class="text-sm text-tv9-brown-800 leading-relaxed">Indonesian
                      Platinum & Best
                      Corporate Award 2018 – Penghargaan tertinggi program
                      berbasis Islam terbaik.
                    </p>
                  </div>
                </div>
    
                <!-- 2. The Best Religious Television of The Year 2019 -->
                <div
                  class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                  <div class="p-5">
                    <span class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                      ·
                      Jakarta</span>
                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                      The
                      Best
                      Religious Television of The Year</h3>
                    <p class="text-sm text-tv9-brown-800 leading-relaxed">Indonesian
                      Creativity & Best
                      Leader Award 2019 – atas konsistensi siaran religi
                      inspiratif.</p>
                  </div>
                </div>
    
                <!-- 3. The Most Trusted Company in Information Moslem Media of The Year 2019 -->
                <div
                  class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                  <div class="p-5">
                    <span class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                      ·
                      Yogyakarta</span>
                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                      Most
                      Trusted Company in Information Moslem Media</h3>
                    <p class="text-sm text-tv9-brown-800 leading-relaxed">Indonesian
                      Most Excellent
                      Business
                      Award 2019 – Media informasi muslim terpercaya.</p>
                  </div>
                </div>
    
                <!-- 4. Televisi Terbaik dalam Mutu & Program Berkualitas 2019 -->
                <div
                  class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                  <div class="p-5">
                    <span class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                      ·
                      Bandung</span>
                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                      Televisi
                      Terbaik dalam Mutu & Program Berkualitas</h3>
                    <p class="text-sm text-tv9-brown-800 leading-relaxed">Anugerah
                      Perusahaan Terdepan
                      dan
                      Inovatif 2019 – kualitas siaran unggulan.</p>
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
                    <span class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                      ·
                      Jakarta</span>
                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                      The
                      Best
                      Performing Television (Islamic Program)</h3>
                    <p class="text-sm text-tv9-brown-800 leading-relaxed">Indonesian
                      Achievement & Best
                      Performing Award 2019 – program islami terbaik.</p>
                  </div>
                </div>
    
                <!-- 6. The Most Inspiring Leader of The Year 2019 -->
                <div
                  class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                  <div class="p-5">
                    <span class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                      ·
                      Jakarta</span>
                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                      The
                      Most
                      Inspiring Leader of The Year</h3>
                    <p class="text-sm text-tv9-brown-800 leading-relaxed">Indonesian
                      Platinum & Best
                      Corporate Award 2019 – apresiasi kepemimpinan inspiratif.
                    </p>
                  </div>
                </div>
    
                <!-- 7. PROGRAM RELIGI TERBAIK - KISWAH episode KH Agoes Ali Masyhuri (KPID Jatim 2019) -->
                <div
                  class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                  <div class="p-5">
                    <span class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                      ·
                      Surabaya</span>
                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                      PROGRAM
                      RELIGI TERBAIK – KISWAH</h3>
                    <p class="text-sm text-tv9-brown-800 leading-relaxed">Anugerah
                      Penyiaran KPID Jawa
                      Timur
                      2019 – episode KH Agoes Ali Masyhuri. Program religi
                      unggulan.</p>
                  </div>
                </div>
    
                <!-- 8. Islamic Media & Excellence Champion 2020 -->
                <div
                  class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                  <div class="p-5">
                    <span class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2020
                      ·
                      Jakarta</span>
                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                      Indonesian Moslem Media Excellence Award</h3>
                    <p class="text-sm text-tv9-brown-800 leading-relaxed">Kategori
                      Konsistensi Dakwah
                      Digital & Program Siaran Keagamaan terbaik.</p>
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
                    <span class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                      ·
                      Yogyakarta</span>
                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                      The
                      Most
                      Trusted Company in Information Moslem Media</h3>
                    <p class="text-sm text-tv9-brown-800 leading-relaxed">
                      Reaffirmation: Indonesian Most
                      Excellent Business Award 2019 – kredibilitas tinggi sebagai
                      media muslim.
                    </p>
                  </div>
                </div>
    
                <!-- (Card yang diminta dihilangkan: sebelumnya ada Anugerah Penyiaran KPID Jatim 2019 - KISWAH recognisi spesifik dengan icon 📺🎙️ dan teks "KPID JAWA TIMUR". Card berikut dihilangkan) -->
    
                <!-- 11. Indonesian Platinum & Best Corporate Award 2018 (The Best Islamic TV) (tetap dipertahankan) -->
                <div
                  class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                  <div class="p-5">
                    <span class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2018
                      ·
                      Yogyakarta</span>
                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                      Best
                      Islamic Television Program</h3>
                    <p class="text-sm text-tv9-brown-800 leading-relaxed">Indonesian
                      Platinum & Best
                      Corporate Award 2018 – apresiasi berkelanjutan program
                      berbasis Islam.</p>
                  </div>
                </div>
    
                <!-- 12. Best Quality & Innovative Television (Bandung 2019) -->
                <div
                  class="award-card bg-white rounded-2xl overflow-hidden border border-tv9-beige shadow-md hover:shadow-xl transition-all duration-300">
                  <div class="p-5">
                    <span class="text-xs font-bold tracking-wider text-tv9-gold-600-600-600-600-600-700 uppercase">2019
                      ·
                      Bandung</span>
                    <h3 class="text-base font-extrabold text-tv9-leaf-900 mt-1 mb-2 leading-tight">
                      Anugerah
                      Perusahaan Terdepan & Inovatif</h3>
                    <p class="text-sm text-tv9-brown-800 leading-relaxed">Televisi
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
              <img src="{{ asset('img/partner/bawaslu.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/beacukai.jpg') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
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
              <img src="{{ asset('img/partner/BI_Logo.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Halal-logo-MUI.jpg') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Kopi-Tubruk_Gadjah.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Logo-ATLAS_& BHS.jpg') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/logo-DPRD.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/LOGO-uinsa_PNG.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Logo-Unisma_Malang.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
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
              <img src="{{ asset('img/partner/Logo_BKKBN_(2020).png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/logo_bpbd-jatim.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/logo_kominfo.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/logo_main-dark.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Logo_PLN.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Logo_Siantar_Top.svg.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Logo-BKKBN-Terbaru.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Logo-FiberCreme-01-2.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/logo-icon.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/LOGO-UNUSA-NEW.-Jpg.jpg') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/logo-web-rsi.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/savoria-new.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
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
              <img src="{{ asset('img/partner/bawaslu.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/beacukai.jpg') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
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
              <img src="{{ asset('img/partner/BI_Logo.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Halal-logo-MUI.jpg') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Kopi-Tubruk_Gadjah.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Logo-ATLAS_& BHS.jpg') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/logo-DPRD.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/LOGO-uinsa_PNG.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Logo-Unisma_Malang.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
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
              <img src="{{ asset('img/partner/Logo_BKKBN_(2020).png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/logo_bpbd-jatim.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/logo_kominfo.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/logo_main-dark.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Logo_PLN.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Logo_Siantar_Top.svg.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Logo-BKKBN-Terbaru.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/Logo-FiberCreme-01-2.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/logo-icon.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/LOGO-UNUSA-NEW.-Jpg.jpg') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/logo-web-rsi.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
            </div>
    
            <div
              class="flex-shrink-0 w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-xl flex items-center justify-center p-3">
              <img src="{{ asset('img/partner/savoria-new.png') }}" alt="Logo" class="w-full h-full object-contain"
                draggable="false">
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
            <h2 class="text-4xl md:text-5xl font-bold text-tv9-dark mb-5">Mari Berkolaborasi</h2>
            <p class="text-gray-500 leading-relaxed mb-8">
                Bergabunglah bersama kami dalam upaya menyebarkan pesan positif dan membangun peradaban Nusantara
                yang
                lebih baik melalui media yang mencerahkan.
                </p>
                <div class="flex gap-4 justify-center flex-wrap">
                  <button class="btn-primary px-8 py-3.5 rounded-full text-sm">Hubungi Kami</button>
                  <button class="btn-outline px-8 py-3.5 rounded-full text-sm">Ketentuan Iklan</button>
                </div>
                </div>
                </section>

    <!-- ========= FOOTER ========= -->
    <footer class="bg-tv9-dark text-white py-14 px-6">
      <div class="max-w-5xl mx-auto">
        <div class="grid md:grid-cols-4 gap-8 mb-10">
          <div class="md:col-span-1">
            <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 rounded-full bg-tv9-gold-600-600-600-600-600 flex items-center justify-center">
                          <span class="text-tv9-dark font-black text-xs">TV9</span>
                        </div>
                        <span class="font-bold text-sm">TV9 Nusantara</span>
                        </div>
                    <p class="text-white/40 text-xs leading-relaxed">Santun Menyejukkan
                    </p>
                    <div class="flex gap-3 mt-4">
                        <!-- Social Media Icons with Font Awesome -->
                        <a target="_blank" href="https://x.com/TV9NUsantara"
                          class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold-600-600-600-600-600/30 hover:text-white transition-all duration-300">
                          <i class="fab fa-x-twitter text-xs"></i>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/tv9nusantara"
                          class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold-600-600-600-600-600/30 hover:text-white transition-all duration-300">
                          <i class="fab fa-facebook-f text-xs"></i>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/tv9nusantara/"
                          class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold-600-600-600-600-600/30 hover:text-white transition-all duration-300">
                          <i class="fab fa-instagram text-xs"></i>
                        </a>
                        <a target="_blank" href="https://www.youtube.com/@tv9nusantara"
                          class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold-600-600-600-600-600/30 hover:text-white transition-all duration-300">
                          <i class="fab fa-youtube text-xs"></i>
                        </a>
                        <a target="_blank" href="https://www.tiktok.com/@tv9nusantara"
                          class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold-600-600-600-600-600/30 hover:text-white transition-all duration-300">
                          <i class="fab fa-tiktok text-xs"></i>
                        </a>
                        </div>
                        </div>

                <div>
                    <h5 class="font-semibold text-sm mb-4 text-tv9-gold-600-600-600-600-600">Navigasi</h5>
                    <ul class="space-y-2 text-white/50 text-xs">
                        <li><a href="{{ route('tentang') }}" class="hover:text-white transition-colors">Tentang Kami</a>
                        </li>
                        <li><a href="{{ route('layanan') }}" class="hover:text-white transition-colors">Layanan</a></li>
                        <li><a href="{{ route('kontak') }}" class="hover:text-white transition-colors">Hubungi Kami</a>
                        </li>
                        <li><a href="{{ route('sitemap') }}" class="hover:text-white transition-colors">Sitemap</a>
                        </li>
                        <li><a href="" class="hover:text-white transition-colors">Pedoman Pers</a></li>
                        </ul>
                        </div>
                <div>
                    <h5 class="font-semibold text-sm mb-4 text-tv9-gold-600-600-600-600-600">Program</h5>
                    <ul class="space-y-2 text-white/50 text-xs">
                        <li><a href="{{ route('berita.index') }}" class="hover:text-white transition-colors">Jurnal
                            9</a></li>
                        <li><a href="{{ route('live') }}" class="hover:text-white transition-colors">Live TV</a></li>
                        <li><a href="{{ route('jadwal') }}" class="hover:text-white transition-colors">Jadwal Acara</a>
                        </li>
                        <li><a href="{{ route('catalog.index') }}" class="hover:text-white transition-colors">Program
                            Unggulan</a></li>
                        </ul>
                        </div>

                <div>
                    <h5 class="font-semibold text-sm mb-4 text-tv9-gold-600-600-600-600-600">Kontak</h5>
                    <ul class="space-y-2 text-white/50 text-xs">
                        <li>Jl. Raya Darmo No. 96</li>
                        <li>Surabaya, Jawa Timur</li>
                        <li>admin@tv9.co.id</li>
                        <li>+62 31 5677 9000</li>
                        </ul>
                        </div>
                        </div>

            <div class="border-t border-tv9-gold-600/10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
              <p class="text-white/30 text-xs">&copy; {{ date('Y') }} TV9 Nusantara. PT. Dakwah Inti Media. All rights
                reserved.
              </p>
              <div class="flex gap-4 text-white/30 text-xs">
                    <!-- <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <a href="#" class="hover:text-white transition-colors">Syarat &amp; Ketentuan</a> -->
                    </div>
                    </div>
                    </div>
                    </footer>
    <!-- Simple script to inject current year dynamically (like {{ date('Y') }} in PHP) -->
    <script>
      document.getElementById('currentYear').innerText = new Date().getFullYear();
      Text = new Date().getFullYear();
    </script>
    <script src="js/welcome.js"></script>
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
</script>
</body>

</html>