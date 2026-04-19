<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TV9 Nusantara - Santun Menyejukkan</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
        
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <!-- Scripts & Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
<!-- SEO -->
<meta name="robots" content="index, follow" />
<meta name="description" content="Meningkatkan warisan spiritual dan intelektual Nusantara
melalui pengalaman siaran Islami modern.">
<meta name="author" content="TV9 Nusantara">
<meta http-equiv="Copyright" content="TV9 Nusantara">
<meta name="copyright" content="TV9 Nusantara">

<!-- Facebook Open Graph -->
<meta property="og:type" content="website" />
<meta property="og:title" content="TV9 Nusantara | Santun Menyejukkan" />
<meta property="og:description" content="Meningkatkan warisan spiritual dan intelektual Nusantara
melalui pengalaman siaran Islami modern." />
<meta property="og:image" content="{{ url('/') }}/assets/base/img/thumbnail.jpg" />
<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:site_name" content="TV9 Nusantara | Santun Menyejukkan" />

<!-- Google Structured Data -->
<meta itemprop="name" content="TV9 Nusantara | Santun Menyejukkan" />
<meta itemprop="description" content="Meningkatkan warisan spiritual dan intelektual Nusantara
melalui pengalaman siaran Islami modern." />
<meta itemprop="image" content="{{ url('/') }}/assets/base/img/thumbnail.jpg" />

        <!-- HLS.js CDN -->
        <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
        
        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
                background-color: #f8fafc;
            }
        
            .hero-gradient {
                background: linear-gradient(135deg, #006747 0%, #004d35 100%);
            }
        
            .glass-panel {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }
        </style>
        </head>
        
        <body class="antialiased text-gray-800">
            <!-- Navigation -->
            <nav class="fixed top-0 w-full z-50 px-4 sm:px-8"
     style="background: rgba(0,40,25,0.85); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="max-w-7xl mx-auto flex justify-between items-center h-16">
        <!-- Logo Kiri -->
        <div class="flex flex-row items-center gap-10">
            <a href="{{ route('beranda') }}" class="flex items-center gap-3 no-underline">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('img/logotv9.png') }}" alt="Logo TV9 Nusantara" class="h-9 w-auto object-contain">
                </div>
                <span class="text-white font-bold text-xl tracking-tight hidden sm:block">Nusantara</span>
            </a>
        </div>

        <!-- Menu Kanan (Desktop & Mobile) -->
        <div class="relative flex items-center" x-data="{ open: false }">
        
            <!-- Desktop Menu -->
            <div class="hidden md:flex md:flex-row md:items-center md:gap-7">
                <a href="{{ route('beranda') }}"
                    class="text-sm font-semibold text-yellow-400 border-b-2 border-yellow-400 pb-0.5 whitespace-nowrap">Beranda</a>
                <a href="{{ route('live') }}"
                    class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">LIVE</a>
                <a href="{{ route('jadwal') }}"
                    class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Jadwal</a>
                <a href="{{ route('catalog.index') }}"
                    class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Program</a>
                <a href="{{ route('berita.index') }}"
                    class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Berita</a>
            </div>

            <!-- Mobile Menu Button (Hamburger) -->
            <button @click="open = !open" class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Mobile Menu Dropdown -->
            <div x-show="open" @click.away="open = false" x-cloak x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                 class="absolute top-full right-0 mt-2 w-48 bg-gray-900 rounded-lg shadow-xl md:hidden z-50">
                <div class="flex flex-col p-4 space-y-3">
                    <a href="{{ route('beranda') }}"
                       class="text-sm font-semibold text-yellow-400 border-l-2 border-yellow-400 pl-3 py-1">Beranda</a>
                    <a href="{{ route('live') }}" 
                       class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">LIVE</a>
                    <a href="{{ route('jadwal') }}" 
                       class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Jadwal</a>
                    <a href="{{ route('catalog.index') }}" 
                       class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Program</a>
                    <a href="{{ route('berita.index') }}" 
                       class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Berita</a>
                </div>
            </div>
        </div>
        </div>
        </nav>

                </div>

                <!-- Auth Access -->
                <!-- <div class="flex items-center gap-4">
                                                    @if (Route::has('login'))
                                                        @auth
                                                            <a href="{{ url('/dashboard') }}" class="text-sm font-bold text-white bg-yellow-600/80 px-4 py-2 rounded-lg hover:bg-yellow-600 transition-all">Dashboard</a>
                                                        @else
                                                            <a href="{{ route('login') }}" class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors">Log in</a>
                                                        @endauth
                                                    @endif
                                </div> -->
            </div>
        </nav>
        
        <!-- Spacer for fixed nav -->
        <div class="h-16"></div>

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('img/hero.png') }}" alt="" />

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start text-white">
                            <h2 data-aos="fade-up" data-aos-delay="100">
                                TV9 NUSANTARA</span>
                            </h2>
                            <p data-aos="fade-up" data-aos-delay="200">
                                Spirituality, Creativity, Connectivity
                            </p>
                        </div>
                    </div>
                    </div>
                    </section>

                    <section class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 font-sans antialiased">
                    
                        <!-- Main Container -->
                        <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
                    
                            <!-- Hero Section -->
                            <div class="max-w-7xl mx-auto">
                    
                                <!-- Header Content -->
                                <div class="text-center mb-16 animate-fade-in">
                                    <div class="inline-flex items-center justify-center mb-6">
                                        <div
                                            class="w-20 h-20 bg-gradient-custom rounded-2xl flex items-center justify-center shadow-lg transform rotate-3">
                                            <i class="fas fa-mosque text-4xl text-white"></i>
                                        </div>
                                    </div>
                                    <h1
                                        class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-4">
                                        Access Everywhere
                                    </h1>
                                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                                        Stay connected with the Digital Minaret through your favorite devices, anytime and anywhere in the
                                        world.
                                    </p>
                                </div>
                    
                                <!-- Cards Grid -->
                                <div class="grid md:grid-cols-3 gap-8 mb-16">
                    
                                    <!-- Mobile App Card -->
                                    <div class="relative group">
                                        <!-- Shadow glow di belakang card -->
                                        <div
                                            class="absolute -inset-1 bg-gradient-to-r from-blue-400 to-blue-600 rounded-2xl blur opacity-0 group-hover:opacity-75 transition duration-300 z-0">
                                        </div>
                    
                                        <!-- Coming Soon Badge -->
                                        <div class="coming-soon-badge z-30">
                                            <div class="relative">
                                                <!-- Badge dengan efek animasi -->
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full blur-md opacity-75 animate-pulse">
                                                </div>
                                                <div
                                                    class="relative bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold px-4 py-2 rounded-full shadow-lg flex items-center gap-2">
                                                    <i class="fas fa-clock text-xs"></i>
                                                    <span>COMING SOON</span>
                                                    <i class="fas fa-sparkle text-xs"></i>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <!-- Card content dengan efek sedikit redup untuk coming soon -->
                                        <div class="relative z-10 bg-white/90 rounded-2xl shadow-xl overflow-hidden card-hover">
                                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-6 text-center relative">
                                                <!-- Overlay gelap tipis untuk efek coming soon -->
                                                <div class="absolute inset-0 bg-black/20 backdrop-blur-[1px]"></div>
                                                <div
                                                    class="relative z-10 inline-flex items-center justify-center w-20 h-20 bg-white/20 rounded-2xl backdrop-blur-sm">
                                                    <i class="fas fa-mobile-alt text-4xl text-white"></i>
                                                </div>
                                            </div>
                                            <div class="p-6">
                                                <h3 class="text-2xl font-bold text-gray-800 mb-3 flex items-center justify-center gap-2">
                                                    Mobile App
                                                    <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full">Soon</span>
                                                </h3>
                                                <p class="text-gray-600 leading-relaxed text-center">
                                                    Available on iOS and Android for spiritual guidance on the go.
                                                </p>
                                                <div class="mt-4 flex justify-center space-x-3 opacity-50">
                                                    <i class="fab fa-apple text-2xl text-gray-400"></i>
                                                    <i class="fab fa-android text-2xl text-gray-400"></i>
                                                </div>
                                                <!-- Notify Me Button -->
                                                <button
                                                    class="mt-4 w-full bg-gray-100 text-gray-500 font-semibold py-2 px-4 rounded-xl transition flex items-center justify-center space-x-2 cursor-not-allowed">
                                                    <i class="fas fa-bell"></i>
                                                    <span>Notify Me</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <!-- Web Portal Card -->
                                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover animate-slide-up"
                                        style="animation-delay: 0.2s;">
                                        <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-6 text-center">
                                            <div
                                                class="inline-flex items-center justify-center w-20 h-20 bg-white/20 rounded-2xl backdrop-blur-sm">
                                                <i class="fas fa-globe text-4xl text-white"></i>
                                            </div>
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Web Portal</h3>
                                            <p class="text-gray-600 leading-relaxed mb-4">
                                                Seamless HD streaming experience directly through your browser.
                                            </p>
                                            <button
                                                class="w-full bg-gradient-to-r from-purple-500 to-indigo-500 text-white font-semibold py-3 px-4 rounded-xl btn-hover transition flex items-center justify-center space-x-2">
                                                <i class="fas fa-play-circle"></i>
                                                <span>Launch Web TV</span>
                                            </button>
                                        </div>
                                    </div>
                    
                                    <!-- Smart TV Card -->
                                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover animate-slide-up"
                                        style="animation-delay: 0.3s;">
                                        <div class="bg-gradient-to-br from-green-500 to-teal-500 p-6 text-center">
                                            <div
                                                class="inline-flex items-center justify-center w-20 h-20 bg-white/20 rounded-2xl backdrop-blur-sm">
                                                <i class="fas fa-tv text-4xl text-white"></i>
                                            </div>
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Smart TV</h3>
                                            <p class="text-gray-600 leading-relaxed">
                                                Experience cinematic quality on Samsung, LG, and Android TV.
                                            </p>
                                            <div class="mt-4 flex justify-center space-x-4">
                                                <i class="fab fa-samsung text-xl text-gray-600 hover:text-gray-800 transition"></i>
                                                <i class="fas fa-tv text-xl text-purple-600 hover:text-purple-700 transition"></i>
                                                <i class="fab fa-android text-xl text-green-600 hover:text-green-700 transition"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                                <!-- Platform Badges -->
                                <div class="text-center animate-fade-in">
                                    <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg inline-block">
                                        <div class="flex flex-wrap justify-center items-center gap-6">
                                            <div class="flex items-center space-x-2">
                                                <i class="fab fa-samsung text-2xl text-blue-600"></i>
                                                <span class="font-semibold text-gray-700">SAMSUNG TIZEN</span>
                                            </div>
                                            <div class="w-px h-8 bg-gray-300 hidden sm:block"></div>
                                            <div class="flex items-center space-x-2">
                                                <i class="fab fa-lg text-2xl text-red-500">LG</i>
                                                <span class="font-semibold text-gray-700">LG WEBOS</span>
                                            </div>
                                            <div class="w-px h-8 bg-gray-300 hidden sm:block"></div>
                                            <div class="flex items-center space-x-2">
                                                <i class="fab fa-android text-2xl text-green-600"></i>
                                                <span class="font-semibold text-gray-700">ANDROID TV</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                                <!-- Additional Features Section -->
                                <!-- <div class="mt-16 grid md:grid-cols-4 gap-6 text-center">
                                                                                                                                                                                                                                                                                                                            <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4">
                                                                                                                                                                                                                                                                                                                                <i class="fas fa-clock text-3xl text-indigo-500 mb-2"></i>
                                                                                                                                                                                                                                                                                                                                <p class="text-sm text-gray-600">24/7 Live Streaming</p>
                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                            <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4">
                                                                                                                                                                                                                                                                                                                                <i class="fas fa-download text-3xl text-purple-500 mb-2"></i>
                                                                                                                                                                                                                                                                                                                                <p class="text-sm text-gray-600">Offline Content</p>
                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                            <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4">
                                                                                                                                                                                                                                                                                                                                <i class="fas fa-bell text-3xl text-pink-500 mb-2"></i>
                                                                                                                                                                                                                                                                                                                                <p class="text-sm text-gray-600">Prayer Notifications</p>
                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                            <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4">
                                                                                                                                                                                                                                                                                                                                <i class="fas fa-quran text-3xl text-green-500 mb-2"></i>
                                                                                                                                                                                                                                                                                                                                <p class="text-sm text-gray-600">Holy Quran Recitation</p>
                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                        </div> -->
                    
                                <!-- Call to Action -->
                                <!-- <div class="mt-12 text-center">
                                                                                                                                                                                                                                                                                                        <button
                                                                                                                                                                                                                                                                                                            class="bg-gradient-custom text-white font-bold py-4 px-8 rounded-full btn-hover shadow-lg inline-flex items-center space-x-3">
                                                                                                                                                                                                                                                                                                            <i class="fas fa-download"></i>
                                                                                                                                                                                                                                                                                                            <span>Download Now</span>
                                                                                                                                                                                                                                                                                                            <i class="fas fa-arrow-right"></i>
                                                                                                                                                                                                                                                                                                        </button>
                                                                                                                                                                                                                                                                                                        <p class="text-sm text-gray-500 mt-4">
                                                                                                                                                                                                                                                                                                            Available on App Store, Google Play, and major Smart TV platforms
                                                                                                                                                                                                                                                                                                        </p>
                                                                                                                                                                                                                                                                                                    </div> -->
                    
                            </div>
                        </div>
                    </section>
                    <!-- FOOTER -->
                    <!-- Footer Start -->
                    <div class="relative bg-black text-gray-300 mt-5 ">
                        <div class="relative text-gray-300 mt-5 px-4">
                            <div class="max-w-7xl mx-auto py-12 lg:py-16">
                                <!-- Using flex instead of grid for exact col-lg-6 behavior: half width on large, full on small -->
                                <div class="flex flex-wrap justify-start">
                                    <div class="w-full lg:w-1/2 lg:pr-12">
                                        <a class="inline-block mb-4">
                                            <h1 class="text-3xl lg:text-4xl font-semibold text-white">TV9 Nusantara</h1>
                                        </a>
                                        <p class="text-gray-300 leading-relaxed mb-4">
                                            TV9 Nusantara merupakan stasiun televisi lokal di Kota Surabaya dan
                                            menjadi salah satu awal televisi swasta di Indonesia yang memiliki karakter pemirsa komunitas
                                            yang bernuansa Islam. TV9 dikelola oleh PT. Dakwah Inti Media, perusahaan yang dimiliki oleh
                                            KH. Moh. Hasani Mutawakkil `Alallah, S.H.,M.M., termasuk di dalamnya organisasi sosial keagamaan
                                            Nahdlatul 'Ulama (PWNU) Jawa Timur ini diluncurkan pada tanggal 31 Januari 2010 oleh Soekarwo
                                            sebagai bagian dari perayaan ulang tahun Nahdlatul 'Ulama ke-84. Bersiaran di kanal 42 UHF, TV9
                                            telah memperoleh Izin Penyelenggaraan Penyiaran prinsip tertanggal pada 7 Juli 2009 dan Izin
                                            Penyelenggaraan Penyiaran tetap tertanggal pada 23 Juli 2012 dari Menteri Komunikasi dan
                                            Informatika Republik Indonesia untuk melakukan siaran sebagai lembaga penyiaran swasta lokal di
                                            Surabaya/Jawa Timur.
                                        </p>
                                        <p class="flex items-center gap-2 text-gray-300 mb-2"> </p>
                                        <div class="flex flex-wrap gap-3 mt-6">
                                            <a target="_blank" href="https://x.com/TV9NUsantara"
                                                class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-400 text-gray-400 hover:bg-white hover:text-gray-900 transition-all duration-300">
                                                <i class="fab fa-x-twitter"></i>
                                            </a>
                                            <a target="_blank" href="https://www.facebook.com/tv9nusantara"
                                                class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-400 text-gray-400 hover:bg-white hover:text-gray-900 transition-all duration-300">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/tv9nusantara/"
                                                class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-400 text-gray-400 hover:bg-white hover:text-gray-900 transition-all duration-300">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://www.youtube.com/@tv9nusantara"
                                                class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-400 text-gray-400 hover:bg-white hover:text-gray-900 transition-all duration-300">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                            <a target="_blank" href="https://www.tiktok.com/@tv9nusantara"
                                                class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-400 text-gray-400 hover:bg-white hover:text-gray-900 transition-all duration-300">
                                                <i class="fab fa-tiktok"></i>
                                            </a>
                                        </div>
</div>
<div class="col-lg-2 ps-lg-5">
    <div class="row g-5">
        <div class="col-sm-6">
            <h4 class="text-3xl lg:text-2xl font-semibold text-white mb-4">Alamat</h4>
            <div class="flex flex-col space-y-2">
                <a class="text-white/80 hover:text-white transition-colors no-underline cursor-default"
                    style="pointer-events: none;">Jl. Raya Darmo No.96, Darmo, Kec. Wonokromo, Surabaya, Jawa Timur
                    60241</a>
            </div>
        </div>
        <div class="col-sm-12">
            <!-- Additional content can go here -->
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
                    <p class="text-gray-400 text-sm">
                        &copy; {{ date('Y') }} TV9 NUSANTARA - All Rights Reserved
                        </p>
                        </div>
                        </div>
        <!-- Simple script to inject current year dynamically (like {{ date('Y') }} in PHP) -->
        <script>
            document.getElementById('currentYear').innerText = new Date().getFullYear();
        </script>


        <script>
            document.addEventListener("DOMContentLoaded", () => {
                var video = document.getElementById('video');
                var videoSrc = 'https://5bf7b725107e5.streamlock.net:443/tv9/tv9/playlist.m3u8';
                if (Hls.isSupported()) {
                    var hls = new Hls();
                    hls.loadSource(videoSrc);
                    hls.attachMedia(video);
                    hls.on(Hls.Events.MANIFEST_PARSED, function() {
                        video.muted = true;
                        video.play().catch(() => {});
                    });
                } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
                    video.src = videoSrc;
                    video.addEventListener('loadedmetadata', function() {
                        video.muted = true;
                        video.play().catch(() => {});
                    });
                }
            });
        </script>

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
