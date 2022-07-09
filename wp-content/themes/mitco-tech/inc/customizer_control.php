<?php
if ( ! function_exists( 'mitco_tech_breadcrumb_title' ) ) {
	function mitco_tech_breadcrumb_title() {
		
		if ( is_home() || is_front_page()):
			
			single_post_title();
			
		elseif ( is_day() ) : 
										
			printf( esc_html( 'Daily Archives: %s', 'mitco-tech' ), get_the_date() );
		
		elseif ( is_month() ) :
		
			printf( esc_html( 'Monthly Archives: %s', 'mitco-tech' ), (get_the_date( 'F Y' ) ));
			
		elseif ( is_year() ) :
		
			printf( esc_html( 'Yearly Archives: %s', 'mitco-tech' ), (get_the_date( 'Y' ) ) );
			
		elseif ( is_category() ) :
		
			printf( esc_html( 'Category Archives: %s', 'mitco-tech' ), (single_cat_title( '', false ) ));

		elseif ( is_tag() ) :
		
			printf( esc_html( 'Tag Archives: %s', 'mitco-tech' ), (single_tag_title( '', false ) ));
			
		elseif ( is_404() ) :

			printf( esc_html( 'Error 404', 'mitco-tech' ));
			
		elseif ( is_author() ) :
		
			printf( esc_html( 'Author: %s', 'mitco-tech' ), (get_the_author( '', false ) ));			
			
		elseif ( class_exists( 'woocommerce' ) ) : 
			
			if ( is_shop() ) {
				woocommerce_page_title();
			}
			
			elseif ( is_cart() ) {
				the_title();
			}
			
			elseif ( is_checkout() ) {
				the_title();
			}
			
			else {
				the_title();
			}
		else :
				the_title();
				
		endif;
	}
}

if ( ! function_exists( 'mitco_tech_breadcrumb_sections' ) ) :
	function mitco_tech_breadcrumb_sections( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/breadcrumb_section' );
	}
endif;
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'mitco_tech_GeneratePress_Upsell_Section' ) ) {

	class mitco_tech_GeneratePress_Upsell_Section extends WP_Customize_Control {

		public $type = 'mitco_tech_ast_description';		
	    public $id = '';
		public function to_json() {
			parent::to_json();		
			$this->json['label'] = esc_html( $this->label );
			$json['id'] = $this->id;
	            return $json;
		}

		protected function render_content() {
			?>
			<h3 class="section-heading">
	            <?php echo esc_html( $this->label ); ?>      
	        </h3>
			<?php
		}
	}

}
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'mitco_tech_Customize_Transparent_Color_Control' ) ) {

	class mitco_tech_Customize_Transparent_Color_Control extends WP_Customize_Control {
	
		public $type = 'mitco_tech_alpha_color';		
		public function render_content() {
			?>
			<span class='customize-control-title'><?php echo esc_html($this->label); ?></span>
			<label>
				<input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo esc_attr( $this->settings['default']->default ); ?>" value="<?php echo esc_attr( $this->settings['default']->default ); ?>" <?php $this->link(); ?> /> 
			</label>
			<?php
		}
	}
}
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'mitco_tech_Custom_Radio_Image_Control' ) ) {
	class mitco_tech_Custom_Radio_Image_Control extends WP_Customize_Control {

		public $type = 'mitco_tech_radio_image';
		
		public function render_content() {
			if ( empty( $this->choices ) ) {
				return;
			}			
			
			$name = '_customize-radio-' . $this->id;
			?>
			<span class="customize-control-title">
				<?php echo esc_html( $this->label ); ?>
				<?php if ( ! empty( $this->description ) ) : ?>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php endif; ?>
			</span>
			<div id="input_<?php echo esc_attr( $this->id ); ?>" class="customizer_images">
				<?php foreach ( $this->choices as $value => $label ) : ?>
						<label for="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>">
							<input class="image-select" type="radio" value="<?php echo esc_attr( $value ); ?>" id="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?>>
							<img src="<?php echo esc_html( $label ); ?>" alt="<?php echo esc_attr( $value ); ?>" title="<?php echo esc_attr( $value ); ?>">
							</input>
						</label>
				<?php endforeach; ?>
			</div>
			<?php
		}
	}
}
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'mitco_tech_Custom_Radio_Control' ) ) {
	class mitco_tech_Custom_Radio_Control extends WP_Customize_Control {
	
		public $type = 'mitco_tech_radio_select';
		
		public function render_content() {
			if ( empty( $this->choices ) ) {
				return;
			}			
			
			$name = '_customize-radio-' . $this->id;

			?>
			<span class="customize-control-title">
				<?php echo esc_html( $this->label ); ?>
				<?php if ( ! empty( $this->description ) ) : ?>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php endif; ?>
			</span>
			<div id="input_<?php echo esc_attr( $this->id ); ?>" class="general_design_tab">
				<?php foreach ( $this->choices as $value => $label ) : 
					?>
						<label for="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>">
							<input class="general-design-select" type="radio" value="<?php echo esc_attr( $value ); ?>" id="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?>>
							<h2><?php echo esc_html( $label ); ?></h2>
						</label>
				<?php endforeach; ?>
			</div>
			<?php
		}
	}
}
if ( ! function_exists( 'mitco_tech_breadcrumb_sections' ) ) :
	function mitco_tech_breadcrumb_sections( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/breadcrumb_section' );
	}
