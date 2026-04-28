// ========================================
// MAIN APPLICATION - TV9 NUSANTARA
// ========================================

(function () {
    "use strict";

    // ========================================
    // 1. HLS VIDEO PLAYER
    // ========================================
    function initVideoPlayer() {
        const video = document.getElementById("video");
        if (!video) return;

        const videoSrc =
            "https://5bf7b725107e5.streamlock.net:443/tv9/tv9/playlist.m3u8";

        if (Hls.isSupported()) {
            const hls = new Hls();
            hls.loadSource(videoSrc);
            hls.attachMedia(video);
            hls.on(Hls.Events.MANIFEST_PARSED, function () {
                video.muted = true;
                video.play().catch(() => {});
            });
        } else if (video.canPlayType("application/vnd.apple.mpegurl")) {
            video.src = videoSrc;
            video.addEventListener("loadedmetadata", function () {
                video.muted = true;
                video.play().catch(() => {});
            });
        }
    }

    // ========================================
    // 2. NEWS FETCHER FROM WP API
    // ========================================
    async function fetchNews() {
        const loading = document.getElementById("news-loading");
        const grid = document.getElementById("news-grid");
        const errorEl = document.getElementById("news-error");

        if (!loading || !grid || !errorEl) return;

        const categoryColors = {
            nusantara: "bg-emerald-700",
            religi: "bg-amber-700",
            politik: "bg-teal-700",
            ekonomi: "bg-blue-700",
            olahraga: "bg-red-700",
        };

        function getCatColor(name) {
            const key = (name || "").toLowerCase();
            for (const k in categoryColors) {
                if (key.includes(k)) return categoryColors[k];
            }
            return "bg-gray-700";
        }

        function stripHtml(html) {
            return html
                .replace(/<[^>]*>/g, "")
                .replace(/&hellip;/g, "...")
                .replace(/&amp;/g, "&")
                .replace(/&#8217;/g, "'")
                .trim();
        }

        try {
            const res = await fetch(
                "https://jurnal9.tv/wp-json/wp/v2/posts?per_page=3&_embed=1",
            );
            if (!res.ok) throw new Error("HTTP " + res.status);

            const posts = await res.json();

            grid.innerHTML = posts
                .map((post) => {
                    const title = stripHtml(post.title.rendered);
                    const excerpt =
                        stripHtml(post.excerpt.rendered).slice(0, 120) + "...";
                    const link = post.link;

                    const media = post._embedded?.["wp:featuredmedia"]?.[0];
                    const imgUrl =
                        media?.media_details?.sizes?.medium?.source_url ||
                        media?.source_url ||
                        "";

                    const terms = post._embedded?.["wp:term"]?.[0] || [];
                    const cat = terms[0]?.name || "";
                    const catColor = getCatColor(cat);

                    return `
                    <a href="${link}" target="_blank" class="group flex flex-col rounded-2xl overflow-hidden border border-gray-100 hover:shadow-lg transition-shadow duration-200">
                        <div class="relative overflow-hidden h-48 bg-gray-100 flex-shrink-0">
                            ${
                                imgUrl
                                    ? `<img src="${imgUrl}" alt="${title}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />`
                                    : `<div class="w-full h-full bg-gray-200 flex items-center justify-center"><i class="fa-solid fa-newspaper text-gray-400 text-4xl"></i></div>`
                            }
                            ${cat ? `<span class="absolute top-3 left-3 text-[9px] font-bold tracking-widest uppercase text-white px-2.5 py-1 rounded ${catColor}">${cat}</span>` : ""}
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
                })
                .join("");

            loading.classList.add("hidden");
            grid.classList.remove("hidden");
        } catch (e) {
            loading.classList.add("hidden");
            errorEl.classList.remove("hidden");
            console.error("News fetch error:", e);
        }
    }

    // ========================================
    // 3. HERO SLIDER
    // ========================================
    function initHeroSlider() {
        const slides = document.querySelectorAll(".hero-slide-item");
        const dots = document.querySelectorAll(".hero-dot-indicator");
        const prevBtn = document.getElementById("prevSlide");
        const nextBtn = document.getElementById("nextSlide");
        const heroSection = document.getElementById("hero");

        if (!slides.length) return;

        let currentSlide = 0;
        let slideInterval;
        const totalSlides = slides.length;
        const autoPlayDelay = 5000;

        function showSlide(index) {
            slides.forEach((slide) => {
                slide.style.opacity = "0";
                slide.style.zIndex = "1";
            });

            dots.forEach((dot) => {
                dot.classList.remove("bg-white");
                dot.classList.add("bg-white/50");
                dot.style.transform = "scale(1)";
            });

            if (slides[index]) {
                slides[index].style.opacity = "1";
                slides[index].style.zIndex = "2";

                const animatedElements = slides[index].querySelectorAll(
                    "h2, p, .btn-group, .mobile-poster-wrapper, .mobile-badge",
                );
                animatedElements.forEach((el) => {
                    el.style.animation = "none";
                    setTimeout(() => {
                        el.style.animation = "fadeInUp 0.8s ease-out forwards";
                    }, 10);
                });
            }

            if (dots[index]) {
                dots[index].classList.remove("bg-white/50");
                dots[index].classList.add("bg-white");
                dots[index].style.transform = "scale(1.2)";
            }

            currentSlide = index;
        }

        function nextSlide() {
            const nextIndex = (currentSlide + 1) % totalSlides;
            showSlide(nextIndex);
            resetAutoPlay();
        }

        function prevSlide() {
            const prevIndex = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(prevIndex);
            resetAutoPlay();
        }

        function startAutoPlay() {
            if (slideInterval) clearInterval(slideInterval);
            slideInterval = setInterval(() => nextSlide(), autoPlayDelay);
        }

        function resetAutoPlay() {
            clearInterval(slideInterval);
            startAutoPlay();
        }

        function stopAutoPlay() {
            clearInterval(slideInterval);
        }

        // Event listeners
        if (nextBtn) nextBtn.addEventListener("click", nextSlide);
        if (prevBtn) prevBtn.addEventListener("click", prevSlide);

        dots.forEach((dot, idx) =>
            dot.addEventListener("click", () => {
                showSlide(idx);
                resetAutoPlay();
            }),
        );

        if (heroSection) {
            heroSection.addEventListener("mouseenter", stopAutoPlay);
            heroSection.addEventListener("mouseleave", startAutoPlay);
        }

        // Touch swipe
        let touchStartX = 0;
        heroSection?.addEventListener(
            "touchstart",
            (e) => {
                touchStartX = e.changedTouches[0].screenX;
            },
            { passive: true },
        );

        heroSection?.addEventListener("touchend", (e) => {
            const diff = e.changedTouches[0].screenX - touchStartX;
            if (Math.abs(diff) > 50) {
                diff > 0 ? prevSlide() : nextSlide();
            }
        });

        // Keyboard navigation
        document.addEventListener("keydown", (e) => {
            if (e.key === "ArrowLeft") prevSlide();
            else if (e.key === "ArrowRight") nextSlide();
        });

        // Auto-hide swipe hint
        const swipeHint = document.querySelector(".swipe-hint");
        if (swipeHint) {
            setTimeout(() => {
                swipeHint.style.transition = "opacity 0.5s ease";
                swipeHint.style.opacity = "0";
                setTimeout(() => {
                    if (swipeHint) swipeHint.style.display = "none";
                }, 500);
            }, 4000);
        }

        showSlide(0);
        startAutoPlay();
    }

    // ========================================
    // 4. SLIDER (GENERAL SLIDER - untuk testimonial/dll)
    // ========================================
    function initGeneralSlider() {
        const track = document.getElementById("track");
        if (!track) return;

        const slides = track.querySelectorAll(".slide");
        const dotsEl = document.getElementById("dots");
        const prevBtn = document.getElementById("prev");
        const nextBtn = document.getElementById("next");

        if (!slides.length || !dotsEl) return;

        let current = 0;
        const total = slides.length;

        // Create dots
        slides.forEach((_, i) => {
            const d = document.createElement("button");
            d.className = "dot" + (i === 0 ? " active" : "");
            d.setAttribute("aria-label", "Slide " + (i + 1));
            d.onclick = () => goTo(i);
            dotsEl.appendChild(d);
        });

        function goTo(n) {
            current = Math.max(0, Math.min(n, total - 1));
            track.style.transform = "translateX(-" + current * 100 + "%)";

            document.querySelectorAll("#dots .dot").forEach((d, i) => {
                d.classList.toggle("active", i === current);
            });

            if (prevBtn) prevBtn.disabled = current === 0;
            if (nextBtn) nextBtn.disabled = current === total - 1;
        }

        function move(dir) {
            goTo(current + dir);
        }

        if (prevBtn) prevBtn.addEventListener("click", () => move(-1));
        if (nextBtn) nextBtn.addEventListener("click", () => move(1));

        goTo(0);

        // Auto play
        let autoTimer = setInterval(
            () => move(current < total - 1 ? 1 : -(total - 1)),
            4500,
        );

        const sliderParent = track.parentElement;
        sliderParent?.addEventListener("mouseenter", () =>
            clearInterval(autoTimer),
        );
        sliderParent?.addEventListener("mouseleave", () => {
            autoTimer = setInterval(
                () => move(current < total - 1 ? 1 : -(total - 1)),
                4500,
            );
        });
    }

    // ========================================
    // 5. PORTFOLIO SLIDER (Responsive)
    // ========================================
    function initPortfolioSlider() {
        const portfolioTrack = document.getElementById("portfolioTrack");
        if (!portfolioTrack) return;

        const portfolioTotalCards = portfolioTrack.children.length;
        let portfolioActiveIndex = 0;
        let portfolioCardWidth = 0;
        let portfolioVisibleCount = 0;

        function getPortfolioSettings() {
            const isMobile = window.innerWidth < 640;
            if (isMobile) {
                return { cardWidth: 320 + 12, visibleCount: 1 };
            } else {
                return { cardWidth: 288 + 24, visibleCount: 3 };
            }
        }

        function updatePortfolioSettings() {
            const settings = getPortfolioSettings();
            portfolioCardWidth = settings.cardWidth;
            portfolioVisibleCount = settings.visibleCount;
            portfolioActiveIndex = 0;
            portfolioMoveTrack();
        }

        function portfolioMoveTrack() {
            const portfolioMaxIndex = Math.max(
                0,
                portfolioTotalCards - portfolioVisibleCount,
            );
            portfolioActiveIndex = Math.max(
                0,
                Math.min(portfolioActiveIndex, portfolioMaxIndex),
            );
            portfolioTrack.style.transform = `translateX(-${portfolioActiveIndex * portfolioCardWidth}px)`;
        }

        updatePortfolioSettings();

        // Button events
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");

        if (prevBtn) {
            prevBtn.addEventListener("click", () => {
                portfolioActiveIndex--;
                portfolioMoveTrack();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener("click", () => {
                portfolioActiveIndex++;
                portfolioMoveTrack();
            });
        }

        // Swipe gesture
        let portfolioTouchStartX = 0;

        portfolioTrack.addEventListener(
            "touchstart",
            (e) => {
                portfolioTouchStartX = e.changedTouches[0].screenX;
            },
            false,
        );

        portfolioTrack.addEventListener(
            "touchend",
            (e) => {
                const diff = portfolioTouchStartX - e.changedTouches[0].screenX;
                if (Math.abs(diff) > 50) {
                    if (diff > 0) portfolioActiveIndex++;
                    else portfolioActiveIndex--;
                    portfolioMoveTrack();
                }
            },
            false,
        );

        window.addEventListener("resize", () => updatePortfolioSettings());
    }

    // ========================================
    // 6. SCHEDULE SLIDER
    // ========================================
    function initScheduleSlider() {
        const scheduleSlider = document.getElementById("scheduleSlider");
        if (!scheduleSlider) return;

        const slides = scheduleSlider.querySelectorAll(".schedule-slide");
        const dots = document.querySelectorAll(".schedule-dot-indicator");

        if (!slides.length) return;

        let currentSlide = 0;
        const totalSlides = slides.length;
        let touchStartX = 0;

        function showSlide(index) {
            index = Math.max(0, Math.min(index, totalSlides - 1));

            slides.forEach((slide) => {
                slide.classList.remove("opacity-100", "block");
                slide.classList.add("opacity-0", "hidden");
            });

            dots.forEach((dot) => {
                dot.classList.remove("bg-yellow-600");
                dot.classList.add("bg-gray-300", "hover:bg-gray-400");
            });

            if (slides[index]) {
                slides[index].classList.remove("opacity-0", "hidden");
                slides[index].classList.add("opacity-100", "block");
            }

            if (dots[index]) {
                dots[index].classList.remove(
                    "bg-gray-300",
                    "hover:bg-gray-400",
                );
                dots[index].classList.add("bg-yellow-600");
            }

            currentSlide = index;
        }

        function nextSlide() {
            const nextIndex = (currentSlide + 1) % totalSlides;
            showSlide(nextIndex);
        }

        function prevSlide() {
            const prevIndex = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(prevIndex);
        }

        scheduleSlider.addEventListener("touchstart", (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        scheduleSlider.addEventListener("touchend", (e) => {
            const diff = e.changedTouches[0].screenX - touchStartX;
            if (Math.abs(diff) > 50) {
                diff > 0 ? prevSlide() : nextSlide();
            }
        });

        dots.forEach((dot, index) => {
            dot.addEventListener("click", () => showSlide(index));
        });

        showSlide(0);
    }

    // ========================================
    // 7. MARQUEE ANIMATION
    // ========================================
    function initMarquee() {
        const wrapper = document.getElementById("marquee-wrapper");
        const track = document.getElementById("marquee-track");
        if (!wrapper || !track) return;

        const GAP = 24;
        const SPEED = 0.5;

        const allItems = Array.from(track.children);
        const totalItems = allItems.length;
        const originalCount = totalItems / 2;

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
                if (Math.abs(pos) >= setWidth) {
                    pos = 0;
                }
                track.style.transform = `translateX(${pos}px)`;
            }
            requestAnimationFrame(animate);
        }

        window.addEventListener("load", function () {
            setWidth = calcSetWidth();
            requestAnimationFrame(animate);
        });
    }

    // ========================================
    // 8. OPEN VIDEO FUNCTION (Global)
    // ========================================
    window.openVideo = function (url) {
        window.open(url, "_blank");
    };

    // ========================================
    // INITIALIZE ALL MODULES ON DOM READY
    // ========================================
    document.addEventListener("DOMContentLoaded", () => {
        initVideoPlayer();
        fetchNews();
        initHeroSlider();
        initGeneralSlider();
        initPortfolioSlider();
        initScheduleSlider();
        initMarquee();
    });
})();
