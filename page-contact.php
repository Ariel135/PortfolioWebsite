<?php
  get_header();


?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/header-banner.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow t-center">
      <?php 
        while (have_posts()) {
          the_post();
        }
      ?>
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p><?php the_content(); ?></p>
      </div>
    </div>  
  </div>


  <div class="container container--narrow page-section">
    <p class="email">
      <a href="mailto:<?php the_field('email'); ?>" style="color: inherit;"><i class="fa fa-envelope fa-2x fa-fw" style=" vertical-align: middle;"></i></a> &nbsp; 
      <a href="mailto:<?php the_field('email'); ?>" style="color: blue;"><?php echo get_field('email'); ?></a>
    </p>
    <p class="email" style="padding-top: 26px">...Or follow me here</p>
    <p class="email"><a href="<?php the_field('linkedin_link'); ?>" ><i class="fab fa-linkedin fa-4x" aria-hidden="true"></i></a></p>
  </div>
    <!-- <p class="email">
      <a href="#" ><i class="fab fa-facebook fa-3x" aria-hidden="true"></i></a>&nbsp;
      <a href="#" ><i class="fab fa-linkedin fa-3x" aria-hidden="true"></i></a>&nbsp;
    </p> -->

    
    <!-- <h2 class="headline headline--small-plus-resume t-center">
      <?php echo get_field('email'); ?>
      <p class="headline--small-plus-resume contact-test"><i class="fa fa-envelope fa-2x fa-fw"></i><?php echo get_field('email'); ?></p>
    </h2> -->
 

<?php

  get_footer();

 ?>