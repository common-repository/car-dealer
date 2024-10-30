<?php


  global $wpdb;
  $thetable = $wpdb->prefix."cars";
  //Delete any options that's stored also?
  //delete_option('wp_yourplugin_version');
  $wpdb->query("DROP TABLE IF EXISTS $thetable");

$table_name = $wpdb->prefix . "posts";
$postids=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Inventory'"));
foreach ($postids as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}
$postids=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Edit'"));
foreach ($postids as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}
$postids=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Upload'"));
foreach ($postids as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);}	$postids=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Detail Display'"));foreach ($postids as $post_title){    //echo "$post_title"."<br />";    wp_delete_post($post_title,true);}	$postids=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Edit Car Single'"));foreach ($postids as $post_title){    //echo "$post_title"."<br />";    wp_delete_post($post_title,true);
}
?>