	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
		<head>
			<!-- Mobile Specific Meta -->
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!-- Favicon-->
			<link rel="shortcut icon" href="{{asset('images/fav.png')}}">
			<!-- Author Meta -->
			<meta name="author" content="Colorlib">
			<!-- Meta Description -->
			<meta name="description" content="">
			<!-- Meta Keyword -->
			<meta name="keywords" content="">
			<!-- meta character set -->
			<meta charset="UTF-8">
			<!-- favicon set -->
			<link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-touch-icon.png')}}">
			<link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
			<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
			<link rel="manifest" href="{{asset('images/favicon/site.webmanifest')}}">
			<link rel="mask-icon" href="{{asset('images/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
			<meta name="msapplication-TileColor" content="#da532c">
			<meta name="theme-color" content="#ffffff">
			<!-- Site Title -->
			<title>Cirugía Plástica</title>

			<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

				<!--
				CSS
				============================================= -->
			<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('css/main.css')}}">
		 	<link rel="stylesheet" type="text/css" href="{{asset('css/full-slider.css')}}">
			<link rel="stylesheet" href="{{asset('css/hovereffects.css')}}">
			<style>
				#map {
					height: 200px;
					width: 100%;
				}
				.bg-nav{
					transition: all 1s ease;
				}
			</style>
			<!-- Smartsupp Live Chat script -->
			<script type="text/javascript">
				var _smartsupp = _smartsupp || {};
				_smartsupp.key = 'ac004477440663742bcd2e4aff6aa39a546bec88';
				window.smartsupp||(function(d) {
				  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
				  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
				  c.type='text/javascript';c.charset='utf-8';c.async=true;
				  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
				})(document);
			</script>
		</head>
		<body>
			<!-- Start Info Area -->
			<div class="info-header">
				<div class="container d-none d-lg-block">
					<div class="row justify-content-between hidden-info">
						<div class="col text-left">
							<p> <a class="text-white" href="https://www.google.com/maps/place/CM+Plástica/@-33.425824,-70.6189394,17.17z/data=!4m8!1m2!2m1!1scm+plastica!3m4!1s0x9662cff1e94dce83:0x495b7a82fbd6377e!8m2!3d-33.426064!4d-70.617483"> Antonio Bellet 143 oficina 408, Providencia, RM. </a></p>
						</div>
						<div class="col text-right">
							<p> <span style="margin-right:15px;"> Teléfonos: <a class="text-white" href="tel:+56932602113">+56932602113</a> / <a class="text-white" href="tel:+56956682487">+56956682487</a> </span> 
							<a href="https://web.facebook.com/cmplastica/"><i class="fab fa-facebook-f" style="color: white;"></i></a> 
							<a href="https://www.instagram.com/cmplastica/"><i class="fab fa-instagram" style="color: white;"></i></a>
							<a href="https://www.youtube.com/channel/UCPS5lgBIuszTHQB0Om1exAg"><i class="fab fa-youtube" style="color: white;"></i></a></p>
						</div>
					</div>
				</div>				
			</div>
			<!-- <div class="navbar header-top d-flex clear justify-content-between align-items-center info-header">
				<div class="container">
					<div class="row justify-content-end">
						<div class="col-lg-5 col-md-5 col-sm-0 info-header">
							<p> Antonio Bellet 143 oficina 408, Providencia, RM. </p>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-0 text-right info-header">
							<p> Horario: <span> Lun a Vie: 9 a 20 hrs, Sáb: 9 a 14 hrs. </span>  Teléfonos:  <span> +56932602113 / +56956682487 </span> </p>
						</div>
					</div>
				</div>
			</div> -->
			<!-- End Info Area -->

			<!-- Start Header Area -->
			<nav id="menu" class="navbar navbar-expand-lg fixed-top bg-nav navbar-move" style="margin-top: 42px; margin-right: 0px !important;">
				<div class="container">
					<div class="logo">
						<a href="{{ route('inicio')}}"><img src="{{asset('images/logo_cm.png')}}" height="50px" alt=""></a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="color: #352352;">
          				<span class="lnr lnr-menu"></span>
        			</button>

        		<div class="collapse navbar-collapse" id="navbarResponsive">
		          <ul class="navbar-nav ml-auto">
		            <li class="nav-item active">
		              <a href="{{ route('inicio')}}">Inicio</a>
		            </li>
		            <li class="nav-item">
		              <a href="{{ route('nosotros')}}">Nosotros</a>
		            </li>
		            <li class="nav-item">
		              <a href="{{ route('inicio')}}#procedimientos">Procedimientos</a>
		            </li>
		            <li class="nav-item">
		              <a href="{{ route('promociones')}}">Promociones</a>
		            </li>
		            <li class="nav-item">
		              <a href="{{ route('faqs')}}">Preguntas Frecuentes</a>
		            </li>
		            <li class="nav-item">
		              <a href="{{ route('contacto')}}">Contacto</a>
		            </li>
		          </ul>
		        </div>
				
			</nav>
			<!-- <header class="default-header">
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
				<!-- <script>
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
				</script> -->
				<!-- /Chatra {/literal} -->
			<!-- </header> -->
			<!-- End Header Area -->

			@yield('contenido')

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2  col-md-6 text-center">
							<div class="single-footer-widget">															
								<img class="img-fluid" src="{{asset('images/logo2.png')}}" alt="">
								<img class="img-fluid" src="{{asset('images/webpay.png')}}" alt="">
							</div>
						</div>
						<div class="col-lg-2  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6>CMPLASTICA</h6>
								<ul class="footer-nav">
									<li><a href="{{ route('inicio')}}">Inicio</a></li>
									<li><a href="{{ route('nosotros')}}">Nosotros</a></li>
									<li><a href="{{ route('inicio')}}#procedimientos">Procedimientos</a></li>
									<li><a href="{{ route('promociones')}}">Promociones</a></li>
									<li><a href="{{ route('faqs')}}">Preguntas Frecuentes</a></li>
									<li><a href="#">Contacto</a></li>
								</ul>	
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>UBICACIÓN</h6>
								<p><i class="fas fa-map-marker icon-footer"></i> Antonio Bellet 143 oficina 408, Providencia, Región Metropolitana.</p>
								<div id="map" class="{{ Request::is('contacto') ? 'hidden-div' : '' }}">
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
						<div class="col-lg-2  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6>SÍGUENOS</h6>
								<ul class="footer-nav">
									<li><a href="https://web.facebook.com/cmplastica/"><i class="fab fa-facebook-f" style="color: white;"></i> cmplastica</a></li>
									<li><a href="https://www.instagram.com/cmplastica/"><i class="fab fa-instagram" style="color: white;"></i> cmplastica</a></li>
									<li><a href="https://www.youtube.com/channel/UCPS5lgBIuszTHQB0Om1exAg"><i class="fab fa-youtube" style="color: white;"></i> Dra. Carla Mora</a></li>
								</ul>	
								<!-- <h6 class="mb-20">Contact Us</h6>
								<p>
									56/8, bir uttam qazi nuruzzaman road, west panthapath, kalabagan, Dhanmondi, Dhaka - 1205
								</p>
								<h3>012-6532-568-9746</h3>
								<h3>012-6532-568-97468</h3> -->
							</div>
						</div>
					</div>

					
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
			<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
			<script src="{{asset('js/jquery.sticky.js')}}"></script>
			<script src="{{asset('js/parallax.min.js')}}"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
			<script src="{{asset('js/waypoints.min.js')}}"></script>
			<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
			<script src="{{asset('js/main.js')}}"></script>
			<script>
			    $(window).scroll(function() {
			        if ($("#menu").offset().top > 50) {
			            $("#menu").addClass("bg-white");
			        } else {
			            $("#menu").removeClass("bg-white");
			        }
			   	});
			</script>
		</body>
	</html>