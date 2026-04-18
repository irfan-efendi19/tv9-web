<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TV9 Nusantara - The Digital Minaret</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Scripts & Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
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
        <nav class="fixed top-0 w-full z-50 px-4 sm:px-8" style="background: rgba(0,40,25,0.85); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255,255,255,0.08);">
            <div class="max-w-7xl mx-auto flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex flex-row items-center gap-10">
                    <a href="{{ route('beranda') }}" class="flex items-center gap-3 no-underline">
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-white font-bold text-xl shadow-lg" style="background:#775a19;">9</div>
                        <span class="text-white font-bold text-xl tracking-tight hidden sm:block">TV9 Nusantara</span>
                    </a>

                    <!-- Menu items -->
                    <div class="flex flex-row items-center gap-7">
                        <a href="{{ route('beranda') }}" class="text-sm font-semibold text-yellow-400 border-b-2 border-yellow-400 pb-0.5">Beranda</a>
                        <a href="{{ route('live') }}" class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors">Live</a>
                        <a href="{{ route('jadwal') }}" class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors">Jadwal</a>
                        <a href="{{ route('catalog.index') }}" class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors">Program</a>
                    </div>
                </div>

                <!-- Auth Access -->
                <div class="flex items-center gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-bold text-white bg-yellow-600/80 px-4 py-2 rounded-lg hover:bg-yellow-600 transition-all">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors">Log in</a>
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
        
        <!-- Spacer for fixed nav -->
        <div class="h-16"></div>

        <!-- Hero Section -->
        <div id="live" class="relative hero-gradient pb-20 pt-32 lg:pt-40 lg:pb-28 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full bg-yellow-600/10 opacity-20 blur-3xl"></div>
            <div class="absolute top-40 -left-20 w-72 h-72 rounded-full bg-emerald-900/40 opacity-40 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-12 transform transition-all duration-700 translate-y-0 opacity-100">
                    <span class="inline-block py-1 px-3 rounded-full bg-yellow-500/20 text-yellow-500 font-semibold text-sm mb-4 border border-yellow-500/30">
                        Live Streaming
                    </span>
                    <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight">
                        The Digital <span class="text-yellow-500">Minaret</span>
                    </h1>
                    <p class="text-lg md:text-xl text-emerald-50">
                        Inspirasi Islam Nusantara yang menyejukkan. Tonton tayangan inspiratif dan edukatif kapan saja, dimana saja.
                    </p>
                </div>

                <!-- Video Player Container -->
                <div class="max-w-4xl mx-auto relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-emerald-600 rounded-2xl blur opacity-30 group-hover:opacity-60 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl glass-panel bg-black aspect-video flex items-center justify-center">
                        <video id="video" class="w-full h-full object-cover" controls autoplay playsinline></video>
                    </div>
                </div>
            </div>
        </div>

        <!-- Schedule Section -->
        <div id="jadwal" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Jadwal Hari Ini</h2>
                    <p class="text-gray-500">Tayangan menarik yang akan menemani hari Anda.</p>
                </div>
                <div class="h-1 flex-1 bg-gray-100 ml-8 rounded-full hidden sm:block">
                    <div class="w-32 h-full bg-emerald-700 rounded-full"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($schedules ?? [] as $program)
                @php
                    $currentTime = \Carbon\Carbon::now()->format('H:i:s');
                    $isLive = ($program->start_time <= $currentTime && $program->end_time >= $currentTime);
                @endphp
                <div class="bg-white rounded-2xl p-6 shadow-sm border {{ $isLive ? 'border-red-500 shadow-md ring-1 ring-red-500/50' : 'border-gray-100 hover:shadow-xl hover:border-emerald-700/30' }} transition-all duration-300 transform hover:-translate-y-1 relative overflow-hidden">
                    
                    @if($isLive)
                        <div class="absolute top-0 left-0 w-full h-1 bg-red-600"></div>
                        <div class="absolute top-4 right-4 flex items-center justify-center">
                            <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-red-500 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-red-600"></span>
                            <span class="ml-2 text-xs font-bold text-red-600 uppercase tracking-widest">Live</span>
                        </div>
                    @endif

                    <div class="flex justify-between items-start mb-4">
                        <div class="py-1 px-3 {{ $isLive ? 'bg-red-50 text-red-600' : 'bg-emerald-50 text-emerald-700' }} text-xs font-bold rounded-lg">{{ $program->category ?? 'Umum' }}</div>
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

        <footer class="bg-white border-t border-gray-100 py-10 mt-10">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <p class="text-gray-400 text-sm">
                    &copy; {{ date('Y') }} TV9 Nusantara. <br>
                    <span class="text-xs mt-2 inline-block">Membangun peradaban Islam Nusantara yang menyejukkan.</span>
                </p>
            </div>
        </footer>

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
    </body>
</html>
