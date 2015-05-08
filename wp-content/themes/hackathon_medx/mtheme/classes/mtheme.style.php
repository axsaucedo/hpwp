<?php
/**
 * Mtheme Style
 *
 * Adds custom styles and fonts
 *
 * @class MthemeStyle
 * @author Mtheme
 */
 
class MthemeStyle {

	/**
	 * Adds actions and filters
     *
     * @access public
     * @return void
     */
	public static function init() {
	
		//add custom styles
		add_action('wp_head', array(__CLASS__,'renderStyles'));
		
		add_action( 'wp_head', array(__CLASS__,'mp6_override_toolbar_margin' ), 11);
		
		//add custom fonts
		add_action('wp_head', array(__CLASS__,'renderFonts'));
		
	}
	
	
	public static function mp6_override_toolbar_margin()
	{		
		$out='<style type="text/css" media="screen">@media screen and (max-width: 782px) { html {margin-top: 0 !important;}}';
		if ( is_admin_bar_showing() ) {
			$out.='.header{ margin-top: 32px; }';
			$out.='.slideshow nav span.nav-close{ top: 42px; }';
		}
		$out.='</style>';
		echo mtheme_html($out);
	}
	/**
	 * Adds custom styles
     *
     * @access public
     * @return void
     */
	public static function renderStyles() {
		
		$out='<link rel="shortcut icon" href="'.MthemeCore::getOption('favicon', CHILD_URI."site/img/favicon.ico").'"/>';
				
		$out.='<style type="text/css">';
		
		if(isset(MthemeCore::$components['custom_styles'])) {
			foreach(MthemeCore::$components['custom_styles'] as $style) {
				$out.=$style['elements'].'{';
				
				foreach($style['attributes'] as $attribute) {
					
					$option=MthemeCore::getOption($attribute['option'],$attribute['default']);
					
					if($option) {
						if($attribute['name']=='background-image') {
							$option='url('.$option.')';
						} else if($attribute['name']=='font-family') {
							$option=$option.', sans-serif';
						}
						
						if(isset($attribute['important']) && $attribute['important']) {
							$option=$option.'!important';
						}
						
						$out.=$attribute['name'].':'.$option.';';
					}
				}				
				
				$out.='}';				
			}
		}
		
		$out.=MthemeCore::getOption('css');
		$out.='</style>';
		
		echo mtheme_html($out);		
	}
	
	/**
	 * Adds custom fonts
     *
     * @access public
     * @return void
     */
	public static function renderFonts() {
		$fonts=array();
		$out='';
		
		
		foreach(MthemeCore::$options as $option) {
			
			if($option['type']=='select_font') {
				$font=MthemeCore::getOption($option['id'], $option['default']);
				
				if($font=='Open Sans') {
					$font.=':300italic,400italic,600italic,700italic,800italic,400,300,600,700,800';
				}
				else {
					$font.=':400,700,600,500,300,200,100,800,900';
				}
				
				if($font=='Crete Round') {
					$out.='<style type="text/css">@font-face {
						font-family: "Crete Round";
						src: url("'.THEME_URI.'site/fonts/creteround-regular-webfont.eot");
						src: url("'.THEME_URI.'site/fonts/creteround-regular-webfont.eot?#iefix") format("embedded-opentype"),
							 url("'.THEME_URI.'site/fonts/creteround-regular-webfont.woff") format("woff"),
							 url("'.THEME_URI.'site/fonts/creteround-regular-webfont.ttf") format("truetype"),
							 url("'.THEME_URI.'site/fonts/creteround-regular-webfont.svg#crete_roundregular") format("svg");
						font-weight: normal;
						font-style: normal;
					}</style>';
				} else {
					$fonts[]=$font;
				}
			}
		}
		
		$fonts = array_unique($fonts);
		
		if(!empty($fonts)) {
			$out.='<script type="text/javascript">
			WebFontConfig = {google: { families: [ "'.implode($fonts, '","').'" ] } };
			(function() {
				var wf = document.createElement("script");
				wf.src = ("https:" == document.location.protocol ? "https" : "http") + "://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js";
				wf.type = "text/javascript";
				wf.async = "true";
				var s = document.getElementsByTagName("script")[0];
				s.parentNode.insertBefore(wf, s);
			})();
			</script>';
			
			echo mtheme_html($out);
		}		
	}
	
}