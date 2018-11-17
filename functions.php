<?php 

function pageBanner($args = NULL) {

	if (!$args['title']) {
		$args['title'] = get_the_title();
	}

	?>
	<div class="page-banner">
		<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
		<div class="page-banner__content container container--narrow">
			<h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
			<div class="page-banner__intro">
				<p>REPLACE LATER</p>
			</div>
		</div>  
	</div> 
	<?php }
	
	function function_1(){

		//wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/js/bootstrap.js') , array('jquery'), microtime(), true );

		//wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js', array('jquery'), '1.8.6');

		//wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/js/jquery-ui.js') , array('jquery'), microtime(), true );
	
		wp_enqueue_script('main-portfolio-javascript', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
		
  		wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  		wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
  		wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri());
		
	}


	function portfolio_features(){

		add_theme_support('title-tag');

		add_theme_support('post-thumbnails');
		add_image_size('frontpageBannerProfilePic',400,400,true);
	}

	add_action('wp_enqueue_scripts','function_1');

	add_action('after_setup_theme','portfolio_features');

	function portfolio_adjust_queries($query) {



		if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()){


			$query->set('orderby','title');
			$query->set('order','ASC');
			$query->set('posts_per_page', -1);

		} 

		if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
			$today = date('Ymd');
			$query->set('meta_key','event_date');
			$query->set('orderby','meta_value_num');
			$query->set('order','ASC');
			$query->set('meta_query',array(

				array(
					'key' => 'event_date',
					'compare' => '>=',
					'value' => $today,
					'type' => 'numeric'
				)));

		}
	}

	add_action('pre_get_posts','portfolio_adjust_queries')


	?>