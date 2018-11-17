<?php 
  


  get_header();


?> 

<?php   if (is_page('Resume')) {
    echo "if works";
  } else {
    echo "nah";
  } ?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/header-banner.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow t-center">
      <h1 class="page-banner__title">Resume</h1>
      <div class="page-banner__intro">
        <p>i am not who you think i am; i am not who i think i am; i am who i think you think i am</p>
        <p>-unknown</p>
      </div>
    </div>  
  </div>

  <?php wp_reset_postdata(); ?>

  <div class="container container--narrow page-section">
    <h1 class="headline headline--slightly-larger-medium">Experience</h1>
    <?php 
      while (have_posts()) {
        the_post(); ?>
       
          <h2 class="headline headline--small-plus-resume t-left"><?php echo '<strong>'. get_field('experience_position').'</strong>'; echo ', '; the_field('experience_duration'); ?></h2>
          <h1 class="headline headline--tiny t-left"><?php the_field('experience_location'); ?></h1>
          <p><?php the_content(); ?></p>

     
        


        <?php

          
          
      }
     ?>
     <hr class="section-break">
     <h1 class="headline headline--slightly-larger-medium">Skills</h1>
    <?php 
      $mySkills = new WP_Query(array(
        'post_type' => 'skills'
      ));
      while ($mySkills->have_posts()) {
        $mySkills->the_post(); ?>
       
         
          <h2 class="headline headline--small-plus-resume t-left"><?php echo '<strong>'. get_the_title().'</strong>'; ?></h2>
          <?php the_content(); ?>

        


        <?php

          
          
      } wp_reset_postdata(); 

     ?>
     <hr class="section-break">
     <h1 class="headline headline--slightly-larger-medium">Education</h1>
     <h2 class="headline headline--small-plus-resume t-left"><li>B.Eng in Computer Engineering, Ryerson University</li></h2>
     


  </div>

<?php

  get_footer();

 ?>