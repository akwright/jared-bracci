<?php
/**
 * Template Name: Home
 */

$show_main_button = get_field( 'show_main_button' );
$show_extra_link  = get_field( 'show_extra_link' );

?>

<?php get_header(); ?>

  <figure class="site__background">
    <img src="<?php echo get_field( 'page_background' ); ?>" alt="Homepage background">
  </figure>

  <article class="home">

    <header>
      <h1 class="home__title">
        <?php
          if ( the_field( 'title' ) ) {
            echo get_field( 'title' );
          }
        ?>
      </h1>
    </header>

    <p class="home__content">
      <?php
        if ( the_field( 'content' ) ) {
          echo get_field( 'content' );
        }
      ?>
    </p>

    <footer class="home__footer">
      <?php if ( $show_main_button ) : ?>
        <a class="home__cta"
           href="<?php echo get_field( 'main_button_link' ); ?>">
          <?php echo get_field( 'main_button_text' ); ?>
        </a>
      <?php endif; ?>
      <?php if ( $show_extra_link ) : ?>
        <span><?php echo get_field( 'extra_link_separator_text' ); ?></span>
        <a href="<?php echo get_field( 'extra_link_page' ); ?>">
          <?php echo get_field( 'extra_link_text' ); ?>
        </a>
      <?php endif; ?>
    </footer>

  </article>

<?php get_footer(); ?>