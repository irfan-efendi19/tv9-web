<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Saksikan live streaming TV9 Nusantara secara gratis. Nikmati pengalaman siaran Islami modern yang meningkatkan warisan spiritual dan intelektual Nusantara. Santun, menyejukkan, dan tayang 24 jam." />
    <meta name="author" content="TV9 Nusantara">

    <title>LIVE Streaming | TV9 Nusantara</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="canonical" href="{{ config('app.url') . '/live' }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- OG Image / Thumbnail -->
    <meta property="og:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta itemprop="image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta name="twitter:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <!-- Video.js CSS -->
    <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <style>
        body {
            background: #0a0a0a;
        }
    
        .hero-gradient {
            background: linear-gradient(135deg, #006747 0%, #004d35 100%);
        }
    
        /* Sembunyikan durasi dan progress bar untuk live stream */
        .video-js .vjs-current-time,
        .video-js .vjs-time-divider,
        .video-js .vjs-duration,
        .video-js .vjs-remaining-time,
        .video-js .vjs-live-control,
        .video-js .vjs-progress-control {
            display: none !important;
        }
    
        /* Style untuk LIVE indicator */
        .video-js .vjs-live-display {
            display: flex !important;
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-left: 10px;
            text-transform: uppercase;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    
        /* Atur ulang posisi kontrol bar */
        .video-js .vjs-control-bar {
            display: flex;
            align-items: center;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7));
        }
    
        .video-js .vjs-play-control {
            order: 1;
        }
    
        .video-js .vjs-volume-panel {
            order: 2;
        }
    
        .video-js .vjs-live-display {
            order: 3;
        }
    
        .video-js .vjs-picture-in-picture-control {
            order: 4;
        }
    
        .video-js .vjs-fullscreen-control {
            order: 5;
            margin-left: auto;
        }
    
        /* Custom styling untuk tombol play besar */
        .video-js .vjs-big-play-button {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            border: 2px solid white;
            width: 70px;
            height: 70px;
            line-height: 70px;
            margin-left: -35px;
            margin-top: -35px;
            backdrop-filter: blur(4px);
        }
    
        .video-js:hover .vjs-big-play-button {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.05);
            transition: all 0.3s ease;
        }
    
        /* Sembunyikan kontrol native browser */
        video::-webkit-media-controls-timeline,
        video::-webkit-media-controls-current-time-display,
        video::-webkit-media-controls-time-remaining-display {
            display: none !important;
        }
    
        /* Animasi untuk badge LIVE kustom */
        @keyframes pulse-ring {
            0% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(220, 38, 38, 0.7);
            }
    
            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px rgba(220, 38, 38, 0);
            }
    
            100% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(220, 38, 38, 0);
            }
        }
    
        .pulse-ring {
            animation: pulse-ring 1.5s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
    </head>
    
    <body class="antialiased text-white min-h-screen">
    
        <!-- Navbar -->
        <x-navbar />
    
        <div class="h-16"></div>
    
        <!-- Player Section -->
        <div class="bg-gradient-to-br from-tv9-primary to-tv9-green-900 py-16">
            <div class="max-w-5xl mx-auto px-4">
                <div class="text-center mb-8">
                    <span
                        class="inline-flex items-center gap-2 bg-red-600/20 text-red-400 text-sm font-bold px-4 py-1.5 rounded-full border border-red-500/30 mb-4">
                        <span class="animate-ping inline-flex h-2 w-2 rounded-full bg-red-500 opacity-75"></span>
                        Siaran Langsung
                    </span>
                    <h1 class="text-3xl md:text-5xl font-extrabold text-white">TV9 Nusantara</h1>
                    <p class="text-emerald-100 mt-3">Siaran 24 Jam Non Stop</p>
                </div>
    
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-black aspect-video group">
                    <!-- Badge LIVE elegan -->
                    <!-- <div
                                                                                                class="absolute top-4 left-4 z-10 bg-gradient-to-r from-red-600 to-red-700 text-white font-bold px-4 py-1.5 rounded-lg text-xs tracking-wider shadow-lg backdrop-blur-sm bg-opacity-90 flex items-center gap-2 border border-red-400/30">
                                                                                                <div class="relative">
                                                                                                    <span
                                                                                                        class="absolute inline-flex h-2.5 w-2.5 rounded-full bg-red-400 opacity-75 animate-ping"></span>
                                                                                                    <span class="relative inline-flex h-2 w-2 rounded-full bg-red-500"></span>
                                                                                                </div>
                                                                                                <span class="uppercase text-[11px] font-semibold">LIVE</span>
                                                                                                <span class="hidden sm:inline-block text-[10px] font-normal text-red-200">Streaming</span>
                                                                </div> -->
    
                    <!-- Efek glassmorphism overlay saat hover -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none rounded-2xl">
                    </div>
    
                    <!-- Video element untuk Video.js -->
                    <video id="my-video" class="video-js vjs-default-skin vjs-big-play-centered w-full h-full" controls
                        preload="auto" playsinline
                        poster="https://via.placeholder.com/1280x720/2d3748/ffffff?text=TV9+Nusantara">
                        <p class="vjs-no-js">
                            Untuk menonton video ini, harap aktifkan JavaScript dan gunakan browser yang mendukung HTML5
                            video.
                        </p>
                    </video>
                </div>
            </div>
        </div>
    
        <!-- Schedule Section (Today) -->
        <div class="bg-white py-20 text-gray-800">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-10">
                    <div>
                        <h2 class="text-3xl lg:text-4xl font-black text-gray-900 mb-2">Jadwal Hari Ini</h2>
                        <p class="text-gray-500 font-medium flex items-center gap-2">
                            <i class="fa-regular fa-calendar-check text-tv9-primary"></i>
                            {{ now()->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                        </p>
                    </div>
                </div>
    
                <div class="bg-white border border-slate-200 rounded-[2rem] overflow-hidden shadow-xl shadow-slate-100/50">
                    @forelse($schedules ?? [] as $prog)
                        @php
                            $catColors = [
                                'Religi' => 'bg-green-50 border-green-200 text-green-700',
                                'Berita' => 'bg-blue-50 border-blue-200 text-blue-700',
                                'Hiburan' => 'bg-orange-50 border-orange-200 text-orange-700',
                                'Drama' => 'bg-purple-50 border-purple-200 text-purple-700',
                                'Film' => 'bg-rose-50 border-rose-200 text-rose-700',
                                'Edukasi' => 'bg-teal-50 border-teal-200 text-teal-700',
                                'Talk Show' => 'bg-yellow-50 border-yellow-200 text-yellow-700',
                                'Anak' => 'bg-sky-50 border-sky-200 text-sky-700',
                                'Olahraga' => 'bg-lime-50 border-lime-200 text-lime-700',
                            ];
                            $badgeClass = $catColors[$prog->category] ?? 'bg-slate-50 border-slate-200 text-slate-500';
                            $currentTime = now()->format('H:i:s');
                            $isLive = ($currentTime >= $prog->start_time && $currentTime <= $prog->end_time);
                        @endphp
    
                        <div
                            class="flex items-center gap-4 lg:gap-8 px-6 lg:px-10 py-5 lg:py-7 transition-all duration-300 {{ $isLive ? 'bg-emerald-50/60' : 'hover:bg-slate-50' }} {{ $loop->last ? '' : 'border-b border-slate-100' }}">
    
                            {{-- Waktu --}}
                            <div class="w-20 lg:w-24 shrink-0">
                                <div class="text-lg lg:text-xl font-black {{ $isLive ? 'text-emerald-700' : 'text-slate-900' }}">
                                    {{ \Carbon\Carbon::parse($prog->start_time)->format('H:i') }}
                                </div>
                                <div class="text-xs lg:text-sm font-medium {{ $isLive ? 'text-emerald-500/70' : 'text-slate-400' }} mt-1">
                                    {{ \Carbon\Carbon::parse($prog->end_time)->format('H:i') }} WIB
                                </div>
                            </div>
    
                            {{-- Divider vertikal --}}
                            <div class="w-1 lg:w-1.5 h-12 lg:h-16 rounded-full {{ $isLive ? 'bg-emerald-400' : 'bg-slate-100' }} shrink-0"></div>
    
                            {{-- Info Program --}}
                            <div class="flex-1 min-w-0">
                                <div class="flex flex-wrap items-center gap-2 mb-2 lg:mb-3">
                                    <span
                                        class="inline-block text-[10px] lg:text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-lg border {{ $badgeClass }}">
                                        {{ $prog->category ?? 'Umum' }}
                                    </span>
                                    @if($isLive)
                                        <span
                                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-[10px] lg:text-xs font-bold bg-red-500 text-white shadow-lg shadow-red-200 uppercase tracking-widest animate-pulse">
                                            <span class="w-2 h-2 rounded-full bg-white animate-ping"></span>
                                            Sedang Berlangsung
                                        </span>
                                    @endif
                                </div>
                                <p
                                    class="text-lg lg:text-2xl font-bold {{ $isLive ? 'text-emerald-900' : 'text-slate-800' }} truncate tracking-tight">
                                    {{ $prog->title }}
                                </p>
                            </div>
    
                        </div>
                    @empty
                        <div class="text-center py-24 text-slate-400 bg-slate-50">
                            <i class="fa-solid fa-calendar-day text-5xl mb-4 block opacity-20"></i>
                            <p class="text-lg font-medium">Belum ada jadwal tayang untuk hari ini.</p>
                        </div>
                    @endforelse
                </div>
                <div class="text-center mt-10">
                    <p class="text-sm text-slate-400 italic">
                        * Jam tayang berdasarkan Waktu Indonesia Barat (WIB)
                    </p>
                </div>
            </div>
        </div>
    
        <x-footer />
    
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const videoElement = document.getElementById('my-video');
                const streamUrl = 'https://5bf7b725107e5.streamlock.net:443/tv9/tv9/playlist.m3u8';

                // Buat overlay "Klik untuk Aktifkan Suara"
                const playerWrapper = videoElement.closest('.relative');
                const unmuteOverlay = document.createElement('div');
                unmuteOverlay.id = 'unmute-overlay';
                unmuteOverlay.innerHTML =
                    `
                                                                                    <div class="flex flex-col items-center gap-2">
                                                                                        <div class="bg-black bg-opacity-50 backdrop-blur-sm rounded-2xl px-6 py-4 flex items-center gap-3 shadow-2xl cursor-pointer hover:scale-105 transition-all duration-200">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2" />
                                                                                            </svg>
                                                                                            <span class="text-white font-bold text-sm tracking-wide">Klik untuk Aktifkan Suara</span>
                                                                                        </div>
                                                                                    </div>
                                                                                                                                                                                        `;
                unmuteOverlay.style.cssText =
                    `
                                                                                                                                                                                            position: absolute;
                                                                                                                                                                                            bottom: 60px;
                                                                                                                                                                                            left: 50%;
                                                                                                                                                                                            transform: translateX(-50%);
                                                                                                                                                                                            z-index: 20;
                                                                                                                                                                                            cursor: pointer;
                                                                                                                                                                                            animation: fadeInUp 0.5s ease forwards;
                                                                                                                                                                                        `;

                // Tambahkan animasi CSS
                const style = document.createElement('style');
                style.textContent =
                    `
                                                                                                                                                                                            @keyframes fadeInUp {
                                                                                                                                                                                                from { opacity: 0; transform: translateX(-50%) translateY(10px); }
                                                                                                                                                                                                to   { opacity: 1; transform: translateX(-50%) translateY(0); }
                                                                                                                                                                                            }
                                                                                                                                                                                            @keyframes fadeOut {
                                                                                                                                                                                                from { opacity: 1; }
                                                                                                                                                                                                to   { opacity: 0; pointer-events: none; }
                                                                                                                                                                                            }
                                                                                                                                                                                        `;
                document.head.appendChild(style);

                function showUnmuteOverlay() {
                    playerWrapper.appendChild(unmuteOverlay);
                }

                function hideUnmuteOverlay() {
                    unmuteOverlay.style.animation = 'fadeOut 0.3s ease forwards';
                    setTimeout(() => unmuteOverlay.remove(), 300);
                }

                // Klik overlay → unmute
                unmuteOverlay.addEventListener('click', function () {
                    player.muted(false);
                    player.volume(1);
                    hideUnmuteOverlay();
                });

                // Juga unmute jika user klik video langsung
                videoElement.addEventListener('click', function () {
                    if (player.muted()) {
                        player.muted(false);
                        player.volume(1);
                        hideUnmuteOverlay();
                    }
                });

                const player = videojs(videoElement, {
                    controls: true,
                    autoplay: true,
                    muted: true,
                    preload: 'auto',
                    fluid: true,
                    liveui: true,
                    controlBar: {
                        currentTimeDisplay: false,
                        timeDivider: false,
                        durationDisplay: false,
                        remainingTimeDisplay: false,
                        liveDisplay: true,
                        progressControl: false,
                        volumePanel: {
                            inline: false
                        },
                        pictureInPictureToggle: true,
                        fullscreenToggle: true,
                        playToggle: true
                    },
                    userActions: {
                        hotkeys: true
                    }
                });

                if (Hls.isSupported()) {
                    const hls = new Hls({
                        enableWorker: true,
                        lowLatencyMode: true,
                        maxBufferLength: 30,
                        liveSyncDurationCount: 3,
                        liveMaxLatencyDurationCount: 7,
                        startPosition: -1
                    });

                    hls.loadSource(streamUrl);
                    hls.attachMedia(videoElement);

                    hls.on(Hls.Events.MANIFEST_PARSED, function () {
                        player.muted(true);
                        player.play()
                            .then(() => showUnmuteOverlay()) // Tampilkan overlay setelah autoplay berhasil
                            .catch(function (error) {
                                console.log('Autoplay prevented:', error);
                                showUnmuteOverlay();
                            });
                    });

                    hls.on(Hls.Events.ERROR, function (event, data) {
                        if (data.fatal) {
                            switch (data.type) {
                                case Hls.ErrorTypes.NETWORK_ERROR:
                                    hls.startLoad();
                                    break;
                                case Hls.ErrorTypes.MEDIA_ERROR:
                                    hls.recoverMediaError();
                                    break;
                            }
                        }
                    });

                    player.hls = hls;

                } else if (videoElement.canPlayType('application/vnd.apple.mpegurl')) {
                    videoElement.src = streamUrl;
                    videoElement.addEventListener('loadedmetadata', function () {
                        player.muted(true);
                        player.play()
                            .then(() => showUnmuteOverlay())
                            .catch(() => showUnmuteOverlay());
                    });
                } else {
                    player.error({
                        code: 4,
                        message: 'Browser Anda tidak mendukung live streaming HLS'
                    });
                }

                player.ready(function () {
                    console.log('Player ready');
                });

                // Sembunyikan overlay jika user unmute lewat tombol volume bawaan
                player.on('volumechange', function () {
                    if (!player.muted() && document.getElementById('unmute-overlay')) {
                        hideUnmuteOverlay();
                    }
        });
    });
    </script>
</body>

</html>