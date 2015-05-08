<?php
/*Columns*/
add_shortcode('section', 'mtheme_section');
function mtheme_section($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'padding'  => '',		
    ), $atts));
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<section class="section-padding-'.esc_attr($padding.$align).'"><div class="container">'.do_shortcode($content).'</div></section>';
}

add_shortcode('container', 'mtheme_container');
function mtheme_container($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'padding'  => '',
    ), $atts));
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="container section-padding-'.esc_attr($padding.$align).'"><div class="row">'.do_shortcode($content).'</div></div>';
}


add_shortcode('row', 'mtheme_row');
function mtheme_row($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'padding'  => 'none',
    ), $atts));
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="row section-padding-'.esc_attr($padding.$align).'">'.do_shortcode($content).'</div>';
}

add_shortcode('one_col', 'mtheme_one_col');
function mtheme_one_col($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'margin'  => 'bottom',
		'column'  => '',
    ), $atts));
	
	if(!empty($column))
	{
		$column='column-'.$column;
	}
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="col-lg-1 col-md-1 col-sm-6 col-xs-6 section-margin-'.esc_attr($margin.$align.$column).'">'.do_shortcode($content).'</div>';
}

add_shortcode('two_col', 'mtheme_two_col');
function mtheme_two_col($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'margin'  => 'bottom',
		'column'  => '',
    ), $atts));
	
	if(!empty($column))
	{
		$column='column-'.$column;
	}
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 section-margin-'.esc_attr($margin.$align.$column).'">'.do_shortcode($content).'</div>';
}


add_shortcode('three_col', 'mtheme_three_col');
function mtheme_three_col($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'margin'  => 'bottom',
		'column'  => '',
    ), $atts));
	
	if(!empty($column))
	{
		$column='column-'.$column;
	}	
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 section-margin-'.esc_attr($margin.$align.$column).'">'.do_shortcode($content).'</div>';
}



add_shortcode('four_col', 'mtheme_four_col');
function mtheme_four_col($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'margin'  => 'bottom',
		'column'  => '',
    ), $atts));
	
	if(!empty($column))
	{
		$column='column-'.$column;
	}	
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 section-margin-'.esc_attr($margin.$align.$column).'">'.do_shortcode($content).'</div>';
}

add_shortcode('five_col', 'mtheme_five_col');
function mtheme_five_col($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'margin'  => 'bottom',
		'column'  => '',
    ), $atts));
	
	if(!empty($column))
	{
		$column='column-'.$column;
	}	
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 section-margin-'.esc_attr($margin.$align.$column).'">'.do_shortcode($content).'</div>';
}

add_shortcode('six_col', 'mtheme_six_col');
function mtheme_six_col($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'margin'  => 'bottom',
		'column'  => '',
    ), $atts));
	
	if(!empty($column))
	{
		$column='column-'.$column;
	}	
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 section-margin-'.esc_attr($margin.$align.$column).'">'.do_shortcode($content).'</div>';
}


add_shortcode('seven_col', 'mtheme_saven_col');
function mtheme_saven_col($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'margin'  => 'bottom',
		'column'  => '',
    ), $atts));
	
	if(!empty($column))
	{
		$column='column-'.$column;
	}	
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 section-margin-'.esc_attr($margin.$align.$column).'">'.do_shortcode($content).'</div>';
}


add_shortcode('eight_col', 'mtheme_eight_col');
function mtheme_eight_col($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'margin'  => 'bottom',
		'column'  => '',
    ), $atts));
	
	if(!empty($column))
	{
		$column='column-'.$column;
	}	
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 section-margin-'.esc_attr($margin.$align.$column).'">'.do_shortcode($content).'</div>';
}


add_shortcode('nine_col', 'mtheme_nine_col');
function mtheme_nine_col($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'margin'  => 'bottom',
		'column'  => '',
    ), $atts));
	
	if(!empty($column))
	{
		$column='column-'.$column;
	}	
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 section-margin-'.esc_attr($margin.$align.$column).'">'.do_shortcode($content).'</div>';
}


add_shortcode('ten_col', 'mtheme_ten_col');
function mtheme_ten_col($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'margin'  => 'bottom',
		'column'  => '',
    ), $atts));
	
	if(!empty($column))
	{
		$column='column-'.$column;
	}	
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 section-margin-'.esc_attr($margin.$align.$column).'">'.do_shortcode($content).'</div>';
}


add_shortcode('eleven_col', 'mtheme_eleven_col');
function mtheme_eleven_col($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'margin'  => 'bottom',
		'column'  => '',
    ), $atts));
	
	if(!empty($column))
	{
		$column='column-'.$column;
	}	
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 section-margin-'.esc_attr($margin.$align.$column).'">'.do_shortcode($content).'</div>';
}


add_shortcode('fullwidth', 'mtheme_fullwidth');
function mtheme_fullwidth($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
		'margin'  => 'bottom',
		'column'  => '',
    ), $atts));
	
	if(!empty($column))
	{
		$column='column-'.$column;
	}	
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section-margin-'.esc_attr($margin.$align.$column).'">'.do_shortcode($content).'</div>';
}

add_shortcode('footer', 'mtheme_footer');
function mtheme_footer($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => '',
    ), $atts));
	
	switch($align)
	{
		case 'left': $align=' align-left'; break;
		case 'center': $align=' align-center'; break;
		case 'right': $align=' align-right'; break;
	}
	return '<footer'.esc_attr($align).'>'.do_shortcode($content).'</footer>';
}


add_shortcode('fancy-title', 'mtheme_fancy_title');
function mtheme_fancy_title($atts, $content = null) {
	extract(shortcode_atts(array(
		'align'  => 'center',
		'border'  => 'bottom',
		'heading'  => 'h3',		
    ), $atts));	
	if($border=='title')
	{
		$align='left';
	}
   return '<div class="fancy-title title-'.esc_attr($align).' border-'.esc_attr($border).'"><'.esc_attr($heading).'>'.mtheme_html($content).'</'.esc_attr($heading).'></div>';
}

add_shortcode('hr', 'mtheme_hr');
function mtheme_hr($atts, $content = null) {
	extract(shortcode_atts(array(
		'style' => 'solid',
		'color' => '',
		'size' => '1px',
		'width' => '100',
    ), $atts));
	if(empty($color))
	{
		$color=MthemeCore::getOption("secondary_color","#1bce7c");
	}
	
   return '<hr style="border-style:'.esc_attr($style).';width:'.esc_attr($width).'%;border-color:'.esc_attr($color).';border-width:'.esc_attr($size).';"/>';
}

add_shortcode('esc_shortcode', 'mtheme_esc_shortcode');
function mtheme_esc_shortcode($atts, $content = null) {
   return $content;
}


/*Content*/
add_shortcode('content', 'mtheme_content');
function mtheme_content($atts, $content=null) {
	extract(shortcode_atts(array(		
    ), $atts));
	
	$out=do_shortcode($content);
	
    return $out;
}
/*Button*/
add_shortcode('button','mtheme_button');
function mtheme_button($atts, $content=null) {	
	extract(shortcode_atts(array(
		'type'     	 => 'primary'
    ), $atts));
	
	$out='<button type="button" class="btn btn-'.esc_attr($type).'">'.do_shortcode($content).'</button>';
	
	return $out;
}

/*alert*/
add_shortcode('alert','mtheme_alert');
function mtheme_alert($atts, $content=null) {	
	extract(shortcode_atts(array(
		'type'     	 => 'success',
		'closable'   => '',
		'icon'     	 => ''		
    ), $atts));
	
	$fontIcon='';
	switch($icon)
	{
		case 'success': $fontIcon="<i class='fa fa-gift'></i><strong>Well done!</strong> "; break;
		case 'important': $fontIcon="<i class=' fa fa-hand-o-up '></i><strong>Heads up!</strong> "; break;
		case 'warning': $fontIcon="<i class='fa fa-exclamation-triangle '></i><strong>Warning!</strong> "; break;
		case 'danger': $fontIcon="<i class='fa fa-times-circle '></i><strong>Oh snap!</strong> "; break;		
	}
	
	if(!empty($closable) && $closable=='yes')
	{
		$closable="<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
	}
	else{
		$closable="";
	}
	
	$out='<div class="alert alert-'.esc_attr($type).'">'.$closable.$fontIcon.do_shortcode($content).'</div>';
	
	return $out;
}

/*accordions*/
add_shortcode('accordions','mtheme_accordions');
function mtheme_accordions($atts, $content=null) {	
	extract(shortcode_atts(array(
		'type'     	 => 'bg'
    ), $atts));
	
	
	$out='<div class="accordion accordion-'.esc_attr($type).' clearfix">'.do_shortcode($content).'</div>';
	
	return $out;
}

/*accordion*/
add_shortcode('accordion','mtheme_accordion');
function mtheme_accordion($atts, $content=null) {	
	extract(shortcode_atts(array(
		'title'     	 => ''
    ), $atts));
	
	$out="<div class='acctitle'><i class='acc-closed fa fa-check-circle-o'></i><i class='acc-open fa fa-times-circle-o'></i>Our Mission</div>";
	$out.="<div class='acc_content clearfix'>".do_shortcode($content).'</div>';
	
	return $out;
}
	

/*toggles*/
add_shortcode('toggles','mtheme_toggles');
function mtheme_toggles($atts, $content=null) {	
	extract(shortcode_atts(array(
		'type'     	 => 'bg'
    ), $atts));
	
	
	$out='<div class="toggle toggle-'.esc_attr($type).'">'.do_shortcode($content).'</div>';
	
	return $out;
}

/*toggle*/
add_shortcode('toggle','mtheme_toggle');
function mtheme_toggle($atts, $content=null) {	
	extract(shortcode_atts(array(
		'title'     	 => ''
    ), $atts));
			   
	$out="<div class='toggle-container'><div class='togglet'><i class='toggle-closed fa fa-check-circle-o'></i><i class='toggle-open fa fa-times-circle-o'></i>Our Mission</div>";
	$out.="<div class='togglec'>".do_shortcode($content).'</div></div>';
	
	return $out;
}


/*list*/
add_shortcode('list','mtheme_list');
function mtheme_list($atts, $content=null) {	
	extract(shortcode_atts(array(
		'type'     	 => ''
    ), $atts));
	
	$preOut='<ul class="list">';$postOut='</ul>';
	if($type=='ordered')
	{
		$preOut='<ol>';$postOut='</ol>';
	}
	
	$out=$preOut.do_shortcode($content).$postOut;
	
	return $out;
}

/*item*/
add_shortcode('item','mtheme_item');
function mtheme_item($atts, $content=null) {	
	extract(shortcode_atts(array(
		'type'     	 => '0'
    ), $atts));
	
	if(!empty($type) && $type!='none' && $type!='0')
	{
		$type="<i class='fa fa-".esc_attr($type)."'></i>";
	}
	
	$out='<li>'.$type.do_shortcode($content).'</li>';
	
	return $out;
}	
/*Tabs*/
add_shortcode('tabs','mtheme_tabs');
function mtheme_tabs($atts, $content=null) {
	extract(shortcode_atts(array(
		'type' => 'horizontal'
    ), $atts));
	
	$out='';
	
	if($type=='vertical') {
		$out.='<div class="tabs side-tabs clearfix"><ul class="tab-nav clearfix">';
	} else {
		$out.='<ul class="nav nav-tabs boot-tabs">';
	}	
	
	$tabs=explode('][', $content);
	
	$count=0;
	$preOut='';
	foreach($tabs as $tab) {
		$title='';
		$count++;		
		preg_match('/tab\s{1,}title=\"(.*)\"/', $tab, $matches);			
		if(isset($matches[1])) {
			$title=$matches[1];
		}		
				
		if(!empty($title)) {
			if($type=='vertical') {
				$out.='<li><a href="#'.mtheme_sanitize_key($title).'">'.mtheme_html($title).'</a></li>';
			} else {				
				$contMatches= mtheme_between($tab,']','[');
				if($count==1){
					$out.='<li class="active"><a href="#'.mtheme_sanitize_key($title).'" data-toggle="tab">'.mtheme_html($title).'</a></li>';
					$preOut.=do_shortcode('[tab title="'.esc_attr($title).'" active="yes"]'.mtheme_html($contMatches).'[/tab]');
				}
				else{
					$out.='<li><a href="#'.mtheme_sanitize_key($title).'" data-toggle="tab">'.mtheme_html($title).'</a></li>';
					$preOut.=do_shortcode('[tab title="'.esc_attr($title).'"]'.mtheme_html($contMatches).'[/tab]');
				}				
			}
		}
		
	}
	
	if($type=='vertical') {
		$out.='</ul><div class="tab-container">';
	} else {
		$out.='</ul><div class="tab-content">';
	}
	if($type=='vertical') {
		$out.=do_shortcode($content);
	}
	else{
		$out.=$preOut;
	}
    
	if($type=='vertical') {
		$out.='</div></div>';
	} else {
		$out.='</div>';
	}
	
    return $out;
}

add_shortcode('tab', 'mtheme_tabs_panes');
function mtheme_tabs_panes($atts, $content=null) {
	extract(shortcode_atts(array(
		'title' => '',
		'active' => '',
    ), $atts));
	
	if($active=='yes') {
		$active=' active';
	}
	
	$out='<div class="tab-pane tab-content'.esc_attr($active).' clearfix" id="'.mtheme_sanitize_key($title).'">'.do_shortcode($content).'</div>';	
    return $out;
}

/*modal*/
add_shortcode('modal', 'mtheme_modal');
function mtheme_modal($atts, $content = null) {
   extract(shortcode_atts(array(
		'title' 	 => 'link',
		'modal_heading' 	 => '',
    ), $atts));
	
	$micosec = uniqid();
	
	if(empty($modal_heading))
	{
		$modal_heading=$title;
	}
	$modal_id="modal_$micosec";
	
	$out='<button class="md-trigger" data-modal="'.esc_attr($modal_id).'">'.mtheme_html($title).'</button>';
	$out.='<div class="md-modal md-effect-9" id="'.esc_attr($modal_id).'">';
	$out.='<div class="md-content padding-none">';
	$out.='<div class="folio">';
	$out.='<div class="sp-name disclaimer"><strong>'.mtheme_html($title).'</strong></div>';
	$out.='<div class="sp-dsc disclaim-border">'.mtheme_html($content).'</div>';
	$out.='<button class="md-close"><i class="fa fa-times"></i></button>';
	$out.='</div></div></div><div class="md-overlay"></div>';
	return $out;
}

	

