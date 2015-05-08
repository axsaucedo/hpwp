<?php
/*
Template Name: Event Landing Page template
*/

the_post();

$post_pre='event_';
$menu=$heading='';
$outContent=$menuContent='';
$menuOrder=0;
$img_gal_active=$video_active='hide';
$contentArray = array();

$event_id= intval(MthemeCore::getPostMeta(get_the_ID(), 'page_event'));
if(!empty($event_id))
{		
	$event_slider= intval(MthemeCore::getPostMeta($event_id, 'event_slider'));
	if(MthemeCore::getPostMeta($event_id, $post_pre.'about_display')=='true')
	{
		if(MthemeCore::getPostMeta($event_id, $post_pre.'about_menu_active')=='true')
		{
			$heading=MthemeCore::getPostMeta($event_id,$post_pre.'about_head','about');
			$menuContent='<li><a data-scroll href="#about">'.$heading.'</a></li>';
		}
		
		$outContent='<div id="about">';
		$outContent.=do_shortcode('[event_intro event_id="'.$event_id.'"]');
		$outContent.='</div>';
		$menuOrder=MthemeCore::getPostMeta($event_id,$post_pre.'about_order','1');
		$contentArray[0]= array($menuOrder,$menuContent,$outContent);
	}
	
	if(MthemeCore::getPostMeta($event_id, $post_pre.'features_display')=='true')
	{
		$menuContent='';
		if(MthemeCore::getPostMeta($event_id, $post_pre.'features_menu_active')=='true')
		{
			$heading=MthemeCore::getPostMeta($event_id,$post_pre.'features_head','features');
			$menuContent='<li><a data-scroll href="#features">'.$heading.'</a></li>';
		}
		if(MthemeCore::getPostMeta($event_id, $post_pre.'img_gal_active')=='true')
		{
			$img_gal_active='show';
		}
		if(MthemeCore::getPostMeta($event_id, $post_pre.'video_active')=='true')
		{
			$video_active='show';
		}
		
		
		$category=MthemeCore::getPostMeta($event_id, $post_pre.'gal_cat',"");
		if(!empty($category) && $category!=0)
		{
			$category=MthemeCore::getPostMeta($event_id, $post_pre.'gal_cat');
		}
		
		$outContent='<div id="features">';
		$outContent.=do_shortcode('[event_features event_id="'.$event_id.'" gallery="'.$img_gal_active.'" video="'.$video_active.'" category="'.$category.'"]');
		$outContent.='</div>';
		$menuOrder=MthemeCore::getPostMeta($event_id,$post_pre.'features_order','2');
		$contentArray[1]= array($menuOrder,$menuContent,$outContent);
		
	}
	if(MthemeCore::getPostMeta($event_id, $post_pre.'schedule_display')=='true')
	{
		$menuContent='';
		if(MthemeCore::getPostMeta($event_id, $post_pre.'schedule_menu_active')=='true')
		{
			$heading=MthemeCore::getPostMeta($event_id,$post_pre.'schedule_head','schedules');
			$menuContent='<li><a data-scroll href="#schedule">'.$heading.'</a></li>';
		}
		
		$category=MthemeCore::getPostMeta($event_id, $post_pre.'schedule_cat',"");
		if(!empty($category))
		{
			$category=MthemeCore::getPostMeta($event_id, $post_pre.'schedule_cat');
		}
		
		$outContent='<div id="schedule">';
		$outContent.=do_shortcode('[event_schedules category="'.$category.'"]');
		$outContent.='</div>';
		$menuOrder=MthemeCore::getPostMeta($event_id,$post_pre.'schedule_order','3');
		$contentArray[2]= array($menuOrder,$menuContent,$outContent);
	}
	if(MthemeCore::getPostMeta($event_id, $post_pre.'download_display')=='true')
	{
		$menuContent='';
		if(MthemeCore::getPostMeta($event_id, $post_pre.'download_menu_active')=='true')
		{
			$heading=MthemeCore::getPostMeta($event_id,$post_pre.'download_head','downloads');
			$menuContent='<li><a data-scroll href="#download">'.$heading.'</a></li>';
		}
		
		$outContent='<div id="download">';
		$outContent.=do_shortcode('[event_brochure event_id="'.$event_id.'"]');
		$outContent.='</div>';
		$menuOrder=MthemeCore::getPostMeta($event_id,$post_pre.'download_order','4');
		$contentArray[3]= array($menuOrder,$menuContent,$outContent);
	}
	if(MthemeCore::getPostMeta($event_id, $post_pre.'speaker_display')=='true')
	{
		$menuContent='';
		if(MthemeCore::getPostMeta($event_id, $post_pre.'speaker_menu_active')=='true')
		{
			$heading=MthemeCore::getPostMeta($event_id,$post_pre.'speaker_head','speakers');
			$menuContent='<li><a data-scroll href="#speaker">'.$heading.'</a></li>';
		}
		
		$category=MthemeCore::getPostMeta($event_id, $post_pre.'speaker_cat',"");
		if(!empty($category))
		{
			$category=MthemeCore::getPostMeta($event_id, $post_pre.'speaker_cat');
		}		
		
		$outContent='<div id="speaker">';
		$outContent.=do_shortcode('[event_speakers category="'.$category.'"]');
		$outContent.='</div>';
		$menuOrder=MthemeCore::getPostMeta($event_id,$post_pre.'speaker_order','5');		
		$contentArray[4]= array($menuOrder,$menuContent,$outContent);
	}
	if(MthemeCore::getPostMeta($event_id, $post_pre.'package_display')=='true')
	{
		$menuContent='';
		if(MthemeCore::getPostMeta($event_id, $post_pre.'package_menu_active')=='true')
		{
			$heading=MthemeCore::getPostMeta($event_id,$post_pre.'package_head','pricing');
			$menuContent='<li><a data-scroll href="#package">'.$heading.'</a></li>';
		}
		
		$category=MthemeCore::getPostMeta($event_id, $post_pre.'package_cat',"");
		if(!empty($category))
		{
			$category=MthemeCore::getPostMeta($event_id, $post_pre.'package_cat');
		}
		if(!empty($event_slider)){
			$register_link=MthemeCore::getPostMeta($event_slider,"event_slider_event_link","#register_me");
		}else
		{
			$register_link=SITE_URL;
		}
		/*$outContent='<div id="package">';
		$outContent.=do_shortcode('[event_packages register_link="'.$register_link.'" category="'.$category.'"]');
		$outContent.='</div>';
		$menuOrder=MthemeCore::getPostMeta($event_id,$post_pre.'package_order','6');
		$contentArray[5]= array($menuOrder,$menuContent,$outContent);*/
	}
	/*
	if(MthemeCore::getPostMeta($event_id, $post_pre.'contact_form_display')=='true')
	{
		$menuContent='';
		if(MthemeCore::getPostMeta($event_id, $post_pre.'contact_form_menu_active')=='true')
		{
			$heading=MthemeCore::getPostMeta($event_id,$post_pre.'contact_form_head','register');
			$menuContent='<li><a data-scroll href="#contact_form">'.$heading.'</a></li>';
		}
		
		$outContent='<div id="contact_form">';
		$outContent.=do_shortcode('[event_registration_form]');
		$outContent.='</div>';
		$menuOrder=MthemeCore::getPostMeta($event_id,$post_pre.'contact_form_order','7');
		$contentArray[6]= array($menuOrder,$menuContent,$outContent);
	}*/
	if(MthemeCore::getPostMeta($event_id, $post_pre.'sponsor_display')=='true')
	{
		$menuContent='';
		if(MthemeCore::getPostMeta($event_id, $post_pre.'sponsor_menu_active')=='true')
		{
			$heading=MthemeCore::getPostMeta($event_id,$post_pre.'sponsor_head','sponsors');
			$menuContent='<li><a data-scroll href="#sponsor">'.$heading.'</a></li>';
		}
		$category=MthemeCore::getPostMeta($event_id, $post_pre.'sponsor_cat',"");
		if(!empty($category))
		{
			$category=MthemeCore::getPostMeta($event_id, $post_pre.'sponsor_cat');
		}
		
		$outContent='<div id="sponsor">';
		$outContent.=do_shortcode('[event_sponsors category="'.$category.'"]');
		$outContent.='</div>';
		$menuOrder=MthemeCore::getPostMeta($event_id,$post_pre.'sponsor_order','8');
		$contentArray[7]= array($menuOrder,$menuContent,$outContent);
	}
	/*if(MthemeCore::getPostMeta($event_id, $post_pre.'notify_display')=='true')
	{
		$menuContent='';
		if(MthemeCore::getPostMeta($event_id, $post_pre.'notify_menu_active')=='true')
		{
			$heading=MthemeCore::getPostMeta($event_id,$post_pre.'notify_head','subscribe');
			$menuContent='<li><a data-scroll href="#notify">'.$heading.'</a></li>';
		}
		
		$outContent='<div id="notify">';
		$outContent.=do_shortcode('[event_notify_form]');
		$outContent.='</div>';
		$menuOrder=MthemeCore::getPostMeta($event_id,$post_pre.'notify_order','9');
		$contentArray[8]= array($menuOrder,$menuContent,$outContent);
	}*/
	if(MthemeCore::getPostMeta($event_id, $post_pre.'contact_display')=='true')
	{
		$menuContent='';
		if(MthemeCore::getPostMeta($event_id, $post_pre.'contact_menu_active')=='true')
		{
			$heading=MthemeCore::getPostMeta($event_id,$post_pre.'contact_head','contact');
			$menuContent='<li><a data-scroll href="#contact">'.$heading.'</a></li>';
		}
		
		$outContent='<div id="contact" style="background-color: #212739">';
		//$outContent.=do_shortcode('[footer_contact]');
		$outContent.='<h1 style="color: white; width: 100%; text-align: center;">Apply Now</h1><iframe id="typeform-full" width="100%" height="500px" frameborder="0" src="https://hackpartners.typeform.com/to/Tu7SFf"></iframe>';
		$outContent.='</div>';
		$menuOrder=MthemeCore::getPostMeta($event_id,$post_pre.'contact_order','10');
		$contentArray[9]= array($menuOrder,$menuContent,$outContent);
	}
	if(MthemeCore::getPostMeta($event_id, $post_pre.'blog_display')=='true')
	{
		$menuContent=$outContent='';
		$blog_link=MthemeCore::getPostMeta($event_id,$post_pre.'blog_link',SITE_URL);
		$heading=MthemeCore::getPostMeta($event_id,$post_pre.'blog_head','blog');
		$menuContent='<li><a href="'.$blog_link.'">'.$heading.'</a></li>';				
		$menuOrder=MthemeCore::getPostMeta($event_id,$post_pre.'blog_order','11');
		
		$contentArray[10]= array($menuOrder,$menuContent,$outContent);
	}
}

