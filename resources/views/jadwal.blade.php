<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Jadwal TV9 Nusantara. Tingkatkan warisan spiritual dan intelektual Nusantara melalui tayangan Islami modern. Nderes Kitab, Kiswah, Jurnal9, dan program santun lainnya." />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="TV9 Nusantara">


    <title>Jadwal Acara | TV9 Nusantara</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="{{ config('app.url') . '/jadwal' }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- OG Image / Thumbnail -->
    <meta property="og:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta itemprop="image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta name="twitter:image" content="{{ asset('img/thumbnail.jpg') }}" />

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
                    LIVE
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>
                </button>
    
                <!-- Mobile Dropdown (tanpa LIVE) -->
                <div x-show="open" @click.away="open = false" x-cloak x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2"
                    class="absolute top-full right-0 mt-2 w-48 bg-gray-900 rounded-lg shadow-xl md:hidden z-50">
                    <div class="flex flex-col p-4 space-y-3">
                        <a href="{{ route('beranda') }}"
                            class="text-base font-semibold text-yellow-400 border-l-2 border-yellow-400 pl-3 py-1">Beranda</a>
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
    
        <div x-data="{ activeDay: {{ $programs->keys()->first() ?? 1 }} }" class="space-y-6">
    
            {{-- Tab Navigasi Hari --}}
            <div class="flex gap-2 flex-wrap">
                @foreach($programs as $dayNum => $dayPrograms)
                    <button @click="activeDay = {{ $dayNum }}"
                        :class="activeDay === {{ $dayNum }}
                                                                                                                ? 'bg-emerald-600 text-white border-emerald-600 shadow-sm'
                                                                                                                : 'bg-white text-slate-500 border-slate-200 hover:border-slate-300 hover:text-slate-700'"
                        class="text-xs font-semibold px-4 py-2 rounded-full border transition-all duration-150 cursor-pointer">
                        {{ $dayNames[$dayNum] }}
                    </button>
                @endforeach
            </div>
    
            {{-- Konten Jadwal --}}
            @forelse($programs as $dayNum => $dayPrograms)
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
                @endphp

                <div x-show="activeDay === {{ $dayNum }}" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0">

                    {{-- Header Hari --}}
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-black text-slate-900 tracking-tight">
                            {{ $dayNames[$dayNum] }}
                        </h2>
                        <span
                            class="text-xs font-semibold text-slate-400 bg-slate-50 border border-slate-200 px-3 py-1 rounded-full">
                            {{ count($dayPrograms) }} Tayangan
                        </span>
                    </div>

                    {{-- List Program --}}
                    <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">
                        @foreach($dayPrograms as $prog)
                            @php
                                $badgeClass = $catColors[$prog->category] ?? 'bg-slate-50 border-slate-200 text-slate-500';
                            @endphp

                            <div
                                class="flex items-center gap-4 px-5 py-4 hover:bg-slate-50 transition-colors {{ $loop->last ? '' : 'border-b border-slate-100' }}">

                                {{-- Waktu --}}
                                <div class="w-16 shrink-0 text-right">
                                    <div class="text-sm font-semibold text-slate-900">
                                        {{ \Carbon\Carbon::parse($prog->start_time)->format('H:i') }}
                                    </div>
                                    <div class="text-xs text-slate-400 mt-0.5">
                                        {{ \Carbon\Carbon::parse($prog->end_time)->format('H:i') }}
                                    </div>
                                </div>

                                {{-- Divider vertikal --}}
                                <div class="w-px h-9 bg-slate-200 shrink-0"></div>

                                {{-- Info Program --}}
                                <div class="flex-1 min-w-0">
                                    <span
                                        class="inline-block text-[10px] font-bold uppercase tracking-wide px-2 py-0.5 rounded-full border mb-1 {{ $badgeClass }}">
                                        {{ $prog->category ?? 'Umum' }}
                                    </span>
                                    <p class="text-sm font-semibold text-slate-800 truncate">
                                        {{ $prog->title }}
                                    </p>
                                </div>

                            </div>
                        @endforeach
                    </div>

                </div>

            @empty
                <div class="text-center py-20 text-slate-400">
                    <p class="text-sm">Belum ada jadwal yang diunggah.</p>
                </div>
            @endforelse
    
            {{-- Footer --}}
            <p class="text-center text-xl text-slate-400 italic pt-2">
                * Jam tayang berdasarkan Waktu Indonesia Barat (WIB)
            </p>
        </div>
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