/*Event*/
add_shortcode('event_intro','mtheme_event_intro');
function mtheme_event_intro($atts, $content=null) {	
	extract(shortcode_atts(array(
		'event_id' => '',
		'background_image' => '',
		'background_color' => '',
		'heading_color'	=> '',
		'content_color'	=> '',
    ), $atts));
	
	if(empty($background_image))
	{
		$background_image=MthemeCore::getPostMeta($event_id, "event_event_bg_img","");
	}
	if(empty($background_color))
	{
		$background_color=MthemeCore::getPostMeta($event_id, "event_bg_color",MthemeCore::getOption("background_color"));
	}
	if(empty($heading_color))
	{
		$heading_color=MthemeCore::getPostMeta($event_id, "event_heading_color",MthemeCore::getOption("heading_color","#363738"));
	}
	if(empty($content_color))
	{
		$content_color=MthemeCore::getPostMeta($event_id, "event_content_color",MthemeCore::getOption("content_color","#5f6061"));
	}
	
	$title=MthemeCore::getPostMeta($event_id,"event_event_title","About the Event");
	$content=MthemeCore::getPostMeta($event_id,"event_event_content");
	
	if(!empty($background_image))
	{
		$out='<section style="background-image:url(\''.esc_url($background_image).'\');" class="text-center section-padding">';
	}
	else{
		$out='<section style="background-color:'.esc_attr($background_color).';" class="text-center section-padding">';
	}
	
	$out.='<div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">';
	$out.='<div class="row">';
	$out.='<div class="col-lg-8 align-center about">';
	$out.='<h1 style="color:'.esc_attr($heading_color).'">'.mtheme_html($title).'</h1>';
	$out.='<hr>';
	$out.='<p style="color:'.esc_attr($content_color).'">'.mtheme_html($content).'</p>';
	$out.='</div>';
	$out.='</div>';
	$out.='</div>';
	$out.='</section>';
	
	return $out;
}

/*event_brochure*/
add_shortcode('event_brochure','mtheme_event_brochure');
function mtheme_event_brochure($atts, $content=null) {	
	extract(shortcode_atts(array(
		'event_id' => '',
		'pdf_url' => '',
		'fb_share_link' => '',
		'background_image' => '',
		'background_color' => '',
		'heading_color'   => '',
    ), $atts));
	
	if(empty($pdf_url))
	{
		$pdf_url=MthemeCore::getPostMeta($event_id,"event_event_pdf","");
	}
	if(empty($fb_share_link))
	{
		$fb_share_link=MthemeCore::getPostMeta($event_id, "event_event_fb_share_link","");
	}
	if(empty($background_color))
	{
		$background_color=MthemeCore::getPostMeta($event_id, "event_sl_bg_color",MthemeCore::getOption("background_color","#FFF"));
	}
	if(empty($heading_color))
	{
		$heading_color=MthemeCore::getOption("heading_color","#363738");
	}
	$out='';
	if(!empty($fb_share_link) || !empty($pdf_url)){
		$class='';
		if(!empty($fb_share_link) && !empty($pdf_url)){
			$class=' left_50';
		}
		if(!empty($background_image))
		{
			$out.='<section style="background-image:url(\''.esc_url($background_image).'\');" class="event-download-social-link section-padding-bottom">';
		}
		else{
			$out.='<section style="background-color:'.esc_attr($background_color).';" class="event-download-social-link section-padding-bottom">';
		}
		
		$out.='<div class="col-lg-6 col-md-12 align-center">';
		if(!empty($pdf_url)){
			$out.='<a class="d-sch border_bottom text-right'.esc_attr($class).'" href="'.esc_url($pdf_url).'" target="_blank" style="color:'.esc_attr($heading_color).';">download schedule<i class="fa  fa-2x fa-download"></i></a>';			
			$class=' left_50'.' border_left';
		}if(!empty($fb_share_link)){
			$out.='<a class="fb'.esc_attr($class).'" href="'.esc_url($fb_share_link).'" target="_blank" style="color:'.esc_attr($heading_color).';"><i class="fa  fa-2x fa-facebook"></i>connect via facebook</a>';
		}
		$out.='</div></section>';
	}
	
	return $out;
}


/*mtheme_features*/
add_shortcode('event_features','mtheme_event_features_fun');
function mtheme_event_features_fun($atts, $content=null) {	
	extract(shortcode_atts(array(
		'title'     => '',
		'event_id' => '',
		'gallery'     => 'show',
		'video'     => 'show',
		'number' => '-1',
		'order' => 'menu_order',
		'category' => '',
		'status' => '',
		'thumbnail_width' => 620,
		'thumbnail_height' => 410,
		'slide_title' => 'show',
		'slide_title_position' => 'top',
		'slide_description' => 'show',
		'slide_description_position' => 'top',
		'hover_active' => 'yes',
		'hover_background_color' => '#1bd982',		
		'background_color'	=> '',
		'primary_color'   => '',
		'secondary_color'	=> '',		
    ), $atts));
	
	
	if(empty($background_color))
	{
		$background_color=MthemeCore::getPostMeta($event_id, "event_event_f_bg_color",MthemeCore::getOption("background_color","#212739"));
	}
	$class='container';
	$head_out='<div class="'.esc_attr($class).'">';
	$foot_out='</div>';

	if($gallery=='show' && $video=='show')
	{
		$class.=' col-lg-6 col-md-12';
		$head_out='<div class="'.esc_attr($class).'">';
	}
	else if($gallery=='show')
	{
		$class.=' col-lg-9 col-md-12';
		$head_out='<div class="'.esc_attr($class).'">';
		$head_out.='<div style="float: left;width: 75%;">';
		$foot_out.='</div>';
	}
	else if($video=='show')
	{
		$class.=' col-lg-9 col-md-12';
		$head_out='<div class="'.esc_attr($class).'">';
		$head_out.='<div style="float: right;width: 75%;">';
		$foot_out.='</div>';
	}
	 
	 
	$out='<section class="event-features clearfix" style="background-color:'.esc_attr($background_color).';">';	
	
	if($gallery=='show')
	{
		$out.=mtheme_ThreeDImageSlider($atts);
	}	
	
	$out.=$head_out.mtheme_event_features($atts).$foot_out;
	
	if($video=='show')
	{
		$out.=mtheme_event_video($atts);
	}	
	$out.='</section>';
	return $out;
}
/*Features*/
add_shortcode('features','mtheme_event_features');
function mtheme_event_features($atts, $content=null) {	
	
	extract(shortcode_atts(array(
		'event_id' => '',
		'primary_color'   => '',
		'tertiary_color'	=> '',
		'secondary_color'	=> '',
		'event_duration'   => '',
		'event_duration_title'	=> '',
		'event_duration_brief'   => '',
		'event_no_speakers'	=> '',
		'event_speakers_brief'   => '',
		'event_speakers_title'   => '',
		'event_no_tech'	=> '',
		'event_tech_title'   => '',
		'event_tech_brief'   => '',
    ), $atts));
	
	if(empty($primary_color))
	{
		$primary_color=MthemeCore::getPostMeta($event_id, "event_event_f_p_color",MthemeCore::getOption("secondary_color","#1bce7c"));
	}
	if(empty($secondary_color))
	{
		$secondary_color=MthemeCore::getPostMeta($event_id, "event_event_f_s_color",MthemeCore::getOption("primary_color","#FFFFFF"));
	}
	if(empty($tertiary_color))
	{
		$tertiary_color=MthemeCore::getOption("tertiary_color","#1bce7c");
	}
	if(empty($event_duration))
	{
		$event_duration=MthemeCore::getPostMeta($event_id, "event_event_duration");
	}
	if(empty($event_duration_title))
	{
		$event_duration_title=MthemeCore::getPostMeta($event_id, "event_event_duration_title");
	}
	
	if(empty($event_duration_brief))
	{
		$event_duration_brief=MthemeCore::getPostMeta($event_id, "event_event_duration_brief");
	}	
	if(empty($event_no_speakers))
	{
		$event_no_speakers=MthemeCore::getPostMeta($event_id, "event_event_no_speakers");
	}
	if(empty($event_speakers_title))
	{
		$event_speakers_title=MthemeCore::getPostMeta($event_id, "event_event_speakers_title");
	}
	if(empty($event_speakers_brief))
	{
		$event_speakers_brief=MthemeCore::getPostMeta($event_id, "event_event_speakers_brief");
	}
	if(empty($event_no_tech))
	{
		$event_no_tech=MthemeCore::getPostMeta($event_id, "event_event_no_tech");
	}
	if(empty($event_tech_title))
	{
		$event_tech_title=MthemeCore::getPostMeta($event_id, "event_event_tech_title");
	}
	if(empty($event_tech_brief))
	{
		$event_tech_brief=MthemeCore::getPostMeta($event_id, "event_event_tech_brief");
	}
	
	$count=0;
	$class="col-md-4 ";		
	if(!empty($event_duration) || !empty($event_duration_title) || !empty($event_duration_brief)) $count++;
	if(!empty($event_no_speakers) || !empty($event_speakers_title) || !empty($event_speakers_brief)) $count++;
	if(!empty($event_no_tech) || !empty($event_tech_title) || !empty($event_tech_brief)) $count++;
	switch($count)
	{
		case 1:$class="col-md-12 ";break;
		case 2:$class="col-md-6 ";break;
	}
	
	$out='<div class="features-wrapper text-center">';
	if(!empty($event_duration) || !empty($event_duration_title) || !empty($event_duration_brief))
	{
		
		$out.='<div class="'.esc_attr($class).'wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">';
		$out.='<div class="icon" style="color:'.esc_attr($tertiary_color).';">'.mtheme_html($event_duration).'</div>';
		$out.='<h2 style="color:'.esc_attr($primary_color).';">'.mtheme_html($event_duration_title).'</h2>';
		$out.='<p style="color:'.esc_attr($secondary_color).';">'.mtheme_html($event_duration_brief).'</p>';
		$out.='</div>';
	}
	
	if(!empty($event_no_speakers) || !empty($event_speakers_title) || !empty($event_speakers_brief))
	{
		$out.='<div class="'.esc_attr($class).'wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">';
		$out.='<div class="icon" style="color:'.esc_attr($tertiary_color).';">'.mtheme_html($event_no_speakers).'</div>';
		$out.='<h2 style="color:'.esc_attr($primary_color).';">'.mtheme_html($event_speakers_title).'</h2>';
		$out.='<p style="color:'.esc_attr($secondary_color).';">'.mtheme_html($event_speakers_brief).'</p>';
		$out.='</div>';
	}
	
	if(!empty($event_no_tech) || !empty($event_tech_title) || !empty($event_tech_brief))
	{		
		$out.='<div class="'.esc_attr($class).'wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">';
		$out.='<div class="icon" style="color:'.esc_attr($tertiary_color).';">'.mtheme_html($event_no_tech).'</div>';
		$out.='<h2 style="color:'.esc_attr($primary_color).';">'.mtheme_html($event_tech_title).'</h2>';
		$out.='<p style="color:'.esc_attr($secondary_color).';">'.mtheme_html($event_tech_brief).'</p>';
		$out.='</div>';
		$out.='<div class="clearfix"></div>';
	}
	$out.='</div>';
		
	
	return $out;
}

	
/*Video*/
add_shortcode('event_video','mtheme_event_video');
function mtheme_event_video($atts, $content=null) {	
	
	extract(shortcode_atts(array(	
		'event_id' => '',
		'title'     => 'VIDEO',
		'video_url'     => '',
		'video_type'     => '',
		'background_image' => '',
		'background_color' => '',
		'hover_active' => '',
		'hover_color'	=> '',
		'content_color'	=> '',
    ), $atts));
	
	
	if(empty($video_url))
	{
		if($video_type=='youtube')
		{
			$video_url=MthemeCore::getPostMeta($event_id, "event_event_video",'http://youtu.be/GQRjWxfz-PQ');
		}
		else{
			$video_url=MthemeCore::getPostMeta($event_id, "event_event_video",'http://vimeo.com/75976293');
		}
	}	
	if(empty($video_type))
	{
		$video_type=MthemeCore::getPostMeta($event_id,"event_video_type",'vimeo');
	}
	if(empty($background_image))
	{
		$background_image=MthemeCore::getPostMeta($event_id,"event_video_bg_img",CHILD_URI.'site/img/backgrounds/video.jpg');
	}
	if(empty($background_color))
	{
		$background_color=MthemeCore::getPostMeta($event_id, "event_video_bg_color","");
	}
	if(empty($hover_active))
	{
		$hover_active=MthemeCore::getPostMeta($event_id,"event_video_hover_active",'yes');
	}
	if(empty($hover_color))
	{
		$hover_color=MthemeCore::getPostMeta($event_id, "event_video_hover_color",MthemeCore::getOption("secondary_color","#1bce7c"));
	}
	if(empty($content_color))
	{
		$content_color=MthemeCore::getOption("primary_color","#ffffff");
	}
	
	$out='';
	if($hover_active=='yes')
	{
		$hoverclass=' event_video_hover';
		$out.='<script type="text/javascript">';
		$out.='window.event_video_hover_active = "yes";';
		$out.='window.event_video_hover_color = "'.esc_js($hover_color).'";';
		$out.='</script>';
	}
	
	if(!empty($background_image))
	{
		$out.='<div style="background-image:url(\''.esc_url($background_image).'\');" class="slide_gallery vimeo-video col-lg-3 col-sm-12'.esc_attr($hoverclass).'">';
		$out.='<script type="text/javascript">';
		$out.='window.event_video_hover_out = "url(\''.esc_url($background_image).'\')";';
		$out.='</script>';
	}
	else{
		$out='<div style="background-color:'.esc_attr($background_color).';" class="slide_gallery vimeo-video col-lg-3 col-sm-12'.esc_attr($hoverclass).'">';
		$out.='<script type="text/javascript">';
		$out.='window.event_video_hover_out = "'.esc_js($background_color).'";';
		$out.='</script>';
	}	
	
	$out.='<a class="venoboxvid" data-type="'.esc_attr($video_type).'"  href="'.esc_url($video_url).'" target="_self">';
	$out.='<img src="'.CHILD_URI.'/site/img/vdo-icn.png" alt="video_hover"><span style="color:'.esc_attr($content_color).';">'.mtheme_html($title).'</span>';
	$out.='</a>';
	$out.='</div>';
	
	return $out;
}

