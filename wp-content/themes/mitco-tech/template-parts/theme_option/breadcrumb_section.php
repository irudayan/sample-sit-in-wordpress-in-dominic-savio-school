<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mitco_tech
 */

if(get_theme_mod('mitco_tech_display_breadcrumb_section',true) != ''){
	mitco_tech_breadcrumb_slider();
}
elseif(get_post_type()){	
	if(get_post_meta(get_the_ID(),'breadcrumb_select',true) == 'yes'){
		mitco_tech_breadcrumb_slider();
	}
}