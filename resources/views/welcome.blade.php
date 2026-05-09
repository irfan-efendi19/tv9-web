<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
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
        <script type="module" src="{{ config('app.url') }}/build/{{ $manifest['resources/js/app.js']['file'] }}"></script>
    @else
        @viteReactRefresh
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    @endif

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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JETFEBFRYZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-JETFEBFRYZ');
    </script>
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
    </head>
    
    <body>
    
        <x-navbar />
    
        <!-- HERO SECTION -->
        <section id="hero" class="relative overflow-hidden" style="min-height: 100vh;">
            <div class="absolute inset-0 w-full h-full z-0">
                <img src="{{ asset('img/hero.png') }}" alt="Background Static" class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/50 to-black/70">
                </div>
            </div>
            <div class="relative z-10 h-screen min-h-[500px] md:min-h-[600px] w-full">
                <div id="heroSlider" class="relative w-full h-full">
    
                    <!-- SLIDE 1 -->
                    <div class="hero-slide-item absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0 z-10"
                        data-slide="0">
                        <div class="w-full h-full">
                            <div class="container mx-auto px-0 md:px-4 h-full md:flex md:items-center md:justify-between">
                                <div class="mobile-slide-inner md:hidden">
                                    <div class="mobile-poster-wrapper">
                                        <img src="{{ asset('img/feature/1.png') }}" alt="Poster"
                                            class="mobile-poster-image" />
                                    </div>
                                    <div class="mobile-text-wrapper">
                                        <!-- <span class="mobile-badge"><i class="fas fa-star text-yellow-400 text-xs mr-1"></i>
                                                                                                                                                                                        BUILD LIKE THEM</span> -->
                                        <h2 class="text-xl text-white font-bold">TV9 Nusantara
                                        </h2>
                                        <p class="text-base text-white/85">Santun Menyejukkan
                                        </p>
                                        <!-- <div
                                                        class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto mt-4 justify-center btn-group">
                                                        <button class="btn-primary"><i class="fas fa-play text-sm"></i>
                                                            Tonton</button>
                                                        <button class="btn-outline">Selengkapnya <i
                                                                class="fas fa-arrow-right text-xs"></i></button>
                                                    </div> -->
                                    </div>
                                </div>
                                <div class="hidden md:flex md:w-full md:items-center md:justify-between">
                                    <div class="w-full lg:w-7/12 text-white">
                                        <!-- <span
                                                    class="inline-block bg-white/20 backdrop-blur px-3 py-1 rounded-full text-sm mb-3"><i
                                                        class="fas fa-star text-yellow-400 mr-1"></i>
                                                    BUILD LIKE THEM</span> -->
                                        <h2 class="text-5xl lg:text-7xl font-bold mb-4">
                                            TV9 Nusantara</h2>
                                        <p class="text-xl opacity-90 mb-8">Santun
                                            Menyejukkan</p>
                                        <!-- <div class="flex gap-4">
                                                            <button
                                                                class="px-8 py-3 bg-red-600 hover:bg-red-700 rounded-full font-semibold flex items-center gap-2"><i
                                                                    class="fas fa-play"></i>
                                                                Tonton</button>
                                                            <button
                                                                class="px-8 py-3 bg-white/10 backdrop-blur-sm hover:bg-white/20 rounded-full border border-white/30 flex items-center gap-2">Selengkapnya
                                                                <i class="fas fa-arrow-right"></i></button>
                                                        </div> -->
                                    </div>
                                    <div class="lg:w-5/12 desktop-feature-col">
                                        <img src="{{ asset('img/feature/1.png') }}" alt="Broadcasting"
                                            class="h-full mx-auto object-contain drop-shadow-2xl" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <button id="prevSlide"
                    class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 z-30 bg-black/50 hover:bg-black/70 text-white w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center"><i
                        class="fas fa-chevron-left"></i></button>
                <button id="nextSlide"
                    class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 z-30 bg-black/50 hover:bg-black/70 text-white w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center"><i
                        class="fas fa-chevron-right"></i></button>
    
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-30 flex gap-2 md:gap-3">
                    <button class="hero-dot-indicator w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/50" data-dot="0"></button>
                </div>
    
                <div class="swipe-hint"><i class="fas fa-chevron-left"></i><span>Geser</span><i
                        class="fas fa-chevron-right"></i>
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
                        <h2 class="text-2xl font-bold text-gray-900 tracking-tight">
                            Program Hari Ini
                        </h2>
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
        $isLive = $program->start_time <= $currentTime && $program->end_time >=
            $currentTime;
        $isDone = $program->end_time < $currentTime; @endphp <div
                                            class="relative bg-white rounded-2xl p-5 border {{ $isLive ? 'border-2 border-tv9-primary shadow-lg shadow-tv9-primary/10' : 'border-gray-200 hover:shadow-md' }} transition-all duration-300 hover:-translate-y-1 overflow-hidden flex flex-col gap-3 {{ $isDone ? 'opacity-60' : '' }}">
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
                                            <p
                                                class="text-base font-semibold {{ $isLive ? 'text-tv9-primary' : 'text-gray-400' }} mt-3">
                                                {{ \Carbon\Carbon::parse($program->start_time)->format('H:i') }}
                                                WIB –
                                                {{ \Carbon\Carbon::parse($program->end_time)->format('H:i') }} WIB
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
                                                        class="inline-flex items-center gap-1.5 bg-tv9-primary text-white text-[10px] font-bold uppercase tracking-wider rounded px-2.5 py-1">
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
                                <p class="text-gray-500 font-medium">Belum ada jadwal tayang
                                    untuk hari ini.</p>
                            </div>
                        @endforelse
    
                        <div class="text-center max-w-3xl mx-auto mt-8 ">
                            <a href="{{ route('jadwal') }}">
                                <span
                                    class="inline-block py-1 px-3 rounded-full bg-yellow-500/20 text-yellow-500 font-semibold text-sm mb-4 border border-yellow-500/30 uppercase tracking-widest 
                                                                                                                                                                                                                                                                                                                                                               transition-all duration-300 ease-in-out 
                                                                                                                                                                                                                                                                                                                                                               hover:bg-emerald-500/20 hover:text-emerald-500 hover:border-emerald-500/30 hover:scale-105">
                                    LIHAT SEMUA JADWAL
                                </span>
                            </a>
                        </div>
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
    
        <!-- SECTION KATALOG PROGRAM -->
        <section class="nf-section py-16 px-8">
            <div class="max-w-5xl mx-auto" data-aos="fade-up">
                <!-- Header -->
                <div class="flex items-center justify-between mb-5">
                    <h2 class="title-underline text-2xl font-semibold text-gray-900 tracking-tight">Program Unggulan</h2>
                    <a href="{{ route('catalog.index') }}"
                        class="text-base font-semibold text-yellow-600 hover:text-yellow-700">
                        Lihat Semua &rsaquo;
                    </a>
                </div>
    
                <!-- Scroll Wrapper -->
                <div class="catalog-scroll-wrapper">
                    <div class="catalog-grid">
                        @forelse($catalogs->take(4) as $catalog)
                            <div class="nf-card">
                                <!-- Thumbnail -->
                                <div class="nf-thumb-wrap">
                                    @if($catalog->image_url)
                                        <img src="{{ asset($catalog->image_url) }}" alt="{{ $catalog->title }}"
                                            class="nf-thumb-img">
                                    @else
                                        <div class="nf-thumb-placeholder">
                                            <span class="nf-thumb-label">{{ $catalog->title }}</span>
                                        </div>
                                    @endif
                                    <div class="nf-gradient"></div>
                                </div>

                                <!-- Hover Info Panel -->
                                <div class="nf-info">
                                    @if($catalog->category)
                                        <span class="nf-badge">{{ $catalog->category }}</span>
                                    @endif
                                    <p class="nf-card-title">{{ $catalog->title }}</p>
                                    <p class="nf-card-desc">
                                        {{ Str::limit($catalog->description, 60, '...') ?? 'Tidak ada deskripsi.' }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <div class="nf-empty">
                                <p>Belum ada katalog program tersedia.</p>
                            </div>
                        @endforelse
                    </div>
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
                            Raih audiens yang loyal dan berdaya beli tinggi melalui
                            solusi
                            periklanan & pemasaran
                            yang selaras dengan nilai-nilai Islam dan kearifan lokal
                            Indonesia.
                        </p>
                        <!-- Fitur -->
                        <div class="space-y-5 mb-10">
                            <!-- Siaran TV -->
                            <div class="flex gap-4 items-start">
                                <div class="feature-icon-wrap">
                                    <i class="fa-solid fa-tv text-yellow-400 text-base"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold text-base mb-1">
                                        Iklan &
                                        Sponsorship Siaran</h4>
                                    <p class="text-base text-green-100/60 leading-relaxed">
                                        Penempatan
                                        iklan TV dan sponsor
                                        program unggulan seperti kajian Islami, kuliner
                                        Nusantara,
                                        dan berita daerah.</p>
                                </div>
                            </div>
                            <!-- Digital Marketing -->
                            <div class="flex gap-4 items-start">
                                <div class="feature-icon-wrap">
                                    <i class="fa-solid fa-chart-line text-yellow-400 text-base"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold text-base mb-1">
                                        Pemasaran
                                        Digital & Sosial Media</h4>
                                    <p class="text-base text-green-100/60 leading-relaxed">
                                        Kampanye
                                        digital terintegrasi di
                                        platform digital TV9 Nusantara, YouTube,
                                        Instagram, dan
                                        TikTok.</p>
                                </div>
                            </div>
                            <!-- Produksi Konten -->
                            <div class="flex gap-4 items-start">
                                <div class="feature-icon-wrap">
                                    <i class="fa-solid fa-film text-yellow-400 text-base"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold text-base mb-1">
                                        Produksi
                                        Live Event</h4>
                                    <p class="text-base text-green-100/60 leading-relaxed">
                                        Penyelenggaraan acara secara langsung dan on-air, mulai dari seminar, konser musik
                                        religi, hingga tabligh akbar dengan dukungan teknis yang
                                        profesional.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Tombol CTA -->
                        <a href="{{ route('layanan') }}"
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
                                <p class="text-3xl font-bold text-white leading-none mb-1">
                                    85%</p>
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
                        <h2 class="text-2xl font-bold text-gray-900 tracking-tight">
                            Jurnal 9: Berita
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
        <div class="elfsight-app-5d453261-cc99-4c4f-b921-1ce334b79599" data-elfsight-app-lazy></div>
    
        <!-- Suara Komunitas Section -->
        <!-- <section class="w-full media-section py-16 px-8">
                                                                                        <div class="max-w-5xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                                                                                        
                                                                                            <div class="text-center mb-12">
                                                                                                <h2 class="text-3xl font-bold text-white mb-3">Suara Komunitas</h2>
                                                                                                <p class="text-white text-base">Apa kata mereka tentang dampak positif TV9
                                                                                                    Nusantara bagi
                                                                                                    masyarakat.</p>
                                                                                            </div>
                                                                                        
                                                                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-stretch">
                                                                                        
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
                                                                                        </section> -->
    <!-- Section: Legalitas & Izin Penyiaran -->



    <!-- ── READY TO COLLABORATE ───────────────────────────────────── -->
    <section class="py-20 px-6 media-section">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="font-display text-3xl lg:text-4xl font-bold text-white mb-4">
                Siap Berkolaborasi? Let's Connect!
            </h2>
            <p class="text-white text-sm leading-relaxed mb-8 max-w-lg mx-auto">
                Bergabunglah dengan kami dalam misi kami untuk menyiarkan kesantunan
                dan kesejukan.
                Baik Anda tertarik
                pada kemitraan, periklanan, atau berbagi cerita Anda, tim kami siap
                untuk terhubung.
            </p>
            <a href="{{route('kontak')}}" class="inline-block font-bold text-sm text-black px-8 py-3.5 rounded-md"
                style="background:white;letter-spacing:.04em;text-decoration:none;">
                Kontak Kami
            </a>
        </div>
    </section>
    <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border: 0; width: 100%; height: 400px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5730295770977!2d112.736189175!3d-7.289322192718097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb957c5b56f7%3A0x1ee6fa80f21a83d3!2sTV9%20Nusantara!5e0!3m2!1sid!2sid!4v1776587954324!5m2!1sid!2sid"
            frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- FOOTER -->
    <x-footer />
    <!-- Simple script to inject current year dynamically (like {{ date('Y') }} in PHP) -->
    <script>
    if (document.getElementById('currentYear')) {
        document.getElementById('currentYear').innerText = new Date().getFullYear();
    }
    </script>
    <script src="https://elfsightcdn.com/platform.js" async></script>
    <script src="{{ asset('js/welcome.js') }}"></script>
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