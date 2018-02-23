<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <nav class="nav-footer">
          <?php
          if (has_nav_menu('footer_navigation')) :
            wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
        </nav>
      </div>
      <div class="col-sm-12 col-md-6">
          <p>&copy; Hands in the Air <?php echo auto_copyright(2018); ?></p>
      </div>
    </div>
    
  </div>

</footer>
