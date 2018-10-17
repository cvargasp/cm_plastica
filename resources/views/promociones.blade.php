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
				<div class="row justify-content-center">
				<?php
				foreach($promotions as $promotion){
				?>  
				<div class="col-auto mb-3" >
					<div class="card grid h-100" style="width: 18rem; display: flex">
							<figure class="effect-julia">
								<img src="images/promociones/{{ $promotion['filename'] }}">
								<figcaption>
								@php
								 	$promotion_price = $promotion['promotion_price'];
								 	$normal_price = $promotion['normal_price'];
								@endphp
								<div>		
								@if( $promotion['promotion_price'] == $promotion['normal_price'])
									<p> PRECIO: {{$normal_price}}</p>
								@else
									<p> OFERTA: {{$promotion_price}}</p>
									<br>
									<p> ANTES: {{$normal_price}}</p>
								@endif						
									
								</div>
								<a href="{{ route('promo_detalles',['promoID' => $promotion['id']])}}">Ver más</a>
							</figcaption>	
							</figure>
						<div class="span2 mt-auto">
							<h3> {{$promotion['name']}} </h3>						
						</div>
					</div>					
				</div>
				<?php
				    $rowCount++;
				    if($rowCount % $numOfCols == 0) echo '</div><div class="row justify-content-center">';
				}
				?>
			</div>
		</div>
	</section>
	<!-- end content Area -->

@stop