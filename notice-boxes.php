<?php
/*
Plugin Name: Notice Boxes
Plugin URI: http://www.technovalley.in/notice-boxes
Description: Add nice note,alerts,ideas or help etc. boxes to your site.To use this plugin, view <a href = "http://www.technovalley.in/notice-boxes" > Help </a>
Version: 1.2
Author: Ayush Agrawal
Author URI: http://www.technovalley.in
*/

function notice_boxes(){
    $notice_boxes = get_option('notice_boxes');
    if($notice_boxes=='1'){
        if ( !defined('WP_CONTENT_URL') ) define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
        $plugin_url = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__));
        echo '<link rel="stylesheet" href="'.$plugin_url.'/style.css"'.' type="text/css" media="screen" />';
    }
}

function active_notice_boxes(){
        add_option('notice_boxes','1','active the plugin');
}

function deactive_notice_boxes(){
    delete_option('notice_boxes');
}

add_action('wp_head', 'notice_boxes');

register_activation_hook(__FILE__,'active_notice_boxes');
register_deactivation_hook(__FILE__,'deactive_notice_boxes');

?>