 (function() {
      // Data target: Audience share = 21.5% , sisanya 78.5%
      const TARGET_PERCENT = 21.5;
      const REMAINING_PERCENT = 100 - TARGET_PERCENT;
      
      // Elemen untuk teks persentase di tengah donut
      const donutPercentSpan = document.getElementById('donutPercentText');
      
      // Variabel chart dan countUp
      let donutChart = null;
      let countStarted = false;
      let countUpInstance = null;
      
      // Fungsi untuk membuat / menginisialisasi Chart.js donut (doughnut)
      function initChart() {
        const ctx = document.getElementById('audienceDonutChart').getContext('2d');
        
        // Data awal: 0% untuk TV9, 100% untuk sisanya (tapi akan dianimasikan nanti)
        // Chart.js memiliki animasi bawaan saat update data. Kita akan set data awal [0, 100] agar donut dari 0% lalu update ke target.
        donutChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ['TV9 Nusantara', 'Lainnya'],
            datasets: [{
              data: [0, 100], // mulai dari 0% untuk TV9
              backgroundColor: ['#1a5c38', '#e5e7eb'],
              borderWidth: 0,
              borderRadius: 0,
              cutout: '65%',    // membuat efek donut (lubang 65%)
              hoverOffset: 5,
              spacing: 2,
              weight: 1
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: true,
            animation: {
              duration: 0,      // kita akan kontrol animasi manual via update? Biar lebih smooth saat update bertahap, tapi kita akan lakukan satu kali animasi bertahap dari 0 ke target.
              // Tapi lebih baik kita nonaktifkan animasi bawaan agar kita bisa sinkron dengan countUp? Atau gunakan animasi bawaan saja?
              // Agar sinkron dengan countUp, kita akan melakukan update data secara bertahap menggunakan interval? 
              // Lebih baik kita gunakan animasi bawaan Chart.js yang sangat smooth, namun kita ingin durasi 2.5 detik sesuai countUp.
              // Kita set animation.duration = 2500 ms agar Chart.js menampilkan animasi donut secara otomatis.
              // Tapi kita perlu memicu update data setelah chart dibuat, dan biarkan Chart.js menganimasikan perubahan.
              // Ini lebih clean! Jadi kita set animasi aktif, lalu setelah chart siap, kita update dataset ke target.
            },
            plugins: {
              tooltip: { enabled: false },
              legend: { display: false }
            },
            events: [] // nonaktifkan interaksi agar lebih ringan
          }
        });
        
        // Setelah chart dibuat, kita atur opsi animasi dengan durasi yang diinginkan
        donutChart.options.animation = {
          duration: 2500,      // 2.5 detik, sinkron dengan countUp
          easing: 'easeOutQuart',
          animateRotate: true,
          animateScale: false
        };
        
        // Update data ke target (21.5% dan 78.5%) -> Chart.js akan menganimasikan perubahannya secara otomatis
        donutChart.data.datasets[0].data = [TARGET_PERCENT, REMAINING_PERCENT];
        donutChart.update();
      }
      
      // Fungsi untuk memulai animasi counter angka (CountUp) yang sinkron dengan Chart.js
      function startCounterAnimation() {
        if (countStarted) return;
        countStarted = true;
        
        // Reset teks ke 0,0% sementara
        donutPercentSpan.innerText = '0,0%';
        
        // Cek apakah CountUp tersedia
        const CountUpClass = (typeof window.CountUp !== 'undefined') ? window.CountUp : 
                             (window.countUp && window.countUp.CountUp) ? window.countUp.CountUp : null;
        
        if (CountUpClass) {
          // Elemen target untuk CountUp - kita akan gunakan elemen span di tengah donut
          const options = {
            decimalPlaces: 1,
            duration: 2.5,          // sama dengan durasi animasi Chart.js
            useEasing: true,
            useGrouping: false,
            separator: ',',
            decimal: ',',
            suffix: '%'
          };
          
          const counter = new CountUpClass('donutPercentText', TARGET_PERCENT, options);
          
          if (!counter.error) {
            countUpInstance = counter;
            counter.start(() => {
              // Saat counter berjalan, nilai otomatis update di elemen
              // Tidak perlu lakukan apa-apa lagi karena Chart.js sudah berjalan sendiri
              // Tapi kita bisa mengambil nilai current dan sinkronisasi jika diperlukan (opsional)
              // Namun Chart.js sudah menganimasikan potongan donut dengan durasi yang sama.
            });
            
            // Setelah animasi selesai, pastikan teks menunjukkan angka yang benar (21,5%)
            setTimeout(() => {
              const finalText = TARGET_PERCENT.toFixed(1).replace('.', ',');
              if (donutPercentSpan.innerText !== `${finalText}%`) {
                donutPercentSpan.innerText = `${finalText}%`;
              }
              // Berikan efek pulse kecil pada container donut sebagai sentuhan akhir
              const container = document.getElementById('donutContainer');
              if (container) {
                container.style.animation = 'none';
                container.offsetHeight; // reflow
                container.style.animation = 'fadeScale 0.5s ease-out';
                setTimeout(() => {
                  container.style.animation = '';
                }, 500);
              }
            }, 2600);
          } else {
            // Fallback manual jika CountUp error
            fallbackManualCounter();
          }
        } else {
          fallbackManualCounter();
        }
      }
      
      // Fallback manual untuk counter angka
      function fallbackManualCounter() {
        let start = 0;
        const end = TARGET_PERCENT;
        const duration = 2500;
        const stepTime = 16;
        const steps = duration / stepTime;
        const increment = (end - start) / steps;
        let current = start;
        
        const interval = setInterval(() => {
          current += increment;
          if (current >= end) {
            current = end;
            clearInterval(interval);
          }
          const formatted = current.toFixed(1).replace('.', ',');
          donutPercentSpan.innerText = `${formatted}%`;
        }, stepTime);
      }
      
      // ========== INISIALISASI ==========
      // Pertama buat chart dengan data awal (0%) tetapi animasi dinonaktifkan sementara.
      // Kita akan buat chart dengan data [0,100] tanpa animasi (duration 0), lalu setelah chart siap, kita trigger animasi update dengan delay kecil.
      function initializeAndAnimate() {
        const ctx = document.getElementById('audienceDonutChart').getContext('2d');
        
        // Buat chart dengan data awal 0% dan animasi mati dulu
        donutChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ['TV9 Nusantara', 'Lainnya'],
            datasets: [{
              data: [0, 100],
              backgroundColor: ['#1a5c38', '#e5e7eb'],
              borderWidth: 0,
              borderRadius: 0,
              cutout: '65%',
              hoverOffset: 0,
              spacing: 1
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: true,
            animation: {
              duration: 0 // Tidak ada animasi saat inisialisasi
            },
            plugins: {
              tooltip: { enabled: false },
              legend: { display: false }
            },
            events: []
          }
        });
        
        // Setelah chart siap, kita set opsi animasi dengan durasi 2.5 detik
        donutChart.options.animation = {
          duration: 2500,
          easing: 'easeOutQuart',
          animateRotate: true,
          animateScale: false
        };
        
        // Lalu update data ke target (21.5% dan 78.5%) -> Chart.js akan menganimasikan donut secara otomatis
        donutChart.data.datasets[0].data = [TARGET_PERCENT, REMAINING_PERCENT];
        donutChart.update();
        
        // Memulai counter angka bersamaan (sinkron)
        startCounterAnimation();
      }
      
      // Intersection Observer untuk memulai animasi ketika donut terlihat di viewport
      const donutContainer = document.getElementById('donutContainer');
      let animationTriggered = false;
      
      if (donutContainer && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting && !animationTriggered) {
              animationTriggered = true;
              initializeAndAnimate();
              observer.disconnect();
            }
          });
        }, { threshold: 0.3 });
        observer.observe(donutContainer);
      } else {
        // Fallback: langsung jalankan
        initializeAndAnimate();
      }
      
      // Backup: jika dalam 1.5 detik belum ter-trigger (misal observer lambat), jalankan manual
      setTimeout(() => {
        if (!animationTriggered) {
          animationTriggered = true;
          initializeAndAnimate();
        }
      }, 1500);
      
      // Optional: tambahkan efek hover pada card untuk interaksi lebih menarik
      const cards = document.querySelectorAll('.card-segment');
      cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
          card.style.transition = 'all 0.2s ease';
        });
      });
      
    })();