endif;
if ( ! function_exists( 'mitco_tech_social_section' ) ) :
	function mitco_tech_social_section( $selector = 'header' ) {
		get_template_part( 'template-parts/top_bar/social_info' );
	}
endif;
if ( ! function_exists( 'mitco_tech_featured_slider' ) ) :
	function mitco_tech_featured_slider( $selector = 'header' ) {
		echo esc_attr(featured_slider_activate());
	}
endif;
if ( ! function_exists( 'mitco_tech_featured_section' ) ) :
	function mitco_tech_featured_section( $selector = 'header' ) {
		echo esc_attr(featured_section_info_activate());
	}
endif;
if ( ! function_exists( 'mitco_tech_about_section' ) ) :
	function mitco_tech_about_section( $selector = 'header' ) {
		echo esc_attr(about_section_activate());
	}
endif;
if ( ! function_exists( 'mitco_tech_our_portfolio_section' ) ) :
	function mitco_tech_our_portfolio_section( $selector = 'header' ) {
		echo esc_attr(our_portfolio_section_activate());
	}
endif;
if ( ! function_exists( 'mitco_tech_our_services_section' ) ) :
	function mitco_tech_our_services_section( $selector = 'header' ) {
		echo esc_attr(our_services_activate());
	}
endif;
if ( ! function_exists( 'mitco_tech_our_team_section' ) ) :
	function mitco_tech_our_team_section( $selector = 'header' ) {
		echo esc_attr(our_team_activate());
	}
endif;
if ( ! function_exists( 'mitco_tech_our_testimonial_section' ) ) :
	function mitco_tech_our_testimonial_section( $selector = 'header' ) {
		echo esc_attr(our_testimonial_activate());
	}
endif;
if ( ! function_exists( 'mitco_tech_our_sponsors_section' ) ) :
	function mitco_tech_our_sponsors_section( $selector = 'header' ) {
		echo esc_attr(our_sponsors_activate());
	}
endif;


