<?php get_header(); ?>

<section class="page-content">
  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'elements/page/content', 'page' );
    endwhile;
    else :
      _e( 'Sorry, no posts matched your criteria.', 'jaredbracci' );
    endif;
  ?>
</section>

<?php get_footer(); ?>