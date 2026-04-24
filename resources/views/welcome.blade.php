<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TV9 Nusantara adalah televisi Islami modern yang berbasis di Surabaya, Jawa Timur. Dengan tagline
        Santun Menyejukkan, TV9 menyajikan tayangan bernuansa Ahlussunnah Wal Jamaah (Aswaja) yang mengedepankan
        nilai-nilai keislaman, kebangsaan, dan kearifan lokal Nusantara. Tersedia via live streaming, digital platform,
        dan siaran digital terestrial.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="TV9 Nusantara">


    <title>TV9 Nusantara | Santun Menyejukkan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- SEO -->
    <meta name="robots" content="index, follow" />
    <meta name="description" content="TV9 Nusantara adalah televisi Islami modern yang berbasis di Surabaya, Jawa Timur. Dengan tagline 
        Santun Menyejukkan, TV9 menyajikan tayangan bernuansa Ahlussunnah Wal Jamaah (Aswaja) yang mengedepankan
        nilai-nilai keislaman, kebangsaan, dan kearifan lokal Nusantara. Tersedia via live streaming, digital platform,
        dan siaran digital terestrial.">
    <meta name="author" content="TV9 Nusantara">
    <meta http-equiv="Copyright" content="TV9 Nusantara">
    <meta name="copyright" content="TV9 Nusantara">

    <!-- Facebook Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="TV9 Nusantara | Santun Menyejukkan" />
    <meta property="og:description" content="TV9 Nusantara adalah televisi Islami modern yang berbasis di Surabaya, Jawa Timur. Dengan tagline 
        Santun Menyejukkan, TV9 menyajikan tayangan bernuansa Ahlussunnah Wal Jamaah (Aswaja) yang mengedepankan
        nilai-nilai keislaman, kebangsaan, dan kearifan lokal Nusantara. Tersedia via live streaming, digital platform,
        dan siaran digital terestrial." />
    <meta property="og:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:site_name" content="TV9 Nusantara | Santun Menyejukkan" />

    <!-- Google Structured Data -->
    <meta itemprop="name" content="TV9 Nusantara | Santun Menyejukkan" />
    <meta itemprop="description" content="TV9 Nusantara adalah televisi Islami modern yang berbasis di Surabaya, Jawa Timur. Dengan tagline 
        Santun Menyejukkan, TV9 menyajikan tayangan bernuansa Ahlussunnah Wal Jamaah (Aswaja) yang mengedepankan
        nilai-nilai keislaman, kebangsaan, dan kearifan lokal Nusantara. Tersedia via live streaming, digital platform,
        dan siaran digital terestrial." />
    <meta itemprop="image" content="{{ asset('img/thumbnail.jpg') }}" />

    <!-- HLS.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
</head>

