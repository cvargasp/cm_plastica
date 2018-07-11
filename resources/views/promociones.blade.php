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
				<div class="col-lg-4 col-md-4 text-center d-flex flex-column" >
					<div class="grid">
						<figure class="effect-julia">
							<img src="images/{{ $promotion['filename'] }}">
							<figcaption>
							<h2><span>{{$promotion['name']}}</span></h2>
							<div>								
								<p> OFERTA: {{$promotion['promotion_price']}}</p>
								<br>
								<p> ANTES: {{$promotion['normal_price']}}</p>
							</div>
							<a href="{{ route('promo_detalles',['promoID' => $promotion['id']])}}">Ver más</a>
						</figcaption>	
						</figure>
					</div>
					
				</div>
				<?php
				    $rowCount++;
				    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
				}
				?>
			</div>
		</div>
	</section>
	<!-- end content Area -->

@stop