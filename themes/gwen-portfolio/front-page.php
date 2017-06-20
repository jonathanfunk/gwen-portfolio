<?php
/**
 * The main template file.
 *
 * @package Gwen_Portfolio_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="header">
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