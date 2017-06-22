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
          <p><?php echo CFS()->get( 'hero-blurb' ); ?></p>
        </div>
      </section>
      <section class="about">
        <div class="container">
          <h2>About Me</h2>
          <div class="about-wrap">
            <img src="<?php echo get_template_directory_uri() . '/assets/gwen.png'; ?>" alt="Gwen Gong Logo" />
            <p><?php echo CFS()->get( 'about' ); ?></p>
          </div>
          <ul class="social-icons">
            <li>
              <a href="https://www.linkedin.com/in/gwen-gong-63056751/" target="_blank">
                <div class="front linkedin-front">
                </div>
                <div class="back linkedin-back">
                </div>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/gwengong/" target="_blank">
                <div class="front instagram-front">
                </div>
                <div class="back instagram-back">
                </div>
              </a>
            </li>
            <li>
              <a href="https://medium.com/@gwengong77" target="_blank">
                <div class="front medium-front">
                </div>
                <div class="back medium-back">
                </div>
              </a>
            </li>            
          </ul>
        </div>
      </section>
      <section class="projects">
        <h2>Projects</h2>
        <div class="container">
          <ul class="projects-list">
            <?php
                $upload_path = content_url() . '/uploads/';
                $fields = CFS()->get('projects');
                foreach ($fields as $field) {
                  $project_image_ID = $field['project_image'];
                  $project_image_ALT = get_post_meta($project_image_ID, '_wp_attachment_image_alt', true);
                  $project_image_TITLE = get_the_title($project_image_ID);
                  $project_image_URL_data = wp_get_attachment_metadata($project_image_ID, true);
                  $project_image_URL = $project_image_URL_data["file"];
                    echo '<li><img src="';
                    echo $upload_path . $project_image_URL;
                    echo '" title="'.$project_image_TITLE.'" alt="';
                    echo $project_image_ALT;
                    echo '"><div class="project-info"><h3>'.$field["project_name"].'</h3>';
                    echo '<p>Role: '.$field["project_role"].'</br>';
                    echo 'Project Period: '.$field["project_length"].'</p>';
                    echo $field["project_link"];
                    echo '</div>';
                }
              ?>
          </ul>
        </div>
      </section>
      <section class="resume">
        <div class="container">
          <h2>Resume</h2>
          <a class="rounded" href="<?php echo CFS()->get('resume'); ?>" download>Download Resume Here</a>
          <p>Contact me here:</br>
          <a class="email" href="mailto:gwengong@hotmail.com">gwengong@hotmail.com</a>
          </p>
        </div>
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