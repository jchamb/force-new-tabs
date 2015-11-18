<?php
/*
Plugin Name: Force New Tab
Description: Force external links into a new tab
Plugin URI: http://jchamb.com
Author: Author
Author URI: http://jchamb.com
Version: 1.0
License: GPL2
Text Domain: force-new-tab
*/


function fnt_add_scripts()
{
    wp_enqueue_script(
        'force-new-tab'
        ,trailingslashit(plugins_url( '/', __FILE__ )).'force-new-tabs.js'
        ,array('jquery')
        ,false
        ,true
    );

    wp_localize_script( 'force-new-tab', 'FNT', array( 'siteurl' => site_url() ) );
}
add_action('wp_enqueue_scripts', 'fnt_add_scripts' );
