<header class="">
  
  <div id="mobile-navigation">
    <div class="hamburger">menu</div>
    <div class="mobile-links">
      <?php
        if (has_nav_menu('top_navigation')) :
          wp_nav_menu(['theme_location' => 'top_navigation', 'menu_class' => 'nav']);
        endif;

        get_search_form();
      
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;

        if (has_nav_menu('primary_navigation_right_side')) :
          wp_nav_menu(['theme_location' => 'primary_navigation_right_side', 'menu_class' => 'nav']);
        endif;
      ?>
    </div>
  </div>
  <div id="main-navigation">
    <div class="container">
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
    </div>

    <?php
      if (has_nav_menu('primary_navigation_right_side')){
        echo "<div class=\"container-fluid double-back\">";
      }else{
        echo "<div class=\"container-fluid single-back\">";
      }
    ?>
    <div class="container-fluid">
      <div class="container">
        <div class="row bottom-nav">
          <div class="bottom-nav-links-left">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
              endif;
            ?>
          </div>
          <div class="bottom-nav-links-right grey-back">
            <?php
              if (has_nav_menu('primary_navigation_right_side')) :
                wp_nav_menu(['theme_location' => 'primary_navigation_right_side', 'menu_class' => 'nav']);
              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>
