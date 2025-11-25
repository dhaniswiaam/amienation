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

// --- SCRIPT UNTUK MOBILE MENU TOGGLE ---
    const menuToggle = document.getElementById('mobile-menu');
    const navList = document.getElementById('nav-list');

    if (menuToggle && navList) {
        menuToggle.addEventListener('click', () => {
            // Toggle class 'active' pada list menu
            navList.classList.toggle('active');
            
            // Opsional: Ubah icon dari garis tiga ke silang (X)
            const icon = menuToggle.querySelector('i');
            if (navList.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }
	
	// --- SCRIPT UNTUK LIGHTBOX GALLERY ---

function openLightbox(element) {
    var lightbox = document.getElementById("lightbox");
    var lightboxImg = document.getElementById("lightbox-img");
    
    // Ambil src dari gambar yang diklik
    var imgSrc = element.querySelector("img").src;
    
    lightbox.style.display = "block";
    lightboxImg.src = imgSrc;
}

function closeLightbox() {
    var lightbox = document.getElementById("lightbox");
    lightbox.style.display = "none";
}

// Tutup lightbox jika user klik di area hitam (bukan di gambarnya)
window.onclick = function(event) {
    var lightbox = document.getElementById("lightbox");
    if (event.target == lightbox) {
        lightbox.style.display = "none";
    }
}

// --- SCRIPT FORM CONTACT ---
function submitForm(event) {
    event.preventDefault(); // Mencegah reload halaman
    
    // Simulasi pengiriman
    const btn = document.querySelector('.btn-submit');
    const originalText = btn.innerHTML;
    
    btn.innerHTML = 'SENDING... <i class="fas fa-spinner fa-spin"></i>';
    btn.style.opacity = '0.7';
    
    setTimeout(() => {
        alert("Terima kasih! Pesan Anda telah terkirim (Simulasi).");
        btn.innerHTML = originalText;
        btn.style.opacity = '1';
        document.getElementById('contactForm').reset();
    }, 2000);
}