<?php
require_once(__DIR__ . '/include/header.php');
?>

<section class="contact-container-main">
  <div class="Services">
				<span>Contact Us</span>
			</div>
  <!-- Bagian Kiri: MAP -->
  <div class="contact-map-section">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15835.12738559797!2d106.7788112!3d-6.3052099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed0078cf3e15%3A0xdf8a45d63b11eaf9!2sThe%20Sakura%20Green%20Building!5e0!3m2!1sen!2sid!4v1698530720000"
      allowfullscreen=""
      loading="lazy">
    </iframe>
  </div>

  <!-- Bagian Kanan: FORM -->
  <div class="contact-form-section">
    <h2>Hubungi Kami</h2>
    <form action="#" method="post">
      <label for="name">Nama</label>
      <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

      <label for="message">Pesan</label>
      <textarea id="message" name="message" rows="4" placeholder="Tulis pesan Anda..." required></textarea>

      <button type="submit">Kirim Pesan</button>
    </form>
  </div>
</section>
<?php
require_once(__DIR__ . '/include/footer.php');
?>