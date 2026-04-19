<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Berita Terkini - TV9 Nusantara</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

        <link rel="canonical" href="https://tv9.id/berita">

        <!-- Scripts & Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { 
                font-family: 'Plus Jakarta Sans', sans-serif;
                background-color: #f8fafc;
            }
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
                    class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Beranda</a>
                <a href="{{ route('live') }}"
                    class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">LIVE</a>
                <a href="{{ route('jadwal') }}"
                    class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Jadwal</a>
                <a href="{{ route('catalog.index') }}"
                    class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Program</a>
                <a href="{{ route('berita.index') }}"
                    class="text-sm font-semibold text-yellow-400 border-b-2 border-yellow-400 pb-0.5 whitespace-nowrap">Berita</a>
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
                       class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Beranda</a>
                    <a href="{{ route('live') }}" 
                       class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">LIVE</a>
                    <a href="{{ route('jadwal') }}" 
                       class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Jadwal</a>
                    <a href="{{ route('catalog.index') }}" 
                       class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Program</a>
                    <a href="{{ route('berita.index') }}" 
                       class="text-sm font-semibold text-yellow-400 border-l-2 border-yellow-400 pl-3 py-1">Berita</a>
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
                    <span class="inline-block py-1 px-3 rounded-full bg-yellow-500/20 text-yellow-500 font-semibold text-sm mb-4 border border-yellow-500/30 uppercase tracking-widest">
                        Update Terkini
                    </span>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Warta <span class="text-yellow-500">Nusantara</span></h1>
                    <p class="text-emerald-50 text-lg">Informasi terbaru seputar kiprah santri, kiai, dan dinamika Islam Nusantara dari Jurnal9.</p>
                </div>
             </div>
        </div>

        <!-- News Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 m-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($news as $post)
                    @php
    // Extract Featured Image from _embedded
    $imageUrl = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? 'https://api.dicebear.com/7.x/initials/svg?seed=Jurnal9';
    $excerpt = strip_tags($post['excerpt']['rendered']);
    $excerpt = strlen($excerpt) > 120 ? substr($excerpt, 0, 120) . '...' : $excerpt;
                    @endphp
                    <article class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 group flex flex-col mx-2 my-2">
                        <div class="aspect-video relative overflow-hidden bg-gray-100">
                            <img src="{{ $imageUrl }}" alt="{{ $post['title']['rendered'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-4 left-4">
                                <span class="bg-emerald-700 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Update</span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-1">
                            <h2 class="text-xl font-bold text-gray-900 mb-4 leading-tight line-clamp-2">
                                {!! $post['title']['rendered'] !!}
                            </h2>
                            <p class="text-gray-500 text-sm mb-6 flex-1">
                                {{ $excerpt }}
                            </p>
                            <div class="flex items-center justify-between pt-6 border-t border-gray-50 uppercase tracking-tighter">
                                <span class="text-[10px] font-bold text-gray-400">
                                    {{ \Carbon\Carbon::parse($post['date'])->translatedFormat('d F Y') }}
                                </span>
                                <a href="{{ $post['link'] }}" target="_blank" class="text-emerald-700 font-bold text-xs hover:text-emerald-900 flex items-center gap-1 group/btn">
                                    BACA ARTIKEL 
                                    <svg class="w-4 h-4 transform group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
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
        </div>

        <footer class="bg-white border-t border-gray-100 py-10">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <p class="text-gray-400 text-sm">
                    &copy; {{ date('Y') }} TV9 NUSANTARA - All Rights Reserved
                </p>
            </div>
        </footer>
    </body>
</html>
