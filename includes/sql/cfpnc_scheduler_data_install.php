<?php

/**
 * A series of methods for installing data into the SAPO database tables
 * 
 * @package SapoAdmin
 * @author Travus Helmly
 *  
 */

/**
 * Install the data into the confirmation table 
 */
function install_cfpnc_scheduler_data_zipcodes()
{
    require_once plugin_dir_path(__FILE__) . 'wp_insert_rows.php';
    global $wpdb;
    $zipcodes_table = $wpdb->prefix . "cfpnc_scheduler_zipcodes";
    $insert_arrays = array();
    
    //27501
    $insert_arrays[0] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27501',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '1',
        'saturday' => '0',
    );
    //27502
    $insert_arrays[1] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27502',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );
    //27511
    $insert_arrays[2] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27511',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );      
    //27512
    $insert_arrays[3] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27512',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );
    //27513
    $insert_arrays[4] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27513',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );
    //27518
    $insert_arrays[5] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27518',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );
    //27519
    $insert_arrays[6] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27519',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );        
    //27520
    $insert_arrays[7] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27520',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '0',
        'saturday' => '0',
    );
    //27523
    $insert_arrays[8] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27523',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27526
    $insert_arrays[9] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27526',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27527
    $insert_arrays[11] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27527',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '0',
        'saturday' => '0',
    );    
    //27539
    $insert_arrays[12] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27539',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27540
    $insert_arrays[13] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27540',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27545
    $insert_arrays[14] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27545',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '1',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '0',
        'saturday' => '0',
    );
    //27549
    $insert_arrays[15] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27549',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '1',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '0',
        'saturday' => '0',
    );
    //27560
    $insert_arrays[16] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27560',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );
    //27563
    $insert_arrays[17] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27563',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );        
    //27587
    $insert_arrays[18] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27587',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '1',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '0',
        'saturday' => '0',
    );    
    //27588
    $insert_arrays[19] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27588',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '1',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '0',
        'saturday' => '0',
    );
    //27591
    $insert_arrays[20] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27591',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '1',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '0',
        'saturday' => '1',
    );    
    //27592
    $insert_arrays[21] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27592',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27596
    $insert_arrays[22] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27596',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '1',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '0',
        'saturday' => '0',
    );
    //27601
    $insert_arrays[23] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27601',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '0',
        'saturday' => '0',
    );    
    //27603
    $insert_arrays[24] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27603',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '0',
        'saturday' => '1',
    );
    //27604
    $insert_arrays[25] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27604',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '0',
        'saturday' => '0',
    );
    //27605
    $insert_arrays[26] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27605',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );
    //27606
    $insert_arrays[27] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27606',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '0',
        'saturday' => '1',
    );    
    //27607
    $insert_arrays[28] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27607',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27608
    $insert_arrays[29] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27608',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27609
    $insert_arrays[30] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27609',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27610
    $insert_arrays[31] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27610',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '0',
        'saturday' => '0',
    );    
    //27611
    $insert_arrays[32] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27611',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27612
    $insert_arrays[33] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27612',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27613
    $insert_arrays[34] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27613',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27614
    $insert_arrays[35] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27614',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27615
    $insert_arrays[36] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27615',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '1',
        'saturday' => '1',
    );    
    //27616
    $insert_arrays[37] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27616',
        'sunday' => '0',
        'monday' => '0',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '1',
        'friday' => '0',
        'saturday' => '0',
    );    
    //27617
    $insert_arrays[38] = array(
        'user_id' => get_current_user_id(),
        'zipcode' => '27617',
        'sunday' => '0',
        'monday' => '1',
        'tuesday' => '0',
        'wednesday' => '0',
        'thursday' => '0',
        'friday' => '1',
        'saturday' => '1',
    );


    wp_insert_rows($insert_arrays, $zipcodes_table);
}


/**
 * All data install functions should be called here
 */
function cfpnc_scheduler_install_all_data()
{
    install_cfpnc_scheduler_data_zipcodes();
}