/*ThreeDImageSlider*/
add_shortcode('ThreeDImageSlider', 'mtheme_ThreeDImageSlider');
function mtheme_ThreeDImageSlider($atts) {
	$haveSlidesInGallery=false;
	extract(shortcode_atts(array(
		'gallery_title' => '',
		'number' => '-1',
		'order' => 'menu_order',
		'category' => '',
		'status' => '',
		'thumbnail_width' => 620,
		'thumbnail_height' => 410,
		'slide_title' => '',
		'slide_title_position' => '',
		'slide_description' => '',
		'slide_description_position' => '',
		'hover_background_color' => '',
		'background_image' => '',
		'background_color'	=> '',
		'hover_color' => '',
		'primary_color' => '',
		'heading_color' => '',
		'content_color'	=> ''
    ), $atts));
	
	if($order=='random') {
		$order='rand';
	}
		
	$args=array(
		'post_type' => 'gallery_slide',
		'post_status' => 'publish',
		'showposts' => $number,	
		'orderby' => $order,
		'order' => 'ASC',
		'meta_query' => array(
			array(
				'key' => '_thumbnail_id',
			),
		),
		
	);
	
	if(!empty($status)) {
		$args['meta_query'][]=array(
            'key' => '_gallery_slide_status',
			'value' => $status,
        );
	}
	
	$texanomy= null;	
	$micosec = uniqid();
	
	$unique_id="gallery_$micosec";
	if(!empty($category)) {
		
		$category_int=intval($category);		
		if(empty($category_int))
		{
			$texanomy = get_term_by('slug',$category,'gallery_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'gallery_cat',
					'terms' => $category,
					'field' => 'slug',
				);
			}
		}
		else{
			$texanomy = get_term_by('term_id',$category,'gallery_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'gallery_cat',
					'terms' => $category_int,
					'field' => 'term_id',
				);
			}
		}
		
		
	}
	$query=new WP_Query($args);	
	
	if($texanomy)
	{		
		if(empty($gallery_title))
		{
			$gallery_title=$texanomy->name;
		}
		if(empty($slide_title))
		{
			$slide_title=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'gal_'.'slide_title','show');	
		}
		if(empty($slide_title_position))
		{
			$slide_title_position=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'gal_'.'slide_title_position','top');	
		}
		if(empty($slide_description))
		{
			$slide_description=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'gal_'.'slide_description','show');	
		}
		if(empty($slide_description_position))
		{
			$slide_description_position=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'gal_'.'slide_description_position','top');	
		}
		if(empty($hover_active))
		{
			$hover_active=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'gal_'.'hover_active','yes');	
		}
		if(empty($hover_background_color))
		{
			$hover_background_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'gal_'.'hover_background_color',MthemeCore::getOption('secondary_color','#1bd982'));	
		}
		if(empty($background_image))
		{
			$background_image=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'gal_'.'background_img');
			if($background_image!=null)
			{
				$background_image=$background_image['src'];
			}			
		}
		if(empty($background_color))
		{
			$background_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'gal_'.'background_color',MthemeCore::getOption('background_color','#212739'));	
		}
		if(empty($heading_color))
		{
			$heading_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'gal_'.'heading_color',MthemeCore::getOption('heading_color','#363738'));	
		}
		if(empty($content_color))
		{
			$content_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'gal_'.'content_color',MthemeCore::getOption('content_color','#5f6061'));	
		}
		
	}
	else{
		if(empty($gallery_title))
		{
			$gallery_title="Gallery";
		}
		if(empty($slide_title))
		{
			$slide_title='show';
		}		
		if(empty($slide_title_position))
		{
			$slide_title_position='top';
		}	
		if(empty($slide_description))
		{
			$slide_description='show';
		}		
		if(empty($slide_description_position))
		{
			$slide_description_position='top';
		}		
		if(empty($hover_active))
		{
			$hover_active='yes';
		}		
		if(empty($hover_background_color))
		{
			$hover_background_color=MthemeCore::getOption('secondary_color','#1bd982');
		}
		if(empty($background_image))
		{
			$background_image=CHILD_URI.'/site/img/gallery/gallery.jpg';	
		}
		if(empty($background_color))
		{
			$background_color=MthemeCore::getOption('background_color','#212739');	
		}	
		if(empty($heading_color))
		{
			$heading_color=MthemeCore::getOption('heading_color','#363738');	
		}
		if(empty($content_color))
		{
			$content_color=MthemeCore::getOption('content_color','#5f6061');	
		}
	}
	
	if(empty($background_image))
	{
		$background_image=CHILD_URI.'/site/img/gallery/gallery.jpg';	
	}
	if(empty($hover_background_color) || $hover_background_color=='#')
	{
		$hover_background_color=MthemeCore::getOption('secondary_color','#1bd982');	
	}
	if(empty($primary_color) || $primary_color=='#')
	{
		$primary_color=MthemeCore::getOption('primary_color','#ffffff');	
	}
	if(empty($heading_color) || $heading_color=='#')
	{
		$heading_color=MthemeCore::getOption('heading_color','#363738');	
	}
	if(empty($content_color) || $content_color=='#')
	{
		$content_color=MthemeCore::getOption('content_color','#5f6061');	
	}
	
	$out='<div class="col-lg-3 col-sm-12 nopadding">';
	$out.='<div id="'.esc_attr($unique_id).'" class="grid-gallery"><section class="grid-wrap">';
	$out.='<div class="grid-gal">';	
	
	$hoverclass='';
	if($hover_active=='yes')
	{
		$hoverclass=' threeDImage_hover';
		$out.='<script type="text/javascript">';
		$out.='window.threeDImage_hover_active = "yes";';
		$out.='window.threeDImage_hover_color = "'.esc_js($hover_background_color).'";';
		$out.='</script>';
	}
	
	if(!empty($background_image))
	{
		$out.='<figure class="slide_gallery'.esc_attr($hoverclass).'" style="background-image: url(\''.esc_url($background_image).'\');">';
		$out.='<script type="text/javascript">';
		$out.='window.threeDImage_hover_out = "url(\''.esc_url($background_image).'\')";';
		$out.='</script>';
	}
	else
	{
		$out.='<figure class="slide_gallery'.esc_attr($hoverclass).'" style="background-color: '.esc_attr($background_color).';">';
		$out.='<script type="text/javascript">';
		$out.='window.threeDImage_hover_out = "'.esc_js($background_color).'";';
		$out.='</script>';
	}
	
	$out.='<a href="#"><img src="'.CHILD_URI.'site/img/gallery/gal-icn.png" alt="gallery">';
	$out.='<span style="color:'.esc_attr($primary_color).'">'.mtheme_html($gallery_title).'</span></a></figure></div></section>';
	
	$out.='<section class="slideshow"><ul>';
	
	while($query->have_posts()){
		$query->the_post();	
		$haveSlidesInGallery=true;
		ob_start();
		
		$temp_out='';
		if(($slide_title=='show' && $slide_title_position=='top') || ($slide_description=='show' && $slide_description_position=='top'))
		{
			$temp_out.='<figcaption>';
			if($slide_title=='show' && $slide_title_position=='top')
			{
				$temp_out.='<h3 style="color:'.esc_attr($heading_color).'">'.get_the_title(get_the_ID()).'</h3>';
			}
			if($slide_description=='show' && $slide_description_position=='top')
			{
				$temp_out.='<hr/><p style="color:'.esc_attr($content_color).'">'.get_the_content(get_the_ID()).'</p>';
			}
			$temp_out.='</figcaption>';
		}
		$temp_out.=get_the_post_thumbnail(get_the_ID(),array($thumbnail_width,$thumbnail_height));
		if(($slide_title=='show' && $slide_title_position=='bottom') || ($slide_description=='show' && $slide_description_position=='bottom'))
		{
			$temp_out.='<figcaption>';
			if($slide_title=='show' && $slide_title_position=='bottom')
			{
				$temp_out.='<h3 style="color:'.esc_attr($heading_color).'">'.get_the_title(get_the_ID()).'</h3>';
			}
			if($slide_description=='show' && $slide_description_position=='bottom')
			{
				$temp_out.='<hr/><p style="color:'.esc_attr($content_color).'">'.get_the_content(get_the_ID()).'</p>';
			}
			$temp_out.='</figcaption>';
		}
		$out.='<li><figure>';
		$out.=$temp_out;
		$out.='</figure></li>';
		
		
		ob_end_clean();
	}
	
	if(!$haveSlidesInGallery)
	{
		$out.='<li style="width: 660px;height: 1000px;"><figure>';
		$out.='<h3>No Slides</h3>';
		$out.='</figure></li>';
	}
	$out.='</ul><nav><span class="nav-prev fa-chevron-left fa fa-2x "></span><span class="nav-next fa-chevron-right fa fa-2x"></span>';
	$out.='<span class="close nav-close"><i class="fa fa-times"></i></span></nav></section>';
	$out.='</div></div>';
	$out.='<script type="text/javascript">window.globalGridGalleryActive ="yes";';
	$out.='window.globalGridGallery = "'.esc_js($unique_id).'";</script>';
	wp_enqueue_script('classie.grid.gallery-js', CHILD_URI.'site/js/classie.grid.gallery.js',array("jquery-js"),array(),true);
	wp_enqueue_script('modernizr.gridgallery-js', CHILD_URI.'site/js/modernizr.gridgallery.js',array("jquery-js"),array(),true);
	wp_enqueue_script('cbpGridGallery-js', CHILD_URI.'site/js/cbpGridGallery.js',array("jquery-js"),array(),true);
	
	return $out;
}


/*Contact Form*/
add_shortcode('event_registration_form', 'mtheme_registration_form');
function mtheme_registration_form($atts, $content=null) {

	extract(shortcode_atts(array(
		'background_image' => '',
		'background_color' => '',
		'primary_color'   => '',
		'secondary_color'	=> '',
    ), $atts));
	
	if(empty($background_image))
	{
		$background_image=MthemeCore::getOption("contact_form_bg_img","");
	}
	if(empty($background_color))
	{
		$background_color=MthemeCore::getOption("contact_form_bg_color","");
	}
	if(empty($primary_color))
	{
		$primary_color=MthemeCore::getOption("contact_form_p_color","#FFFFFF");
	}
	if(empty($secondary_color))
	{
		$secondary_color=MthemeCore::getOption("contact_form_s_color","#1bce7c");
	}
	
	if(empty($background_image) && empty($background_color))
	{
		$background_image=CHILD_URI.'site/img/backgrounds/bg-input.jpg';
	}
	
	
	$title=MthemeCore::getOption("terms_title");
	$content=MthemeCore::getOption("terms_content");
	
	$micosec = uniqid();	
	$unique_id="contact_$micosec";
	
	if(!empty($background_image))
	{
		$out='<section id="register_me" style="background:url(\''.esc_url($background_image).'\') no-repeat fixed center center / cover  rgba(0, 0, 0, 0)!important;" class="text-center register_me">';
	}
	else{
		$out='<section id="register_me" style="background-color:'.esc_attr($background_color).';" class="text-center register_me">';
	}
	$out.='<div class="container">';
	$out.='<div class="row">';
	$out.='<div class="col-lg-9 align-center">';
	
	$out.='<form action="'.AJAX_URL.'" method="POST" id="'.esc_attr($unique_id).'" style="color:'.esc_attr($primary_color).';" class="nl-form ajax-form">';	
	
	ob_start();
	MthemeForm::renderContactForm('contact');
	$out.=ob_get_contents();
	ob_end_clean();	
	
	$out.='<div class="clear"></div>';
	$out.='<div class="nl-submit-wrap"><button class="nl-submit submit-button btn-effect" type="submit" style="background: none repeat scroll 0 0 '.esc_attr($secondary_color).';">Submit</button></div>';
	$out.='<div class=".form-loader-div"><span class="form-loader"></span></div>';
	$out.='<div class="nl-overlay"></div>';
	$out.='<div class="message"></div>';
	$out.='<input type="hidden" name="slug" value="contact" />';
	$out.='<input type="hidden" class="action" value="'.MTHEME_PREFIX.'form_submit" /></form>';
	$out.='<script type="text/javascript">window.globalNLFormActive ="yes";';
	$out.='window.globalNLForm = "'.esc_js($unique_id).'";</script>';
	wp_enqueue_script('nlform-js', CHILD_URI.'site/js/nlform.js',array("jquery-js"),array(),true);
	
	if(!empty($title)){
		$out.='<div class="col-md-12 tc">Please read the';
		$out.=do_shortcode("[modal title='$title']".mtheme_html($content)."[/modal]");
		$out.='carefully.</div>';
	}
	$out.='</div></div></div>';
	
	$out.='</section>';
	 
	return $out;
}

/*carousel_slider*/
add_shortcode('carousel_slider', 'mtheme_carousel_slider');
function mtheme_carousel_slider($atts) {
	
	extract(shortcode_atts(array(
		'number' => '-1',
		'order' => 'menu_order',
		'category' => '',
		'status' => '',
		'thumbnail_width' => 1170,
		'thumbnail_height' => 520
    ), $atts));
	
	if($order=='random') {
		$order='rand';
	}
		
	$args=array(
		'post_type' => 'carousel_slide',
		'post_status' => 'publish',
		'showposts' => $number,	
		'orderby' => $order,
		'order' => 'ASC',
		'meta_query' => array(
			array(
				'key' => '_thumbnail_id',
			),
		),
		
	);
	
	if(!empty($status)) {
		$args['meta_query'][]=array(
            'key' => '_carousel_slide_status',
			'value' => $status,
        );
	}
	
	$out='';
	$micosec = uniqid();	
	$unique_id="carousel_slide_$micosec";
	
	if(!empty($category)) {
		
		$category_int=intval($category);		
		if(empty($category_int))
		{
			$texanomy = get_term_by('slug',$category,'carousel_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'carousel_cat',
					'terms' => $category,
					'field' => 'slug',
				);
			}			
		}
		else{
			$texanomy = get_term_by('term_id',$category,'carousel_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'carousel_cat',
					'terms' => $category_int,
					'field' => 'term_id',
				);
			}
		}
	}
	$query=new WP_Query($args);	
	
	if($query->have_posts()){
	
		$out='<div id="'.esc_attr($unique_id).'" class="carousel slide" data-ride="carousel">';	
		$out.='<div class="carousel-inner">';
		
		$posts = $query->get_posts();
		$slideC=0;
		foreach($posts as $post){			
			
			$slideC++;
			if($slideC==1){
				$out.='<div class="item active">';
			}else{
				$out.='<div class="item">';
			}
			$out.=get_the_post_thumbnail($post->ID,array($thumbnail_width,$thumbnail_height));
			$out.='</div>';
		}	
		$out.='</div><a class="left carousel-control" href="#'.esc_attr($unique_id).'" role="button" data-slide="prev">';
		$out.='<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.5px" height="28.5px" viewBox="0 0 15.5 28.5" enable-background="new 0 0 15.5 28.5" xml:space="preserve" style="fill:#fff;">';
		$out.='<polygon points="14.068,28.5 15.5,27.091 2.814,14.25 15.5,1.409 14.068,0 0,14.242 0.008,14.25 0,14.258 "/>';
		$out.='</svg>';
		$out.='</a>';
		$out.='<a class="right carousel-control" href="#'.esc_attr($unique_id).'" role="button" data-slide="next">';
		$out.='<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.5px" height="28.5px" viewBox="0 0 15.5 28.5" enable-background="new 0 0 15.5 28.5" xml:space="preserve" style="fill:#fff;">';
		$out.='<polygon points="1.432,28.5 0,27.091 12.686,14.25 0,1.409 1.432,0 15.5,14.242 15.492,14.25 15.5,14.258 "/>';
		$out.='</svg>';
		$out.='</a>';
		$out.='</div>';
	}	
		
	return $out;
}

