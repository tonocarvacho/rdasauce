<?php
/**
 *Template Name: landing-almacenaje
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RDASauce
 */

get_header('almacenaje');
?>
	
			
	 <section class="video-section landingvideo">
	 	<img class="fondo" src="<?php the_post_thumbnail_url()?>" alt="" />
		 <div class="landcont">
				<div class="mitad">
						<h3 class="montserrat delgado">SOLUCIÓN LOGÍSTICA TOTAL PARA TUS MERCANCÍAS DE <strong>EXPORTACIÓN O IMPORTACIÓN</strong></h3>

						
					</div>
					<div class="fondoform ">
                          <h3 class="titform"><i class="fa fa-check naranja"></i> Solicitar más información</h3>
                          <p class="subtform">Envíanos tus datos<br>y te contactaremos</p>
                          <?php echo do_shortcode( '[contact-form-7 id="248" title="almacenaje parqueo"]' ); ?>
            <!--  <form>
                
                  
                <div class="">
                    <input type="text" placeholder="Nombre">
                  </div>
                
                  <div class="">
                    <input type="text" placeholder="Email">
                  </div>
                
                <div class="">
                    <input type="number" placeholder="Teléfono">
                  </div>
                <div class="my-btn my-btn-primary">
								<div class="my-btn-bg-top"></div>
								<div class="my-btn-bg-bottom"></div>
								<button type="submit" class="my-btn-text top15"><i class="fa fa-arrow-right"></i> SOLICITAR ASESORÍA</button>
							</div>
                  
                
           
                
              </form>-->
                  
            </div>
				</div>	
	 </section>
	    <section class="def-section landing seccicons">
        
<div class="contenedor sololanding reverse">
	<div class="mitad icon-left">
		<img class="" src="<?php echo bloginfo('template_url');?>/img/landing/parq.png">
		<div>
		<h3><strong>Parqueo Comercial</strong> <br><span>Para tus cargas de exportación</span> </h3>
		<a href="https://rdaelsauce.cl/parqueo-comercial/"><div class="my-btn my-btn-primary contactarse solodesktop btnase">
								<div class="my-btn-bg-top"></div>
								<div class="my-btn-bg-bottom"></div>
								<div class="my-btn-text">
									 VER <strong>DETALLES</strong>
								</div>
							</div></a>
		</div>
		

	</div>
	<div class="mitad icon-left">
		<img class="" src="<?php echo bloginfo('template_url');?>/img/landing/alm.png">
		<div>
		<h3><strong>Almacenamiento Comercial</strong> <br><span>Para mercancías que ingresen a Chile</span> </h3>
		<a href="https://rdaelsauce.cl/almacenajecomercial/"><div class="my-btn my-btn-primary contactarse solodesktop btnase">
								<div class="my-btn-bg-top"></div>
								<div class="my-btn-bg-bottom"></div>
								<div class="my-btn-text">
									 VER <strong>DETALLES</strong>
								</div>
							</div></a>
		</div>
		

	</div>
	
	
        	

        </div>
        
    </section>
    
	<!-- ===================================
		SECTION STATS
	======================================== -->
	<div id="beneficios" class="def-section home2stats fraselanding" >
		<div class="title-group">
					<h3 class="montserrat delgado"><span class="ticket"><i class="fa fa-check-circle"></i></span> BENEFICIOS GENERALES</h3>
					
				
				</div>
		
		
	</div>
	<!-- ===================================
		END SECTION STATS
	======================================== -->
	    <section class="def-section empresa landinglist liuno">
        
<div class="contenedor sololanding">
	<div class="mitad frase"><ul class="sinmargen listaticket">
        		<li><i class="fa fa-check"></i> <span>Bodegas para carga general (Importación y Exportación).</span></li>
        		<li><i class="fa fa-check inlineblock"></i> <span class="inlineblock">Coordine de forma ágil y eficiente sus operaciones.</span></li>
        		<li><i class="fa fa-check"></i> <span>Operación constante.</span></li>
        		<li><i class="fa fa-check"></i> <span>Flexibilidad de tarifas por volumen.</span></li>
				<li><i class="fa fa-check"></i> <span>Seguridad total del recinto 24/7.</span></li>
        		
        	</ul>
					
        	</div>
        	<div class="mitad frase"><ul class="sinmargen listaticket">
        		
        		<li><i class="fa fa-check"></i> <span>Posibilidad de aparcar posterior al proceso de nacionalización de su carga.</span></li>
        		<li><i class="fa fa-check"></i> <span>Actividades de control de los vehículos y supervisión de tránsito interior.</span></li>
        		<li><i class="fa fa-check"></i> <span>Parqueo diario con un costo de US$10.</span></li>
				<li><i class="fa fa-check"></i> <span>Sellaje de exportación por personal de aduana directo en nuestro recinto.</span></li>
        	</ul>
					
        	</div>

        </div>
        
    </section>

