<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Ruta Cerdena 1 */
get_header();
$destino='Cerdeña';
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=1; include_once (TEMPLATEPATH . '/inc/menu-sub-cerdena.php' );?>
      <main class="main main-left col-md-6 col-sm-6 col-xs-12">

	<h1>Cerdeña con encanto <small><small>Ideal Luna de miel y viaje romántico a Cerdeña</small></small></h1>
	<p/>
        <div class="bs-example bs-example-tabs">
          <ul id="myTab" class="nav nav-tabs strong">
            <li class="active"><a href="#descripcion" data-toggle="tab">Descripción</a></li>
            <li><a href="#ficha-tecnica" data-toggle="tab">Ficha Técnica</a></li>
            <li><a href="#reserva" data-toggle="tab">Solicitar Viaje</a></li>
            <li><a href="#amigo" data-toggle="tab">Díselo a un amigo</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="descripcion">
              <div class="scrolly-xs">
<p>Cerdeña con encanto es una ruta particular, muy sugestiva y que os permitirá descubrir las costas de la isla desde la más virgen a la más famosas y glamour. Los alojamientos, algunos antiguos y otros modernos, han sido restaurados de manera muy atenta y elegante para que sus huéspedes se encuentren lo más cómodos y confortables posible. Es una de las mejores selecciones de hoteles con encanto de Cerdeña.</p>

<p>En nuestra concepción de turismo el ‘lujo’ no es el de los grandes hoteles a 5 estrellas sino el de las pequeñas casas históricas donde el cuidado del detalle es sorprendente así como la recepción, cálida pero discreta y atenta a las exigencias de los huéspedes. Los Boutiques Hotels de Cerdeña te ofrecen esta atmósfera única.</p>
 
<p>Todos los pequeños hoteles de esta ruta han sido escogido personalmente por <strong>Trinakria Tours</strong> para saborear Cerdeña y al mismo tiempo gozar de las comodidades de alojamientos de un nivel alto.</p>

<p><strong><a href="<?php bloginfo('template_directory'); ?>/inc/precios/cerdena-con-encanto.php" 
onclick="window.open('<?php bloginfo('template_directory'); ?>/inc/precios/cerdena-con-encanto.php','popup','width=500,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false">
Ver los precios de la ruta</a></strong></p>

<p><strong>Importante:</strong> Esta ruta con encanto por Cerdeña está estudiada para una <em>estancia de 15 días</em>, si vais a viajar menos o más días podemos confeccionaros <strong>un viaje hecho a medida</strong> para vosotros</p>

                <h2>Pequeños Hoteles de la ruta</h2>
                <p class="text-muted"><strong>Julio y Agosto mínimo 3 noches por Hotel*:</strong></p>
                <ol>
		  <li><a href="#" class="smooth">Wine Resort "Leda d’Ittiri"</a> <small class="text-muted">Alghero </small></a></li>
		  <li><a href="#" class="smooth">Hotel "Lucrezia" Riola Sardo</a>, <small class="text-muted">Oristano </small></a></li>
		  <li><a href="#" class="smooth">Hotel Relais "Villa del Borgo" Pula</a>, <small class="text-muted">Cagliari </small></a></li>
		  <li><a href="#" class="smooth">Hotel "Antico Palathos" Orosei</a>, <small class="text-muted">Nuoro </small></a></li>
		  <li><a href="#" class="smooth">Hotel "Stazzo Lu Ciaccaru"</a> <small class="text-muted">Arzachena Olbia-Tempio </small></a></li>
                </ol>
		<p class="spacer"> <small>*Este tour está estudiado considerando que llegáis y salís desde el aeropuerto de ALGHERO. Es posible invertir el sentido del tour en caso de llegada y salida a o desde el aeropuerto de Cagliari o bien adaptarlo en caso de llegada en otro aeropuerto.</small></p>
                
                
                <?php  $nn=0; foreach ($data[$destino]['fichas'] as $value) { $nn++; ?>
                <span class="anchor" id="b<?php echo $nn; ?>"></span>
                <div class="row list linkable">
                  <div class="col-md-2 col-sm-2 col-xs-4 offset-0"> <a href="/trinakria/ficha/?ruta=<?php echo $ruta; ?>&ficha=<?php echo $value; ?>"><img src="http://gnaziu.shinesicily.com/Media/Agenzia_2/Strutture/Struttura_178/Images/Normal/80.jpg"  class="img-rounded img-responsive"></a> </div>
                  <div class="col-md-10 col-sm-10 col-xs-8 description">
                    <h2><a href="/trinakria/ficha/?ruta=<?php echo $ruta; ?>&ficha=<?php echo $value; ?>"><?php echo $value; ?></a></h2>
                    <span class="text-muted">Sant’Agata Militello, Messina</span>
                    <p class="hidden-xs">Este Bed &amp; Breakfast Rural ofrece una atmósfera tradicional y al mismo tiempo original.</p>
                  </div>
                </div>
                 <?php } ?>
                
              </div>
            </div>
            <div class="tab-pane fade" id="ficha-tecnica">
<h3>Tipo de Alojamiento:</h3>
<p>Boutiques Hotels y Relais. Todas las habitaciones tienen baño privado dentro de la habitación.</p>