if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'pro_option_custom_control' ) ) {
	class pro_option_custom_control extends WP_Customize_Control {
	
		public $type = 'mitco_tech_more_option';
		
	    public $id = '';

		public function json() {
	            $json = parent::json();
	            $this->json['label']       = esc_html( $this->label );
	            $json['id'] = $this->id;
	            return $json;
	        }
		protected function render_content() {
			$theme_name = wp_get_theme();
			$proverslink = apply_filters('mitco_tech_prosectionlinks', 'https://inverstheme.com/theme/mitco-tech-pro/');
			?>
			<div class="title_pro_heading">
				<label class='customize-control-title'>More Options Available in <?php echo esc_attr($theme_name); ?> Pro!</label>
				<a href="<?php echo esc_attr($proverslink);?>" class="button button-secondary button_more_pro" target="_blank"><?php echo esc_html('Lern More');?></a>
			</div>
			<?php
		}
	}
}
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'drag_drop_option_Control' ) ) {
	class drag_drop_option_Control extends WP_Customize_Control {
	
		public $type = 'mitco_tech_more_option';
		
	    public $id = '';
		
		public function json() {
            $json = parent::json();
            $this->json['label'] = esc_html( $this->label );
            $json['id'] = $this->id;
            return $json;
        }
		
		protected function render_content() {
			$theme_name = wp_get_theme();
			$proverslink = apply_filters('mitco_tech_prosectionlinks', 'https://inverstheme.com/theme/mitco-tech-pro/');
			?>
			<!--<div class="title_pro_heading">
			 	<label class='customize-control-title'>Drag & Drop Section in <?php echo esc_attr($theme_name); ?> Pro!</label> 
				<a href="<?php echo esc_attr($proverslink);?>" class="button button-secondary button_more_pro" target="_blank"><?php echo esc_html('Lern More');?></a>
			</div> -->
			<div class="customize-upgrade-pro-message">
				<h4 class="customize-control-title"><?php echo wp_kses_post( 'Drag & Drop Section in <a href="'.$proverslink.'" target="_blank" > '.$theme_name.' Pro </a> to be add more option ', 'mitco-tech');  esc_html_e( 'and get the other pro features.', 'mitco-tech') ?></h4>
			</div>
			<?php
		}
	}
}
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Customize_Upgrade_Control' ) ) {
	class Customize_Upgrade_Control extends WP_Customize_Control {
	
		public $type = 'customize-upgrade';
		
	    public $id = '';

		public function json() {
	            $json = parent::json();
	            $this->json['label']       = esc_html( $this->label );
	            $json['id'] = $this->id;
	            return $json;
	        }
		protected function render_content() {
			$theme_name = wp_get_theme();
			$upgrade_to_pro_link =  apply_filters('mitco_tech_prosectionlinks', 'https://inverstheme.com/theme/mitco-tech-pro/');
			?>
			<div class="customize-upgrade-pro-message" style="display:none;">
				<h4 class="customize-control-title"><?php echo wp_kses_post( 'Upgrade to <a href="'.$upgrade_to_pro_link.'" target="_blank" > '.$theme_name.' Pro </a> to be add more option ', 'mitco-tech');  esc_html_e( 'and get the other pro features.', 'mitco-tech') ?></h4>
			</div>
			<?php
		}
	}
}

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'pro_section_custom_control' ) ) {
	class pro_section_custom_control extends WP_Customize_Control {
		public $type = 'mitco_techdd_pro_section';

        public $pro_url = '';
        
        public $pro_text = '';

        public $id = '';

        public function json() {
            $json = parent::json();
            $json['pro_text'] = $this->pro_text;
            $json['pro_url']  = esc_url( $this->pro_url );
            $json['id'] = $this->id;
            return $json;
        }

        protected function render_content() {
        	$upgrade_prolinks = apply_filters('mitco_tech_prosectionlinks', 'https://inverstheme.com/theme/mitco-tech-pro/');
        	$document_link = apply_filters('mitco_tech_document_link', 'https://inverstheme.com/mitco-tech-documentation/');
            ?>
            <div class="theme_info_section">
                <div class="titled_pro_heading theme_button">
					<a href="<?php echo esc_attr($upgrade_prolinks);?>" class="button button-secondary  button_pro" target="_blank">Upgrade To PRO</a>
				</div> 
				<div class="theme_documention theme_button">
					<a class="button button-secondary  button_document" href="<?php echo esc_attr($document_link);?>">Documentation</a>
				</div>
			</div>
            <?php
        }
	}
}