<!-- ===================================
		SECTION STATS
	======================================== -->
	
	<div class="page-rda frase-parallax" data-stellar-background-ratio="0.4">
		<div class="stats-overlay"></div>
		<div class="container">
			<div class="row">
				<!-- === TITLE GROUP === -->
				<div align="center">
					<div class="main-slider-content">
        				<h2 class="delgado">
							<strong>Soluciones ideales para períodos de congestión por cierre fronterizo</strong>
        				</h2>
        
                        
						
                         
                    </div>
					
				</div>
			
				</div>

			</div>
		</div>
	<!-- ===================================
		END SECTION STATS
	======================================== -->


	<section id="listadocus" class="landinglist documentosseccion oculto">
		<div class="contenedorfull">
				<h3 class="montserrat delgado">1. DOCUMENTOS NECESARIOS PARA LA <strong>EXPORTACIÓN A CHILE</strong>: </h3>
				<ul class="listadocus">
		        		<li><div class="icondocu"><img  src="<?php echo bloginfo('template_url');?>/img/landing/embarque.png"></div> <span><strong>Conocimiento de Embarque en original</strong>, que acredite el dominio de la mercancía por parte del consignatario.</span></li>

		        		<li><img class="icondocu" src="<?php echo bloginfo('template_url');?>/img/landing/factura.png"> <span><strong> Factura comercial original</strong>, que acredite la mercancía objeto de compraventa y sus valores.</span></li>

		        		<li><img class="icondocu" src="<?php echo bloginfo('template_url');?>/img/landing/certificado.png"> <span> <strong>Certificado de Seguro</strong> con el monto de la prima pagada (cláusula CIF).</span></li>

		        		<li><img class="icondocu" src="<?php echo bloginfo('template_url');?>/img/landing/declaracion.png"> <span><strong>Declaración Jurada</strong> del importador sobre el precio de las mercancías, formulario que entrega el agente de aduanas.</span></li>

		        		<li><img class="icondocu" src="<?php echo bloginfo('template_url');?>/img/landing/mandato.png"> <span><strong>Mandato</strong> constituido por el solo endoso del original del conocimiento de embarque.</span></li>
		        		
		        	</ul>
		        	<!--<div class="btnlanding"><div class="my-btn my-btn-primary ">
		        									<div class="my-btn-bg-top"></div>
		        									<div class="my-btn-bg-bottom"></div>
		        									<div class="my-btn-text">
		        										 <strong>CLICK AQUI</strong> Si Necesitas Ayuda Con Tus Documentos Para Exportar En Chile

		        									</div>
		        								</div></div>-->
							<h3 class="montserrat delgado">2. DOCUMENTOS ESPECIALES SEGÚN OPERACIÓN: </h3>
				<ul class="listadocus">
		        		<li><img class="icondocu" src="<?php echo bloginfo('template_url');?>/img/landing/certificado.png"> <span><strong>Certificado de Origen original</strong>, en caso que la importación se acoja a alguna preferencia arancelaria, en virtud de un Acuerdo Comercial.</span></li>

		        		<li><img class="icondocu" src="<?php echo bloginfo('template_url');?>/img/landing/listaempaque.png"> <span><strong>Lista de empaque</strong>, cuando proceda.</span></li>

		        		<li><img class="icondocu" src="<?php echo bloginfo('template_url');?>/img/landing/notas.png"> <span><strong>Nota de Gastos</strong>, cuando estos no estén incluidos en la factura comercial o también cuando se trate de una compra con cláusula ex fábrica.</span></li>
		        	</ul>
				</div>


	</section>
	<div id="contactarse"></div>
	<div id="profesionales" class="def-section home2stats fraselanding oculto" >
		<div class="title-group">
					<h3 class="montserrat delgado"><strong>Solicita Asesoría</strong> Con Nuestros Profesionales</h3>
					<br>
				
				</div>
		
		
	</div>
		<!-- =========================
		CONTACTS
	============================== -->
    <div class="def-section" id="contacto">
		<div class="container">
			<div class="row">
				
		
				
				<!-- === CONTACTS INFO === -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<h3>
