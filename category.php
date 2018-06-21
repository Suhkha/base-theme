<?php get_header(); ?>



<main class="container container--space">
	
	<?php 
	  $categories = get_the_category();
	  if ( ! empty( $categories ) ) { 
	?>

		<h1>
			<?php echo $categories[0]->name ?>
		</h1>

	<?php } ?>
	<div class="row no-gutters">
		<?php if(have_posts()) :  while(have_posts()) :  the_post(); ?>

			<div class="card col-4" >
			  <?php 
						if ( has_post_thumbnail() ) {
						    the_post_thumbnail("full", array('class'=>"card-img"));
						}else{
					 ?>
					 <img src="http://via.placeholder.com/400x400" class="card--img" alt="">
				<?php } ?>
			  <div class="card-body">
			    <h6 class="card-title"><?php the_title(); ?></h6>
			    <a href="<?php echo the_permalink(); ?>" class="btn btn--jacarta">Ver más</a>
			  </div>
			</div>
		<?php endwhile;?>

		<?php else: ?>
			<?php _e('Información no disponible'); ?>

		<?php endif; wp_reset_query(); ?>

	</div>
</main>
<?php get_footer(); ?>