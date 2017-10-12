<?php
/**
 * Template Name: About
 */
?>

<?php get_header(); ?>

<section class="split  split--left">
  <figure class="split-bgimage">
    <img src="<?php echo get_field( 'page_background_image' ); ?>" alt="Left split background">
  </figure>
</section>

<section class="split  split--right">
  <h1 class="page-title">About</h1>
  <?php jaredbracci_edit_link( get_the_ID() ); ?>

  <ul class="tablist" role="tablist">
    <li id="tab-man" class="tab" aria-controls="panel-man" aria-selected="true" role="tab" tabindex="0">The Man</li>
    <li id="tab-guitar" class="tab" aria-controls="panel-guitar" aria-selected="false" role="tab" tabindex="0">The Guitar</li>
  </ul>

  <div id="panel-man" class="panel" aria-labelledby="tab-man" role="tabpanel" aria-hidden="false">
    <?php echo get_field( 'the_man_content' ); ?>
  </div>

  <div id="panel-guitar" class="panel" aria-labelledby="tab-guitar" role="tabpanel" aria-hidden="true">
    <?php echo get_field( 'the_guitar_content' ); ?>
    <img src="<?php echo get_field( 'the_guitar_image' ); ?>" alt="Jared's Guitar.">
  </div>
</section>

<?php get_footer(); ?>