<body>

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
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
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

    <!-- HERO SECTION -->
    <section id="hero" class="hero section relative overflow-hidden">
        <!-- STATIC BACKGROUND (tetap sama sepanjang slide) - tidak fixed -->
        <div class="absolute w-full h-full">
            <!-- Background Image Static -->
            <img src="{{ asset('img/hero.png') }}" alt="Background" class="w-full h-full object-cover" />
            <!-- Overlay Gradient Static -->
            <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/50 to-black/70"></div>
            <!-- Pattern Overlay Static -->
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=" 60" height="60" viewBox="0 0 60 60"
                xmlns="http://www.w3.org/2000/svg" %3E%3Cg fill="none" fill-rule="evenodd" %3E%3Cg fill="%239C92AC"
                fill-opacity="0.05" %3E%3Cpath
                d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"
                /%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        </div>

        <!-- Slider Container -->
        <div class="relative z-10 h-screen min-h-[500px] md:min-h-[600px] w-full">

            <!-- Slides dengan konten berbeda -->
            <div id="heroSlider" class="relative w-full h-full">

                <!-- Slide 1 - TV9 NUSANTARA dengan gambar feature 1 -->
                <div class="hero-slide-item absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0 z-10"
                    data-slide="0">
                    <div class="relative z-10 container mx-auto px-4 h-full flex items-center">
                        <div class="w-full lg:w-7/12 text-white">
                            <h2
                                class="text-3xl md:text-4xl lg:text-6xl font-bold mb-4 text-center lg:text-left animate-fadeInUp">
                                TV9 NUSANTARA
                            </h2>
                            <p class="text-base md:text-lg lg:text-xl opacity-90 mb-8 text-center lg:text-left animate-fadeInUp"
                                style="animation-delay: 0.2s">
                                Spirituality, Creativity, Connectivity
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto mt-4 animate-fadeInUp"
                                style="animation-delay: 0.4s">
                                <button
                                    class="group relative px-6 md:px-8 py-3 md:py-4 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-red-500/50 flex items-center justify-center gap-3 overflow-hidden">
                                    <span class="relative flex items-center gap-2">
                                        <i class="fas fa-circle text-sm animate-pulse"></i>
                                        <i class="fas fa-video text-lg"></i>
                                        <span>Live Streaming</span>
                                    </span>
                                </button>
                                <button
                                    class="group px-6 md:px-8 py-3 md:py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg border border-white/30 flex items-center justify-center gap-3">
                                    <span class="flex items-center gap-2">
                                        <i class="fas fa-calendar-alt text-lg"></i>
                                        <span>Lihat Jadwal</span>
                                        <i
                                            class="fas fa-arrow-right text-base group-hover:translate-x-1 transition-transform duration-300"></i>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <!-- Feature Image Slide 1 (kanan) -->
                        <div class="hidden lg:block lg:w-5/12 animate-fadeInUp" style="animation-delay: 0.6s">
                            <div class="feature-image relative">
                                <img src="{{ asset('img/feature/1.png') }}" alt="Broadcasting"
                                    class="w-80 h-80 mx-auto object-contain drop-shadow-2xl" />
                                <div
                                    class="absolute -bottom-10 -left-10 w-32 h-32 bg-yellow-500/20 rounded-full blur-2xl">
                                </div>
                                <div class="absolute -top-10 -right-10 w-40 h-40 bg-red-500/20 rounded-full blur-2xl">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 - Inspirasi Nusantara dengan gambar feature 2 -->
                <div class="hero-slide-item absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0"
                    data-slide="1">
                    <div class="relative z-10 container mx-auto px-4 h-full flex items-center">
                        <div class="w-full lg:w-7/12 text-white">
                            <h2 class="text-3xl md:text-4xl lg:text-6xl font-bold mb-4 text-center lg:text-left">
                                Inspirasi Nusantara
                            </h2>
                            <p class="text-base md:text-lg lg:text-xl opacity-90 mb-8 text-center lg:text-left">
                                Menyajikan Konten Berkualitas untuk Generasi Masa Depan
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto mt-4">
                                <button
                                    class="group relative px-6 md:px-8 py-3 md:py-4 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-red-500/50 flex items-center justify-center gap-3 overflow-hidden">
                                    <span class="relative flex items-center gap-2">
                                        <i class="fas fa-circle text-sm animate-pulse"></i>
                                        <i class="fas fa-video text-lg"></i>
                                        <span>Live Streaming</span>
                                    </span>
                                </button>
                                <button
                                    class="group px-6 md:px-8 py-3 md:py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg border border-white/30 flex items-center justify-center gap-3">
                                    <span class="flex items-center gap-2">
                                        <i class="fas fa-tv text-lg"></i>
                                        <span>Lihat Program</span>
                                        <i
                                            class="fas fa-arrow-right text-base group-hover:translate-x-1 transition-transform duration-300"></i>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <!-- Feature Image Slide 2 -->
                        <div class="hidden lg:block lg:w-5/12">
                            <div class="feature-image relative">
                                <img src="https://cdn-icons-png.flaticon.com/512/2917/2917995.png" alt="Inspiration"
                                    class="w-80 h-80 mx-auto object-contain drop-shadow-2xl" />
                                <div
                                    class="absolute -bottom-10 -left-10 w-32 h-32 bg-green-500/20 rounded-full blur-2xl">
                                </div>
                                <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-500/20 rounded-full blur-2xl">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 - TV Digital Masa Kini dengan gambar feature 3 -->
                <div class="hero-slide-item absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0"
                    data-slide="2">
                    <div class="relative z-10 container mx-auto px-4 h-full flex items-center">
                        <div class="w-full lg:w-7/12 text-white">
                            <h2 class="text-3xl md:text-4xl lg:text-6xl font-bold mb-4 text-center lg:text-left">
                                TV Digital Masa Kini
                            </h2>
                            <p class="text-base md:text-lg lg:text-xl opacity-90 mb-8 text-center lg:text-left">
                                Tonton Dimana Saja, Kapan Saja. Akses 24/7 di Semua Platform
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto mt-4">
                                <button
                                    class="group relative px-6 md:px-8 py-3 md:py-4 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-red-500/50 flex items-center justify-center gap-3 overflow-hidden">
                                    <span class="relative flex items-center gap-2">
                                        <i class="fas fa-circle text-sm animate-pulse"></i>
                                        <i class="fas fa-video text-lg"></i>
                                        <span>Live Streaming</span>
                                    </span>
                                </button>
                                <button
                                    class="group px-6 md:px-8 py-3 md:py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg border border-white/30 flex items-center justify-center gap-3">
                                    <span class="flex items-center gap-2">
                                        <i class="fas fa-info-circle text-lg"></i>
                                        <span>Tentang Kami</span>
                                        <i
                                            class="fas fa-arrow-right text-base group-hover:translate-x-1 transition-transform duration-300"></i>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <!-- Feature Image Slide 3 -->
                        <div class="hidden lg:block lg:w-5/12">
                            <div class="feature-image relative">
                                <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png" alt="Digital TV"
                                    class="w-80 h-80 mx-auto object-contain drop-shadow-2xl" />
                                <div
                                    class="absolute -bottom-10 -left-10 w-32 h-32 bg-purple-500/20 rounded-full blur-2xl">
                                </div>
                                <div
                                    class="absolute -top-10 -right-10 w-40 h-40 bg-orange-500/20 rounded-full blur-2xl">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 - Berita Terkini dengan gambar feature 4 -->
                <div class="hero-slide-item absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0"
                    data-slide="3">
                    <div class="relative z-10 container mx-auto px-4 h-full flex items-center">
                        <div class="w-full lg:w-7/12 text-white">
                            <h2 class="text-3xl md:text-4xl lg:text-6xl font-bold mb-4 text-center lg:text-left">
                                Berita Terkini
                            </h2>
                            <p class="text-base md:text-lg lg:text-xl opacity-90 mb-8 text-center lg:text-left">
                                Update Tercepat dan Terpercaya Seputar Nusantara
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto mt-4">
                                <button
                                    class="group relative px-6 md:px-8 py-3 md:py-4 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-red-500/50 flex items-center justify-center gap-3 overflow-hidden">
                                    <span class="relative flex items-center gap-2">
                                        <i class="fas fa-circle text-sm animate-pulse"></i>
                                        <i class="fas fa-video text-lg"></i>
                                        <span>Live Streaming</span>
                                    </span>
                                </button>
                                <button
                                    class="group px-6 md:px-8 py-3 md:py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg border border-white/30 flex items-center justify-center gap-3">
                                    <span class="flex items-center gap-2">
                                        <i class="fas fa-newspaper text-lg"></i>
                                        <span>Berita Lainnya</span>
                                        <i
                                            class="fas fa-arrow-right text-base group-hover:translate-x-1 transition-transform duration-300"></i>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <!-- Feature Image Slide 4 -->
                        <div class="hidden lg:block lg:w-5/12">
                            <div class="feature-image relative">
                                <img src="https://cdn-icons-png.flaticon.com/512/2888/2888408.png" alt="News"
                                    class="w-80 h-80 mx-auto object-contain drop-shadow-2xl" />
                                <div
                                    class="absolute -bottom-10 -left-10 w-32 h-32 bg-cyan-500/20 rounded-full blur-2xl">
                                </div>
                                <div class="absolute -top-10 -right-10 w-40 h-40 bg-pink-500/20 rounded-full blur-2xl">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 - Event & Hiburan dengan gambar feature 5 -->
                <div class="hero-slide-item absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0"
                    data-slide="4">
                    <div class="relative z-10 container mx-auto px-4 h-full flex items-center">
                        <div class="w-full lg:w-7/12 text-white">
                            <h2 class="text-3xl md:text-4xl lg:text-6xl font-bold mb-4 text-center lg:text-left">
                                Event & Hiburan
                            </h2>
                            <p class="text-base md:text-lg lg:text-xl opacity-90 mb-8 text-center lg:text-left">
                                Saksikan Event Seru dan Hiburan Menarik Setiap Harinya
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto mt-4">
                                <button
                                    class="group relative px-6 md:px-8 py-3 md:py-4 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-red-500/50 flex items-center justify-center gap-3 overflow-hidden">
                                    <span class="relative flex items-center gap-2">
                                        <i class="fas fa-circle text-sm animate-pulse"></i>
                                        <i class="fas fa-video text-lg"></i>
                                        <span>Live Streaming</span>
                                    </span>
                                </button>
                                <button
                                    class="group px-6 md:px-8 py-3 md:py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg border border-white/30 flex items-center justify-center gap-3">
                                    <span class="flex items-center gap-2">
                                        <i class="fas fa-music text-lg"></i>
                                        <span>Lihat Event</span>
                                        <i
                                            class="fas fa-arrow-right text-base group-hover:translate-x-1 transition-transform duration-300"></i>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <!-- Feature Image Slide 5 -->
                        <div class="hidden lg:block lg:w-5/12">
                            <div class="feature-image relative">
                                <img src="https://cdn-icons-png.flaticon.com/512/3082/3082030.png" alt="Event"
                                    class="w-80 h-80 mx-auto object-contain drop-shadow-2xl" />
                                <div
                                    class="absolute -bottom-10 -left-10 w-32 h-32 bg-indigo-500/20 rounded-full blur-2xl">
                                </div>
                                <div
                                    class="absolute -top-10 -right-10 w-40 h-40 bg-yellow-500/20 rounded-full blur-2xl">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button id="prevSlide"
                class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 z-30 bg-black/50 hover:bg-black/70 text-white w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 hidden md:block">
                <i class="fas fa-chevron-left text-lg md:text-xl"></i>
            </button>
            <button id="nextSlide"
                class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 z-30 bg-black/50 hover:bg-black/70 text-white w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 hidden md:block">
                <i class="fas fa-chevron-right text-lg md:text-xl"></i>
            </button>

            <!-- Dots/Indicators -->
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-30 flex gap-2 md:gap-3">
                <button
                    class="hero-dot-indicator w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                    data-dot="0"></button>
                <button
                    class="hero-dot-indicator w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                    data-dot="1"></button>
                <button
                    class="hero-dot-indicator w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                    data-dot="2"></button>
                <button
                    class="hero-dot-indicator w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                    data-dot="3"></button>
                <button
                    class="hero-dot-indicator w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                    data-dot="4"></button>
            </div>
        </div>
    </section>
    <!-- Hero Section -->



    <!-- Program Hari Ini Section -->
    <!-- Schedule Section (Today) -->
    <section class="bg-gray-50 flex items-center justify-center p-8">
        <div class="w-full max-w-5xl" data-aos="fade-up" data-aos-delay="100">
            <!-- Header -->
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Program Hari Ini</h2>
                    <div class="w-12 h-[3px] bg-yellow-600 rounded mt-2"></div>
                </div>
                <div class="flex items-center gap-2 text-base text-gray-500">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500 inline-block animate-pulse"></span>
                    Sedang Tayang
                </div>
            </div>
            <!-- Schedule Slider Container -->
            <div class="relative">
                <div id="scheduleSlider" class="relative">
                    <!-- Slides -->
                    @php
                        $scheduleList = $schedules ?? [];
                        $chunkedSchedules = collect($scheduleList)->chunk(3);
                    @endphp
            
                    @forelse($chunkedSchedules as $slideIndex => $scheduleChunk)
                        <div class="schedule-slide transition-opacity duration-500 ease-in-out {{ $slideIndex === 0 ? 'opacity-100 block' : 'opacity-0 hidden' }}"
                            data-slide="{{ $slideIndex }}">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach($scheduleChunk as $program)
                                    @php
                                        $currentTime = \Carbon\Carbon::now()->format('H:i:s');
                                        $isLive = $program->start_time <= $currentTime && $program->end_time >= $currentTime;
                                    $isDone = $program->end_time < $currentTime; @endphp <div
                                        class="relative bg-white rounded-2xl p-5 border {{ $isLive ? 'border-2 border-[#006747] shadow-lg shadow-[#006747]/10' : 'border-gray-200 hover:shadow-md' }} transition-all duration-300 hover:-translate-y-1 overflow-hidden flex flex-col gap-3 {{ $isDone ? 'opacity-60' : '' }}">
                                        {{-- Badge SEDANG TAYANG di atas card --}}
                                        @if($isLive)
                                            <div class="absolute -top-px left-1/2 -translate-x-1/2">
                                                <span
                                                    class="inline-flex items-center gap-1.5 bg-red-600 text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-b-lg">
                                                    <span class="w-1.5 h-1.5 bg-white rounded-full animate-pulse"></span>
                                                    Sedang Tayang
                                                </span>
                                            </div>
                                        @endif

                                        {{-- Jam --}}
                                        <p class="text-base font-semibold {{ $isLive ? 'text-[#006747]' : 'text-gray-400' }} mt-3">
                                            {{ \Carbon\Carbon::parse($program->start_time)->format('H:i') }} –
                                            {{ \Carbon\Carbon::parse($program->end_time)->format('H:i') }}
                                        </p>

                                        {{-- Judul & Deskripsi --}}
                                        <div class="flex-1">
                                            <h3 class="text-base font-bold text-gray-900 mb-1 leading-snug">
                                                {{ $program->title }}
                                            </h3>
                                            <p class="text-base text-gray-400 leading-relaxed line-clamp-2">
                                                {{ $program->description ?? 'Deskripsi belum tersedia.' }}
                                            </p>
                                        </div>

                                        {{-- Status Badge --}}
                                        <div>
                                            @if($isLive)
                                                <span
                                                    class="inline-flex items-center gap-1.5 bg-[#006747] text-white text-[10px] font-bold uppercase tracking-wider rounded px-2.5 py-1">
                                                    <span class="w-1.5 h-1.5 bg-white rounded-full animate-pulse"></span>
                                                    Live
                                                </span>
                                            @elseif($isDone)
                                                <span
                                                    class="inline-block text-[10px] font-semibold uppercase tracking-wider border border-gray-300 text-gray-400 rounded px-2.5 py-1">
                                                    Selesai
                                                </span>
                                            @else
                                                <span
                                                    class="inline-block text-[10px] font-semibold uppercase tracking-wider border border-gray-300 text-gray-400 rounded px-2.5 py-1">
                                                    Akan Datang
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @empty
                        <div class="py-12 text-center bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                            <p class="text-gray-500 font-medium">Belum ada jadwal tayang untuk hari ini.</p>
                        </div>
                    @endforelse
                </div>
            
                <!-- Dots/Indicators Only -->
                @if($chunkedSchedules->count() > 1)
                    <div class="flex gap-2 md:gap-3 justify-center mt-6">
                        @for($i = 0; $i < $chunkedSchedules->count(); $i++)
                            <button
                                class="schedule-dot-indicator w-2 h-2 md:w-3 md:h-3 rounded-full {{ $i === 0 ? 'bg-yellow-600' : 'bg-gray-300 hover:bg-gray-400' }} transition-all duration-300"
                                data-dot="{{ $i }}"></button>
                        @endfor
                    </div>
                @endif
            </div>
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
                <!-- Card 1: Satelit Telkom 4 -->
                <div class="card bg-gray-100 rounded-2xl p-6 border border-gray-200">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <i class="fa-solid fa-satellite-dish text-brand-green text-xl"></i>
                    </div>
                    <h3 class="text-brand-green font-semibold text-base mb-4">Satelit Telkom 4
                    </h3>
                    <table class="w-full text-base">
                        <tbody>
                            <tr>
                                <td class="text-gray-500 py-1.5">Frekuensi</td>
                                <td class="text-right font-semibold text-brand-green py-1.5">
                                    3900 MHz</td>
                            </tr>
                            <tr>
                                <td class="text-gray-500 py-1.5">Symbol Rate</td>
                                <td class="text-right font-semibold text-brand-green py-1.5">
                                    29900 Msps</td>
                            </tr>
                            <tr>
                                <td class="text-gray-500 py-1.5">Polarisasi</td>
                                <td class="text-right font-semibold text-brand-green py-1.5">
                                    Horizontal</td>
                            </tr>
                            <tr>
                                <td class="text-gray-500 py-1.5">Modulasi</td>
                                <td class="text-right font-semibold text-brand-green py-1.5">
                                    DVB-S2 / 8PSK</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Card 2: TV Kabel -->
                <div class="card bg-gray-100 rounded-2xl p-6 border border-gray-200">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <i class="fa-solid fa-tv text-brand-green text-xl"></i>
                    </div>
                    <h3 class="text-brand-green font-semibold text-base mb-3">TV Kabel</h3>
                    <p class="text-base text-gray-500 mb-5 leading-relaxed">
                        Temukan kami di daftar channel favorit pada provider TV berbayar pilihan
                        Anda.
                    </p>
                    <ul class="space-y-2.5">
                        <li class="flex items-center gap-2.5 text-base text-gray-600">
                            <i class="fa-solid fa-circle-check text-brand-green text-base flex-shrink-0"></i>
                            IndiHome Channel 809
                        </li>
                        <li class="flex items-center gap-2.5 text-base text-gray-600">
                            <i class="fa-solid fa-circle-check text-brand-green text-base flex-shrink-0"></i>
                            First Media Channel 314
                        </li>
                        <li class="flex items-center gap-2.5 text-base text-gray-600">
                            <i class="fa-solid fa-circle-check text-brand-green text-base flex-shrink-0"></i>
                            MNC Vision Channel 102
                        </li>
                        <li class="flex items-center gap-2.5 text-base text-gray-600">
                            <i class="fa-solid fa-circle-check text-brand-green text-base flex-shrink-0"></i>
                            TransVision Channel 55
                        </li>
                    </ul>
                </div>
                <!-- Card 3: Digital & Apps -->
                <div class="card bg-gray-100 rounded-2xl p-6 border border-gray-200">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <i class="fa-solid fa-mobile-screen text-brand-green text-xl"></i>
                    </div>
                    <h3 class="text-brand-green font-semibold text-base mb-1">Digital &amp; Apps
                    </h3>
                    <p class="text-base text-gray-500 mb-1">Akses siaran langsung 24 jam</p>
                    <a href="https://www.tv9.co.id/live" target="_blank"
                        class="inline-flex items-center gap-1.5 text-base text-brand-green font-semibold mb-5 hover:underline">
                        www.tv9.co.id/live
                        <i class="fa-solid fa-arrow-up-right-from-square text-base"></i>
                    </a>
                    <p class="text-base text-gray-400 mb-3 uppercase tracking-wide font-medium">
                        Download Aplikasi
                        Kami</p>
                    <!-- Google Play -->
                    <a href="#"
                        class="store-btn flex items-center gap-3 bg-gray-900 text-white rounded-xl px-4 py-2.5 mb-2.5 w-full">
                        <i class="fa-brands fa-google-play text-sky-400 text-xl flex-shrink-0"></i>
                        <div class="leading-tight">
                            <p class="text-[10px] text-gray-400 font-normal">GET IT ON</p>
                            <p class="text-base font-semibold">Google Play</p>
                        </div>
                    </a>
                    <!-- App Store -->
                    <a href="#"
                        class="store-btn flex items-center gap-3 bg-gray-900 text-white rounded-xl px-4 py-2.5 w-full">
                        <i class="fa-brands fa-apple text-white text-xl flex-shrink-0"></i>
                        <div class="leading-tight">
                            <p class="text-[10px] text-gray-400 font-normal">DOWNLOAD ON THE</p>
                            <p class="text-base font-semibold">App Store</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION MARKETING & MEDIA SOLUTIONS -->
    <section class="media-section w-full py-16 px-8">
        <div class="max-w-5xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Konten Kiri -->
                <div>
                    <!-- Lencana -->
                    <span
                        class="inline-block text-[10px] font-semibold tracking-widest uppercase text-yellow-300 border border-yellow-500/40 bg-yellow-500/10 rounded px-3 py-1 mb-5">
                        Solusi Media TV9 Nusantara
                    </span>

                    <!-- Judul -->
                    <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-4">
                        Kembangkan Bisnis Anda bersama<br>TV9 Nusantara
                    </h2>

                    <!-- Deskripsi -->
                    <p class="text-base text-green-100/70 leading-relaxed mb-8 max-w-sm">
                        Raih audiens yang loyal dan berdaya beli tinggi melalui solusi
                        periklanan & pemasaran
                        yang selaras dengan nilai-nilai Islam dan kearifan lokal Indonesia.
                    </p>
                    <!-- Fitur -->
                    <div class="space-y-5 mb-10">
                        <!-- Siaran TV -->
                        <div class="flex gap-4 items-start">
                            <div class="feature-icon-wrap">
                                <i class="fa-solid fa-tv text-yellow-400 text-base"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-base mb-1">Iklan &
                                    Sponsorship Siaran</h4>
                                <p class="text-base text-green-100/60 leading-relaxed">Penempatan
                                    iklan TV dan sponsor
                                    program unggulan seperti kajian Islami, kuliner Nusantara,
                                    dan berita daerah.</p>
                            </div>
                        </div>
                        <!-- Digital Marketing -->
                        <div class="flex gap-4 items-start">
                            <div class="feature-icon-wrap">
                                <i class="fa-solid fa-chart-line text-yellow-400 text-base"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-base mb-1">Pemasaran
                                    Digital & Sosial Media</h4>
                                <p class="text-base text-green-100/60 leading-relaxed">Kampanye
                                    digital terintegrasi di
                                    platform digital TV9 Nusantara, YouTube, Instagram, dan
                                    TikTok.</p>
                            </div>
                        </div>
                        <!-- Produksi Konten -->
                        <div class="flex gap-4 items-start">
                            <div class="feature-icon-wrap">
                                <i class="fa-solid fa-film text-yellow-400 text-base"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-base mb-1">Produksi
                                    Konten Kreatif</h4>
                                <p class="text-base text-green-100/60 leading-relaxed">Jasa
                                    produksi in-house untuk video
                                    company profile, talkshow bermerek, hingga iklan layanan
                                    masyarakat bernuansa
                                    edukatif.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Tombol CTA -->
                    <a href="#"
                        class="contact-btn inline-flex items-center gap-2.5 bg-yellow-600 text-white text-base font-semibold rounded-xl px-6 py-3">
                        <i class="fa-solid fa-headset text-base"></i>
                        Hubungi Tim Marketing TV9
                    </a>
                </div>
                <!-- Kanan: Gambar + Statistik -->
                <div class="relative">
                    <div class="image-card w-full aspect-[4/3] bg-gray-800 overflow-hidden rounded-lg">
                        <!-- Ganti dengan gambar studio TV9 Nusantara atau kegiatan syuting -->
                        <img src="{{ asset('img/profile1.jpg') }}" alt="Studio TV9 Nusantara"
                            class="w-full h-full object-cover grayscale opacity-80" />
                        <!-- Lencana Statistik -->
                        <div class="stat-badge absolute bottom-4 left-4 bg-black/60 backdrop-blur-md rounded-lg p-3">
                            <p class="text-3xl font-bold text-white leading-none mb-1">85%</p>
                            <p class="text-[10px] text-yellow-200/80 uppercase tracking-widest font-medium">
                                Tingkat Kepercayaan Pemirsa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="w-full bg-white py-14 px-8">
        <div class="max-w-5xl mx-auto" data-aos="fade-up" data-aos-delay="100">

            <!-- Header -->
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Jurnal 9: Berita
                        Terkini
                    </h2>
                    <div class="w-12 h-[3px] bg-yellow-600 rounded mt-2"></div>
                </div>
                <a href="https://jurnal9.tv" target="_blank"
                    class="text-base font-semibold text-yellow-600 hover:text-yellow-700 flex items-center gap-1 transition-colors">
                    Selengkapnya <i class="fa-solid fa-arrow-right text-base"></i>
                </a>
            </div>
            <!-- Loading State -->
            <div id="news-loading" class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="animate-pulse">
                    <div class="bg-gray-100 rounded-2xl h-48 mb-4"></div>
                    <div class="h-3 bg-gray-100 rounded w-1/4 mb-3"></div>
                    <div class="h-4 bg-gray-100 rounded w-full mb-2"></div>
                    <div class="h-4 bg-gray-100 rounded w-3/4 mb-4"></div>
                    <div class="h-3 bg-gray-100 rounded w-full mb-1"></div>
                    <div class="h-3 bg-gray-100 rounded w-5/6"></div>
                </div>
                <div class="animate-pulse">
                    <div class="bg-gray-100 rounded-2xl h-48 mb-4"></div>
                    <div class="h-3 bg-gray-100 rounded w-1/4 mb-3"></div>
                    <div class="h-4 bg-gray-100 rounded w-full mb-2"></div>
                    <div class="h-4 bg-gray-100 rounded w-3/4 mb-4"></div>
                    <div class="h-3 bg-gray-100 rounded w-full mb-1"></div>
                    <div class="h-3 bg-gray-100 rounded w-5/6"></div>
                </div>
                <div class="animate-pulse">
                    <div class="bg-gray-100 rounded-2xl h-48 mb-4"></div>
                    <div class="h-3 bg-gray-100 rounded w-1/4 mb-3"></div>
                    <div class="h-4 bg-gray-100 rounded w-full mb-2"></div>
                    <div class="h-4 bg-gray-100 rounded w-3/4 mb-4"></div>
                    <div class="h-3 bg-gray-100 rounded w-full mb-1"></div>
                    <div class="h-3 bg-gray-100 rounded w-5/6"></div>
                </div>
            </div>
            <!-- News Grid -->
            <div id="news-grid" class="grid grid-cols-1 md:grid-cols-3 gap-6 hidden"></div>

            <!-- Error State -->
            <div id="news-error" class="hidden text-center py-12 text-gray-400">
                <i class="fa-solid fa-circle-exclamation text-3xl mb-3 block"></i>
                <p class="text-base">Gagal memuat berita. Silakan coba lagi.</p>
            </div>
        </div>
    </section>

    <!-- Suara Komunitas Section -->
    <section class="w-full media-section py-16 px-8">
        <div class="max-w-5xl mx-auto" data-aos="fade-up" data-aos-delay="100">

            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white mb-3">Suara Komunitas</h2>
                <p class="text-white text-base">Apa kata mereka tentang dampak positif TV9
                    Nusantara bagi
                    masyarakat.</p>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-stretch">

                <!-- Card 1 -->
                <div
                    class="testimonial-card bg-white rounded-2xl p-7 flex flex-col justify-between border border-gray-100 shadow-sm">
                    <div>
                        <i class="fa-solid fa-quote-right text-4xl text-gray-100 card-quote float-right ml-3 -mt-1"></i>
                        <p class="text-gray-600 text-base leading-relaxed italic mb-6 card-text">
                            "TV9 Nusantara menjadi rujukan keluarga kami untuk konten religi
                            yang
                            menyejukkan.
                            Program-programnya sangat relevan dengan nilai kebangsaan."
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-xl bg-brand-green flex items-center justify-center text-white text-base font-bold flex-shrink-0 card-avatar">
                            AK</div>
                        <div>
                            <p class="text-base font-bold text-gray-900 uppercase tracking-wide card-name">
                                Ahmad
                                Kurniawan
                            </p>
                            <p class="text-base text-gray-400 card-role">Tokoh Masyarakat, Jombang
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="testimonial-card bg-white rounded-2xl p-7 flex flex-col justify-between border border-gray-100 shadow-sm">
                    <div>
                        <i class="fa-solid fa-quote-right text-4xl text-gray-100 card-quote float-right ml-3 -mt-1"></i>
                        <p class="text-gray-600 text-base leading-relaxed italic font-medium mb-6 card-text">
                            "Sangat terbantu dengan aplikasi mobile TV9. Bisa menyimak kajian
                            kitab
                            dimanapun.
                            Kualitas
                            streamingnya jernih meski di daerah."
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-xl bg-gray-200 flex items-center justify-center text-gray-600 text-base font-bold flex-shrink-0 card-avatar">
                            SP</div>
                        <div>
                            <p class="text-base font-bold text-gray-900 uppercase tracking-wide card-name">
                                Siti
                                Rahmawati
                            </p>
                            <p class="text-base text-gray-400 card-role">Guru, Samarinda</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="testimonial-card bg-white rounded-2xl p-7 flex flex-col justify-between border border-gray-100 shadow-sm">
                    <div>
                        <i class="fa-solid fa-quote-right text-4xl text-gray-100 card-quote float-right ml-3 -mt-1"></i>
                        <p class="text-gray-600 text-base leading-relaxed italic mb-6 card-text">
                            "Sebagai pelaku UMKM, iklan di TV9 sangat efektif menjangkau pasar
                            yang loyal.
                            Tim
                            produksinya
                            sangat kreatif dan kooperatif."
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-xl bg-yellow-500 flex items-center justify-center text-white text-base font-bold flex-shrink-0 card-avatar">
                            BR</div>
                        <div>
                            <p class="text-base font-bold text-gray-900 uppercase tracking-wide card-name">
                                Budi
                                Santoso
                            </p>
                            <p class="text-base text-gray-400 card-role">Wirausaha, Gresik</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Section: Legalitas & Izin Penyiaran -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="bg-brand-green-light rounded-2xl px-10 py-12 font-sans">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">

                    <!-- Kolom Kiri -->
                    <div>
                        <h2 class="text-4xl font-bold text-brand-green-dark leading-tight mb-4">
                            Legalitas &<br />Izin Penyiaran
                        </h2>
                        <p class="text-base text-[#4a5a4a] leading-relaxed mb-6">
                            Sebagai lembaga penyiaran swasta yang bertanggung jawab, TV9
                            Nusantara
                            berkomitmen pada standar regulasi nasional. Kami beroperasi di bawah
                            payung hukum yang sah dan pengawasan ketat dari otoritas komunikasi
                            Indonesia.
                        </p>

                        <!-- IPP -->
                        <div
                            class="bg-brand-green-light rounded-xl border border-brand-border px-4 py-3 flex items-start gap-3 mb-3">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8 1L10 5.5H15L11 8.5L12.5 13L8 10.5L3.5 13L5 8.5L1 5.5H6L8 1Z"
                                        fill="#1a5c2e" />
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="text-[10.5px] font-semibold text-brand-green uppercase tracking-widest mb-0.5">
                                    No. IPP (Izin Penyelenggaraan Penyiaran)
                                </p>
                                <p class="text-base font-medium text-brand-green-dark">
                                    123/KEP/M.KOMINFO/05/2024
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
                                    class="text-[10.5px] font-semibold text-brand-green uppercase tracking-widest mb-0.5">
                                    Akreditasi Konten & Siaran
                                </p>
                                <p class="text-base font-medium text-brand-green-dark">
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
                                    class="text-[10.5px] font-bold text-brand-green-dark uppercase tracking-widest leading-tight">
                                    Kementerian<br />Kominfo
                                </p>
                                <p class="text-[10px] text-[#6a7a6a] uppercase tracking-widest">
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
                                    class="text-[10.5px] font-bold text-brand-gold uppercase tracking-widest leading-tight">
                                    Komisi Penyiaran<br />Indonesia
                                </p>
                                <p class="text-[10px] text-[#6a7a6a] uppercase tracking-widest">
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
                                <p class="text-base text-brand-green-muted text-white">
                                    Sertifikasi Kualitas Layanan
                                </p>
                            </div>
                            <div class="w-11 h-11 bg-white/10 rounded-xl flex items-center justify-center shrink-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 2L14 8H20L15.5 11.5L17.5 17.5L12 14.5L6.5 17.5L8.5 11.5L4 8H10L12 2Z"
                                        fill="white" opacity="0.9" />
                                    <path d="M9 12L11 14L15 10" stroke="#1a5c2e" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="py-20 px-6">
        <div class="max-w-5xl mx-auto">

            <!-- Header -->
            <div class="text-center mb-14">
                <p class="text-base font-semibold tracking-[0.25em] text-[#7a6a50] uppercase mb-3">
                    Dedikasi & Kualitas</p>
                <h2 class="text-4xl md:text-5xl font-bold text-[#1a2e1a]">Penghargaan &
                    Apresiasi</h2>
                <div class="mt-5 mx-auto w-12 h-[3px] bg-[#4a7a4a] rounded-full"></div>
            </div>

            <!-- Slideshow Wrapper -->
            <div class="relative overflow-hidden rounded-2xl">
                <div class="slides-track" id="track">

                    <!-- Slide 1 -->
                    <div class="slide">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                            <!-- Card 1 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-[#e8e2d9] shadow-sm">
                                <img src="https://placehold.co/400x280/e8f0e8/4a7a4a?text=KPI+Pusat"
                                    alt="Anugerah KPI Pusat" class="w-full object-cover aspect-video">
                                <div class="p-5">
                                    <span
                                        class="text-base font-semibold tracking-widest text-[#9a8a70] uppercase">2023</span>
                                    <h3 class="text-base font-bold text-[#2d5a2d] mt-1 mb-2 leading-snug">
                                        Anugerah KPI
                                        Pusat</h3>
                                    <p class="text-base text-[#6b6b6b] leading-relaxed">Pemenang
                                        Kategori Program Televisi
                                        Peduli Syiar Islam Terbaik untuk Program 'Jurnal 9'.</p>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-[#e8e2d9] shadow-sm">
                                <img src="https://placehold.co/400x280/e8f0e8/4a7a4a?text=KPID+Jatim"
                                    alt="KPID Awards Jatim" class="w-full object-cover aspect-video">
                                <div class="p-5">
                                    <span
                                        class="text-base font-semibold tracking-widest text-[#9a8a70] uppercase">2022</span>
                                    <h3 class="text-base font-bold text-[#2d5a2d] mt-1 mb-2 leading-snug">
                                        KPID Awards
                                        Jatim</h3>
                                    <p class="text-base text-[#6b6b6b] leading-relaxed">Lembaga
                                        Penyiaran Televisi Swasta
                                        Lokal Terbaik dengan Konsistensi Budaya Nusantara.</p>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-[#e8e2d9] shadow-sm">
                                <img src="https://placehold.co/400x280/e8f0e8/4a7a4a?text=Islamic+Media"
                                    alt="Islamic Media Awards" class="w-full object-cover aspect-video">
                                <div class="p-5">
                                    <span
                                        class="text-base font-semibold tracking-widest text-[#9a8a70] uppercase">2023</span>
                                    <h3 class="text-base font-bold text-[#2d5a2d] mt-1 mb-2 leading-snug">
                                        Islamic Media
                                        Awards</h3>
                                    <p class="text-base text-[#6b6b6b] leading-relaxed">Best
                                        Digital Innovation for
                                        Islamic Content Delivery in South East Asia Region.</p>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-[#e8e2d9] shadow-sm">
                                <img src="https://placehold.co/400x280/e8f0e8/4a7a4a?text=MUI+Award"
                                    alt="MUI Excellence Award" class="w-full object-cover aspect-video">
                                <div class="p-5">
                                    <span
                                        class="text-base font-semibold tracking-widest text-[#9a8a70] uppercase">2021</span>
                                    <h3 class="text-base font-bold text-[#2d5a2d] mt-1 mb-2 leading-snug">
                                        MUI Excellence
                                        Award</h3>
                                    <p class="text-base text-[#6b6b6b] leading-relaxed">
                                        Penghargaan atas Peran Aktif
                                        Menjaga Kerukunan Umat dan Moderasi Beragama.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Slide 1 -->

                    <!-- Slide 2 -->
                    <div class="slide">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                            <!-- Card 5 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-[#e8e2d9] shadow-sm">
                                <img src="https://placehold.co/400x280/e8f0e8/4a7a4a?text=Jurnalistik"
                                    alt="Anugerah Jurnalistik" class="w-full object-cover aspect-video">
                                <div class="p-5">
                                    <span
                                        class="text-base font-semibold tracking-widest text-[#9a8a70] uppercase">2020</span>
                                    <h3 class="text-base font-bold text-[#2d5a2d] mt-1 mb-2 leading-snug">
                                        Anugerah
                                        Jurnalistik</h3>
                                    <p class="text-base text-[#6b6b6b] leading-relaxed">
                                        Penghargaan Jurnalistik Nasional
                                        atas liputan mendalam isu sosial dan kebangsaan.</p>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-[#e8e2d9] shadow-sm">
                                <img src="https://placehold.co/400x280/e8f0e8/4a7a4a?text=TV+Lokal"
                                    alt="TV Lokal Terbaik" class="w-full object-cover aspect-video">
                                <div class="p-5">
                                    <span
                                        class="text-base font-semibold tracking-widest text-[#9a8a70] uppercase">2020</span>
                                    <h3 class="text-base font-bold text-[#2d5a2d] mt-1 mb-2 leading-snug">
                                        TV Lokal
                                        Terbaik</h3>
                                    <p class="text-base text-[#6b6b6b] leading-relaxed">Dinobatkan
                                        sebagai Televisi Lokal
                                        Terbaik versi survei nasional kepuasan pemirsa.</p>
                                </div>
                            </div>

                            <!-- Card 7 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-[#e8e2d9] shadow-sm">
                                <img src="https://placehold.co/400x280/e8f0e8/4a7a4a?text=ISO+9001"
                                    alt="Sertifikasi ISO 9001" class="w-full object-cover aspect-video">
                                <div class="p-5">
                                    <span
                                        class="text-base font-semibold tracking-widest text-[#9a8a70] uppercase">2019</span>
                                    <h3 class="text-base font-bold text-[#2d5a2d] mt-1 mb-2 leading-snug">
                                        Sertifikasi
                                        ISO 9001</h3>
                                    <p class="text-base text-[#6b6b6b] leading-relaxed">Lulus
                                        sertifikasi manajemen mutu
                                        internasional untuk operasional siaran dan redaksi.</p>
                                </div>
                            </div>

                            <!-- Card 8 -->
                            <div
                                class="award-card bg-white rounded-2xl overflow-hidden border border-[#e8e2d9] shadow-sm">
                                <img src="https://placehold.co/400x280/e8f0e8/4a7a4a?text=CSR+Award"
                                    alt="Penghargaan CSR" class="w-full object-cover aspect-video">
                                <div class="p-5">
                                    <span
                                        class="text-base font-semibold tracking-widest text-[#9a8a70] uppercase">2019</span>
                                    <h3 class="text-base font-bold text-[#2d5a2d] mt-1 mb-2 leading-snug">
                                        Penghargaan
                                        CSR</h3>
                                    <p class="text-base text-[#6b6b6b] leading-relaxed">Apresiasi
                                        program tanggung jawab
                                        sosial terbaik di bidang pendidikan dan pemberdayaan
                                        masyarakat.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Slide 2 -->

                </div>
            </div>
            <!-- End Slideshow -->

            <!-- Navigation -->
            <div class="flex items-center justify-center gap-4 mt-8">
                <button id="prev" onclick="move(-1)" disabled
                    class="w-9 h-9 rounded-full border border-[#d1d5db] bg-white flex items-center justify-center text-[#4a7a4a] hover:bg-[#f0f7f0] disabled:opacity-30 disabled:cursor-not-allowed transition">
                    &#8592;
                </button>
                <div id="dots" class="flex gap-2"></div>
                <button id="next" onclick="move(1)"
                    class="w-9 h-9 rounded-full border border-[#d1d5db] bg-white flex items-center justify-center text-[#4a7a4a] hover:bg-[#f0f7f0] disabled:opacity-30 disabled:cursor-not-allowed transition">
                    &#8594;
                </button>
            </div>

        </div>
    </section>


    <section class="py-20 px-6 max-w-6xl px-6 mx-auto">

        <!-- Header -->
        <div class="flex items-start justify-between mb-10">
            <div>
                <p class="text-xs font-semibold tracking-widest text-amber-700 uppercase mb-2">
                    Eksplorasi Kreatif</p>
                <h2 class="text-4xl font-extrabold text-gray-900 title-underline">Portfolio &amp; Karya
                    Unggulan</h2>
            </div>
            <div class="flex gap-2 mt-2">
                <button class="nav-btn" id="prevBtn" aria-label="Previous">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2.2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6" />
                    </svg>
                </button>
                <button class="nav-btn" id="nextBtn" aria-label="Next">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2.2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Cards Slider -->
        <div class="relative overflow-hidden">
            <div class="flex gap-6 no-scrollbar transition-transform duration-500 ease-in-out" id="portfolioTrack">

                <!-- Card 1 -->
                <div class="card-wrap flex-none w-72"
                    onclick="openVideo('https://www.youtube.com/watch?v=dQw4w9WgXcQ')">
                    <div class="thumb">
                        <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/hqdefault.jpg" alt="Jejak Spiritual Pesisir"
                            class="absolute inset-0 w-full h-full object-cover" />
                        <div class="thumb-overlay">
                            <div class="play-btn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="#1a3d2b">
                                    <polygon points="5 3 19 12 5 21 5 3" />
                                </svg>
                            </div>
                        </div>
                        <span class="badge">Documentary</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-base font-bold text-gray-900 mb-1">Jejak Spiritual Pesisir</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Sebuah narasi mendalam tentang
                            harmoni antara
                            tradisi leluhur dan nilai-nilai keagamaan di sepanjang pesisir Utara Jawa.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card-wrap flex-none w-72"
                    onclick="openVideo('https://www.youtube.com/watch?v=9bZkp7q19f0')">
                    <div class="thumb">
                        <img src="https://img.youtube.com/vi/9bZkp7q19f0/hqdefault.jpg" alt="Satu Abad Kebangkitan"
                            class="absolute inset-0 w-full h-full object-cover" />
                        <div class="thumb-overlay">
                            <div class="play-btn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="#1a3d2b">
                                    <polygon points="5 3 19 12 5 21 5 3" />
                                </svg>
                            </div>
                        </div>
                        <span class="badge">Special Coverage</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-base font-bold text-gray-900 mb-1">Satu Abad Kebangkitan</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Liputan eksklusif rangkaian
                            peringatan satu
                            abad organisasi massa terbesar, merangkum sejarah dan masa depan umat.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card-wrap flex-none w-72"
                    onclick="openVideo('https://www.youtube.com/watch?v=kXYiU_JCYtU')">
                    <div class="thumb">
                        <img src="https://img.youtube.com/vi/kXYiU_JCYtU/hqdefault.jpg" alt="Festival Budaya Nusantara"
                            class="absolute inset-0 w-full h-full object-cover" />
                        <div class="thumb-overlay">
                            <div class="play-btn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="#1a3d2b">
                                    <polygon points="5 3 19 12 5 21 5 3" />
                                </svg>
                            </div>
                        </div>
                        <span class="badge">Event Highlights</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-base font-bold text-gray-900 mb-1">Festival Budaya Nusantara
                        </h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Rangkuman momen-momen magis
                            dari festival
                            budaya yang menyatukan berbagai etnis di Indonesia dalam satu panggung.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card-wrap flex-none w-72"
                    onclick="openVideo('https://www.youtube.com/watch?v=JGwWNGJdvx8')">
                    <div class="thumb">
                        <img src="https://img.youtube.com/vi/JGwWNGJdvx8/hqdefault.jpg" alt="Arsitektur Warisan"
                            class="absolute inset-0 w-full h-full object-cover" />
                        <div class="thumb-overlay">
                            <div class="play-btn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="#1a3d2b">
                                    <polygon points="5 3 19 12 5 21 5 3" />
                                </svg>
                            </div>
                        </div>
                        <span class="badge">Short Film</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-base font-bold text-gray-900 mb-1">Arsitektur Warisan</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Menelusuri keindahan arsitektur
                            bersejarah
                            Indonesia yang menjadi saksi bisu peradaban dan keagungan masa lalu.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card-wrap flex-none w-72"
                    onclick="openVideo('https://www.youtube.com/watch?v=tgbNymZ7vqY')">
                    <div class="thumb">
                        <img src="https://img.youtube.com/vi/tgbNymZ7vqY/hqdefault.jpg" alt="Suara Alam Borneo"
                            class="absolute inset-0 w-full h-full object-cover" />
                        <div class="thumb-overlay">
                            <div class="play-btn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="#1a3d2b">
                                    <polygon points="5 3 19 12 5 21 5 3" />
                                </svg>
                            </div>
                        </div>
                        <span class="badge">Nature</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-base font-bold text-gray-900 mb-1">Suara Alam Borneo</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Perjalanan mendalam ke jantung
                            hutan
                            Kalimantan, merekam keanekaragaman hayati yang semakin terancam modernisasi.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="py-16 bg-gray-50">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Partner & Kolaborator</h2>
            <p class="text-gray-500 mt-2">Mitra terpercaya kami</p>
        </div>
        <div class="marquee-wrapper">
            <div class="marquee-content">
                <!-- Loop logo 2x untuk seamless -->
                <div class="logo-item"><img src="https://picsum.photos/id/20/180/80" alt="Logo">
                </div>
                <div class="logo-item"><img src="https://picsum.photos/id/26/180/80" alt="Logo">
                </div>
                <div class="logo-item"><img src="https://picsum.photos/id/29/180/80" alt="Logo">
                </div>
                <div class="logo-item"><img src="https://picsum.photos/id/39/180/80" alt="Logo">
                </div>
                <div class="logo-item"><img src="https://picsum.photos/id/42/180/80" alt="Logo">
                </div>
                <div class="logo-item"><img src="https://picsum.photos/id/48/180/80" alt="Logo">
                </div>
                <!-- Duplicate untuk seamless -->
                <div class="logo-item"><img src="https://picsum.photos/id/20/180/80" alt="Logo">
                </div>
                <div class="logo-item"><img src="https://picsum.photos/id/26/180/80" alt="Logo">
                </div>
                <div class="logo-item"><img src="https://picsum.photos/id/29/180/80" alt="Logo">
                </div>
                <div class="logo-item"><img src="https://picsum.photos/id/39/180/80" alt="Logo">
                </div>
                <div class="logo-item"><img src="https://picsum.photos/id/42/180/80" alt="Logo">
                </div>
                <div class="logo-item"><img src="https://picsum.photos/id/48/180/80" alt="Logo">
                </div>
            </div>
        </div>
    </section>
    <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border: 0; width: 100%; height: 400px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5730295770977!2d112.736189175!3d-7.289322192718097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb957c5b56f7%3A0x1ee6fa80f21a83d3!2sTV9%20Nusantara!5e0!3m2!1sid!2sid!4v1776587954324!5m2!1sid!2sid"
            frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- FOOTER -->
    <!-- Footer Start -->
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
                                    class="flex items-center justify-center w-10 h-10 rounded-full border border-black text-black hover:bg-green-50 hover:bg-green-50 transition-all duration-300 mr-2">
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
    </div>

    <!-- COPYRIGHT SECTION (converted to Tailwind) -->
    <!-- Original: .copyright.container-fluid.bg-dark.text-white.border-top.border-secondary.px-0 -->
    <div class="bg-white border-t border-gray-100 py-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-gray-400 text-base">
                &copy; {{ date('Y') }} TV9 NUSANTARA - All Rights Reserved
            </p>
        </div>
    </div>
    <!-- Simple script to inject current year dynamically (like {{ date('Y') }} in PHP) -->
    <script>
    document.getElementById('currentYear').innerText = new Date().getFullYear();
    </script>

    <script src="js/welcome.js"></script>
    <style>
    /* Sembunyikan durasi (timestamp) pada live streaming */
    video::-webkit-media-controls-current-time-display,
    video::-webkit-media-controls-time-remaining-display,
    video::-webkit-media-controls-timeline {
        display: none !important;
    }

    /* Untuk browser lain (Firefox) */
    video::-moz-range-progress {
        display: none;
    }

    /* Alternatif: jika ingin menyembunyikan seluruh kontrol durasi dan progress bar */
    /* video::-webkit-media-controls-timeline {
        display: none;
    } */
    </style>
</body>

</html>