/*Notify Me*/
add_shortcode('event_notify_form', 'mtheme_event_notify_form');
function mtheme_event_notify_form($atts, $content=null) {

	extract(shortcode_atts(array(
		'background_image' => '',
		'background_color' => '',
		'primary_color'   => '',
		'secondary_color'	=> '',
    ), $atts));
	
	
	if(empty($background_image))
	{
		$background_image=MthemeCore::getOption("notify_bg_img","");
	}
	if(empty($background_color))
	{
		$background_color=MthemeCore::getOption("notify_bg_color","");
	}
	if(empty($primary_color))
	{
		$primary_color=MthemeCore::getOption("notify_p_color",MthemeCore::getOption("primary_color","#FFFFFF"));
	}
	if(empty($secondary_color))
	{
		$secondary_color=MthemeCore::getOption("notify_s_color",MthemeCore::getOption("secondary_color","#1bce7c"));
	}
	
	$title=MthemeCore::getOption("notify_title","Subscribe for newsletter");
	$content=MthemeCore::getOption("notify_content");

	if(empty($background_image) && empty($background_color))
	{
		$background_image=CHILD_URI.'site/img/macbook.jpg';
	}
	
	$micosec = uniqid();	
	$unique_id="notify_$micosec";
	
	if(!empty($background_image))
	{
		$out='<section style="background:url(\''.esc_url($background_image).'\') no-repeat fixed center center / cover  rgba(0, 0, 0, 0)!important;" class="subscribe text-center">';
	}
	else{
		$out='<section style="background-color:'.esc_attr($background_color).';" class="subscribe text-center">';
	}
	
	$out.='<div class="container wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">';
	$out.='<div class="center-block align-center col-lg-5 col-md-5 col-sm-10 col-xs-10">';
	$out.='<h1 style="color:'.esc_attr($primary_color).';">'.mtheme_html($title).'</h1>';
	if(!empty($content))
	{
		$out.='<p>'.mtheme_html($content).'</p>';
	}
	$out.='<form action="'.AJAX_URL.'" method="POST" id="'.esc_attr($unique_id).'" class="ajax-form">';	

	
	$out.='<div class="input-group col-lg-12 align-center">';
	$out.='<input type="text" class="form-control email-add" name="email" placeholder="Enter Email Address">';
	$out.='<button class="btn btn-default submit-button" style="color:'.esc_attr($secondary_color).';"><i class="fa fa-paper-plane"></i><span>Send</span></button>';
		
	$out.='<input type="hidden" class="action" value="'.MTHEME_PREFIX.'notify_submit" />';
	$out.='</div>';	
	$out.='<div class="message"></div>';
	$out.='</form></div></div>';
	$out.='</section>';
	 
	return $out;
}

/*sponsors*/
add_shortcode('sponsors', 'mtheme_sponsors');
function mtheme_sponsors($atts) {
	
	extract(shortcode_atts(array(
		'number' => '-1',
		'order' => 'menu_order',
		'category' => '',
		'status' => '',
		'thumbnail_width' => 160,
		'thumbnail_height' => 56
    ), $atts));
	
	if($order=='random') {
		$order='rand';
	}
		
	$args=array(
		'post_type' => 'sponsor',
		'post_status' => 'publish',
		'showposts' => $number,	
		'orderby' => $order,
		'order' => 'ASC',
		'meta_query' => array(
			array(
				'key' => '_thumbnail_id',
			),
		),
		
	);
	
	if(!empty($status)) {
		$args['meta_query'][]=array(
            'key' => 'sponsor_status',
			'value' => $status,
        );
	}
	
	$texanomy= null;	
	$haveItems=false;
	$micosec = uniqid();	
	$unique_id="sponsor_$micosec";
	
	if(!empty($category)) {
	
		$category_int=intval($category);
		if(empty($category_int))
		{			
			$texanomy = get_term_by('slug',$category,'sponsor_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'sponsor_cat',
					'terms' => $category,
					'field' => 'slug',
				);
			}			
		}
		else{
			
			$texanomy = get_term_by('term_id',$category,'sponsor_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'sponsor_cat',
					'terms' => $category_int,
					'field' => 'term_id',
				);
			}
		}
		
	}
	$query=new WP_Query($args);
	$out='<div  class="row row-wrap">';	

	if($query->have_posts()){
	
		$out.='<div id="'.esc_attr($unique_id).'" style="position:relative;top:0px;left:0px;width:980px;height:56px;overflow:hidden;">';
		$out.='<div class="inner_carousel" data-u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 980px; height: 56px; overflow: hidden;">';
			
		while($query->have_posts()){
			
			$query->the_post();	
			$haveItems=true;
			ob_start();
			
			$out.='<div>';
			$out.=get_the_post_thumbnail(get_the_ID(),array($thumbnail_width,$thumbnail_height));		
			$out.='</div>';
			
			
			ob_end_clean();
		}
		$out.='</div></div>';	
	
	}
	if(!$haveItems)
	{		
		$out.='<h3>No Sponsors</h3>';		
	}

	if($haveItems)
	{
		$out.='<script type="text/javascript">';
		$out.='window.globalSponsorGallery = "'.esc_js($unique_id).'";</script>';
		wp_enqueue_script('jssor.core-js', CHILD_URI.'site/js/jssor.core.js',array("jquery-js"),array(),true);
		wp_enqueue_script('jssor.utils-js', CHILD_URI.'site/js/jssor.utils.js',array("jquery-js"),array(),true);
		wp_enqueue_script('jssor.slider-js', CHILD_URI.'site/js/jssor.slider.js',array("jquery-js"),array(),true);
		wp_enqueue_script('sponsor_init-js', CHILD_URI.'site/js/sponsor_init.js',array("jquery-js"),array(),true);
	}
	$out.='</div>';
	return $out;
}

/*mtheme_sponsors*/
add_shortcode('event_sponsors', 'mtheme_sponsors_func');
function mtheme_sponsors_func($atts) {
	
	extract(shortcode_atts(array(
		'title' => '',
		'content' => '',
		'number' => '-1',
		'order' => 'menu_order',
		'category' => '',
		'status' => '',
		'thumbnail_width' => 160,
		'thumbnail_height' => 56,
		'background_image' => '',
		'background_color' => '',
		'heading_color'   => '',
		'content_color'	=> '',
    ), $atts));
		
	$texanomy=null;
	if(!empty($category)) {
	
		$category=intval($category);
		if(empty($category))
		{
			$texanomy = get_term_by('slug',$category,'sponsor_cat');			
		}
		else{
			$texanomy = get_term_by('term_id',$category,'sponsor_cat');			
		}
		
	}	
	if($texanomy)
	{
		if(empty($title))
		{
			$title=$texanomy->name;
		}
		if(empty($content))
		{
			$content=$texanomy->description;
		}
		if(empty($background_image))
		{
			$background_image=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spr_'.'bg_img','');	
		}
		if(empty($background_color))
		{
			$background_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spr_'.'bg_color',MthemeCore::getOption("background_color","#FFFFFF"));	
		}
		if(empty($heading_color))
		{
			$heading_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spr_'.'p_color',MthemeCore::getOption("heading_color","#363738"));
		}
		if(empty($content_color))
		{
			$content_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spr_'.'s_color',MthemeCore::getOption("content_color","#5f6061"));
		}						
	}
	else{
		if(empty($title))
		{
			$title='Sponsors';
		}
	}
	
	if(empty($background_color) || $background_color=='#')
	{
		$background_color="#FFFFFF";	
	}
	if(empty($heading_color) || $heading_color=='#')
	{
		$heading_color=MthemeCore::getOption("heading_color","#363738");
	}
	if(empty($content_color) || $content_color=='#')
	{
		$content_color=MthemeCore::getOption("content_color","#5f6061");	
	}
	
	$out='';
	if(!empty($background_image))
	{
		$out.='<div style="background-image:url(\''.esc_url($background_image).'\');" class="sponsors text-center section-padding">';
	}
	else{
		$out.='<div style="background-color:'.esc_attr($background_color).';" class="sponsors text-center section-padding">';
	}
	

	$out.='	<div class="container">';
	if(!empty($title) || !empty($content)){
		$out.='<div class="row">';
		$out.='<div class="col-md-8 align-center wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">';
		if(!empty($title)){ $out.='<h1 style="color:'.esc_attr($heading_color).'">'.mtheme_html($title).'</h1><hr>'; }
		if(!empty($content)) { $out.='<p style="color:'.esc_attr($content_color).'">'.mtheme_html($content).'</p>'; }
		$out.='</div>';
	}
	$out.=mtheme_sponsors($atts);
	$out.='</div>';
	$out.='</div>';
	$out.='</div>';
	
	return $out;	
}

/*schedules*/
add_shortcode('schedules', 'mtheme_schedules');
function mtheme_schedules($atts) {
	$haveSchedules=false;
	$scheduleCount=0;
	extract(shortcode_atts(array(
		'number' => '-1',
		'order' => 'menu_order',
		'category' => '',
		'status' => '',
		'background_image' => '',
		'background_color' => '',
		'primary_color'   => '',
		'secondary_color'	=> '',
		'heading_color'   => '',
		'content_color'	=> '',
    ), $atts));
	
	if($order=='random') {
		$order='rand';
	}
		
	$args=array(
		'post_type' => 'schedule',
		'post_status' => 'publish',
		'showposts' => $number,	
		'orderby' => $order,
		'order' => 'ASC',		
	);
	
	if(!empty($status)) {
		$args['meta_query'][]=array(
            'key' => 'schedule_status',
			'value' => $status,
        );
	}
	
	$texanomy= null;	
	$micosec = uniqid();	
	$schedule_id="schedule_$micosec";
	
	if(!empty($category)) {
		
		$category_int=intval($category);
		if(empty($category_int))
		{			
			$texanomy = get_term_by('slug',$category,'schedule_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'schedule_cat',
					'terms' => $category,
					'field' => 'slug',
				);
			}
		}
		else{
			$texanomy = get_term_by('term_id',$category,'schedule_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'schedule_cat',
					'terms' => $category_int,
					'field' => 'term_id',
				);
			}
		}
		
	}
	$query=new WP_Query($args);
			
	$out="<div id='$schedule_id' class='tabs'>";
	$tab_out='<nav><ul>';
	$content_out='<div class="content">';
	$events['schedule']=array();
	
	while($query->have_posts()){
		
		$query->the_post();	
		$haveSchedules=true;
		$scheduleCount++;
		ob_start();
		
		$scheduleDate=MthemeCore::getPostMeta(get_the_ID(),"schedule_date");
		$tab_out.='<li><a href="#'.esc_attr($schedule_id.'_'.$scheduleCount).'"><span>'.get_the_title().'</span></a></li>';
		
		$content_out.='<section id="'.esc_attr($schedule_id.'_'.$scheduleCount).'">';
		$content_out.='<div class="container">';
		$content_out.='<div class="accordion">';
		$content_out.='<div class="day">'.mtheme_html($scheduleDate).'</div>';
			
		$events['schedule']=mtheme_filter(MthemeCore::getPostMeta(get_the_ID(), 'schedule_event'));
		foreach($events['schedule'] as $ID => $event) {
			$accordionStyle=$accordionOpen='';
			if(isset($event['active']) && $event['active']=='yes')
			{
				$accordionOpen=' open';
				$accordionStyle=' style="display: block;"';
			}
			
			$content_out.='<div class="item clearfix'.esc_attr($accordionOpen).'">';
			$content_out.='<div class="heading clearfix">';
			$content_out.='<div class="time col-md-3 col-sm-12 col-xs-12">'.mtheme_html($event['time']).'</div>';
			$content_out.='<div class="e-title col-md-9 col-sm-12 col-xs-12">'.mtheme_html($event['title']);
			$content_out.='<br/><span class="name">'.mtheme_html($event['speaker']);
			if(!empty($event['designation'])){
			$content_out.=' - </span><span class="speaker-designaition">'.mtheme_html($event['designation']);
			}
			$content_out.='</span>';
			$content_out.='<span class="up-down-icon"><i class="fa fa-chevron-up"></i><i class="fa fa-chevron-down"></i></span></div></div>';
			$content_out.='<div class="col-md-12 col-sm-12 col-xs-12">';
			$content_out.='<div class="content venue col-md-3 col-sm-12 col-xs-12"'.esc_attr($accordionStyle).'>';
			$content_out.='Venue: '.mtheme_html($event['venue']).'</div>';
			$content_out.='<div class="content details col-md-9 col-sm-12 col-xs-12"'.esc_attr($accordionStyle).'>';
			$content_out.=mtheme_html($event['description']).'</div>';
			$content_out.='</div></div>';
		}		
		
		$content_out.='</div></div></section>';		
		
		ob_end_clean();
	}
	$tab_out.='</ul></nav>';	
	$content_out.='</div>';
	$out.=$tab_out.$content_out.'</div>';
	
	if(!$haveSchedules)
	{		
		$out='<h3>No Schedule Details</h3>';		
	}
	else{
		$out.='<script type="text/javascript">';
		$out.='window.tabs = "yes";';
		$out.='window.total_tabs = "'.esc_js($scheduleCount).'";';
		$out.='</script>';
		$out.='<script type="text/javascript">window.globalcbpFWTabsActive ="yes";';
		$out.='window.globalcbpFWTabs = "'.esc_js($schedule_id).'";</script>';
		wp_enqueue_script('cbpFWTabs-js', CHILD_URI.'site/js/cbpFWTabs.js',array("jquery-js"),array(),true);
	}
	
	return $out;
}

	
/*mtheme_speakers*/
add_shortcode('event_schedules', 'mtheme_schedules_func');
function mtheme_schedules_func($atts) {
	
	extract(shortcode_atts(array(
		'title' => '',
		'content' => '',
		'number' => '-1',
		'order' => 'menu_order',
		'category' => '',
		'status' => '',
		'background_image' => '',
		'background_color' => '',
		'primary_color'   => '',
		'secondary_color'	=> '',
		'heading_color'   => '',
		'content_color'	=> '',
		
    ), $atts));
		
	$texanomy=null;
	if(!empty($category)) {			
		
		$category=intval($category);
		if(empty($category))
		{
			$texanomy = get_term_by('slug',$category,'schedule_cat');		
		}
		else{
			$texanomy = get_term_by('term_id',$category,'schedule_cat');			
		}		
	}	
	
	if($texanomy)
	{
		if(empty($title))
		{
			$title=$texanomy->name;
		}
		if(empty($content))
		{
			$content=$texanomy->description;
		}
		if(empty($background_image))
		{
			$background_image=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'sch_'.'bg_img','');	
		}
		if(empty($background_color))
		{
			$background_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'sch_'.'bg_color',MthemeCore::getOption("background_color","#FFFFFF"));	
		}	
		if(empty($heading_color))
		{
			$heading_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'sch_'.'p_color',MthemeCore::getOption("heading_color","#FFFFFF"));
		}
		if(empty($content_color))
		{
			$content_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'sch_'.'s_color',MthemeCore::getOption("content_color","#FFFFFF"));
		}	
	}
	else{
		if(empty($title))
		{
			$title='Schedule';
		}
		if(empty($background_color))
		{
			$background_color=MthemeCore::getOption("background_color","#FFFFFF");
		}
	}
	
	if(empty($background_color) || $background_color=='#')
	{
		$background_color=MthemeCore::getOption("background_color","#FFFFFF");	
	}
	if(empty($heading_color) || $heading_color=='#')
	{
		$heading_color=MthemeCore::getOption("heading_color","#363738");
	}
	if(empty($content_color) || $content_color=='#')
	{
		$content_color=MthemeCore::getOption("content_color","#5f6061");	
	}

	$out='';
	
	if(!empty($background_image))
	{
		$out.='<section style="background-image:url(\''.esc_url($background_image).'\');" class="schedules text-center section-padding-top">';
	}
	else{
		$out.='<section style="background-color:'.esc_attr($background_color).';" class="schedules text-center section-padding-top">';
	}
	
	if(!empty($title) || !empty($content)){
		$out.='<div class="container wow animated fadeInLeft bottom-spacing">';
			$out.='<div class="row">';
				$out.='<div class="col-md-8 align-center wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">';
					if(!empty($title)){ $out.='<h1 style="color:'.esc_attr($heading_color).'">'.mtheme_html($title).'</h1><hr>'; }
					if(!empty($content)) { $out.='<p style="color:'.esc_attr($content_color).'">'.mtheme_html($content).'</p>'; }
				$out.='</div>';
			$out.='</div>';
		$out.='</div>';
	}
	
	$out.='<div class="container-schedule container wow animated fadeInDown animated" data-wow-duration="1s" data-wow-delay="1s">';
	$out.=mtheme_schedules($atts);
	$out.='</div>';
	
	$out.='</section>';
	
	return $out;	
}



