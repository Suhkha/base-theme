<footer class="container-fluid">
	<div class="row no-gutters justify-content-center">
		<?php 
		switch ($lang) {
			case 'en':
				get_template_part('includes/footer__content--en', 'en');
				break;
			default:
				get_template_part('includes/footer__content--es', 'es');
				break;
		}
		?>
		<div class="col-md-3 col-6">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" width="80" class="footer--logo d-none d-md-block d-lg-block" alt="">
			<ul class="social">
				<li class="social--item">
					<a href="">
						<i class="fab fa-facebook-f"></i>
					</a>
				</li>
				<li class="social--item">
					<a href="">
						<i class="fab fa-twitter"></i>
					</a>
				</li>
				<li class="social--item">
					<a href="">
						<i class="fab fa-instagram"></i>
					</a>
				</li>
				<li class="social--item">
					<a href="">
						<i class="fab fa-linkedin-in"></i>
					</a>
				</li>
			</ul>
			<span class="footer--content txt--small ">
				© Copyright 2018 Runa Hr LLC All rights reserved
			</span>
		</div>
	</div>
</footer>

<script src="<?php bloginfo('template_directory'); ?>/assets/lib/jquery/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/lib/owl.carousel/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/scripts/main.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">