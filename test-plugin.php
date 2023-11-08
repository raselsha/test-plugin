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

add_action('admin_menu','add_admin_menu');
function add_admin_menu(){
    add_menu_page(
        'Plugin Title',
        'Test Plugin',
        'manage_options',
        'test-plugin',
        'test_plugin',
        'dashicons-book',
        100
    );
    add_submenu_page(
        'test-plugin',
        'Plugin Title',
        'Topics',
        'manage_options',
        'topics',
        'topics',
    );
    add_submenu_page(
        'test-plugin',
        'Plugin Title',
        'Category',
        'manage_options',
        'category',
        'category',

    );
}

function test_plugin(){
    echo 'Test Plugin';
}

function topics(){
    echo 'topics';
}


function category(){
    echo 'category';
}

$filters = 'plugin_action_links_'.plugin_basename(__FILE__);
add_filter($filters,'add_settings_link');

function add_settings_link($links){
    $link = '<a href="admin.php?page=test-plugin">Settings</a>';
    array_push($links,$link);
    return $links;
}

define('CSS_PATH',plugins_url('/',__FILE__));

include(plugin_dir_path(__FILE__).'inc/style.php');
include(plugin_dir_path(__FILE__).'inc/script.php');