/*speakers*/
add_shortcode('speakers', 'mtheme_speakers');
function mtheme_speakers($atts) {
	$haveSpeakerInGallery=false;
	extract(shortcode_atts(array(
		'number' => '-1',
		'order' => 'menu_order',
		'category' => '',
		'status' => '',
		'thumbnail_width' => 370,
		'thumbnail_height' => 255,
		'speaker_title' => '',
		'speaker_title_position' => '',
		'speaker_designation' => '',
		'speaker_designation_position' => '',
		'detailed_popup' => '',
		'hover_background_color' => '',
		'primary_color' => '',
		'secondary_color' => ''
    ), $atts));
	
	if($order=='random') {
		$order='rand';
	}
		
	$args=array(
		'post_type' => 'speaker',
		'post_status' => 'publish',
		'showposts' => $number,	
		'orderby' => $order,
		'order' => 'ASC',
		'meta_query' => array(
			array(
				'key' => '_thumbnail_id',
			),
		),
		
	);
	
	if(!empty($status)) {
		$args['meta_query'][]=array(
            'key' => 'speaker_status',
			'value' => $status,
        );
	}
	
	$texanomy= null;
	if(!empty($category)) {
		
		$category_int=intval($category);
		if(empty($category_int))
		{			
			$texanomy = get_term_by('slug',$category,'speaker_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'speaker_cat',
					'terms' => $category,
					'field' => 'slug',
				);
			}
			
		}
		else{			
			$texanomy = get_term_by('term_id',$category,'speaker_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'speaker_cat',
					'terms' => $category_int,
					'field' => 'term_id',
				);
			}
		}				
	}
	if($texanomy)
	{		
		if(empty($speaker_title))
		{
			$speaker_title=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spk_'.'title','show');	
		}
		if(empty($speaker_title_position))
		{
			$speaker_title_position=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spk_'.'title_position','bottom');	
		}
		if(empty($speaker_designation))
		{
			$speaker_designation=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spk_'.'designation','show');	
		}
		if(empty($speaker_designation_position))
		{
			$speaker_designation_position=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spk_'.'designation_position','bottom');	
		}
		if(empty($detailed_popup))
		{
			$detailed_popup=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spk_'.'detailed_popup','yes');	
		}
		if(empty($hover_background_color))
		{
			$hover_background_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spk_'.'hover_background_color',MthemeCore::getOption('secondary_color','#1bd982'));	
		}
		if(empty($primary_color))
		{
			$primary_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spk_'.'primary_color',MthemeCore::getOption('secondary_color','#1bd982'));	
		}
		if(empty($secondary_color))
		{
			$secondary_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spk_'.'secondary_color',MthemeCore::getOption('primary_color','#ffffff'));	
		}		
	}
	else{
		if(empty($speaker_title))
		{
			$speaker_title='show';
		}
		if(empty($speaker_title_position))
		{
			$speaker_title_position='bottom';
		}
		if(empty($speaker_designation))
		{
			$speaker_designation='show';
		}
		if(empty($speaker_designation_position))
		{
			$speaker_designation_position='bottom';
		}
		if(empty($detailed_popup))
		{
			$detailed_popup='yes';
		}
	}
	
	if(empty($hover_background_color) || $hover_background_color=='#')
	{
		$hover_background_color=MthemeCore::getOption('secondary_color','#1bd982');	
	}
	if(empty($primary_color) || $primary_color=='#')
	{
		$primary_color=MthemeCore::getOption('secondary_color','#1bd982');	
	}
	if(empty($secondary_color) || $secondary_color=='#')
	{
		$secondary_color=MthemeCore::getOption('primary_color','#ffffff');	
	}
	
	
	$query=new WP_Query($args);
	
	$totalSpeakers=$query->found_posts;
	$speakerDetails='';
	$speakersPerSlide = 3;
	$speakerNo = 0;	
	$totalEquelsSlides=intval($totalSpeakers/$speakersPerSlide)*$speakersPerSlide;
	
	$micosec = uniqid();	
	$unique_id="speaker_$micosec";	
	
	
	$out='<div id="'.esc_attr($unique_id).'" class="row-wrap"><ul class="slides"><li>';
		
	while($query->have_posts()){
		
		if($speakerNo != 0 && $speakerNo % $speakersPerSlide == 0)
		{
			$out.='</li><li>';
		}		
		$class=' col-lg-4 col-md-4 col-sm-12 col-xs-12';

		if( $speakerNo >= $totalEquelsSlides && $totalSpeakers%$speakersPerSlide!=0 
		&& $totalSpeakers-$speakerNo < $speakersPerSlide && $speakerNo%$speakersPerSlide==0)
		{
			switch($totalSpeakers-$speakerNo)
			{
				case 2: $out.='<div class="col-lg-2 col-md-2 col-sm-0 col-xs-0"></div>';break;
				case 1: $out.='<div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>';break;
			}
		}
		$speakerNo++;
		
		
		$query->the_post();	
		$haveSpeakerInGallery=true;
		ob_start();
		
		$out.='<div class="wow animated fadeInUp'.esc_attr($class).'" data-wow-duration="1s" data-wow-delay="0.5s">';
		
		if(($speaker_title=='show' && $speaker_title_position=='top') || ($speaker_designation=='show' && $speaker_designation_position=='top'))
		{
			
			if($speaker_title=='show' && $speaker_title_position=='top')
			{
				$out.='<h2 style="color:'.esc_attr($primary_color).'">'.get_the_title(get_the_ID()).'</h2>';
			}
			if($speaker_designation=='show' && $speaker_designation_position=='top')
			{
				$out.='<p style="color:'.esc_attr($secondary_color).'" class="padding-bottom-45">'.MthemeCore::getPostMeta(get_the_ID(),"speaker_designation").'</p>';
			}
			
			
		}
		
		$out.='<div class="overlay-effect effects clearfix"><div class="img">';
		$out.=get_the_post_thumbnail(get_the_ID(),array($thumbnail_width,$thumbnail_height));
		if($detailed_popup=='yes')
		{
			$out.='<div class="overlay" style="background: none repeat scroll 0 0 '.esc_attr($hover_background_color).';">';
			$out.='<button class="md-trigger expand" data-modal="'.esc_attr($unique_id).'_speaker_'.esc_attr($speakerNo).'"><i class="fa fa-search"></i><br>View More</button>';
			$speakerDetails.='<div>';
			$speakerDetails.='<div class="md-modal md-effect-9" id="'.esc_attr($unique_id).'_speaker_'.esc_attr($speakerNo).'">';
			$speakerDetails.='<div class="md-content">';
			$speakerDetails.='<div class="folio">';
			$speakerDetails.='<div class="avatar">'.get_the_post_thumbnail(get_the_ID(),array(103,103)).'</div>';
			$speakerDetails.='<div class="sp-name"><strong>'.get_the_title(get_the_ID()).'</strong><br/>'.MthemeCore::getPostMeta(get_the_ID(),"speaker_designation").'</div>';
			$speakerDetails.='<div class="sp-dsc">'.get_the_content(get_the_ID()).'</div>';
			if(!MthemeCore::isPostMetaEmpty(get_the_ID(),'speaker_twitter') || !MthemeCore::isPostMetaEmpty(get_the_ID(),'speaker_twitter') ||
			!MthemeCore::isPostMetaEmpty(get_the_ID(),'speaker_twitter')) {
				$speakerDetails.='<div class="sp-social"><ul>';
				if(!MthemeCore::isPostMetaEmpty(get_the_ID(),'speaker_twitter')){
					$speakerDetails.='<li><a href="'.esc_url(MthemeCore::getPostMeta(get_the_ID(),"speaker_twitter")).'" class="social-btn"><i class="fa fa-twitter"></i></a></li>';
				}
				if(!MthemeCore::isPostMetaEmpty(get_the_ID(),'speaker_facebook')){
					$speakerDetails.='<li><a href="'.esc_url(MthemeCore::getPostMeta(get_the_ID(),"speaker_facebook")).'" class="social-btn"><i class="fa fa-facebook"></i></a></li>';
				}
				if(!MthemeCore::isPostMetaEmpty(get_the_ID(),'speaker_dribbble')){
					$speakerDetails.='<li><a href="'.esc_url(MthemeCore::getPostMeta(get_the_ID(),"speaker_dribbble")).'" class="social-btn"><i class="fa fa-dribbble"></i></a></li>';
				}
				$speakerDetails.='</ul></div>';			
			}
			$speakerDetails.='<button class="md-close"><i class="fa fa-times"></i></button></div></div></div><div class="md-overlay"></div>';
			$speakerDetails.='</div>';
			$out.='</div>';
		}
		$out.='</div></div>';
		if(($speaker_title=='show' && $speaker_title_position=='bottom') || ($speaker_designation=='show' && $speaker_designation_position=='bottom'))
		{
			
			if($speaker_title=='show' && $speaker_title_position=='bottom')
			{
				$out.='<h2 style="color:'.esc_attr($primary_color).'">'.get_the_title(get_the_ID()).'</h2>';
			}
			if($speaker_designation=='show' && $speaker_designation_position=='bottom')
			{
				$out.='<p style="color:'.esc_attr($secondary_color).'" class="padding-bottom-45">'.MthemeCore::getPostMeta(get_the_ID(),"speaker_designation").'</p>';
			}
			
		}
		
		$out.='</div>';
		
		
		ob_end_clean();
	}
	
	
	if(!$haveSpeakerInGallery)
	{		
		$out.='<h3>No Speakers</h3>';		
	}

	$out.='</li></ul></div>';
	$out.=$speakerDetails;

	if($haveSpeakerInGallery)
	{
		$out.='<script type="text/javascript">window.globalSpeakersSliderActive ="yes";';
		$out.='window.globalSpeakersSlider = "#'.esc_js($unique_id).'";</script>';
		wp_enqueue_script('jquery.flexslider-js', CHILD_URI.'site/js/jquery.flexslider.js',array("jquery-js"),array(),true);
	}	
	
	return $out;
}



