<?php
/**
 * Plugin Name: Car Dealer 
 * Plugin URI: http://www.wpwebdesignmadesimple.com
 * Description: Car Dealer
 * Version: 1.2
 * Author: James Haney
 * Author URI: http://www.wpwebdesignmadesimple.com
 * License: GPL2
 **/


register_activation_hook(__FILE__, 'activate_used_car');
function activate_used_car(){
    if (!isset($wpdb)) $wpdb = $GLOBALS['wpdb'];
    global $wpdb;
    $table_name = $wpdb->prefix . "cars";
    $sql = "CREATE TABLE $table_name (
  id int(11) NOT NULL AUTO_INCREMENT,
  year int(4) NOT NULL,
  make VARCHAR(20) NOT NULL,
  body_style VARCHAR(20) NOT NULL,
  engine VARCHAR(20) NOT NULL,
  trans VARCHAR(20) NOT NULL,
  drivetrain VARCHAR(20) NOT NULL,
  ext_color VARCHAR(20) NOT NULL,
  int_color VARCHAR(20) NOT NULL,
  mileage int(7) NOT NULL,
  vin int(50) NOT NULL,
  image VARCHAR(100) NOT NULL,
  price VARCHAR(20) NOT NULL,
  actual_cost decimal(10,2) NOT NULL,
  sale_price decimal(10,2) NOT NULL,
  display_price decimal(10,2) NOT NULL,
  sold VARCHAR(3) NOT NULL,
  date date NOT NULL,
  blue_tooth text,
  dvd_player text,
  media_input text,
  nav text,
  sat text,
  stab text,
  trac text,
  keyless text,
  sdairbgs text,
  description text,
  PRIMARY KEY id  (id)
);";
    require_once (ABSPATH . 'wp-admin/includes/upgrade.php');
    $wpdb->query($sql);

    $date = 'Y-m-d';
    $wpdb->insert('wp_cars', array(
        'year' => '1970',
        'make' => 'Dodge',
        'body_style' => 'Dart Swinger',
        'engine' => '340 ci',
        'trans' => '4 speed',
        'drivetrain' => '2wd',
        'ext_color' => 'Red',
        'int_color' => 'Black',
        'mileage' => '0',
        'vin' => '32165653',
        'image' => 'dart.jpg',
        'price' => '17500',
        'sold' => 'no',
        'date' => $date,
        'blue_tooth' => 'Blue Tooth,',
        'dvd_player' => 'DVD Player,',
        'media_input' => 'Media Input,',
        'nav' => 'Navigation System,',
        'sat' => 'Satellite Radio,',
        'stab' => 'Stability Control,',
        'trac' => 'Traction Control,',
        'keyless' => 'Keyless Entry,',
        'sdairbgs' => 'Side Air Bags',
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
		in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
		mollit anim id est laborum.'));
    $wpdb->insert('wp_cars', array(
        'year' => '1968',
        'make' => 'Pontiac',
        'body_style' => 'GTO',
        'engine' => '400 ci',
        'trans' => '4 speed',
        'drivetrain' => '2wd',
        'ext_color' => 'Green',
        'int_color' => 'Black',
        'mileage' => '0',
        'vin' => '32165653',
        'image' => 'L-GTO-1968.jpg',
        'price' => '14995',
        'sold' => 'no',
        'date' => $date,
        'blue_tooth' => 'Blue Tooth,',
        'dvd_player' => 'DVD Player,',
        'media_input' => 'Media Input,',
        'nav' => 'Navigation System,',
        'sat' => 'Satellite Radio,',
        'stab' => 'Stability Control,',
        'trac' => 'Traction Control,',
        'keyless' => 'Keyless Entry,',
        'sdairbgs' => 'Side Air Bags',
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
		in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
		mollit anim id est laborum.'));
    $wpdb->insert('wp_cars', array(
        'year' => '1970',
        'make' => 'Plymouth',
        'body_style' => 'Cuda',
        'engine' => '340 Magnum',
        'trans' => '4 speed',
        'drivetrain' => '2wd',
        'ext_color' => 'Black',
        'int_color' => 'Black',
        'mileage' => '0',
        'vin' => '32165653',
        'image' => 'Plymouth-Hemi-Cuda-1.jpg',
        'price' => '39000',
        'sold' => 'no',
        'date' => $date,
        'blue_tooth' => 'Blue Tooth,',
        'dvd_player' => 'DVD Player,',
        'media_input' => 'Media Input,',
        'nav' => 'Navigation System,',
        'sat' => 'Satellite Radio,',
        'stab' => 'Stability Control,',
        'trac' => 'Traction Control,',
        'keyless' => 'Keyless Entry,',
        'sdairbgs' => 'Side Air Bags',
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
		in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
		mollit anim id est laborum.'));
    $wpdb->insert('wp_cars', array(
        'year' => '1970',
        'make' => 'Plymouth',
        'body_style' => 'Superbird',
        'engine' => '440 ci',
        'trans' => '4 speed',
        'drivetrain' => '2wd',
        'ext_color' => 'Red',
        'int_color' => 'Black',
        'mileage' => '0',
        'vin' => '32165653',
        'image' => 'superbird.jpg',
        'price' => '129000',
        'sold' => 'no',
        'date' => $date,
        'blue_tooth' => 'Blue Tooth,',
        'dvd_player' => 'DVD Player,',
        'media_input' => 'Media Input,',
        'nav' => 'Navigation System,',
        'sat' => 'Satellite Radio,',
        'stab' => 'Stability Control,',
        'trac' => 'Traction Control,',
        'keyless' => 'Keyless Entry,',
        'sdairbgs' => 'Side Air Bags',
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
		in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
		mollit anim id est laborum.'));
    $wpdb->insert('wp_cars', array(
        'year' => '1970',
        'make' => 'Plymouth',
        'body_style' => 'Superbird',
        'engine' => '440 ci',
        'trans' => '4 speed',
        'drivetrain' => '2wd',
        'ext_color' => 'Red',
        'int_color' => 'Black',
        'mileage' => '0',
        'vin' => '32165653',
        'image' => 'superbird.jpg',
        'price' => '129000',
        'sold' => 'yes',
        'date' => $date,
        'blue_tooth' => 'Blue Tooth,',
        'dvd_player' => 'DVD Player,',
        'media_input' => 'Media Input,',
        'nav' => 'Navigation System,',
        'sat' => 'Satellite Radio,',
        'stab' => 'Stability Control,',
        'trac' => 'Traction Control,',
        'keyless' => 'Keyless Entry,',
        'sdairbgs' => 'Side Air Bags',
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
		in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
		mollit anim id est laborum.'));

    //create page
    $inventory = array(
        'post_title' => 'Inventory',
        'post_type' => 'page',
        'post_status' => 'publish',
        );

    $post1 = wp_insert_post($inventory);
    //print_r($post1);

    //set page template
    update_post_meta($post1, "_wp_page_template", "Display Cars Template.php");

    $edit_inventory = array(
        'post_title' => 'Edit',
        'post_type' => 'page',
        'post_status' => 'publish',
        );
    $post2 = wp_insert_post($edit_inventory);

    //set page template
    update_post_meta($post2, "_wp_page_template", "Edit Car Template.php");

    $editsingle = array(
        'post_title' => 'Edit Car Single',
        'post_type' => 'page',
        'post_status' => 'publish',
        );
    $post3 = wp_insert_post($editsingle);

    update_post_meta($post3, "_wp_page_template", "Edit Car Single Template.php");

    $upload = array(
        'post_title' => 'Upload',
        'post_type' => 'page',
        'post_status' => 'publish',
        );
    $post4 = wp_insert_post($upload);

    update_post_meta($post4, "_wp_page_template", "Upload Car Template.php");
	
	//create page
    $detail_display = array(
        'post_title' => 'Detail Display',
        'post_type' => 'page',
        'post_status' => 'publish',
        );

    $post5 = wp_insert_post($detail_display);
    //print_r($post1);

    //set page template
    update_post_meta($post5, "_wp_page_template", "Display Detail Template.php");
        
}

add_action('admin_menu', 'register_custom_menu_page');

function register_custom_menu_page() {
   add_menu_page('custom menu title', 'Car Dealer', 'add_users', 'car-dealer/myplugin-index.php', '');
}


//$conturl = content_url();
//include_once $conturl."/themes/twentytenchild/copy_img.php";
//

if( !defined( 'ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') )
    exit();
 
delete_option('my_option');
?>