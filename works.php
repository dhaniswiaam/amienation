<?php
require_once(__DIR__ . '/include/header.php');
?>
<section id="works" class="Works-page"><br><br>
	<div>
		<!-- <div class="works-tittle-page">
			<span>Co Produced Works</span>
		</div> -->
		<div class="Services-page fade-section">
			<h1 class="services-page-tittle">Co Produced Works</h1>
		</div>
		<div class="Works1-page fade-section" style="width: 70%; margin-left: 115px; margin-bottom: 30px;">
			<p style="text-align: left; font-size: 20px; color: #968C87; margin-bottom: 20px;">Setiap proyek
				yang kami kerjakan mencerminkan dedikasi terhadap kualitas dan
				ketelitian. Melalui proses yang terstruktur dan tim yang berpengalaman, kami menghasilkan
				animasi yang memenuhi standar industri global.</p>
		</div>
	</div>
</section>
<section class="works_gallery-page fade-section">
	<div class="gallery-page">
		<div class="item-page fade-section">
			<img class="Backlit-page" src="img/Hitoribocchi no Isekai Kouryaku.png" alt="Gambar 1"><br>
			<p>Hitoribocchi no Isekai Kouryaku</p>
		</div>
		<div class="item-page fade-section">
			<img class="Backlit-page" src="img/Shangrila-frontier.png" alt="Gambar 2"><br>
			<p>Shangrila-frontier</p>
		</div>
		<div class="item-page fade-section">
			<img class="Backlit-page" src="img/Izure Saikyou no Renkijutsu Shi.png" alt="Gambar 3"><br>
			<p>Izure Saikyou no Renkijutsu Shi</p>
		</div>
		<div class="item-page fade-section">
			<img class="Backlit-page" src="img/Katainaka Ossan.png" alt="Gambar 4"><br>
			<p>Katainaka Ossan</p>
		</div>
	</div><br><br>
	<div class="gallery2-page fade-section">
		<div class="item-page fade-section">
			<img class="Backlit-page" src="img/work5.png" alt="Gambar 5"><br>
			<p>yofukashi no uta</p>
		</div>
		<div class="item-page fade-section">
			<img class="Backlit-page" src="img/work6.png" alt="Gambar 6"><br>
			<p>ao no orchestra</p>
		</div>
		<div class="item-page fade-section">
			<img class="Backlit-page" src="img/work7.png" alt="Gambar 7"><br>
			<p>bukiyouna senpai</p>
		</div>
</section><br><br>
<!-- <section class="wwu">
	<div>
		<a href="contact.php">
			<H6 class="workwithus fade-section">Partner With Us</H6>
		</a>
		<p class="wwup fade-section">Let’s start building your next great project, get in touch today!
		</p>
	</div>
</section> -->
<script>
	window.onload = function () {
		document.querySelector("section").scrollIntoView({ behavior: "smooth" });
	};
</script>
<?php
require_once(__DIR__ . '/include/footer.php');
?>