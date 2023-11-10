<?php

function add_settings() {
  add_settings_section( 'section_settings', 'Add a settings section', 'settings_section_callback', 'optionpage' );
  add_settings_field( 'section_settings_field', 'Add a settings field', 'settings_field_callback', 'optionpage','section_settings' );
}
add_action( 'admin_init', 'add_settings' );

function settings_section_callback() {
  esc_html_e( 'Plugin settings section description', 'test ' );
  
}
function settings_field_callback() {
  esc_html_e( 'Plugin settings field description', 'test ' );
  
}