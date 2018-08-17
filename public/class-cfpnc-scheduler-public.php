<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/screwLock
 * @since      1.0.0
 *
 * @package    Cfpnc_Scheduler
 * @subpackage Cfpnc_Scheduler/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Cfpnc_Scheduler
 * @subpackage Cfpnc_Scheduler/public
 * @author     Travus Helmly <helmlyw@gmail.com>
 */
class Cfpnc_Scheduler_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cfpnc_Scheduler_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cfpnc_Scheduler_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/cfpnc-scheduler-public.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . 'bootstrap-datepicker-css', plugin_dir_url( __FILE__ ) . 'css/bootstrap-datepicker3.standalone.css', array(), $this->version, false );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cfpnc_Scheduler_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cfpnc_Scheduler_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/cfpnc-scheduler-public.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . 'bootstrap-datepicker-js', plugin_dir_url( __FILE__ ) . 'js/bootstrap-datepicker.js', array('jquery'), $this->version, false );
	}

	/**
	 * This function is for registering scripts that are not going to be used sitewide
	 * but for shortcodes instead.  This function is to be called in define_public_hooks()
	 * of the class-sapoadmin class.
	 * 
	 * 
	 */
	public function register_scripts() {
		wp_register_script('donor_registration', plugin_dir_url( __FILE__ ) . 'js/donor_registration.js', array(), $this->version, true );
		wp_register_script('google_autocomplete', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDOs_VPiyP8PWQ70b7uNtPhKftBgwsFhw8&libraries=places&callback=initAutocomplete',
		array('donor_registration'), $this->version);
		wp_register_script('bootstrap_js', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js", array('jquery'));
		wp_register_style('bootstrap_css', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");

	}
	/**
	 * --------------------------------------------------------------------------------------------------------------------------------------------
	 * --------------------------------------------------------------------------------------------------------------------------------------------
	 * SHORTCODE CALLBACKS FOR PUBLIC FACING FUNCTIONALITY SHOULD BE INCLUDED BELOW
	 * AT THE END OF THE PLUGIN PUBLIC CLASS DEFINITION
	 * 
	 * --------------------------------------------------------------------------------------------------------------------------------------------
	 */

	public function donor_registration_shortcode(){
		

		wp_localize_script( 'donor_registration', 'donor_registration_ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' )));
		wp_enqueue_style('bootstrap_css');
		wp_enqueue_script('bootstrap_js');
		wp_enqueue_script( 'donor_registration' );
		wp_enqueue_script('google_autocomplete');
		include_once('partials/donor_registration.php');
		return '';
	}
}