<strong>Cuenta con Nosotros</strong><br>
Un equipo humano especializado<br>
Se pondrá en contacto con usted.</h3>
<img  src="<?php echo bloginfo('template_url');?>/media/main-slider/equipo.jpg">
				</div>
				
				<!-- === CONTACTS FORM === -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="fondoform marginauto">
                          <h3 class="titform"><i class="fa fa-check naranja"></i> Contacte a un asesor </h3>
                          <p class="subtform">Envíanos tus datos<br>y  nos pondremos en contacto con usted.</p>
                          <?php echo do_shortcode( '[contact-form-7 id="248" title="almacenaje parqueo"]' ); ?>
                  
            </div>
				</div>
				
				
			</div>
		</div>
	</div>
	
	<!-- ===================================
		SECTION STATS
	======================================== -->
	<div id="pregfreq" class="def-section home2stats fraselanding" >
		<div class="title-group">
			<div class="iconpreg"><i class="fa fa-list-ul"></i></div>
					<h3 class="montserrat delgado">REVISA AQUÍ NUESTRAS<br>
						<strong>PREGUNTAS FRECUENTES</strong></h3>
						<!--<p class="claro"><i class="fa fa-arrow-right"></i> <span>Contactarse</span></p>-->
				
				</div>
		
		
	</div>
	<!-- ===================================
		END SECTION STATS
	======================================== -->
	<section class="landinglist documentosseccion">
		<div class="contenedorfull">
				<ul class="sinmargen" >
					<li class="pregunta" ><i class="fa fa-caret-right"></i><i class="fa fa-caret-down oculto"></i> <strong>¿A qué cargas va dirigido el parqueo comercial?</strong><br>
		        		<span class="oculto">El parqueo comercial va dirigido a las cargas de importación ya nacionalizadas en el recinto y a las mercancías de exportación.</span></li>

		        		<li class="pregunta" ><i class="fa fa-caret-right"></i><i class="fa fa-caret-down oculto"></i> <strong>¿Qué cargas puedo sellar en Extraportuario El Sauce?</strong><br>
		        		<span class="oculto">Solamente  las cargas de exportación.</span></li>

		        		<li class="pregunta" ><i class="fa fa-caret-right"></i><i class="fa fa-caret-down oculto"></i> <strong> ¿Qué cargas puedo almacenar en bodegas?</strong><br>
		        		<span class="oculto">Cualquier carga de importación o exportación, exceptuando las cargas refrigeradas o IMO (carga peligrosa).</span></li>

						<li class="pregunta" ><i class="fa fa-caret-right"></i><i class="fa fa-caret-down oculto"></i> <strong> ¿Qué es Parqueo Comercial?</strong><br>
		        		<span class="oculto">Estacionamiento que se brinda a los camiones con su carga, en una zona primaria.</span></li>

						<li class="pregunta" ><i class="fa fa-caret-right"></i><i class="fa fa-caret-down oculto"></i> <strong> ¿Cuáles son los costos del almacenaje?</strong><br>
		        		<span class="oculto">Son a convenir con el cliente de acuerdo a sus necesidades.</span></li>
		        		</ul>
	<!--<div class="btnlanding"><div class="my-btn my-btn-primary ">
		        									<div class="my-btn-bg-top"></div>
		        									<div class="my-btn-bg-bottom"></div>
		        									<div class="my-btn-text">
		        										 <strong>CLICK AQUI</strong> Si Necesitas Ayuda Con Tus Documentos Para Exportar En Chile

		        									</div>
		        								</div></div>-->
		        	<ul class="sinmargen" >
		        		
						<li class="pregunta" ><i class="fa fa-caret-right"></i><i class="fa fa-caret-down oculto"></i> <strong> ¿Quiénes pueden importar o exportar a Chile?</strong><br>
		        		<span class="oculto">Las personas naturales o jurídicas que tengan RUT e iniciación de actividades ante el Servicio de Impuestos Internos.</span></li>

		        		<li class="pregunta" ><i class="fa fa-caret-right"></i><i class="fa fa-caret-down oculto"></i> <strong>¿Qué tipos de cargas puedo mover?</strong><br>
		        		<span class="oculto">Puede importarse cualquier mercancía, salvo aquellas que se encuentren expresamente prohibidas por la legislación vigente. En ocasiones, el producto a importar, por su naturaleza, puede estar sujeto a visto bueno, autorización o control por parte de algún servicio fiscalizador, por lo que es necesario obtenerlo, en forma previa, ante el respectivo organismo.</span></li>

		        		<li class="pregunta" ><i class="fa fa-caret-right"></i><i class="fa fa-caret-down oculto"></i> <strong>¿Qué mercancías requieren visaciones, certificaciones o vistos buenos para su importación?</strong><br>
		        		<span class="oculto">Todas aquellas mercancías que, de acuerdo a la legislación vigente, deban ser sometidas a control previo a su importación, por algún organismo del Estado (Servicio Agrícola y Ganadero / Seremi Salud, Etc)</span></li>

		        		<li class="pregunta" ><i class="fa fa-caret-right"></i><i class="fa fa-caret-down oculto"></i> <strong>¿Cómo solicito la asesoría?</strong><br>
		        		<span class="oculto">Simplemente debes ingresar a nuestro sitio web www.rdaelsauce.cl solicito asesoría y te contactará inmediatamente con el área comercial del Extraportuario, los cuales tomarán contacto con su persona a la brevedad posible.</span></li>
		        	
		        		

		        		
		        		
		        	</ul>
		        
							
				</div>


	</section>



	


	
     
     
    
     
     
     
     

	
	
	

	<!-- =========================
		CONTACTS DETAILS
	============================== -->
    <div class="def-section contact-details landingcontacto">
		<div class="container">
			<div class="row">
				
				<!-- === CONTACTS DETAILS ITEM === -->
				
				
				<!-- === CONTACTS DETAILS ITEM === -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contact-detail contact-detail-mark">
					<div class="contact-detail-icon">
						<i class="flaticon-telephone5"></i>
					</div>
					<div class="contact-detail-title">
						<h3>TELÉFONO</h3>
					</div>
					<div class="contact-detail-text">
						+56 9 5788 6514
					</div>
				</div>
				
				<!-- === CONTACTS DETAILS ITEM === -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contact-detail">
					<div class="contact-detail-icon">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="contact-detail-title">
						<h3>E-MAIL</h3>
					</div>
					<div class="contact-detail-text">
						informaciones@rdaelsauce.cl
					</div>
				</div>
			
			</div>
		</div>
	</div>
	<div id="respaldado" class="def-section fraselanding" >
		
					<p class="montserrat delgado">Servicio de Asesoría respaldado por <a href="http://rdaelsauce.cl"> <span class="inlineblock"><i class="fa fa-arrow-right"></i> EXTRAPORTUARIO EL SAUCE</span></a> </p>
					
				
				
		
		
	</div>
	<!-- =========================
		END CONTACTS DETAILS
	============================== -->
	
