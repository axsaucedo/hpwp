<?php
/*Theme Configuration*/
$config = array (
	
	/*Theme Modules*/
	'modules' => array(
		'MthemeInterface',
		'MthemeForm',
		'MthemeStyle',
		'MthemeSidebar',
		'MthemeShortcode',
		'MthemeTexameta'
	),
	
	/*Theme Components*/
	'components' => array(
		
		/*Supports*/
		'supports' => array (
			'title-tag',
			'automatic-feed-links',
			'post-thumbnails', 
			'custom-header',
			'custom-background'			
		),
		//Rewrite Rules
		'rewrite_rules' => array (
			'profile' => array(
				'name' => 'profile',
				'rule' => 'author_base',
				'rewrite' => 'profile',
				'position' => 'top',
				'replace' => true,
				'dynamic' => true,
			),
			
			'redirect' => array(
				'name' => 'redirect',
				'rule' => 'redirect/([^/]+)',
				'rewrite' => 'index.php?redirect=$matches[1]',
				'position' => 'top',
				'dynamic' => true,
			),
		),
	
		/*User Roles*/
		'user_roles' => array (
			array(
				'role' => 'inactive',
				'name' => __('Inactive', 'mtheme'),
				'capabilities' => array(),
			),
		),
		
		/*Custom Menus*/
		'custom_menus' => array (
			array(
				'slug' => 'main_menu',
				'name' => __('Main Menu', 'mtheme'),
			),
		),
		
		/*Editor styles*/
		'editor_styles' => array(
			'bordered'=>__('Bordered List', 'mtheme'),
			'checked'=>__('Checked List', 'mtheme'),
		),
		
		/*Image Sizes*/
		'image_sizes' => array (
		
			array(
				'name' => 'normal',
				'width' => 420,
				'height' => 420,
				'crop' => false,
			),
			
			array(
				'name' => 'extended',
				'width' => 1170,
				'height' => 520,
				'crop' => false,
			),	
			array(
				'name' => 'gallery',
				'width' => 620,
				'height' => 410,
				'crop' => false,
			),
		),
		
		/*Admin Styles*/
		'admin_styles' => array(			
			/*colorpicker*/
			array(
				'name' => 'wp-color-picker',
			),
			/*thickbox*/
			array(	
				'name' => 'thickbox',
			),
						
			/*interface*/
			array(	
				'name' => 'mtheme-style',
				'uri' => MTHEME_URI.'assets/css/style.css'
			),	
			/*jquery for datepicker*/
			array(
				'name' => 'mtheme-jquery-css',
				'uri' => '//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css',
			),
						
		),
		
		/*Admin Scripts*/
		'admin_scripts' => array(
			
			/*colorpicker*/
			array(
				'name' => 'wp-color-picker',
			),
			
			/*thickbox*/
			array(	
				'name' => 'thickbox',
			),
			
			/*uploader*/
			array(	
				'name' => 'media-upload',
			),
				
			/*popup*/
			array(
				'name' => 'mtheme-popup',
				'uri' => MTHEME_URI.'assets/js/mtheme.popup.js',
			),
			
			/*interface*/
			array(
				'name' => 'mtheme-interface',
				'uri' => MTHEME_URI.'assets/js/mtheme.interface.js',
			),
			/*jquery*/
			array(
				'name' => 'mtheme-jquery',
				'uri' => MTHEME_URI.'assets/js/jquery-ui.js',
			),
			/*timepicker*/
			array(
				'name' => 'mtheme-timepicker-jquery',
				'uri' => MTHEME_URI.'assets/js/jquery-ui-timepicker-addon.min.js',
			),
			
		),
		
		/*User Styles*/
		'user_styles' => array(
				
			/*general*/
			array(	
				'name' => 'bootstrap-style',
				'uri' => CHILD_URI.'site/css/bootstrap.min.css',				
			),
			array(	
				'name' => 'font-awesome.min-style',
				'uri' => CHILD_URI.'site/css/font-awesome.min.css',	
			),
			array(	
				'name' => 'flexslider-style',
				'uri' => CHILD_URI.'site/css/flexslider.css',				
			),
			array(	
				'name' => 'animate-style',
				'uri' => CHILD_URI.'site/css/animate.css',				
			),
			array(	
				'name' => 'schedule-style',
				'uri' => CHILD_URI.'site/css/schedule.css',				
			),			
			array(	
				'name' => 'gridgallery-style',
				'uri' => CHILD_URI.'site/css/gridgallery.css',				
			),
			array(	
				'name' => 'venobox-style',
				'uri' => CHILD_URI.'site/css/venobox.css',				
			),
			array(	
				'name' => 'jquery.countdown-style',
				'uri' => CHILD_URI.'site/css/jquery.countdown.css',				
			),	
			array(	
				'name' => 'jquery.panel-style',
				'uri' => CHILD_URI.'site/css/panel.css',				
			),		
			/*theme-css*/
			array(	
				'name' => 'mtheme-style',
				'uri' => CHILD_URI.'style.css',				
			),
			array(	
				'name' => 'mievent-style',
				'uri' => CHILD_URI.'site/css/mtheme.css',				
			),
			array(	
				'name' => 'queries-style',
				'uri' => CHILD_URI.'site/css/queries.css',				
			),
		),
		
		/*User Header Scripts*/
		'user_header_scripts' => array(					
			
		),
		/*User Footer Scripts*/
		'user_footer_scripts' => array(
			/*jquery*/
			array(	
				'name' => 'jquery-js',
				'uri' => CHILD_URI.'site/js/jquery-1.11.0.min.js'
			),
			array(	
				'name' => 'jquery-min-js',
				'uri' => CHILD_URI.'site/js/jquery-ui-1.10.4.min.js'
			),
			array(	
				'name' => 'classie-js',
				'uri' => CHILD_URI.'site/js/classie.js'
			),	
			array(	
				'name' => 'hammer.min-js',
				'uri' => CHILD_URI.'site/js/hammer.min.js'
			),			
			array(	
				'name' => 'venobox-js',
				'uri' => CHILD_URI.'site/js/venobox.js'
			),			
			array(	
				'name' => 'html5shiv-js',
				'uri' => CHILD_URI.'site/js/html5shiv.js'
			),
			array(	
				'name' => 'respond.min-js',
				'uri' => CHILD_URI.'site/js/respond.min.js'
			),
			array(	
				'name' => 'modalEffects-js',
				'uri' => CHILD_URI.'site/js/modalEffects.js'
			),
			array(	
				'name' => 'bootstrap.min-js',
				'uri' => CHILD_URI.'site/js/bootstrap.min.js'
			),
			array(	
				'name' => 'jquery.flexslider-js',
				'uri' => CHILD_URI.'site/js/jquery.flexslider.js'
			),
			array(	
				'name' => 'modernizr-js',
				'uri' => CHILD_URI.'site/js/modernizr.js'
			),
			array(	
				'name' => 'smooth-scroll-js',
				'uri' => CHILD_URI.'site/js/smooth-scroll.js'
			),array(	
				'name' => 'jquery.nicescroll-js',
				'uri' => CHILD_URI.'site/js/jquery.nicescroll.js'
			),
			array(	
				'name' => 'notifyMe-js',
				'uri' => CHILD_URI.'site/js/notifyMe.js'
			),
			array(	
				'name' => 'jquery.placeholder-js',
				'uri' => CHILD_URI.'site/js/jquery.placeholder.js'
			),
			array(	
				'name' => 'jquery.plugin-js',
				'uri' => CHILD_URI.'site/js/jquery.plugin.js'
			),
			array(	
				'name' => 'jquery.countdown-js',
				'uri' => CHILD_URI.'site/js/jquery.countdown.js'
			),			
			array(	
				'name' => 'wow.min-js',
				'uri' => CHILD_URI.'site/js/wow.min.js'
			),
			array(	
				'name' => 'init-js',
				'uri' => CHILD_URI.'site/js/init.js'
			),
			array(	
				'name' => 'onkeypressvalidation-js',
				'uri' => CHILD_URI.'site/js/onkeypressvalidation.js'
			),
		),
		
		/*Widget Settings*/
		'widget_settings' => array (
			'before_widget' => '<div class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-title"><h3 class="nomargin">',
			'after_title' => '</h3></div>',
		),
		
		/*Widget Areas*/
		'widget_areas' => array (
			array(
				'id' => 'default',
				'name' => __('Default', 'mtheme'),
				'before_widget' => '<div class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<div class="widget-title"><h3 class="nomargin">',
				'after_title' => '</h3></div>',				
			),
			
		),
		
		/*Widgets*/
		'widgets' => array (
			'MthemeAuthors',
			'MthemeComments',
			'WP_Widget_Search',
			'WP_Widget_Recent_Comments',
		),
		/*Post Types*/
		'post_types' => array (
		),
		
		/*Taxonomies*/
		'taxonomies' => array (
			/*event Category*/
			array(
				'taxonomy' => 'event_cat',
				'object_type' => array('event'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => true,			
					'labels' => array(
	                    'name' => __( 'Categories', 'mtheme'),
	                    'singular_name' => __( 'Categories', 'mtheme'),
						'menu_name' => __( 'Categories', 'mtheme' ),
	                    'search_items' => __( 'Search Event Category', 'mtheme'),
	                    'all_items' => __( 'All Events Categories', 'mtheme'),
	                    'edit_item' => __( 'Edit Event Category', 'mtheme'),
	                    'update_item' => __( 'Update Event Category', 'mtheme'),
	                    'add_new_item' => __( 'Add New Event Category', 'mtheme'),
	                    'new_item_name' => __( 'New Event Category Name', 'mtheme'),
	            	),
					'rewrite' => array(
						'slug' => __('events', 'mtheme'),
						'hierarchical' => false,
					),
				),
			),
			/*slide Category*/
			array(
				'taxonomy' => 'slide_cat',
				'object_type' => array('slide'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => true,			
					'labels' => array(
	                    'name' => __( 'Categories', 'mtheme'),
	                    'singular_name' => __( 'Categories', 'mtheme'),
						'menu_name' => __( 'Categories', 'mtheme' ),
	                    'search_items' => __( 'Search Slides', 'mtheme'),
	                    'all_items' => __( 'All Slides Categories', 'mtheme'),
	                    'edit_item' => __( 'Edit Slides Category', 'mtheme'),
	                    'update_item' => __( 'Update Slides Category', 'mtheme'),
	                    'add_new_item' => __( 'Add New Slides Category', 'mtheme'),
	                    'new_item_name' => __( 'New Slides Category Name', 'mtheme'),
	            	),
					'rewrite' => array(
						'slug' => __('slides', 'mtheme'),
						'hierarchical' => false,
					),
				),
			),
			/*Gallery Category*/
			array(
				'taxonomy' => 'gallery_cat',
				'object_type' => array('gallery_slide'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => true,			
					'labels' => array(
	                    'name' => __( 'Categories', 'mtheme'),
	                    'singular_name' => __( 'Categories', 'mtheme'),
						'menu_name' => __( 'Categories', 'mtheme' ),
	                    'search_items' => __( 'Search Gallery', 'mtheme'),
	                    'all_items' => __( 'All Gallery Categories', 'mtheme'),
	                    'edit_item' => __( 'Edit Gallery Category', 'mtheme'),
	                    'update_item' => __( 'Update Gallery Category', 'mtheme'),
	                    'add_new_item' => __( 'Add New Gallery Category', 'mtheme'),
	                    'new_item_name' => __( 'New Gallery Category Name', 'mtheme'),
	            	),
					'rewrite' => array(
						'slug' => __('gallery_slides', 'mtheme'),
						'hierarchical' => false,
					),
				),
			),
			
			/*Gallery Category*/
			array(
				'taxonomy' => 'carousel_cat',
				'object_type' => array('carousel_slide'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => true,			
					'labels' => array(
	                    'name' => __( 'Categories', 'mtheme'),
	                    'singular_name' => __( 'Carousel Categories', 'mtheme'),
						'menu_name' => __( 'Categories', 'mtheme' ),
	                    'search_items' => __( 'Search Category', 'mtheme'),
	                    'all_items' => __( 'All Carousel Categories', 'mtheme'),
	                    'edit_item' => __( 'Edit Carousel Category', 'mtheme'),
	                    'update_item' => __( 'Update Carousel Category', 'mtheme'),
	                    'add_new_item' => __( 'Add New Carousel Category', 'mtheme'),
	                    'new_item_name' => __( 'New Carousel Category Name', 'mtheme'),
	            	),
					'rewrite' => array(
						'slug' => __('Carousel_slides', 'mtheme'),
						'hierarchical' => false,
					),
				),
			),
			/*Schedule Category*/
			array(
				'taxonomy' => 'schedule_cat',
				'object_type' => array('schedule'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => true,			
					'labels' => array(
	                    'name' => __( 'Schedule Categories', 'mtheme'),
	                    'singular_name' => __( 'Schedule Category', 'mtheme'),
						'menu_name' => __( 'Categories', 'mtheme' ),
	                    'search_items' => __( 'Search Schedule Category', 'mtheme'),
	                    'all_items' => __( 'All Schedule Categories', 'mtheme'),
	                    'parent_item' => __( 'Parent Schedule Category', 'mtheme'),
	                    'parent_item_colon' => __( 'Parent Schedule Category', 'mtheme'),
	                    'edit_item' => __( 'Edit Schedule Category', 'mtheme'),
	                    'update_item' => __( 'Update Schedule Category', 'mtheme'),
	                    'add_new_item' => __( 'Add New Schedule Category', 'mtheme'),
	                    'new_item_name' => __( 'New Schedule Category Name', 'mtheme'),
	            	),
					'rewrite' => array(
						'slug' => __('schedules', 'mtheme'),
						'hierarchical' => true,
					),
				),				
				
			),
			/*Speaker Category*/
			array(
				'taxonomy' => 'speaker_cat',
				'object_type' => array('speaker'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => true,			
					'labels' => array(
	                    'name' => __( 'Speaker Categories', 'mtheme'),
	                    'singular_name' => __( 'Speaker Category', 'mtheme'),
						'menu_name' => __( 'Categories', 'mtheme' ),
	                    'search_items' => __( 'Search Speaker Category', 'mtheme'),
	                    'all_items' => __( 'All Speaker Categories', 'mtheme'),
	                    'parent_item' => __( 'Parent Speaker Category', 'mtheme'),
	                    'parent_item_colon' => __( 'Parent Speaker Category', 'mtheme'),
	                    'edit_item' => __( 'Edit Speaker Category', 'mtheme'),
	                    'update_item' => __( 'Update Speaker Category', 'mtheme'),
	                    'add_new_item' => __( 'Add New Speaker Category', 'mtheme'),
	                    'new_item_name' => __( 'New Speaker Category Name', 'mtheme'),
	            	),
					'rewrite' => array(
						'slug' => __('speakers', 'mtheme'),
						'hierarchical' => true,
					),
				),				
				
			),
			
			/*Package Category*/
			array(
				'taxonomy' => 'package_cat',
				'object_type' => array('package'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => true,			
					'labels' => array(
	                    'name' => __( 'Package Categories', 'mtheme'),
	                    'singular_name' => __( 'Package Category', 'mtheme'),
						'menu_name' => __( 'Categories', 'mtheme' ),
	                    'search_items' => __( 'Search Package Category', 'mtheme'),
	                    'all_items' => __( 'All Package Categories', 'mtheme'),
	                    'parent_item' => __( 'Parent Package Category', 'mtheme'),
	                    'parent_item_colon' => __( 'Parent Package Category', 'mtheme'),
	                    'edit_item' => __( 'Edit Package Category', 'mtheme'),
	                    'update_item' => __( 'Update Package Category', 'mtheme'),
	                    'add_new_item' => __( 'Add New Package Category', 'mtheme'),
	                    'new_item_name' => __( 'New Package Category Name', 'mtheme'),
	            	),
					'rewrite' => array(
						'slug' => __('packages', 'mtheme'),
						'hierarchical' => true,
					),
				),				
				
			),
			
			/*Sponsor Category*/
			array(
				'taxonomy' => 'sponsor_cat',
				'object_type' => array('sponsor'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => true,			
					'labels' => array(
	                    'name' => __( 'Sponsor Categories', 'mtheme'),
	                    'singular_name' => __( 'Sponsor Category', 'mtheme'),
						'menu_name' => __( 'Categories', 'mtheme' ),
	                    'search_items' => __( 'Search Sponsor Category', 'mtheme'),
	                    'all_items' => __( 'All Sponsor Categories', 'mtheme'),
	                    'parent_item' => __( 'Parent Sponsor Category', 'mtheme'),
	                    'parent_item_colon' => __( 'Parent Sponsor Category', 'mtheme'),
	                    'edit_item' => __( 'Edit Sponsor Category', 'mtheme'),
	                    'update_item' => __( 'Update Sponsor Category', 'mtheme'),
	                    'add_new_item' => __( 'Add New Sponsor Category', 'mtheme'),
	                    'new_item_name' => __( 'New Sponsor Category Name', 'mtheme'),
	            	),
					'rewrite' => array(
						'slug' => __('sponsors', 'mtheme'),
						'hierarchical' => true,
					),
				),				
				
			),			
		),
		
		/*Meta Boxes*/
		'meta_boxes' => array(
			/*page_event*/
			array(
				'id' => 'page_event',
				'title' =>  __('Page Options', 'mtheme'),
				'page' => 'page',
				'template' => 'default',				
				'context' => 'normal',
				'priority' => 'low',
				'options' => array(	
					array(	
						'name' => __('Hero Background', 'mtheme'),
						'id' => 'event_slider',
						'type' => 'select_post',
						'post_type' => 'event_slider',
						'description' => __('Select Hero Background', 'mtheme'),
					),
					array(	
						'name' => __('Show Page Title', 'mtheme'),
						'id' => 'title',
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'description' => __('Show Page Title', 'mtheme'),
					),
				),			
			),
			/*page_slider*/
			array(
				'id' => 'tel_page_slider',
				'title' =>  __('Page Options', 'mtheme'),
				'page' => 'page',
				'template' => 'template-event-landing.php',				
				'context' => 'normal',
				'priority' => 'low',
				'options' => array(	
					array(	
						'name' => __('Event', 'mtheme'),
						'id' => 'event',
						'type' => 'select_post',
						'post_type' => 'event',
						'description' => __('Select event', 'mtheme'),
					),
				),			
			),
			/*page_event*/
			array(
				'id' => 'fullwidth_page_event',
				'title' =>  __('Page Options', 'mtheme'),
				'page' => 'page',
				'template' => 'template-fullwidth.php',				
				'context' => 'normal',
				'priority' => 'low',
				'options' => array(	
					array(	
						'name' => __('Hero Background', 'mtheme'),
						'id' => 'event_slider',
						'type' => 'select_post',
						'post_type' => 'event_slider',
						'description' => __('Select Hero Background', 'mtheme'),
					),
					array(	
						'name' => __('Show Page Title', 'mtheme'),
						'id' => 'title',
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'description' => __('Show Page Title', 'mtheme'),
					),
				),			
			),
			/*page_event*/
			array(
				'id' => 'te_page_event',
				'title' =>  __('Page Options', 'mtheme'),
				'page' => 'page',
				'template' => 'template-events.php',				
				'context' => 'normal',
				'priority' => 'low',
				'options' => array(	
					array(	
						'name' => __('Hero Background', 'mtheme'),
						'id' => 'event_slider',
						'type' => 'select_post',
						'post_type' => 'event_slider',
						'description' => __('Select Hero Background', 'mtheme'),
					),
				),			
			),
			/*post*/
			array(
				'id' => 'post',
				'title' =>  __('Post Options', 'mtheme'),
				'page' => 'post',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(					
										
					array(
						'name' => __('Post overview', 'mtheme'),
						'id' => 'overview',
						'type' => 'textarea',
						'description' => __('Enter Post overview which displayed on post landing page', 'mtheme'),
					),
					array(	
						'name' => __('Post Type', 'mtheme'),
						'id' => 'type',
						'type' => 'select',
						'default'=> 'image',
						'options' => array(
							'image' => __('Image', 'mtheme'),
							'slider' => __('Carousel Slider', 'mtheme'),
							'audio' => __('Audio', 'mtheme'),
							'vimeo' => __('Vimeo', 'mtheme'),
							'html5video' => __('HTML-5-video', 'mtheme'),
							'youtube' => __('Youtube-video', 'mtheme'),
						),
					),					
					
					array(	
						'name' => __('Audio url / Vimeo url / HTML-5-video url / Youtube video ID', 'mtheme'),
						'id' => 'url',
						'description' => __('Enter Audio url / Vimeo url / HTML-5-video url / Youtube video ID', 'mtheme'),
						'type' => 'text',
					),
					array(	
						'name' => __('If type Carousel Slider select category', 'mtheme'),
						'id' => 'slider_cat',
						'description' => __('Choose Carousel Slider category', 'mtheme'),
						'type' => 'select_category',
						'taxonomy' => 'carousel_cat',
					),					
					
				),			
			),
			/*event_slider*/
			array(
				'id' => 'event_slider',
				'title' =>  __('Hero Background Options', 'mtheme'),
				'page' => 'event_slider',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(	
					
					array(	
						'name' => __('Background Type', 'mtheme'),
						'id' => 'type',
						'type' => 'select',
						'default'=> 'image',
						'options' => array(
							'image' => __('Image', 'mtheme'),
							'slider' => __('Hero Slider', 'mtheme'),
							'html5video' => __('HTML-5-video', 'mtheme'),
							'youtube' => __('Youtube-video', 'mtheme'),
						),
						'wrap' => true,
						'group' => 'group',
					),					
					
					array(	
						'name' => __('Image / Youtube video ID / HTML-5-video url', 'mtheme'),
						'id' => 'url',
						'description' => __('Choose Image / Youtube video ID / HTML-5-video url', 'mtheme'),
						'type' => 'uploader',
						'wrap' => true,
						'group' => 'group',
					),
					array(	
						'name' => __('If type Hero Slider select category', 'mtheme'),
						'id' => 'slides_cat',
						'description' => __('Choose Hero Slider category', 'mtheme'),
						'type' => 'select_category',
						'taxonomy' => 'slide_cat',
						'wrap' => true,
						'group' => 'group',
					),
					array(	
						'name' => __('Image overlay active', 'mtheme'),
						'description' => __('Image overlay active', 'mtheme'),
						'id' => 'overlay_active',
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'wrap' => true,
						'group' => 'group',
					),
					array(	
						'name' => __('Overlay Image', 'mtheme'),
						'id' => 'overlay_image',
						'description' => __('Choose Overlay Image', 'mtheme'),
						'type' => 'uploader',
						'wrap' => true,
						'group' => 'group',
					),
					array(	
						'name' => __('Background effect', 'mtheme'),
						'description' => __('Select Background effect', 'mtheme'),
						'id' => 'effect',
						'type' => 'select',
						'options' => array(							
							'none' => __('None', 'mtheme'),
							'astronomy' => __('Astronomy', 'mtheme'),
							'rain' => __('Rainy Days', 'mtheme'),
							'snow' => __('Snow Fall', 'mtheme'),
							'triangle' => __('Triangle', 'mtheme'),
						),
						'wrap' => true,
						'group' => 'group',
					),
					array(	
						'name' => __('Slider Heading', 'mtheme'),
						'description' => __('Enter Slider title', 'mtheme'),
						'id' => 'title',
						'type' => 'text',
						'wrap' => true,
						'group' => 'group',
					),
					
					array(	
						'name' => __('Slider Description', 'mtheme'),
						'description' => __('Select Slider Description', 'mtheme'),
						'id' => 'description',
						'type' => 'select',
						'options' => array(							
							'content' => __('Slider content', 'mtheme'),
							'date' => __('Event Date', 'mtheme')
						),
					),
					array(	
						'name' => __('Slider Content', 'mtheme'),
						'description' => __('Enter Slider Content', 'mtheme'),
						'id' => 'content',
						'type' => 'textarea',
					),
					array(	
						'name' => __('Event Date', 'mtheme'),
						'description' => __('Enter Event Date', 'mtheme'),
						'id' => 'date',
						'type' => 'text',
						'wrap' => true,
						'group' => 'group',
					),
					
					array(	
						'name' => __('Slider Know More link', 'mtheme'),
						'description' => __('Select Slider Know More link', 'mtheme'),
						'id' => 'know_more',
						'type' => 'select',
						'options' => array(							
							'link' => __('Slider link', 'mtheme'),
							'notify' => __('Notify form', 'mtheme')
						),
					),
					array(	
						'name' => __('Button title', 'mtheme'),
						'description' => __('Enter Button title', 'mtheme'),
						'id' => 'event_link_title',
						'type' => 'text',
						'default' => 'Register'
					),					
					array(	
						'name' => __('Button href link', 'mtheme'),
						'description' => __('Enter Button href link', 'mtheme'),
						'id' => 'event_link',
						'type' => 'text',				
						'default' => '#register_me'
					),
										
				)		
			),
			/*event*/
			array(
				'id' => 'event',
				'title' =>  __('About Event', 'mtheme'),
				'page' => 'event',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(	
					array(	
						'name' => __('Background Image', 'mtheme'),
						'description' => __('Choose an background image or color', 'mtheme'),
						'id' => 'event_bg_img',
						'type' => 'uploader'
					),
					array(	
						'name' => __('Background color', 'mtheme'),
						'description' => __('Choose an background color or image', 'mtheme'),
						'id' => 'bg_color',
						'type' => 'color',
						'default' => '#ffffff',
					),
					array(	
						'name' => __('Event Heading', 'mtheme'),
						'description' => __('Enter Event Heading', 'mtheme'),
						'id' => 'event_title',
						'type' => 'text',
					),
					array(	
						'name' => __('Heading color', 'mtheme'),
						'description' => __('Choose an Heading color', 'mtheme'),
						'id' => 'heading_color',
						'type' => 'color',
						'default' => '#363738',
					),					
					
					array(	
						'name' => __('Event content', 'mtheme'),
						'description' => __('Enter Event content', 'mtheme'),
						'id' => 'event_content',
						'type' => 'textarea',
					),	
					array(	
						'name' => __('Content color', 'mtheme'),
						'description' => __('Choose an Content color', 'mtheme'),
						'id' => 'content_color',
						'type' => 'color',
						'default' => '#5f6061',
					),					
				)		
			),			
			
			/*event_features*/
			array(
				'id' => 'event_features',
				'title' =>  __('Event Features', 'mtheme'),
				'page' => 'event',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(	
					
					array(	
						'name' => __('Background color', 'mtheme'),
						'description' => __('Choose an background color or image', 'mtheme'),
						'id' => 'event_f_bg_color',
						'type' => 'color',
						'default' => '#212739',
						'wrap' => true,
						'group' => 'group',	
					),
					array(	
						'name' => __('Event duration', 'mtheme'),
						'description' => __('Enter Event duration', 'mtheme'),
						'id' => 'event_duration',
						'type' => 'text',
					),
					array(	
						'name' => __('Event duration title', 'mtheme'),
						'description' => __('Please enter duration title', 'mtheme'),
						'id' => 'event_duration_title',
						'type' => 'text',
						'default' => 'Hours'
					),
					array(	
						'name' => __('Event duration brief', 'mtheme'),
						'description' => __('Enter Event duration brief', 'mtheme'),
						'id' => 'event_duration_brief',
						'type' => 'textarea',
						'wrap' => true,
						'group' => 'group',	
					),
					array(	
						'name' => __('Event Number of Speakers', 'mtheme'),
						'description' => __('Enter Event Number of Speakers', 'mtheme'),
						'id' => 'event_no_speakers',
						'type' => 'text',
					),
					array(	
						'name' => __('Event Speakers title', 'mtheme'),
						'description' => __('Please enter Speakers title', 'mtheme'),
						'id' => 'event_speakers_title',
						'type' => 'text',
						'default' => 'Hours'
					),
					array(	
						'name' => __('Event Speakers brief', 'mtheme'),
						'description' => __('Enter Event Speakers brief', 'mtheme'),
						'id' => 'event_speakers_brief',
						'type' => 'textarea',
						'wrap' => true,
						'group' => 'group',	
					),
					array(	
						'name' => __('Event Number of Technologies', 'mtheme'),
						'description' => __('Enter Event Number of Technologies', 'mtheme'),
						'id' => 'event_no_tech',
						'type' => 'text',
					),
					array(	
						'name' => __('Event Technologies title', 'mtheme'),
						'description' => __('Please enter Technologies title', 'mtheme'),
						'id' => 'event_tech_title',
						'type' => 'text',
						'default' => 'Hours'
					),
					array(	
						'name' => __('Event Technologies brief', 'mtheme'),
						'description' => __('Enter Event Technologies brief', 'mtheme'),
						'id' => 'event_tech_brief',
						'type' => 'textarea',
						'wrap' => true,
						'group' => 'group',	
					),
					
					array(	
						'name' => __('Show 3D Image Gallery', 'mtheme'),
						'description' => __('Show Image Gallery in Event Landing Page', 'mtheme'),
						'id' => 'img_gal_active',
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),				
						'default' => 'true'
					),
					array(	
						'name' => __('3D Image Gallery category', 'mtheme'),
						'id' => 'gal_cat',
						'description' => __('Choose Gallery slider category', 'mtheme'),
						'type' => 'select_category',
						'taxonomy' => 'gallery_cat',
						'wrap' => true,
						'group' => 'group',	
					),
					array(	
						'name' => __('Show Video', 'mtheme'),
						'description' => __('Show Video in Event Landing Page', 'mtheme'),
						'id' => 'video_active',
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'					
					),
					array(	
						'name' => __('Choose video background image', 'mtheme'),
						'description' => __('Choose video background image', 'mtheme'),
						'id' => 'video_bg_img',
						'type' => 'uploader',
					),
					
					array(	
						'name' => __('Choose video background color', 'mtheme'),
						'description' => __('Choose video background color', 'mtheme'),
						'id' => 'video_bg_color',
						'type' => 'color',
					),
					array(	
						'name' => __('Event features video type', 'mtheme'),
						'description' => __('Select features video type', 'mtheme'),
						'id' => 'video_type',
						'type' => 'select',
						'options' => array(							
							'vimeo' => __('Vimeo', 'mtheme'),
							'youtube' => __('Youtube', 'mtheme')
						),
					),
					array(	
						'name' => __('Features video URL', 'mtheme'),
						'description' => __('Event features video Youtube or Vimeo URL', 'mtheme'),
						'id' => 'event_video',
						'type' => 'text',
					),
					array(	
						'name' => __('Video hover active', 'mtheme'),
						'description' => __('Video hover active', 'mtheme'),
						'id' => 'video_hover_active',
						'type' => 'select',
						'options' => array(							
							'yes' => __('Yes', 'mtheme'),
							'no' => __('No', 'mtheme')
						),
						'default' => 'yes'					
					),
					array(	
						'name' => __('Choose video hover color', 'mtheme'),
						'description' => __('Choose video hover color', 'mtheme'),
						'id' => 'video_hover_color',
						'type' => 'color',
					),					
				)		
			),
			/*event*/
			array(
				'id' => 'event_brochure',
				'title' =>  __('Event Download Options', 'mtheme'),
				'page' => 'event',
				'context' => 'normal',
				'priority' => 'low',
				'options' => array(
					array(	
						'name' => __('Background color', 'mtheme'),
						'description' => __('Choose an background color or image', 'mtheme'),
						'id' => 'sl_bg_color',
						'type' => 'color',
						'default' => '#ffffff',
					),
					array(	
						'name' => __('Event PDF', 'mtheme'),
						'description' => __('Please select Event PDF', 'mtheme'),
						'id' => 'event_pdf',
						'type' => 'uploader',
					),
					array(	
						'name' => __('Event facebook share link', 'mtheme'),
						'description' => __('Enter Event facebook share link', 'mtheme'),
						'id' => 'event_fb_share_link',
						'type' => 'text',
					),	
						
				)		
			),
			
			/*event_section_menu*/
			array(
				'id' => 'event_section_menu',
				'title' =>  __('Event General Page Options', 'mtheme'),
				'page' => 'event',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(	
					array(	
						'name' => __('Logo Position', 'mtheme'),
						'description' => __('Logo Position', 'mtheme'),
						'id' => 'logo_position',
						'type' => 'select',
						'options' => array(							
							'header' => __('Header', 'mtheme'),
							'banner' => __('On Banner', 'mtheme')
						),
						'wrap' => true,
						'group' => 'group',
					),
					
					array(	
						'name' => __('Hero Background', 'mtheme'),
						'id' => 'slider',
						'type' => 'select_post',
						'post_type' => 'event_slider',
						'description' => __('Select Hero Background', 'mtheme'),
						'wrap' => true,
						'group' => 'group',
					),
					/*about*/
					array(
						'name' => __('About - Display in landing page', 'mtheme'),
						'id' => 'about_display',
						'description' => __('About - Display in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('About order Event Landing Page', 'mtheme'),
						'id' => 'about_order',
						'description' => __('About order Event Landing Page', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'1' => 'One',
							'2' => 'Two',
							'3' => 'Three',
							'4' => 'Four',
							'5' => 'Five',
							'6' => 'Six',
							'7' => 'Seven',
							'8' => 'Eight',
							'9' => 'Nine',
							'10' => 'Ten',
							'11' => 'Eleven'
						),
						'default' => '1',
					),
					array(
						'name' => __('About Menu Active', 'mtheme'),
						'id' => 'about_menu_active',
						'description' => __('About Menu Active in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true',
					),
					array(	
						'name' => __('About Menu Title', 'mtheme'),
						'description' => __('About Menu Title in Event Landing Page', 'mtheme'),
						'id' => 'menu_head',
						'type' => 'text',
						'default' => 'about',
						'wrap' => true,
						'group' => 'group',				
					),
					/*features*/					
					array(
						'name' => __('Features - Display in landing page', 'mtheme'),
						'id' => 'features_display',
						'description' => __('Features - Display in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Features order Event Landing Page', 'mtheme'),
						'id' => 'features_order',
						'description' => __('Features order Event Landing Page', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'1' => 'One',
							'2' => 'Two',
							'3' => 'Three',
							'4' => 'Four',
							'5' => 'Five',
							'6' => 'Six',
							'7' => 'Seven',
							'8' => 'Eight',
							'9' => 'Nine',
							'10' => 'Ten',
							'11' => 'Eleven'
						),
						'default' => '2',
					),
					array(
						'name' => __('Features Menu Active', 'mtheme'),
						'id' => 'features_menu_active',
						'description' => __('Features Menu Active in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'false'	
					),
					array(	
						'name' => __('Features Menu Title', 'mtheme'),
						'description' => __('Features Menu Title in Event Landing Page', 'mtheme'),
						'id' => 'features_head',
						'type' => 'text',
						'default' => 'features',
						'wrap' => true,
						'group' => 'group',				
					),
					/*schedule*/
					array(
						'name' => __('Schedule - Display in landing page', 'mtheme'),
						'id' => 'schedule_display',
						'description' => __('Schedule - Display in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Schedule order Event Landing Page', 'mtheme'),
						'id' => 'schedule_order',
						'description' => __('Schedule order Event Landing Page', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'1' => 'One',
							'2' => 'Two',
							'3' => 'Three',
							'4' => 'Four',
							'5' => 'Five',
							'6' => 'Six',
							'7' => 'Seven',
							'8' => 'Eight',
							'9' => 'Nine',
							'10' => 'Ten',
							'11' => 'Eleven'
						),
						'default' => '3',
					),
					array(
						'name' => __('Schedule Menu Active', 'mtheme'),
						'id' => 'schedule_menu_active',
						'description' => __('Schedule Menu Active in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Schedule Menu Title', 'mtheme'),
						'description' => __('Schedule Menu Title in Event Landing Page', 'mtheme'),
						'id' => 'schedule_head',
						'type' => 'text',
						'default' => 'schedule',		
					),
					array(	
						'name' => __('Schedules category', 'mtheme'),
						'id' => 'schedule_cat',
						'description' => __('Choose Schedules category', 'mtheme'),
						'type' => 'select_category',
						'taxonomy' => 'schedule_cat',	
						'wrap' => true,
						'group' => 'group',	
					),
					/*download*/
					array(
						'name' => __('Download - Display in landing page', 'mtheme'),
						'id' => 'download_display',
						'description' => __('Download - Display in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Download order Event Landing Page', 'mtheme'),
						'id' => 'download_order',
						'description' => __('Download order Event Landing Page', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'1' => 'One',
							'2' => 'Two',
							'3' => 'Three',
							'4' => 'Four',
							'5' => 'Five',
							'6' => 'Six',
							'7' => 'Seven',
							'8' => 'Eight',
							'9' => 'Nine',
							'10' => 'Ten',
							'11' => 'Eleven'
						),
						'default' => '4',
					),
					array(
						'name' => __('Download Menu Active', 'mtheme'),
						'id' => 'download_menu_active',
						'description' => __('Download Menu Active in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'false'	
					),
					array(	
						'name' => __('Download Menu Title', 'mtheme'),
						'description' => __('Download Menu Title in Event Landing Page', 'mtheme'),
						'id' => 'download_head',
						'type' => 'text',
						'default' => 'download',
						'wrap' => true,
						'group' => 'group',				
					),
					/*speaker*/
					array(
						'name' => __('Speakers - Display in landing page', 'mtheme'),
						'id' => 'speaker_display',
						'description' => __('Speakers - Display in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Speakers order Event Landing Page', 'mtheme'),
						'id' => 'speaker_order',
						'description' => __('Speakers order Event Landing Page', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'1' => 'One',
							'2' => 'Two',
							'3' => 'Three',
							'4' => 'Four',
							'5' => 'Five',
							'6' => 'Six',
							'7' => 'Seven',
							'8' => 'Eight',
							'9' => 'Nine',
							'10' => 'Ten',
							'11' => 'Eleven'
						),
						'default' => '5',
					),
					array(
						'name' => __('Speakers Menu Active', 'mtheme'),
						'id' => 'speaker_menu_active',
						'description' => __('Speakers Menu Active in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Speakers Menu Title', 'mtheme'),
						'description' => __('Speakers Menu Title in Event Landing Page', 'mtheme'),
						'id' => 'speaker_head',
						'type' => 'text',
						'default' => 'speakers',	
					),
					array(	
						'name' => __('Speakers category', 'mtheme'),
						'id' => 'speaker_cat',
						'description' => __('Choose Speakers category', 'mtheme'),
						'type' => 'select_category',
						'taxonomy' => 'speaker_cat',
						'wrap' => true,
						'group' => 'group',			
					),
					/*package*/
					array(
						'name' => __('Packages - Display in landing page', 'mtheme'),
						'id' => 'package_display',
						'description' => __('Package - Display in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Packages order Event Landing Page', 'mtheme'),
						'id' => 'package_order',
						'description' => __('Packages order Event Landing Page', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'1' => 'One',
							'2' => 'Two',
							'3' => 'Three',
							'4' => 'Four',
							'5' => 'Five',
							'6' => 'Six',
							'7' => 'Seven',
							'8' => 'Eight',
							'9' => 'Nine',
							'10' => 'Ten',
							'11' => 'Eleven'
						),
						'default' => '6',
					),
					array(
						'name' => __('Packages Menu Active', 'mtheme'),
						'id' => 'package_menu_active',
						'description' => __('Packages Menu Active in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Packages Menu Title', 'mtheme'),
						'description' => __('Package Menu Title in Event Landing Page', 'mtheme'),
						'id' => 'package_head',
						'type' => 'text',
						'default' => 'pricing',		
					),
					array(	
						'name' => __('Packages category', 'mtheme'),
						'id' => 'package_cat',
						'description' => __('Choose Packages category', 'mtheme'),
						'type' => 'select_category',
						'taxonomy' => 'package_cat',
						'wrap' => true,
						'group' => 'group',		
					),
					/*contact_form*/
					array(
						'name' => __('Contact Form - Display in landing page', 'mtheme'),
						'id' => 'contact_form_display',
						'description' => __('Contact Form - Display in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Contact Form order Event Landing Page', 'mtheme'),
						'id' => 'contact_form_order',
						'description' => __('Contact Form order Event Landing Page', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'1' => 'One',
							'2' => 'Two',
							'3' => 'Three',
							'4' => 'Four',
							'5' => 'Five',
							'6' => 'Six',
							'7' => 'Seven',
							'8' => 'Eight',
							'9' => 'Nine',
							'10' => 'Ten',
							'11' => 'Eleven'
						),
						'default' => '7',
					),
					array(
						'name' => __('Contact Form Menu Active', 'mtheme'),
						'id' => 'contact_form_menu_active',
						'description' => __('Contact Form Menu Active in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'false'	
					),
					array(	
						'name' => __('Contact Form Menu Title', 'mtheme'),
						'description' => __('Contact Form Menu Title in Event Landing Page', 'mtheme'),
						'id' => 'contact_form_head',
						'type' => 'text',
						'default' => 'register',
						'wrap' => true,
						'group' => 'group',				
					),
					/*sponsor*/
					array(
						'name' => __('Sponsors - Display in landing page', 'mtheme'),
						'id' => 'sponsor_display',
						'description' => __('Sponsors - Display in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Sponsors order Event Landing Page', 'mtheme'),
						'id' => 'sponsor_order',
						'description' => __('Sponsors order Event Landing Page', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'1' => 'One',
							'2' => 'Two',
							'3' => 'Three',
							'4' => 'Four',
							'5' => 'Five',
							'6' => 'Six',
							'7' => 'Seven',
							'8' => 'Eight',
							'9' => 'Nine',
							'10' => 'Ten',
							'11' => 'Eleven'
						),
						'default' => '8',
					),
					array(
						'name' => __('Sponsors Menu Active', 'mtheme'),
						'id' => 'sponsor_menu_active',
						'description' => __('Sponsors Menu Active in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Sponsors Menu Title', 'mtheme'),
						'description' => __('Sponsors Menu Title in Event Landing Page', 'mtheme'),
						'id' => 'sponsor_head',
						'type' => 'text',
						'default' => 'sponsors',			
					),
					array(	
						'name' => __('Sponsors category', 'mtheme'),
						'id' => 'sponsor_cat',
						'description' => __('Choose Sponsors category', 'mtheme'),
						'type' => 'select_category',
						'taxonomy' => 'sponsor_cat',
						'wrap' => true,
						'group' => 'group',	
					),
					/*notify*/
					array(
						'name' => __('Notify - Display in landing page', 'mtheme'),
						'id' => 'notify_display',
						'description' => __('Notify - Display in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Notify order Event Landing Page', 'mtheme'),
						'id' => 'notify_order',
						'description' => __('Notify order Event Landing Page', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'1' => 'One',
							'2' => 'Two',
							'3' => 'Three',
							'4' => 'Four',
							'5' => 'Five',
							'6' => 'Six',
							'7' => 'Seven',
							'8' => 'Eight',
							'9' => 'Nine',
							'10' => 'Ten',
							'11' => 'Eleven'
						),
						'default' => '9',
					),
					array(
						'name' => __('Notify Menu Active', 'mtheme'),
						'id' => 'notify_menu_active',
						'description' => __('Notify Menu Active in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'false'	
					),
					array(	
						'name' => __('Notify Menu Title', 'mtheme'),
						'description' => __('Notify Menu Title in Event Landing Page', 'mtheme'),
						'id' => 'notify_head',
						'type' => 'text',
						'default' => 'notify me',
						'wrap' => true,
						'group' => 'group',				
					),
					/*Footer Contact*/
					array(
						'name' => __('Footer Contact - Display in landing page', 'mtheme'),
						'id' => 'contact_display',
						'description' => __('Footer Contact - Display in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Footer Contact order Event Landing Page', 'mtheme'),
						'id' => 'contact_order',
						'description' => __('Footer Contact order Event Landing Page', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'1' => 'One',
							'2' => 'Two',
							'3' => 'Three',
							'4' => 'Four',
							'5' => 'Five',
							'6' => 'Six',
							'7' => 'Seven',
							'8' => 'Eight',
							'9' => 'Nine',
							'10' => 'Ten',
							'11' => 'Eleven'
						),
						'default' => '10',
					),
					array(
						'name' => __('Footer Contact Menu Active', 'mtheme'),
						'id' => 'contact_menu_active',
						'description' => __('Footer Contact Menu Active in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Footer Contact Menu Title', 'mtheme'),
						'description' => __('Footer Contact Menu Title in Event Landing Page', 'mtheme'),
						'id' => 'contact_head',
						'type' => 'text',
						'default' => 'contact',		
						'wrap' => true,
						'group' => 'group',		
					),
					/*Blog*/
					array(
						'name' => __('Blog - Display in landing page', 'mtheme'),
						'id' => 'blog_display',
						'description' => __('Blog - Display in landing page', 'mtheme'),
						'type' => 'select',
						'options' => array(							
							'true' => __('Yes', 'mtheme'),
							'false' => __('No', 'mtheme')
						),
						'default' => 'true'	
					),
					array(	
						'name' => __('Blog order Event Landing Page', 'mtheme'),
						'id' => 'blog_order',
						'description' => __('Blog Event Landing Page', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'1' => 'One',
							'2' => 'Two',
							'3' => 'Three',
							'4' => 'Four',
							'5' => 'Five',
							'6' => 'Six',
							'7' => 'Seven',
							'8' => 'Eight',
							'9' => 'Nine',
							'10' => 'Ten',
							'11' => 'Eleven'
						),
						'default' => '11',
					),
					array(	
						'name' => __('Blog Menu Title', 'mtheme'),
						'description' => __('Blog Menu Title in Event Landing Page', 'mtheme'),
						'id' => 'blog_head',
						'type' => 'text',
						'default' => 'blog'
					),
					array(	
						'name' => __('Blog Link', 'mtheme'),
						'description' => __('Blog Link in Event Landing Page', 'mtheme'),
						'id' => 'blog_link',
						'type' => 'text',		
					),
				),			
			),
			/*speaker*/
			array(
				'id' => 'speaker',
				'title' =>  __('Speaker Options', 'mtheme'),
				'page' => 'speaker',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(					
					
					array(
						'name' => __('Designation', 'mtheme'),
						'id' => 'designation',
						'type' => 'textarea',
						'description' => __('Enter Speaker Designation', 'mtheme'),
					),
					array(
						'name' => __('Twitter URL', 'mtheme'),
						'id' => 'twitter',
						'type' => 'text',
						'description' => __('Enter Speaker Twitter URL', 'mtheme'),
					),
					array(
						'name' => __('Facebook URL', 'mtheme'),
						'id' => 'facebook',
						'type' => 'text',
						'description' => __('Enter Speaker Facebook URL', 'mtheme'),
					),					
					array(
						'name' => __('Dribbble URL', 'mtheme'),
						'id' => 'dribbble',
						'type' => 'text',
						'description' => __('Enter Speaker Dribbble URL', 'mtheme'),
					),
					
					
				),			
			),
			/*packages*/
			array(
				'id' => 'package',
				'title' =>  __('Package Options', 'mtheme'),
				'page' => 'package',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(
					
					array(
						'name' => __('Price', 'mtheme'),
						'id' => 'price',
						'type' => 'text',
						'description' => __('Enter Package Price', 'mtheme'),
					),
					array(
						'name' => __('Primary heading background color', 'mtheme'),
						'id' => 'primary_heading_background_color',
						'type' => 'color',
						'description' => __('Please select primary heading background color', 'mtheme'),
					),
					array(
						'name' => __('Secondary heading background color', 'mtheme'),
						'id' => 'secondary_heading_background_color',
						'type' => 'color',
						'description' => __('Please select secondary heading background color', 'mtheme'),
					),					
					array(
						'name' => __('Heading color', 'mtheme'),
						'id' => 'heading_color',
						'type' => 'color',
						'description' => __('Please select heading color', 'mtheme'),
					),					
					array(
						'name' => __('Content Background color', 'mtheme'),
						'id' => 'content_background_color',
						'type' => 'color',
						'description' => __('Please select content background color', 'mtheme'),
					),
					array(
						'name' => __('Content color', 'mtheme'),
						'id' => 'content_color',
						'type' => 'color',
						'description' => __('Please select content color', 'mtheme'),
					),
					array(
						'name' => __('Button background color', 'mtheme'),
						'id' => 'button_background_color',
						'type' => 'color',
						'description' => __('Please select button background color', 'mtheme'),
					),
					array(
						'name' => __('Button heading color', 'mtheme'),
						'id' => 'button_heading_color',
						'type' => 'color',
						'description' => __('Please select button heading color', 'mtheme'),
					),
					
				),			
			),
			/*Schedule*/
			array(
				'id' => 'schedule',
				'title' =>  __('Schedule Options', 'mtheme'),
				'page' => 'schedule',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(
					
					array(
						'name' => __('Date', 'mtheme'),
						'id' => 'date',
						'type' => 'text',
						'description' => __('Enter Schedule date', 'mtheme'),
					),
					array(
						'name' => __('Schedule', 'mtheme'),
						'id' => 'event',
						'type' => 'schedule',
					),
					
				),			
			),
		),
		/*Taxonomies Meta*/
		'texa_meta' => array(
			array(
				'cat_type' => 'gallery_cat',
				'context' => 'normal',
				'shortcode_name' => 'ThreeDImageSlider',
				'options' => array(
					array(
						'name' => __('Background Image', 'mtheme'),
						'id' => 'background_img',
						'type' => 'image',
						'prefix' => MTHEME_PREFIX.'gal_',
					),
					array(
						'name' => __('Background color', 'mtheme'),
						'id' => 'background_color',
						'type' => 'color',
						'prefix' => MTHEME_PREFIX.'gal_',
					),
					array(
						'name' => __('Heading Color', 'mtheme'),
						'id' => 'heading_color',
						'type' => 'color',
						'prefix' => MTHEME_PREFIX.'gal_',
					),
					array(
						'name' => __('Content color', 'mtheme'),
						'id' => 'content_color',
						'type' => 'color',
						'prefix' => MTHEME_PREFIX.'gal_',
					),
					array(
						'name' => __('Slide Title', 'mtheme'),
						'id' => 'slide_title',
						'type' => 'select',
						'prefix' => MTHEME_PREFIX.'gal_',
						'select_options'=>
						array(
							'show' => __('Show', 'mtheme'),
							'hide' => __('Hide', 'mtheme'),
						)
					),
					
					array(
						'name' => __('Slide Title Position', 'mtheme'),
						'id' => 'slide_title_position',
						'type' => 'select',
						'prefix' => MTHEME_PREFIX.'gal_',
						'select_options'=>
						array(
							'top' => __('Top', 'mtheme'),
							'bottom' => __('Bottom', 'mtheme'),
						)
					),
					
					array(
						'name' => __('Slide Description', 'mtheme'),
						'id' => 'slide_description',
						'type' => 'select',
						'prefix' => MTHEME_PREFIX.'gal_',
						'select_options'=>
						array(
							'show' => __('Show', 'mtheme'),
							'hide' => __('Hide', 'mtheme'),
						)
					),
					
					array(
						'name' => __('Slide Description Position', 'mtheme'),
						'id' => 'slide_description_position',
						'type' => 'select',
						'prefix' => MTHEME_PREFIX.'gal_',
						'select_options'=>
						array(
							'top' => __('Top', 'mtheme'),
							'bottom' => __('Bottom', 'mtheme'),
						)
					),
					array(
						'name' => __('Hover Active', 'mtheme'),
						'id' => 'hover_active',
						'type' => 'select',
						'prefix' => MTHEME_PREFIX.'gal_',
						'select_options'=>
						array(
							'yes' => __('Yes', 'mtheme'),
							'no' => __('No', 'mtheme'),
						)
					),
					
					array(
						'name' => __('Hover Background Color', 'mtheme'),
						'id' => 'hover_background_color',
						'type' => 'color',
						'prefix' => MTHEME_PREFIX.'gal_',
					),				
					
				),
				'shortcode' => array(
					array(
						'field' => MTHEME_PREFIX.'gal_'.'slide_title',
						'title' => 'slide_title',
						'default' => 'show'
					),
					array(
						'field' => MTHEME_PREFIX.'gal_'.'slide_title_position',
						'title' => 'slide_title_position',
						'default' => 'top'
					),
					array(
						'field' => MTHEME_PREFIX.'gal_'.'slide_description',
						'title' => 'slide_description',
						'default' => 'show'
					),
					array(
						'field' => MTHEME_PREFIX.'gal_'.'slide_description_position',
						'title' => 'slide_description_position',
						'default' => 'top'
					),
					array(
						'field' => MTHEME_PREFIX.'gal_'.'hover_active',
						'title' => 'hover_active',
						'default' => 'yes'
					),
					array(
						'field' => MTHEME_PREFIX.'gal_'.'hover_background_color',
						'title' => 'hover_background_color',
						'default' => '#1bd982'
					),
				),				
			),
			/*Speaker_cat*/
			array(
				'cat_type' => 'speaker_cat',
				'context' => 'normal',
				'shortcode_name' => 'speakers',
				'options' => array(
					
					array(	
						'name' => __('Background Image', 'mtheme'),
						'description' => __('Choose an background image or color', 'mtheme'),
						'id' => 'bg_img',
						'prefix' => MTHEME_PREFIX.'spk_',
						'type' => 'image'
					),
					array(	
						'name' => __('Background color', 'mtheme'),
						'description' => __('Choose an background color or image', 'mtheme'),
						'id' => 'bg_color',
						'prefix' => MTHEME_PREFIX.'spk_',
						'type' => 'color',
						'default' => '#212739',
					),
					array(	
						'name' => __('Heading color', 'mtheme'),
						'description' => __('Choose an Heading color', 'mtheme'),
						'id' => 'p_color',
						'prefix' => MTHEME_PREFIX.'spk_',
						'type' => 'color',
						'default' => '#1bce7c',
					),
					array(	
						'name' => __('Content color', 'mtheme'),
						'description' => __('Choose an Content color', 'mtheme'),
						'id' => 's_color',
						'prefix' => MTHEME_PREFIX.'spk_',
						'type' => 'color',
						'default' => '#FFFFFF',
					),
					
					array(
						'name' => __('Speaker Title', 'mtheme'),
						'id' => 'title',
						'type' => 'select',
						'prefix' => MTHEME_PREFIX.'spk_',
						'select_options'=>
						array(
							'show' => __('Show', 'mtheme'),
							'hide' => __('Hide', 'mtheme'),
						)
					),
					
					array(
						'name' => __('Speaker Title Position', 'mtheme'),
						'id' => 'title_position',
						'type' => 'select',
						'prefix' => MTHEME_PREFIX.'spk_',
						'select_options'=>
						array(
							'bottom' => __('Bottom', 'mtheme'),
							'top' => __('Top', 'mtheme'),
						)
					),
					
					array(
						'name' => __('Speaker Designation', 'mtheme'),
						'id' => 'designation',
						'type' => 'select',
						'prefix' => MTHEME_PREFIX.'spk_',
						'select_options'=>
						array(
							'show' => __('Show', 'mtheme'),
							'hide' => __('Hide', 'mtheme'),
						)
					),
					
					array(
						'name' => __('Speaker Designation Position', 'mtheme'),
						'id' => 'designation_position',
						'type' => 'select',
						'prefix' => MTHEME_PREFIX.'spk_',
						'select_options'=>
						array(
							'bottom' => __('Bottom', 'mtheme'),
							'top' => __('Top', 'mtheme'),
						)
					),
					array(
						'name' => __('Detailed Popup', 'mtheme'),
						'id' => 'detailed_popup',
						'type' => 'select',
						'prefix' => MTHEME_PREFIX.'spk_',
						'select_options'=>
						array(
							'yes' => __('Yes', 'mtheme'),
							'no' => __('No', 'mtheme'),
						)
					),
					
					array(
						'name' => __('Hover Background Color', 'mtheme'),
						'id' => 'hover_background_color',
						'type' => 'color',
						'prefix' => MTHEME_PREFIX.'spk_',
					),
				),
				'shortcode' => array(
					array(
						'field' => MTHEME_PREFIX.'spk_'.'title',
						'title' => 'title',
						'default' => 'show'
					),
					array(
						'field' => MTHEME_PREFIX.'spk_'.'title_position',
						'title' => 'title_position',
						'default' => 'top'
					),
					array(
						'field' => MTHEME_PREFIX.'spk_'.'designation',
						'title' => 'designation',
						'default' => 'show'
					),
					array(
						'field' => MTHEME_PREFIX.'spk_'.'designation_position',
						'title' => 'designation_position',
						'default' => 'top'
					),
					array(
						'field' => MTHEME_PREFIX.'spk_'.'detailed_popup',
						'title' => 'detailed_popup',
						'default' => 'yes'
					),
					array(
						'field' => MTHEME_PREFIX.'spk_'.'hover_background_color',
						'title' => 'hover_background_color',
						'default' => '#1bd982'
					),
				),				
			),
			/*schedule_cat*/
			array(
				'cat_type' => 'schedule_cat',
				'context' => 'normal',
				'shortcode_name' => 'schedule',
				'options' => array(
					
					array(	
						'name' => __('Background Image', 'mtheme'),
						'description' => __('Choose an background image or color', 'mtheme'),
						'id' => 'bg_img',
						'prefix' => MTHEME_PREFIX.'sch_',
						'type' => 'image'
					),
					array(	
						'name' => __('Background color', 'mtheme'),
						'description' => __('Choose an background color or image', 'mtheme'),
						'id' => 'bg_color',
						'prefix' => MTHEME_PREFIX.'sch_',
						'type' => 'color',
						'default' => '#212739',
					),
					array(	
						'name' => __('Heading color', 'mtheme'),
						'description' => __('Choose an heading color', 'mtheme'),
						'id' => 'p_color',
						'prefix' => MTHEME_PREFIX.'sch_',
						'type' => 'color',
						'default' => '#1bce7c',
					),
					array(	
						'name' => __('Content color', 'mtheme'),
						'description' => __('Choose an content color', 'mtheme'),
						'id' => 's_color',
						'prefix' => MTHEME_PREFIX.'sch_',
						'type' => 'color',
						'default' => '#FFFFFF',
					),
					
				),
				'shortcode' => array(
					
				),				
			),
			/*sponsor_cat*/
			array(
				'cat_type' => 'sponsor_cat',
				'context' => 'normal',
				'shortcode_name' => 'sponsor',
				'options' => array(
					
					array(	
						'name' => __('Background Image', 'mtheme'),
						'description' => __('Choose an background image or color', 'mtheme'),
						'id' => 'bg_img',
						'prefix' => MTHEME_PREFIX.'spr_',
						'type' => 'image'
					),
					array(	
						'name' => __('Background color', 'mtheme'),
						'description' => __('Choose an background color or image', 'mtheme'),
						'id' => 'bg_color',
						'prefix' => MTHEME_PREFIX.'spr_',
						'type' => 'color',
						'default' => '#212739',
					),
					array(	
						'name' => __('Heading color', 'mtheme'),
						'description' => __('Choose an heading color', 'mtheme'),
						'id' => 'p_color',
						'prefix' => MTHEME_PREFIX.'spr_',
						'type' => 'color',
						'default' => '#1bce7c',
					),
					array(	
						'name' => __('Content color', 'mtheme'),
						'description' => __('Choose an content color', 'mtheme'),
						'id' => 's_color',
						'prefix' => MTHEME_PREFIX.'spr_',
						'type' => 'color',
						'default' => '#FFFFFF',
					),
					
				),
				'shortcode' => array(
					
				),				
			),
			/*package_cat*/
			array(
				'cat_type' => 'package_cat',
				'context' => 'normal',
				'shortcode_name' => 'package',
				'options' => array(
					
					array(	
						'name' => __('Background Image', 'mtheme'),
						'description' => __('Choose an background image or color', 'mtheme'),
						'id' => 'bg_img',
						'prefix' => MTHEME_PREFIX.'pck_',
						'type' => 'image'
					),
					array(	
						'name' => __('Background color', 'mtheme'),
						'description' => __('Choose an background color or image', 'mtheme'),
						'id' => 'bg_color',
						'prefix' => MTHEME_PREFIX.'pck_',
						'type' => 'color',
						'default' => '#212739',
					),
					array(	
						'name' => __('Heading color', 'mtheme'),
						'description' => __('Choose an Heading color', 'mtheme'),
						'id' => 'p_color',
						'prefix' => MTHEME_PREFIX.'pck_',
						'type' => 'color',
						'default' => '#1bce7c',
					),
					array(	
						'name' => __('Content color', 'mtheme'),
						'description' => __('Choose an content color', 'mtheme'),
						'id' => 's_color',
						'prefix' => MTHEME_PREFIX.'pck_',
						'type' => 'color',
						'default' => '#FFFFFF',
					),
					
				),
				'shortcode' => array(
					
				),				
			),
		),
		
		/*Taxonomies Column*/
		'texa_column' => array(
			'cb' => '<input type="checkbox" />',
			'name' => __('Name', 'mtheme'),
			'shortcode' => __('Shortcode', 'mtheme'),
			'slug' => __('Slug', 'mtheme'),
			'posts' => __('Posts', 'mtheme'),
		),
		
		/*Shortcodes*/
		'shortcodes' => array(
			array(
				'id' => 'section',
				'name' => __('section', 'mtheme'),
				'shortcode' => '[section][/section]',
				'options' => array(		
				),
			),
			array(
				'id' => 'container',
				'name' => __('container', 'mtheme'),
				'shortcode' => '[container][/container]',
				'options' => array(		
				),
			),
			array(
				'id' => 'row',
				'name' => __('row', 'mtheme'),
				'shortcode' => '[row][/row]',
				'options' => array(		
				),
			),
			/*Columns*/
			array(
				'id' => 'column',
				'name' => __('Columns', 'mtheme'),
				'shortcode' => '{{clone}}',
				'clone' => array(
					'shortcode' => '[{{column}} align="{{align}}" ]{{content}}[/{{column}}]',
					'options' => array(
						array(
							'id' => 'column',
							'name' => __('Width', 'mtheme'),
							'type' => 'select',
							'options' => array(
								'one_col' => __('One Column', 'mtheme'),
								'two_col' => __('Two Columns', 'mtheme'),
								'three_col' => __('Three Columns', 'mtheme'),
								'four_col' => __('Four Columns', 'mtheme'),
								'five_col' => __('Five Columns', 'mtheme'),
								'six_col' => __('Six Columns', 'mtheme'),
								'seven_col' => __('Seven Columns', 'mtheme'),
								'eight_col' => __('Eight Columns', 'mtheme'),
								'nine_col' => __('Nine Columns', 'mtheme'),
								'ten_col' => __('Ten Columns', 'mtheme'),
								'eleven_col' => __('Eleven Columns', 'mtheme'),
								'fullwidth' => __('Full Width', 'mtheme'),
							),
						),
						
						array(					
							'id' => 'content',
							'name' => __('Content', 'mtheme'),						
							'type' => 'textarea',
							'default' => 'content',
						),
						array(					
							'id' => 'align',
							'name' => __('Align', 'mtheme'),						
							'type' => 'select',
							'options' => array(
								'left' => __('Left Align', 'mtheme'),
								'center' => __('Center Align', 'mtheme'),
								'right' => __('Right Align', 'mtheme'),
							),
						),
					),
				),
			),
			
			array(
				'id' => 'button',
				'name' => __('Button', 'mtheme'),
				'shortcode' => '{{clone}}',
				'clone' => array(
					'shortcode' => '[button type="{{type}}" ]{{content}}[/button]',
					'options' => array(	
						array(					
							'id' => 'type',
							'name' => __('Type', 'mtheme'),						
							'type' => 'select',
							'options' => array(
								'primary' => __('Primary', 'mtheme'),
								'success' => __('Success', 'mtheme'),
								'info' => __('Info', 'mtheme'),
								'warning' => __('Warning', 'mtheme'),
								'dancer' => __('Dancer', 'mtheme'),
								'link' => __('Link', 'mtheme'),
							),
						),						
						array(					
							'id' => 'content',
							'name' => __('Content', 'mtheme'),						
							'type' => 'textarea',
							'default' => 'Button',
						),
					),
				),
			),
			array(
				'id' => 'alert',
				'name' => __('Alert', 'mtheme'),
				'shortcode' => '{{clone}}',
				'clone' => array(
					'shortcode' => '[alert type="{{type}}" closable="{{closable}}"]{{content}}[/alert]',
					'options' => array(	
						array(					
							'id' => 'type',
							'name' => __('Type', 'mtheme'),						
							'type' => 'select',
							'options' => array(
								'success' => __('Success', 'mtheme'),
								'info' => __('Info', 'mtheme'),
								'warning' => __('Warning', 'mtheme'),
								'dancer' => __('Dancer', 'mtheme'),
							),
						),
						array(					
							'id' => 'closable',
							'name' => __('Closable', 'mtheme'),						
							'type' => 'select',
							'options' => array(
								'yes' => __('Yes', 'mtheme'),
								'no' => __('No', 'mtheme'),
							),
						),
						array(					
							'id' => 'icon',
							'name' => __('Icon', 'mtheme'),						
							'type' => 'select',
							'options' => array(
								'Success' => __('Success', 'mtheme'),
								'important' => __('Important', 'mtheme'),
								'warning' => __('Warning', 'mtheme'),
								'dancer' => __('Dancer', 'mtheme'),
							),
						),						
						array(					
							'id' => 'content',
							'name' => __('Content', 'mtheme'),						
							'type' => 'textarea',
							'default' => 'alert',
						),
					),
				),
			),
			
			/*Toggles*/
			array(
				'id' => 'toggles',
				'name' => __('Toggles', 'mtheme'),
				'shortcode' => '[toggles type="{{type}}"]{{clone}}[/toggles]',
				'options' => array(
					array(
						'id' => 'type',
						'name' => __('Type', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'bg' => __('With Background', 'mtheme'),
							'border' => __('With Border', 'mtheme'),
						),
					),			
				),
				'clone' => array(
					'shortcode' => '[toggle title="{{title}}"]{{content}}[/toggle]',
					'options' => array(
						array(
							'id' => 'title',
							'name' => __('Title', 'mtheme'),
							'type' => 'text',
						),		
						
						array(
							'id' => 'content',
							'name' => __('Content', 'mtheme'),							
							'type' => 'textarea',					
						),
					),
				),
			),
			
			/*Accordions*/
			array(
				'id' => 'accordions',
				'name' => __('Accordions', 'mtheme'),
				'shortcode' => '[accordions type="{{type}}"]{{clone}}[/accordions]',
				'options' => array(
					array(
						'id' => 'type',
						'name' => __('Type', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'bg' => __('With Background', 'mtheme'),
							'border' => __('With Border', 'mtheme'),
						),
					),			
				),
				'clone' => array(
					'shortcode' => '[toggle title="{{title}}"]{{content}}[/toggle]',
					'options' => array(
						array(
							'id' => 'title',
							'name' => __('Title', 'mtheme'),
							'type' => 'text',
						),		
						
						array(
							'id' => 'content',
							'name' => __('Content', 'mtheme'),							
							'type' => 'textarea',					
						),
					),
				),
			),
			/*Tabs*/
			array(
				'id' => 'tabs',
				'name' => __('Tabs', 'mtheme'),
				'shortcode' => '[tabs type="{{type}}"]{{clone}}[/tabs]',
				'options' => array(
					array(			
						'id' => 'type',
						'name' => __('Type', 'mtheme'),			
						'type' => 'select',
						'options' => array(
							'horizontal' => __('Horizontal', 'mtheme'),
							'vertical' => __('Vertical', 'mtheme'),
						),
					),
				),
				'clone' => array(
					'shortcode' => '[tab title="{{title}}"]{{content}}[/tab]',
					'options' => array(
						array(
							'id' => 'title',
							'name' => __('Title', 'mtheme'),
							'type' => 'text',
						),
						
						array(					
							'id' => 'content',
							'name' => __('Content', 'mtheme'),							
							'type' => 'textarea',						
						),
					),
				),
			),
			/*list*/
			array(
				'id' => 'list',
				'name' => __('List', 'mtheme'),
				'shortcode' => '[list type="{{type}}"]{{clone}}[/list]',
				'options' => array(
					array(
						'id' => 'type',
						'name' => __('Type', 'mtheme'),
						'type' => 'select',
						'options' => array(
							'unordered' => __('Unordered', 'mtheme'),
							'ordered' => __('Ordered', 'mtheme'),
						),
					),			
				),
				'clone' => array(
					'shortcode' => '[item type="{{item_type}}"]{{content}}[/item]',
					'options' => array(
						array(
							'id' => 'item_type',
							'name' => __('Style Type', 'mtheme'),
							'type' => 'select',
							'options' => array(
								'' => __('None', 'mtheme'),
								'circle' => __('circle', 'mtheme'),
								'arrow-circle-right' => __('arrow-circle-right', 'mtheme'),
								'arrow-circle-right' => __('arrow-circle-right', 'mtheme'),
								'square' => __('square', 'mtheme'),								
								'check-square' => __('check-square', 'mtheme'),
								'spinner' => __('spinner with spin', 'mtheme'),
								'spinner fa-spin' => __('spinner with spin', 'mtheme'),
							),
						),		
						
						array(
							'id' => 'content',
							'name' => __('Content', 'mtheme'),							
							'type' => 'textarea',					
						),
					),
				),
			),
			
			array(
				'id' => 'fancy',
				'name' => __('Fancy-title', 'mtheme'),
				'shortcode' => '{{clone}}',
				'clone' => array(
					'shortcode' => '[fancy-title align="{{align}}" border="{{border}}" heading="{{heading}}" ]{{content}}[/fancy-title]',
					'options' => array(	
						array(					
							'id' => 'align',
							'name' => __('Align', 'mtheme'),						
							'type' => 'select',
							'options' => array(
								'left' => __('Left Align', 'mtheme'),
								'center' => __('Center Align', 'mtheme'),
								'right' => __('Right Align', 'mtheme'),
							),
						),
						array(					
							'id' => 'border',
							'name' => __('Border', 'mtheme'),						
							'type' => 'select',
							'options' => array(
								'bottom' => __('Bottom', 'mtheme'),
								'title' => __('Title', 'mtheme'),
							),
						),
						array(					
							'id' => 'heading',
							'name' => __('Heading', 'mtheme'),						
							'type' => 'select',
							'options' => array(
								'h1' => __('H1', 'mtheme'),
								'h2' => __('H2', 'mtheme'),
								'h3' => __('H3', 'mtheme'),
								'h4' => __('H4', 'mtheme'),
								'h5' => __('H5', 'mtheme'),
								'h6' => __('H6', 'mtheme'),
							),
							'default' => 'h3'
						), 						
						array(					
							'id' => 'content',
							'name' => __('Content', 'mtheme'),						
							'type' => 'textarea',
							'default' => 'Fancy-title'
						),
					),
				),
			),
			array(
				'id' => 'event_intro',
				'name' => __('About Event', 'mtheme'),
				'shortcode' => '[event_intro event_id="{{event}}"]',
				'options' => array(
					array(
						'id' => 'event',
						'name' => __('Event', 'mtheme'),			
						'type' => 'select_post',
						'post_type' => 'event',
					),
				),
			),
			array(
				'id' => 'event_features',
				'name' => __('Event Features', 'mtheme'),
				'shortcode' => '[event_features event_id="{{event}}"]',
				'options' => array(
					array(
						'id' => 'event',
						'name' => __('Event', 'mtheme'),			
						'type' => 'select_post',
						'post_type' => 'event',
					),
				),
			),
			array(
				'id' => 'event_schedules',
				'name' => __('Event Schedules', 'mtheme'),
				'shortcode' => '[event_schedules event_id="{{event}}"]',
				'options' => array(
					array(
						'id' => 'event',
						'name' => __('Event', 'mtheme'),			
						'type' => 'select_post',
						'post_type' => 'event',
					),
				),
			),
			array(
				'id' => 'event_brochure',
				'name' => __('Event Downloads', 'mtheme'),
				'shortcode' => '[event_brochure event_id="{{event}}"]',
				'options' => array(
					array(
						'id' => 'event',
						'name' => __('Event', 'mtheme'),			
						'type' => 'select_post',
						'post_type' => 'event',
					),
				),
			),
			array(
				'id' => 'event_speakers',
				'name' => __('Event Speakers', 'mtheme'),
				'shortcode' => '[event_speakers event_id="{{event}}"]',
				'options' => array(
					array(
						'id' => 'event',
						'name' => __('Event', 'mtheme'),			
						'type' => 'select_post',
						'post_type' => 'event',
					),
				),
			),
			array(
				'id' => 'event_packages',
				'name' => __('Event Packages', 'mtheme'),
				'shortcode' => '[event_packages event_id="{{event}}"]',
				'options' => array(
					array(
						'id' => 'event',
						'name' => __('Event', 'mtheme'),			
						'type' => 'select_post',
						'post_type' => 'event',
					),
				),
			),
			array(
				'id' => 'event_sponsors',
				'name' => __('Event Sponsors', 'mtheme'),
				'shortcode' => '[event_sponsors event_id="{{event}}"]',
				'options' => array(
					array(
						'id' => 'event',
						'name' => __('Event', 'mtheme'),			
						'type' => 'select_post',
						'post_type' => 'event',
					),
				),
			),
			array(
				'id' => 'ThreeDImageSlider',
				'name' => __('Event ThreeDImage Slider', 'mtheme'),
				'shortcode' => '[ThreeDImageSlider category="{{category}}"]',
				'options' => array(
					array(
						'id' => 'category',
						'name' => __('Category', 'mtheme'),			
						'type' => 'select_category',
						'taxonomy' => 'gal_cat',
					),
				),
			),
			array(
				'id' => 'event_video',
				'name' => __('Event Video', 'mtheme'),
				'shortcode' => '[event_video]',
				'options' => array(		
				),
			),
			array(
				'id' => 'event_registration_form',
				'name' => __('Event Contact Form', 'mtheme'),
				'shortcode' => '[event_registration_form]',
				'options' => array(		
				),
			),
			array(
				'id' => 'event_notify_form',
				'name' => __('Event Notify Form', 'mtheme'),
				'shortcode' => '[event_notify_form]',
				'options' => array(		
				),
			),
			array(
				'id' => 'footer_contact',
				'name' => __('Contact Section', 'mtheme'),
				'shortcode' => '[footer_contact]',
				'options' => array(		
				),
			),
		),
		
		//Custom Styles
		'custom_styles' => array(
			
			array(
				'elements' => '.status',
				'attributes' => array(
					array(
						'name' => 'background-image',
						'option' => 'loading_image',
						'default' => THEME_URI.'site/img/loading.gif',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.header',
				'attributes' => array(
					array(
						'name' => 'background-color',
						'option' => 'header_color',
						'default' => '#0f1726',
						'important' => false,
					),
				),
			),			
			array(
				'elements' => '.blog-listing h1,.blog-listing h2,.blog-listing h3,.blog-listing h4,.blog-listing h5,.blog-listing h6,.posts-listing h1,.posts-listing h2,.posts-listing h3,.posts-listing h4,.posts-listing h5,.posts-listing h6,.page-heading h1,.sidebar .page_item a,.widget-title h3,.widget ul li a,td,caption,.tagcloud a,.post-content h1,.blog-listing h2,.post-content h3,.post-content h4,.post-content h5,.post-content h6',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'post_heading_color',
						'default' => '#0f1726',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.profile-name-discussion,.read-comment-head span,.nav-close fa',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'post_heading_color',
						'default' => '#0f1726',
						'important' => true,
					),
				),
			),
			array(
				'elements' => '.blog-listing div,.blog-listing p,.blog-listing span,.posts-listing div,.posts-listing p,.posts-listing span,.content,post-content div,.post-content p,.post-content span,.post-content .main-content .post-detail p',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'post_content_color',
						'default' => '#0f1726',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.scroll-header,.dropdown-menu',
				'attributes' => array(
					array(
						'name' => 'background-color',
						'option' => 'header_color',
						'default' => '#0f1726',
						'important' => true,
					),
				),
			),	
			array(
				'elements' => 'h1,h2,h3,h4,h5,h6',
				'attributes' => array(
					array(
						'name' => 'font-family',
						'option' => 'heading_font',
						'default' => 'Raleway',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '#wp-calendar thead tr th, #wp-calendar tbody tr td',
				'attributes' => array(
					array(
						'name' => 'border-color',
						'option' => 'post_heading_color',
						'default' => '#363738',
						'important' => false,
					),
				),
			),
			array(
				'elements' => 'h1,h2,h3,h4,h5,h6,.accordion .item .heading',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'heading_color',
						'default' => '#363738',
						'important' => false,
					),
				),
			),		
			array(
				'elements' => '.border_left,.border_bottom',
				'attributes' => array(
					array(
						'name' => 'border-color',
						'option' => 'heading_color',
						'default' => '#363738',
						'important' => false,
					),
				),
			),
			array(
				'elements' => 'html, body, div, span, applet, object, iframe, p, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video',
				'attributes' => array(
					array(
						'name' => 'font-family',
						'option' => 'content_font',
						'default' => 'Raleway',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.d-sch i,.fb i',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'content_color',
						'default' => '#5f6061',
						'important' => true,
					),
				),
			),
			array(
				'elements' => 'body, input, select, textarea, p, .accordion .item .heading .e-title',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'content_color',
						'default' => '#5f6061',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.tagcloud a',
				'attributes' => array(
					array(
						'name' => 'border-color',
						'option' => 'post_content_color',
						'default' => '#5f6061',
						'important' => false,
					),
				),
			),			
			
			array(
				'elements' => 'a.btn-effect:hover, a.btn-effect:focus,.tabs nav a,.tc',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'primary_color',
						'default' => '#FFFFFF',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.social-btn i:hover, .social-btn i:focus,.social-btn:hover i,.md-trigger .fa,.nl-form.ajax-form a:hover,.md-trigger:hover,.page-numbers:hover,.page-numbers:focus,.page-numbers i:hover, .page-numbers i:focus,.page-numbers:hover i',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'primary_color',
						'default' => '#FFFFFF',
						'important' => true,
					),
				),
			),
			
			 
			array(
				'elements' => 'a.fb:hover,a.d-sch:hover,.active span,.widget li,.d-sch i:hover,.d-sch i:focus,.fb i:hover,.fb i:focus,.d-sch:hover i,.d-sch:focus i,.fb:hover i,.fb:focus i,.author-title,.nl-field-toggle,.nl-form.ajax-form input,.nl-form.ajax-form select',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'secondary_color',
						'default' => '#1bd982',
						'important' => true,
					),
				),
			),
			array(
				'elements' => '.tabs nav ul li *:hover,.btn-effect,.tabs nav li.tab-current,#submit,.learn-more-btn,.flex-control-paging li a.flex-active,.flex-control-paging li a:hover,.social-btn:hover, .social-btn:focus,.form-notify button.submit-button,.input-group-btn > .btn:hover, .input-group-btn > .btn:focus, .input-group-btn > .btn:active,
				.fancy-title.bottom-border h1:after,.fancy-title.bottom-border h2:after,.fancy-title.bottom-border h3:after,
				.fancy-title.bottom-border h4:after,.fancy-title.bottom-border h5:after,.fancy-title.bottom-border h6:after,.social-ftp a',
				'attributes' => array(
					array(
						'name' => 'background-color',
						'option' => 'secondary_color',
						'default' => '#1bd982',
						'important' => false,
					),
				),
			),
			array(
				'elements' => 'a, a:hover, a:focus,.accordion .item.open .e-title,.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus,.navbar-default .navbar-nav > li.active > a,.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus,.md-trigger,.sp-name,.contact-details h2 span,.form-notify  h2,.social-btn,.page-numbers,.page-numbers i,.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus,.fa',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'secondary_color',
						'default' => '#1bd982',
						'important' => false,
					),
				),
			),
			array(
				'elements' => 'blockquote,#title_hr,.flex-control-paging li a,hr',
				'attributes' => array(
					array(
						'name' => 'border-color',
						'option' => 'secondary_color',
						'default' => '#1bd982',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.button.dark, .jp-gui, .header-wrap, .header-navigation ul ul, .select-menu, .search-form, .mobile-search-form, .login-button .tooltip-text, .footer-wrap, .site-footer:after, .site-header:after,.tabs nav ul li,.post-details-header .overlay-detail,.social-btn,.page-numbers',
				'attributes' => array(
					array(
						'name' => 'background-color',
						'option' => 'background_color',
						'default' => '#212739',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.author-img img',
				'attributes' => array(
					array(
						'name' => 'border-color',
						'option' => 'background_color',
						'default' => '#212739',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.accordion .day,.light-box,.light-box:hover, .light-box:focus',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'tertiary_color',
						'default' => '#1bd982',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.accordion .item .heading .time,.nl-ti-text ul li.nl-ti-example',
				'attributes' => array(
					array(
						'name' => 'border-color',
						'option' => 'tertiary_color',
						'default' => '#1bd982',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.navbar-default .navbar-nav > li > a',
				'attributes' => array(
					array(
						'name' => 'font-size',
						'option' => 'menu_font_size',
						'default' => '0.91em',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.navbar-default .navbar-nav > li > a',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'menu_font_color',
						'default' => '#FFF',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.navbar-nav > li > a',
				'attributes' => array(
					array(
						'name' => 'padding-top',
						'option' => 'menu_padding_top',
						'default' => '30px',
						'important' => false,
					),
				),
			),
			array(
				'elements' => '.navbar-nav > li > a',
				'attributes' => array(
					array(
						'name' => 'padding-bottom',
						'option' => 'menu_padding_bottom',
						'default' => '30px',
						'important' => false,
					),
				),
			),
		),
		
		
		/*Fonts*/
		'fonts' => array(
			'ABeeZee' => 'ABeeZee',
			'Abel' => 'Abel',
			'Abril Fatface' => 'Abril Fatface',
			'Aclonica' => 'Aclonica',
			'Acme' => 'Acme',
			'Actor' => 'Actor',
			'Adamina' => 'Adamina',
			'Advent Pro' => 'Advent Pro',
			'Aguafina Script' => 'Aguafina Script',
			'Aladin' => 'Aladin',
			'Aldrich' => 'Aldrich',
			'Alegreya' => 'Alegreya',
			'Alegreya SC' => 'Alegreya SC',
			'Alex Brush' => 'Alex Brush',
			'Alfa Slab One' => 'Alfa Slab One',
			'Alice' => 'Alice',
			'Alike' => 'Alike',
			'Alike Angular' => 'Alike Angular',
			'Allan' => 'Allan',
			'Allerta' => 'Allerta',
			'Allerta Stencil' => 'Allerta Stencil',
			'Allura' => 'Allura',
			'Almendra' => 'Almendra',
			'Almendra SC' => 'Almendra SC',
			'Amaranth' => 'Amaranth',
			'Amatic SC' => 'Amatic SC',
			'Amethysta' => 'Amethysta',
			'Andada' => 'Andada',
			'Andika' => 'Andika',
			'Angkor' => 'Angkor',
			'Annie Use Your Telescope' => 'Annie Use Your Telescope',
			'Anonymous Pro' => 'Anonymous Pro',
			'Antic' => 'Antic',
			'Antic Didone' => 'Antic Didone',
			'Antic Slab' => 'Antic Slab',
			'Anton' => 'Anton',
			'Arapey' => 'Arapey',
			'Arbutus' => 'Arbutus',
			'Architects Daughter' => 'Architects Daughter',
			'Arimo' => 'Arimo',
			'Arizonia' => 'Arizonia',
			'Armata' => 'Armata',
			'Artifika' => 'Artifika',
			'Arvo' => 'Arvo',
			'Asap' => 'Asap',
			'Asset' => 'Asset',
			'Astloch' => 'Astloch',
			'Asul' => 'Asul',
			'Atomic Age' => 'Atomic Age',
			'Aubrey' => 'Aubrey',
			'Audiowide' => 'Audiowide',
			'Average' => 'Average',
			'Averia Gruesa Libre' => 'Averia Gruesa Libre',
			'Averia Libre' => 'Averia Libre',
			'Averia Sans Libre' => 'Averia Sans Libre',
			'Averia Serif Libre' => 'Averia Serif Libre',
			'Bad Script' => 'Bad Script',
			'Balthazar' => 'Balthazar',
			'Bangers' => 'Bangers',
			'Basic' => 'Basic',
			'Battambang' => 'Battambang',
			'Baumans' => 'Baumans',
			'Bayon' => 'Bayon',
			'Belgrano' => 'Belgrano',
			'Belleza' => 'Belleza',
			'Bentham' => 'Bentham',
			'Berkshire Swash' => 'Berkshire Swash',
			'Bevan' => 'Bevan',
			'Bigshot One' => 'Bigshot One',
			'Bilbo' => 'Bilbo',
			'Bilbo Swash Caps' => 'Bilbo Swash Caps',
			'Bitter' => 'Bitter',
			'Black Ops One' => 'Black Ops One',
			'Bokor' => 'Bokor',
			'Bonbon' => 'Bonbon',
			'Boogaloo' => 'Boogaloo',
			'Bowlby One' => 'Bowlby One',
			'Bowlby One SC' => 'Bowlby One SC',
			'Brawler' => 'Brawler',
			'Bree Serif' => 'Bree Serif',
			'Bubblegum Sans' => 'Bubblegum Sans',
			'Buda' => 'Buda',
			'Buenard' => 'Buenard',
			'Butcherman' => 'Butcherman',
			'Butterfly Kids' => 'Butterfly Kids',
			'Cabin' => 'Cabin',
			'Cabin Condensed' => 'Cabin Condensed',
			'Cabin Sketch' => 'Cabin Sketch',
			'Caesar Dressing' => 'Caesar Dressing',
			'Cagliostro' => 'Cagliostro',
			'Calligraffitti' => 'Calligraffitti',
			'Cambo' => 'Cambo',
			'Candal' => 'Candal',
			'Cantarell' => 'Cantarell',
			'Cantata One' => 'Cantata One',
			'Cardo' => 'Cardo',
			'Carme' => 'Carme',
			'Carter One' => 'Carter One',
			'Caudex' => 'Caudex',
			'Cedarville Cursive' => 'Cedarville Cursive',
			'Ceviche One' => 'Ceviche One',
			'Changa One' => 'Changa One',
			'Chango' => 'Chango',
			'Chau Philomene One' => 'Chau Philomene One',
			'Chelsea Market' => 'Chelsea Market',
			'Chenla' => 'Chenla',
			'Cherry Cream Soda' => 'Cherry Cream Soda',
			'Chewy' => 'Chewy',
			'Chicle' => 'Chicle',
			'Chivo' => 'Chivo',
			'Coda' => 'Coda',
			'Coda Caption' => 'Coda Caption',
			'Codystar' => 'Codystar',
			'Comfortaa' => 'Comfortaa',
			'Coming Soon' => 'Coming Soon',
			'Concert One' => 'Concert One',
			'Condiment' => 'Condiment',
			'Content' => 'Content',
			'Contrail One' => 'Contrail One',
			'Convergence' => 'Convergence',
			'Cookie' => 'Cookie',
			'Copse' => 'Copse',
			'Corben' => 'Corben',
			'Cousine' => 'Cousine',
			'Coustard' => 'Coustard',
			'Covered By Your Grace' => 'Covered By Your Grace',
			'Crafty Girls' => 'Crafty Girls',
			'Creepster' => 'Creepster',
			'Crete Round' => 'Crete Round',
			'Crimson Text' => 'Crimson Text',
			'Crushed' => 'Crushed',
			'Cuprum' => 'Cuprum',
			'Cutive' => 'Cutive',
			'Damion' => 'Damion',
			'Dancing Script' => 'Dancing Script',
			'Dangrek' => 'Dangrek',
			'Dawning of a New Day' => 'Dawning of a New Day',
			'Days One' => 'Days One',
			'Delius' => 'Delius',
			'Delius Swash Caps' => 'Delius Swash Caps',
			'Delius Unicase' => 'Delius Unicase',
			'Della Respira' => 'Della Respira',
			'Devonshire' => 'Devonshire',
			'Didact Gothic' => 'Didact Gothic',
			'Diplomata' => 'Diplomata',
			'Diplomata SC' => 'Diplomata SC',
			'Doppio One' => 'Doppio One',
			'Dorsa' => 'Dorsa',
			'Dosis' => 'Dosis',
			'Dr Sugiyama' => 'Dr Sugiyama',
			'Droid Sans' => 'Droid Sans',
			'Droid Sans Mono' => 'Droid Sans Mono',
			'Droid Serif' => 'Droid Serif',
			'Duru Sans' => 'Duru Sans',
			'Dynalight' => 'Dynalight',
			'EB Garamond' => 'EB Garamond',
			'Eater' => 'Eater',
			'Economica' => 'Economica',
			'Electrolize' => 'Electrolize',
			'Emblema One' => 'Emblema One',
			'Emilys Candy' => 'Emilys Candy',
			'Engagement' => 'Engagement',
			'Enriqueta' => 'Enriqueta',
			'Erica One' => 'Erica One',
			'Esteban' => 'Esteban',
			'Euphoria Script' => 'Euphoria Script',
			'Ewert' => 'Ewert',
			'Exo' => 'Exo',
			'Expletus Sans' => 'Expletus Sans',
			'Fanwood Text' => 'Fanwood Text',
			'Fascinate' => 'Fascinate',
			'Fascinate Inline' => 'Fascinate Inline',
			'Federant' => 'Federant',
			'Federo' => 'Federo',
			'Felipa' => 'Felipa',
			'Fjord One' => 'Fjord One',
			'Flamenco' => 'Flamenco',
			'Flavors' => 'Flavors',
			'Fondamento' => 'Fondamento',
			'Fontdiner Swanky' => 'Fontdiner Swanky',
			'Forum' => 'Forum',
			'Francois One' => 'Francois One',
			'Fredericka the Great' => 'Fredericka the Great',
			'Fredoka One' => 'Fredoka One',
			'Freehand' => 'Freehand',
			'Fresca' => 'Fresca',
			'Frijole' => 'Frijole',
			'Fugaz One' => 'Fugaz One',
			'GFS Didot' => 'GFS Didot',
			'GFS Neohellenic' => 'GFS Neohellenic',
			'Galdeano' => 'Galdeano',
			'Gentium Basic' => 'Gentium Basic',
			'Gentium Book Basic' => 'Gentium Book Basic',
			'Geo' => 'Geo',
			'Geostar' => 'Geostar',
			'Geostar Fill' => 'Geostar Fill',
			'Germania One' => 'Germania One',
			'Give You Glory' => 'Give You Glory',
			'Glass Antiqua' => 'Glass Antiqua',
			'Glegoo' => 'Glegoo',
			'Gloria Hallelujah' => 'Gloria Hallelujah',
			'Goblin One' => 'Goblin One',
			'Gochi Hand' => 'Gochi Hand',
			'Gorditas' => 'Gorditas',
			'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
			'Graduate' => 'Graduate',
			'Gravitas One' => 'Gravitas One',
			'Great Vibes' => 'Great Vibes',
			'Gruppo' => 'Gruppo',
			'Gudea' => 'Gudea',
			'Habibi' => 'Habibi',
			'Hammersmith One' => 'Hammersmith One',
			'Handlee' => 'Handlee',
			'Hanuman' => 'Hanuman',
			'Happy Monkey' => 'Happy Monkey',
			'Henny Penny' => 'Henny Penny',
			'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
			'Holtwood One SC' => 'Holtwood One SC',
			'Homemade Apple' => 'Homemade Apple',
			'Homenaje' => 'Homenaje',
			'IM Fell DW Pica' => 'IM Fell DW Pica',
			'IM Fell DW Pica SC' => 'IM Fell DW Pica SC',
			'IM Fell Double Pica' => 'IM Fell Double Pica',
			'IM Fell Double Pica SC' => 'IM Fell Double Pica SC',
			'IM Fell English' => 'IM Fell English',
			'IM Fell English SC' => 'IM Fell English SC',
			'IM Fell French Canon' => 'IM Fell French Canon',
			'IM Fell French Canon SC' => 'IM Fell French Canon SC',
			'IM Fell Great Primer' => 'IM Fell Great Primer',
			'IM Fell Great Primer SC' => 'IM Fell Great Primer SC',
			'Iceberg' => 'Iceberg',
			'Iceland' => 'Iceland',
			'Imprima' => 'Imprima',
			'Inconsolata' => 'Inconsolata',
			'Inder' => 'Inder',
			'Indie Flower' => 'Indie Flower',
			'Inika' => 'Inika',
			'Irish Grover' => 'Irish Grover',
			'Istok Web' => 'Istok Web',
			'Italiana' => 'Italiana',
			'Italianno' => 'Italianno',
			'Jim Nightshade' => 'Jim Nightshade',
			'Jockey One' => 'Jockey One',
			'Jolly Lodger' => 'Jolly Lodger',
			'Josefin Sans' => 'Josefin Sans',
			'Josefin Slab' => 'Josefin Slab',
			'Judson' => 'Judson',
			'Julee' => 'Julee',
			'Junge' => 'Junge',
			'Jura' => 'Jura',
			'Just Another Hand' => 'Just Another Hand',
			'Just Me Again Down Here' => 'Just Me Again Down Here',
			'Kameron' => 'Kameron',
			'Karla' => 'Karla',
			'Kaushan Script' => 'Kaushan Script',
			'Kelly Slab' => 'Kelly Slab',
			'Kenia' => 'Kenia',
			'Khmer' => 'Khmer',
			'Knewave' => 'Knewave',
			'Kotta One' => 'Kotta One',
			'Koulen' => 'Koulen',
			'Kranky' => 'Kranky',
			'Kreon' => 'Kreon',
			'Kristi' => 'Kristi',
			'Krona One' => 'Krona One',
			'La Belle Aurore' => 'La Belle Aurore',
			'Lancelot' => 'Lancelot',
			'Lato' => 'Lato',
			'League Script' => 'League Script',
			'Leckerli One' => 'Leckerli One',
			'Ledger' => 'Ledger',
			'Lekton' => 'Lekton',
			'Lemon' => 'Lemon',
			'Lilita One' => 'Lilita One',
			'Limelight' => 'Limelight',
			'Linden Hill' => 'Linden Hill',
			'Lobster' => 'Lobster',
			'Lobster Two' => 'Lobster Two',
			'Londrina Outline' => 'Londrina Outline',
			'Londrina Shadow' => 'Londrina Shadow',
			'Londrina Sketch' => 'Londrina Sketch',
			'Londrina Solid' => 'Londrina Solid',
			'Lora' => 'Lora',
			'Love Ya Like A Sister' => 'Love Ya Like A Sister',
			'Loved by the King' => 'Loved by the King',
			'Lovers Quarrel' => 'Lovers Quarrel',
			'Luckiest Guy' => 'Luckiest Guy',
			'Lusitana' => 'Lusitana',
			'Lustria' => 'Lustria',
			'Macondo' => 'Macondo',
			'Macondo Swash Caps' => 'Macondo Swash Caps',
			'Magra' => 'Magra',
			'Maiden Orange' => 'Maiden Orange',
			'Mako' => 'Mako',
			'Marck Script' => 'Marck Script',
			'Marko One' => 'Marko One',
			'Marmelad' => 'Marmelad',
			'Marvel' => 'Marvel',
			'Mate' => 'Mate',
			'Mate SC' => 'Mate SC',
			'Maven Pro' => 'Maven Pro',
			'Meddon' => 'Meddon',
			'MedievalSharp' => 'MedievalSharp',
			'Medula One' => 'Medula One',
			'Megrim' => 'Megrim',
			'Merienda One' => 'Merienda One',
			'Merriweather' => 'Merriweather',
			'Metal' => 'Metal',
			'Metamorphous' => 'Metamorphous',
			'Metrophobic' => 'Metrophobic',
			'Michroma' => 'Michroma',
			'Miltonian' => 'Miltonian',
			'Miltonian Tattoo' => 'Miltonian Tattoo',
			'Miniver' => 'Miniver',
			'Miss Fajardose' => 'Miss Fajardose',
			'Modern Antiqua' => 'Modern Antiqua',
			'Molengo' => 'Molengo',
			'Monofett' => 'Monofett',
			'Monoton' => 'Monoton',
			'Monsieur La Doulaise' => 'Monsieur La Doulaise',
			'Montaga' => 'Montaga',
			'Montez' => 'Montez',
			'Montserrat' => 'Montserrat',
			'Moul' => 'Moul',
			'Moulpali' => 'Moulpali',
			'Mountains of Christmas' => 'Mountains of Christmas',
			'Mr Bedfort' => 'Mr Bedfort',
			'Mr Dafoe' => 'Mr Dafoe',
			'Mr De Haviland' => 'Mr De Haviland',
			'Mrs Saint Delafield' => 'Mrs Saint Delafield',
			'Mrs Sheppards' => 'Mrs Sheppards',
			'Muli' => 'Muli',
			'Mystery Quest' => 'Mystery Quest',
			'Neucha' => 'Neucha',
			'Neuton' => 'Neuton',
			'News Cycle' => 'News Cycle',
			'Niconne' => 'Niconne',
			'Nixie One' => 'Nixie One',
			'Nobile' => 'Nobile',
			'Nokora' => 'Nokora',
			'Norican' => 'Norican',
			'Nosifer' => 'Nosifer',
			'Nothing You Could Do' => 'Nothing You Could Do',
			'Noticia Text' => 'Noticia Text',
			'Nova Cut' => 'Nova Cut',
			'Nova Flat' => 'Nova Flat',
			'Nova Mono' => 'Nova Mono',
			'Nova Oval' => 'Nova Oval',
			'Nova Round' => 'Nova Round',
			'Nova Script' => 'Nova Script',
			'Nova Slim' => 'Nova Slim',
			'Nova Square' => 'Nova Square',
			'Numans' => 'Numans',
			'Nunito' => 'Nunito',
			'Odor Mean Chey' => 'Odor Mean Chey',
			'Old Standard TT' => 'Old Standard TT',
			'Oldenburg' => 'Oldenburg',
			'Oleo Script' => 'Oleo Script',
			'Open Sans' => 'Open Sans',
			'Open Sans Condensed' => 'Open Sans Condensed',
			'Orbitron' => 'Orbitron',
			'Original Surfer' => 'Original Surfer',
			'Oswald' => 'Oswald',
			'Over the Rainbow' => 'Over the Rainbow',
			'Overlock' => 'Overlock',
			'Overlock SC' => 'Overlock SC',
			'Ovo' => 'Ovo',
			'Oxygen' => 'Oxygen',
			'PT Mono' => 'PT Mono',
			'PT Sans' => 'PT Sans',
			'PT Sans Caption' => 'PT Sans Caption',
			'PT Sans Narrow' => 'PT Sans Narrow',
			'PT Serif' => 'PT Serif',
			'PT Serif Caption' => 'PT Serif Caption',
			'Pacifico' => 'Pacifico',
			'Parisienne' => 'Parisienne',
			'Passero One' => 'Passero One',
			'Passion One' => 'Passion One',
			'Patrick Hand' => 'Patrick Hand',
			'Patua One' => 'Patua One',
			'Paytone One' => 'Paytone One',
			'Permanent Marker' => 'Permanent Marker',
			'Petrona' => 'Petrona',
			'Philosopher' => 'Philosopher',
			'Piedra' => 'Piedra',
			'Pinyon Script' => 'Pinyon Script',
			'Plaster' => 'Plaster',
			'Play' => 'Play',
			'Playball' => 'Playball',
			'Playfair Display' => 'Playfair Display',
			'Podkova' => 'Podkova',
			'Poiret One' => 'Poiret One',
			'Poller One' => 'Poller One',
			'Poly' => 'Poly',
			'Pompiere' => 'Pompiere',
			'Pontano Sans' => 'Pontano Sans',
			'Port Lligat Sans' => 'Port Lligat Sans',
			'Port Lligat Slab' => 'Port Lligat Slab',
			'Prata' => 'Prata',
			'Preahvihear' => 'Preahvihear',
			'Press Start 2P' => 'Press Start 2P',
			'Princess Sofia' => 'Princess Sofia',
			'Prociono' => 'Prociono',
			'Prosto One' => 'Prosto One',
			'Puritan' => 'Puritan',
			'Quantico' => 'Quantico',
			'Quattrocento' => 'Quattrocento',
			'Quattrocento Sans' => 'Quattrocento Sans',
			'Questrial' => 'Questrial',
			'Quicksand' => 'Quicksand',
			'Qwigley' => 'Qwigley',
			'Radley' => 'Radley',
			'Raleway' => 'Raleway',
			'Rammetto One' => 'Rammetto One',
			'Rancho' => 'Rancho',
			'Rationale' => 'Rationale',
			'Redressed' => 'Redressed',
			'Reenie Beanie' => 'Reenie Beanie',
			'Revalia' => 'Revalia',
			'Ribeye' => 'Ribeye',
			'Ribeye Marrow' => 'Ribeye Marrow',
			'Righteous' => 'Righteous',
			'Roboto' => 'Roboto',
			'Roboto Condensed' => 'Roboto Condensed',
			'Rochester' => 'Rochester',
			'Rock Salt' => 'Rock Salt',
			'Rokkitt' => 'Rokkitt',
			'Ropa Sans' => 'Ropa Sans',
			'Rosario' => 'Rosario',
			'Rosarivo' => 'Rosarivo',
			'Rouge Script' => 'Rouge Script',
			'Ruda' => 'Ruda',
			'Ruge Boogie' => 'Ruge Boogie',
			'Ruluko' => 'Ruluko',
			'Ruslan Display' => 'Ruslan Display',
			'Russo One' => 'Russo One',
			'Ruthie' => 'Ruthie',
			'Sail' => 'Sail',
			'Salsa' => 'Salsa',
			'Sanchez' => 'Sanchez',
			'Sancreek' => 'Sancreek',
			'Sansita One' => 'Sansita One',
			'Sarina' => 'Sarina',
			'Satisfy' => 'Satisfy',
			'Schoolbell' => 'Schoolbell',
			'Seaweed Script' => 'Seaweed Script',
			'Sevillana' => 'Sevillana',
			'Shadows Into Light' => 'Shadows Into Light',
			'Shadows Into Light Two' => 'Shadows Into Light Two',
			'Shanti' => 'Shanti',
			'Share' => 'Share',
			'Shojumaru' => 'Shojumaru',
			'Short Stack' => 'Short Stack',
			'Siemreap' => 'Siemreap',
			'Sigmar One' => 'Sigmar One',
			'Signika' => 'Signika',
			'Signika Negative' => 'Signika Negative',
			'Simonetta' => 'Simonetta',
			'Sirin Stencil' => 'Sirin Stencil',
			'Six Caps' => 'Six Caps',
			'Slackey' => 'Slackey',
			'Smokum' => 'Smokum',
			'Smythe' => 'Smythe',
			'Sniglet' => 'Sniglet',
			'Snippet' => 'Snippet',
			'Sofia' => 'Sofia',
			'Sonsie One' => 'Sonsie One',
			'Sorts Mill Goudy' => 'Sorts Mill Goudy',
			'Special Elite' => 'Special Elite',
			'Spicy Rice' => 'Spicy Rice',
			'Spinnaker' => 'Spinnaker',
			'Spirax' => 'Spirax',
			'Squada One' => 'Squada One',
			'Stardos Stencil' => 'Stardos Stencil',
			'Stint Ultra Condensed' => 'Stint Ultra Condensed',
			'Stint Ultra Expanded' => 'Stint Ultra Expanded',
			'Stoke' => 'Stoke',
			'Sue Ellen Francisco' => 'Sue Ellen Francisco',
			'Sunshiney' => 'Sunshiney',
			'Supermercado One' => 'Supermercado One',
			'Suwannaphum' => 'Suwannaphum',
			'Swanky and Moo Moo' => 'Swanky and Moo Moo',
			'Syncopate' => 'Syncopate',
			'Tangerine' => 'Tangerine',
			'Taprom' => 'Taprom',
			'Telex' => 'Telex',
			'Tenor Sans' => 'Tenor Sans',
			'The Girl Next Door' => 'The Girl Next Door',
			'Tienne' => 'Tienne',
			'Tinos' => 'Tinos',
			'Titan One' => 'Titan One',
			'Trade Winds' => 'Trade Winds',
			'Trocchi' => 'Trocchi',
			'Trochut' => 'Trochut',
			'Trykker' => 'Trykker',
			'Tulpen One' => 'Tulpen One',
			'Ubuntu' => 'Ubuntu',
			'Ubuntu Condensed' => 'Ubuntu Condensed',
			'Ubuntu Mono' => 'Ubuntu Mono',
			'Ultra' => 'Ultra',
			'Uncial Antiqua' => 'Uncial Antiqua',
			'UnifrakturCook' => 'UnifrakturCook',
			'UnifrakturMaguntia' => 'UnifrakturMaguntia',
			'Unkempt' => 'Unkempt',
			'Unlock' => 'Unlock',
			'Unna' => 'Unna',
			'VT323' => 'VT323',
			'Varela' => 'Varela',
			'Varela Round' => 'Varela Round',
			'Vast Shadow' => 'Vast Shadow',
			'Vibur' => 'Vibur',
			'Vidaloka' => 'Vidaloka',
			'Viga' => 'Viga',
			'Voces' => 'Voces',
			'Volkhov' => 'Volkhov',
			'Vollkorn' => 'Vollkorn',
			'Voltaire' => 'Voltaire',
			'Waiting for the Sunrise' => 'Waiting for the Sunrise',
			'Wallpoet' => 'Wallpoet',
			'Walter Turncoat' => 'Walter Turncoat',
			'Wellfleet' => 'Wellfleet',
			'Wire One' => 'Wire One',
			'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
			'Yellowtail' => 'Yellowtail',
			'Yeseva One' => 'Yeseva One',
			'Yesteryear' => 'Yesteryear',
			'Zeyada' => 'Zeyada',
		),		
	),
	
	/*Theme Options*/
	'options' => array(
	
		/*General*/
		array(	
			'name' => __('General', 'mtheme'),
			'title' => 'General Options',
			'type' => 'section'
		),
			array(	
				'name' => __('Site Favicon', 'mtheme'),
				'description' => __('Choose an image to replace the default site favicon', 'mtheme'),
				'id' => 'favicon',
				'type' => 'uploader',
			),
			array(	
				'name' => __('Site Logo', 'mtheme'),
				'description' => __('Choose an image to replace the default theme logo', 'mtheme'),
				'id' => 'site_logo',
				'type' => 'uploader',
			),
			array(	
				'name' => __('Loading Image', 'mtheme'),
				'description' => __('Choose an loading image to replace the default loading image', 'mtheme'),
				'id' => 'loading_image',
				'type' => 'uploader',
			),
			array(	
				'name' => __('Snow Fall Effect Image', 'mtheme'),
				'description' => __('Browse Snow Fall Effect Image', 'mtheme'),
				'id' => 'snow_img',
				'type' => 'uploader',
			),			
			array(	
				'name' => __('Astronomy Effect dot color', 'mtheme'),
				'default' => '#919191',
				'id' => 'dotColor',
				'type' => 'color',
			),
			array(	
				'name' => __('Astronomy Effect line color', 'mtheme'),
				'default' => '#919191',
				'id' => 'lineColor',
				'type' => 'color',
			),
			array(	
				'name' => __('Astronomy Effect line width', 'mtheme'),
				'description' => __('Enter Astronomy Effect line width', 'mtheme'),
				'id' => 'lineWidth',
				'type' => 'text',
			),
			array(	
				'name' => __('Astronomy Effect particle radius', 'mtheme'),
				'description' => __('Enter Astronomy Effect particle radius in number ex: 3', 'mtheme'),
				'id' => 'particleRadius',
				'type' => 'text',
			),
		/*Styling*/
		array(	
			'name' => __('General Styling', 'mtheme'),
			'title' => 'Styling Options',
			'type' => 'section'
		),		
			array(	
				'name' => __('Background Color', 'mtheme'),
				'default' => '#212739',
				'id' => 'background_color',
				'type' => 'color',
			),
			array(	
				'name' => __('Primary Color', 'mtheme'),
				'default' => '#ffffff',
				'id' => 'primary_color',
				'type' => 'color',
			),

			array(	
				'name' => __('Secondary Color', 'mtheme'),
				'default' => '#1bd982',
				'id' => 'secondary_color',
				'type' => 'color',
			),
			array(	
				'name' => __('Tertiary Color', 'mtheme'),
				'default' => '#1bd982',
				'id' => 'tertiary_color',
				'type' => 'color',
			),					
			array(	
				'name' => __('Heading Font' ,'mtheme'),					
				'id' => 'heading_font',
				'default' => 'Raleway',
				'type' => 'select_font',
			),
			array(	
				'name' => __('Heading Color', 'mtheme'),
				'default' => '#363738',
				'id' => 'heading_color',
				'type' => 'color',
				'description' => __('paragraph, td tag color', 'mtheme'),
			),
			
			array(	
				'name' => __('Content Font', 'mtheme'),
				'id' => 'content_font',
				'default' => 'Raleway',
				'type' => 'select_font',
			),
			array(	
				'name' => __('Content Color', 'mtheme'),
				'default' => '#5f6061',
				'id' => 'content_color',
				'type' => 'color',
				'description' => __('paragraph, span, td tag color', 'mtheme'),
			),
			array(	
				'name' => __('Custom CSS', 'mtheme'),
				'description' => __('Enter custom CSS code to overwrite the default theme styles', 'mtheme'),
				'id' => 'css',
				'type' => 'textarea',
			),	
		/*Styling*/
		array(	
			'name' => __('Header Styling', 'mtheme'),
			'title' => 'Styling Options',
			'type' => 'section'
		),
			array(	
				'name' => __('Header/Footer Background Color', 'mtheme'),
				'default' => '#0f1726',
				'id' => 'header_color',
				'type' => 'color',
			),
			array(	
				'name' => __('Menu Item font color', 'mtheme'),
				'default' => '#FFF',
				'id' => 'menu_font_color',
				'type' => 'color',
			),
			array(	
				'name' => __('Menu Item font size', 'mtheme'),
				'default' => '0.91em',
				'description' => __('Enter Menu Item font size( Ex: 1em)', 'mtheme'),
				'id' => 'menu_font_size',
				'type' => 'text',
			),
			array(	
				'name' => __('Menu Item padding top', 'mtheme'),
				'default' => '30px',
				'id' => 'menu_padding_top',
				'description' => __('Enter Menu Item padding top( Ex: 30px)', 'mtheme'),
				'type' => 'text',
			),
			array(	
				'name' => __('Menu Item padding bottom', 'mtheme'),
				'default' => '30px',
				'description' => __('Enter Menu Item padding bottom( Ex: 30px)', 'mtheme'),
				'id' => 'menu_padding_bottom',
				'type' => 'text',
			),
		/*Post Styling*/
		array(	
			'name' => __('Post Styling', 'mtheme'),
			'title' => 'Post Styling Options',
			'type' => 'section'
		),
			array(	
				'name' => __('Heading Color', 'mtheme'),
				'default' => '#363738',
				'id' => 'post_heading_color',
				'type' => 'color',
				'description' => __('Heading color', 'mtheme'),
			),			
			array(	
				'name' => __('Content Color', 'mtheme'),
				'default' => '#5f6061',
				'id' => 'post_content_color',
				'type' => 'color',
				'description' => __('Content color', 'mtheme'),
			),
			
			array(	
				'name' => __('Post Layout', 'mtheme'),
				'id' => 'posts_layout',
				'default' => 'right',
				'type' => 'select_image',
				'options' => array(
					'fullwidth' => MTHEME_URI.'assets/images/layouts/layout-full.png',
					'left' => MTHEME_URI.'assets/images/layouts/layout-left.png',
					'right' => MTHEME_URI.'assets/images/layouts/layout-right.png',				
				),				
			),
		/*Contact Form*/
		array(
			'name' => __('Registration Form', 'mtheme'),
			'title' => 'Registration Option',
			'type' => 'section',
		),
			
			array(	
				'name' => __('Background Image', 'mtheme'),
				'description' => __('Choose an background image or color', 'mtheme'),
				'id' => 'contact_form_bg_img',
				'type' => 'uploader'
			),
			array(	
				'name' => __('Background color', 'mtheme'),
				'description' => __('Choose an background color or image', 'mtheme'),
				'id' => 'contact_form_bg_color',
				'type' => 'color',
				'default' => '#212739',
			),
			array(	
				'name' => __('Primary color', 'mtheme'),
				'description' => __('Choose an primary color', 'mtheme'),
				'id' => 'contact_form_p_color',
				'type' => 'color',
				'default' => '#FFF',
			),
			array(	
				'name' => __('Secondary color', 'mtheme'),
				'description' => __('Choose an secondary color', 'mtheme'),
				'id' => 'contact_form_s_color',
				'type' => 'color',
				'default' => '#1bce7c',
			),
			
			array(
				'id' => 'MthemeForm',
				'slug' => 'contact',
				'type' => 'module',
			),
			
			
			array(	
				'name' => __('Terms title', 'mtheme'),
				'description' => __('Enter Terms title', 'mtheme'),
				'id' => 'terms_title',
				'type' => 'text',
			),
			array(	
				'name' => __('Terms content', 'mtheme'),
				'description' => __('Enter Terms content', 'mtheme'),
				'id' => 'terms_content',
				'type' => 'textarea',
			),
		
		/*Notify Me*/
		array(
			'name' => __('Notification Setting', 'mtheme'),
			'title' => 'Notification Setting',
			'type' => 'section',
		),	
			array(	
				'name' => __('Background Image', 'mtheme'),
				'description' => __('Choose an background image or color', 'mtheme'),
				'id' => 'notify_bg_img',
				'type' => 'uploader'
			),
			array(	
				'name' => __('Background color', 'mtheme'),
				'description' => __('Choose an background color or image', 'mtheme'),
				'id' => 'notify_bg_color',
				'type' => 'color',
				'default' => '#212739',
			),
			array(	
				'name' => __('Primary color', 'mtheme'),
				'description' => __('Choose an primary color', 'mtheme'),
				'id' => 'notify_p_color',
				'type' => 'color',
				'default' => '#FFF',
			),
			array(	
				'name' => __('Secondary color', 'mtheme'),
				'description' => __('Choose an secondary color', 'mtheme'),
				'id' => 'notify_s_color',
				'type' => 'color',
				'default' => '#1bce7c',
			),
			
			array(	
				'name' => __('Notification title', 'mtheme'),
				'description' => __('Enter Notification title', 'mtheme'),
				'id' => 'notify_title',
				'type' => 'text',
			),
			array(	
				'name' => __('Notification content', 'mtheme'),
				'description' => __('Enter Notification content', 'mtheme'),
				'id' => 'notify_content',
				'type' => 'textarea',
			),
		/*Contact*/
		array(
			'name' => __('Contact Section', 'mtheme'),
			'title' => 'Contact Options',
			'type' => 'section',
		),
			array(
				'name' => __('Show Contact In Footer', 'mtheme'),
				'description' => __('Show Contact In Footer', 'mtheme'),
				'id' => 'contact_active',
				'type' => 'checkbox',
				'default' => 'true',
			),
			array(	
				'name' => __('Background Image', 'mtheme'),
				'description' => __('Choose an background image or color', 'mtheme'),
				'id' => 'contact_bg_img',
				'type' => 'uploader'
			),
			array(	
				'name' => __('Background color', 'mtheme'),
				'description' => __('Choose an background color or image', 'mtheme'),
				'id' => 'contact_bg_color',
				'type' => 'color',
				'default' => '#FFF',
			),
			array(	
				'name' => __('Primary color', 'mtheme'),
				'description' => __('Choose an primary color', 'mtheme'),
				'id' => 'contact_p_color',
				'type' => 'color',
				'default' => '#212739',
			),
			array(	
				'name' => __('Secondary color', 'mtheme'),
				'description' => __('Choose an secondary color', 'mtheme'),
				'id' => 'contact_s_color',
				'type' => 'color',
				'default' => '#1bce7c',
			),
			
			array(	
				'name' => __('Conatct title', 'mtheme'),
				'description' => __('Enter Conatct title', 'mtheme'),
				'id' => 'contact_title',
				'type' => 'text',
			),
			array(	
				'name' => __('Conatct description', 'mtheme'),
				'description' => __('Enter Conatct description', 'mtheme'),
				'id' => 'contact_desc',
				'type' => 'textarea',
			),
			array(	
				'name' => __('Address', 'mtheme'),
				'description' => __('Enter Conatct address', 'mtheme'),
				'id' => 'contact_add',
				'type' => 'textarea',
			),
			array(	
				'name' => __('Phone', 'mtheme'),
				'description' => __('Enter Conatct phone', 'mtheme'),
				'id' => 'contact_phone',
				'type' => 'textarea',
			),
			array(	
				'name' => __('Email', 'mtheme'),
				'description' => __('Enter Conatct Email', 'mtheme'),
				'id' => 'contact_email',
				'type' => 'textarea',
			),
			array(	
				'name' => __('Google Map', 'mtheme'),
				'description' => __('Enter Google Map', 'mtheme'),
				'id' => 'contact_gmap',
				'type' => 'text',
			),
			array(	
				'name' => __('Dribble', 'mtheme'),
				'description' => __('Enter Dribble', 'mtheme'),
				'id' => 'contact_dribble',
				'type' => 'text',
			),
			array(	
				'name' => __('Twitter', 'mtheme'),
				'description' => __('Enter Twitter', 'mtheme'),
				'id' => 'contact_twitter',
				'type' => 'text',
			),
			array(	
				'name' => __('Facebook', 'mtheme'),
				'description' => __('Enter Facebook', 'mtheme'),
				'id' => 'contact_fb',
				'type' => 'text',
			),
			array(	
				'name' => __('Skype', 'mtheme'),
				'description' => __('Enter Skype', 'mtheme'),
				'id' => 'contact_skype',
				'type' => 'text',
			),	
		/*Footer*/
		array(
			'name' => __('Footer', 'mtheme'),
			'title' => 'Footer Options',
			'type' => 'section',
		),
			
			array(	
				'name' => __('Show footer', 'mtheme'),
				'description' => __('Show footer', 'mtheme'),
				'id' => 'footer_active',
				'type' => 'checkbox',
				'default' => 'true',				
			),
			array(	
				'name' => __('Disclaimer title', 'mtheme'),
				'description' => __('Enter Disclaimer title', 'mtheme'),
				'id' => 'declaration_title',
				'type' => 'text',				
			),
			array(	
				'name' => __('Disclaimer content', 'mtheme'),
				'description' => __('Enter Disclaimer content', 'mtheme'),
				'id' => 'declaration_content',
				'type' => 'textarea',
			),
			array(	
				'name' => __('Enter Made in title', 'mtheme'),
				'description' => __('Enter Made in title', 'mtheme'),
				'id' => 'made_in_title',
				'type' => 'text',
			),
			array(	
				'name' => __('Enter Made in link', 'mtheme'),
				'description' => __('Enter Made in link', 'mtheme'),
				'id' => 'made_in_link',
				'type' => 'text',
			),
	),
	
);