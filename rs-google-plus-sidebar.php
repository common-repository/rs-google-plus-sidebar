<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.xtendify.com/en/user/2-rosinghal
 * @since             1.0.0
 * @package           Rs_Google_Plus_Sidebar
 *
 * @wordpress-plugin
 * Plugin Name:       Rs Google Plus Sidebar
 * Plugin URI:        https://www.xtendify.com/en/plugins/wordpress
 * Description:       Another google plus plugin :). Difference is the hover effect.
 * Version:           1.0.0
 * Author:            Rohit Singhal
 * Author URI:        https://www.xtendify.com/en/user/2-rosinghal
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rs-google-plus-sidebar
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rs-google-plus-sidebar-activator.php
 */
function activate_rs_google_plus_sidebar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rs-google-plus-sidebar-activator.php';
	Rs_Google_Plus_Sidebar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rs-google-plus-sidebar-deactivator.php
 */
function deactivate_rs_google_plus_sidebar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rs-google-plus-sidebar-deactivator.php';
	Rs_Google_Plus_Sidebar_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rs_google_plus_sidebar' );
register_deactivation_hook( __FILE__, 'deactivate_rs_google_plus_sidebar' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rs-google-plus-sidebar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rs_google_plus_sidebar() {

	$plugin = new Rs_Google_Plus_Sidebar();
	$plugin->run();

}
run_rs_google_plus_sidebar();
