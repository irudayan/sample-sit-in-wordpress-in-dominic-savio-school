<?php

function mitco_tech_about_menu() {
	add_theme_page( esc_html__( 'About Theme', 'mitco-tech' ), esc_html__( 'About Theme', 'mitco-tech' ), 'edit_theme_options', 'mitco_tech-about', 'mitco_tech_about_display' );
}
add_action( 'admin_menu', 'mitco_tech_about_menu' );

function mitco_tech_about_display(){
	?>
	<div class="mitco_tech_about_data">
		<div class="mitco_tech_about_title">
			<h1><?php echo esc_html( 'Welcome to Mitco Tech!', 'mitco-tech' ); ?></h1>
			<div class="mitco_tech_about_theme">
				<div class="mitco_tech_about_description">
					<p>
						<?php echo esc_html( 'Mitco Tech WordPress theme makes your site stand out in its outlook. Mitco Tech is a powerful and multipurpose WordPress Theme. This theme your website can gain a unique look. This multipurpose theme is packed with a lot of awesome features that can be used for various kinds of websites with focus on business sites. Mitco Tech has features like Social Icon, Transparent Header, featured slider, featured Section, About Section, Our Portfolio, Our team Section, Testimonial Slider, Our Services, Our Sponsors, Sticky Header, Social Information, Sidebar, Excerpt Options, and any eCommerce business need. This theme is supported for WooCommerce. All of these highly-customizable features and sections are completely responsive and absolutely easy to customize. If you are searching for unique looking flexible theme then Mitco Tech can be your ultimate choice to showcase your business.', 'mitco-tech' ); ?>
						
					</p>
				</div>
				<div class="mitco_tech_about_image">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				</div> 
			</div>
			<div class="mitco_tech_about_demo">
				<div class="feature-section">
					<div class="about_data_mitco_tech">
						<h3><?php echo esc_html( 'Documentation', 'mitco-tech' ); ?></h3>
						<p><?php echo esc_html( 'Getting started with a new theme can be difficult, But its installation and customization is so easy', 'mitco-tech' ); ?></p>
						<a href="https://inverstheme.com/mitco-tech-documentation/"><?php echo esc_html( 'Read Documentation', 'mitco-tech' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_mitco_tech">
						<h3><?php echo esc_html( 'Recommended Plugins', 'mitco-tech' ); ?></h3>
						<p><?php echo esc_html( 'Please install recommended plugins for better use of theme. It will help you to make website more useful', 'mitco-tech' ); ?></p>
						<a href="<?php echo esc_url(admin_url('/themes.php?page=tgmpa-install-plugins&plugin_status=activate'), 'mitco-tech'); ?>"><?php echo esc_html( 'Install Plugins ', 'mitco-tech' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_mitco_tech">
						<h3><?php echo esc_html( 'Free Theme Demo', 'mitco-tech' ); ?></h3>
						<p><?php echo esc_html( 'You can check free theme demo before setup your website if you like demo then install theme', 'mitco-tech' ); ?></p>
						<a href="https://inverstheme.com/themedemo/mitco-tech/"><?php echo esc_html( 'Free Theme Demo ', 'mitco-tech' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_mitco_tech">
						<h3><?php echo esc_html( 'Free VS Pro', 'mitco-tech' ); ?></h3>
						<p><?php echo esc_html( 'You can check compare free version and pro version.', 'mitco-tech' ); ?></p>
						<a href="https://inverstheme.com/theme/mitco-tech-pro/"><?php echo esc_html( 'Compare free Vs Pro ', 'mitco-tech' ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<ul class="tabs">
			<li class="tab-link current" data-tab="about"><?php echo esc_html( 'About', 'mitco-tech' ); ?></li>
		</ul> 
		<div id="about" class="tab-content current">
			<div class="about_section">
				<div class="about_info_data theme_info">
					<div class="about_theme_title">
						<h2><?php echo esc_html( 'Theme Customizer', 'mitco-tech' ); ?></h2>
					</div>
					<div class="about_theme_data">
						<p><?php echo esc_html( 'All Theme Options are available via Customize screen.', 'mitco-tech' ); ?></p>
					</div>
					<div class="about_theme_btn">
						<a class="customize_btn button button-primary" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"><?php echo esc_html( 'Customize', 'mitco-tech' ); ?></a>
					</div>
				</div>
				<div class="theme_que theme_info">
					<div class="about_theme_que">
						<h2><?php echo esc_html( 'Got theme support question?', 'mitco-tech' ); ?></h2>
					</div>
					<div class="about_que_data">
						<p><?php echo esc_html( 'Get genuine support from genuine people. Whether it is customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'mitco-tech' ); ?></p>
					</div>
					<div class="about_que_btn">
						<a class="support_forum button button-primary" href="https://inverstheme.com/contact-us/"><?php echo esc_html( 'Support Forum', 'mitco-tech' ); ?></a>
					</div>
				</div>
			</div>
			<div class="about_shortcode theme_info">
				<div class="about_single_page_post_shortcode">
					<h2><?php echo esc_html( 'Single Page And Post Add shortcode', 'mitco-tech' ); ?></h2>
					<p><?php echo esc_html( 'if this plugin Page Section For InversTheme must be installed then this Shortcode use Otherwise this Shortcode is not work.', 'mitco-tech'); ?></p>
				</div>
				<ul>
					<h3><?php echo esc_html( 'Featured Slider :', 'mitco-tech' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_featured_slider_activate']", "Mitco-tech" ); ?></li>

					<h3><?php echo esc_html( 'Featured Section :', 'mitco-tech' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_featured_section_info_activate']", "Mitco-tech" ); ?></li>

					<h3><?php echo esc_html( 'About Section :', 'mitco-tech' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_about_section_activate']", "Mitco-tech" ); ?></li>

					<h3><?php echo esc_html( 'Our Portfolio :', 'mitco-tech' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_our_portfolio_section_activate']", "Mitco-tech" ); ?></li>

					<h3><?php echo esc_html( 'Our Services :', 'mitco-tech' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_our_services_activate']", "Mitco-tech" ); ?></li>

					<h3><?php echo esc_html( 'Our Sponsors :', 'mitco-tech' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_our_sponsors_activate']", "Mitco-tech" ); ?></li>

					<h3><?php echo esc_html( 'Our Team :', 'mitco-tech' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_our_team_activate']", "Mitco-tech" ); ?></li>

					<h3><?php echo esc_html( 'Our Testimonial :', 'mitco-tech' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_our_testimonial_activate']", "Mitco-tech" ); ?></li>

					<h3><?php echo esc_html( 'Widget Section :', 'mitco-tech' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_woocommerce_product_section_activate']", "Mitco-tech" ); ?></li>
				</ul>
			</div>
		</div>
	</div>
	<?php
}