<h3>Precios de la ruta:</h3>
<p class="text-muted"><strong>Desde 740,00 € por persona </strong></p>
<strong><a href="<?php bloginfo('template_directory'); ?>/inc/precios/cerdena-con-encanto.php" 
onclick="window.open('<?php bloginfo('template_directory'); ?>/inc/precios/cerdena-con-encanto.php','popup','width=500,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false">
Ver los precios de la ruta</a></strong>

<h3>Número de días:</h3>
<p>Mínimo 8 (Para visitar bien la isla aconsejamos elegir la opción TOUR 15 días)</p>
<p class="text-muted"><small>Aconsejamos elegir la combinación de 15 días que es un tiempo razonable para visitar la isla con calma.</small></p>

<h3>Mejores temporadas para este tipo de tour:</h3>
<p>Semana Santa - Primavera (Abr-Jun) - Septiembre - Octubre</p>
<p>La <u>Reservas para Agosto</u> serán tramitadas hasta máximo el mes de Mayo.</p>
<p>No aconsejamos planear el viaje desde el 5 hasta el 24 de Agosto porque es la única temporada en la que la isla se llena totalmente y no es agradable viajar y visitar lugares y playas. Consideramos mucho más ‘sostenible’ elegir meses como Junio o Septiembre</p>

<h3>El Precio incluye:</h3>
<p>Alojamiento en Habitación doble estándar, Desayuno, Coche de alquiler categoría B (i), Gastos administrativos, gastos de administración paquete vacacional, IVA e impuestos.</p>
<h3>El Precio NO incluye:</h3>
<p>vuelos (ii), seguro de viaje (iii), comidas, cenas y otros gastos personales.</p>

<ol>
<li>(i) El contrato del coche incluye: kilometraje ilimitado, seguro a terceros, cdw, cobertura contra robo, tasas de aeropuerto y todos los impuestos locales. El precio también incluye un Seguro a Todo Riesgo para daños y hurto. (<a href="#">Condiciones de alquiler de coche</a>)</li>
<li>(ii) No tramitamos vuelos porque la mayoría de compañías que vuelan a Cerdeña son de bajo coste y entendemos que es más económico si los compráis online vosotros mismos. Aquí aconsejamos sobre <a href="#">como llegar a Cerdeña</a>.</li>
<li>(iii) Bajo petición Tramitamos Seguros de Anulación y de Asistencia sanitaria. Nuestro proveedor de seguros habitual es AXA.</li>
</ol>

<h3>Opciones y Extras:</h3>
<p>Por separado es posible contratar actividades, experiencias, excursiones o cenas</p>

<p>IMPORTANTE: Para que todo quede claro no olvides de leer detenidamente nuestras <a href="#">condiciones de contratación</a> aunque es la parte más aburrida del contenido de esta página Web.</p>

            </div>

            <div class="tab-pane fade in" id="reserva">
              <?php include_once (TEMPLATEPATH . '/inc/order.php' );?>
            </div>
            <div class="tab-pane fade in" id="amigo">
              <?php include_once (TEMPLATEPATH . '/inc/amigo.php' );?>
            </div>
          </div>
        </div>
      </main>
      <div class="col-md-6 col-sm-6 col-xs-12 sidebar text-muted" >
	<div class="map"><img src="<?php bloginfo('template_directory'); ?>/img/cerdena/rutas/cerdena-con-encanto/Mapa_Cerdeña_con_encanto.png" class="img-rounded img-responsive"/>
	</div>
        
        <div class="sidebar">
          
<br/>
<strong>	  <a href="<?php echo site_url()?>/testimonios">Nuestros clientes dicen...</a></strong><br/>
	  <strong><a href="<?php echo site_url()?>/cerdena/guia/como-llegar">Cómo llegar a Cerdeña<a></strong>

          <h3>Todas nuestras rutas por Cerdeña</h3>
          
          <div class="row list linkable">
	  <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="<?php bloginfo('template_directory')?>/img/cerdena/rutas/cerdena-a-tu-aire.jpg" class="img-rounded img-responsive"></div>
            <div class="col-md-10 col-sm-10 col-xs10 description">
	      <h2><a href="<?php echo site_url()?>/cerdena/rutas/cerdena-a-tu-aire">Cerdeña a tu aire</a></h2>
              </div>
          </div>
          <div class="row list linkable">
	  <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="<?php bloginfo('template_directory')?>/img/cerdena/rutas/cerdena-rural.jpg"
		class="img-rounded img-responsive"></div>
            <div class="col-md-10 col-sm-10 col-xs10 description">
	      <h2><a href="<?php echo site_url()?>/cerdena/rutas/cerdena-rural">Cerdeña Rural</a></h2>
              </div>
          </div>
          <div class="row list linkable">
	  <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="<?php bloginfo('template_directory')?>/img/cerdena/rutas/cerdena-con-encanto.jpg"
		class="img-rounded img-responsive"></div>
            <div class="col-md-10 col-sm-10 col-xs10 description">
	      <h2><a href="<?php echo site_url()?>/cerdena/rutas/cerdena-con-encanto">Cerdeña con encanto</a></h2>
              </div>
          </div>


          <div class="spacer"></div>
	  <a class="btn btn-warning" data-spy="affix" data-offset-top="700" href="<?php echo site_url()?>/cerdena/rutas/">&laquo; Rutas por Cerdeña</a>
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/condiciones-modal.php' );?>
<?php include_once (TEMPLATEPATH . '/inc/politica-modal.php' );?>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
