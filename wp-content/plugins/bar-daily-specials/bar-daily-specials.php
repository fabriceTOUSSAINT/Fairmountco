<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              fabricebt.com
 * @since             1.0.0
 * @package           Bar_Daily_Specials
 *
 * @wordpress-plugin
 * Plugin Name:       Bar Daily Specials
 * Plugin URI:        fabricebt.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Fabrice Toussaint
 * Author URI:        fabricebt.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bar-daily-specials
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bar-daily-specials-activator.php
 */
function activate_bar_daily_specials() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bar-daily-specials-activator.php';
	Bar_Daily_Specials_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bar-daily-specials-deactivator.php
 */
function deactivate_bar_daily_specials() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bar-daily-specials-deactivator.php';
	Bar_Daily_Specials_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bar_daily_specials' );
register_deactivation_hook( __FILE__, 'deactivate_bar_daily_specials' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bar-daily-specials.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bar_daily_specials() {

	$plugin = new Bar_Daily_Specials();
	$plugin->run();

}
run_bar_daily_specials();
