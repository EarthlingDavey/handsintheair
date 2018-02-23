<div class="search-results container">
  <div class="row">
    <div class="col-sm-12 col-md-8">

      <?php get_template_part('templates/page', 'header'); ?>

      <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
          <?php _e('Sorry, no results were found.', 'sage'); ?>
        </div>
        <?php // get_search_form(); ?>
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'search'); ?>
      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    </div>
  </div>
</div>