/*mtheme_speakers*/
add_shortcode('event_speakers', 'mtheme_speakers_func');
function mtheme_speakers_func($atts) {
	
	extract(shortcode_atts(array(
		'title' => '',
		'content' => '',
		'number' => '-1',
		'order' => 'menu_order',
		'category' => '',
		'status' => '',
		'background_image' => '',
		'background_color' => '',
		'primary_color'   => '',
		'secondary_color'	=> '',
		'heading_color'   => '',
		'content_color'	=> '',
    ), $atts));
		
	$texanomy=null;
	if(!empty($category)) {			
	
		$category=intval($category);
		if(empty($category))
		{
			$texanomy = get_term_by('slug',$category,'speaker_cat');		
		}
		else{
			$texanomy = get_term_by('term_id',$category,'speaker_cat');			
		}
				
	}
	
	if($texanomy)
	{
		if(empty($title))
		{
			$title=$texanomy->name;
		}
		if(empty($content))
		{
			$content=$texanomy->description;
		}
		if(empty($background_image))
		{
			$background_image=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spk_'.'bg_img','');	
		}
		if(empty($background_color))
		{
			$background_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spk_'.'bg_color','#212739');	
		}
		if(empty($heading_color))
		{
			$heading_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spk_'.'p_color',MthemeCore::getOption("heading_color","#FFFFFF"));
		}
		if(empty($content_color))
		{
			$content_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'spk_'.'s_color',MthemeCore::getOption("content_color","#FFFFFF"));
		}		
	}
	else{
		if(empty($title))
		{
			$title='Speakers';
		}
		if(empty($background_color))
		{
			$background_color=MthemeCore::getOption("background_color","#212739");
		}
	}
	
	if(empty($background_color) || $background_color=='#')
	{
		$background_color=MthemeCore::getOption("background_color","#212739");	
	}
	if(empty($heading_color) || $heading_color=='#')
	{
		$heading_color=MthemeCore::getOption("heading_color","#363738");
	}
	if(empty($content_color) || $content_color=='#')
	{
		$content_color=MthemeCore::getOption("content_color","#5f6061");	
	}	
	
	$out='';
	
	if(!empty($background_image))
	{
		$out.='<section style="background-image:url(\''.esc_url($background_image).'\');" class="speakers text-center section-padding">';
	}
	else{
		$out.='<section style="background-color:'.esc_attr($background_color).';" class="speakers text-center section-padding">';
	}
	

	$out.='	<div class="container">';
	if(!empty($title) || !empty($content)){
		$out.='<div class="row">';
		$out.='<div class="col-md-8 align-center wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">';
		if(!empty($title)){ $out.='<h1 style="color:'.esc_attr($heading_color).'">'.mtheme_html($title).'</h1><hr>'; }
		if(!empty($content)) { $out.='<p style="color:'.esc_attr($content_color).'">'.mtheme_html($content).'</p>'; }
		$out.='</div>';
	}
	$out.=mtheme_speakers($atts);
	$out.='</div>';
	$out.='</div>';
	$out.='</section>';
	
	return $out;	
}


/*packages*/
add_shortcode('packages', 'mtheme_packages');
function mtheme_packages($atts) {
	
	extract(shortcode_atts(array(
		'number' => '-1',
		'order' => 'menu_order',
		'category' => '',
		'status' => '',
		'register_title' => '',	
		'register_link' => '',
    ), $atts));
	
	
	$pre='package_';

	if(empty($register_title))
	{
		$register_title="Register";
	}	
	if(empty($register_link))
	{
		$register_link="#register_me";
	}
	$register_link_inner=substr($register_link, 0, 1);
	if($register_link_inner=='#')
	{
		$register_link=' data-scroll href="'.esc_url($register_link).'"';
	}
	else
	{
		$register_link=' href="'.esc_url($register_link).'"';
	}

	if($order=='random') {
		$order='rand';
	}
		
	$args=array(
		'post_type' => 'package',
		'post_status' => 'publish',
		'showposts' => $number,	
		'orderby' => $order,
		'order' => 'ASC'		
	);
	
	if(!empty($status)) {
		$args['meta_query'][]=array(
            'key' => 'package_status',
			'value' => $status,
        );
	}
	
	$texanomy= null;	
	$haveItems=false;
	$micosec = uniqid();	
	$uniqid_id="package_$micosec";
	
	if(!empty($category)) {		
	
		$category_int=intval($category);
		if(empty($category_int))
		{
			
			$texanomy = get_term_by('slug',$category,'package_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'package_cat',
					'terms' => $category,
					'field' => 'slug',
				);
			}
		}
		else{
			
			$texanomy = get_term_by('term_id',$category,'package_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'package_cat',
					'terms' => $category_int,
					'field' => 'term_id',
				);
			}
		}
	} 
	$query=new WP_Query($args);
	
		
	$totalPackages=$query->found_posts;
	$packagesPerSlide = 4;
	$packageNo = 0;
	$totalEquelsPackages=intval($totalPackages/$packagesPerSlide)*$packagesPerSlide;
	
	$out='<div class="row row-wrap '.esc_attr($totalPackages).'"><ul class="slides">';
			
	while($query->have_posts()){
		
		$query->the_post();	
		$haveItems=true;
		ob_start();
		
		if( $packageNo >= $totalEquelsPackages && $totalPackages%$packagesPerSlide!=0
		&& $totalPackages-$packageNo < $packagesPerSlide && $packageNo%$packagesPerSlide==0)
		{
			switch($totalPackages-$packageNo)
			{
				case 3: $out.='<li class="col-lg-1_5 col-sm-0 col-xs-0"></li>';break;
				case 2: $out.='<li class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></li>';break;
				case 1: $out.='<li class="col-lg-4_5 col-sm-0 col-xs-0"></li>';break;
			}
		}
		$packageNo++;
		
	
		$price=MthemeCore::getPostMeta(get_the_ID(),$pre."price",'$100');
		$primary_heading_background_color=MthemeCore::getPostMeta(get_the_ID(),$pre."primary_heading_background_color",MthemeCore::getOption("background_color","#212739"));
		$secondary_heading_background_color=MthemeCore::getPostMeta(get_the_ID(),$pre."secondary_heading_background_color",MthemeCore::getOption("background_color","#212739"));
		$heading_color=MthemeCore::getPostMeta(get_the_ID(),$pre."heading_color",MthemeCore::getOption("heading_color","#ffffff"));
		$content_background_color=MthemeCore::getPostMeta(get_the_ID(),$pre."content_background_color",MthemeCore::getOption("background_color","#212739"));
		$content_color=MthemeCore::getPostMeta(get_the_ID(),$pre."content_color",MthemeCore::getOption("content_color","#212639"));
		$button_background_color=MthemeCore::getPostMeta(get_the_ID(),$pre."button_background_color",MthemeCore::getOption("background_color","#212739"));
		$button_heading_color=MthemeCore::getPostMeta(get_the_ID(),$pre."button_heading_color",MthemeCore::getOption("heading_color","#ffffff"));
		
		$out.='<li>';
		$out.='<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s">';
		$out.='<ul class="planContainer pack-'.$packageNo.'" style="background-color:'.esc_attr($content_background_color).'">';
		$out.='<li class="title">';
		$out.='<h2 style="background-color:'.esc_attr($primary_heading_background_color).';color:'.esc_attr($heading_color).';">';
		$out.=$price.'</h2></li>';
		$out.='<li class="price"><p style="background-color:'.esc_attr($secondary_heading_background_color).';color:'.esc_attr($heading_color).';">'.get_the_title().'</p></li>';
		$out.='<li style="color:'.esc_attr($content_color).'">'.get_the_content().'</li>';
		$out.='<li class="button">';
		$out.='<a class="btn-effect register-botton" style="background-color:'.esc_attr($button_background_color).';color:'.esc_attr($button_heading_color).';"'.mtheme_html_content($register_link).'>'.mtheme_html($register_title).'</a></li>';
		$out.='</ul></div>';		
		$out.='</li>';		
		
		ob_end_clean();
	}
	
	
	if(!$haveItems)
	{		
		$out='<h3>No Packages</h3>';		
	}
	
	$out.='</ul></div>';
	
	return $out;
}

/*mtheme_packages*/
add_shortcode('event_packages', 'mtheme_packages_func');
function mtheme_packages_func($atts) {
	
	extract(shortcode_atts(array(
		'title' => '',
		'content' => '',
		'number' => '-1',
		'order' => 'menu_order',
		'category' => '',
		'status' => '',
		'background_image' => '',
		'background_color' => '',
		'heading_color'   => '',
		'content_color'	=> '',
    ), $atts));
		
	$texanomy=null;
	if(!empty($category)) {	
	
		$category=intval($category);
		if(empty($category))
		{
			$texanomy = get_term_by('slug',$category,'package_cat');
		}
		else{
			$texanomy = get_term_by('term_id',$category,'package_cat');		
		}
	}	
	
	if($texanomy)
	{
		if(empty($title))
		{
			$title=$texanomy->name;
		}
		if(empty($content))
		{
			$content=$texanomy->description;
		}
		if(empty($background_image))
		{
			$background_image=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'pck_'.'bg_img','');	
		}
		if(empty($background_color))
		{
			$background_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'pck_'.'bg_color','#FFFFFF');	
		}
		if(empty($heading_color))
		{
			$heading_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'pck_'.'p_color','#363738');
		}
		if(empty($content_color))
		{
			$content_color=get_tax_meta($texanomy->term_id,MTHEME_PREFIX.'pck_'.'s_color','#5f6061');
		}						
	}
	else{
		if(empty($title))
		{
			$title='Packages';
		}
		if(empty($background_color))
		{
			$background_color=MthemeCore::getOption("primary_color","#FFFFFF");
		}
		
	}
	
	if(empty($background_color) || $background_color=='#')
	{
		$background_color="#FFFFFF";	
	}
	if(empty($heading_color) || $heading_color=='#')
	{
		$heading_color=MthemeCore::getOption("heading_color","#363738");
	}
	if(empty($content_color) || $content_color=='#')
	{
		$content_color=MthemeCore::getOption("content_color","#5f6061");	
	}
	
	$out='';
	if(!empty($background_image))
	{
		$out.='<section style="background-image:url(\''.esc_url($background_image).'\');" class="packages text-center section-padding">';
	}
	else{
		$out.='<section style="background-color:'.esc_attr($background_color).';" class="packages text-center section-padding">';
	}
	

	$out.='	<div class="container">';
	if(!empty($title) || !empty($content)){
		$out.='<div class="row">';
		$out.='<div class="col-md-8 align-center wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">';
		if(!empty($title)){ $out.='<h1 style="color:'.esc_attr($heading_color).'">'.mtheme_html($title).'</h1><hr>'; }
		if(!empty($content)) { $out.='<p style="color:'.esc_attr($content_color).'">'.mtheme_html($content).'</p>'; }
		$out.='</div>';
	}
	$out.=mtheme_packages($atts);
	$out.='</div>';
	$out.='</div>';
	$out.='</section>';
	
	return $out;	
}

/*mtheme_contact*/
add_shortcode('footer_contact','mtheme_contact');
function mtheme_contact($atts, $content=null) {	
	
	extract(shortcode_atts(array(
		'contact_title'     => '',
		'contact_desc'     => '',
		'contact_add'     => '',
		'contact_phone'     => '',
		'contact_email'     => '',
		'contact_gmap'     => '',
		'contact_dribble'     => '',
		'contact_twitter'     => '',
		'contact_fb'     => '',
		'contact_skype'     => '',
		'background_image' => '',
		'background_color' => '',
		'primary_color'   => '',
		'secondary_color'	=> '',
		'heading_color'   => '',
		'content_color'	=> '',
    ), $atts));
	
	
	$out='';
		
	if(empty($background_image))
	{
		$background_image=MthemeCore::getOption("contact_bg_img","");
	}
	if(empty($background_color))
	{
		$background_color=MthemeCore::getOption("contact_bg_color","#212739");
	}
	if(empty($primary_color))
	{
		$primary_color=MthemeCore::getOption("contact_p_color","#FFFFFF");
	}
	if(empty($secondary_color))
	{
		$secondary_color=MthemeCore::getOption("contact_s_color","#1bce7c");
	}
		
	if(empty($contact_title))
	{
		$contact_title=MthemeCore::getOption("contact_title",'');
	}
	if(empty($contact_desc))
	{
		$contact_desc=MthemeCore::getOption("contact_desc",'');
	}
	if(empty($contact_add))
	{
		$contact_add=MthemeCore::getOption("contact_add",'');
	}
	if(empty($contact_phone))
	{
		$contact_phone=MthemeCore::getOption("contact_phone",'');
	}
	if(empty($contact_email))
	{
		$contact_email=MthemeCore::getOption("contact_email",'');
	}
	if(empty($contact_gmap))
	{
		$contact_gmap=MthemeCore::getOption("contact_gmap",'');
	}
	if(empty($contact_dribble))
	{
		$contact_dribble=MthemeCore::getOption("contact_dribble",'');
	}
	if(empty($contact_twitter))
	{
		$contact_twitter=MthemeCore::getOption("contact_twitter",'');
	}
	if(empty($contact_fb))
	{
		$contact_fb=MthemeCore::getOption("contact_fb",'');
	}
	if(empty($contact_skype))
	{
		$contact_skype=MthemeCore::getOption("contact_skype",'');
	}
	if(empty($heading_color))
	{
		$heading_color=MthemeCore::getOption("heading_color","#363738");
	}
	if(empty($content_color))
	{
		$content_color=MthemeCore::getOption("content_color","#5f6061");
	}
	
	if(!empty($contact_title) || !empty($contact_desc) || !empty($contact_add) || !empty($contact_phone) || !empty($contact_email)
	 || !empty($contact_gmap) || !empty($contact_dribble) || !empty($contact_twitter) || !empty($contact_fb) || !empty($contact_skype))
	{
	
		$micosec = uniqid();	
		$unique_id="contact_$micosec";
		
		if(!empty($background_image))
		{
			$out.='<section id="'.esc_attr($unique_id).'" style="background-image:url(\''.esc_url($background_image).'\');" class="text-center section-padding contact-wrap">';
		}
		else{
			$out.='<section id="'.esc_attr($unique_id).'" style="background-color:'.esc_attr($background_color).';" class="text-center section-padding contact-wrap">';
		}	
		
		
		$out.='<div class="container">';
		if(!empty($contact_title) || !empty($contact_desc)){
			$out.='<div class="row">';
				$out.='<div class="col-md-8 wow animated fadeInLeft align-center" data-wow-duration="1s" data-wow-delay="0.3s">';
					$out.='<h1 style="color:'.esc_attr($heading_color).'">'.mtheme_html($contact_title).'</h1><hr>';
					$out.='<p style="color:'.esc_attr($content_color).'">'.mtheme_html($contact_desc).'</p>';
				$out.='</div>';
			$out.='</div>';
		} if(!empty($contact_add) || !empty($contact_phone) || !empty($contact_email)){ 
			$contactDC=0;
			$class=" col-md-4";		
			if(!empty($contact_add)) $contactDC++;
			if(!empty($contact_phone)) $contactDC++;
			if(!empty($contact_email)) $contactDC++;
			switch($contactDC)
			{
				case 1:$class=" col-md-4 align-center";break;
				case 2:$class=" col-md-6";break;
			}
			
			$out.='<div class="row contact-details">';
			if(!empty($contact_add)){
				$out.='<div class="wow animated fadeInDown'.esc_attr($class).'" data-wow-duration="1s" data-wow-delay="0.5s">';
					$out.='<div class="light-box box-hover">';
						$out.='<h2><span>Address</span></h2>';
						$out.='<p style="color:'.esc_attr($content_color).'">'.mtheme_html($contact_add).'</p>';
					$out.='</div>';
				$out.='</div>';
			} if(!empty($contact_phone)){
				$out.='<div class="wow animated fadeInDown'.esc_attr($class).'" data-wow-duration="1s" data-wow-delay="0.7s">';
					$out.='<div class="light-box box-hover">';
						$out.='<h2><span>Phone</span></h2>';
						$out.='<p style="color:'.esc_attr($content_color).'">'.mtheme_html($contact_phone).'</p>';
					$out.='</div>';
				$out.='</div>';
			} if(!empty($contact_email)){
				$out.='<div class="wow animated fadeInDown'.esc_attr($class).'" data-wow-duration="1s" data-wow-delay="0.9s">';
					$out.='<div class="light-box box-hover">';
						$out.='<h2><span>Email</span></h2>';
						$out.='<p style="color:'.esc_attr($content_color).'">'.mtheme_html($contact_email).'</p>';
					$out.='</div>';
				$out.='</div>';
			}
			$out.='</div>';
		} if(!empty($contact_gmap)){
			$out.='<div class="row">';
			$out.='<a class="learn-more-btn btn-effect get_directions" href="'.esc_url($contact_gmap).'" target="_blank"><i class="fa fa-map-marker"></i><span>Get Directions</span></a>';
			$out.='</div>';
		}
		if(!empty($contact_dribble) || !empty($contact_twitter) || !empty($contact_fb) || !empty($contact_skype)){
			$out.='<div class="row">';
				$out.='<div class="col-md-12">';
					$out.='<ul class="social-buttons">';
						if(!empty($contact_dribble)){
						$out.='<li><a href="'.esc_url($contact_dribble).'" class="social-btn" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
						} if(!empty($contact_twitter)){
						$out.='<li><a href="'.esc_url($contact_twitter).'" class="social-btn" target="_blank"><i class="fa fa-twitter"></i></a></li>';
						} if(!empty($contact_fb)){
						$out.='<li><a href="'.esc_url($contact_fb).'" class="social-btn" target="_blank"><i class="fa fa-facebook"></i></a></li>';
						} if(!empty($contact_skype)){
						$out.='<li><a href="'.esc_url($contact_skype).'" class="social-btn" target="_blank"><i class="fa fa-skype"></i></a></li>';
						}
					$out.='</ul>';
				$out.='</div>';
			$out.='</div>';
		}
		$out.='</div></section>';
	}
	
	return $out;
}


