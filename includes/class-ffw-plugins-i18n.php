<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.forefrontweb.com/
 * @since      1.0.0
 *
 * @package    Ffw_Plugins
 * @subpackage Ffw_Plugins/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ffw_Plugins
 * @subpackage Ffw_Plugins/includes
 * @author     ForeFront Web <programming@forefrontweb.com>
 */
class Ffw_Plugins_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ffw-plugins',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
