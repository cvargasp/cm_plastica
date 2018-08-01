@extends('layouts.master')

@section('contenido')

	<section class="blog-area section-gap">
		<div class="container">
			<div class="card-group justify-content-center">
				<div class="row justify-content-center">
					<div class="col-md-8 pb-30 header-text">
						<h1>Nosotros</h1>
						<p>
							CM Cirugía Plástica esta conformada por los mejores profesionales del área de la salud.
						</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-auto mb-3">
						<div class="card h-100 d-flex" style="width: 18rem;">
						  	<img class="card-img-top" src="{{asset('images/c5.jpg')}}" alt="Card image cap">
						  	<div class="card-body">
						    	<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
						    	<h3>Esteban Fuentes</h3>
						    	<h4>Ingeniero Comercial</h4>
						  	</div>
						</div>
					</div>
					<div class="col-auto mb-3">
						<div class="card h-100" style="width: 18rem;">
						  	<img class="card-img-top" src="{{asset('images/c2.jpg')}}" alt="Card image cap">
						  	<div class="card-body">
						    	<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
						    	<h3>Nombre Apellido</h3>
						    	<h4>Profesión</h4>
						  	</div>
						</div>
					</div>
					<div class="col-auto mb-3">
						<div class="card h-100" style="width: 18rem;">
						  	<img class="card-img-top" src="{{asset('images/c3.jpg')}}" alt="Card image cap">
							<div class="card-body">
							   	<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
							   	<h3>Nombre Apellido</h3>
							   	<h4>Profesión</h4>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</section>

@stop