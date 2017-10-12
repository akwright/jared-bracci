<?php get_header(); ?>

<section class="split  split--left">
    <figure class="split-bgimage">
      <img src="<?php echo get_field( 'page_background_image' ); ?>" alt="Left split background">
    </figure>
  </section>

  <section class="split  split--right">
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