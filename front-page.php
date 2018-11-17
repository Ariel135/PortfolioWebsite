<?php 

get_header(); ?>


<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/header-banner.jpg') ?>);">
  </div>
  <div class="page-banner__content container c-white">
    <div class="one-third hero-slider__interior">
      <?php the_post_thumbnail('frontpageBannerProfilePic'); ?>
    </div>
     <div class="two-thirds hero-slider__interior float-right" style="padding-right: 0px; padding-left: 50px;">
      <h1 class="headline headline--medium">Welcome to my humble abode.
      </h1>
      <!--<h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>-->
      <li class="headline-list">I'm a backend software engineer (yes, the design here could use some work)
      </li>
      <li class="headline-list ">...who dabbles in the frontend occasionally
      </li>
      <li class="headline-padding-bottom ">...and ultimately wants to become an End to End Data Engineer</li>
      <h3 class="headline--small-1">Why don&rsquo;t you check out what I&rsquo;ve been up to?
      </h3>
      <a href="<?php echo site_url('/my-resume')?>" class="btn btn--large btn--blue">My Resume
      </a>
    </div>
  </div> 
</div>
<div class="container page-section ">
  <h1 class="headline headline--medium headline--post-title">I have a very particular set of skills...
      </h1>
          <div class="barWrapper">
          <span>
             <h2 class="headline--tiny">HTML5</h2>
          </span>
          <div class="progress" style="height: 30px">
            <div id="40%" class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
              <span  class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> 
              </span>     
            </div>
            <p class="generic-content-progressbar t-right">40%</p>
          </div>
          <div class="barWrapper">
            <span class="progressText">
              <h2 class="headline--tiny">PHP</h2>
            </span>
            <div id="PHP" class="progress"  style="height: 30px">
              <div id="40%" class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="10" aria-valuemax="100" style="">
                <span  class="popOver" data-toggle="tooltip" data-placement="top" title="75%"> 
                </span>  
              </div>
              <p class="generic-content-progressbar t-right">40%</p>
            </div>
          </div>
          <div class="barWrapper">
            <span class="progressText">
              <h2 class="headline--tiny">JQUERY</h2>
            </span>
            <div class="progress" style="height: 30px">
              <div id="40%" class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                <span  class="popOver" data-toggle="tooltip" data-placement="top" title="65%"> 
                </span>  
              </div>
              <p class="generic-content-progressbar t-right">40%</p>
            </div>
          </div>
          <div class="barWrapper">
            <span class="progressText">
              <h2 class="headline--tiny">SQL</h2>
            </span>
            <div class="progress" style="height: 30px">
              <div id="60%" class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                <span  class="popOver" data-toggle="tooltip" data-placement="top" title="55%"> 
                </span>  
              </div>
              <p class="generic-content-progressbar t-right">60%</p>
            </div>
          </div>
          <div class="barWrapper">
            <span class="progressText">
              <h2 class="headline--tiny">C/C++</h2>
            </span>
            <div class="progress" style="height: 30px">
              <div id="50%" class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                <span  class="popOver" data-toggle="tooltip" data-placement="top" title="70%"> 
                </span>  
              </div>
                <p class="generic-content-progressbar t-right">50%</p>
            </div>
          </div>
          <div class="barWrapper">
            <span class="progressText">
              <h2 class="headline--tiny">JAVA</h2>
            </span>
            <div class="progress" style="height: 30px">
              <div id="60%" class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <span  class="popOver" data-toggle="tooltip" data-placement="top" title="75%"> 
                </span> 
              </div>
              <p class="generic-content-progressbar t-right">60%</p>
            </div>
          </div>
           <div class="barWrapper">
            <span class="progressText">
              <h2 class="headline--tiny">PYTHON</h2>
            </span>
            <div class="progress" style="height: 30px">
              <div id="40%" class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <span  class="popOver" data-toggle="tooltip" data-placement="top" title="75%"> 
                </span> 
              </div>
              <p class="generic-content-progressbar t-right">40%</p>
            </div>
          </div>
  </div> 


   <!--
  <div>
        <div class="progress" style="height: 35px">PHP
          <div class="progress-bar" role="progressbar" aria-valuenow="70"
               aria-valuemin="0" aria-valuemax="100" style="width:70%">
            <span class="sr-only">70% Complete
            </span>
          </div>
        </div> 
        <div class="progress" style="height: 35px">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
               aria-valuemin="0" aria-valuemax="100" style="width:40%">
            40% Complete (success)
          </div>
        </div>
        <div class="progress" style="height: 35px">
          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
               aria-valuemin="0" aria-valuemax="100" style="width:50%">
            50% Complete (info)
          </div>
        </div>
        <div class="progress" style="height: 35px">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
               aria-valuemin="0" aria-valuemax="100" style="width:60%">
            60% Complete (warning)
          </div>
        </div>
        <div class="progress" style="height: 35px">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
               aria-valuemin="0" aria-valuemax="100" style="width:70%">
            70% Complete (danger)
          </div>
        </div>
  </div> -->
