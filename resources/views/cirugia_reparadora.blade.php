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
						<option value="procedure1">Ginecomastía</option>
						<option value="procedure2">Rinoseptoplastía</option>
						<option value="procedure3">Orejas Aladas o Prominentes</option>
						<option value="procedure4">Lóbulo Oreja Bífido</option>
						<option value="procedure5">Reducción Mamaria</option>
						<option value="procedure6">Cirugía después de baja de peso masiva</option>
						<option value="procedure7">Corrección de Cicatrices</option>
						<option value="procedure8">Lifting de brazos</option>
						<option value="procedure9">Lifting de muslos</option>
						<option value="procedure10">Reducción mamaria en transgender</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 procedure-details">
				<div>
					<h1> Cirugía Reparadora </h1>
					<p> Tiene como finalidad reconstruir un segmento corporal y su funcionalidad, dentro de esta área encontramos cirugía de quemaduras, fisurados, reconstrucción post traumatismo o post tratamientos por cáncer, entre otras. </p>
				</div>
				<div id="procedure1" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Ginecomastía </h1>
								<ul>
									<li type="disc"> Se define como desarrollo excesivo de la glándula mamaria en el hombre. </li>
									<li type="disc"> Afecta hasta a un 40% de los hombres. </li>
									<li type="disc"> Sus causas principales son el exceso de estrógenos circulantes o disminución de andróginos circulantes. </li>
									<li type="disc"> Clinicamente de clasifica en: </li>
									<ul>
										<li type="circle"> Causa desconocida. </li>
										<li type="circle"> Fisiológico, que significa que su ocurrencia es normal en este contexto: </li>
										<ul>
											<li type="square"> En recién nacido: por circulación de estrógeno maternos. </li>
											<li type="square"> En adolescente: exceso relativo de estrógeno versus testosterona, no requiere tratamiento, desaparecerá espontáneamente. </li>
											<li type="square"> En adulto mayor: por disminución de testosterona. </li>							
										</ul>
										<li type="circle"> Patológica o por enfermedad: cirrosis hepática, tumor adrenal, hipertiroidismo, hiperplasia adrenal, hipogonadismo congénito o adquirido, tumor testicular. </li>
										<li type="circle"> Farmacológica: marihuana, antihipertensos, espironolactona, cimeditina, ketoconazol, esteroides anabólicos. </li>
									</ul>
								</ul>
								<p> Es importante aclarar la anterior porque existe una condición llamada PSEUDOGINECOMASTIA donde hay un aumento mamario en el hombre a expensas de la grasa, no hay glándula mamaria presente, esto se trata mediante baja de peso y liposucción y no es cubierta por el sistema de salud. </p>
								<ul>
									<li type="disc"> No hay incremento del riesgo de cáncer. </li>
								</ul>
								<p> Tratamiento: Según su causa, por lo tanto, lo primero es identificar causa, la gran mayoría son de causa desconocida, las cuales si han pasado más de 12 meses dese su aparición, no se resolverá solo. </p>
								<p> Estos pacientes requerirán tratamiento quirúrgico primario que consiste en: </p>
								<ul>
									<li type="disc"> Resección de la glándula mediante una incisión alrededor de la areola o mamila.</li>
									<li type="disc"> Liposucción de la mama.</li>
								</ul>
								<p> Se realiza bajo anestesia general, hospitalización de 8 horas, manejo con analgésico oral, uso de camiseta compresiva por 1 mes y cinesiología post operatoria. </p>
								<p> Esta es una condición que es cubierta por el sistema de salud, previa confirmación diagnóstica con ecotomografía mamaria y biopsia operatoria de glándula mamaria. </p>						
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_reparadora/ginecomastia.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure2" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Rinoseptoplastía </h1>
								<p> Cirugía que modifica la nariz según parámetros estéticos para dar una armonía a la cara. La nariz en su superficie debe tener ciertas características y ciertas proporciones en relación a la cara. </p>
								<p> Para lograr lo anterior, las principales modificaciones que se realizan son: </p>
								<ul>
									<li type="disc"> Resección de la Jiba. </li>
									<li type="disc"> Disminuir ancho nasal. </li>
									<li type="disc"> Achicar alas y orificios nasales. </li>
									<li type="disc"> Dar mayor definición a la punta nasal. </li>
									<li type="disc"> Mejorar proyección nasal (largo de la punta). </li>
									<li type="disc"> Aumentar ángulo nasolabial (respingar). </li>
									<li type="disc"> Alinear nariz en un eje longitudinal, entre otras cosas. </li>					
								</ul>
								<p> Junto con mejorar parámetros estéticos, se debe estudiar la estructura nasal interna para programar su corrección durante la misma cirugía: </p>
								<ul>
									<li type="disc"> Tabique desviado. </li>
									<li type="disc"> Cornetes hipertróficos. </li>
									<li type="disc"> Insuficiencia valvular. </li>						
								</ul>
								<p> La nariz se compone de una estructura ósea y otra cartílagos. La resección de la jiba y la disminución del ancho tienen que ver con el hueso, por lo tanto su tratamiento es la fractura. Las otras modificaciones son de cartílago y son menos traumáticas. </p>
								<p> Una paciente puede requerir la corrección de los 3 componentes o solo de alguno de ellos: </p>
								<ul>
									<li type="disc"> Hueso (jiba y ancho). </li>
									<li type="disc"> Punta nasal (cartílago). </li>
									<li type="disc"> Estructura interna (tabique y cornetes). </li>
								</ul>
								<p> Esta cirugía se realiza bajo anestesia general. Requiere una noche de hospitalización. El/la paciente se deja con férula de yeso en el dorso nasal y tapones, los que se retiran al quinto día y el yeso al séptimo. </p>
								<p> Al sacar el yeso, la nariz aún está inflamada y va a adquirir su forma definitiva dentro de los próximos tres meses. </p>					
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_reparadora/rinoseptoplastia.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure3" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">	
								<h1> Orejas Aladas o Prominentes </h1>
								<p> Esta condición se da en aproximadamente el 5% de las personas y es de origen genético y un rasgo heredado dominante. </p>
								<p> Se caracteriza principalmente por presentar: </p>
								<ul>
									<li type="disc"> Falta de desarrollo de los pliegues de la oreja o cavidad o “concha” de la oreja muy profunda, lo que produce que la oreja se “despegue” aún más de la cabeza.
									<li type="disc"> También puede estar acompañado de un lóbulo alado.
								</ul>
								<p> La mayor consecuencia de esta condición, la psicológica, los niños frecuentemente son víctimas de Bullying. Es por esto que el tratamiento debe realizarse a la edad de 6-7 años. </p>
								<p> El tratamiento quirúrgico corrige los distintos aspectos de la oreja alada: </p>
								<ul>
									<li type="disc"> Reproduce los pliegues. </li>
									<li type="disc"> Superficializa la concha. </li>
									<li type="disc"> Y “pega” la oreja en su cara posterior a la cabeza. </li>		
								</ul>
								<p> Se realiza bajo anestesia general, debe quedar idealmente una noche hospitalizado, los cuidados operatorios consisten en analgésicos y antibióticos, reposo relativo por 2 semanas (inasistencia escolar) y no puede realizar actividad física en 1 mes. </p>
								<p> Esta condición es cubierta por sistema previsional de salud. </p>				
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_reparadora/orejas_aladas.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure4" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Lóbulo Oreja Bífido </h1>
								<p> Es una condición frecuente debido a la costumbre de uso de aros como accesorios. </p>
								<p> La perforación, hecha en la infancia, se va agrandando hasta romperse debido al peso de los accesorios, tracciones generalmente en la noche al dormir, o eventos traumáticos tales como el robo de los accesorios. Esto se corrige bajo anestesia local, en sala de procedimiento, se maneja el postoperatorio con analgésicos orales, no requiere reposo, los puntos se retiran a las 2 semanas, y se puede realizar una nueva perforación 1 mes post retiro de puntos. </p>			
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_reparadora/bifido.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure5" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Reducción Mamaria </h1>
								<p> Se reduce el volumen mamario para lograr una mama más pequeña, con forma y caída natural. Tiene como objetivo disminuir los síntomas asociados a una mama grande: </p>
								<ul>
									<li type="disc"> Dolor de espalda. </li>
									<li type="disc"> Hundimiento de los hombros. </li>
									<li type="disc"> Dificultad para encontrar vestimenta y sostén adecuado. </li>
									<li type="disc"> Deterioro de la autoestima. </li>
									<li type="disc"> Irritación del surco mamario. </li>
								</ul>
								<p> Como se explicó anteriormente (mastopexia) la longitud de la cicatriz va a depender de la cantidad de tejido mamario y piel que se desee extraer. Las complicaciones que más preocupan a las pacientes y por las que más preguntan son: </p>
								<ul>
									 <li type="disc"> Alteración de la sensibilidad de la aureola y pezón: Mientras mayor es el volumen a reducir, mayor es el riesgo de alteración de la sensibilidad. </li>
									 <li type="disc"> Pérdida de la aureola y pezón por la muerte de la piel, ocurre en un 5% de las pacientes y esta asociado a mamas muy grandes y caídas así como también a antecedentes de tabaquismo, hipertensión, diabetes, obesidad, etc. </li>
								</ul>					
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_reparadora/reduccion_mamaria.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>					
				</div>
				<div id="procedure6" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Cirugía después de baja de peso masiva </h1>
								<p> Próximamente </p>				
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_reparadora/baja_peso.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure7" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Corrección de Cicatrices </h1>
								<p> Una cicatriz puede ser defectuosa por distintos aspectos:</p>
								<ul>
									<li type="disc"> Color: suelen estar pigmentadas, esto se puede corregir mediante despigmentantes tópicos o aparatología (láser, TPL). </li>
									<li type="disc"> Hundida: Una cicatriz hundida se puede corregir de dos maneras:</li>
									<ul>
										<li type="circle"> Resecándola y volviendo a cerrar correctamente los planos de tejido. </li>
										<li type="circle"> Despegándola de planos profundos e inyectando grasa bajo la cicatriz. </li>
									</ul>
								<li type="disc"> Herida Solevantada: dependiendo del tiempo de evolución y la gravedad de la respuesta inflamatoria las alternativas son:</li>
								<ul>
									<li type="circle"> Medidas compresivas. </li>
									<li type="circle"> Inyección de corticoides intralesionales. </li>
									<li type="circle"> Cirugía. </li>
								</ul>
								<li type="disc"> Herida retráctil:</li>
									<ul>
										<li type="circle"> Medidas compresivas. </li>
										<li type="circle"> Masoterapia. </li>
										<li type="circle"> Cirugía. </li>
									</ul>				
								</ul> 
								<p> Y así los defectos pueden ser múltiples, es importante entender que la cicatriz depende en gran medida de los cuidados que el paciente le provee y que mientras antes se intervenga mejor, que la cirugía bien indicada es una excelente alternativa, pero que siempre estaremos cambiando una cicatriz por otra ojalá de mejor calidad y apariencia, una cicatriz plana, lineal, elástica y del color de la piel. </p>				
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_reparadora/cicatrices.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>					
				</div>
				<div id="procedure8" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Lifting de brazos </h1>
								<p> Próximamente </p>			
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_reparadora/brazos.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure9" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Lifting de muslos </h1>
								<p> Próximamente </p>				
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_reparadora/muslos.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>					
				</div>
				<div id="procedure10" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Reducción mamaria en transgender </h1>
								<p> Próximamente </p>				
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_reparadora/mamaria_transgender.jpg')}}" width="100%" alt="">
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