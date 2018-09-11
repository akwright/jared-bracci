<?php
  $post_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="post-image" style="background-image:url(<?php echo $post_img_url; ?>);">
    <header class="post-header">
      <?php
      if ( is_single() ) {
        the_title( '<h1 class="entry-title">', '</h1>' );
      } elseif ( is_front_page() && is_home() ) {
        the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
      } else {
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      }
      ?>
    </header><!-- .post-header -->
  </div><!-- .post-image -->

	<div class="post-content">
		<?php
    if ( 'post' === get_post_type() ) {
      echo '<div class="post-meta">';
      if ( is_single() ) {
        jaredbracci_posted_on();
      } else {
        echo jaredbracci_time_link();
        jaredbracci_edit_link();
      };
      echo '</div><!-- .post-meta -->';
    };
		/* translators: %s: Name of current post */
		the_content(
			sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jaredbracci' ),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'jaredbracci' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
    if ( is_single() ) {
      jaredbracci_entry_footer();
    }
		?>
	</div><!-- .post-content -->

</article><!-- #post-## -->