<?php

/**
 * The file that defines the donor registration ajax functionality.
 *
 * A class definition that includes ajax functionality
 *
 * @link       https://github.com/screwLock
 * @since      1.0.0
 *
 * @package    cfpnc-scheduler
 * @subpackage cfpnc-scheduler/public
 */

/**
 * All Ajax code for the donor registration page should be
 * set here.
 *
 * @since      1.0.0
 * @package    cfpnc-scheduler
 * @subpackage cfpnc-scheduler/public
 * @author     Travus Helmly <helmlyw@gmail.com>
 */

 class DonorRegistrationAjax {
    public function get_zipcodes(){
        global $wpdb;
        $zipcodes_table = $wpdb->prefix . "cfpnc_scheduler_zipcodes";

        $zipcodes = array();
        $days_of_week = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

        $zipcodes_results = $wpdb->get_results("SELECT * FROM " . $zipcodes_table . 
        " WHERE USER_ID = " . get_current_user_id()); //AND WHERE 

        //Send error message if error with query
        if (is_null($zipcodes) || !empty($wpdb->last_error)) wp_send_json_error();

        $index = 0;
        forEach($zipcodes_results as $zip){
            $days = array();

            //Needs to be refactored later on
            if($zip->monday == 1) array_push($days, 'monday');
            if($zip->tuesday == 1) array_push($days, 'tuesday');
            if($zip->wednesday == 1) array_push($days, 'wednesday');
            if($zip->thursday == 1) array_push($days, 'thursday');
            if($zip->friday == 1) array_push($days, 'friday');
            if($zip->saturday == 1) array_push($days, 'saturday');
            if($zip->sunday == 1) array_push($days, 'sunday');


            $zipcodes[$index] = array(
                "zipcode" => $zip->zipcode,
                "days" => $days,
                "maxTime" => $zip->max_time,
                "maxTimeEnabled" => $zip->enable_max_time,
                "maxPickups" => $zip->max_pickups
            );
            $index++;

        }

        wp_send_json_success($zipcodes);
    }

    public function save_donation(){
        global $wpdb;
        $donations_table = $wpdb->prefix . "cfpnc_scheduler_donations";

        $new_donation = $_POST['new_donation'];

        $donation_data = array(
            'email' => $new_donation['email'],
            'contact' => $new_donation['name'],
            'phone_number' => $new_donation['phoneNumber'],
            'pickup_address' => $new_donation['address'],
            'pickup_date' => date('Y-m-d', strtotime($new_donation['date'])),
            'items' => $new_donation['items'],
            'size' => $new_donation['size'],
            'stairs' => $new_donation['stairs'],
            'moving_out' => $new_donation['movingOut'],
            'yard_sale' => $new_donation['yardSale'],
            'estate_auction' => $new_donation['estateAuction']
        );

        $status = $wpdb->insert($donations_table, $donation_data, array('%s','%s','%s','%s','%s','%s', '%s', '%d', '%d', '%d', '%d'));
        //send_emails();
        wp_send_json_success("success");

    }

    //send emails to both cfpnc and donor
    //call this after saving pickup to database
    private function send_emails(){
        wp_mail('helmlyw@gmail.com', 'The subject', 'The message');
        wp_mail('helmlyw@gmail.com', 'The subject', 'The message');
    }

 }