$menuContainer1=$menuContainer2=$menuContainer3=$menuContainer4=$menuContainer5=$menuContainer6=$menuContainer7=$menuContainer8=$menuContainer9=$menuContainer10=$menuContainer11='';
$outContainer1=$outContainer2=$outContainer3=$outContainer4=$outContainer5=$outContainer6=$outContainer7=$outContainer8=$outContainer9=$outContainer10=$outContainer11='';

foreach($contentArray as $item) {
	
	switch($item[0]) {
		
		case '1':
			$menuContainer1.=$item[1];
			$outContainer1.=$item[2];
		break;
		case '2':
			$menuContainer2.=$item[1];
			$outContainer2.=$item[2];
		break;
		case '3':
			$menuContainer3.=$item[1];
			$outContainer3.=$item[2];
		break;
		case '4':
			$menuContainer4.=$item[1];
			$outContainer4.=$item[2];
		break;					
		case '5':
			$menuContainer5.=$item[1];
			$outContainer5.=$item[2];
		break;
		case '6':
			$menuContainer6.=$item[1];
			$outContainer6.=$item[2];
		break;					
		case '7':
			$menuContainer7.=$item[1];
			$outContainer7.=$item[2];
		break;
		case '8':
			$menuContainer8.=$item[1];
			$outContainer8.=$item[2];
		break;
		case '9':
			$menuContainer9.=$item[1];
			$outContainer9.=$item[2];
		break;
		case '10':
			$menuContainer10.=$item[1];
			$outContainer10.=$item[2];
		break;
		case '11':
			$menuContainer11.=$item[1];
			$outContainer11.=$item[2];
		break;
	}
}
$menu=$menuContainer1.$menuContainer2.$menuContainer3.$menuContainer4.$menuContainer5.$menuContainer6.$menuContainer7.$menuContainer8.$menuContainer9.$menuContainer10.$menuContainer11;

