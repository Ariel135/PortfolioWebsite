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
        <!-- <p>i am not who you think i am; i am not who i think i am; i am who i think you think i am</p>
        <p>-unknown</p> -->
      </div>
    </div>  
  </div>


    <?php wp_reset_postdata(); ?>

  <div class="container container--narrow page-section">
    <h2 class="headline headline--small-plus-portfolio t-left">The projects with course codes are university related and the others are forever-ongoing personal ones.</h2>
    

    <?php
      $myProjects = new WP_Query(array(
        'post_type' => 'projects'
      ));
      while ($myProjects->have_posts()) {
          $myProjects->the_post(); ?>
       
          <h2 class="headline headline--small-plus-resume t-left project-description"><?php echo '<strong>'. get_field('project_name').'</strong>';?></h2>
<!-- 
          <p><i class="fa fa-question-circle fa-fw"></i><?php echo ''.get_field('project_description'); ?></p>
          <p><i class="fa fa-user fa-fw"></i><?php echo ''.get_field('project_role'); ?></p>
          <p><i class="fa fa-wrench fa-fw"></i><?php echo ''.get_field('technologies_used'); ?></p> -->
        
          <h1 class="headline headline--tiny t-left project-description">
            <i class="fa fa-question-circle fa-fw"></i>
            &nbsp; <?php echo get_field('project_description'); ?>
          </h1>

          <h1 class="headline headline--tiny t-left project-description">
            <i class="fa fa-user fa-fw"></i>
            &nbsp; <?php echo get_field('project_role'); ?>
          </h1>
          <h1 class="headline headline--tiny t-left project-description">
            <i class="fa fa-wrench fa-fw"></i>
            &nbsp; <?php echo get_field('technologies_used'); ?>
          </h1>
          <?php 
            if (get_field('project_link')) { 
              ?> 
          <h1 class="headline headline--tiny t-left project-description">
           <a href="<?php echo get_field('project_link'); ?>" style="text-decoration: none;"<i class="fas fa-link fa-fw"></i></a>
            &nbsp;  <a href="<?php echo get_field('project_link'); ?>">View on Github</a>
          </h1>  
              
          <?php }

          ?>
          <hr class="section-break">
    

     
        


    <?php
      }
    ?>
    
  


  </div>

<?php

  get_footer();

?>