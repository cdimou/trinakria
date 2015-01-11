<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php include_once (TEMPLATEPATH . '/utils.php' );?>
<?php 
/* Template Name: Ficha Alojamiento */
get_header();
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
  
  
  
  
    <div class="row">
	
	<?php 
	global $wp_query;
	if (isset($wp_query->query_vars['page'])) {
		$id = $wp_query->query_vars['page'];
	}
	$aloj = datos_alojamiento($id);    

	$submenu=2;

	if( $aloj['isla'] == 'Sardegna'){
		include_once (TEMPLATEPATH . '/inc/menu-sub-cerdena.php' );
	} else {
		include_once (TEMPLATEPATH . '/inc/menu-sub-'.$aloj['isla'].'.php' );
	}

	?>
      <main class="main main-left col-md-6 col-sm-6 col-xs-12">
        <h1><?php echo $aloj['name']; ?></h1>
        <div class="bs-example bs-example-tabs">
          <ul id="myTab" class="nav nav-tabs strong">
            <li class="active"><a href="#descripcion" data-toggle="tab">Descripción</a></li>
            <li><a href="#precios" data-toggle="tab">Precios</a></li>
            <li><a href="#reserva" data-toggle="tab">Reserva</a></li>
            <li><a href="#amigo" data-toggle="tab">Díselo a un amigo</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="descripcion"> 
              <div class="scrolly-xs">
	      <p><?php echo $aloj['description'];?> </p>

<!-- Cannot match XML fields with the following sections

                <h3>Lugares de interés cercanos </h3>
                <ul>
                  <li><strong>Palermo (62 Km en autopista)</strong> – Capital de <?php echo $destino; ?></li>
                  <li><strong>Agrigento (140 Km)</strong> <strong>Valle de los Templos</strong> griegos IV siglo a.C , Erice (50 Km) – Ciudad Medieval </li>
                  <li><strong>Parque Natural de lo Zingaro</strong> (18 Km.) – Parque natural sobre el mar</li>
                  <li><strong>San Vito Lo Capo</strong> (42 Km) – Pueblo marinero patria del Cous Cous a la <?php echo $destino; ?>na</li>
                  <li><strong>Segesta</strong> (18 Km) – Templo y Anfiteatro Griego</li>
                  <li><strong>Marsala</strong> y sus salinas y sus maravillosas bodegas de vino. </li>
                </ul>
                <p>Otra opción es perderse por las vírgenes <strong>islas Egadi (Levanzo, Marettimo y Favignana)</strong> que se encuentran delante de Trapani.</p>
                <h3>Categoría </h3>
                <p>B&amp;B de gestión familiar (Ambiente Rural cerca del Pueblo) </p>
                <ul>
                  <li><strong>Habitaciones con Baño Privado</strong>: 4 </li>
                  <li><strong>Servicios en la habitación</strong>: Toallas, Calefacción, Aire Acondicionado, Cambio de las sábanas cada 3 días </li>
                  <li><strong>Servicios Comunes</strong>: WiFi, Parking, Jardín y Piscina.</li>
                </ul>
                <h3>A destacar</h3>
                <p>Maravillosos desayunos, Jardín muy bien cuidado, hospitalidad y simpatía de los propietarios, casa del campo en una carretera secundaria pero fácil de encontrar y bastante cerca desde el centro de Trapani y de la autopista (15 minutos de coche), ideal para parejas y pequeños grupos de amigos.</p>
