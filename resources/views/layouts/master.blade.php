	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
		<head>
			<!-- Mobile Specific Meta -->
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!-- Favicon-->
			<link rel="shortcut icon" href="images/fav.png">
			<!-- Author Meta -->
			<meta name="author" content="Colorlib">
			<!-- Meta Description -->
			<meta name="description" content="">
			<!-- Meta Keyword -->
			<meta name="keywords" content="">
			<!-- meta character set -->
			<meta charset="UTF-8">
			<!-- favicon set -->
			<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
			<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
			<link rel="manifest" href="images/favicon/site.webmanifest">
			<link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
			<meta name="msapplication-TileColor" content="#da532c">
			<meta name="theme-color" content="#ffffff">
			<!-- Site Title -->
			<title>Cirugía Plástica</title>

			<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


				<!--
				CSS
				============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
			<style>
				#map {
					height: 300px;
					width: 100%;
				}
			</style>
		</head>
		<body>
			<!-- Start Info Area -->
			<div class="header-top d-flex clear justify-content-between align-items-center info-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-0 info-header">
							<p> Antonio Bellet 143 oficina 408, Providencia, Región Metropolitana. </p>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-0 text-right info-header">
							<p> Horario: <span> Lun a Vie: 9 a 20 hrs, Sáb: 9 a 14 hrs. </span>  Teléfonos:  <span> +56932602113 / +56956682487 </span> </p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Info Area -->

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="{{ route('inicio')}}"><img src="images/logo_cm.png" height="50px" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">	
									<a href="{{ route('inicio')}}#home">Inicio</a>
									<a href="{{ route('inicio')}}#dramora">Dra Mora</a>
									<a href="{{ route('inicio')}}#procedimientos">Procedimientos</a>
									<a href="{{ route('promociones')}}">Promociones</a>
									<a href="{{ route('faqs')}}">Preguntas Frecuentes</a>
									<a href="{{ route('contacto')}}">Contacto</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
				<!-- Chatra {literal} -->
				<script>
				    (function(d, w, c) {
				        w.ChatraID = 'aLE7fGyn9cEA94fyn';
				        var s = d.createElement('script');
				        w[c] = w[c] || function() {
				            (w[c].q = w[c].q || []).push(arguments);
				        };
				        s.async = true;
				        s.src = 'https://call.chatra.io/chatra.js';
				        if (d.head) d.head.appendChild(s);
				    })(document, window, 'Chatra');
				</script>
				<!-- /Chatra {/literal} -->
			</header>
			<!-- End Header Area -->

			@yield('contenido')

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2  col-md-6">
							<div class="single-footer-widget">															
								<img class="img-fluid" src="images/logo2.png" alt="">
								<img class="img-fluid" src="images/webpay.png" alt="">
							</div>
						</div>
						<div class="col-lg-2  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6>CMPLASTICA</h6>
								<ul class="footer-nav">
									<li><a href="{{ route('inicio')}}#home">Inicio</a></li>
									<li><a href="{{ route('inicio')}}#dramora">Dra Mora</a></li>
									<li><a href="{{ route('inicio')}}#procedimientos">Procedimientos</a></li>
									<li><a href="{{ route('promociones')}}">Promociones</a></li>
									<li><a href="{{ route('faqs')}}">Preguntas Frecuentes</a></li>
									<li><a href="#">Contacto</a></li>
								</ul>	
							</div>
						</div>
						<div class="col-lg-2  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6>PROCEDIMIENTOS</h6>
								<ul class="footer-nav">
									<li><a href="#">Cirugía Estética</a></li>
									<li><a href="#">Cirugía Reparadora</a></li>
									<li><a href="#">Mínimamente Invasiva</a></li>
								</ul>	
								<!-- <h6 class="mb-20">Contact Us</h6>
								<p>
									56/8, bir uttam qazi nuruzzaman road, west panthapath, kalabagan, Dhanmondi, Dhaka - 1205
								</p>
								<h3>012-6532-568-9746</h3>
								<h3>012-6532-568-97468</h3> -->
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>UBICACIÓN</h6>
								<p><i class="fas fa-map-marker icon-footer"></i> Antonio Bellet 143 oficina 408, Providencia, Región Metropolitana.</p>
								<div id="map">
								</div>
								<script>
									function initMap(){
										var location = {lat: -33.426064, lng:-70.617483};
										var map = new google.maps.Map(document.getElementById("map"),{
											zoom: 15,
											center: location 
										}); 
										var marker = new google.maps.Marker({
											position: location, 
											map: map
										});
									}
								</script>
								<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1qpT5_Yh9K-V1wW_E7Ub2wopa9OmVYno&callback=initMap"></script>
								<!-- <div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div>

											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div>
										</div>
										<div class="info"></div>
									</form>
								</div> -->
							</div>
						</div>
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/cmplastica/"><i class="fa fa-instagram"></i></a>
							<a href="https://www.youtube.com/channel/UCPS5lgBIuszTHQB0Om1exAg"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>