<?php get_header();
/*
Template Name: Servicios
*/

$thumb_id = get_post_thumbnail_id(get_the_ID());
$thumb_url = wp_get_attachment_image_src($thumb_id,'full');
$servicios_industriales = get_post_meta( $post->ID, 'servicios_industriales', true ); 
$servicios_comerciales_y_de_oficinas= get_post_meta( $post->ID, 'servicios_comerciales_y_de_oficinas', true );
$servicios_corporativos = get_post_meta( $post->ID, 'servicios_corporativos', true ); 
$servicios_adm_propiedades= get_post_meta( $post->ID, 'administracion_de_propiedades', true );
$servicios_adm_instalaciones = get_post_meta( $post->ID, 'administracion_de_instalaciones', true ); 
$servicios_gerencia= get_post_meta( $post->ID, 'gerencia_de_proyectos', true );
$servicios_inversiones = get_post_meta( $post->ID, 'inversiones', true ); 
$servicios_desarrollo= get_post_meta( $post->ID, 'desarrollo', true );
$servicios_bpo = get_post_meta( $post->ID, 'bpo_y_servicios_de_consultoria', true ); 
?>
<div class="banner-page">
	<img class="img_detalle_clinica" src="<?php echo $thumb_url[0]?>"/> 
	<h1 class="title no-margin title-servicios"><?php the_title(); ?></h1>	
</div>
<div class="container-fluid">
	<div class="row servicios">
		<div class="col-sm-6 transacciones">
			<div class="max-serv-transaccion">
				<div class="invisible-first" id="industriales-serv"><?php echo $servicios_industriales ?></div>
				<div class="invisible-first" id="comerciales"><?php echo $servicios_comerciales_y_de_oficinas ?></div>
				<div id="industriales"><?php echo $servicios_corporativos ?></div>
			</div>
		</div>
		<div class="col-sm-6 gerencia">
			<div class="max-serv-gerencia">
				<div class="invisible-first" id="propiedades"><?php echo $servicios_adm_propiedades ?></div>
				<div class="invisible-first" id="instalaciones"><?php echo $servicios_adm_instalaciones ?></div>
				<div id="gerencia"><?php echo $servicios_gerencia ?></div>
			</div>
		</div>
		<img src="<?php echo get_site_url(); ?>/wp-content/images/servicios/rsz_circulo.png" id="mapServicios" usemap="#mapServicios">
		<div class="aux_triangulo"></div>
		<div class="col-sm-12 financiero">
			<div class="max-serv-financiero">
				<div id="inversiones" class="col-sm-4"><?php echo $servicios_inversiones ?></div>
				<div id="desarrollo" class="col-sm-4"><?php echo $servicios_desarrollo ?></div>
				<div id="bpo" class="col-sm-4"><?php echo $servicios_bpo ?></div>
			</div>
		</div>
	</div>
</div>
<?php $item=$_GET['item']?>
<script>
(function($){
	$(document).ready(function ()
	{
		$('#mapServicios').mapster({
		singleSelect : false,
		render_highlight : { altImage : '<?php echo get_site_url(); ?>/wp-content/images/servicios/rsz_circulo_2.png' },
	    mapKey: 'color',
		fill : true, altImage : '<?php echo get_site_url(); ?>/wp-content/images/servicios/rsz_circulo_2.png',
		fillOpacity : 0.2,
		areas : [{key : '<?php echo $item; ?>', selected : true, altImage : '<?php echo get_site_url(); ?>/wp-content/images/servicios/rsz_circulo_2.png'}],
		onClick: function (e) {
			console.log(e['selected']);
			console.log(e['key']);
      			if(e['key'] == "1"){
      				if(e['selected'] == true){
      					$("#industriales-serv").toggle();
      				}else{
      					$("#industriales-serv").toggle();
      				}
      			}
      			if(e['key'] == "2"){
      				if(e['selected'] == true){
      					$("#comerciales").toggle();
      				}else{
      					$("#comerciales").toggle();
      				}
      			}
      			if(e['key'] == "3"){
      				if(e['selected'] == true){
      					$("#industriales").toggle();
      				}else{
      					$("#industriales").toggle();
      				}
      			}
      			if(e['key'] == "4"){
      				if(e['selected'] == true){
      					$("#inversiones").toggle();
      				}else{
      					$("#inversiones").toggle();
      				}
      			}
      			if(e['key'] == "5"){
      				if(e['selected'] == true){
      					$("#desarrollo").toggle();
      				}else{
      					$("#desarrollo").toggle();
      				}
      			}
      			if(e['key'] == "6"){
      				if(e['selected'] == true){
      					$("#bpo").toggle();
      				}else{
      					$("#bpo").toggle();
      				}
      			}
      			if(e['key'] == "7"){
      				if(e['selected'] == true){
      					$("#propiedades").toggle();
      				}else{
      					$("#propiedades").toggle();
      				}
      			}
      			if(e['key'] == "8"){
      				if(e['selected'] == true){
      					$("#instalaciones").toggle();
      				}else{
      					$("#instalaciones").toggle();
      				}
      			}
      			if(e['key'] == "9"){
      				if(e['selected'] == true){
      					$("#gerencia").toggle();
      				}else{
      					$("#gerencia").toggle();
      				}
      			}
            }
	});
	});
})(jQuery);  
</script>

<map name="mapServicios">
    <area alt="" title="" href="#1" color="1" shape="poly" coords="300,130,298,262,247,282,163,179,224,144" />
    <area alt="" title="" href="#2" color="2" shape="poly" coords="158,183,243,287,219,335,85,310,102,251" />
    <area alt="" title="" href="#3" color="3" shape="poly" coords="82,314,218,339,230,387,106,458,81,392" />
    <area alt="" title="" href="#4" color="4" shape="poly" coords="107,462,233,392,274,425,229,561,157,522" />
    <area alt="" title="" href="#5" color="5" shape="poly" coords="282,426,234,564,307,576,379,559,328,425" />
    <area alt="" title="" href="#6" color="6" shape="poly" coords="384,558,333,423,370,391,494,461" />
    <area alt="" title="" href="#7" color="7" shape="poly" coords="497,459,496,459,374,389,384,339,520,313,524,377" />
    <area alt="" title="" href="#8" color="8" shape="poly" coords="518,309,385,333,358,287,444,182,495,239" />
    <area alt="" title="" href="#9" color="9" shape="poly" coords="439,179,354,282,306,263,305,133,367,138" />
</map>
<?php get_footer(); ?>