-->
                <h3>Servicios</h3>
                <ul class="widget text-muted">
		<?php foreach($aloj['servicios'] as $servicio){ 
		         if( $servicio['value'] != ''){ ?>
				<li class="col-md-6"><span class="glyphicon <?php echo $servicio['icon'];?>"></span><?php echo $servicio['text'] ?></li>
		<?php    } 
		      } ?>

                </ul>
                <br/>
                <br/>
                <br/>
              </div>
            </div>
            <div class="tab-pane fade" id="precios">
              <table class="table">
                <thead>
                  <tr>
                    <th>Desde</th>
                    <th>Hasta</th>
                    <th align="right"><strong>A partir de:</strong></th>
                  </tr>
                </thead>
                <tbody>

		<? foreach($aloj['precios'] as $item) { ?>
                  <tr>
		  <td><?php echo $item['from']?></td>
		  <td><?php echo $item['to']?></td>
		  <td align="right"><strong><?php echo $item['price']?></strong></td>
                  </tr>
		<?php } ?>
                </tbody>
              </table>
              <small>* Precios por persona/noche en habitación doble.<br>
              Todos los precios <u>incluyen</u>: habitación con baño privado y desayuno, gastos administrativos de reserva, IVA e impuestos.<br>
              <em>Precios en habitaciones triples, cuádruples y precios para niños hasta 8 años a consultar</em></small>
              <p>&nbsp;</p>
            </div>
            <div class="tab-pane fade in" id="reserva">
              <?php include_once (TEMPLATEPATH . '/inc/order.php' );?>
            </div>
            <div class="tab-pane fade in" id="amigo">
              <?php include_once (TEMPLATEPATH . '/inc/amigo.php' );?>
            </div>
            <div class="tab-pane fade" id="dropdown1">
              <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
            </div>
            <div class="tab-pane fade" id="dropdown2">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
            </div>
          </div>
        </div>
      </main>
      <div class="col-md-6 col-sm-6 col-xs-12 sidebar text-muted" > 
        
        <?php if ($ruta){?>
          
          <div class=""><a class="btn btn-warning  pull-right spacer" href="/trinakria/ruta/?ruta=<?php echo $ruta;?>">Ruta <?php echo $ruta;?></a>
          </div>
	
          
		  <?php  }?>
          
        <!-- Slider Fotorama -->
	<div class="fotorama" data-max-width="100%" data-nav="thumbs" data-allowfullscreen="true" data-loop="true"> 
	<?php foreach($aloj['photos'] as $photo) { ?>
		<img src="<?php echo $photo?>" data-caption=""> 
	<?php } ?>
        <!-- /.slider -->
        
        <div class="map">
          <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=ca&amp;geocode=&amp;q=la+lume+de+candele+<?php echo $destino; ?>&amp;aq=&amp;sll=46.528635,8.129883&amp;sspn=21.259619,53.569336&amp;t=m&amp;ie=UTF8&amp;hq=la+lume+de+candele&amp;hnear=Sic%C3%ADlia,+It%C3%A0lia&amp;ll=37.980983,12.578301&amp;spn=0.190161,0.41851&amp;z=12&amp;iwloc=A&amp;cid=9427955807918848652&amp;output=embed"></iframe>
        </div>
        <div class="sidebar">
          <!--<h3>Otros alojamientos en la zona</h3>
          <?php for ($i = 1; $i <= 4; $i++) { ?>
          <div class="row list linkable">
          <div class="col-md-4 col-sm-4 col-xs-6 offset-0"> <a href="/trinakria/ficha/"><img src="http://gnaziu.shinesicily.com/Media/Agenzia_2/Strutture/Struttura_178/Images/Normal/80.jpg"  class="img-rounded img-responsive"></a> </div>
          <div class="col-md-8 col-sm-8 col-xs-6 description">
            <h2><a href="/trinakria/ficha/">A Lume di Candele</a></h2>
            <span class="text-muted">Paceco Trapani</span>
            <p class="hidden-xs">La casa ha sido recientemente reformada y decorada con muebles de época para crear una atmósfera única.</p>
          </div>
          
        </div>
          <?php } ?> -->
          <div class="spacer"></div>
          
          <?php if ($ruta){?>
          
          <a class="btn btn-warning" data-spy="affix" data-offset-top="850" href="/trinakria/ruta/?ruta=<?php echo $ruta;?>">&laquo; Volver Ruta <?php echo $ruta;?></a>
          
		  <?php  } else {?>
    <a class="btn btn-warning" data-spy="affix" data-offset-top="850" href="/trinakria/alojamientos/">&laquo; Alojamientos en <?php echo $destino; ?></a>
    <?php }	?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/condiciones-modal.php' );?>
<?php include_once (TEMPLATEPATH . '/inc/politica-modal.php' );?>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
