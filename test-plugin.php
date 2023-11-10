<?php
/*
    Plugin Name: Test Plugin
    Plugin URI: https://shahadat.com.bd
    Description: Test plugin
    Version: 1.0
    Requires at least: 1.2
    Requires PHP: 7.0
    Author: Shahadat
    Author URI: https://shahadat.com.bd
    License:GPL v2 or later
    License URI: https://gnu.org/license/v2
    Text Domain: test
    Domain Path: /language

*/

if(!defined('WPINC')):
    die; 
endif;

define('CSS_PATH',plugins_url('/',__FILE__));

include(plugin_dir_path(__FILE__).'inc/style.php');
include(plugin_dir_path(__FILE__).'inc/script.php');

include( plugin_dir_path( __FILE__ ) . 'inc/options.php');
include( plugin_dir_path( __FILE__ ) . 'inc/menu.php');


