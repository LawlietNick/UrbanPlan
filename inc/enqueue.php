<?php 
/*

@package urbanplan
    --------------------------------------------
      ENQUEUE ALL FRONTEND SCRIPTS AND STYLES 
    --------------------------------------------
*/

function urbanplan_script_enqueue() {
    wp_enqueue_style( 'urbanplan', get_template_directory_uri() . '/style.css', '0.0.1', 'all' );
}

add_action( 'wp_enqueue_scripts', 'urbanplan_script_enqueue' );