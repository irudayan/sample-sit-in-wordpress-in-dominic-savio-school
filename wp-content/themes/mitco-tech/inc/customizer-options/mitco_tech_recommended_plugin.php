<?php
/* Notifications in customizer */

require get_template_directory()  . '/inc/customizer-notify/mitco-tech-notify.php';
$mitco_tech_config_customizer = array(
	'recommended_plugins'       => array(
		'err-our-team' => array(
			'recommended' => true,
			'description' => sprintf(__('Install and activate <strong>Inpersttion For Theme</strong> plugin for taking full advantage of all the features this theme has to offer Mitco Tech.', 'mitco-tech')),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'mitco-tech' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'mitco-tech' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'mitco-tech' ),
	'activate_button_label'     => esc_html__( 'Activate', 'mitco-tech' ),
	'mitco_tech_deactivate_button_label'   => esc_html__( 'Deactivate', 'mitco-tech' ),
);
mitco_tech_Customizer_Notify::init( apply_filters( 'mitco_tech_recommended_plugins', $mitco_tech_config_customizer ) );
