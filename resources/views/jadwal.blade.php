<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal Mingguan – TV9 Nusantara</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="canonical" href="https://tv9.id/jadwal">

@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background: #fdfdfd;
        color: #1e293b;
    }

    .day-card {
        border-left: 4px solid #006747;
    }
</style>
</head>

<body class="antialiased pb-20">

    <!-- Navbar -->
    < <nav class="fixed top-0 w-full z-50 px-4 sm:px-8"
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
            
            <!-- Menu Kanan (Desktop & Mobile) -->
            <div class="relative flex items-center" x-data="{ open: false }">
            
                <!-- Desktop Menu -->
                <div class="hidden md:flex md:flex-row md:items-center md:gap-7">
                    <a href="{{ route('beranda') }}"
                        class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Beranda</a>
                    <a href="{{ route('live') }}"
                        class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">LIVE</a>
                    <a href="{{ route('jadwal') }}"
                        class="text-sm font-semibold text-yellow-400 border-b-2 border-yellow-400 pb-0.5 whitespace-nowrap">Jadwal</a>
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
                            class="text-sm font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">LIVE</a>
                        <a href="{{ route('jadwal') }}"
                            class="text-sm font-semibold text-yellow-400 border-l-2 border-yellow-400 pl-3 py-1">Jadwal</a>
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
                <!-- <div class="opacity-0 hover:opacity-100 transition-opacity">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-[10px] text-white/20">Dashboard</a>
                                @endauth
                            </div> -->
                </div>
                </nav>
                <div class="h-24"></div>
                
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="mb-12 text-center">
                        <h1 class="text-4xl font-extrabold text-slate-900 mb-3">Jadwal Siaran Mingguan</h1>
                        <p class="text-slate-500">Panduan lengkap tayangan TV9 Nusantara selama sepekan.</p>
                    </div>
                
                    @php
                        $dayNames = [
                            1 => 'Senin',
                            2 => 'Selasa',
                            3 => 'Rabu',
                            4 => 'Kamis',
                            5 => 'Jumat',
                            6 => 'Sabtu',
                            7 => 'Minggu'
                        ];
                    @endphp
                
                    <div class="space-y-12">
                        @forelse($programs as $dayNum => $dayPrograms)
                                    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
                                        <div class="bg-slate-50 px-8 py-4 border-b border-slate-100 flex justify-between items-center">
                                            <h2 class="text-xl font-black text-emerald-800 uppercase tracking-widest">{{ $dayNames[$dayNum] }}
                                            </h2>
                                            <span
                                                class="text-xs font-bold text-slate-400 uppercase bg-white px-3 py-1 rounded-full border border-slate-200">{{ count($dayPrograms) }}
                                                Tayangan</span>
                                        </div>
                                        <div class="divide-y divide-slate-50">
                                            @foreach($dayPrograms as $prog)
                                                    <div
                                                        class="px-8 py-6 hover:bg-slate-50 transition-colors flex flex-col md:flex-row md:items-center gap-4 md:gap-10">
                                                        <div class="w-32 shrink-0">
                                                            <span
                                                                class="text-lg font-bold text-slate-900">{{ \Carbon\Carbon::parse($prog->start_time)->format('H:i') }}</span>
                                                            <span class="text-slate-300 mx-2">—</span>
                                                        <span
                                                            class="text-sm font-medium text-slate-400">{{ \Carbon\Carbon::parse($prog->end_time)->format('H:i') }}</span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="text-xs font-black text-emerald-600 uppercase mb-1">
                                                            {{ $prog->category ?? 'Umum' }}
                                    </div>
                                                        <h3 class="text-xl font-bold text-slate-800 leading-tight">{{ $prog->title }}</h3>
                                                    </div>
                                                </div>
                                            @endforeach
                                </div>
                            </div>
                        @empty
                <div class="text-center py-20 text-slate-400">
                    <p>Belum ada jadwal yang diunggah.</p>
                </div>
            @endforelse
        </div>
    </div>
            <footer class="bg-white border-t border-gray-100 py-10 mt-10">
                <div class="max-w-7xl mx-auto px-4 text-center">
                    <p class="text-gray-400 text-sm">
                        &copy; {{ date('Y') }} TV9 NUSANTARA - All Rights Reserved
                    </p>
                </div>
            </footer>
</body>
</html>