</div>
<!-- <div class="container container--narrow page-section">
  <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">From My Blogs
      </h2>
      <?php  
        $homepagePosts = new WP_Query(array('posts_per_page' => 2 
        ));
        while($homepagePosts->have_posts()){
        $homepagePosts->the_post(); ?>
      <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
          <span class="event-summary__month">
            <?php the_time('M') ?>
          </span>
          <span class="event-summary__day">
            <?php the_time('d') ?>
          </span>  
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h5>
          <p>
            <?php if (has_excerpt()) {
              echo get_the_excerpt();  
              }else {
              echo wp_trim_words(get_the_content(),18);
              } ?> 
            <a href="<?php the_permalink(); ?>" class="nu gray">Read more
            </a>
          </p>
        </div>
      </div>
      <?php  }wp_reset_postdata();
?> 
      <p class="t-center no-margin">
        <a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts
        </a>
      </p>
    </div>
</div> -->
<!--
<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <div>
        <div class="progress" style="height: 35px">
          <div class="progress-bar" role="progressbar" aria-valuenow="70"
               aria-valuemin="0" aria-valuemax="100" style="width:70% , height: 50px">
            <span class="sr-only">70% Complete
            </span>
          </div>
        </div> 
        <div class="progress" style="height: 35px">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
               aria-valuemin="0" aria-valuemax="100" style="width:40%">
            40% Complete (success)
          </div>
        </div>
        <div class="progress" style="height: 35px">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
               aria-valuemin="0" aria-valuemax="100" style="width:50%">
            50% Complete (info)
          </div>
        </div>
        <div class="progress" style="height: 35px">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
               aria-valuemin="0" aria-valuemax="100" style="width:60%">
            60% Complete (warning)
          </div>
        </div>
        <div class="progress" style="height: 35px">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
               aria-valuemin="0" aria-valuemax="100" style="width:70%">
            70% Complete (danger)
          </div>
        </div>
      </div>
    </div> 
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">From My Blogs
      </h2>
      <?php  
        $homepagePosts = new WP_Query(array('posts_per_page' => 2 
        ));
        while($homepagePosts->have_posts()){
        $homepagePosts->the_post(); ?>
      <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
          <span class="event-summary__month">
            <?php the_time('M') ?>
          </span>
          <span class="event-summary__day">
            <?php the_time('d') ?>
          </span>  
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h5>
          <p>
            <?php if (has_excerpt()) {
              echo get_the_excerpt();  
              }else {
              echo wp_trim_words(get_the_content(),18);
              } ?> 
            <a href="<?php the_permalink(); ?>" class="nu gray">Read more
            </a>
          </p>
        </div>
      </div>
      <?php  }wp_reset_postdata();
?> 
      <p class="t-center no-margin">
        <a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts
        </a>
      </p>
    </div>
  </div>
</div>-->
<!-- <div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bus.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Free Transportation</h2>
        <p class="t-center">All students have free unlimited bus fare.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/apples.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">An Apple a Day</h2>
        <p class="t-center">Our dentistry program recommends eating apples.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bread.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Free Food</h2>
        <p class="t-center">Fictional University offers lunch plans for those in need.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
</div> -->

<?php
get_footer();
?>


