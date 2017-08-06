<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

  <section class="split  split--left">
    <figure class="split-bgimage">
      <img src="<?php echo get_field( 'left_background_image' ); ?>" alt="Left split background">
    </figure>

    <article class="split-content">
      <h2 class="split-title">
        <span><?php echo get_field( 'left_title_start' ); ?></span>
        <span><?php echo get_field( 'left_title_end' ); ?></span>
      </h2>

      <p class="split-tagline"><?php echo get_field( 'left_text' ); ?></p>

      <a class="split-button  button button--white button--shadow" href="<?php echo home_url(); ?>/music/unplugged/">Listen Now</a>
    </article>
  </section>

  <section class="split  split--right">
    <figure class="split-bgimage">
      <img src="<?php echo get_field( 'right_background_image' ); ?>" alt="Right split background">
    </figure>

    <article class="split-content">
      <h2 class="split-title">
        <span><?php echo get_field( 'right_title_start' ); ?></span>
        <span><?php echo get_field( 'right_title_end' ); ?></span>
      </h2>

      <p class="split-tagline"><?php echo get_field( 'right_text' ); ?></p>

      <a class="split-button  button button--white button--shadow" href="<?php echo home_url(); ?>/music/ampedup/">Listen Now</a>
    </article>
  </section>

<?php get_footer(); ?>