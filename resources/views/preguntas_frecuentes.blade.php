@extends('layouts.master')

@section('contenido')

	<section class="blog-area section-gap faqs" id="procedimientos">
		<div class="container">
  			<h1>Preguntas Frecuentes</h1>
		  	<p>Las preguntas más frecuentes</p>
		  	<div id="accordion">
		    	<div class="card text-left">
		      		<div class="card-header faq-question">
		      			<i class="fas fa-question-circle icon-contact"></i>
		        		<a class="card-link" data-toggle="collapse" href="#collapseOne">
		          			¿Que son los implantes mamarios?
		        		</a>
		      		</div>
		      		<div id="collapseOne" class="collapse" data-parent="#accordion">
		        		<div class="card-body faq-answer">
		          			Son cápsulas blandas de silicona rellenas con gel de silicona o solución salina.
							Estos implantes se usan para agrandar o modificar la forma de los senos.
		       			 </div>
		    		</div>
		    	</div>
		    	<div class="card text-left">
		      		<div class="card-header faq-question">
		      			<i class="fas fa-question-circle icon-contact faq-question"></i>
		        		<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
		        			 ¿Qué consecuencias negativas puede tener el tabaco en una cirugía plástica?
		     	 		</a>
		      		</div>
		      		<div id="collapseTwo" class="collapse" data-parent="#accordion">
		        		<div class="card-body faq-answer">
		          			Fumar estrecha los vasos sanguíneos disminuyendo el suministro sanguíneo a las células, lo que hará que el cuerpo demore más en cicatrizar y que aumente la posibilidad de desarrollar infecciones, necrosis cutánea u otras complicaciones.
		        		</div>
		      		</div>
		    	</div>
		    	<div class="card text-left">
		      		<div class="card-header faq-question">
		      			<i class="fas fa-question-circle icon-contact faq-question"></i>
		        		<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
		          			¿Es necesario hacerse análisis previos a una cirugía?
		        		</a>
		      		</div>
		      		<div id="collapseThree" class="collapse" data-parent="#accordion">
		        		<div class="card-body faq-answer">
		          			Sí, es necesario hacerse exámenes antes de cualquier procedimiento. El médico le indicará durante la consulta que análisis requiere.
			       		</div>
		      		</div>
		    	</div>
		    	<div class="card text-left">
		      		<div class="card-header faq-question">
		      			<i class="fas fa-question-circle icon-contact faq-question"></i>
		        		<a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
		          			¿Es doloroso someterse a una cirugía plástica?
		        		</a>
		      		</div>
		      		<div id="collapseFour" class="collapse" data-parent="#accordion">
		        		<div class="card-body faq-answer">
							En términos generales cualquier procedimiento de cirugía plástica es muy bien tolerado por los pacientes y el dolor cede con la administración de analgésicos de uso habitual.
			       		</div>
		      		</div>
		    	</div>
		    	<div class="card text-left">
		      		<div class="card-header faq-question">
		      			<i class="fas fa-question-circle icon-contact faq-question"></i>
		        		<a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
		          			¿Es seguro realizarse procedimientos de cirugía plástica?
		        		</a>
		      		</div>
		      		<div id="collapseFive" class="collapse" data-parent="#accordion">
		        		<div class="card-body faq-answer">
							Actualmente es muy seguro someterse a procedimientos de cirugía plástica; siempre y cuando sea realizado por un cirujano calificado y en instalaciones hospitalarias que cuenten con toda la infraestructura para poder hacer frente a cualquier incidente durante y después de alguna cirugía, esto es, quirófanos equipados con la más alta tecnología y poder atender alguna urgencia durante ella, terapia intensiva, laboratorios de análisis clínicos, entre otros. En pocas palabras una clínica donde se pueda hacer frente a cualquier eventualidad o complicación médica. 
			       		</div>
		      		</div>
		    	</div>
		  	</div>
		</div>
	</section>

@stop