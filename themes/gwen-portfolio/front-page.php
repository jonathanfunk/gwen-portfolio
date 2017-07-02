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
          <img class="logo" src="<?php echo get_template_directory_uri() . '/assets/hero-logo.svg'; ?>" alt="Gwen Gong Logo" />
          <h1>Gwen Gong</h1>
          <img class="name" src="<?php echo get_template_directory_uri() . '/assets/gwen-gong.svg'; ?>" alt="Gwen Gong" />
          <p>There is no absolute right and wrong,</br> only different perspective.</p>
        </div>
      </section>
      <section class="about" id="gwen">
        <img 
          class='big-header' 
          src="<?php echo get_template_directory_uri() . '/assets/about-me.svg'; ?>" 
          alt="About Me"
          data-aos="fade-up"
          data-aos-duration="3000"  
        />
        <div class="container padding">
          <a class="center" href="#gwen"><img src="<?php echo get_template_directory_uri() . '/assets/next.svg'; ?>" alt="Next Button" /></a>
          <h2>About Me</h2>
          <div class="about-wrap">
            <img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000" src="<?php echo get_template_directory_uri() . '/assets/gwen.png'; ?>" alt="Gwen Gong Logo" />
            <div class="about-content" data-aos="fade-up" data-aos-duration="3000">
              <div class="who">
                <p><?php echo CFS()->get( 'about' ); ?></p>
              </div>
              <div class="interests">
                <h3>What I like:</h3>
                <ul class="interests-list">
                  <?php
                      $upload_path = content_url() . '/uploads/';
                      $fields = CFS()->get('interests');
                      foreach ($fields as $field) {
                        $interest_picture_ID = $field['interest_picture'];
                        $interest_picture_ALT = get_post_meta($interest_picture_ID, '_wp_attachment_image_alt', true);
                        $interest_picture_TITLE = get_the_title($interest_picture_ID);
                        $interest_picture_URL_data = wp_get_attachment_metadata($interest_picture_ID, true);
                        $interest_picture_URL = $interest_picture_URL_data["file"];
                          echo '<li><a class="seven" href="#"';
                          echo 'data-content="'.$field["interest_description"].'">';
                          echo '<img src="';
                          echo $upload_path . $interest_picture_URL;
                          echo '" title="'.$interest_picture_TITLE.'" alt="';
                          echo $interest_picture_ALT;
                          echo '"></a></li>';
                      }
                    ?>
                </ul>
              </div>
            </div>
          </div>
          <ul class="social-icons" data-aos="fade-up" data-aos-duration="3000">
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
      <section class="projects" id="projects">
        <a class="center" href="#projects"><img src="<?php echo get_template_directory_uri() . '/assets/next.svg'; ?>" alt="Next Button" /></a>
        <h2>Projects</h2>
        <img 
          class='big-header right' 
          src="<?php echo get_template_directory_uri() . '/assets/project.png'; ?>" alt="Project"
          data-aos="fade-up"
          data-aos-duration="3000" 
        />
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
                    echo '" data-aos="fade-up" data-aos-duration="3000"';
                    echo '><div class="project-info" data-aos="fade-up" data-aos-duration="3000">';
                    echo '<h3>'.$field["project_name"].'</h3>';
                    echo '<p>Role: '.$field["project_role"].'</br>';
                    echo 'Project Period: '.$field["project_length"].'</p>';
                    echo $field["project_link"];
                    echo '</div>';
                }
              ?>
          </ul>
        </div>
      </section>
      <section class="resume" id="resume">
        <img 
          class='big-header' 
          src="<?php echo get_template_directory_uri() . '/assets/resume.svg'; ?>" 
          alt="Resume" 
          data-aos="fade-up" 
          data-aos-duration="3000"
        />
        <div class="container padding">
          <a class="center" href="#resume"><img src="<?php echo get_template_directory_uri() . '/assets/next.svg'; ?>" alt="Next Button" /></a>
          <h2>Resume</h2>
          <a class="rounded" href="<?php echo CFS()->get('resume'); ?>" target="_blank">Download Resume Here</a>
          <p>Contact me here:</br>
          <a class="email" href="mailto:gwengong@hotmail.com">gwengong@hotmail.com</a>
          </p>
        </div>
      </section>
      <section class="why-me" id="why-me">
        <img 
          class='big-header right'  
          src="<?php echo get_template_directory_uri() . '/assets/why-me.svg'; ?>" 
          alt="Why me"
          data-aos="fade-up"
          data-aos-duration="3000" 
        />
          <div class="container">
            <a class="center" href="#why-me"><img src="<?php echo get_template_directory_uri() . '/assets/next.svg'; ?>" alt="Next Button" /></a>
            <h2>Why Me?</h2>
            <div class="container">
            <ul class="why-me-mobile">
              <li><img src="<?php echo get_template_directory_uri() . '/assets/user-experience.svg'; ?>" alt="User Experience" /></li>
              <li><img src="<?php echo get_template_directory_uri() . '/assets/psychology.svg'; ?>" alt="Psychology" /></li>
              <li><img src="<?php echo get_template_directory_uri() . '/assets/business.svg'; ?>" alt="Business" /></li>
            </ul>
            <div class="why-me-desktop">
              <img src="<?php echo get_template_directory_uri() . '/assets/why-me-group.svg'; ?>" alt="Why Me Group" />
            </div>
            <h2 class="favorite-designers-header">Favorite Designers</h2>
            <ul class="favorite-designers">
              <?php
                  $upload_path = content_url() . '/uploads/';
                  $fields = CFS()->get('favorite_designers');
                  foreach ($fields as $field) {
                    $designer_picture_ID = $field['designer_picture'];
                    $designer_picture_ALT = get_post_meta($designer_picture_ID, '_wp_attachment_image_alt', true);
                    $designer_picture_TITLE = get_the_title($designer_picture_ID);
                    $designer_picture_URL_data = wp_get_attachment_metadata($designer_picture_ID, true);
                    $designer_picture_URL = $designer_picture_URL_data["file"];
                      echo '<li><img src="';
                      echo $upload_path . $designer_picture_URL;
                      echo '" title="'.$designer_picture_TITLE.'" alt="';
                      echo $designer_picture_ALT;
                      echo '"><h3>'.$field["designer_name"].'</h3>';
                  }
                ?>
            </ul>
          </div>
        </div>
      </section>
      <section class="contact" id="contact">
        <div class="container padding">
         <h2>Leave me a message</h2>
         <?php echo do_shortcode( '[contact-form-7 id="6" title="Contact form 1"]' ); ?>
        </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>