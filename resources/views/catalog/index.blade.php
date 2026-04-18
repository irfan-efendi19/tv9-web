<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog Program – TV9 Nusantara</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #0f172a; color: white; }
        .card-catalog { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .card-catalog:hover { transform: scale(1.05); z-index: 10; }
        .glass-nav { background: rgba(15, 23, 42, 0.8); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255,255,255,0.05); }
    </style>
</head>
<body class="antialiased min-h-screen" x-data="{ open: false, selected: {} }">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 px-4 sm:px-8 glass-nav">
        <div class="max-w-7xl mx-auto flex justify-between items-center h-16">
            <div class="flex items-center gap-10">
                <a href="{{ route('beranda') }}" class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg flex items-center justify-center text-white font-bold text-xl shadow-lg" style="background:#775a19;">9</div>
                    <span class="text-white font-bold text-xl tracking-tight hidden sm:block">TV9 Nusantara</span>
                </a>
                <div class="flex gap-7">
                    <a href="{{ route('beranda') }}" class="text-sm font-semibold text-white/70 hover:text-white transition-colors">Beranda</a>
                    <a href="{{ route('live') }}" class="text-sm font-semibold text-white/70 hover:text-white transition-colors">Live</a>
                    <a href="{{ route('jadwal') }}" class="text-sm font-semibold text-white/70 hover:text-white transition-colors">Jadwal</a>
                    <a href="{{ route('catalog.index') }}" class="text-sm font-semibold text-yellow-400 border-b-2 border-yellow-400 pb-0.5">Program</a>
                </div>
            </div>
            <div class="opacity-0 hover:opacity-100 transition-opacity">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-[10px] text-white/20">Dashboard</a>
                @endauth
            </div>
        </div>
    </nav>
    <div class="h-16"></div>

    <!-- Hero / Header -->
    <div class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-emerald-900/20 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">Katalog <span class="text-emerald-400">Program</span></h1>
            <p class="text-slate-400 text-lg md:text-xl max-w-2xl mx-auto">
                Eksplorasi tayangan inspiratif dan mendidik dari TV9 Nusantara.
            </p>
        </div>
    </div>

    <!-- Catalog Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-6">
            @forelse($catalogs as $item)
            <div 
                @click="selected = {{ json_encode($item) }}; open = true"
                class="card-catalog group relative bg-slate-800 rounded-xl overflow-hidden shadow-2xl border border-white/5 cursor-pointer">
                <div class="aspect-[2/3] relative">
                    @if($item->image_url)
                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:opacity-40 transition-opacity">
                    @else
                        <div class="w-full h-full bg-slate-700 flex items-center justify-center text-slate-500 font-bold text-center p-4">
                            {{ $item->title }}
                        </div>
                    @endif
                    
                    <div class="absolute inset-0 p-4 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-opacity bg-gradient-to-t from-black via-black/40 to-transparent">
                        <span class="text-[10px] uppercase font-black text-emerald-400 mb-1">{{ $item->category ?? 'Program' }}</span>
                        <h3 class="text-sm font-bold text-white mb-2 leading-tight">{{ $item->title }}</h3>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center text-slate-500">
                <p class="text-xl font-medium">Katalog sedang dalam pembaruan.</p>
            </div>
            @endforelse
        </div>
    </div>

    <!-- Modal Detail Program -->
    <div 
        x-show="open" 
        x-transition:enter="transition ease-out duration-300" 
        x-transition:enter-start="opacity-0" 
        x-transition:enter-end="opacity-100" 
        x-transition:leave="transition ease-in duration-200" 
        x-transition:leave-start="opacity-100" 
        x-transition:leave-end="opacity-0" 
        class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md"
        style="display: none;">
        
        <div 
            @click.away="open = false" 
            x-show="open"
            x-transition:enter="transition ease-out duration-300 scale-95 opacity-0" 
            x-transition:enter-end="scale-100 opacity-100"
            class="bg-slate-900 border border-white/10 w-full max-w-2xl rounded-3xl overflow-hidden shadow-2xl">
            
            <div class="flex flex-col md:flex-row">
                <!-- Poster in Modal -->
                <div class="w-full md:w-1/2 aspect-[2/3] bg-slate-800">
                    <template x-if="selected.image_url">
                        <img :src="selected.image_url" :alt="selected.title" class="w-full h-full object-cover">
                    </template>
                    <template x-if="!selected.image_url">
                        <div class="w-full h-full flex items-center justify-center text-slate-600 font-bold text-xl" x-text="selected.title"></div>
                    </template>
                </div>

                <!-- Content in Modal -->
                <div class="w-full md:w-1/2 p-8 relative">
                    <button @click="open = false" class="absolute top-4 right-4 text-slate-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>

                    <span class="text-xs font-black text-emerald-400 uppercase tracking-widest mb-2 block" x-text="selected.category || 'Program'"></span>
                    <h2 class="text-3xl font-extrabold text-white mb-6 leading-tight" x-text="selected.title"></h2>
                    
                    <div class="h-px bg-white/10 mb-6"></div>
                    
                    <p class="text-slate-400 leading-relaxed overflow-y-auto max-h-60 pr-4 custom-scrollbar" x-text="selected.description || 'Deskripsi program belum tersedia.'"></p>

                    <div class="mt-8">
                        <button @click="open = false" class="w-full py-3 bg-emerald-700 hover:bg-emerald-600 text-white font-bold rounded-xl transition-all shadow-lg shadow-emerald-700/20">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: rgba(255,255,255,0.05); }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(16, 185, 129, 0.5); border-radius: 10px; }
    </style>
</body>
</html>
