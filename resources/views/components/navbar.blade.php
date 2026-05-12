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
                <span class="text-white font-bold text-xl tracking-tight hidden sm:block">TV9
                    Nusantara</span>
            </a>
        </div>

        <!-- Menu Kanan -->
        <div class="flex items-center gap-3 md:gap-7" x-data="{ open: false }">

            <!-- LIVE Button — selalu tampil di navbar (desktop & mobile) -->
            <a href="{{ route('live') }}" translate="no"
                class="flex items-center gap-1.5 px-3 py-1.5 rounded-full text-sm font-bold text-white transition-all duration-200 hover:scale-105 bg-gradient-to-br from-red-600 to-red-700 shadow-[0_0_12px_rgba(220,38,38,0.5)]">
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
                <a href="{{ route('berita.index') }}"
                    class="text-base font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Berita</a>
                <a href="{{ route('tentang') }}"
                    class="text-base font-semibold text-white hover:text-yellow-400 transition-colors whitespace-nowrap">Tentang
                    Kami</a>
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
                        class="text-base font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Beranda</a>
                    <a href="{{ route('jadwal') }}"
                        class="text-base font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Jadwal</a>
                    <a href="{{ route('layanan') }}"
                        class="text-base font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Layanan</a>
                    <a href="{{ route('catalog.index') }}"
                        class="text-base font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Program</a>
                    <a href="{{ route('berita.index') }}"
                        class="text-base font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Berita</a>
                    <a href="{{ route('kontak') }}"
                        class="text-base font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Kontak</a>
                    <a href="{{ route('tentang') }}"
                        class="text-base font-semibold text-white hover:text-yellow-400 transition-colors pl-3 py-1">Tentang
                        Kami</a>
                </div>
            </div>
        </div>
    </div>
</nav>