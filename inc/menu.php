<?php



add_action('admin_menu','add_admin_menu');
function add_admin_menu(){
    add_menu_page(
        'Options Page', // page title
        'Options page', // enu name
        'manage_options', // user access
        'optionpage', //slug
        'add_option_page',// callback
        'dashicons-book', // icon
        100
    );
    add_submenu_page(
        'optionpage', // parent page slug
        'Create Option ', // sub menu title
        'Create Option', // sub menu name
        'manage_options', // user permission
        'create-option', // slug
        'create_option', // callback
    );
    add_submenu_page(
        'optionpage', // parent slug
        'View Option Data', // sub menu title
        'View Option Data', //sub menu name
        'manage_options', // user permission
        'view-option', // slug
        'view_option', // callback

    );
}

function add_option_page(){
    echo '<h2>Options Page</h2>';
    do_settings_sections( 'optionpage' );
}

function create_option(){
    echo '<h2>Create Options Field</h2>';
}

function view_option(){
    echo '<h2>Vew Options data</h2>';
}

$filters = 'plugin_action_links_'.plugin_basename(__FILE__);
add_filter($filters,'add_settings_link');

function add_settings_link($links){
    $link = '<a href="admin.php?page=optionpage">Settings</a>';
    array_push($links,$link);
    return $links;
}