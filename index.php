<?php require 'mvc/controller/ConBriefcase.php';?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Andres Gonzalez</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="images/icon/andres.png">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
		<link rel="stylesheet" href="assets/css/scroll.css"/>
    	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

		<script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
		
	</head>
	<body id="top" x-data="usuario()">

		<!-- Header -->
			<header id="header">
				<div class="content">
					<h1><a href="#">Andres Gonzalez</a></h1>
					<p>Ingeniero De Sistemas<br /> Desarrollador Web BackEnd
					<center></center>
					<ul class="icons">
						<li><a href="https://api.whatsapp.com/send?phone=573124930278" target="_blank" class="icon bi bi-whatsapp"><span class="label">whatsapp</span></a></li>
						<li><a href="https://www.facebook.com/andres.pino.79462815/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/andresgonzalez_2000/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
						<li><a href="https://www.youtube.com/channel/UCk9NgY-4LiBw5qNL7F2jRVw" class="icon bi-youtube" target="_blank"><span class="label">youtube</span></a></li>
						<li><a href="https://github.com/pipe2000-techs" class="icon bi-github" target="_blank"><span class="label">youtube</span></a></li>
					</ul>
					<ul class="actions">
						<li><a href="modules/downloadCv.php" class="button special icon fa-download">Download CV</a></li>
						<li><a href="#one" class="button icon fa-chevron-down scrolly">Conoce Más</a></li>
					</ul>
				</div>
				<div class="image phone"><div class="inner"><img src="images/profile.jpg" alt="" /></div></div>
			</header>

		<!-- One -->

			<section id="one" class="wrapper special">
				<header class="major">
					<h2>¡Hola a todos!</h2> 
				</header>
				<div class="inner">
				<section> 
					<p><?php echo $Profile; ?></p>
				</section>
				</div>
			</section>

			<section id="ones" class="wrapper style2 special">
				<header class="major">
					<h2>Con conocimiento en los siguientes <br> lenguajes y frameworks</h2>
				</header>
				<ul class="icons major">
					
						

							<?php foreach ($dataTechnology as $Technology) {?>
								
									<li><div class="ms-3"><img src="images/<?php echo $Technology['icon'];?>" width="<?php echo $Technology['percent'];?>" alt="<?php echo $Technology['name'];?>" /></div></li>
								
							<?php } ?>
					

				</ul>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper">
				<header class="major">
					<h2>Proyectos</h2>
				</header>	
				<div class="inner alt">

					<div class="swiper swiperT">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">

							<?php foreach ($dataProjects as $project) {?>
								<div class="swiper-slide">
									<section class="spotlight">
										<div class="image"><img src="images/<?php echo $project['image'];?>" alt=""/></div>
										<div class="content">
											<h3><center><?php echo $project['name'];?></center></h3>
											<p><?php echo $project['description'];?></p>
											<ul class="icons">
												<li><a class="icon bi bi-images" data-bs-toggle="modal" data-bs-target="#gallery" x-on:click="gallery(<?php echo $project['id']; ?>)"><span class="label">imagenes</span></a></li>
												<li><a href="<?php echo $project['github'];?>" target="_blank" class="icon fa-github"><span class="label">Github</span></a></li>
												<li><a href="<?php echo $project['link'];?>" target="_blank" class="icon bi bi-link"><span class="label">Link</span></a></li>
											</ul>
										</div>
									</section>
								</div>

							<?php } ?>
						</div>
						<div class="swiper-button-next button-next"></div>
      					<div class="swiper-button-prev button-prev"></div>
						<div class="swiper-pagination"></div>
						<div class="swiper-scrollbar"></div>
						
					</div>
					
				</div>
			</section>

			<section id="email" class="wrapper">
				<div class="inner alt">
					<header class="major">
						<h2>¡Contáctame!</h2>
					</header>
					<form method="post" action="">
						<div class="row uniform">
							<div class="6u 12u$(xsmall)">
								<input type="text" name="name" id="name" value="" placeholder="Nombre" required/>
							</div>
							<div class="6u$ 12u$(xsmall)">
								<input type="email" name="email" id="email" value="" placeholder="Correo" required/>
							</div>
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Ingrese su mensaje" rows="5" required></textarea>
							</div>
							<div class="12u$">
								<center>
									<ul class="actions">
										<li><input type="submit" value="Enviar Mensage" class="special" /></li>
										<li><input type="reset" value="Limpiar" /></li>
									</ul>
								</center>
							</div>
						</div>
					</form>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2 special">
				<header class="major">
					<h2>¡Gracias Por Su Tiempo!</h2>
				</header>
				<ul class="icons">
					<li><a href="https://api.whatsapp.com/send?phone=573124930278" target="_blank" class="icon bi bi-whatsapp"><span class="label">whatsapp</span></a></li>
					<li><a href="https://www.facebook.com/andres.pino.79462815/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/andresgonzalez_2000/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
					<li><a href="https://www.youtube.com/channel/UCk9NgY-4LiBw5qNL7F2jRVw" class="icon bi-youtube" target="_blank"><span class="label">youtube</span></a></li>
					<li><a href="https://github.com/pipe2000-techs" class="icon bi-github" target="_blank"><span class="label">youtube</span></a></li>
				</ul>
				<ul class="actions">
					<li><a href="modules/downloadCv.php" class="button special icon fa-download">Download CV</a></li>
				</ul>
			</section>

			<!-- Modal -->
			<div class="modal fade" id="gallery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Fotos Del Proyecto</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="swiper swiperu">
							<div class="swiper-wrapper">
								<template x-for="image in images" :key="image.idimg">
									<div class="swiper-slide">
										<img :src="'images/gallery/'+image.img" class="img-fluid rounded mx-auto d-block" alt="...">
									</div>
								</template>
							</div>
							<div class="swiper-button-next next"></div>
							<div class="swiper-button-prev prev"></div>
							<div class="swiper-scrollbar scrollbar"></div>
						</div>
						
					</div>
					</div>
				</div>
			</div>
		


		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

		<script>

			const swiper = new Swiper('.swiperu', {
				autoplay: {
					delay: 2500,
					disableOnInteraction: false,
				},
				navigation: {
					nextEl: ".next",
					prevEl: ".prev",
				},
				slidesPerView: 1,
				spaceBetween : 2000,
				scrollbar: {
					el: '.scrollbar',
				}
			});

			const swipert = new Swiper('.swiperT', {
				autoplay: {
					delay: 2500,
					disableOnInteraction: false,
				},
				navigation: {
					nextEl: ".button-next",
					prevEl: ".button-prev",
				},
				pagination: {
					el: ".swiper-pagination",
					clickable: true,
				},
				history: {
					key: "slide",
				},
				slidesPerView: 1,
				spaceBetween : 2000,
				scrollbar: {
					el: '.swiper-scrollbar',
				}
			});

			function usuario(){
				return{

					images:"",
					
					gallery:function(idProjet){
						fetch("mvc/controller/ConProjetGallery.php?idProjet="+idProjet).
						then(response => response.json()).
						then(response => {
							this.images = response;
						})
					}
					
				}
			}

		</script>

	</body>
</html>