<script type="text/javascript">
	(function( $ ) {
		$(document).ready(function(){
			$(".btndocus").click(function() {
				$( "#listadocus" ).slideDown('fast');
$( "#profesionales" ).slideDown('fast');
				event.preventDefault();
    $('html, body').animate({
        scrollTop: $("#beneficios").offset().top
    }, 2000);
});

			$(".btnpreg").click(function() {
				event.preventDefault();
    $('html, body').animate({
        scrollTop: $("#pregfreq").offset().top
    }, 2000);
});

$(".btncont").click(function() {
	$( "#listadocus" ).show();
$( "#profesionales" ).show();
				event.preventDefault();
    $('html, body').animate({
        scrollTop: $("#contactarse").offset().top
    }, 2000);
});

$(".contactarse").click(function() {
	$( "#listadocus" ).show();
$( "#profesionales" ).show();
				event.preventDefault();
    $('html, body').animate({
        scrollTop: $("#contactarse").offset().top
    }, 2000);
});

		

		
  //$( "i" ).insertBefore( $( ".wpcf7-list-item-label" ) );
  $( ".pregunta" ).click(function() {
$(this).find('span').toggle();
$(this).find('i.fa-caret-right').toggle();
$(this).find('i.fa-caret-down').toggle();
});
})

  $( "#btndocuscontenedor" ).click(function() {
$( "#listadocus" ).slideToggle('fast');
$( "#profesionales" ).slideToggle('fast');
});

  })( jQuery );
</script>
	
<?php
get_footer('landing');
