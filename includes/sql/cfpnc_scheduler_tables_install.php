<?php

function cfpnc_scheduler_tables_install() {

		global $wpdb;
	 
		$sql = array();
		$charset_collate = $wpdb->get_charset_collate();
	 
		
		//1. Create the zipcodes table
		$zipcodes_table = $wpdb->prefix . "cfpnc_scheduler_zipcodes";
	 
		if($wpdb->get_var("SHOW TABLES LIKE '" . $zipcodes_table . "'") !== $zipcodes_table) {
		   $sql[] = "CREATE TABLE $zipcodes_table (
			  id BIGINT(20) NOT NULL AUTO_INCREMENT,
			  user_id BIGINT(20) NOT NULL,
			  zipcode VARCHAR(6) NOT NULL,
			  sunday BOOLEAN NOT NULL DEFAULT 0,
			  monday BOOLEAN NOT NULL DEFAULT 0,
			  tuesday BOOLEAN NOT NULL DEFAULT 0,
			  wednesday BOOLEAN NOT NULL DEFAULT 0,
			  thursday BOOLEAN NOT NULL DEFAULT 0,
			  friday BOOLEAN NOT NULL DEFAULT 0,
			  saturday BOOLEAN NOT NULL DEFAULT 0,
			  enable_max_time BOOLEAN NOT NULL DEFAULT 0,
			  max_time TIME NOT NULL DEFAULT '08:00:00',
			  max_pickups TINYINT(255) UNSIGNED NOT NULL DEFAULT 5,
			  created_at TIMESTAMP NOT NULL DEFAULT current_timestamp,
			  UNIQUE (id),
			  PRIMARY KEY  (id)    
		   ) $charset_collate;";
		}	

		//1. Create the donations table
		$donations_table = $wpdb->prefix . "cfpnc_scheduler_donations";
	 
		if($wpdb->get_var("SHOW TABLES LIKE '" . $donations_table . "'") !== $donations_table) {
		   $sql[] = "CREATE TABLE $donations_table (
			  id BIGINT(20) NOT NULL AUTO_INCREMENT,
			  user_id BIGINT(20) NOT NULL,
			  contact VARCHAR(30) NOT NULL,
			  phone_number VARCHAR(10) NOT NULL,
			  email VARCHAR(30) NOT NULL,
			  pickup_address VARCHAR(100) NOT NULL,
			  pickup_date DATE NOT NULL,
			  stairs TINYINT(1) NOT NULL DEFAULT 0,
			  movingOut TINYINT(1) NOT NULL DEFAULT 0,
			  yardSale TINYINT(1) NOT NULL DEFAULT 0,
			  estateAuction TINYINT(1) NOT NULL DEFAULT 0,
			  items VARCHAR(100) NOT NULL DEFAULT '',
			  size VARCHAR(15) NOT NULL DEFAULT '',
			  created_at TIMESTAMP NOT NULL DEFAULT current_timestamp,
			  UNIQUE (id),
			  PRIMARY KEY  (id)    
		   ) $charset_collate;";
		}	
				
		if(!empty($sql)){
		   require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		   dbDelta($sql);
		}
	 }