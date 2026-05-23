<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
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
    
        <div class="mb-16 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
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

                $currentDay = now()->dayOfWeekIso;
                $currentTime = now()->format('H:i:s');
                $startOfWeek = now()->startOfWeek();
                $defaultDay = $programs->has($currentDay) ? $currentDay : ($programs->keys()->first() ?? 1);
            @endphp
    
            <div x-data="{ activeDay: {{ $defaultDay }} }" class="space-y-8">
    
                {{-- Tab Navigasi Hari (Horizontal Scroll) --}}
                <div class="flex gap-3 overflow-x-auto pb-6 scrollbar-hide -mx-4 px-4 sm:mx-0 sm:px-0">
                    @foreach($programs as $dayNum => $dayPrograms)
                        <button @click="activeDay = {{ $dayNum }}"
                            :class="activeDay === {{ $dayNum }}
                                                            ? 'bg-emerald-600 text-white border-emerald-600 shadow-xl shadow-emerald-100 scale-105 z-10'
                                                            : 'bg-white text-slate-500 border-slate-200 hover:border-emerald-200 hover:text-emerald-600 hover:bg-emerald-50/30'"
                            class="flex flex-col items-center justify-center p-4 lg:p-5 rounded-3xl border-2 transition-all duration-300 cursor-pointer min-w-[100px] lg:min-w-[120px] group">
                            <span
                                class="text-3xl lg:text-4xl font-black leading-none mb-1 group-hover:scale-110 transition-transform">
                                {{ $startOfWeek->copy()->addDays($dayNum - 1)->format('d') }}
                            </span>
                            <span class="text-[10px] lg:text-xs font-bold uppercase tracking-[0.2em] opacity-70">
                                {{ $dayNames[$dayNum] }}
                            </span>
                        </button>
                    @endforeach
                </div>
    
                {{-- Area Konten Jadwal --}}
                <div class="space-y-6">
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

                        <div x-show="activeDay === {{ $dayNum }}" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0">

                            {{-- Header Hari --}}
                            <div class="flex items-end justify-between mb-8 pb-4 border-b-2 border-slate-100">
                                <div>
                                    <h2 class="text-3xl lg:text-4xl font-black text-slate-900 tracking-tight mb-2">
                                        {{ $dayNames[$dayNum] }}
                                    </h2>
                                    <p class="text-sm lg:text-base text-slate-400 font-medium flex items-center gap-2">
                                        <i class="fa-regular fa-calendar-check"></i>
                                        {{ $startOfWeek->copy()->addDays($dayNum - 1)->locale('id')->isoFormat('D MMMM YYYY') }}
                                    </p>
                                </div>
                                <div
                                    class="hidden sm:block bg-slate-50 border border-slate-200 px-6 py-3 rounded-2xl text-right">
                                    <span
                                        class="block text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-1">Kapasitas
                                        Siaran</span>
                                    <span class="text-xl font-black text-slate-900">{{ count($dayPrograms) }} Tayangan</span>
                                </div>
                            </div>

                            {{-- List Program --}}
                            <div
                                class="bg-white border border-slate-200 rounded-[2rem] overflow-hidden shadow-xl shadow-slate-100/50">
                                @foreach($dayPrograms as $prog)
                                    @php
                                        $badgeClass = $catColors[$prog->category] ?? 'bg-slate-50 border-slate-200 text-slate-500';
                                        $isLive = ($dayNum == $currentDay) && ($currentTime >= $prog->start_time && $currentTime <=
                                            $prog->end_time);
                                    @endphp

                                    <div
                                        class="flex items-center gap-4 lg:gap-8 px-6 lg:px-10 py-5 lg:py-7 transition-all duration-300 {{ $isLive ? 'bg-emerald-50/60' : 'hover:bg-slate-50' }} {{ $loop->last ? '' : 'border-b border-slate-100' }}">

                                        {{-- Waktu --}}
                                        <div class="w-20 lg:w-24 shrink-0">
                                            <div
                                                class="text-lg lg:text-xl font-black {{ $isLive ? 'text-emerald-700' : 'text-slate-900' }}">
                                                {{ \Carbon\Carbon::parse($prog->start_time)->format('H:i') }}
                                            </div>
                                            <div
                                                class="text-xs lg:text-sm font-medium {{ $isLive ? 'text-emerald-500/70' : 'text-slate-400' }} mt-1">
                                                {{ \Carbon\Carbon::parse($prog->end_time)->format('H:i') }} WIB
                                            </div>
                                        </div>

                                        {{-- Divider vertikal --}}
                                        <div
                                            class="w-1 lg:w-1.5 h-12 lg:h-16 rounded-full {{ $isLive ? 'bg-emerald-400' : 'bg-slate-100' }} shrink-0">
                                        </div>

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
                                                        Sedang Tayang
                                                    </span>
                                                @endif
                                            </div>
                                            <p
                                                class="text-lg lg:text-2xl font-bold {{ $isLive ? 'text-emerald-900' : 'text-slate-800' }} truncate tracking-tight">
                                                {{ $prog->title }}
                                            </p>
                                        </div>

                                    </div>
                                @endforeach
                            </div>

                        </div>

                    @empty
                        <div
                            class="text-center py-32 bg-slate-50 rounded-[2rem] border-2 border-dashed border-slate-200 text-slate-400">
                            <i class="fa-solid fa-calendar-day text-5xl mb-4 block opacity-20"></i>
                            <p class="text-lg font-medium">Belum ada jadwal yang diunggah untuk hari ini.</p>
                        </div>
                    @endforelse
                </div>
            </div>
    
    
            {{-- Footer --}}
            <p class="text-center text-xl text-slate-400 italic pt-2 md-16">
                * Jam tayang berdasarkan Waktu Indonesia Barat (WIB)
            </p>
        </div>
        </div>
        </div>
        <x-footer />
</body>

</html>