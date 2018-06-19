<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <?php the_title(); ?>

    <?php the_content(); ?>

    <?php edit_post_link('Editar', '', '');?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>