/*hero_background*/
add_shortcode('hero_background','hero_background');
function hero_background($atts, $content=null) {	
	
	extract(shortcode_atts(array(
		'slider_id'=>'',
		'logo_position'     => '',
		'register_title'=>'',
		'register_link'=>'',
		'type'     => '',
		'slider_effect'     => '',
		'slider_description'     => '',
		'slider_know_more'     => '',
		'videoUrl'     => '',
		'youtubeID'     => '',		 
		'slider_title' => '',		
		'slider_content'   => '',
		'primary_color'	=> '',
		'height' => '',
    ), $atts));
	$out='';
	if(empty($slider_description))
	{
		$slider_description=MthemeCore::getPostMeta($slider_id,"event_slider_description","content");
	}	
	if($slider_description=='date')
	{
		$lD=MthemeCore::getPostMeta($slider_id,'event_slider_date','2020/12/21 12:00');
		$out.='<script type="text/javascript">';
		$out.='window.globalDateVar = "'.esc_js($lD).'";';
		$out.='</script>';
		
	}
	if(empty($slider_effect))
	{
		$slider_effect=MthemeCore::getPostMeta($slider_id,"event_slider_effect", 'image');
	}
	if($slider_effect=='rain')
	{
		$lD=MthemeCore::getOption('rain_img',CHILD_URI.'site/img/rain.jpg');
		$out.='<script type="text/javascript">';
		$out.='window.globalRainVar = "'.esc_url($lD).'";';
		$out.='</script>';		
		wp_enqueue_script('rainyday-js', CHILD_URI.'site/js/rainyday.js',array("jquery-js"),array(),true);
		wp_enqueue_script('rain-init-js', CHILD_URI.'site/js/rain-init.js',array("jquery-js"),array(),true);
	}
	if($slider_effect=='snow')
	{
		$lD=MthemeCore::getOption('snow_img',CHILD_URI.'site/img/ParticleSmoke.png');
		$out.='<script type="text/javascript">';
		$out.='window.globalSnowVar = "'.esc_url($lD).'";';
		$out.='</script>';
		wp_enqueue_script('ThreeCanvas-js', CHILD_URI.'site/js/ThreeCanvas.js',array("jquery-js"),array(),true);
		wp_enqueue_script('Snow-js', CHILD_URI.'site/js/Snow.js',array("jquery-js"),array(),true);
		wp_enqueue_script('snowfall-init-js', CHILD_URI.'site/js/snowfall-init.js',array("jquery-js"),array(),true);
	}
	if($slider_effect=='triangle')
	{
		$out.='<script type="text/javascript">';
		$out.='window.globalTriangleActive = "yes";';
		$out.='</script>';
		wp_enqueue_script('TweenLite-js', CHILD_URI.'site/js/TweenLite.min.js',array("jquery-js"),array(),true);
		wp_enqueue_script('EasePack-js', CHILD_URI.'site/js/EasePack.min.js',array("jquery-js"),array(),true);
		wp_enqueue_script('rAF-js', CHILD_URI.'site/js/rAF.js',array("jquery-js"),array(),true);
		wp_enqueue_script('canvas-js', CHILD_URI.'site/js/canvas.js',array("jquery-js"),array(),true);
	}
	
	if(empty($type))
	{
		$type=MthemeCore::getPostMeta($slider_id,"event_slider_type", 'image');
	}
	if(empty($slider_title))
	{
		$slider_title=MthemeCore::getPostMeta($slider_id,"event_slider_title",'');
	}
	if(empty($slider_content))
	{
		$slider_content=MthemeCore::getPostMeta($slider_id,"event_slider_content",'');
	}
	if(empty($primary_color))
	{
		$primary_color=MthemeCore::getPostMeta($slider_id,"event_slider_primary_color",'#FFFFFF');
	}
	if(empty($register_title))
	{
		$register_title=MthemeCore::getPostMeta($slider_id,"event_slider_event_link_title","Register");
	}
	if(empty($register_link))
	{
		$register_link=MthemeCore::getPostMeta($slider_id,"event_slider_event_link","#register_me");
	}
	
	$register_link_inner=substr($register_link, 0, 1);
	if($register_link_inner=='#')
	{
		$register_link=' data-scroll href="'.esc_url($register_link).'"';
	}
	else
	{
		$register_link=' href="'.esc_url($register_link).'"';
	}
	if(empty($slider_know_more))
	{
		$slider_know_more=MthemeCore::getPostMeta($slider_id,"event_slider_know_more","link");
	}

	$micosec = uniqid();
	$unique_id="slider_$micosec";
	
	if(empty($height))
	{
		$out.='<section class="autoheight home_slider">';		
		$out.='<section class="inner-slider">';
	}
	else{
		$out.='<section class="home_slider" style="height:'.esc_attr($height).';">';
		$out.='<section class="inner-slider">';
	}
	
	
	$hasSliderEmpty=false;
	if($type=='slider') {
		$hasSliderEmpty=true;
		wp_enqueue_style('superslides-style', CHILD_URI.'site/css/superslides.css');
		wp_enqueue_script('jquery.superslides-js', CHILD_URI.'site/js/jquery.superslides.js',array("jquery-js"),array(),true);
		
		$args=array(
			'post_type' =>'slide',
			'showposts' => -1,
			'order' => 'ASC',
			'meta_query' => array(
				array(
					'key' => '_thumbnail_id',
				),
			),
		);
		
		
		$category=MthemeCore::getPostMeta($slider_id,"event_slider_slides_cat");
		if(!empty($category)) {
			
			$category_int=intval($category);
			if(empty($category_int))
			{				
				$texanomy = get_term_by('slug',$category,'slide_cat');
				if($texanomy!=null)
				{
					$args['tax_query'][]=array(
						'taxonomy' => 'slide_cat',
						'terms' => $category,
						'field' => 'slug',
					);
				}
			}
			else{				
				$texanomy = get_term_by('term_id',$category,'slide_cat');
				if($texanomy!=null)
				{
					$args['tax_query'][]=array(
						'taxonomy' => 'slide_cat',
						'terms' => $category_int,
						'field' => 'term_id',
					);
				}
			}
			
		}
		
		$query=new WP_Query($args);
		
		if($query->have_posts()) {
			$hasSliderEmpty=false;

			if(empty($background_image))
			{
				$background_image=MthemeCore::getPostMeta($slider_id,"event_slider_url",CHILD_URI.'site/img/backgrounds/bg1.jpg');
			}if(empty($overlay_image))
			{
				$overlay_image=MthemeCore::getPostMeta($slider_id,"event_slider_overlay_image",CHILD_URI.'site/img/backgrounds/bg_pattern.png');
			}
			
			$out.='<div id="'.esc_attr($unique_id).'">';
			$out.='<div class="slides-container">';	
			$c=0;
			while($query->have_posts()) {
				$query->the_post();
				$out.=get_the_post_thumbnail(get_the_ID(),'large');
			}
			$out.='</div>';
			$out.='<nav class="slides-navigation">';
			$out.='<a href="#" class="next  fa fa-2x fa-chevron-right"></a>';
			$out.='<a href="#" class="prev  fa fa-2x fa-chevron-left"></a>';
			$out.='</nav>';
			$out.='</div>';
			if(MthemeCore::getPostMeta($slider_id,"event_slider_overlay_active",'true')=='true'){
			$out.='<div class="slider_overlay" style="background-image:url(\''.esc_url($overlay_image).'\');"></div>';
			}
		
			if(!empty($slider_title) || !empty($slider_description)) {
		
				if($logo_position=='banner')
				{	
					$out.='<div class="col-lg-12 coming-landing-text-pos image_content align-center">';
					$out.='<a class="coming-brand" href="'.SITE_URL.'"><img src="'.MthemeCore::getOption("site_logo",CHILD_URI."site/img/logo.png").'" alt="logo"/></a>';
				}
				else
				{
					$out.='<div class="col-lg-12 landing-text-pos image_content align-center">';
				}
				if(!empty($slider_title)) {
					$out.='<h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s" style="color:'.esc_attr($primary_color).'">'.mtheme_html($slider_title).'</h1><hr id="title_hr"/>';
				}
				if( $slider_description=='content' ) {
					if(!empty($slider_content)) {
						$out.='<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s" style="color:'.esc_attr($primary_color).'">'.mtheme_html($slider_content).'</p>';
					}
				}else{
					$out.='<div id="defaultCountdown" class="clearfix"></div>';
				}
				if( $slider_know_more=='link' ) {					
					$out.='<a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s"'.mtheme_html_content($register_link).'>';
					$out.=mtheme_html($register_title).'</a>';
					$out.='</div>';
				}
				else{
								
					$out.='<div class="notify-by-email">';
					$out.='<div class="row form-notify">';
					$out.='<h2 class="notify">notify Me</h2>';
					$out.='<form action="'.AJAX_URL.'" method="POST" id="'.esc_attr($unique_id).'" class="ajax-form">';
					$out.='<div class="input-group col-lg-3 col-md-4 col-sm-6 col-xs-10 align-center">';
					$out.='<input type="text" class="form-control email-add" name="email" placeholder="Enter Email Address">';
					$out.='<span class="input-group-btn">';
					$out.='<button class="btn btn-default submit-button"><i class="icon-arrow right"><span></span></i></button>';					
					$out.='</span><input type="hidden" class="action" value="'.MTHEME_PREFIX.'notify_submit" />';
					$out.='</div>';	
					$out.='<div class="message"></div>';
					$out.='</form></div></div>';
				}		
			}
			$out.='<script type="text/javascript">';
			$out.='window.globalSlides = "#'.esc_js($unique_id).'";';
			$out.='window.globalSlidesActive = "yes";';
			$out.='</script>';
		}
	}elseif($type=='html5video') {

		if(empty($background_image))
		{
			$background_image=CHILD_URI.'site/img/backgrounds/bg1.jpg';
		}if(empty($overlay_image))
		{
			$overlay_image=MthemeCore::getPostMeta($slider_id,"event_slider_overlay_image",CHILD_URI.'site/img/backgrounds/bg_pattern.png');
		}
		if(empty($videoUrl))
		{
			$videoUrl=MthemeCore::getPostMeta($slider_id,"event_slider_url",CHILD_URI."site/video.mp4");
		}		
		if(MthemeCore::getPostMeta($slider_id,"event_slider_overlay_active",'true')=='true'){
			$out.='<div class="video_overlay" style="background-image:url(\''.esc_url($overlay_image).'\');"></div>';
		}
		
		$out.='<div class="video-bg" style="background-image:url(\''.esc_url($background_image).'\');"></div>';
		$out.='<video id="home_video"  autoplay="autoplay" loop >';
		$out.='<source src="'.esc_url($videoUrl).'" type="video/mp4">';
		$out.='<source src="'.esc_url($videoUrl).'" type="video/ogg">';
		$out.='your browser does not support HTML5';
		$out.='</video>';
		if(!empty($slider_title) || !empty($slider_description)) {
		
			if($logo_position=='banner')
			{	
				$out.='<div class="col-lg-12 coming-landing-text-pos image_content align-center">';
				$out.='<a class="coming-brand" href="'.SITE_URL.'"><img src="'.MthemeCore::getOption("site_logo",CHILD_URI."site/img/logo.png").'" alt="logo"/></a>';
			}
			else
			{
				$out.='<div class="col-lg-12 landing-text-pos image_content align-center">';
			}
			if(!empty($slider_title)) {
				$out.='<h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s" style="color:'.esc_attr($primary_color).'">'.mtheme_html($slider_title).'</h1><hr id="title_hr"/>';
			}
			if( $slider_description=='content' ) {
				if(!empty($slider_content)) {
					$out.='<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s" style="color:'.esc_attr($primary_color).'">'.mtheme_html($slider_content).'</p>';
				}
			}else{
				$out.='<div id="defaultCountdown" class="clearfix"></div>';
			}
			if( $slider_know_more=='link' ) {					
				$out.='<a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s"'.mtheme_html_content($register_link).'>';
				$out.=$register_title.'</a>';
				$out.='</div>';
			}
			else{
							
				$out.='<div class="notify-by-email">';
				$out.='<div class="row form-notify">';
				$out.='<h2 class="notify">notify Me</h2>';
				$out.='<form action="'.AJAX_URL.'" method="POST" id="'.esc_attr($unique_id).'" class="ajax-form">';
				$out.='<div class="input-group col-lg-3 col-md-4 col-sm-6 col-xs-10 align-center">';
				$out.='<input type="text" class="form-control email-add" name="email" placeholder="Enter Email Address">';
				$out.='<span class="input-group-btn">';
				$out.='<button class="btn btn-default submit-button"><i class="icon-arrow right"><span></span></i></button>';					
				$out.='</span><input type="hidden" class="action" value="'.MTHEME_PREFIX.'notify_submit" />';
				$out.='</div>';	
				$out.='<div class="message"></div>';
				$out.='</form></div></div>';
			}		
		}
	}elseif($type=='youtube') {

		if(empty($background_image))
		{
			$background_image=CHILD_URI.'site/img/backgrounds/bg1.jpg';
		}if(empty($overlay_image))
		{
			$overlay_image=MthemeCore::getPostMeta($slider_id,"event_slider_overlay_image",CHILD_URI.'site/img/backgrounds/bg_pattern.png');
		}
		if(empty($youtubeID))
		{
			$youtubeID=MthemeCore::getPostMeta($slider_id,"event_slider_url","Cg4lEyWlm28");
		}

		if(MthemeCore::getPostMeta($slider_id,"event_slider_overlay_active",'true')=='true'){
			$out.='<div class="youtube_overlay" style="background-image:url(\''.esc_url($overlay_image).'\');"></div>';
		}
		$out.='<div class="video-bg" style="background-image:url(\''.esc_url($background_image).'\');"></div>';
		
		$out.='<div class="youtube">';
		$out.='<div id="'.esc_attr($unique_id).'"></div>';
		$out.='</div>';
	
		if(!empty($slider_title) || !empty($slider_description)) {
		
			if($logo_position=='banner')
			{	
				$out.='<div class="col-lg-12 coming-landing-text-pos image_content align-center">';
				$out.='<a class="coming-brand" href="'.SITE_URL.'"><img src="'.MthemeCore::getOption("site_logo",CHILD_URI."site/img/logo.png").'" alt="logo"/></a>';
			}
			else
			{
				$out.='<div class="col-lg-12 landing-text-pos image_content align-center">';
			}
			if(!empty($slider_title)) {
				$out.='<h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s" style="color:'.esc_attr($primary_color).'">'.mtheme_html($slider_title).'</h1><hr id="title_hr"/>';
			}
			if( $slider_description=='content' ) {
				if(!empty($slider_content)) {
					$out.='<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s" style="color:'.esc_attr($primary_color).'">'.mtheme_html($slider_content).'</p>';
				}
			}else{
				$out.='<div id="defaultCountdown" class="clearfix"></div>';
			}
			if( $slider_know_more=='link' ) {					
				$out.='<a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s"'.mtheme_html_content($register_link).'>';
				$out.=mtheme_html($register_title).'</a>';
				$out.='</div>';
			}
			else{
							
				$out.='<div class="notify-by-email">';
				$out.='<div class="row form-notify">';
				$out.='<h2 class="notify">notify Me</h2>';
				$out.='<form action="'.AJAX_URL.'" method="POST" id="'.esc_attr($unique_id).'" class="ajax-form">';
				$out.='<div class="input-group col-lg-3 col-md-4 col-sm-6 col-xs-10 align-center">';
				$out.='<input type="text" class="form-control email-add" name="email" placeholder="Enter Email Address">';
				$out.='<span class="input-group-btn">';
				$out.='<button class="btn btn-default submit-button"><i class="icon-arrow right"><span></span></i></button>';					
				$out.='</span><input type="hidden" class="action" value="'.MTHEME_PREFIX.'notify_submit" />';
				$out.='</div>';	
				$out.='<div class="message"></div>';
				$out.='</form></div></div>';
			}		
		}
		$out.='<script type="text/javascript">';
		$out.='window.globalYoutubeMedia = "'.esc_js($youtubeID).'";';
		$out.='window.globalYoutubeId = "#'.esc_js($unique_id).'";';
		$out.='window.globalYoutubeActive = "yes";';
		$out.='</script>';		
		wp_enqueue_script('jquery.tubular-js', CHILD_URI.'site/js/jquery.tubular.1.0.js',array("jquery-js"),array(),true);

	}elseif($type=='html5video') {

		if(empty($background_image))
		{
			$background_image=CHILD_URI.'site/img/backgrounds/bg1.jpg';
		}if(empty($overlay_image))
		{
			$overlay_image=MthemeCore::getPostMeta($slider_id,"event_slider_overlay_image",CHILD_URI.'site/img/backgrounds/bg_pattern.png');
		}
		if(empty($videoUrl))
		{
			$videoUrl=MthemeCore::getPostMeta($slider_id,"event_slider_url",CHILD_URI."site/video.mp4");
		}		
		if(MthemeCore::getPostMeta($slider_id,"event_slider_overlay_active",'true')=='true'){
			$out.='<div class="video_overlay" style="background-image:url(\''.esc_url($overlay_image).'\');"></div>';
		}
		
		$out.='<div class="video-bg" style="background-image:url(\''.esc_url($background_image).'\');"></div>';
		$out.='<video id="home_video"  autoplay="autoplay" loop >';
		$out.='<source src="'.esc_url($videoUrl).'" type="video/mp4">';
		$out.='<source src="'.esc_url($videoUrl).'" type="video/ogg">';
		$out.='your browser does not support HTML5';
		$out.='</video>';
		if(!empty($slider_title) || !empty($slider_description)) {
		
			if($logo_position=='banner')
			{	
				$out.='<div class="col-lg-12 coming-landing-text-pos image_content align-center">';
				$out.='<a class="coming-brand" href="'.SITE_URL.'"><img src="'.MthemeCore::getOption("site_logo",CHILD_URI."site/img/logo.png").'" alt="logo"/></a>';
			}
			else
			{
				$out.='<div class="col-lg-12 landing-text-pos image_content align-center">';
			}
			if(!empty($slider_title)) {
				$out.='<h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s" style="color:'.esc_attr($primary_color).'">'.mtheme_html($slider_title).'</h1><hr id="title_hr"/>';
			}
			if( $slider_description=='content' ) {
				if(!empty($slider_content)) {
					$out.='<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s" style="color:'.esc_attr($primary_color).'">'.mtheme_html($slider_content).'</p>';
				}
			}else{
				$out.='<div id="defaultCountdown" class="clearfix"></div>';
			}
			if( $slider_know_more=='link' ) {					
				$out.='<a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s"'.mtheme_html_content($register_link).'>';
				$out.=mtheme_html($register_title).'</a>';
				$out.='</div>';
			}
			else{
							
				$out.='<div class="notify-by-email">';
				$out.='<div class="row form-notify">';
				$out.='<h2 class="notify">notify Me</h2>';
				$out.='<form action="'.AJAX_URL.'" method="POST" id="'.esc_attr($unique_id).'" class="ajax-form">';
				$out.='<div class="input-group col-lg-3 col-md-4 col-sm-6 col-xs-10 align-center">';
				$out.='<input type="text" class="form-control email-add" name="email" placeholder="Enter Email Address">';
				$out.='<span class="input-group-btn">';
				$out.='<button class="btn btn-default submit-button"><i class="icon-arrow right"><span></span></i></button>';					
				$out.='</span><input type="hidden" class="action" value="'.MTHEME_PREFIX.'notify_submit" />';
				$out.='</div>';	
				$out.='<div class="message"></div>';
				$out.='</form></div></div>';
			}		
		}
	}
	if($hasSliderEmpty || $type=='image') {

		if(empty($background_image))
		{
			$background_image=MthemeCore::getPostMeta($slider_id,"event_slider_url",CHILD_URI.'site/img/backgrounds/bg1.jpg');
		}if(empty($overlay_image))
		{
			$overlay_image=MthemeCore::getPostMeta($slider_id,"event_slider_overlay_image",CHILD_URI.'site/img/backgrounds/bg_pattern.png');
		}

		if(MthemeCore::getPostMeta($slider_id,"event_slider_overlay_active",'true')=='true'){
		$out.='<div class="image_overlay" style="background-image:url(\''.esc_url($overlay_image).'\');"></div>';
		}
		$out.='<div class="image-bg" style="background-image:url(\''.esc_url($background_image).'\');"></div>';
		if(!empty($slider_title) || !empty($slider_description)) {
		
			if($logo_position=='banner')
			{	
				$out.='<div class="col-lg-12 coming-landing-text-pos image_content align-center">';
				$out.='<a class="coming-brand" href="'.SITE_URL.'"><img src="'.MthemeCore::getOption("site_logo",CHILD_URI."site/img/logo.png").'" alt="logo"/></a>';
			}
			else
			{
				$out.='<div class="col-lg-12 landing-text-pos image_content align-center">';
			}
			if(!empty($slider_title)) {
				$out.='<h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s" style="color:'.esc_attr($primary_color).'">'.mtheme_html($slider_title).'</h1><hr id="title_hr"/>';
			}
			if( $slider_description=='content' ) {
				if(!empty($slider_content)) {
					$out.='<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s" style="color:'.esc_attr($primary_color).'">'.mtheme_html($slider_content).'</p>';
				}
			}else{
				$out.='<div id="defaultCountdown" class="clearfix"></div>';
			}
			if( $slider_know_more=='link' ) {					
				$out.='<a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s"'.mtheme_html_content($register_link).'>';
				$out.=mtheme_html($register_title).'</a>';
				$out.='</div>';
			}
			else{
							
				$out.='<div class="notify-by-email">';
				$out.='<div class="row form-notify">';
				$out.='<h2 class="notify">notify Me</h2>';
				$out.='<form action="'.AJAX_URL.'" method="POST" id="'.esc_attr($unique_id).'" class="ajax-form">';
				$out.='<div class="input-group col-lg-3 col-md-4 col-sm-6 col-xs-10 align-center">';
				$out.='<input type="text" class="form-control email-add" name="email" placeholder="Enter Email Address">';
				$out.='<span class="input-group-btn">';
				$out.='<button class="btn btn-default submit-button"><i class="icon-arrow right"><span></span></i></button>';					
				$out.='</span><input type="hidden" class="action" value="'.MTHEME_PREFIX.'notify_submit" />';
				$out.='</div>';	
				$out.='<div class="message"></div>';
				$out.='</form></div></div>';
			}		
		}
	}
	$out.='<script type="text/javascript">';
	$out.='window.header_transparent = "yes";';
	$out.='</script>';
	
	$out.='</section>';		
	if($slider_effect=='astronomy')
	{
		$dotColor=MthemeCore::getOption('dotColor','#919191');
		$lineColor=MthemeCore::getOption('lineColor','#919191');
		$lineWidth=MthemeCore::getOption('lineWidth','0.51');
		$particleRadius=MthemeCore::getOption('particleRadius','3');
		$out.='<script type="text/javascript">';
		$out.='window.dotColor = "'.esc_js($dotColor).'";';
		$out.='window.lineColor = "'.esc_js($lineColor).'";';
		$out.='window.lineWidth = "'.esc_js($lineWidth).'";';
		$out.='window.particleRadius = "'.esc_js($particleRadius).'";';
		$out.='</script>';
		$out.='<div id="particles"></div>';
		wp_enqueue_script('jquery.particleground-js', CHILD_URI.'site/js/jquery.particleground.min.js',array("jquery-js"),array(),true);
		wp_enqueue_script('astronomy-init-js', CHILD_URI.'site/js/astronomy-init.js',array("jquery-js"),array(),true);
	}
	$out.='</section><!--inner-slider-->';
	return $out;
}


