<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       fabricebt.com
 * @since      1.0.0
 *
 * @package    Bar_Daily_Specials
 * @subpackage Bar_Daily_Specials/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Bar_Daily_Specials
 * @subpackage Bar_Daily_Specials/includes
 * @author     Fabrice Toussaint <developer@fabricebt.com>
 */
class Bar_Daily_Specials_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'bar-daily-specials',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
