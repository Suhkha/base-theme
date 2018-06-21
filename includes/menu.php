<nav class="navbar navbar-expand-lg navbar-light navbar--purple">
  <a class="navbar-brand navbar-brand--white" href="#">
    <?php bloginfo( 'name' ); ?>
  </a>
  <button class="navbar-toggler navbar-toggler--custom" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php 
      switch ($lang) {
        case 'en':
          $menu = 'menu_en';
          break;
        default:
          $menu = 'menu_es';
          break;
      }

      wp_nav_menu( array(
        'menu' => $menu
      ));

      wp_nav_menu( array(
        'menu' => 'lang'
      ));

    ?>
  </div>
</nav>