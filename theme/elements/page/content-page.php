<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package JaredBracci
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="post-header">
    <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
    <?php jaredbracci_edit_link( get_the_ID() ); ?>
  </header><!-- .post-header -->
  <div class="post-content">
    <?php
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'jaredbracci' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .post-content -->
</article><!-- #post-## -->