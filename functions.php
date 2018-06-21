<?php  
function base_theme_setup() {

  register_nav_menus(
  	array( 
    	'header' => 'Header menu', 
    	'footer' => 'Footer menu' 
  	)
  );

  add_theme_support( 'post-thumbnails');
  
 }

add_action( 'after_setup_theme', 'base_theme_setup' );

function the_breadcrumb() {
 	if (!is_home()) {
 		echo '<span class="bredcrumb--links" title="';
 		echo get_option('home');
 		echo '">';
 		bloginfo('name');
 		echo "</span> » ";
 
	 	if (is_category() || is_single()) {
	 		the_category('title_li=');

			if (is_single()) {
		 		echo " » ";
		 		the_title();
		 	}
	 	}elseif (is_page()) {
	 		echo the_title();
	 	}
 	}
} 
?>