<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/screwLock
 * @since      1.0.0
 *
 * @package    Cfpnc_Scheduler
 * @subpackage Cfpnc_Scheduler/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Cfpnc_Scheduler
 * @subpackage Cfpnc_Scheduler/includes
 * @author     Travus Helmly <helmlyw@gmail.com>
 */
class Cfpnc_Scheduler_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		require_once plugin_dir_path( __FILE__ ) . 'sql/cfpnc_scheduler_tables_install.php';
		//require_once plugin_dir_path( __FILE__ ) . 'sql/cfpnc_scheduler_data_install.php';
		cfpnc_scheduler_tables_install();
		//sapo_install_all_data();
	}

}
