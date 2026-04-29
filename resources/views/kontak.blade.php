<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Hubungi TV9 Nusantara melalui halaman kontak resmi kami. Dapatkan informasi mengenai layanan iklan, kerja sama program, atau sampaikan saran dan kritik Anda untuk tayangan Islami yang Santun Menyejukkan.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="TV9 Nusantara">
    <link rel="canonical" href="{{ config('app.url') . '/kontak' }}">
    <!-- OG Image / Thumbnail -->
    <meta property="og:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta itemprop="image" content="{{ asset('img/thumbnail.jpg') }}" />
    <meta name="twitter:image" content="{{ asset('img/thumbnail.jpg') }}" />
    <title>Kontak | TV9 Nusantara</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- @php
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
    @endif -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
    :root {
        --pine: #0d4a35;
        --pine-dark: #092e20;
        --pine-light: #1a6b4a;
        --gold: #c9933a;
        --cream: #f5f1ea;
        --mist: #eef2ef;
    }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background: var(--cream);
        color: #1f2937;
    }

    /* ── Colour helpers ── */
    .text-pine {
        color: var(--pine);
    }

    .text-gold {
        color: var(--gold);
    }

    .bg-pine {
        background-color: var(--pine);
    }

    .bg-mist {
        background-color: var(--mist);
    }

    .border-pine {
        border-color: var(--pine);
    }

    /* ── Animations ── */
    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(28px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-up {
        animation: fadeUp .65s ease both;
    }

    .delay-1 {
        animation-delay: .10s;
    }

    .delay-2 {
        animation-delay: .22s;
    }

    .delay-3 {
        animation-delay: .34s;
    }

    .delay-4 {
        animation-delay: .46s;
    }

    /* ── Gold underline ── */
    .gold-line::after {
        content: '';
        display: block;
        width: 60px;
        height: 3px;
        background: var(--gold);
        margin-top: 10px;
    }

    /* ── Card hover ── */
    .card-hover {
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .card-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, .12);
    }

    /* ── Form fields ── */
    .field {
        width: 100%;
        border: 1px solid #e5e7eb;
        border-radius: .5rem;
        padding: .625rem 1rem .625rem 2.25rem;
        font-size: .875rem;
        font-family: 'DM Sans', sans-serif;
        color: #374151;
        outline: none;
        transition: border-color .2s, box-shadow .2s;
    }

    .field::placeholder {
        color: #d1d5db;
    }

    .field:focus {
        border-color: var(--pine);
        box-shadow: 0 0 0 3px rgba(13, 74, 53, .10);
    }

    textarea.field {
        padding-left: 1rem;
        resize: none;
    }

    select.field {
        appearance: none;
        background: #fff;
        cursor: pointer;
        color: #6b7280;
    }

    /* ── Buttons ── */
    .btn-send {
        display: inline-flex;
        align-items: center;
        gap: .75rem;
        background: var(--pine);
        color: #fff;
        font-size: .8rem;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
        padding: .875rem 2rem;
        border-radius: .5rem;
        border: none;
        cursor: pointer;
        transition: background .25s, gap .25s, box-shadow .25s;
    }

    .btn-send:hover {
        background: var(--pine-dark);
        gap: 1.25rem;
        box-shadow: 0 8px 24px rgba(13, 74, 53, .30);
    }

    .btn-send i {
        color: var(--gold);
        transition: transform .25s;
    }

    .btn-send:hover i {
        transform: translateX(3px);
    }

    .btn-support {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: .5rem;
        border: 2px solid var(--pine);
        color: var(--pine);
        font-size: .75rem;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
        padding: .75rem 1.25rem;
        border-radius: .5rem;
        text-decoration: none;
        transition: background .25s, color .25s;
    }

    .btn-support:hover {
        background: var(--pine);
        color: #fff;
    }

    /* ── Contact links ── */
    .contact-link {
        color: #fff;
        text-decoration: none;
        font-size: .875rem;
        font-weight: 600;
        transition: color .2s;
    }

    .contact-link:hover {
        color: var(--gold);
    }

    /* ── Icon circle (white-on-pine) ── */
    .icon-circle {
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 9999px;
        background: rgba(255, 255, 255, .10);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    /* ── Social buttons ── */
    .social-btn {
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 9999px;
        background: #fff;
        border: 1px solid #e5e7eb;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--pine);
        font-size: .875rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .06);
        text-decoration: none;
        transition: background .25s, color .25s, border-color .25s;
    }

    .social-btn:hover {
        background: var(--pine);
        color: #fff;
        border-color: var(--pine);
    }

    /* ── Presence card ── */
    .presence-card {
        position: relative;
        overflow: hidden;
        border-radius: 1rem;
        box-shadow: 0 4px 16px rgba(0, 0, 0, .08);
    }

    .presence-overlay {
        position: absolute;
        inset: 0;
        pointer-events: none;
        background: linear-gradient(to top, rgba(9, 46, 32, .85) 30%, transparent 70%);
    }

    .presence-badge {
        position: absolute;
        top: 1rem;
        left: 1rem;
        background: rgba(13, 74, 53, .88);
        backdrop-filter: blur(4px);
        color: #fff;
        font-size: .625rem;
        font-weight: 700;
        letter-spacing: .15em;
        text-transform: uppercase;
        padding: .35rem .75rem;
        border-radius: 9999px;
        display: flex;
        align-items: center;
        gap: .4rem;
    }
    </style>
