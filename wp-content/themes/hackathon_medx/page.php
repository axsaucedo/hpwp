<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Mtheme
 * @since Mtheme 1.0
 */
get_header();
the_post();

$event_slider= intval(MthemeCore::getPostMeta(get_the_ID(), 'page_event_slider'));
if(!empty($event_slider))
{
	echo '<div id="home_slider">';
	echo do_shortcode('[home_slider slider_id="'.$event_slider.'"]');
	echo '</div>';
}

$page_title= MthemeCore::getPostMeta(get_the_ID(), 'page_title','true');
?>

 
<div class="main-content">

	<div class="container">
		<div class="row">
			<?php if(!empty($page_title) && $page_title=='true'){ ?>
			<section class="page-heading">
				<h1 class="h1-72"><?php the_title(); ?></h1>
			</section>
			<?php }?>			
			
			
			<?php the_content(); ?>
			</div><!-- #row -->
	</div><!-- #container -->
	
</div><!-- #main-content -->

<?php get_footer(); ?>