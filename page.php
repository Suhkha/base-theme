<?php get_header(); ?>

<?php 
    if(have_posts()): while(have_posts()): the_post();
        the_content();  

        edit_post_link('Editar', '', '');
    endwhile; endif; 
?>

<?php get_footer(); ?>