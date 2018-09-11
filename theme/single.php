<?php get_header(); ?>

<section class="post">
  <!-- <h1 class="page-title">
    <?php //the_title(); ?>
    <?php //jaredbracci_edit_link( get_the_ID() ); ?>
  </h1> -->
  
  <?php
    // if ( have_posts() ) : while ( have_posts() ) : the_post();
    //   $post_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    //   the_content();
    // endwhile;
    // else :
    //   _e( 'Sorry, no posts matched your criteria.', 'jaredbracci' );
    // endif;
  ?>
  <?php
    /* Start the Loop */
    while ( have_posts() ) :
      the_post();
      get_template_part( 'elements/post/content', get_post_format() );
      
  ?>
  <div class="post-navigation">
    <?php
      the_post_navigation(
        array(
          'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'jaredbracci' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( '&larr; Previous', 'jaredbracci' ) . '</span> <span class="nav-title">%title</span>',
          'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'jaredbracci' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next &rarr;', 'jaredbracci' ) . '</span> <span class="nav-title">%title</span>',
        )
      );
    endwhile; // End of the loop.
    ?>
  </div><!-- .post-navigation -->
</section>

<?php get_footer(); ?>