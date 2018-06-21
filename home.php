<?php
/*
Template Name: home
*/

get_header(); ?>
<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container" id="general-about">
			<div class="row align-items-center">
				<div class="col-md-6 col-xs-12">
					<span class="main--title txt--xbig"><?php the_title(); ?></span>
					<span class="txt--medium"><?php the_content(); ?></span>
				</div>
				<div class="col-md-6 col-xs-12">
					<img src="https://media.giphy.com/media/3owyp2SViuDIGh8YoM/giphy.gif" width="500" class="img-fluid" alt="">
				</div>
			</div>
		</section>
		<section class="container-fluid" id="benefits-about">
			<div class="row align-items-center benefits">
				<div class="col-md-4 col-xs-12">
					<img src="https://media.giphy.com/media/xUPGcl8pUmj1RD8EJG/giphy.gif" class="img-fluid" alt="">
				</div>
				<div class="col-md-8 col-xs-12">
					<?php if(get_field('sobre-los-beneficios') != ""){ ?>
						<span class="benefits--title txt--big">
							<?php the_field('sobre-los-beneficios-titulo'); ?>
						</span>
						<span class="benefits--content txt--medium">
							<?php the_field('sobre-los-beneficios'); ?>
						</span>
					<?php } ?>
				</div>
			</div>
		</section>
		<section class="container" id="benefits-list">
			<div class="row align-items-center">
				<div class="col-12">
					<div class="owl-carousel owl-theme">
						<?php for ($i=1; $i < 10; $i++) { ?>
							<div class="item">
								<?php the_field('logo_beneficio_'.$i); ?>
								<span class="txt--medium"><?php the_field('beneficio_'.$i); ?></span>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>

		<section class="container" id="start-now-options">
			<div class="row justify-content-center">
				<div class="card start-now">
					<span class="txt--big">
						<?php the_field('boton_de_comenzar') ?>
					</span>
				</div>
			</div>
		</section>
	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>