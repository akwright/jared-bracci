<?php get_header(); ?>

<section class="split  split--left  split--left-child">
    <figure class="split-bgimage">
      <img src="<?php echo get_field( 'page_background_image' ); ?>" alt="Left split background">
    </figure>
  </section>

  <section class="split  split--right">
    <h1 class="page-title">
      <?php the_title(); ?>
    </h1>

    <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
      endwhile;
      else :
        _e( 'Sorry, no posts matched your criteria.', 'jaredbracci' );
      endif;
    ?>
  </section>

<?php get_footer(); ?>