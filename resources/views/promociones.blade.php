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
			@php
			$promotions=\App\Promotion::all();
			@endphp
			<?php
				//Columns must be a factor of 12 (1,2,3,4,6,12)
				$numOfCols = 3;
				$rowCount = 0;
				$bootstrapColWidth = 12 / $numOfCols;
				?>
				<div class="row">
				<?php
				foreach($promotions as $promotion){
				?>  
				<div class="sinlge-blog col-lg-4 col-md-4 text-center d-flex flex-column" style="margin-bottom: 70px;">
					<a href="#" class="promocion">{{ $promotion['name'] }}</a>
					<div class="hovereffect">
						<a href="#">
							<img class="f-img mx-auto img-promocion" src="images/{{ $promotion['filename'] }}" height="" width="100%" alt="">
						</a>
					</div>
					<a href="#" class="ver_promocion"><i class="fas fa-plus-circle"></i> Ver más</a>
				</div>
				<?php
				    $rowCount++;
				    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
				}
				?>
		</div>
	</section>
	<!-- end content Area -->

@stop