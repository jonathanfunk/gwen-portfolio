<?php
/**
 * The main template file.
 *
 * @package Gwen_Portfolio_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="hero">
        <div class="hero-content">
          <img src="<?php echo get_template_directory_uri() . '/assets/hero-logo.svg'; ?>" alt="Gwen Gong Logo" />
          <h1>Gwen Gong</h1>
          <p>There is no absolute right and wrong, only different perspective.</p>
        </div>
      </section>
      <section class="about">
      </section>
      <section class="projects">
      </section>
      <section class="resume">
      </section>
      <section class="contact">
        <div class="container">
         <h2>Leave me a message</h2>
         <?php echo do_shortcode( '[contact-form-7 id="6" title="Contact form 1"]' ); ?>
        </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>