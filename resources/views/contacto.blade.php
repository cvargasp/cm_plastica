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
			@if (session('success'))
			    <div class="alert alert-success mb-40">
			        {{ session('success') }}
			    </div>
			@endif
			<div class="row">
				<div class="single-blog col-lg-6 col-md-6 text-center d-flex flex-column">
					<form method="post" action="{{route('contact.store')}}">
						{{ csrf_field() }}
						<div class="form-group">
							<div class="input-group mb-3">
							  	<div class="input-group-prepend">
							    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-user icon-contact"></i></span>
							  	</div>
							  	<input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" name="nombre">
							  	@if ($errors->has('nombre'))
							  		<small class="form-text invalid-feedback"> {{ $errors->first('nombre')}} </small>
							  	@endif
							</div>
							<div class="input-group mb-3">
							  	<div class="input-group-prepend">
							    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone icon-contact"></i></span>
							  	</div>
							  	<input type="text" class="form-control" placeholder="Teléfono" aria-label="telefono" aria-describedby="basic-addon1" name="telefono">
							  	@if ($errors->has('telefono'))
							  		<small class="form-text invalid-feedback"> {{ $errors->first('telefono')}} </small>
							  	@endif
							</div>
							<div class="input-group mb-3">
							  	<div class="input-group-prepend">
							    	<span class="input-group-text" id="basic-addon1">@</span>
							  	</div>
							  	<input type="text" class="form-control" placeholder="Correo" aria-label="correo" aria-describedby="basic-addon1" name="email">
							  	@if ($errors->has('email'))
							  		<small class="form-text invalid-feedback"> {{ $errors->first('email')}} </small>
							  	@endif
							</div>
							<div class="input-group">
							  	<div class="input-group-prepend">
							    	<span class="input-group-text"><i class="fas fa-comment-dots icon-contact"></i></span>
							  	</div>
							  	<textarea class="form-control contact-textarea" placeholder="Comentario" aria-label="With textarea" name="comentario"></textarea>
							  	@if ($errors->has('comentario'))
							  		<small class="form-text invalid-feedback"> {{ $errors->first('comentario')}} </small>
							  	@endif
							</div>
							<button type="submit" class="btn btn-info btn-block mt-10 form-btn">Enviar mensaje</button>
						</div>
					</form>
				</div>	
				<div class="col-lg-6 col-md-6 d-flex flex-column text-right-2 map-area">
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
					<p> <span class="fab fa-whatsapp icon-contact"></span>  <a style="color:#777777" href="https://wa.me/56932602113">+56 9 3260 2113</a></p>
					<p> <span class="fab fa-whatsapp icon-contact"></span>  <a style="color:#777777" href="https://wa.me/56956682487">+56 9 5668 2487 </a> </p>
					<p> <span class="fas fa-phone icon-contact"></span> <a style="color:#777777" href=""> 2 266 479 83 </a> </p>
				</div>
			</div>
		</div>
	</section>
	<!-- end contact Area -->

@stop