<?php get_header(); ?>

<section class="split  split--left  split--left-child">
  <figure class="split-bgimage">
    <?php
      $post_id = false;
      if ( is_home() ) {
        $post_id = 156;
      }
    ?>
    <img src="<?php echo get_field( 'page_background_image', $post_id ); ?>" alt="Left split background">
  </figure>
</section>

<section class="split  split--right">
	<?php if ( is_home() && ! is_front_page() ) : ?>
    <h1 class="page-title"><?php single_post_title(); ?></h1>
	<?php else : ?>
		<h2 class="page-title"><?php _e( 'Posts', 'jaredbracci' ); ?></h2>
  <?php endif; ?>

  <?php
  if ( have_posts() ) :

    /* Start the Loop */
    while ( have_posts() ) :
      the_post();

      get_template_part( 'elements/post/content', get_post_format() );

    endwhile;

    JAREDBRACCI_Pagination::pagination();

  else :

    get_template_part( 'elements/post/content', 'none' );

  endif;
  ?>
</section>

<?php get_footer(); ?>