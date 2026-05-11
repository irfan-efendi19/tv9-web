<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
        content="Jelajahi seluruh program unggulan TV9 Nusantara: Kiswah, Hujjah Aswaja, Jurnal9, dan berbagai tayangan Islami modern lainnya. Meningkatkan warisan spiritual & intelektual Nusantara.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="TV9 Nusantara">
    <title>Program | TV9 Nusantara</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="{{ config('app.url') . '/catalog' }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- OG Image / Thumbnail -->
    <meta property="og:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta itemprop="image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta name="twitter:image" content="{{ asset('img/thumbnail.jpg') }}" />

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
    <style>
    body {
        background: #0f172a;
        color: white;
    }

    .card-catalog {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .card-catalog:hover {
        transform: scale(1.05);
        z-index: 10;
    }

    .glass-nav {
        background: rgba(15, 23, 42, 0.8);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }
    </style>
</head>

<body class="antialiased min-h-screen" x-data="{ open: false, selected: {} }">

    <!-- Navbar -->
    <x-navbar />

    <div class="h-16"></div>

    <!-- Hero / Header - Modern Redesign -->
    <div class="relative py-24 overflow-hidden">
        <!-- Animated gradient background -->
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-950/40 via-slate-900 to-slate-950"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=" 60" height="60" viewBox="0 0 60 60"
            xmlns="http://www.w3.org/2000/svg" %3E%3Cg fill="none" fill-rule="evenodd" %3E%3Cg fill="%2322c55e"
            fill-opacity="0.03" %3E%3Cpath
            d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"
            /%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <!-- Badge modern -->
            <div
                class="inline-flex items-center gap-2 bg-emerald-500/10 backdrop-blur-sm border border-emerald-500/30 rounded-full px-4 py-1.5 mb-6 animate-pulse">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-400"></span>
                </span>
                <span class="text-xs font-semibold tracking-wide text-emerald-300 uppercase">KONTEN EKSLUSIF</span>
            </div>

            <h1
                class="text-5xl md:text-7xl font-black tracking-tight mb-6 bg-gradient-to-r from-white via-emerald-200 to-emerald-400 bg-clip-text drop-shadow-2xl">
                Program <span class="text-emerald-400 bg-gradient-to-r from-emerald-400 to-cyan-300 bg-clip-text z-15">Unggulan</span>
            </h1>
            <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed font-medium backdrop-blur-sm">
                Eksplorasi tayangan inspiratif dan mendidik dari <span class="text-emerald-300 font-semibold">TV9
                    Nusantara</span>.
            </p>
        </div>
    </div>
    <!-- Catalog Grid with Modern Design -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
        <!-- Category Filter Chips - Modern -->
        <!-- <div class="flex flex-wrap justify-center gap-3 mb-12">
                                                                                            <button @click="activeFilter = 'all'; filterCatalog()"
                                                                                                :class="activeFilter === 'all' ? 'bg-emerald-600 text-white shadow-lg shadow-emerald-600/30 border-emerald-400' : 'bg-slate-800/60 text-slate-300 border-white/10 hover:bg-slate-700/80'"
                                                                                                class="px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300 border backdrop-blur-sm">
                                                                                                ✨ Semua
                                                                                            </button>
                                                                                            <button @click="activeFilter = 'Religi'; filterCatalog()"
                                                                                                :class="activeFilter === 'Religi' ? 'bg-emerald-600 text-white shadow-lg shadow-emerald-600/30 border-emerald-400' : 'bg-slate-800/60 text-slate-300 border-white/10 hover:bg-slate-700/80'"
                                                                                                class="px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300 border backdrop-blur-sm">
                                                                                                🕌 Religi
                                                                                            </button>
                                                                                            <button @click="activeFilter = 'Edukasi'; filterCatalog()"
                                                                                                :class="activeFilter === 'Edukasi' ? 'bg-emerald-600 text-white shadow-lg shadow-emerald-600/30 border-emerald-400' : 'bg-slate-800/60 text-slate-300 border-white/10 hover:bg-slate-700/80'"
                                                                                                class="px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300 border backdrop-blur-sm">
                                                                                                📚 Edukasi
                                                                                            </button>
                                                                                            <button @click="activeFilter = 'Budaya'; filterCatalog()"
                                                                                                :class="activeFilter === 'Budaya' ? 'bg-emerald-600 text-white shadow-lg shadow-emerald-600/30 border-emerald-400' : 'bg-slate-800/60 text-slate-300 border-white/10 hover:bg-slate-700/80'"
                                                                                                class="px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300 border backdrop-blur-sm">
                                                                                                🎭 Budaya
                                                                                            </button>
                                                                                            <button @click="activeFilter = 'Dokumenter'; filterCatalog()"
                                                                                                :class="activeFilter === 'Dokumenter' ? 'bg-emerald-600 text-white shadow-lg shadow-emerald-600/30 border-emerald-400' : 'bg-slate-800/60 text-slate-300 border-white/10 hover:bg-slate-700/80'"
                                                                                                class="px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300 border backdrop-blur-sm">
                                                                                                🎬 Dokumenter
                                                                                            </button>
                                                                                            <button @click="activeFilter = 'Inspirasi'; filterCatalog()"
                                                                                                :class="activeFilter === 'Inspirasi' ? 'bg-emerald-600 text-white shadow-lg shadow-emerald-600/30 border-emerald-400' : 'bg-slate-800/60 text-slate-300 border-white/10 hover:bg-slate-700/80'"
                                                                                                class="px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300 border backdrop-blur-sm">
                                                                                                💡 Inspirasi
                                                                                            </button>
                                                                                        </div> -->

        <!-- Catalog Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-5 md:gap-6">
            @forelse($catalogs as $item)
                <div @click="selected = {{ json_encode($item) }}; open = true"
                    class="card-catalog group relative bg-gradient-to-br from-slate-800 to-slate-900 rounded-2xl overflow-hidden shadow-2xl border border-white/10 cursor-pointer transition-all duration-500 hover:scale-105 hover:shadow-emerald-500/20 hover:border-emerald-500/50">
                    <div class="aspect-[2/3] relative">
                        @if($item->image_url)
                            <img src="{{ str_starts_with($item->image_url, 'http') ? $item->image_url : '/' . ltrim($item->image_url, '/') }}" 
                                alt="{{ $item->title }}"
                                class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110 group-hover:opacity-30">
                        @else
                            <div
                                class="w-full h-full bg-gradient-to-br from-slate-700 to-slate-800 flex items-center justify-center text-slate-500 font-bold text-center p-4">
                                <div class="text-center">
                                    <svg class="w-12 h-12 mx-auto mb-2 text-emerald-500/30" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                    </svg>
                                    <span class="text-sm">{{ $item->title }}</span>
                                </div>
                            </div>
                        @endif

                        <!-- Modern Overlay dengan Efek Blur -->
                        <div
                            class="absolute inset-0 p-4 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-all duration-500 bg-gradient-to-t from-black/95 via-black/60 to-transparent backdrop-blur-sm">
                            <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <span
                                    class="inline-flex items-center gap-1 text-[10px] uppercase font-black text-emerald-400 mb-2 px-2 py-1 bg-emerald-500/20 rounded-full">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    {{ $item->category ?? 'Program' }}
                                </span>
                                <h3 class="text-sm font-bold text-white mb-2 leading-tight line-clamp-2">{{ $item->title }}
                                </h3>
                            </div>
                        </div>

                        <!-- Badge Trending / New -->
                        <!-- <div
                                                                                                                                                                                                                                                                                                                                                                                                                                        class="absolute top-2 right-2 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-full px-2 py-0.5 text-[9px] font-bold text-white shadow-lg">
                                                                                                                                                                                                                                                                                                                                                                                                                                        {{ $loop->index < 3 ? 'TRENDING' : 'NEW' }}
                                                                                                                                                                                                                                                                                                                                                                                                                                    </div> -->
                    </div>
                </div>
            @empty
                <div class="col-span-full py-20 text-center text-slate-500">
                    <div class="inline-flex flex-col items-center gap-4">
                        <div class="w-24 h-24 rounded-full bg-slate-800 flex items-center justify-center">
                            <svg class="w-12 h-12 text-emerald-500/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                        <p class="text-xl font-medium">Katalog sedang dalam pembaruan.</p>
                        <p class="text-sm text-slate-400">Segera hadir tayangan-tayangan terbaru untuk Anda</p>
                    </div>
                </div>
            @endforelse
        </div>
        <!-- Load More Button -->
        @if(count($catalogs) > 12)
            <div class="text-center mt-12">
                <button
                    class="px-8 py-3 bg-slate-800/80 hover:bg-slate-700 border border-white/10 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-105">
                    Load More Programs
                    <svg class="inline-block w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                    </svg>
                </button>
            </div>
        @endif
    </div>

    <!-- Modal Detail Program - Modern Redesign dengan Animasi Premium -->
    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/90 backdrop-blur-xl"
        style="display: none;">

        <div @click.away="open = false" x-show="open" x-transition:enter="transition ease-out duration-400 transform"
            x-transition:enter-start="scale-95 opacity-0 translate-y-8"
            x-transition:enter-end="scale-100 opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="scale-100 opacity-100 translate-y-0"
            x-transition:leave-end="scale-95 opacity-0 translate-y-8"
            class="bg-gradient-to-br from-slate-900 to-slate-950 border border-white/20 w-full max-w-4xl rounded-3xl overflow-hidden shadow-2xl shadow-emerald-900/30">

            <div class="flex flex-col md:flex-row">
                <!-- Poster in Modal - With Cinematic Effect -->
                <div class="w-full md:w-2/5 relative overflow-hidden group">
                    <template x-if="selected.image_url">
                        <div class="relative h-full">
                            <img :src="selected.image_url.startsWith('http') ? selected.image_url : '/' + selected.image_url.replace(/^\//, '')"
                                :alt="selected.title"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent">
                            </div>
                        </div>
                    </template>
                    <template x-if="!selected.image_url">
                        <div
                            class="w-full h-full flex flex-col items-center justify-center text-slate-600 font-bold text-center p-8 bg-gradient-to-br from-emerald-900/20 to-slate-800">
                            <svg class="w-20 h-20 text-emerald-500/30 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <span class="text-2xl font-black" x-text="selected.title"></span>
                        </div>
                    </template>
                    <!-- Play Button Overlay -->
                    <!-- <div
                        class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 bg-black/50">
                        <div
                            class="w-16 h-16 rounded-full bg-emerald-500 flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div> -->
                </div>

                <!-- Content in Modal - Modern Layout -->
                <div class="w-full md:w-3/5 p-8 relative">
                    <button @click="open = false"
                        class="absolute top-4 right-4 text-slate-400 hover:text-white transition-all duration-300 hover:rotate-90 hover:bg-slate-700 rounded-full p-2 bg-slate-800/50 backdrop-blur-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <!-- Category Badge -->
                    <div class="inline-flex items-center gap-2 bg-emerald-500/20 backdrop-blur-sm rounded-full px-3 py-1 mb-4">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="text-xs font-black text-emerald-400 uppercase tracking-widest"
                            x-text="selected.category || 'Program'"></span>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4 leading-tight" x-text="selected.title"></h2>

                    <!-- Meta Information -->
                    <div class="h-px bg-gradient-to-r from-emerald-500/50 via-white/20 to-transparent mb-6"></div>

                    <!-- Description -->
                    <div class="mb-6">
                        <h3 class="text-sm font-semibold text-emerald-400 mb-2 uppercase tracking-wide">Deskripsi</h3>
                        <p class="text-slate-300 leading-relaxed overflow-y-auto max-h-48 pr-4 custom-scrollbar text-sm"
                            x-text="selected.description || 'Deskripsi program belum tersedia. Namun program ini menyuguhkan tayangan berkualitas dan inspiratif dari TV9 Nusantara. Tetaplah terhubung untuk informasi jadwal tayang selanjutnya.'">
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <!-- <div class="flex gap-3 mt-6">
                        <button @click="open = false"
                            class="flex-1 py-3 bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-500 hover:to-emerald-600 text-white font-bold rounded-xl transition-all duration-300 shadow-lg shadow-emerald-700/30 transform hover:scale-105">
                            ▶ Tonton Sekarang
                        </button>
                        <button @click="open = false"
                            class="px-6 py-3 bg-slate-800 hover:bg-slate-700 text-white font-bold rounded-xl transition-all duration-300 border border-white/10">
                            + Daftar Tonton
                        </button>
                        </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Scripts for Search & Filter -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('catalogApp', () => ({
                open: false,
                selected: null,
                activeFilter: 'all',
                searchQuery: '',
                filteredCatalogs: @json($catalogs),

            init() {
                this.filteredCatalogs = @json($catalogs);
            },

            filterCatalog() {
                let filtered = @json($catalogs);

                // Filter by category
                if (this.activeFilter !== 'all') {
                    filtered = filtered.filter(item => item.category === this.activeFilter);
                }

                // Filter by search query
                if (this.searchQuery.trim() !== '') {
                    const query = this.searchQuery.toLowerCase();
                    filtered = filtered.filter(item =>
                        item.title.toLowerCase().includes(query) ||
                        (item.category && item.category.toLowerCase().includes(query))
                    );
                }

                this.filteredCatalogs = filtered;
            }
        }));
    });
    </script>

    <style>
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.05);
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: rgba(16, 185, 129, 0.5);
        border-radius: 10px;
    }

    /* Smooth Transitions */
    .card-catalog {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    </style>
    <x-footer />
</body>

</html>