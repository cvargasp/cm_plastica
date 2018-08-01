@extends('layouts.master')

@section('contenido')

<section class="promo-detail-header-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 pb-30 header-text">
				<h1>Procedimientos</h1>
				<p>
					La mejor selección para verte como siempre soñaste.					
				</p>
			</div>
		</div>
	</div>
</section>
<section class="promotion-detail-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-4">
				<div class="input-group mb-3">
					<select id="procedureselector" class="custom-select">
						<option value="procedure0">Elegir procedimiento: </option>
						<option value="procedure1">Rejuvenecimiento facial con toxina botulínica</option>
						<option value="procedure2">Relleno de surcos con ácido hialurónico</option>
						<option value="procedure3">Rinomodelación con ácido hialurónico</option>
						<option value="procedure4">Lipoinyección Facial</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 procedure-details">
				<div>
					<h1> Minimamente Invasivos </h1>
					<p> Son procedimientos no quirúrgicos que se realizan de manera ambulatoria, que como su nombre lo indica, son mínimamente invasivos, principalmente punciones, como es el caso de la prevención y tratamiento de las arrugas con Toxina Botulínica o restauración del volumen facial con Acido Hialurónico. </p>
				</div>
				<div id="procedure1" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">	
								<h1> Rejuvenecimiento facial con toxina botulínica </h1>
								<p> La toxina botulínica produce parálisis de los músculos responsables de las arrugas dinámicas tales como las líneas horizontales de la frente, las patas de gallo, entrecejo, las arrugas de conejo en la nariz. </p>
								<p> También se puede usar en la región perioral para atenuar las líneas que están por sobre el labio superior o código de barra, y para bloquear el músculo que deprime la comisura labial y evitar que se formen las líneas de marioneta. También se puede aplicar en os músculos del mentón que son responsables de que esta zona se “craquele”. </p>
								<p> Es un procedimiento corto de aproximadamente 10 min. y no requiere preparación del paciente. </p>
								<p> Comienza a hacer efecto entre 48 - 72 horas después de su aplicación y su máximo efecto se logra en 1-2 semanas. Su duración es entre 4 a 6 meses. </p>												
							</div>
							<div class="col-lg-3 col-md-3">
								IMAGEN
							</div>
						</div>
					</div>
				</div>
				<div id="procedure2" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">	
								<h1> Relleno de surcos con ácido hialurónico </h1>
								<p> Es una molécula (biopolímero) que absorbe agua, que está presente en nuestros tejidos, pero que se va perdiendo con los años. </p>
								<p> Su inyección tiene como objetivo eliminar surcos (frente, entrecejo, ojeras, surco nasoqueniano, marioneta) o aportar volumen en zonas en que se ha perdido (mejilla, mentón, labios). </p>
								<p> El procedimiento dura unos 20 min., su efecto es inmediato y se mantiene por 8 a 16 meses. </p>					
							</div>
							<div class="col-lg-3 col-md-3">
								IMAGEN
							</div>
						</div>
					</div>
				</div>
				<div id="procedure3" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Rinomodelación con ácido hialurónico </h1>
								<p> Técnica mínimamente invasiva que consiste en camuflar los defectos estéticos de la nariz, tales como la Jiba o algunas asimetrías con inyecciones de ácido hialurónico. </p>
								<p> También se puede mejorar el largo y resaltar la punta nasal. Su efecto es inmediato y dura aproximadamente un año. </p>
							</div>
							<div class="col-lg-3 col-md-3">
								IMAGEN
							</div>
						</div>
					</div>
				</div>
				<div id="procedure4" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Lipoinyección Facial </h1>
								<p> Próximamente </p>												
							</div>
							<div class="col-lg-3 col-md-3">
								IMAGEN
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript">
	$('a').on('click', function(){
   var target = $(this).attr('rel');
   $("#"+target).show().siblings("div").hide();
});
	$(function() {
        $('#procedureselector').change(function(){
            $('.procedure').hide();
            $('#' + $(this).val()).show().siblings("div").hide();
        });
    });
</script>

@stop