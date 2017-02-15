<?php 
/*

@package urbanplan
    --------------------------------------------
      ENQUEUE ALL FRONTEND SCRIPTS AND STYLES 
    --------------------------------------------
*/

function urbanplan_script_enqueue() {
    wp_enqueue_style( 'urbanplan', get_template_directory_uri() . '/style.css', '0.0.1', 'all' );
    
    
    wp_register_script( 'jquery-slim', get_template_directory_uri() . '/js/jquery-3.1.1.slim.min.js', array('jquery'), '', true );
    wp_register_script( 'urbanplan-customjs', get_template_directory_uri() . '/js/main.js', array('jquery'), '0.0.1', true );

    wp_enqueue_script( 'jquery-slim' );
    wp_enqueue_script( 'urbanplan-customjs' );
}

add_action( 'wp_enqueue_scripts', 'urbanplan_script_enqueue' );