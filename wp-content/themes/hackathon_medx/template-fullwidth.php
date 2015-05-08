<?php
/**
Template Name: Full width template
*/

get_header();
the_post();
$page_title= MthemeCore::getPostMeta(get_the_ID(), 'page_title','true');
?>


<div class="main-content">

	<div class="container">
		<?php if(!empty($page_title) && $page_title=='true'){ ?>
		<section class="page-heading">
			<h1><?php MthemeInterface::renderPageTitle(); ?></h1>
		</section>
		<?php }?>	
		
	</div><!-- #container -->
	
</div><!-- #main-content -->

<?php the_content(); ?>
<?php
get_footer();