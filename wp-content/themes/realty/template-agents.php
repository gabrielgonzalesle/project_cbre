<?php get_header();
/*
Template Name: Agents
*/
$valores_image_id = get_post_meta( $post->ID, 'logo_rise', true ); 
$valores_image_url= wp_get_attachment_image_src($valores_image_id, 'full');
$fortalezas = get_field_object('fortalezas', $post->ID);
$valores = get_field_object('valores', $post->ID);
$title_equipo = get_post_meta( $post->ID, 'title', true );
$profile_1 = get_post_meta( $post->ID, 'profile_picture', true ); 
$profile_image_url= wp_get_attachment_image_src($profile_1, 'full');
$description_1 = get_post_meta( $post->ID, 'profile_descrption', true );
$profile_2 = get_post_meta( $post->ID, 'profile_picture_2', true ); 
$profile_image_url_2= wp_get_attachment_image_src($profile_2, 'full');
$description_2 = get_post_meta( $post->ID, 'profile_descrption_2', true );
?>
<div class="container">
	<div class="row container-cbre">
		<h1 class="title no-margin">
			<?php the_title(); ?>
		</h1>
		<?php the_content(); ?>
	</div>
</div>
<div class="valor_fortaleza">
	<div class="container">
		<div class="row container-cbre">
			<img class="img-logo-rise" src="<?php echo $valores_image_url[0] ?>">
			<div class="col-sm-6">
				<div class="col-sm-4 line"></div>
				<h4 class="col-sm-4 text-capitalize title-val"><?php echo $valores['label'] ?></h4>
				<div class="col-sm-4 line"></div>
				<br>
				<div class="col-sm-12">
					<?php echo $valores['value'] ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-sm-4 line"></div>
				<h4 class="col-sm-4 text-capitalize title-val"><?php echo $fortalezas['label'] ?></h4>
				<div class="col-sm-4 line"></div>
				<br>
				<div class="col-sm-12">
					<?php echo $fortalezas['value'] ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row container-cbre">
		<h1 class="title no-margin">
			<?php echo $title_equipo?>
		</h1>
		<div class="row">
			<div class="col-sm-6">
				<div class="col-sm-6">
					<img class="img-logo-rise" src="<?php echo $profile_image_url[0] ?>">
				</div>
				<div class="col-sm-6 profile-desc">
					<?php echo $description_1 ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-sm-6">
					<img class="img-logo-rise" src="<?php echo $profile_image_url_2[0] ?>">
				</div>
				<div class="col-sm-6 profile-desc">
					<?php echo $description_2 ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>