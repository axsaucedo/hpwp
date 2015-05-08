<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>		
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="author" content="<?php bloginfo('name'); ?>">
	<meta name="description" content="<?php bloginfo('name'); ?>">
	<meta name="keywords" content="<?php bloginfo('name'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
			
	<!-- PAGE TITLE -->
	<meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
		
	<?php wp_head(); ?>
</head>
<?php if ( is_page_template('template-event-landing.php') || is_singular('event') ) { ?>
<body id="top" <?php body_class(); ?> data-spy="scroll" data-target=".header" data-offset="80">
<?php }else{ ?>
<body id="top" <?php body_class(); ?>>
<?php } ?>
<!--PRELOADER-->
<div class="preloader">
	<div class="status"></div>
</div>
<!--/PRELOADER-->

<?php if ( !is_page_template('template-event-landing.php') && !is_singular('event')) { 
?>
<!--HEADER-->
<div class="header header-hide">
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" 
					 data-target="#example-navbar-collapse">
					 <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				</button>		
				<a class="navbar-brand" href="<?php echo SITE_URL; ?>"><img src="<?php echo MthemeCore::getOption("site_logo",CHILD_URI."site/img/logo.png"); ?>" alt="logo"/></a>
		   </div>
		   <?php $slug = 'main_menu'; ?>
		   <div class="collapse navbar-collapse" id="example-navbar-collapse">
			  <?php MthemeInterface::renderSiteMenu($slug); ?>
		   </div>
		</nav>
	</div>
</div>
<!--/HEADER-->
<?php
} ?>
	