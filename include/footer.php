<footer class="footer">
 
  <section id="contact" class="Contact">
    <div class="Contact-container">
      <div class="contact-column left-column">
        <a href="index.php"><img class="logo-contact" src="img/Logo.Amienation.Contact.png" alt="Amienation Logo"></a>
      </div>

      <div class="contact-column middle-column">
        <a href="contact.php">
          <h6>CONTACT</h6>
        </a>
        <div class="contact-info">
          <p><img class="icon" src="img/mail.white.webp" alt=""> amienationstudio2023@gmail.com</p>
          <p><img class="icon" src="img/Telephone.png" alt=""> (+62) 21 38821888</p>

          <a href="http://www.instagram.com/amienation_studio">
            <img class="logo-ig-yt" src="img/instagram-logo.png" alt="Instagram">
          </a>
          <a href="#">
            <img class="logo-ig-yt" src="img/Youtube-logo.png" alt="YouTube">
          </a>
        </div>
      </div>

      <div class="contact-column right-column">
        <a href="contact.php">
          <h6>OUR STUDIO</h6>
        </a>
        <p class="address">
          Jl. Nangka Utara Raya No.3D, RT.4/RW.5, Tj. Barat, Kec. Jagakarsa,<br>
          Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12530
        </p>
      </div>
    </div>
  </section>
  <div class="legal">
    <p>&copy; 2025 Amienation Studio | PT Abadi Mulia Indah.
      All Rights Reserved
  </div>
</footer>

<!-- JAVA SCRIPT -->
<script>
  const revealitem = document.querySelectorAll('.item, .Works, .AU-tittle, .About_Amienation, .our-members, .Services .card');

  window.addEventListener('scroll', () => {
    for (const el of revealitem) {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 100) {
        el.classList.add('active');
      }
    }
  });
</script>

<script>
  const track = document.querySelector('.slideimg');
  track.addEventListener('click', () => {
    track.classList.toggle('paused');
  });
</script>

<!-- <script>
            const reveal = document.querySelectorAll('.Works');

            window.addEventListener('scroll', () => {
                for (const el of reveal) {
                    const rect = el.getBoundingClientRect();
                    if (rect.top < window.innerHeight - 100) {
                        el.classList.add('active');
                    }
                }
            });
        </script> -->


<script>
  // Toggle mobile menu
  const toggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('navbar-menu');

  toggle.addEventListener('click', () => {
    menu.classList.toggle('active');
  });

  // Dropdown on mobile tap
  const dropbtn = document.querySelector('.dropbtn');
  const dropdown = document.querySelector('.dropdown-content');

  dropbtn.addEventListener('click', (e) => {
    e.preventDefault();
    dropdown.classList.toggle('show');
  });

  // Close dropdown when clicking outside
  window.addEventListener('click', (e) => {
    if (!e.target.matches('.dropbtn')) {
      document.querySelectorAll('.dropdown-content').forEach(d => d.classList.remove('show'));
    }
  });
</script>

<script>
  // Dropdown toggle for touch / mobile devices
  document.addEventListener('DOMContentLoaded', function () {
    const branchToggle = document.querySelector('.branch-toggle');
    const branchItem = document.querySelector('.nav-item-branch');
    const dropdown = branchItem ? branchItem.querySelector('.dropdown') : null;

    function closeDropdown() {
      if (branchItem) branchItem.classList.remove('open');
      if (branchToggle) branchToggle.setAttribute('aria-expanded', 'false');
    }

    if (branchToggle && dropdown) {
      // Toggle on click (will also work on desktop)
      branchToggle.addEventListener('click', function (e) {
        e.preventDefault();
        branchItem.classList.toggle('open');
        const expanded = branchItem.classList.contains('open');
        branchToggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
      });

      // Close when clicking outside
      document.addEventListener('click', function (e) {
        if (!branchItem.contains(e.target)) {
          closeDropdown();
        }
      });

      // Close on escape key
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeDropdown();
      });
    }
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
/* Demo purposes only */

<script>
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
</script>

<!-- ====== JAVASCRIPT ====== -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const loadingScreen = document.getElementById("loading-screen");
    const hasVisited = sessionStorage.getItem("hasVisited");

    if (!hasVisited) {
      // Tampilkan loading pertama kali
      loadingScreen.classList.remove("hidden"); // pastikan muncul
      setTimeout(() => {
        loadingScreen.classList.add("hidden");
      }, 4000); // durasi tampil 2.5 detik
      sessionStorage.setItem("hasVisited", "true");
    } else {
      // Sudah pernah buka → sembunyikan langsung
      loadingScreen.style.display = "none";
    }
  });

  // Tambahan keamanan kecil: jika loading belum hilang otomatis (misal JS error),
  // sembunyikan paksa setelah 6 detik
  window.addEventListener("load", () => {
    const loadingScreen = document.getElementById("loading-screen");
    setTimeout(() => {
      if (loadingScreen && !loadingScreen.classList.contains("hidden")) {
        loadingScreen.classList.add("hidden");
      }
    }, 6000);
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const slider = tns({
      container: '.my-member-slider', // Kelas container

      // FUNGSI UTAMA
      items: 4, // Berapa banyak slide yang terlihat di desktop
      slideBy: 'page',
      loop: true,
      mouseDrag: true, // Mengaktifkan Drag/Swipe mouse

      // AUTOPLAY (Gerakan Marquee Halus)
      autoplay: true,
      autoplayTimeout: 0, // 💡 Autoplay tanpa jeda (continuous scroll)
      autoplayButtonOutput: false, // Menyembunyikan tombol pause/play
      autoplayHoverPause: true,

      // PENGATURAN SPEED
      speed: 12000,   // super smooth, pelan & stabil
      autoplayTimeout: 0,// Kecepatan pergerakan (semakin besar semakin lambat dan halus)

      // RESPONSIVITAS (Mirip breakpoints Swiper)
      responsive: {
        768: {
          items: 2,
        },
        1024: {
          items: 5,
        }
      }
    });
  });
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll('.fade-section');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, {
        threshold: 0.2
    });

    sections.forEach(section => {
        observer.observe(section);
    });
});
</script>
<script>
  // --- SCRIPT UNTUK TEAM CAROUSEL ---

document.addEventListener("DOMContentLoaded", function() {
    // 1. Ambil elemen yang dibutuhkan
    const slider = document.getElementById('teamSlider');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    // Jarak scroll setiap kali klik (sesuaikan dengan lebar item + gap di CSS)
    // Di CSS: min-width 220px + gap 40px = sekitar 260px.
    const scrollAmount = 260; 

    // 2. Fungsi untuk Tombol Next (Kanan)
    nextBtn.addEventListener('click', () => {
        // Scroll ke kanan (positif)
        slider.scrollLeft += scrollAmount;
    });

    // 3. Fungsi untuk Tombol Prev (Kiri)
    prevBtn.addEventListener('click', () => {
        // Scroll ke kiri (negatif)
        slider.scrollLeft -= scrollAmount;
    });
});
</script>

</body>

</html>