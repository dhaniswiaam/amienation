<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Percobaan Amienation Web</title>
	<link rel="stylesheet" href="amienation-fixed2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
		crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
</head>

<style>
	.box {
		opacity: 0;
		transform: translateY(40px);
		animation: slideFade 1.5s ease-out forwards;
	}

	@keyframes slideFade {
		from {
			opacity: 0;
			transform: translateY(40px);
		}

		to {
			opacity: 1;
			transform: translateY(0);
		}
	}
</style>

 <!-- ====== LOADING SCREEN (Amienation Style) ====== -->
    <div id="loading-screen">
        <div class="loading-logo">
            <img src="img/Logo.Amienation.Contact.png" alt="Amienation Logo">
            <p class="loading-text">Where the <span class="imagination">Imagination</span> meets the <span class="amienation">Amienation</p>
        </div>
        <div class="loading-bar">
            <div class="loading-progress"></div>
        </div>
    </div>



<!-- navbar -->
<body>
	<header class="navbar">
		<div class="navbar-container">
			<div class="navbar-logo">
				<a href="index.php"><img src="img/logo amienation copy 1.png" alt="Amienation Logo"></a>
			</div>
			<nav class="navbar-menu" id="navbar-menu">
				<a href="works.php">WORKS</a>
				<a href="services.php">SERVICES</a>
				<a href="gallery.php" href="#gallery">GALLERY</a>
				<a href="news.php">NEWS</a>
				<a href="about_us.php" href="#About_Us">ABOUT US</a>
				<a href="contact.php">CONTACT</a>

				<!-- <div class="dropdown">
					<button class="dropbtn">BRANCH ▾</button>
					<div class="dropdown-content">
						<a href="#">Amie Udon</a>
						<a href="#">TSGI</a>
						<a href="#">SKY</a>
					</div>
				</div> -->
			</nav>
			<button class="menu-toggle" id="menu-toggle">☰</button>
		</div>
	</header>