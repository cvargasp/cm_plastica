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
						<option value="procedure1">Aumento Mamario</option>
						<option value="procedure2">Aumento de Glúteos o Gluteoplastía</option>
						<option value="procedure3">Abdominoplastía</option>
						<option value="procedure4">Lipoescultura/Liposucción</option>
						<option value="procedure5">Mastopexia o Levantamiento Mamario</option>
						<option value="procedure6">Reducción Mamaria</option>
						<option value="procedure7">Lifting Cervical Facial o Rejuvenecimiento Facial</option>
						<option value="procedure8">Blefaroplastia o Cirugía de Párpados</option>
						<option value="procedure9">Rinoplastía y Rinomodelación</option>
						<option value="procedure10">Lipoinyección</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 procedure-details">
				<div>
					<h1> Cirugía Estética </h1>
					<p> Son procedimientos no quirúrgicos que se realizan de manera ambulatoria, que como su nombre lo indica, son mínimamente invasivos, principalmente punciones, como es el caso de la prevención y tratamiento de las arrugas con Toxina Botulínica o restauración del volumen facial con Acido Hialurónico. </p>
				</div>
				<div id="procedure1" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Aumento Mamario </h1>
								<p> Es una cirugía que mediante la implantación de una prótesis de silicona se logra mejorar forma y volumen mamario. Las prótesis de silicona actualmente son de 5ta generación, esto significa que se le han realizado mejoras a través de los años, llegando a un implante de cobertura de silicona, texturizada en su mayoría, con relleno de silicona gel cohesivo, lo que las hace más resistentes. Vienen en distintos modelos, redondas y anatómicas o biodimensionales. </p>
								<p> Cada modelo tiene una indicación específica que tiene relación con la anatomía de la paciente. </p>
								<p> El cirujano plástico, junto con la paciente deben tomar distintas decisiones tales como: Vía de abordaje: axilar, pariareolar o surco submamario. </p>
								<p> Plano de implantación: Principalmente si posicionará sobre o bajo el musculo pectoral mayor. </p>
								<p> Modelo y tamaño del implante: Que como se mencionó se determina principalmente por las características físicas de la paciente.</p>
								
								<h2> Complicaciones más frecuentes </h2>
								<p>Hematoma o sangrado post operatorio: Ocurre en un 2 a 5% de los casos. </p>
								<p> Infección: Se presenta en un 2% de los pacientes y se diagnostica generalmente en la segunda semana post operatoria. </p>
								<p> Alteración de la sensibilidad del pezón: Alrededor de un 15% de las pacientes sufren algún grado de alteración permanente. </p>
								<p> Ruptura del Implante: Se correlaciona con la antigüedad del implante y la presencia de complicaciones como contractura de la capsula. Antiguamente el 50% de los implantes se encontraba roto a los 10 años, sin embargo con las mejoras que se han realizado, esto ha disminuido considerablemente y las compañías que fabrican implantes, garantizan que no sufrirán esta complicación dentro de los primeros 10 años y por lo tanto ya no se indica cambio de implante al final de este periodo. </p>
								<p> Contractura capsular: Es la complicación tardía más frecuente, ocurre en un 10% de las pacientes. </p>
								<p> Nuestro cuerpo forma una cápsula alrededor del implante y por múltiples razones esta cápsula se contrae uni o bilateralmente, de manera precoz o tardía, manifestándose por endurecimiento, deformidad, desplazamiento y dolor en sus distintas etapas evolutivas.</p>				
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_estetica/mamario.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure2" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Aumento de Glúteos o Gluteoplastía </h1>
								<p>La gluteoplastia de aumento está indicada para corregir la ausencia o disminución de la proyección, forma y volumen de los glúteos.Para lo anterior hay dos técnicas:</p>
								<ul>
									<li type="disc"> Lipoinyección glútea </li>
									<li type="disc"> Implantes glúteos </li>
								</ul>
								<h2> Lipoinyección glútea </h2>
								<p> La primera se realiza en el contexto de una Lipoescultura, donde se inyecta grasa en la región glutea y se complementa con la liposucción de las regiones periféricas tales como la región sacra, flancos y banana fold para acentuar aún más la proyección glutea. </p>
								<h2> Implantes glúteos </h2>
								<p> Esta técnica es usada desde 1965, aumentando la región glutea con implantes de mama hasta la actualidad en que desde 2003 la técnica consiste en la implantación intramuscular de prótesis glutea. </p>
								<p> Los implantes son de silicona en su cobertura y de silicona como gel cohesivo en su interior. Existen dos formas; redondas y anatómicos (forma almendra) y vienen en 3 volúmenes: 250 - 300 y 350 cc. </p>
								<p> Esta técnica se realiza en: </p>
								<ul>
									<li type="disc"> Pacientes que no tienen de donde extraer grasa para lipoinyectar. </li>
									<li type="disc"> Pacientes sin región glutea, con caída y flácida. </li>
									<li type="disc"> Pacientes con falta de proyección glutea. </li>
									<li type="disc"> Pacientes con deformidades gluteas adquiridas o congénitas. </li>
								</ul>
								<p> Los implantes se introducen mediante una apertura en la región interglutes. </p>
								<p> Su tratamiento post operatorio consiste en: </p>
								<ul>
									<li type="disc"> Antibióticos. </li>
									<li type="disc"> Kinesiología post operatoria. </li>
									<li type="disc"> Se pueden sentar después de la cirugía. </li>
									<li type="disc"> También pueden dormir boca arriba. </li>
								</ul>
								<p> Las complicaciones de esta Cirugía son: </p>
								<ul>
									<li type="disc"> Acumulación de líquido. </li>
									<li type="disc"> Asimetrías. </li>
									<li type="disc"> Contractura de la cápsula. </li>
									<li type="disc"> Ruptura. </li>
									<li type="disc"> Apertura de la herida, exposición e infección del implante. </li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_estetica/gluteos.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure3" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Abdominoplastía </h1>
								<p> Al pasar de los años la falta de ejercicios, una dieta poco saludable y los embarazos, son la causa de que la pared abdominal vaya presentando aumento de grasa, perdiendo la elasticidad de sus distintos componentes y separación de la musculatura en su porción central. Esta cirugía intenta corregir estos defectos mediante: </p>
								<ul>
									<li type="disc" >Resección del exceso de piel desde el ombligo al pubis. </li>
									<li type="disc" >Lipoaspiración de la pared abdominal. </li>
									<li type="disc" >Restauración de la posición de los músculos abdominales uniéndolos en la línea media. </li>					
								</ul>
								<p> Con los anterior se logra un abdomen plano, se acentúa la cintura, el ombligo vuelve a ser pequeño y profundo, y la cicatriz resulta una línea escondida en la ropa interior. </p>
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_estetica/abdominaplastia.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure4" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Lipoescultura/Liposucción </h1>
								<p> Es la cirugía cosmética más frecuente. Tiene como finalidad eliminar la grasa que no responde a dieta o ejercicio, siempre y cuando el paciente presente como máximo un IMC: 28 kg /mts2, esto significa que se acepta un paciente con sobrepeso, pero no con obesidad. </p>
								<p> La técnica consiste en la extracción de las células de grasa mediante cánulas de aspiración y consta de dos fases, la primera en la que se extrae la grasa profunda para disminuir el volumen de los contornos y la segunda que se realiza en un plano más superficial y que tiene como objetivo dar forma al contorno. </p>					
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_estetica/lipoescultura.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure5" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Mastopexia o Levantamiento Mamario </h1>
								<p> La pexia mamaria pretende devolver la forma y posición anatómica a la mama caída, que se produce en una mama que ha perdido su volumen y la elasticidad de la piel. Este exceso de piel debe ser removido y la glándula reacomodada. La extensión de la cicatriz va a depender de cuanta piel se desee sacar pudiendo ser de menos a más. </p>
								<p> Por otra parte la paciente tiene que tomar la decisión de mantener el volumen mamario actual, aumentarlo mediante una prótesis mamaría o disminuirlo. </p>
								<h2> Alrededor de areola </h2>
								<img src="{{asset('images/procedimientos/cirugia_estetica/levantamiento_mamario_1.jpg')}}" width="70%" alt="">
								<h2> Alrededor de areola + Vertical </h2>
								<img src="{{asset('images/procedimientos/cirugia_estetica/levantamiento_mamario_2.jpg')}}" width="70%" alt="">
								<h2> Alrededor de areola + Vertical + Horizontal (T invertida) </h2>
								<img src="{{asset('images/procedimientos/cirugia_estetica/levantamiento_mamario_3.jpg')}}" width="70%" alt="">				
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_estetica/levantamiento_mamario.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure6" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Reducción Mamaria </h1>
								<p> Se reduce el volumen mamario para lograr una mama más pequeña, con forma y caída natural. Tiene como objetivo disminuir los síntomas asociados a una mama grande: </p>
								<ul>
									<li type="disc" >Dolor de espalda. </li>
									<li type="disc" >Hundimiento de los hombros. </li>
									<li type="disc" >Dificultad para encontrar vestimenta y sostén adecuado. </li>
									<li type="disc" >Deterioro de la autoestima. </li>
									<li type="disc" >Irritación del surco mamario. </li>
								</ul>
								<p> Como se explicó anteriormente (mastopexia) la longitud de la cicatriz va a depender de la cantidad de tejido mamario y piel que se desee extraer. Las complicaciones que más preocupan a las pacientes y por las que más preguntan son: </p>
								<ul>						
								<li type="disc" >Alteración de la sensibilidad de la areola y pezón: Mientras mayor es el volumen a reducir, mayor es el riesgo de alteración de la sensibilidad. </li>
								<li type="disc" >Pérdida de la areola y pezón por la muerte de la piel, ocurre en un 5% de las pacientes y esta asociado a mamas muy grandes y caídas así como también a antecedentes de tabaquismo, hipertensión, diabetes, obesidad, etc. </li>
								</ul>					
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_estetica/reduccion_mamaria.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure7" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Lifting Cervical Facial o Rejuvenecimiento Facial </h1>
								<p> Con el envejecimiento la cara sufre la caída y pérdida de volumen del tercio medio, zona que corresponde principalmente a las mejillas. </p>
								<p> Esto se debe al desgaste óseo, disminución del tejido graso y al adelgazamiento y perdidas de elasticidad de la piel. Lo anterior se refleja en la aparición de pliegues y arrugas, tales como el surco nasolagrimal, nasogeniano, líneas de marioneta y jowl (acumulación de grasa en el borde mandibular) y en el cuello se manifiesta por la aparición de la papada. </p>
								<p> La cirugía de rejuvenecimiento facial tiene como objetivo volver los tejidos a su posición y restaurar el volumen perdido. Para esto se realiza un corte en la piel, que se esconde detrás de la oreja, y que va a generar una cicatriz imperceptible. </p>
								<p> Se levanta la piel, se reposicionan los tejidos profundos, devolviendo el volumen a las mejillas, eliminando los surcos y definiendo el reborde mandibular. Posterior a esto se recorta la piel sobrante. </p>
								<p> Esta cirugía obtiene su mejor resultado cuando se realiza entre los 50 y 60 años, logrando rejuvenecer aproximadamente 10 años en apariencia. </p>
								<p> Después de los 60 años la cirugía no tiene un resultado óptimo por lo tanto la piel del paciente “rejuvenece” menos años. </p>					
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_estetica/rejuvenecimiento_facial.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure8" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Blefaroplastia o Cirugía de Párpados </h1>
								<h2> Párpado Superior </h2>
								<p> Cirugía que elimina el exceso de piel y bolsa interna de párpado superior, así se logra despejar el párpado y acentuar el surco palpebral. Esto se realiza mediante el corte de la piel en la zona de pliegue lo que resulta posteriormente imperceptible. </p>
								<p> Junto con esta cirugía se debe evaluar y tomar la decisión de si la paciente, además requiere levantar las cejas, las que deben estar 1cm por sobre el reborde del hueso. </p>
								<p> En relación a las “patas de gallo” estas no necesariamente se eliminan con esta cirugía. Por lo que es ideal complementar con toxina botulínica para eliminar, atenuar o evitar la profundización de estas líneas de expresión. </p>
								<h2> Blefoplastía inferior </h2>
								<p> Esta cirugía remueve las bolsas de grasa que aparecen con los años bajo los ojos, también retira el exceso de piel del párpado inferior. Se pueden realizar ambas cosas o solo una de ellas según lo que requiera el paciente.</p>
								<p> Esta cirugía se puede realizar con sedación más anestesia local y el paciente se da de alta 8 horas posterior al procedimiento con hospitalización transitoria. </p>					
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_estetica/cirugia_parpados.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure9" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Rinoplastía y Rinomodelación </h1>
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
									<li type="disc">Hueso (jiba y ancho). </li>
									<li type="disc">Punta nasal (cartílago). </li>
									<li type="disc">Estructura interna (tabique y cornetes). </li>					
								</ul>
								<p> Esta cirugía se realiza bajo anestesia general. Requiere una noche de hospitalización. El/la paciente se deja con férula de yeso en el dorso nasal y tapones, los que se retiran al quinto día y el yeso al séptimo. </p>
								<p> Al sacar el yeso, la nariz aún está inflamada y va a adquirir su forma definitiva dentro de los próximos tres meses. </p>						
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_estetica/rinoplastia.jpg')}}" width="100%" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="procedure10" style="display: none">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<h1> Lipoinyección </h1>
								<p> Este procedimiento consiste en la transferencia de su propia grasa corporal a sitios carentes de ésta. Lo más común es que se inyecte en los glúteos y en la cara. La grasa se extrae generalmente del abdomen mediante liposucción. </p>
								<p> Parte de lo inyectable se reabsorbe en los glúteos un 40%, 20% en cara y en mamas un 80%, es por esto que es necesario inyectar un volumen mayor al deseado. En el caso de las mamas, que se absorbe el 80% de lo inyectado, se prefiere aumentar el volumen con implantes, no con grasa. </p>
								<p> En la cara es ideal para restaurar volumen y borrar surcos ya que se pierde muy poca grasa, es tejido propio y su duración es mayor a otro tipo de rellenos. </p>					
							</div>
							<div class="col-lg-3 col-md-3">
								<img src="{{asset('images/procedimientos/cirugia_estetica/lipoinyeccion.jpg')}}" width="100%" alt="">
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