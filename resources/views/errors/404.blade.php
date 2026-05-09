<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 - Halaman Tidak Ditemukan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato:wght@300;400;600&display=swap"
        rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <style>
    body {
        font-family: 'Lato', sans-serif;
        background-color: #f5f5f0;
    }

    .fade-in {
        animation: fadeIn 0.8s ease forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(16px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn-primary {
        transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
    }

    .btn-primary:hover {
        background-color: #144a2e;
        transform: translateY(-1px);
        box-shadow: 0 4px 16px rgba(26, 92, 58, 0.3);
    }

    .btn-secondary {
        transition: color 0.2s, border-color 0.2s, transform 0.15s;
    }

    .btn-secondary:hover {
        color: #1a5c3a;
        border-color: #1a5c3a;
        transform: translateY(-1px);
    }

    .nav-link {
        transition: color 0.2s;
    }

    .nav-link:hover {
        color: #1a5c3a;
    }
    </style>
</head>

<body class="relative min-h-screen flex flex-col bg-[#f5f5f0] overflow-hidden">
    <!-- Main content -->
    <main class="relative z-10 flex-1 flex flex-col items-center justify-center px-4 py-16 text-center fade-in">

        <!-- Icon -->
        <div class="mb-6">
            <i class="fa-regular fa-circle-xmark text-5xl text-[#b8860b] opacity-80"></i>
        </div>

        <!-- Heading -->
        <h1 class="font-display text-4xl md:text-5xl font-bold text-[#1a1a1a] leading-tight mb-4"
            style="font-family:'Playfair Display',serif">
            Halaman Tidak Ditemukan
        </h1>

        <!-- Subtext -->
        <p class="text-[#666] font-light text-base md:text-lg max-w-sm mb-10 leading-relaxed">
            Sepertinya Anda tersesat di jalur yang salah. Mari kembali
            ke beranda untuk melanjutkan perjalanan Anda.
        </p>

        <!-- Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-3">
            <a href="{{ route('beranda') }}"
                class="btn-primary flex items-center gap-2 bg-[#1a5c3a] text-white text-sm font-semibold px-6 py-3 rounded-md shadow">
                <i class="fa-solid fa-house text-sm"></i>
                Kembali ke Beranda
            </a>
            <a href="{{ route('kontak') }}"
                class="btn-secondary flex items-center gap-2 border border-[#bbb] text-[#555] text-sm font-semibold px-6 py-3 rounded-md bg-white/60 backdrop-blur-sm">
                <i class="fa-regular fa-circle-question text-sm"></i>
                Dukungan Teknis
            </a>
        </div>

    </main>

    <!-- Footer nav -->
    <footer class="border-t border-gray-100 my-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-gray-400 text-sm">
                © 2026 TV9 NUSANTARA - All Rights Reserved
            </p>
        </div>
    </footer>

</body>

</html>