<footer class="bg-tv9-dark text-white py-14 px-6">
    <div class="max-w-5xl mx-auto">
        <div class="grid md:grid-cols-4 gap-8 mb-10">
            <div class="md:col-span-1">
                <div class="flex items-center gap-2 mb-4">
                    <!-- <div class="w-8 h-8 rounded-full bg-tv9-gold flex items-center justify-center">
                        <span class="text-tv9-green-dark font-black text-xs">TV9</span>
                    </div> -->
                    <span class="font-bold text-sm">TV9 Nusantara</span>
                </div>
                <p class="text-white/40 text-xs leading-relaxed">Santun Menyejukkan
                </p>
                <div class="flex gap-3 mt-4">
                    <!-- Social Media Icons with Font Awesome -->
                    <a target="_blank" href="https://x.com/TV9NUsantara"
                        class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold/30 hover:text-white transition-all duration-300">
                        <i class="fab fa-x-twitter text-xs"></i>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/tv9nusantara"
                        class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold/30 hover:text-white transition-all duration-300">
                        <i class="fab fa-facebook-f text-xs"></i>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/tv9nusantara/"
                        class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold/30 hover:text-white transition-all duration-300">
                        <i class="fab fa-instagram text-xs"></i>
                    </a>
                    <a target="_blank" href="https://www.youtube.com/@tv9nusantara"
                        class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold/30 hover:text-white transition-all duration-300">
                        <i class="fab fa-youtube text-xs"></i>
                    </a>
                    <a target="_blank" href="https://www.tiktok.com/@tv9nusantara"
                        class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 text-white/70 hover:bg-tv9-gold/30 hover:text-white transition-all duration-300">
                        <i class="fab fa-tiktok text-xs"></i>
                    </a>
                </div>
            </div>

            <div>
                <h5 class="font-semibold text-sm mb-4 text-tv9-gold">Navigasi</h5>
                <ul class="space-y-2 text-white/50 text-xs">
                    <li><a href="{{ route('tentang') }}" class="hover:text-white transition-colors">Tentang Kami</a>
                    </li>
                    <li><a href="{{ route('layanan') }}" class="hover:text-white transition-colors">Layanan</a></li>
                    <li><a href="{{ route('kontak') }}" class="hover:text-white transition-colors">Hubungi Kami</a>
                    </li>
                    <li><a href="{{ route('sitemap') }}" class="hover:text-white transition-colors">Sitemap</a>
                    </li>
                    <li><a href="https://stats.uptimerobot.com/x4trSwe6NX" target="_blank" class="hover:text-white transition-colors">Status
                            Server</a>
                    </li>
                    </li>
                </ul>
            </div>
            <div>
                <h5 class="font-semibold text-sm mb-4 text-tv9-gold">Program</h5>
                <ul class="space-y-2 text-white/50 text-xs">
                    <li><a href="{{ route('berita.index') }}" class="hover:text-white transition-colors">Jurnal
                            9</a></li>
                    <li><a href="{{ route('live') }}" class="hover:text-white transition-colors">Live TV</a></li>
                    <li><a href="{{ route('jadwal') }}" class="hover:text-white transition-colors">Jadwal Acara</a>
                    </li>
                    <li><a href="{{ route('catalog.index') }}" class="hover:text-white transition-colors">Program
                            Unggulan</a></li>
                </ul>
            </div>

            <div>
                <h5 class="font-semibold text-sm mb-4 text-tv9-gold">Kontak</h5>
                <ul class="space-y-2 text-white/50 text-xs">
                    <li>Jl. Raya Darmo No. 96</li>
                    <li>Surabaya, Jawa Timur</li>
                    <li>admin@tv9.co.id</li>
                    <li><a href="tel:+62315620999">031-562-0999</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-white/10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-white/30 text-xs" translate="no">&copy; {{ date('Y') }} TV9 Nusantara. PT. Dakwah
                Inti Media. All rights
                reserved.
            </p>
            <div class="flex gap-4 text-white/30 text-xs">
                <!-- <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                <a href="#" class="hover:text-white transition-colors">Syarat &amp; Ketentuan</a> -->
            </div>
        </div>
    </div>
</footer>