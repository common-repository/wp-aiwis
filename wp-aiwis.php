<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://aiwis.io
 * @since             1.0.0
 * @package           Wp_Aiwis
 *
 * @wordpress-plugin
 * Plugin Name:       Wp_Aiwis
 * Description:       Artificial Intelligence Website Interactive System. Give Your Customers The Experience Of A Lifetime… And Watch FRESH Leads And Sales Flood In.
 * Version:           1.0.0
 * Author:            ITkamer
 * Author URI:        http://itkamer.space
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       aiwis
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-aiwis-activator.php
 */
function activate_wp_aiwis() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-aiwis-activator.php';
	Wp_Aiwis_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-aiwis-deactivator.php
 */
function deactivate_wp_aiwis() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-aiwis-deactivator.php';
	Wp_Aiwis_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_aiwis' );
register_deactivation_hook( __FILE__, 'deactivate_wp_aiwis' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-aiwis.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_aiwis() {

	$plugin = new Wp_Aiwis();
	$plugin->run();

}
run_wp_aiwis();
