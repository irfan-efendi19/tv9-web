<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Jurnalisme Maslahat dari Jurnal9 TV9. Informasi terpercaya seputar inspirasi Islami, dinamika pesantren, dan kisah-kisah menyejukkan dari Nusantara. Santun, mencerahkan, dan berintegritas.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="TV9 Nusantara">


    <title>Jurnal 9 | TV9 Nusantara</title>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    
    <link rel="canonical" href="{{ config('app.url') . '/berita' }}">
    <!-- OG Image / Thumbnail -->
    <meta property="og:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta itemprop="image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta name="twitter:image" content="{{ asset('img/thumbnail.jpg') }}" />
    
    <!-- Scripts & Styles -->
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
        .news-gradient {
            background: linear-gradient(135deg, #004d35 0%, #002819 100%);
        }
    </style>
    </head>
    
    <body class="antialiased text-gray-800">
        <x-navbar />
    
        <!-- Spacer for fixed nav -->
        <div class="h-16"></div>
    
        <!-- Header Section -->
        <div class="news-gradient py-12 md:py-20 overflow-hidden relative">
            <div class="absolute -top-20 -right-20 w-80 h-80 rounded-full bg-emerald-500/10 blur-3xl"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-3xl mx-auto">
                    <span
                        class="inline-block py-1 px-3 rounded-full bg-yellow-500/20 text-yellow-500 font-semibold text-sm mb-4 border border-yellow-500/30 uppercase tracking-widest">
                        Update Terkini
                    </span>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">JURNAL9.TV</h1>
                    <p class="text-emerald-50 text-lg">Informasi terbaru seputar berita, inspirasi, dan dinamika masyarakat
                        Indonesia dari
                        Jurnal9 yang menghadirkan jurnalisme maslahat.</p>
                </div>
            </div>
        </div>
    
        <!-- News Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 m-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($news as $post)
                    @php
    // Extract Featured Image from _embedded
    $imageUrl = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ??
        'https://api.dicebear.com/7.x/initials/svg?seed=Jurnal9';
    $excerpt = strip_tags($post['excerpt']['rendered']);
    $excerpt = strlen($excerpt) > 120 ? substr($excerpt, 0, 120) . '...' : $excerpt;
                    @endphp
                    <article
                        class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 group flex flex-col mx-2 my-2">
                        <div class="aspect-video relative overflow-hidden bg-gray-100">
                            <img src="{{ $imageUrl }}" alt="{{ $post['title']['rendered'] }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-4 left-4">
                                <span
                                    class="bg-emerald-700 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Update</span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-1">
                            <h2 class="text-xl font-bold text-gray-900 mb-4 leading-tight line-clamp-2">
                                {!! $post['title']['rendered'] !!}
                            </h2>
                            <p class="text-gray-500 text-sm mb-6 flex-1">
                                {{ $excerpt }}
                            </p>
                            <div
                                class="flex items-center justify-between pt-6 border-t border-gray-50 uppercase tracking-tighter">
                                <span class="text-[10px] font-bold text-gray-400">
                                    {{ \Carbon\Carbon::parse($post['date'])->translatedFormat('d F Y') }}
                                </span>
                                <a href="{{ $post['link'] }}" target="_blank"
                                    class="text-emerald-700 font-bold text-xs hover:text-emerald-900 flex items-center gap-1 group/btn">
                                    BACA ARTIKEL
                                    <svg class="w-4 h-4 transform group-hover/btn:translate-x-1 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
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
            <div class="text-center max-w-3xl mx-auto mt-8 ">
                <a href="https://jurnal9.tv/" target="_blank">
                    <span class="inline-block py-1 px-3 rounded-full bg-yellow-500/20 text-yellow-500 font-semibold text-sm mb-4 border border-yellow-500/30 uppercase tracking-widest 
                       transition-all duration-300 ease-in-out 
                       hover:bg-emerald-500/20 hover:text-emerald-500 hover:border-emerald-500/30 hover:scale-105">
                        LIHAT SEMUA BERITA
                    </span>
                </a>
            </div>
        </div>
    
        <!-- Footer Section -->
        <x-footer />
</body>

</html>