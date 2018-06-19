<?php get_header(); ?>
<?php 
  $categories = get_the_category();
  $category = get_the_category(); 
  $parent = get_category($category[0]->category_parent);
?>

<?php if(have_posts()) :  while(have_posts()) :  the_post(); ?>
<?php the_post_thumbnail("full", array('class'=>"img-responsive")); ?>

<?php the_title(); ?> 
<?php endwhile;?>

<?php else: ?>
<?php _e('Información no disponible'); ?>

<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>