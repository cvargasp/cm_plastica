@extends('layouts.master')

@section('contenido')

	<section id="home">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              	<h1>PROMOCIÓN DEL MES: RINOMODELACIÓN</h1>
				<h4>Desde $200.000 (Todo Junio)</h4>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              	<h1>REJUVENECIMIENTO FACIAL COMPLETO</h1>
				<h4>$2.550.000</h4>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/3.jpg')">
            <div class="carousel-caption d-none d-md-block">
       	 	    <h1>TOXINA BOTULÍNICA</h1>
	    		<h4>$80.000 por zona!</h4>
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
					<div class="row">
						<div class="col">
							<img class="img-fluid " src="images/conacem_sigla.png" alt="">
						</div>
						<div class="col">
							<img class="img-fluid" src="images/sccp.png" alt="">
						</div>
						<div class="col">
							<img class="img-fluid" src="images/udechile.png" alt="">
						</div>
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
					<img class="f-img mx-auto" src="images/cirugia_estetica.png" height="200px" alt="">
					<h4>
						<a href="#">CIRUGÍA ESTÉTICA</a>
					</h4>
					<p>
						Tiene como finalidad mejorar la apariencia de la persona según parámetros estéticos. Logrando un aumento de la autoestima y por consecuencia del atractivo de la persona.
					</p>
					<div class="span2 mt-auto">
						<button type="button" class="btn btn-info mt-auto">VER MÁS</button>								
					</div>
				</div>
				<div class="single-blog col-lg-4 col-md-4 text-center d-flex flex-column procedimientos-text">
					<img class="f-img mx-auto" src="images/cirugia_reparadora.png" height="200px" alt="">
					<h4>
						<a href="#">CIRUGÍA REPARADORA</a>
					</h4>
					<p>
						Tiene como finalidad reconstruir un segmento corporal y su funcionalidad, dentro de esta área encontramos cirugía de quemaduras, fisurados, reconstrucción post traumatismo o post tratamientos por cáncer, entre otras.
					</p>
					<div class="span2 mt-auto">
						<button type="button" class="btn btn-info mt-auto">VER MÁS</button>								
					</div>						
				</div>
				<div class="single-blog col-lg-4 col-md-4 text-center d-flex flex-column procedimientos-text">
					<img class="f-img mx-auto" src="images/minimamente_invasivos.png" height="200px" alt="">
					<h4>
						<a href="#">MÍNIMAMENTE INVASIVOS</a>
					</h4>
					<p>
						Son procedimientos no quirúrgicos que se realizan de manera ambulatoria, que como su nombre lo indica, son mínimamente invasivos, principalmente punciones, como es el caso de la prevención y tratamiento de las arrugas con Toxina Botulínica o restauración del volumen facial con Acido Hialurónico.
					</p>
					<div class="span2 mt-auto">
						<button type="button" class="btn btn-info mt-auto">VER MÁS</button>								
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end blog Area -->

@stop