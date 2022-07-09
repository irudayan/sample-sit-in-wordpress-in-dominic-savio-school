<?php
	
	$educator_education_custom_css = '';
	/*---------------------------Width Layout -------------------*/
	$educator_education_theme_lay = get_theme_mod( 'educator_education_theme_options','Default');
    if($educator_education_theme_lay == 'Default'){
		$educator_education_custom_css .='body{';
			$educator_education_custom_css .='max-width: 100%;';
		$educator_education_custom_css .='}';
	}else if($educator_education_theme_lay == 'Container'){
		$educator_education_custom_css .='body{';
			$educator_education_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$educator_education_custom_css .='}';
		$educator_education_custom_css .='.serach_outer{';
			$educator_education_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$educator_education_custom_css .='}';
	}else if($educator_education_theme_lay == 'Box Container'){
		$educator_education_custom_css .='body{';
			$educator_education_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$educator_education_custom_css .='}';
		$educator_education_custom_css .='.serach_outer{';
			$educator_education_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$educator_education_custom_css .='}';
		$educator_education_custom_css .='.page-template-custom-front-page #header{';
			$educator_education_custom_css .='right:0;';
		$educator_education_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$educator_education_theme_lay = get_theme_mod( 'educator_education_slider_image_opacity','0.7');
	if($educator_education_theme_lay == '0'){
		$educator_education_custom_css .='#slider img{';
			$educator_education_custom_css .='opacity:0';
		$educator_education_custom_css .='}';
		}else if($educator_education_theme_lay == '0.1'){
		$educator_education_custom_css .='#slider img{';
			$educator_education_custom_css .='opacity:0.1';
		$educator_education_custom_css .='}';
		}else if($educator_education_theme_lay == '0.2'){
		$educator_education_custom_css .='#slider img{';
			$educator_education_custom_css .='opacity:0.2';
		$educator_education_custom_css .='}';
		}else if($educator_education_theme_lay == '0.3'){
		$educator_education_custom_css .='#slider img{';
			$educator_education_custom_css .='opacity:0.3';
		$educator_education_custom_css .='}';
		}else if($educator_education_theme_lay == '0.4'){
		$educator_education_custom_css .='#slider img{';
			$educator_education_custom_css .='opacity:0.4';
		$educator_education_custom_css .='}';
		}else if($educator_education_theme_lay == '0.5'){
		$educator_education_custom_css .='#slider img{';
			$educator_education_custom_css .='opacity:0.5';
		$educator_education_custom_css .='}';
		}else if($educator_education_theme_lay == '0.6'){
		$educator_education_custom_css .='#slider img{';
			$educator_education_custom_css .='opacity:0.6';
		$educator_education_custom_css .='}';
		}else if($educator_education_theme_lay == '0.7'){
		$educator_education_custom_css .='#slider img{';
			$educator_education_custom_css .='opacity:0.7';
		$educator_education_custom_css .='}';
		}else if($educator_education_theme_lay == '0.8'){
		$educator_education_custom_css .='#slider img{';
			$educator_education_custom_css .='opacity:0.8';
		$educator_education_custom_css .='}';
		}else if($educator_education_theme_lay == '0.9'){
		$educator_education_custom_css .='#slider img{';
			$educator_education_custom_css .='opacity:0.9';
		$educator_education_custom_css .='}';
	}

	$educator_education_slider_hide = get_theme_mod('educator_education_slider_hide', false);
	if($educator_education_slider_hide == false){
		$educator_education_custom_css .='.page-template-custom-front-page #header{';
			$educator_education_custom_css .='position: static; background: #242c5e; padding: 10px 0;';
		$educator_education_custom_css .='}';
		$educator_education_custom_css .='#home-services{';
			$educator_education_custom_css .='position: static; margin: 30px 0 0 0';
		$educator_education_custom_css .='}';
	}

	/*------------- Button Settings option-------------------*/
	$educator_education_button_padding_top_bottom = get_theme_mod('educator_education_button_padding_top_bottom');
	$educator_education_button_padding_left_right = get_theme_mod('educator_education_button_padding_left_right');
	$educator_education_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"],#category .explore-btn a{';
		$educator_education_custom_css .='padding-top: '.esc_attr($educator_education_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($educator_education_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($educator_education_button_padding_left_right).'px !important; padding-right: '.esc_attr($educator_education_button_padding_left_right).'px !important; display:inline-block;';
	$educator_education_custom_css .='}';

	$educator_education_button_border_radius = get_theme_mod('educator_education_button_border_radius');
	$educator_education_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"], #category .explore-btn a{';
		$educator_education_custom_css .='border-radius: '.esc_attr($educator_education_button_border_radius).'px;';
	$educator_education_custom_css .='}';

	/*------------------ Skin Option  -------------------*/
	$educator_education_theme_lay = get_theme_mod( 'educator_education_background_skin_mode','With Background');
    if($educator_education_theme_lay == 'With Background'){
		$educator_education_custom_css .='.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$educator_education_custom_css .='background-color: #fff;';
		$educator_education_custom_css .='}';
	}else if($educator_education_theme_lay == 'Transparent Background'){
		$educator_education_custom_css .='.page-box-single, .page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$educator_education_custom_css .='background-color: transparent;';
		$educator_education_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$educator_education_top_bottom_product_button_padding = get_theme_mod('educator_education_top_bottom_product_button_padding', 10);
	$educator_education_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce a.added_to_cart.wc-forward{';
		$educator_education_custom_css .='padding-top: '.esc_attr($educator_education_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($educator_education_top_bottom_product_button_padding).'px;';
	$educator_education_custom_css .='}';

	$educator_education_left_right_product_button_padding = get_theme_mod('educator_education_left_right_product_button_padding', 16);
	$educator_education_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce a.added_to_cart.wc-forward{';
		$educator_education_custom_css .='padding-left: '.esc_attr($educator_education_left_right_product_button_padding).'px; padding-right: '.esc_attr($educator_education_left_right_product_button_padding).'px;';
	$educator_education_custom_css .='}';

	$educator_education_product_button_border_radius = get_theme_mod('educator_education_product_button_border_radius', 8);
	$educator_education_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce a.added_to_cart.wc-forward{';
		$educator_education_custom_css .='border-radius: '.esc_attr($educator_education_product_button_border_radius).'px;';
	$educator_education_custom_css .='}';

	$educator_education_show_related_products = get_theme_mod('educator_education_show_related_products',true);
	if($educator_education_show_related_products == false){
		$educator_education_custom_css .='.related.products{';
			$educator_education_custom_css .='display: none;';
		$educator_education_custom_css .='}';
	}

	$educator_education_show_wooproducts_border = get_theme_mod('educator_education_show_wooproducts_border', false);
	if($educator_education_show_wooproducts_border == true){
		$educator_education_custom_css .='.products li{';
			$educator_education_custom_css .='border: 1px solid #767676;';
		$educator_education_custom_css .='}';
	}

	$educator_education_top_bottom_wooproducts_padding = get_theme_mod('educator_education_top_bottom_wooproducts_padding',0);
	$educator_education_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$educator_education_custom_css .='padding-top: '.esc_attr($educator_education_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($educator_education_top_bottom_wooproducts_padding).'px !important;';
	$educator_education_custom_css .='}';

	$educator_education_left_right_wooproducts_padding = get_theme_mod('educator_education_left_right_wooproducts_padding',0);
	$educator_education_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$educator_education_custom_css .='padding-left: '.esc_attr($educator_education_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($educator_education_left_right_wooproducts_padding).'px !important;';
	$educator_education_custom_css .='}';

	$educator_education_wooproducts_border_radius = get_theme_mod('educator_education_wooproducts_border_radius',0);
	$educator_education_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$educator_education_custom_css .='border-radius: '.esc_attr($educator_education_wooproducts_border_radius).'px;';
	$educator_education_custom_css .='}';

	$educator_education_wooproducts_box_shadow = get_theme_mod('educator_education_wooproducts_box_shadow',0);
	$educator_education_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$educator_education_custom_css .='box-shadow: '.esc_attr($educator_education_wooproducts_box_shadow).'px '.esc_attr($educator_education_wooproducts_box_shadow).'px '.esc_attr($educator_education_wooproducts_box_shadow).'px #e4e4e4;';
	$educator_education_custom_css .='}';

	/*-------------- Footer Text -------------------*/
	$educator_education_copyright_content_align = get_theme_mod('educator_education_copyright_content_align');
	if($educator_education_copyright_content_align != false){
		$educator_education_custom_css .='.copyright{';
			$educator_education_custom_css .='text-align: '.esc_attr($educator_education_copyright_content_align).';';
		$educator_education_custom_css .='}';
	}

	$educator_education_footer_content_font_size = get_theme_mod('educator_education_footer_content_font_size', 16);
	$educator_education_custom_css .='.copyright p{';
		$educator_education_custom_css .='font-size: '.esc_attr($educator_education_footer_content_font_size).'px;';
	$educator_education_custom_css .='}';

	$educator_education_copyright_padding = get_theme_mod('educator_education_copyright_padding', 15);
	$educator_education_custom_css .='.copyright{';
		$educator_education_custom_css .='padding-top: '.esc_attr($educator_education_copyright_padding).'px; padding-bottom: '.esc_attr($educator_education_copyright_padding).'px;';
	$educator_education_custom_css .='}';

	$educator_education_footer_widget_bg_color = get_theme_mod('educator_education_footer_widget_bg_color');
	$educator_education_custom_css .='#footer{';
		$educator_education_custom_css .='background-color: '.esc_attr($educator_education_footer_widget_bg_color).';';
	$educator_education_custom_css .='}';

	$educator_education_footer_widget_bg_image = get_theme_mod('educator_education_footer_widget_bg_image');
	if($educator_education_footer_widget_bg_image != false){
		$educator_education_custom_css .='#footer{';
			$educator_education_custom_css .='background: url('.esc_attr($educator_education_footer_widget_bg_image).');';
		$educator_education_custom_css .='}';
	}

	// scroll to top
	$educator_education_scroll_font_size_icon = get_theme_mod('educator_education_scroll_font_size_icon', 22);
	$educator_education_custom_css .='#scroll-top .fas{';
		$educator_education_custom_css .='font-size: '.esc_attr($educator_education_scroll_font_size_icon).'px;';
	$educator_education_custom_css .='}';

	// Slider Height 
	$educator_education_slider_image_height = get_theme_mod('educator_education_slider_image_height');
	$educator_education_custom_css .='#slider img{';
		$educator_education_custom_css .='height: '.esc_attr($educator_education_slider_image_height).'px;';
	$educator_education_custom_css .='}';

	// Display Blog Post 
	$educator_education_display_blog_page_post = get_theme_mod( 'educator_education_display_blog_page_post','In Box');
    if($educator_education_display_blog_page_post == 'Without Box'){
		$educator_education_custom_css .='.page-box{';
			$educator_education_custom_css .='border:none; margin:25px 0;';
		$educator_education_custom_css .='}';
	}

	// slider overlay
	$educator_education_slider_overlay = get_theme_mod('educator_education_slider_overlay', true);
	if($educator_education_slider_overlay == false){
		$educator_education_custom_css .='#slider img{';
			$educator_education_custom_css .='opacity:1;';
		$educator_education_custom_css .='}';
	} 
	$educator_education_slider_image_overlay_color = get_theme_mod('educator_education_slider_image_overlay_color', true);
	if($educator_education_slider_overlay != false){
		$educator_education_custom_css .='#slider{';
			$educator_education_custom_css .='background-color: '.esc_attr($educator_education_slider_image_overlay_color).';';
		$educator_education_custom_css .='}';
	}

	// site title and tagline font size option
	$educator_education_site_title_size_option = get_theme_mod('educator_education_site_title_size_option', 30);{
	$educator_education_custom_css .='.logo h1 a, .logo p a{';
	$educator_education_custom_css .='font-size: '.esc_attr($educator_education_site_title_size_option).'px;';
		$educator_education_custom_css .='}';
	}

	$educator_education_site_tagline_size_option = get_theme_mod('educator_education_site_tagline_size_option', 13);{
	$educator_education_custom_css .='.logo p{';
	$educator_education_custom_css .='font-size: '.esc_attr($educator_education_site_tagline_size_option).'px !important;';
		$educator_education_custom_css .='}';
	}

	// woocommerce product sale settings
	$educator_education_border_radius_product_sale = get_theme_mod('educator_education_border_radius_product_sale',0);
	$educator_education_custom_css .='.woocommerce span.onsale {';
		$educator_education_custom_css .='border-radius: '.esc_attr($educator_education_border_radius_product_sale).'px;';
	$educator_education_custom_css .='}';

	$educator_education_align_product_sale = get_theme_mod('educator_education_align_product_sale', 'Right');
	if($educator_education_align_product_sale == 'Right' ){
		$educator_education_custom_css .='.woocommerce ul.products li.product .onsale{';
			$educator_education_custom_css .=' left:auto; right:0;';
		$educator_education_custom_css .='}';
	}elseif($educator_education_align_product_sale == 'Left' ){
		$educator_education_custom_css .='.woocommerce ul.products li.product .onsale{';
			$educator_education_custom_css .=' left:0; right:auto;';
		$educator_education_custom_css .='}';
	}

	$educator_education_product_sale_font_size = get_theme_mod('educator_education_product_sale_font_size',14);
	$educator_education_custom_css .='.woocommerce span.onsale{';
		$educator_education_custom_css .='font-size: '.esc_attr($educator_education_product_sale_font_size).'px;';
	$educator_education_custom_css .='}';

	// preloader background option
	$educator_education_loader_background_color_settings = get_theme_mod('educator_education_loader_background_color_settings');
	$educator_education_custom_css .='#loader-wrapper .loader-section{';
		$educator_education_custom_css .='background-color: '.esc_attr($educator_education_loader_background_color_settings).';';
	$educator_education_custom_css .='} ';

	// woocommerce Product Navigation
	$educator_education_products_navigation = get_theme_mod('educator_education_products_navigation', 'Yes');
	if($educator_education_products_navigation == 'No'){
		$educator_education_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$educator_education_custom_css .='display: none;';
		$educator_education_custom_css .='}';
	}

	// featured image setting
	$educator_education_featured_img_border_radius = get_theme_mod('educator_education_featured_img_border_radius', 0);
	$educator_education_custom_css .='.our-services img, .box-img img{';
		$educator_education_custom_css .='border-radius: '.esc_attr($educator_education_featured_img_border_radius).'px;';
	$educator_education_custom_css .='}';

	$educator_education_featured_img_box_shadow = get_theme_mod('educator_education_featured_img_box_shadow',0);
	$educator_education_custom_css .='.our-services img, .page-box-single img{';
		$educator_education_custom_css .='box-shadow: '.esc_attr($educator_education_featured_img_box_shadow).'px '.esc_attr($educator_education_featured_img_box_shadow).'px '.esc_attr($educator_education_featured_img_box_shadow).'px #ccc;';
	$educator_education_custom_css .='}';

	// slider top and bottom padding
	$educator_education_top_bottom_slider_content_space = get_theme_mod('educator_education_top_bottom_slider_content_space');
	$educator_education_left_right_slider_content_space = get_theme_mod('educator_education_left_right_slider_content_space');
	$educator_education_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .read-btn{';
		$educator_education_custom_css .='top: '.esc_attr($educator_education_top_bottom_slider_content_space).'%; bottom: '.esc_attr($educator_education_top_bottom_slider_content_space).'%;left: '.esc_attr($educator_education_left_right_slider_content_space).'%;right: '.esc_attr($educator_education_left_right_slider_content_space).'%;';
	$educator_education_custom_css .='}';

	// responsive settings

	$educator_education_slider = get_theme_mod( 'educator_education_responsive_slider',false);
	if($educator_education_slider == true && get_theme_mod( 'educator_education_slider_hide', false) == false){
    	$educator_education_custom_css .='#slider{';
			$educator_education_custom_css .='display:none;';
		$educator_education_custom_css .='} ';
	}
    if($educator_education_slider == true){
    	$educator_education_custom_css .='@media screen and (max-width:575px) {';
		$educator_education_custom_css .='#slider{';
			$educator_education_custom_css .='display:block;';
		$educator_education_custom_css .='} }';
	}else if($educator_education_slider == false){
		$educator_education_custom_css .='@media screen and (max-width:575px) {';
		$educator_education_custom_css .='#slider{';
			$educator_education_custom_css .='display:none;';
		$educator_education_custom_css .='} }';
	}