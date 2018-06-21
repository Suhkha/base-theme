<?php get_header(); ?>


<main class="container container--space">
	<?php the_breadcrumb(); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="row">
	<div class="col-12">
	  <?php 
	  	if ( has_post_thumbnail() ) {
	  		the_post_thumbnail("full", array('class'=>"card-img card-img-top img-fluid"));
	  	}else{
	  ?>
	  <img src="http://via.placeholder.com/400x400" class="card--img" alt="">
		<?php } ?>
	  <div class="card-body">
	    <p class="card-text">
	    	<h3><?php the_title(); ?></h3>

	    	<span class="txt--small">
	    		<?php the_date(); ?>
	    	</span>
				|
	    	<span>
	    		<?php the_author(); ?>
	    	</span>

				<?php the_content(); ?>

				<?php edit_post_link('Editar', '', '');?>
	    </p>
	  </div>
	</div>
</div>
	<?php endwhile;endif; ?>

</main>


<?php get_footer(); ?>