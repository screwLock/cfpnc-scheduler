<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/screwLock
 * @since      1.0.0
 *
 * @package    Cfpnc_Scheduler
 * @subpackage Cfpnc_Scheduler/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cfpnc_Scheduler
 * @subpackage Cfpnc_Scheduler/includes
 * @author     Travus Helmly <helmlyw@gmail.com>
 */
class Cfpnc_Scheduler_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cfpnc-scheduler',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
