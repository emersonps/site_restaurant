<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Restaurante Frango Assado</title>
		<link rel="stylesheet" href="css/geral.css">
		<link rel="stylesheet" href="css/plugins.css">
		<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
		<link rel="stylesheet" href="bower_components/animate.css/animate.css">
		<link rel="stylesheet" href="css/<?php echo $style; ?>.css">
	</head>
	<body>
		<?php include('includes/organisms/menu-responsivo.php'); ?>
		<header>
		 	<div class="container">
				<div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
					<a href="index.html">
						<img src="imagens/topo-logo.png" alt="Logo topo Tag">
					</a>
				</div>

				<div class="links">
					<?php include('includes/organisms/menu.php'); ?>

					<ul class="social">
						<li  class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
							<a target="_blank" href="https://www.facebook.com/restcantodofrangoassado/"><i class="fa fa-facebook"></i></a>
						</li>

						<li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
							<a target="_blank" href="https://www.instagram.com/restaurantecfa/"><i class="fa fa-instagram"></i></a>
						</li>
					</ul>
				</div>

				</div>

				<h1>
					RESTAURANTE<br><strong>CANTO DO FRANGO ASSADO</strong>
				</h1>
				<p class="wow flipInX">
					<?php echo $chamada; ?>
				</p>
			</div>
			<span class="<?php echo $barra; ?>"></span>
		</header>

		<main>