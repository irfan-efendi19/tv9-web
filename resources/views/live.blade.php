<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live Streaming – TV9 Nusantara</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="canonical" href="https://tv9.id/live">
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background: #0a0a0a;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #006747 0%, #004d35 100%);
    }
</style>
</head>

<body class="antialiased text-white min-h-screen">

    <!-- Navbar -->
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
                                class="text-sm font-semibold text-yellow-400 border-b-2 border-yellow-400 pb-0.5 whitespace-nowrap">LIVE</a>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                                </path>
                            </svg>
                        </button>
                        <!-- Mobile Menu Dropdown -->
                        <div x-show="open" @click.away="open = false" x-cloak x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2"
                            class="absolute top-full right-0 mt-2 w-48 bg-gray-900 rounded-lg shadow-xl md:hidden z-50">
                            <div class="flex flex-col p-4 space-y-3">
                                <a href="{{ route('beranda') }}"
                                    class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Beranda</a>
                                <a href="{{ route('live') }}"
                                    class="text-sm font-semibold text-yellow-400 border-l-2 border-yellow-400 pl-3 py-1">LIVE</a>
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
            
            <div class="h-16"></div>
            
            <!-- Player Section -->
            <div class="hero-gradient py-16">
                <div class="max-w-5xl mx-auto px-4">
                    <div class="text-center mb-8">
                        <span
                            class="inline-flex items-center gap-2 bg-red-600/20 text-red-400 text-sm font-bold px-4 py-1.5 rounded-full border border-red-500/30 mb-4">
                            <span class="animate-ping inline-flex h-2 w-2 rounded-full bg-red-500 opacity-75"></span>
                            LIVE
                        </span>
                        <h1 class="text-3xl md:text-5xl font-extrabold text-white">TV9 Nusantara</h1>
                        <p class="text-emerald-100 mt-3">Siaran 24 Jam Non Stop</p>
        </div>

        <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-black aspect-video group">
            <!-- Badge LIVE elegan -->
            <div
                class="absolute top-4 left-4 z-10 bg-gradient-to-r from-red-600 to-red-700 text-white font-bold px-4 py-1.5 rounded-lg text-xs tracking-wider shadow-lg backdrop-blur-sm bg-opacity-90 flex items-center gap-2 border border-red-400/30">
                <div class="relative">
                    <span
                        class="absolute inline-flex h-2.5 w-2.5 rounded-full bg-red-400 opacity-75 animate-ping"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-red-500"></span>
                </div>
                <span class="uppercase text-[11px] font-semibold">LIVE</span>
                <span class="hidden sm:inline-block text-[10px] font-normal text-red-200">Streaming</span>
            </div>

            <!-- Efek glassmorphism overlay saat hover -->
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none rounded-2xl">
            </div>

            <video id="video" class="w-full h-full" controls autoplay playsinline></video>
        </div>
    </div>
</div>

<!-- Schedule Section (Today) -->
<div class="bg-white py-20 text-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-10">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Jadwal Hari Ini</h2>
                <p class="text-gray-500">Tayangan menarik yang akan menemani hari Anda.</p>
            </div>
            <div class="h-1 flex-1 bg-gray-100 ml-8 rounded-full hidden sm:block">
                <div class="w-32 h-full" style="background:#006747; border-radius: 9999px;"></div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($schedules ?? [] as $program)
                @php
    $currentTime = \Carbon\Carbon::now()->format('H:i:s');
    $isLive = ($program->start_time <= $currentTime && $program->end_time >= $currentTime);
                @endphp
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm border {{ $isLive ? 'border-red-500 shadow-md ring-1 ring-red-500/50' : 'border-gray-100 hover:shadow-xl' }} transition-all duration-300 transform hover:-translate-y-1 relative overflow-hidden">

                    @if($isLive)
                        <div class="absolute top-0 left-0 w-full h-1 bg-red-600"></div>
                        <div class="absolute top-4 right-4 flex items-center justify-center">
                            <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-red-500 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-red-600"></span>
                            <span class="ml-2 text-xs font-bold text-red-600 uppercase tracking-widest">Live</span>
                        </div>
                    @endif

                    <div class="flex justify-between items-start mb-4">
                        <div
                            class="py-1 px-3 {{ $isLive ? 'bg-red-50 text-red-600' : 'bg-emerald-50 text-emerald-700' }} text-xs font-bold rounded-lg">
                            {{ $program->category ?? 'Umum' }}
                        </div>
                            <div class="text-sm font-semibold {{ $isLive ? 'text-gray-900 mt-1' : 'text-gray-400' }}">
                                {{ \Carbon\Carbon::parse($program->start_time)->format('H:i') }} -
                                {{ \Carbon\Carbon::parse($program->end_time)->format('H:i') }}
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $program->title }}</h3>
                        <p class="text-gray-500 text-sm line-clamp-2">
                            {{ $program->description ?? 'Deskripsi belum tersedia.' }}
                        </p>
                    </div>
            @empty
                <div class="col-span-full py-12 text-center bg-gray-50 rounded-2xl border border-gray-100 border-dashed">
                    <p class="text-gray-500 font-medium">Belum ada jadwal tayang untuk hari ini.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

        <footer class="bg-white border-t border-gray-100 py-10">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <p class="text-gray-400 text-sm">
                    &copy; {{ date('Y') }} TV9 NUSANTARA - All Rights Reserved
                </p>
            </div>
        </footer>

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

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const video = document.getElementById('video');
            const src = 'https://5bf7b725107e5.streamlock.net:443/tv9/tv9/playlist.m3u8';
            if (Hls.isSupported()) {
                const hls = new Hls();
                hls.loadSource(src);
                hls.attachMedia(video);
                hls.on(Hls.Events.MANIFEST_PARSED, () => {
                    video.muted = true;
                    video.play().catch(() => {});
                });
            } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
                video.src = src;
                video.addEventListener('loadedmetadata', () => { video.muted = true; video.play().catch(() => {}); });
            }
        });
    </script>
</body>
</html>
