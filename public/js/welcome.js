    document.addEventListener("DOMContentLoaded", () => {
        var video = document.getElementById('video');
        var videoSrc = 'https://5bf7b725107e5.streamlock.net:443/tv9/tv9/playlist.m3u8';
        if (Hls.isSupported()) {
            var hls = new Hls();
            hls.loadSource(videoSrc);
            hls.attachMedia(video);
            hls.on(Hls.Events.MANIFEST_PARSED, function() {
                video.muted = true;
                video.play().catch(() => {});
            });
        } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
            video.src = videoSrc;
            video.addEventListener('loadedmetadata', function() {
                video.muted = true;
                video.play().catch(() => {});
            });
        }
    });


(async function() {
        const loading = document.getElementById('news-loading');
        const grid = document.getElementById('news-grid');
        const errorEl = document.getElementById('news-error');

        const categoryColors = {
            'nusantara': 'bg-emerald-700',
            'religi': 'bg-amber-700',
            'politik': 'bg-teal-700',
            'ekonomi': 'bg-blue-700',
            'olahraga': 'bg-red-700',
        };

        function getCatColor(name) {
            const key = (name || '').toLowerCase();
            for (const k in categoryColors) {
                if (key.includes(k)) return categoryColors[k];
            }
            return 'bg-gray-700';
        }

        function stripHtml(html) {
            return html.replace(/<[^>]*>/g, '').replace(/&hellip;/g, '...').replace(
                    /&amp;/g, '&')
                .replace(
                    /&#8217;/g, "'").trim();
        }

        try {
            const res = await fetch(
                'https://jurnal9.tv/wp-json/wp/v2/posts?per_page=3&_embed=1');
            if (!res.ok) throw new Error('HTTP ' + res.status);
            const posts = await res.json();

            grid.innerHTML = posts.map(post => {
                const title = stripHtml(post.title.rendered);
                const excerpt = stripHtml(post.excerpt.rendered).slice(0, 120) +
                    '...';
                const link = post.link;

                const media = post._embedded?. ['wp:featuredmedia']?. [0];
                const imgUrl = media?.media_details?.sizes?.medium
                    ?.source_url || media
                    ?.source_url ||
                    '';

                const terms = post._embedded?. ['wp:term']?. [0] || [];
                const cat = terms[0]?.name || '';
                const catColor = getCatColor(cat);

                return `
                    <a href="${link}" target="_blank" class="group flex flex-col rounded-2xl overflow-hidden border border-gray-100 hover:shadow-lg transition-shadow duration-200">
                      <div class="relative overflow-hidden h-48 bg-gray-100 flex-shrink-0">
                        ${imgUrl
                            ? `<img src="${imgUrl}" alt="${title}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />`
                            : `<div class="w-full h-full bg-gray-200 flex items-center justify-center"><i class="fa-solid fa-newspaper text-gray-400 text-4xl"></i></div>`
                        }
                        ${cat ? `<span class="absolute top-3 left-3 text-[9px] font-bold tracking-widest uppercase text-white px-2.5 py-1 rounded ${catColor}">${cat}</span>` : ''}
                      </div>
                      <div class="p-5 flex flex-col flex-1">
                        <h3 class="text-gray-900 font-bold text-base leading-snug mb-2 group-hover:text-brand-green transition-colors line-clamp-2">${title}</h3>
                        <p class="text-gray-500 text-base leading-relaxed flex-1 line-clamp-3">${excerpt}</p>
                        <div class="mt-4 flex items-center gap-1 text-base font-semibold text-brand-green group-hover:gap-2 transition-all">
                          Baca Selengkapnya <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        </div>
                      </div>
                    </a>
                  `;
            }).join('');

            loading.classList.add('hidden');
            grid.classList.remove('hidden');
        } catch (e) {
            loading.classList.add('hidden');
            errorEl.classList.remove('hidden');
            console.error('News fetch error:', e);
        }
    })();


    const track = document.getElementById('track');
    const slides = track.querySelectorAll('.slide');
    const dotsEl = document.getElementById('dots');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    let current = 0;
    const total = slides.length;

    slides.forEach((_, i) => {
        const d = document.createElement('button');
        d.className = 'dot' + (i === 0 ? ' active' : '');
        d.setAttribute('aria-label', 'Slide ' + (i + 1));
        d.onclick = () => goTo(i);
        dotsEl.appendChild(d);
    });

    function goTo(n) {
        current = Math.max(0, Math.min(n, total - 1));
        track.style.transform = 'translateX(-' + (current * 100) + '%)';
        dotsEl.querySelectorAll('.dot').forEach((d, i) => d.classList.toggle('active', i ===
            current));
        prevBtn.disabled = current === 0;
        nextBtn.disabled = current === total - 1;
    }

    function move(dir) {
        goTo(current + dir);
    }

    goTo(0);

    let autoTimer = setInterval(() => move(current < total - 1 ? 1 : -(total - 1)), 4500);
    track.parentElement.addEventListener('mouseenter', () => clearInterval(autoTimer));
    track.parentElement.addEventListener('mouseleave', () => {
        autoTimer = setInterval(() => move(current < total - 1 ? 1 : -(total - 1)),
            4500);
    });



     document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.hero-slide-item');
        const dots = document.querySelectorAll('.hero-dot-indicator');
        const prevBtn = document.getElementById('prevSlide');
        const nextBtn = document.getElementById('nextSlide');
        const currentSlideNum = document.getElementById('currentSlideNum');
        let currentSlide = 0;
        let slideInterval;
        const totalSlides = slides.length;
        const autoPlayDelay = 5000; // 5 detik per slide

        // Update slide counter
        function updateCounter() {
            if (currentSlideNum) {
                currentSlideNum.textContent = currentSlide + 1;
            }
        }

        // Function to show specific slide
        function showSlide(index) {
            // Reset all slides
            slides.forEach((slide, i) => {
                slide.style.opacity = '0';
                slide.style.zIndex = '1';
            });
            
            // Reset all dots
            dots.forEach(dot => {
                dot.classList.remove('bg-white');
                dot.classList.add('bg-white/50');
                dot.style.transform = 'scale(1)';
            });
            
            // Show current slide
            if (slides[index]) {
                slides[index].style.opacity = '1';
                slides[index].style.zIndex = '2';
                
                // Add animation to content
                const titles = slides[index].querySelectorAll('h2, p, div.flex, .feature-image');
                titles.forEach(el => {
                    el.style.animation = 'none';
                    setTimeout(() => {
                        el.style.animation = 'fadeInUp 0.8s ease-out forwards';
                    }, 10);
                });
            }
            
            // Update current dot
            if (dots[index]) {
                dots[index].classList.remove('bg-white/50');
                dots[index].classList.add('bg-white');
                dots[index].style.transform = 'scale(1.2)';
            }
            
            currentSlide = index;
            updateCounter();
        }
        
        // Next slide function
        function nextSlide() {
            let nextIndex = currentSlide + 1;
            if (nextIndex >= totalSlides) {
                nextIndex = 0;
            }
            showSlide(nextIndex);
            resetAutoPlay();
        }
        
        // Previous slide function
        function prevSlide() {
            let prevIndex = currentSlide - 1;
            if (prevIndex < 0) {
                prevIndex = totalSlides - 1;
            }
            showSlide(prevIndex);
            resetAutoPlay();
        }
        
        // Auto play function
        function startAutoPlay() {
            slideInterval = setInterval(() => {
                nextSlide();
            }, autoPlayDelay);
        }
        
        function resetAutoPlay() {
            clearInterval(slideInterval);
            startAutoPlay();
        }
        
        function stopAutoPlay() {
            clearInterval(slideInterval);
        }
        
        // Event listeners
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);
        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        
        // Dot click event
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
                resetAutoPlay();
            });
        });
        
        // Pause auto play on hover
        const heroSection = document.getElementById('hero');
        if (heroSection) {
            heroSection.addEventListener('mouseenter', stopAutoPlay);
            heroSection.addEventListener('mouseleave', startAutoPlay);
        }
        
        // Touch/swipe support for mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        heroSection.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });
        
        heroSection.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchEndX - touchStartX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    prevSlide();
                } else {
                    nextSlide();
                }
            }
        }
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
        });
        
        // Set total slides counter
        const totalSlidesNum = document.getElementById('totalSlidesNum');
        if (totalSlidesNum) {
            totalSlidesNum.textContent = totalSlides;
        }
        
        // Show first slide
        showSlide(0);
        
        // Start auto play
        startAutoPlay();
    });
   


    // Portfolio section logic - Responsive
    const portfolioTrack = document.getElementById('portfolioTrack');
    const portfolioTotalCards = portfolioTrack.children.length;
    let portfolioActiveIndex = 0;
    let portfolioCardWidth = 0;
    let portfolioVisibleCount = 0;

    function getPortfolioSettings() {
        const isMobile = window.innerWidth < 640; // sm breakpoint
        if (isMobile) {
            // Mobile: w-80 (320px) + gap-3 (12px)
            return { cardWidth: 320 + 12, visibleCount: 1 };
        } else {
            // Desktop: w-72 (288px) + gap-6 (24px)
            return { cardWidth: 288 + 24, visibleCount: 3 };
        }
    }

    function updatePortfolioSettings() {
        const settings = getPortfolioSettings();
        portfolioCardWidth = settings.cardWidth;
        portfolioVisibleCount = settings.visibleCount;
        portfolioActiveIndex = 0; // Reset index on resize
        portfolioMoveTrack();
    }

    function portfolioMoveTrack() {
        const portfolioMaxIndex = Math.max(0, portfolioTotalCards - portfolioVisibleCount);
        portfolioActiveIndex = Math.max(0, Math.min(portfolioActiveIndex, portfolioMaxIndex));
        portfolioTrack.style.transform = `translateX(-${portfolioActiveIndex * portfolioCardWidth}px)`;
    }

    // Initialize
    updatePortfolioSettings();

    // Event listeners
    document.getElementById('prevBtn').addEventListener('click', () => {
        portfolioActiveIndex--;
        portfolioMoveTrack();
    });
    document.getElementById('nextBtn').addEventListener('click', () => {
        portfolioActiveIndex++;
        portfolioMoveTrack();
    });

    // Swipe gesture for portfolio
    let portfolioTouchStartX = 0;
    let portfolioTouchEndX = 0;

    portfolioTrack.addEventListener('touchstart', (e) => {
        portfolioTouchStartX = e.changedTouches[0].screenX;
    }, false);

    portfolioTrack.addEventListener('touchend', (e) => {
        portfolioTouchEndX = e.changedTouches[0].screenX;
        portfolioHandleSwipe();
    }, false);

    function portfolioHandleSwipe() {
        const swipeThreshold = 50; // minimum distance to trigger swipe
        const diff = portfolioTouchStartX - portfolioTouchEndX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                // Swipe left - show next
                portfolioActiveIndex++;
            } else {
                // Swipe right - show previous
                portfolioActiveIndex--;
            }
            portfolioMoveTrack();
        }
    }

    // Update on window resize
    window.addEventListener('resize', () => {
        updatePortfolioSettings();
    });

    function openVideo(url) {
        window.open(url, '_blank');
    }

    // Schedule Slider Logic
    document.addEventListener('DOMContentLoaded', function() {
        const scheduleSlider = document.getElementById('scheduleSlider');
        if (!scheduleSlider) return;

        const slides = scheduleSlider.querySelectorAll('.schedule-slide');
        const dots = document.querySelectorAll('.schedule-dot-indicator');
        let currentSlide = 0;
        const totalSlides = slides.length;
        
        // Touch/Swipe variables
        let touchStartX = 0;
        let touchEndX = 0;

        // Function to show specific slide
        function showSlide(index) {
            // Clamp index
            index = Math.max(0, Math.min(index, totalSlides - 1));
            
            // Reset all slides
            slides.forEach((slide) => {
                slide.classList.remove('opacity-100', 'block');
                slide.classList.add('opacity-0', 'hidden');
            });
            
            // Reset all dots
            dots.forEach(dot => {
                dot.classList.remove('bg-yellow-600');
                dot.classList.add('bg-gray-300', 'hover:bg-gray-400');
            });
            
            // Show current slide
            if (slides[index]) {
                slides[index].classList.remove('opacity-0', 'hidden');
                slides[index].classList.add('opacity-100', 'block');
            }
            
            // Update current dot
            if (dots[index]) {
                dots[index].classList.remove('bg-gray-300', 'hover:bg-gray-400');
                dots[index].classList.add('bg-yellow-600');
            }
            
            currentSlide = index;
        }
        
        // Next slide function
        function nextSlide() {
            let nextIndex = currentSlide + 1;
            if (nextIndex >= totalSlides) {
                nextIndex = 0;
            }
            showSlide(nextIndex);
        }
        
        // Previous slide function
        function prevSlide() {
            let prevIndex = currentSlide - 1;
            if (prevIndex < 0) {
                prevIndex = totalSlides - 1;
            }
            showSlide(prevIndex);
        }
        
        // Touch start event
        scheduleSlider.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });
        
        // Touch end event
        scheduleSlider.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });
        
        // Handle swipe gesture
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchEndX - touchStartX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe right - go to previous slide
                    prevSlide();
                } else {
                    // Swipe left - go to next slide
                    nextSlide();
                }
            }
        }
        
        // Dot click event
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
            });
        });
        
        // Show first slide
        showSlide(0);
    });



(function () {
    const wrapper = document.getElementById("marquee-wrapper");
    const track = document.getElementById("marquee-track");
    const GAP = 24; // harus sama dengan gap di HTML (24px)
    const SPEED = 0.5; // px per frame, naikkan untuk lebih cepat

    const allItems = Array.from(track.children);
    const totalItems = allItems.length;
    const originalCount = totalItems / 2; // 6 asli, 6 duplikat

    let pos = 0;
    let paused = false;
    let setWidth = 0;

    function calcSetWidth() {
        let w = 0;
        for (let i = 0; i < originalCount; i++) {
            w += allItems[i].offsetWidth + GAP;
        }
        return w;
    }

    wrapper.addEventListener("mouseenter", () => (paused = true));
    wrapper.addEventListener("mouseleave", () => (paused = false));

    function animate() {
        if (!paused) {
            pos -= SPEED;
            // Reset saat sudah geser sejauh 1 set penuh → loop seamless
            if (Math.abs(pos) >= setWidth) {
                pos = 0;
            }
            track.style.transform = `translateX(${pos}px)`;
        }
        requestAnimationFrame(animate);
    }

    // Tunggu gambar load agar offsetWidth akurat
    window.addEventListener("load", function () {
        setWidth = calcSetWidth();
        requestAnimationFrame(animate);
    });
})();