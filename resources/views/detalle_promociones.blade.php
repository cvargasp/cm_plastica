@extends('layouts.master')

@section('contenido')

@php
$promotion = DB::table('promotions')->where('id', $promoId)->first();
@endphp

<section class="promo-detail-header-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 pb-30 header-text">
				<h1>Promociones</h1>
				<p>
					La mejor selección para verte como siempre soñaste.					
				</p>
			</div>
		</div>
	</div>
</section>
<div class="promotion-detail-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 effect-julia">
				<img src="{{asset('images/'.$promotion->filename)}}" width="100%">
			</div>
			<div class="col-lg-7 col-md-7 text-left promo-detail">
				<h1> {{ $promotion->name }} </h1>
				<h2> Oferta: ${{ $promotion->promotion_price }} </h2>
				<h2> Normal: ${{ $promotion->normal_price }} </h2>
				<p class="promo-detail-include">Incluye:</p>
				@php
				echo "<ul class=\"promo-detail-list\">";
				$incluidos = explode(".", $promotion->description);
				for($i = 0; $i < count($incluidos)-1;$i++)
				{
					echo "<li type=\"disc\">{$incluidos[$i]}</li>";
				}
				echo "</ul>";
				@endphp
				<!-- {!!html_entity_decode($promotion->description)!!} -->
			</div>
		</div>
	</div>	
</div>

@stop