<?php get_header();
/*
Template Name: Casos de éxito
*/

$thumb_id = get_post_thumbnail_id(get_the_ID());
$thumb_url = wp_get_attachment_image_src($thumb_id,'full');
$sub1 = get_post_meta( $post->ID, 'subtitulo1', true ); 
$sub2= get_post_meta( $post->ID, 'subtitulo2', true );
?>
<div class="banner-page">
	<img class="img_detalle_clinica" src="<?php echo $thumb_url[0]?>"/> 
	<h1 class="title no-margin title-casos"><?php the_title(); ?></h1>	
</div>
<div class="casos-bg-1">
	<div class="container">
		<div class="row container-cbre">
			<h1 class="title no-margin subtitle">
				<?php echo $sub1; ?>
			</h1>
			<div class="content-sangria">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row container-cbre container-casos">
		<h1 class="title no-margin subtitle">
			<?php echo $sub2; ?>
		</h1>
		<?php
			$args = array('post_type' => "caso",'order' => 'desc');
			$loop = new WP_Query($args);
			while($loop->have_posts()): $loop->the_post();
				$subtitle_desafio = get_post_meta( $post->ID, 'subtitulo_desafio', true );
				$subtitle_solucion = get_post_meta( $post->ID, 'subtitulo_solucion', true );
				$desc_desafio = get_post_meta( $post->ID, 'descripcion_desafio', true );
				$desc_solucion = get_post_meta( $post->ID, 'descripcion_solucion', true );
			?>
			<div class="row content-cliente-caso">
				<div class="row">
					<div class="col-sm-4">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="col-sm-8">
						<div class="col-sm-4 line"></div>
						<h4 class="col-sm-4 text-capitalize title-val"><?php echo $subtitle_desafio ?></h4>
						<div class="col-sm-4 line"></div>
						<br>
						<p class="desc-casos"><?php echo $desc_desafio ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 location">
						<?php the_content(); ?>
					</div>
					<div class="col-sm-8">
						<div class="col-sm-4 line"></div>
						<h4 class="col-sm-4 text-capitalize title-val"><?php echo $subtitle_solucion ?></h4>
						<div class="col-sm-4 line"></div>
						<br>
						<p class="desc-casos"><?php echo $desc_solucion ?></p>
					</div>
				</div>
			</div>
			<?php endwhile;
			wp_reset_query();
		?>
	</div>
</div>
<?php get_footer(); ?>