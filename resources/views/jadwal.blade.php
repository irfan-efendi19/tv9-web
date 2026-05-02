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
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="{{ config('app.url') . '/jadwal' }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <!-- OG Image / Thumbnail -->
    <meta property="og:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta itemprop="image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta name="twitter:image" content="{{ asset('img/thumbnail.jpg') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            color: #1e293b;
        }
    
        .day-card {
            border-left: 4px solid #006747;
        }
    </style>
    </head>
    
    <body class="antialiased">
    
        <!-- Navbar -->
        <x-navbar />
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
        <x-footer />
</body>

</html>