$out=$outContainer1.$outContainer2.$outContainer3.$outContainer4.$outContainer5.$outContainer6.$outContainer7.$outContainer8.$outContainer9.$outContainer10.$outContainer11;

if(!empty($event_slider) && $menu!=''){
	$menu.='<li class="hidden"><a href="#home_slider">Home</a></li>';	
}
?>
<?php
get_header();
$logo_position=MthemeCore::getPostMeta($event_id, $post_pre."logo_position",'header');
if(!empty($event_id))
{
	if($menu!=''){
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
					<?php if($logo_position=='header'){ ?>
					<a class="navbar-brand" href="<?php echo SITE_URL; ?>"><img src="<?php echo MthemeCore::getOption("site_logo",CHILD_URI."site/img/logo.png"); ?>" alt="logo"/></a>
					<?php } ?>
			   </div>
			   <div class="collapse navbar-collapse" id="example-navbar-collapse">
				  <ul class="nav navbar-nav">
					<?php echo mtheme_html($menu); ?>
				  </ul>
			   </div>
			</nav>
		</div>
	</div>
	<!--/HEADER-->

<?php }elseif($logo_position=='header'){ ?>
	<!--HEADER-->
	<div class="header header-hide">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">				
					<a class="navbar-brand" href="<?php echo SITE_URL; ?>"><img src="<?php echo MthemeCore::getOption("site_logo",CHILD_URI."site/img/logo.png"); ?>" alt="logo"/></a>				
			   </div>
			</nav>
		</div>
	</div>
<!--/HEADER-->
<?php }
	if(!empty($event_slider))
	{	
		echo '<div id="home_slider">';
		echo do_shortcode('[hero_background logo_position="'.$logo_position.'" slider_id="'.$event_slider.'"]');
		echo '</div>';
	}
	echo mtheme_html($out);
}
get_footer();