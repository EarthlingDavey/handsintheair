<header class="container-fluid">
  <div class="row top-nav">
    <div class="site-logo-container">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php bloginfo('template_directory');?>/assets/images/HITA-logo-main.png" class="site-logo">
      </a>
    </div>
    <div class="top-nav-links">
      <?php
        if (has_nav_menu('top_navigation')) :
          wp_nav_menu(['theme_location' => 'top_navigation', 'menu_class' => 'nav']);
        endif;

        get_search_form();
      ?>
    </div>
  </div>
  <div class="row bottom-nav">
    <div class="bottom-nav-links">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
          </div>
    
  </div>
</header>
