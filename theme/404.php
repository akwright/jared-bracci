<?php
/**
 * 404 Error page template
 *
 */
?>
<?php get_header(); ?>

<article class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/jared-404.jpg');">
  <div class="hero-content">

    <header>
      <h1 class="hero-title">
        Oh no! That doesn't exist!
      </h1>
    </header>

    <p>I'm not sure how you got here, but I'm sure this isn't where you meant to go. Why don't you <a href="/music/">check out some of my music</a> or head on back to <a href="/">the homepage</a>.</p>

  </div>
</article>

<?php get_footer(); ?>