</head>

<body>

    <!-- Navigation -->
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- Mobile Dropdown (tanpa LIVE) -->
                <div x-show="open" @click.away="open = false" x-cloak
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2"
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

    <!-- ── HERO ─────────────────────────────────────────────────────── -->
    <section class="max-w-7xl mt-20 mx-auto px-6 pt-16 pb-12 lg:px-12 ">
        <p class="text-xs font-semibold uppercase mb-4 fade-up text-pine" style="letter-spacing:.2em">KONTAK</p>

        <div class="flex flex-col lg:flex-row lg:items-end lg:gap-16">
            <h1 class="font-display text-5xl lg:text-6xl font-black leading-tight fade-up delay-1 text-pine">
                Tetap Terhubung dengan Kami, <br />Bersama Lebih Dekat.
            </h1>
            <div class="mt-6 lg:mt-0 pl-5 max-w-xs fade-up delay-2" style="border-left:4px solid var(--gold)">
                <p class="text-gray-600 text-sm leading-relaxed italic">
                    Terbuka untuk semua.
                </p>
            </div>
        </div>
    </section>

    <!-- ── MAIN CONTENT ────────────────────────────────────────────── -->
    <section class="max-w-7xl mx-auto px-6 lg:px-12 pb-20">
        <div class="grid lg:grid-cols-[1fr_380px] gap-8">

            <!-- Form -->
            <div class="bg-white rounded-2xl p-8 lg:p-10 shadow-sm fade-up delay-2">
                <h2 class="font-display text-2xl font-bold text-pine mb-8 gold-line">Kirim Pesan</h2>

                <div class="grid sm:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-gray-400 uppercase mb-2"
                            style="font-size:11px;font-weight:600;letter-spacing:.15em">Nama Lengkap</label>
                        <div class="relative">
                            <i class="fa-regular fa-user absolute text-gray-300 text-sm"
                                style="left:.875rem;top:50%;transform:translateY(-50%)"></i>
                            <input id="f-nama" type="text" placeholder="Fulan" class="field" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-400 uppercase mb-2"
                            style="font-size:11px;font-weight:600;letter-spacing:.15em">Alamat Email</label>
                        <div class="relative">
                            <i class="fa-regular fa-envelope absolute text-gray-300 text-sm"
                                style="left:.875rem;top:50%;transform:translateY(-50%)"></i>
                            <input id="f-email" type="email" placeholder="fulan@example.com" class="field" />
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <label class="block text-gray-400 uppercase mb-2"
                        style="font-size:11px;font-weight:600;letter-spacing:.15em">Keperluan</label>
                    <div class="relative">
                        <i class="fa-regular fa-folder-open absolute text-gray-300 text-sm pointer-events-none"
                            style="left:.875rem;top:50%;transform:translateY(-50%)"></i>
                        <select id="f-keperluan" class="field">
                            <option>Lainnya</option>
                        </select>
                        <i class="fa-solid fa-chevron-down absolute text-gray-300 pointer-events-none"
                            style="right:.875rem;top:50%;transform:translateY(-50%);font-size:.7rem"></i>
                    </div>
                </div>

                <div class="mb-7">
                    <label class="block text-gray-400 uppercase mb-2"
                        style="font-size:11px;font-weight:600;letter-spacing:.15em">Isi Pesan</label>
                    <textarea id="f-pesan" rows="6" placeholder="Bagaimana kami dapat membantu Anda hari ini??"
                        class="field"></textarea>
                </div>

                <button id="btn-send" onclick="kirimPesan()" class="btn-send">
                    Kirim Pesan
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
                <div id="msg-sukses" style="display:none"
                    class="mt-5 p-4 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm font-medium">
                    ✅ Pesan berhasil dikirim! Kami akan segera menghubungi Anda.
                </div>
                <div id="msg-gagal" style="display:none"
                    class="mt-5 p-4 bg-red-50 border border-red-200 rounded-xl text-red-700 text-sm font-medium">
                    ❌ Gagal mengirim pesan. Silakan coba lagi.
                </div>
            </div>

            <!-- Right column -->
            <div class="flex flex-col gap-6">

                <!-- Direct Contact -->
                <div class="bg-pine rounded-2xl p-7 text-white fade-up delay-3">
                    <h3 class="font-display text-xl font-bold mb-6">Kontak Langsung</h3>
                    <div class="flex flex-col gap-5">

                        <div class="flex items-center gap-4">
                            <span class="icon-circle">
                                <i class="fa-solid fa-phone text-sm" style="color:var(--gold)"></i>
                            </span>
                            <div>
                                <p class="uppercase mb-1"
                                    style="font-size:10px;letter-spacing:.15em;color:rgba(255,255,255,.5)">Telepon</p>
                                <a href="tel:+6231829999" class="contact-link">+62 31 829 9999</a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <span class="icon-circle">
                                <i class="fa-regular fa-envelope text-sm" style="color:var(--gold)"></i>
                            </span>
                            <div>
                                <p class="uppercase mb-1"
                                    style="font-size:10px;letter-spacing:.15em;color:rgba(255,255,255,.5)">Email</p>
                                <a href="mailto:redaksi@tv9.co.id" class="contact-link">redaksi@tv9.co.id</a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <span class="icon-circle">
                                <i class="fa-brands fa-whatsapp" style="color:var(--gold);font-size:1rem"></i>
                            </span>
                            <div>
                                <p class="uppercase mb-1"
                                    style="font-size:10px;letter-spacing:.15em;color:rgba(255,255,255,.5)">WhatsApp</p>
                                <a href="https://wa.me/628113333999" class="contact-link">+62 811 3333 999</a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Technical Support -->
                <div class="bg-mist rounded-2xl p-7 border border-gray-200 card-hover fade-up delay-3">
                    <h3 class="font-display text-xl font-bold text-pine mb-2">Dukungan Teknis</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-5">
                        Kami berkomitmen menghadirkan tayangan berkualitas, baik melalui siaran terestrial maupun
                        layanan live streaming. Tim teknis kami bersiaga 24/7 untuk memastikan stabilitas sinyal dan
                        kelancaran aplikasi seluler kami, demi menjaga kenyamanan menonton Anda di mana saja dan kapan
                        saja.
                    </p>
                    <a href="#" class="btn-support">
                        <i class="fa-solid fa-headset"></i>
                        Hubungi Dukungan
                    </a>
                </div>

                <!-- Social -->
                <div class="fade-up delay-4">
                    <p class="uppercase mb-3 text-gray-400" style="font-size:10px;font-weight:600;letter-spacing:.18em">
                        Follow TV9 Nusantara</p>
                    <div class="flex gap-3">
                        <a target="_blank" href="https://www.facebook.com/tv9nusantara" class="social-btn">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/tv9nusantara/" class="social-btn">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a target="_blank" href="https://www.youtube.com/@tv9nusantara" class="social-btn">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a target="_blank" href="https://x.com/TV9NUsantara" class="social-btn">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a target="_blank" href="https://www.tiktok.com/@tv9nusantara" class="social-btn">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="mb-5">
        <iframe style="border: 0; width: 100%; height: 400px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5730295770977!2d112.736189175!3d-7.289322192718097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb957c5b56f7%3A0x1ee6fa80f21a83d3!2sTV9%20Nusantara!5e0!3m2!1sid!2sid!4v1776587954324!5m2!1sid!2sid"
            frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- FOOTER -->
    <!-- Footer Start -->
    <footer class="relative bg-white text-black">
        <div class="relative text-black px-4">
            <div class="max-w-7xl mx-auto py-12 lg:py-16">
                <!-- Flex container for two equal columns -->
                <div class="flex flex-wrap -mx-4">
                    <!-- Left Column: About text and social links (SAME WIDTH as right column) -->
                    <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                        <a class="inline-block mb-4">
                            <h1 class="text-3xl lg:text-4xl font-bold text-black">TV9 Nusantara
                            </h1>
                            <h1 class="text-xl lg:text-xl font-semibold text-black">PT. Dakwah
                                Inti Media
                            </h1>
                        </a>
                        <p class="text-black leading-relaxed mb-4">
                            TV9 Nusantara merupakan stasiun televisi lokal di Kota Surabaya dan
                            menjadi salah satu awal televisi swasta di Indonesia yang memiliki
                            karakter
                            pemirsa
                            komunitas
                            yang bernuansa Islam. TV9 dikelola oleh PT. Dakwah Inti Media,
                            perusahaan yang
                            dimiliki oleh
                            KH. Moh. Hasani Mutawakkil `Alallah, S.H.,M.M., termasuk di dalamnya
                            organisasi
                            sosial
                            keagamaan
                            Nahdlatul 'Ulama (PWNU) Jawa Timur ini diluncurkan pada tanggal 31
                            Januari 2010
                            oleh
                            Soekarwo
                            sebagai bagian dari perayaan ulang tahun Nahdlatul 'Ulama ke-84.
                            Bersiaran di
                            kanal
                            42 UHF,
                            TV9
                            telah memperoleh Izin Penyelenggaraan Penyiaran prinsip tertanggal
                            pada 7 Juli
                            2009
                            dan Izin
                            Penyelenggaraan Penyiaran tetap tertanggal pada 23 Juli 2012 dari
                            Menteri
                            Komunikasi
                            dan
                            Informatika Republik Indonesia untuk melakukan siaran sebagai
                            lembaga penyiaran
                            swasta lokal
                            di
                            Surabaya/Jawa Timur.
                        </p>
                        <div class="flex flex-wrap gap-3 mt-6">
                            <a target="_blank" href="https://x.com/TV9NUsantara"
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-black text-black hover:bg-green-50 hover:bg-green-50 transition-all duration-300">
                                <i class="fab fa-x-twitter"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/tv9nusantara"
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-black text-black hover:bg-green-50 hover:bg-green-50 transition-all duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/tv9nusantara/"
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-black text-black hover:bg-green-50 hover:bg-green-50  transition-all duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a target="_blank" href="https://www.youtube.com/@tv9nusantara"
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-black text-black hover:bg-green-50 hover:bg-green-50 transition-all duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a target="_blank" href="https://www.tiktok.com/@tv9nusantara"
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-black text-black hover:bg-green-50 hover:bg-green-50  transition-all duration-300">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Right Column: Address (SAME WIDTH as left column) -->
                    <div class="w-full lg:w-1/2 px-4">
                        <h4 class="text-3xl lg:text-2xl font-semibold text-black mb-4">Alamat
                        </h4>
                        <div class="flex flex-col space-y-2">
                            <p class="text-black/80 leading-relaxed">
                                Jl. Raya Darmo No.96,<br>
                                Darmo, Kec. Wonokromo,<br>
                                Surabaya, Jawa Timur 60241
                            </p>
                            <h4 class="text-3xl lg:text-2xl font-semibold text-black mb-4 mt-4">
                                Kontak</h4>
                            <div class="flex items-center">
                                <a target="_blank" href="https://www.youtube.com/@tv9nusantara"
                                    class="flex items-center justify-center w-10 h-10 rounded-full border border-black text-black hover:bg-green-50 hover:bg-green-50 transition-all duration-300 mr-2">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </a>
                                <p>Kokokowd</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <!-- COPYRIGHT SECTION (converted to Tailwind) -->
        <!-- Original: .copyright.container-fluid.bg-dark.text-white.border-top.border-secondary.px-0 -->
        <div class="bg-white border-t border-gray-100 py-10">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <p class="text-gray-400 text-base">
                    &copy; {{ date('Y') }} TV9 NUSANTARA - All Rights Reserved
                </p>
            </div>
        </div>
    </footer>
    <script>
        const SCRIPT_URL = 'GANTI_DENGAN_URL_APPS_SCRIPT_ANDA';

        async function kirimPesan() {
            const nama = document.getElementById('f-nama').value.trim();
            const email = document.getElementById('f-email').value.trim();
            const keperluan = document.getElementById('f-keperluan').value;
            const pesan = document.getElementById('f-pesan').value.trim();

            if (!nama || !email || !pesan) {
                alert('Mohon isi semua field yang wajib diisi.');
                return;
            }

            const btn = document.getElementById('btn-send');
            btn.disabled = true;
            btn.innerHTML = 'Mengirim... <i class="fa-solid fa-spinner fa-spin"></i>';

            try {
                await fetch(SCRIPT_URL, {
                    method: 'POST',
                    mode: 'no-cors', // wajib untuk Apps Script
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        nama,
                        email,
                        keperluan,
                        pesan
                    })
                });

                // no-cors tidak return response body, anggap sukses jika tidak error
                document.getElementById('f-nama').value = '';
                document.getElementById('f-email').value = '';
                document.getElementById('f-pesan').value = '';
                document.getElementById('msg-sukses').style.display = 'block';
                setTimeout(() => document.getElementById('msg-sukses').style.display = 'none', 5000);

            } catch (err) {
                document.getElementById('msg-gagal').style.display = 'block';
                setTimeout(() => document.getElementById('msg-gagal').style.display = 'none', 5000);
            }

            btn.disabled = false;
            btn.innerHTML = 'Kirim Pesan <i class="fa-solid fa-arrow-right"></i>';
        }
    </script>
</body>

</html>