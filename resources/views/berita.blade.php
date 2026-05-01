<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Jurnalisme Maslahat dari Jurnal9 TV9. Informasi terpercaya seputar inspirasi Islami, dinamika pesantren, dan kisah-kisah menyejukkan dari Nusantara. Santun, mencerahkan, dan berintegritas.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="TV9 Nusantara">


    <title>Jurnal 9 | TV9 Nusantara</title>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    
    <link rel="canonical" href="{{ config('app.url') . '/berita' }}">
    <!-- OG Image / Thumbnail -->
    <meta property="og:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta itemprop="image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta name="twitter:image" content="{{ asset('img/thumbnail.jpg') }}" />
    
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .news-gradient {
            background: linear-gradient(135deg, #004d35 0%, #002819 100%);
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
    
        <!-- Spacer for fixed nav -->
        <div class="h-16"></div>
    
        <!-- Header Section -->
        <div class="news-gradient py-12 md:py-20 overflow-hidden relative">
            <div class="absolute -top-20 -right-20 w-80 h-80 rounded-full bg-emerald-500/10 blur-3xl"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-3xl mx-auto">
                    <span
                        class="inline-block py-1 px-3 rounded-full bg-yellow-500/20 text-yellow-500 font-semibold text-sm mb-4 border border-yellow-500/30 uppercase tracking-widest">
                        Update Terkini
                    </span>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">JURNAL9.TV</h1>
                    <p class="text-emerald-50 text-lg">Informasi terbaru seputar berita, inspirasi, dan dinamika masyarakat
                        Indonesia dari
                        Jurnal9 yang menghadirkan jurnalisme maslahat.</p>
                </div>
            </div>
        </div>
    
        <!-- News Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 m-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($news as $post)
                    @php
                        // Extract Featured Image from _embedded
                        $imageUrl = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ??
                            'https://api.dicebear.com/7.x/initials/svg?seed=Jurnal9';
                        $excerpt = strip_tags($post['excerpt']['rendered']);
                        $excerpt = strlen($excerpt) > 120 ? substr($excerpt, 0, 120) . '...' : $excerpt;
                    @endphp
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 group flex flex-col mx-2 my-2">
                        <div class="aspect-video relative overflow-hidden bg-gray-100">
                            <img src="{{ $imageUrl }}" alt="{{ $post['title']['rendered'] }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-4 left-4">
                                <span
                                    class="bg-emerald-700 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Update</span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-1">
                            <h2 class="text-xl font-bold text-gray-900 mb-4 leading-tight line-clamp-2">
                                {!! $post['title']['rendered'] !!}
                            </h2>
                            <p class="text-gray-500 text-sm mb-6 flex-1">
                                {{ $excerpt }}
                            </p>
                            <div
                                class="flex items-center justify-between pt-6 border-t border-gray-50 uppercase tracking-tighter">
                                <span class="text-[10px] font-bold text-gray-400">
                                    {{ \Carbon\Carbon::parse($post['date'])->translatedFormat('d F Y') }}
                                </span>
                                <a href="{{ $post['link'] }}" target="_blank"
                                    class="text-emerald-700 font-bold text-xs hover:text-emerald-900 flex items-center gap-1 group/btn">
                                    BACA ARTIKEL
                                    <svg class="w-4 h-4 transform group-hover/btn:translate-x-1 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full py-20 text-center">
                        <p class="text-gray-500">Gagal mengambil data berita. Silakan coba beberapa saat lagi.</p>
                    </div>
                @endforelse
            </div>
            <div class="text-center max-w-3xl mx-auto mt-8 ">
                <a href="https://jurnal9.tv/" target="_blank">
                    <span class="inline-block py-1 px-3 rounded-full bg-yellow-500/20 text-yellow-500 font-semibold text-sm mb-4 border border-yellow-500/30 uppercase tracking-widest 
                   transition-all duration-300 ease-in-out 
                   hover:bg-emerald-500/20 hover:text-emerald-500 hover:border-emerald-500/30 hover:scale-105">
                        LIHAT SEMUA BERITA
                    </span>
                </a>
            </div>
        </div>
    
        <!-- Footer Section -->
        <!-- ========= FOOTER ========= -->
        <footer class="bg-tv9-dark text-white py-14 px-6">
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-4 gap-8 mb-10">
                    <div class="md:col-span-1">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-8 h-8 rounded-full bg-tv9-gold flex items-center justify-center">
                                <span class="text-tv9-green-dark font-black text-xs">TV9</span>
                            </div>
                            <span class="font-bold text-sm">TV9 Nusantara</span>
                        </div>
                        <p class="text-white/40 text-xs leading-relaxed">Santun Menyejukkan
                        </p>
                        <div class="flex gap-3 mt-4">
                            <!-- Social Media Icons with Font Awesome -->
                            <a target="_blank" href="https://x.com/TV9NUsantara"
                                class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold/30 hover:text-white transition-all duration-300">
                                <i class="fab fa-x-twitter text-xs"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/tv9nusantara"
                                class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold/30 hover:text-white transition-all duration-300">
                                <i class="fab fa-facebook-f text-xs"></i>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/tv9nusantara/"
                                class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold/30 hover:text-white transition-all duration-300">
                                <i class="fab fa-instagram text-xs"></i>
                            </a>
                            <a target="_blank" href="https://www.youtube.com/@tv9nusantara"
                                class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold/30 hover:text-white transition-all duration-300">
                                <i class="fab fa-youtube text-xs"></i>
                            </a>
                            <a target="_blank" href="https://www.tiktok.com/@tv9nusantara"
                                class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold/30 hover:text-white transition-all duration-300">
                                <i class="fab fa-tiktok text-xs"></i>
                            </a>
                        </div>
                    </div>
    
                    <div>
                        <h5 class="font-semibold text-sm mb-4 text-tv9-gold">Navigasi</h5>
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
                        <h5 class="font-semibold text-sm mb-4 text-tv9-gold">Program</h5>
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
                        <h5 class="font-semibold text-sm mb-4 text-tv9-gold">Kontak</h5>
                        <ul class="space-y-2 text-white/50 text-xs">
                            <li>Jl. Raya Darmo No. 96</li>
                            <li>Surabaya, Jawa Timur</li>
                            <li>admin@tv9.co.id</li>
                            <li>+62 31 5677 9000</li>
                        </ul>
                    </div>
                </div>
    
                <div class="border-t border-white/10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
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
</body>

</html>