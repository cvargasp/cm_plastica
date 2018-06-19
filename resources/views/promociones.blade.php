@extends('layouts.master')

@section('contenido')


	<!-- Start content Area -->
	<section class="blog-area section-gap" id="procedimientos">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1>Promociones</h1>
					<p>
						La mejor selección para verte como siempre soñaste.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="sinlge-blog col-lg-4 col-md-4 text-center d-flex flex-column">
					<a href="#" class="promocion">CIRUGÍA ESTÉTICA</a>
					<div class="hovereffect">
						<a href="#">
							<img class="f-img mx-auto img-promocion" src="images/p1.jpg" height="" width="100%" alt="">
						</a>
					</div>
					<a href="#" class="ver_promocion"><i class="fas fa-plus-circle"></i> Ver más</a>
				</div>
				<div class="sinlge-blog col-lg-4 col-md-4 text-center d-flex flex-column">
					<a href="#" class="promocion">CIRUGÍA REPARADORA</a>
					<div class="hovereffect">
						<a href="#">
							<img class="f-img mx-auto img-promocion" src="images/p2.jpg" height="" width="100%" alt="">
						</a>
					</div>
					<a href="#" class="ver_promocion"><i class="fas fa-plus-circle"></i> Ver más</a>
				</div>
				<div class="sinlge-blog col-lg-4 col-md-4 text-center d-flex flex-column">
					<a href="#" class="promocion">MÍNIMAMENTE INVASIVOS</a>
					<div class="hovereffect">
						<a href="#">
							<img class="f-img mx-auto img-promocion" src="images/p3.jpg" height="" width="100%" alt="">
						</a>
					</div>
					<a href="#" class="ver_promocion"><i class="fas fa-plus-circle"></i> Ver más</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end content Area -->

@stop