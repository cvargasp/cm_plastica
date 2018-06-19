@extends('layouts.master')

@section('contenido')

	<!-- Start contact Area -->
	<section class="blog-area section-gap" id="procedimientos">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1>Contacto</h1>
					<p>
						Envíenos sus datos y nos pondremos de acuerdo con ud. para agendar una hora.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="sinlge-blog col-lg-6 col-md-6 text-center d-flex flex-column">
					<div class="input-group mb-3">
					  	<div class="input-group-prepend">
					    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-user icon-contact"></i></span>
					  	</div>
					  	<input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
					  	<div class="input-group-prepend">
					    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone icon-contact"></i></span>
					  	</div>
					  	<input type="text" class="form-control" placeholder="Teléfono" aria-label="telefono" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
					  	<div class="input-group-prepend">
					    	<span class="input-group-text" id="basic-addon1">@</span>
					  	</div>
					  	<input type="text" class="form-control" placeholder="Correo" aria-label="correo" aria-describedby="basic-addon1">
					</div>
					<div class="input-group">
					  	<div class="input-group-prepend">
					    	<span class="input-group-text"><i class="fas fa-comment-dots icon-contact"></i></span>
					  	</div>
					  	<textarea class="form-control contact-textarea" placeholder="Comentario" aria-label="With textarea"></textarea>
					</div>
				</div>	
				<div class="col-lg-6 col-md-6 d-flex flex-column text-right map-area">
					<div id="map">
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
					</div>
					<br>
					<p> <i class="fas fa-map-marker icon-contact"></i>  Antonio Bellet 143 oficina 408, Providencia, Región Metropolitana. </p>
					<p> <span class="fas fa-at icon-contact"></span> contacto@cmplastica.cl </p>
					<p> <span class="fas fa-phone icon-contact"></span>  +56 9 3260 2113</p>
					<p> <span class="fas fa-phone icon-contact"></span>  +56 9 5668 2487 </p>
				</div>
			</div>
		</div>
	</section>
	<!-- end contact Area -->

@stop