@extends('layouts.master')

@section('contenido')

	<section id="home">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
        	<div class="carousel-item active" style="background-image: url('images/carousel/0.jpg')">
            	<div class="carousel-caption d-none d-md-block">
              		<a href="{{ route('promo_detalles','1')}}">
              			<h1>PROMOCIÓN: TRATAMIENTO REDUCTIVO</h1>
						<h4>HECCUS TURBO 3D: $480.000 las 10 sesiones</h4>
					</a>
            	</div>
          	</div>
          	<!-- Slide One - Set the background image for this slide in the line below -->
          	<div class="carousel-item" style="background-image: url('images/carousel/1.jpg')">
            	<div class="carousel-caption d-none d-md-block">
              		<a href="{{ route('promo_detalles','1')}}">
              			<h1>RINOPLASTÍA DE PUNTA</h1>
						<h4>Promoción de septiembre: $1.550.000.</h4>
					</a>
            	</div>
          	</div>
          	<!-- Slide Two - Set the background image for this slide in the line below -->
          	<div class="carousel-item" style="background-image: url('images/carousel/2.jpg')">
            	<div class="carousel-caption d-none d-md-block">
            		<a href="{{ route('promo_detalles','1')}}">
              			<h1>EXTRACCIÓN DE LUNAR MÁS BIOPSIA</h1>
						<h4>Promoción de septiembre: desde $280.000</h4>
					</a>
            	</div>
          	</div>
          	<!-- Slide Three - Set the background image for this slide in the line below -->
          	<div class="carousel-item" style="background-image: url('images/carousel/3.jpg')">
            	<div class="carousel-caption d-none d-md-block">
            		<a href="{{ route('promo_detalles','1')}}">
       	 	    		<h1>LIPOSUCCIÓN POR ZONAS</h1>
	    				<h4>Zona pequeña: desde $1.455.000 y Zona grande: desde $1.875.000.</h4>
	    			</a>
            	</div>
          	</div>
          	<div class="carousel-item" style="background-image: url('images/carousel/4.jpg')">
            	<div class="carousel-caption d-none d-md-block">
            		<a href="{{ route('promo_detalles','1')}}">
              			<h1>EXTRACCIÓN DE BOLAS DE BICHAT</h1>
						<h4>Valor: $1.250.000</h4>
					</a>
            	</div>
          	</div>
          	<div class="carousel-item" style="background-image: url('images/carousel/5.jpg')">
            	<div class="carousel-caption d-none d-md-block">
            		<a href="{{ route('promo_detalles','1')}}">
              			<h1>PROMOCIÓN DEL MES: RINOMODELACIÓN</h1>
						<h4>Desde $250.000</h4>
					</a>
            	</div>
          	</div>
          	<div class="carousel-item" style="background-image: url('images/carousel/6.jpg')">
            	<div class="carousel-caption d-none d-md-block">
            		<a href="{{ route('promo_detalles','1')}}">
              			<h1>REJUVENECIMIENTO FACIAL CON PEELING</h1>
						<h4>$90.000</h4>
					</a>
            	</div>
          	</div>
          	<div class="carousel-item" style="background-image: url('images/carousel/7.jpg')">
            	<div class="carousel-caption d-none d-md-block">
            		<a href="{{ route('promo_detalles','1')}}">
              			<h1>CIRUGÍA DE PÁRPADOS</h1>
						<h4>$1.500.000</h4>
					</a>
            	</div>
          	</div>
          	<div class="carousel-item" style="background-image: url('images/carousel/8.jpg')">
            	<div class="carousel-caption d-none d-md-block">
            		<a href="{{ route('promo_detalles','1')}}">
              			<h1>TOXINA BOTULÍNICA</h1>
						<h4>$80.000 por zona!</h4>
					</a>
            	</div>
          	</div>
          	<div class="carousel-item" style="background-image: url('images/carousel/9.jpg')">
            	<div class="carousel-caption d-none d-md-block">
            		<a href="{{ route('promo_detalles','1')}}">
              			<h1>LIPOESCULTURA ABDOMEN HD HOMBRE/MUJER</h1>
						<h4>$2.500.000</h4>
					</a>
            	</div>
          	</div>
          	<div class="carousel-item" style="background-image: url('images/carousel/10.jpg')">
            	<div class="carousel-caption d-none d-md-block">
            		<a href="">
              			<h1>MAMOPLASTÍA DE AUMENTO</h1>
						<h4>Desde $2.300.000 Hasta $2.630.000</h4>
					</a>
            	</div>
          	</div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
		<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  	<ol class="carousel-indicators">
		    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		    	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		    	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
		  	</ol>
		  	<div class="carousel-inner">
		    	<div class="carousel-item active">
		      		<img class="d-block w-100" src="images/1.jpg" height="700px" alt="First slide">
			    	<div class="carousel-caption d-none d-md-block">
				   		<h1>PROMOCIÓN DEL MES: RINOMODELACIÓN</h1>
				   		<h4>Desde $200.000 (Todo Junio)</h4>
					</div>
			    </div>
			    <div class="carousel-item">
			    	<img class="d-block w-100" src="images/2.jpg" height="700px" alt="Second slide">
			    	<div class="carousel-caption d-none d-md-block">
					   	<h1>REJUVENECIMIENTO FACIAL COMPLETO</h1>
				    	<h4>$2.550.000</h4>
				  	</div>
			   	</div>
		    	<div class="carousel-item">
		      		<img class="d-block w-100" src="images/3.jpg" height="700px" alt="Third slide">
			    	<div class="carousel-caption d-none d-md-block">
			    		<h1>TOXINA BOTULÍNICA</h1>
			    		<h4>$80.000 por zona!</h4>
			  		</div>
		   		</div>
		    	<div class="carousel-item">
		      		<img class="d-block w-100" src="images/4.jpg" height="700px" alt="Third slide">
			    	<div class="carousel-caption d-none d-md-block">
				    	<h1>CIRUGÍA DE PÁRPADOS</h1>
				    	<h4>Desde $1.750.000</h4>
				  	</div>
		    	</div>
		    	<div class="carousel-item">
		      		<img class="d-block w-100" src="images/5.jpg" height="700px" alt="Third slide">
			    	<div class="carousel-caption d-none d-md-block">
				    	<h1>LIPOESCULTURA ABDOMEN HD HOMBRE/MUJER</h1>
				    	<h4>$2.500.000</h4>
				  	</div>
		    	</div>
		    	<div class="carousel-item">
			   		<img class="d-block w-100" src="images/6.jpg" height="700px" alt="Third slide">
			    	<div class="carousel-caption d-none d-md-block">
				    	<h1>MAMOPLASTÍA DE AUMENTO</h1>
				    	<h4>Desde $2.300.000 Hasta $2.630.000</h4>
				  	</div>
			   	</div>
			</div>
			  		<!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    		<span class="sr-only">Previous</span>
			  		</a>
			  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    		<span class="sr-only">Next</span>
			 		</a> -->
		</div>
	</section>

	<section class="blog-area section-gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1>Testimonios</h1>
					<p>
						Ellos confiaron en nosotros.
					</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-auto mb-3">
					<div class="card" style="width: 18rem;">
					  	<img class="card-img-top" src="{{asset('images/testimonios/Anette-Kraus.jpeg')}}" alt="Anette Kraus">
					  	<div class="card-body">
					    	<p class="card-text font-italic">"CM Plástica es la única clínica estética en la cual la realidad supera las expectativas."</p>
					    	<p>Anette Kraus</p>
					  	</div>
					</div>
				</div>
				<div class="col-auto mb-3">
					<div class="card" style="width: 18rem;">
					  	<img class="card-img-top" src="{{asset('images/testimonios/Barbara-Chacana.jpeg')}}" alt="Barbara Chacana">
					  	<div class="card-body">
					    	<p class="card-text font-italic">"Una clínica de verdadera calidad humana y preocupación por el paciente."</p>
					    	<p>Barbara Chacana</p>
					  	</div>
					</div>
				</div>
				<div class="col-auto mb-3">
					<div class="card" style="width: 18rem;">
					  	<img class="card-img-top" src="{{asset('images/testimonios/Carla-Llana.jpeg')}}" alt="Carla Llaña">
					  	<div class="card-body">
					    	<p class="card-text font-italic">"En CM Plástica todo lo hacen con preocupación y dedicación. Encontré exactamente lo que estaba buscando."</p>
					    	<p>Carla Llaña</p>
					  	</div>
					</div>
				</div>
			</div>				
		</div>
	</section>

	<section class="about-area" id="dramora">
		<div class="container-fluid">
			<div class="row d-flex justify-content-end align-items-center">
				<div class="col-lg-6 col-md-12 about-left no-padding">
					<img class="img-fluid" src="images/about-img.jpg" alt="">
				</div>
				<div class="col-lg-6 col-md-12 about-right no-padding text-left">
					<h1>DRA. CARLA MORA PULIDO</h1>
					<h2>Cirujano Plástico</h2>
					<br>
					<ul>
						<li type="disc"><p>Título Médico Cirujano otorgado por la Universidad San Sebastián de Concepción, emitido el 12 de diciembre de 2003.</p></li>
						<li type="disc"><p>Título de especialista en Cirugía General otorgado por la Universidad de Concepción, emitido el 28 de julio de 2008.</p></li>
						<li type="disc"><p>Título de especialista en Cirugía Plástica y Reparadora otorgada por la Universidad de Chile, emitido el 30 de agosto de 2013.</p></li>
						<li type="disc"><p>Certificación de Especialista en Cirugía Plástica y Reparadora por CONACEM, registro nº14869.</p></li>
						<li type="disc"><p>Certificación en el registro nacional de prestadores individuales de salud, Superintendencia de Salud, Ministerio de Salud, inscripción nº 290.</p></li>
						<li type="disc"><p>Miembro de la Sociedad Chilena de Cirugía Plástica.</p></li>
						<li type="disc"><p>Miembro de la Sociedad Americana de Cirugía Plástica.</p></li>
					</ul>
					<div class="row logos">
						<div class="col">
							<img class="img-fluid " src="images/conacem_sigla.png" alt="">
						</div>
						<div class="col">
							<img class="img-fluid" src="images/sccp.png" alt="">
						</div>
						<div class="col">
							<img class="img-fluid" src="images/udechile.png" alt="">
						</div>
						<div class="col">
							<img class="img-fluid" src="images/asps2.png" alt="">
						</div>
					</div>
					<div class="row justify-content-end">
						<a class="btn btn-info mt-auto white-text" href="{{asset('files/curriculum_cm.pdf')}}"><i class="far fa-file-pdf" style="color: white;"></i> Curriculum PDF</a>
					</div>
				</div>						
			</div>
		</div>				
	</section>

	<!-- Start blog Area -->
	<section class="blog-area section-gap" id="procedimientos">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1>Procedimientos</h1>
					<p>
						La Dra. Carla Mora realiza procedimientos no invasivos e invasivos.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="single-blog col-lg-4 col-md-4 text-center d-flex flex-column procedimientos-text">
					<a href="{{ route('cirugia_estetica') }}">
						<img class="f-img mx-auto" src="images/cirugia_estetica.png" height="200px" alt="">
					</a>
					<h4>
						<a href="{{ route('cirugia_estetica') }}">CIRUGÍA ESTÉTICA</a>
					</h4>
					<p>
						Tiene como finalidad mejorar la apariencia de la persona según parámetros estéticos. Logrando un aumento de la autoestima y por consecuencia del atractivo de la persona.
					</p>
					<div class="span2 mt-auto">
						<a class="btn btn-info mt-auto white-text" href="{{ route('cirugia_estetica') }}">VER MÁS</a>							
					</div>
				</div>
				<div class="single-blog col-lg-4 col-md-4 text-center d-flex flex-column procedimientos-text">
					<a href="{{ route('cirugia_reparadora') }}">
						<img class="f-img mx-auto" src="images/cirugia_reparadora.png" height="200px" alt="">
					</a>
					<h4>
						<a href="{{ route('cirugia_reparadora') }}">CIRUGÍA REPARADORA</a>
					</h4>
					<p>
						Tiene como finalidad reconstruir un segmento corporal y su funcionalidad, dentro de esta área encontramos cirugía de quemaduras, fisurados, reconstrucción post traumatismo o post tratamientos por cáncer, entre otras.
					</p>
					<div class="span2 mt-auto">
						<a class="btn btn-info mt-auto white-text" href="{{ route('cirugia_reparadora') }}">VER MÁS</a>								
					</div>						
				</div>
				<div class="single-blog col-lg-4 col-md-4 text-center d-flex flex-column procedimientos-text">
					<a href="{{ route('minimamente_invasivos') }}">
						<img class="f-img mx-auto" src="images/minimamente_invasivos.png" height="200px" alt="">
					</a>
					<h4>
						<a href="{{ route('minimamente_invasivos') }}">MÍNIMAMENTE INVASIVOS</a>
					</h4>
					<p>
						Son procedimientos no quirúrgicos que se realizan de manera ambulatoria, que como su nombre lo indica, son mínimamente invasivos, principalmente punciones, como es el caso de la prevención y tratamiento de las arrugas con Toxina Botulínica o restauración del volumen facial con Acido Hialurónico.
					</p>
					<div class="span2 mt-auto">
						<a class="btn btn-info mt-auto white-text" href="{{ route('minimamente_invasivos') }}">VER MÁS</a>						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end blog Area -->

@stop