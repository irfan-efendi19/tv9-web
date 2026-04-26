<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TV9 Nusantara adalah televisi Islami modern yang berbasis di Surabaya, Jawa Timur. Dengan tagline
        Santun Menyejukkan, TV9 menyajikan tayangan bernuansa Ahlussunnah Wal Jamaah (Aswaja) yang mengedepankan
        nilai-nilai keislaman, kebangsaan, dan kearifan lokal Nusantara. Tersedia via live streaming, digital platform,
        dan siaran digital terestrial.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="TV9 Nusantara">
    <title>TV9 Nusantara × LP Ma'arif NU</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .hero-bg {
        background: linear-gradient(135deg, #0d2a1a 0%, #1a3a2a 50%, #22502f 100%);
        position: relative;
        overflow: hidden;
    }

    .hero-bg::before {
        content: '';
        position: absolute;
        inset: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .badge-kolaborasi {
        background: rgba(200, 150, 42, 0.15);
        border: 1px solid rgba(200, 150, 42, 0.4);
        color: #d4a843;
    }

    .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
    }

    .section-dark {
        background: linear-gradient(135deg, #0d2a1a 0%, #1a3a2a 100%);
    }

    .video-thumb {
        background: linear-gradient(135deg, #1a2a1a 0%, #2d3a2d 100%);
    }

    .talkshow-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
    }

    .info-pill {
        background: #f5f5f5;
        border-radius: 10px;
    }

    .ppdb-card {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.15);
        transition: background 0.3s, transform 0.3s;
    }

    .ppdb-card:hover {
        background: rgba(255, 255, 255, 0.18);
        transform: translateY(-4px);
    }

    .form-input {
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 10px 14px;
        width: 100%;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 0.875rem;
        color: #374151;
        outline: none;
        transition: border-color 0.2s;
    }

    .form-input:focus {
        border-color: #2d6640;
    }

    .form-label {
        font-size: 0.75rem;
        font-weight: 600;
        color: #6b7280;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 6px;
        display: block;
    }

    .btn-primary {
        background: linear-gradient(135deg, #1a3a2a, #2d6640);
        color: #fff;
        font-weight: 600;
        border-radius: 8px;
        padding: 12px 28px;
        transition: opacity 0.2s, transform 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        border: none;
    }

    .btn-primary:hover {
        opacity: 0.92;
        transform: translateY(-1px);
    }

    .btn-outline {
        background: transparent;
        color: #fff;
        border: 2px solid rgba(255, 255, 255, 0.5);
        font-weight: 600;
        border-radius: 8px;
        padding: 10px 24px;
        transition: all 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-outline:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: #fff;
    }

    .logo-strip {
        border-top: 1px solid #e8e8e8;
        border-bottom: 1px solid #e8e8e8;
    }

    .play-btn {
        width: 56px;
        height: 56px;
        background: rgba(200, 150, 42, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: transform 0.2s, background 0.2s;
    }

    .play-btn:hover {
        transform: scale(1.1);
        background: #c8962a;
    }

    .dot-live {
        width: 10px;
        height: 10px;
        background: #ef4444;
        border-radius: 50%;
        display: inline-block;
        margin-right: 6px;
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1
        }

        50% {
            opacity: 0.4
        }
    }

    .footer-dark {
        background: #0d1f15;
    }

    select.form-input {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 16px;
        padding-right: 36px;
    }
    </style>
</head>

<body class="bg-white" style="font-family:'Plus Jakarta Sans',sans-serif;">

    <!-- ========== HERO ========== -->
    <section class="hero-bg min-h-screen flex items-center relative">
        <div class="max-w-6xl mx-auto px-6 py-20 w-full">
            <div class="flex flex-col lg:flex-row items-center gap-12">

                <!-- Left -->
                <div class="flex-1 z-10">
                    <span
                        class="badge-kolaborasi inline-flex items-center gap-2 text-xs font-semibold px-3 py-1.5 rounded-full mb-6">
                        <i class="fa-solid fa-star text-gold text-[10px]"></i> KOLABORASI EKSKLUSIF
                    </span>
                    <h1 class="font-display text-5xl lg:text-6xl font-black leading-tight text-white mb-3">
                        Generasi Emas
                    </h1>
                    <h1 class="font-display text-5xl lg:text-6xl font-black leading-tight text-white mb-3">
                        Tumbuh Dari
                    </h1>
                    <h1 class="font-display text-5xl lg:text-6xl font-black leading-tight text-amber-500 mb-6">
                        Pendidikan<br>Berkelas
                    </h1>
                    <p class="text-white/70 text-sm leading-relaxed max-w-md mb-8">
                        Membangun peradaban bangsa melalui sinergi media informasi TV9 Nusantara dan penguatan basis
                        pendidikan LP Ma'arif NU yang berhaluan Ahlussunnah wal Jama'ah.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <a class="btn-primary text-sm" href="#form">
                            <i class="fa-solid fa-pen-to-square"></i> Daftar Sekarang
                        </a>
                        <a class="btn-outline text-sm">
                            <i class="fa-solid fa-play"></i> Pelajari Program
                        </a>
                    </div>
                </div>

                <!-- Right illustration -->
                <div class="flex-1 flex justify-center z-10">
                    <div class="relative">
                        <div
                            class="w-80 h-80 lg:w-96 lg:h-96 bg-white/5 border border-white/10 rounded-3xl flex items-center justify-center overflow-hidden">
                            <!-- Students SVG illustration -->
                            <img src="{{ asset('img/event/lpmaarif.jpeg') }}" class="w-full h-full p-4 rounded-3xl object-cover">
                        </div>
                        <div
                            class="absolute -bottom-4 -right-4 w-20 h-20 bg-amber-500 rounded-2xl border border-amber-500 flex items-center justify-center">
                            <i class="fa-solid fa-graduation-cap text-gold text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== LOGO STRIP ========== -->
    <section class="logo-strip py-8 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="grid grid-cols-4 gap-6 text-center">
                <div class="flex flex-col items-center gap-2">
                    <img src="{{ asset('img/logotv9.png') }}" alt="Logo 1" class="h-12">
                </div>
                <div class="flex flex-col items-center gap-2">
                    <img src="{{ asset('img/logotv9.png') }}" alt="Logo 1" class="h-12">
                </div>
                <div class="flex flex-col items-center gap-2">
                    <img src="{{ asset('img/logotv9.png') }}" alt="Logo 1" class="h-12">
                </div>
                <div class="flex flex-col items-center gap-2">
                    <img src="{{ asset('img/logotv9.png') }}" alt="Logo 1" class="h-12">
                </div>
            </div>
        </div>
    </section>

    <!-- ========== TALKSHOW SECTION ========== -->
    <section class="py-20 bg-cream-100">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <!-- Video Thumb -->
                <div
                    class="relative rounded-2xl overflow-hidden video-thumb aspect-video flex items-center justify-center shadow-xl">
                    <img src="{{ asset('img/hero.png') }}" alt="Talkshow TV9 Nusantara - Kopi Darmo">
                </div>
                <!-- Info -->
                <div>
                    <p class="text-xs font-bold text-pine-600 tracking-widest uppercase mb-3">Program Unggulan</p>
                    <h2 class="font-display text-4xl font-black text-gray-900 mb-3">Talkshow TV<br>"Kopi Darmo"</h2>
                    <p class="text-gray-500 italic text-sm mb-6">"Ngobrol Pintar, Syiar &amp; Inspirasi Berkah
                        Nusantara"</p>

                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="info-pill p-4 flex items-start gap-3">
                            <div
                                class="w-9 h-9 bg-pine-800/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-regular fa-calendar text-pine-800 text-sm"></i>
                            </div>
                            <div>
                                <p class="font-bold text-gray-800 text-sm">Senin sampai Sabtu</p>
                                <p class="text-gray-500 text-xs">Jadwal Rutin</p>
                            </div>
                        </div>
                        <div class="info-pill p-4 flex items-start gap-3">
                            <div class="w-9 h-9 bg-gold/15 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fa-regular fa-clock text-gold text-sm"></i>
                            </div>
                            <div>
                                <p class="font-bold text-gray-800 text-sm">16:30 WIB</p>
                                <p class="text-gray-500 text-xs">Live Broadcast</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="dot-live"></span>
                        <span class="text-xs font-semibold text-gray-600">Eksklusif di TV9 Nusantara</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== REFERENSI LEMBAGA ========== -->
    <section class="section-dark py-20">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="font-display text-4xl lg:text-5xl font-black text-white mb-2">
                Referensi Lembaga Pendidikan Aswaja
            </h2>
            <h3 class="font-display text-3xl lg:text-4xl font-black text-gold mb-6">
                Tahun Ajaran 2026/2027
            </h3>
            <p class="text-white/60 text-sm max-w-xl mx-auto mb-12 leading-relaxed">
                Pilihlah Sekolah, Madrasah, dan Kampus di bawah naungan Ma'arif NU untuk menjamin kualitas akademik dan
                spiritual putra-putri Anda sesuai sanad keilmuan pesantren.
            </p>

            <div class="grid md:grid-cols-3 gap-5">
                <!-- PPDB -->
                <div class="ppdb-card rounded-2xl p-8 text-center card-hover cursor-pointer">
                    <div class="w-14 h-14 bg-gold/20 rounded-2xl flex items-center justify-center mx-auto mb-5">
                        <i class="fa-solid fa-graduation-cap text-gold text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-white text-lg mb-2">PPDB</h4>
                    <p class="text-white/50 text-xs leading-relaxed">Penerimaan Peserta Didik Baru (SD/MI, SMP/MTs,
                        SMA/MA)</p>
                    <div class="mt-5">
                        <span class="inline-flex items-center gap-1.5 text-xs text-gold font-semibold">
                            Daftar Sekarang <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
                <!-- PSMB -->
                <div class="ppdb-card rounded-2xl p-8 text-center card-hover cursor-pointer">
                    <div class="w-14 h-14 bg-gold/20 rounded-2xl flex items-center justify-center mx-auto mb-5">
                        <i class="fa-solid fa-mosque text-gold text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-white text-lg mb-2">PSMB</h4>
                    <p class="text-white/50 text-xs leading-relaxed">Penerimaan Santri &amp; Murid Baru untuk Pondok
                        Pesantren</p>
                    <div class="mt-5">
                        <span class="inline-flex items-center gap-1.5 text-xs text-gold font-semibold">
                            Daftar Sekarang <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
                <!-- PMB -->
                <div class="ppdb-card rounded-2xl p-8 text-center card-hover cursor-pointer">
                    <div class="w-14 h-14 bg-gold/20 rounded-2xl flex items-center justify-center mx-auto mb-5">
                        <i class="fa-solid fa-university text-gold text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-white text-lg mb-2">PMB</h4>
                    <p class="text-white/50 text-xs leading-relaxed">Penerimaan Mahasiswa Baru di LPTNU Jawa Timur</p>
                    <div class="mt-5">
                        <span class="inline-flex items-center gap-1.5 text-xs text-gold font-semibold">
                            Daftar Sekarang <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== KERJA SAMA FORM ========== -->
    <section class="py-20 bg-white" id="form">
        <div class="max-w-5xl mx-auto px-6">
            <div class="bg-white rounded-3xl shadow-2xl shadow-gray-100 border border-gray-100 overflow-hidden">
                <div class="grid lg:grid-cols-5">

                    <!-- Left info -->
                    <div class="lg:col-span-2 bg-cream p-10 flex flex-col justify-between">
                        <div>
                            <h2 class="font-display text-3xl font-black text-pine-800 mb-4 leading-tight">
                                Mari Bersinergi Bersama Kami
                            </h2>
                            <p class="text-gray-600 text-sm leading-relaxed mb-8">
                                Buka peluang kerja sama strategis untuk pengembangan institusi pendidikan Anda melalui
                                platform TV9 Nusantara dan jaringan luas LP Ma'arif NU Jawa Timur.
                            </p>

                            <div class="space-y-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 bg-pine-800 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <i class="fa-solid fa-phone text-black text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider">LP
                                            MA'ARIF NU</p>
                                        <p class="font-bold text-gray-800 text-sm">0822 3248 0057</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 bg-gold rounded-xl flex items-center justify-center flex-shrink-0">
                                        <i class="fa-solid fa-phone text-black text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider">LPTNU
                                            JAWA TIMUR</p>
                                        <p class="font-bold text-gray-800 text-sm">0811 3060 299</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <div class="flex gap-3">
                                <a href="#"
                                    class="w-9 h-9 bg-pine-800 rounded-lg flex items-center justify-center text-black text-sm hover:bg-pine-600 transition-colors"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="#"
                                    class="w-9 h-9 bg-pine-800 rounded-lg flex items-center justify-center text-black text-sm hover:bg-pine-600 transition-colors"><i
                                        class="fab fa-youtube"></i></a>
                                <a href="#"
                                    class="w-9 h-9 bg-pine-800 rounded-lg flex items-center justify-center text-black text-sm hover:bg-pine-600 transition-colors"><i
                                        class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Right form -->
                    <div class="lg:col-span-3 p-10">
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" placeholder="Bpk/Ibu Fulan" class="form-input" />
                            </div>
                            <div>
                                <label class="form-label">Instansi</label>
                                <input type="text" placeholder="Nama Sekolah/Lembaga" class="form-input" />
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Keperluan Kerja Sama</label>
                            <select class="form-input">
                                <option>Promosi Media (TV9)</option>
                                <option>Kerja Sama Pendidikan</option>
                                <option>Kolaborasi Program</option>
                                <option>Sponsor &amp; Mitra</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label class="form-label">Pesan Singkat</label>
                            <textarea rows="4" placeholder="Tuliskan rencana kerja sama Anda..."
                                class="form-input resize-none"></textarea>
                        </div>

                        <button class="btn-primary w-full justify-center text-sm">
                            <i class="fa-solid fa-paper-plane"></i> Kirim Permohonan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</body>

</html>