/*home_events*/
add_shortcode('events', 'mtheme_events');
function mtheme_events($atts) {
	
	extract(shortcode_atts(array(
		'title' => '',
		'number' => '-1',
		'columns' => '4',
		'order' => 'menu_order',
		'category' => '',
		'status' => '',
		'thumbnail_width' => 431,
		'thumbnail_height' => 305
    ), $atts));
	
	if($order=='random') {
		$order='rand';
	}
		
	$args=array(
		'post_type' => 'event',
		'post_status' => 'publish',
		'showposts' => $number,	
		'orderby' => $order,
		'order' => 'ASC',
		'meta_query' => array(
			array(
				'key' => '_thumbnail_id',
			),
		),
		
	);
	
	
	if(!empty($status)) {
		$args['meta_query'][]=array(
            'key' => 'event_status',
			'value' => $status,
        );
	}
	
	$texanomy= null;	
	$haveItems=false;
	$micosec = uniqid();	
	$unique_id="event_$micosec";
	
	if(!empty($category)) {
	
		$category_int=intval($category);
		if(empty($category_int))
		{	
			$texanomy = get_term_by('slug',$category,'event_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'event_cat',
					'terms' => $category,
					'field' => 'slug',
				);
			}			
		}
		else{		
			$texanomy = get_term_by('term_id',$category,'event_cat');
			if($texanomy!=null)
			{
				$args['tax_query'][]=array(
					'taxonomy' => 'event_cat',
					'terms' => $category_int,
					'field' => 'term_id',
				);
			}
		}
		
	}
	
	
	if($texanomy)
	{		
		if(empty($title))
		{
			$title=$texanomy->name;
		}
	}
	
	$query=new WP_Query($args);
			
	$out='<div id="'.esc_attr($unique_id).'">';
	$out.='<h3 class="text-center head">'.mtheme_html($title).'</h3>';
	
	$class="col-lg-3 col-md-3 col-sm-6 col-xs-12";
	switch($columns)
	{
		case 1: $class="col-lg-12 col-md-12 col-sm-12 col-xs-12";break;
		case 2: $class="col-lg-6 col-md-6 col-sm-12 col-xs-12";break;
		case 3: $class="col-lg-4 col-md-4 col-sm-8 col-xs-12";break;
	}
		
	while($query->have_posts()){
		
		$query->the_post();	
		$haveItems=true;
		ob_start();
		
		$out.='<div class="'.esc_attr($class).' padding-col">';
		$out.='<a class="hover-anchor" target="_blank" href="'.esc_url(get_permalink($post->ID)).'">';
		$out.=get_the_post_thumbnail(get_the_ID(),array($thumbnail_width,$thumbnail_height));
		$out.='</a>';
		$out.='<p class="text-center event-name">'.get_the_title().'</p>';
		
		$out.='</div>';
		
		
		ob_end_clean();
	}
		
	if(!$haveItems)
	{		
		$out='<h3>No Events</h3>';		
	}
	
	$out.='</div>';	
	
	return $out;
}