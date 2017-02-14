<?php 
/*

@package urbanplan
    --------------------------------------------
      ADD THEME SUPPORTS
    --------------------------------------------
*/


function urbanplan_theme_setup() {

    // Activate menus admin option
    add_theme_support( 'menus' );

    // Registers menu position
    register_nav_menu( 'primary', 'Primary Header Navigation' );
}

add_action( 'after_setup_theme', 'urbanplan_theme_setup' );

