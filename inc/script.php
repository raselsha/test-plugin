<?php
add_action('wp_enqueue_scripts','add_js');

function add_js(){
    wp_register_script('main',CSS_PATH.'assets/front-end/script.js',[],time(),true);
    if(is_home()){
        wp_enqueue_script('main');
    }
}

add_action('admin_enqueue_scripts','add_admin_js');
function add_admin_js($hook){
    wp_register_script('main',CSS_PATH.'assets/back-end/script.js',[],time(),true);
    if('toplevel_page_test-plugin'==$hook){
        wp_enqueue_script('main');
    }
}