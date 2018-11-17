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
    

<?php

  get_footer();

 ?>