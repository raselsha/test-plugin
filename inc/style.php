<?php

add_action('wp_enqueue_scripts','add_css');
function add_css(){
    
    wp_register_style('main',CSS_PATH.'assets/front-end/css/main.css',[],time(),'all');
    if(is_home() || is_page()){
    wp_enqueue_style('main');
    }

}

add_action('admin_enqueue_scripts','add_admin_css');
function add_admin_css($hook){

    wp_register_style('main',CSS_PATH.'assets/back-end/css/main.css',[],time(),'all');
    if('toplevel_page_test-plugin'==$hook){
        wp_enqueue_style('main');
    }
    
}