<?php 

/*

@package urbanplan
    --------------------
         ADMIN PAGE
    --------------------
*/

function urbanplan_add_admin_page(){
    
    // Generate Admin page 
    add_menu_page( 'UrbanPlan Theme Options', 'UrbanPlan', 'manage_options', 'lawlietnick_urbanplan','urbanplan_theme_create_page', get_template_directory_uri() . '/img/urbanplan-icon.png', 110 );

    // Generate Admin Sub pages 
    add_submenu_page(  'lawlietnick_urbanplan', 'UrbanPlan Theme Options', 'General', 'manage_options', 'lawlietnick_urbanplan', 'urbanplan_theme_create_page' );
    add_submenu_page(  'lawlietnick_urbanplan', 'UrbanPlan CSS Options', 'Custom CSS', 'manage_options', 'lawlietnick_urbanplan_css', 'urbanplan_theme_settings_page' );

    // Activate custom settings
    add_action( 'admin_init', 'urbanplan_custom_settings' );
}
add_action( 'admin_menu', 'urbanplan_add_admin_page');

function urbanplan_custom_settings(){
    register_setting( 'urbanplan-settings-group', 'first_name' );
    register_setting( 'urbanplan-settings-group', 'last_name' );
    register_setting( 'urbanplan-settings-group', 'nick_name' );

    //Social media ones
    register_setting( 'urbanplan-settings-group', 'facebook_handler' );
    register_setting( 'urbanplan-settings-group', 'github_handler' );
    register_setting( 'urbanplan-settings-group', 'linkedin_handler' );
    register_setting( 'urbanplan-settings-group', 'snapchat_handler' );
    register_setting( 'urbanplan-settings-group', 'soundcloud_handler' );
    register_setting( 'urbanplan-settings-group', 'twitter_handler', 'urbanplan_sanitize_twitter_handler' );
    register_setting( 'urbanplan-settings-group', 'youtube_handler' );
    
    add_settings_section( 'urbanplan-sidebar-options', 'Sidebar Options', 'urbanplan_sidebar_options', 'lawlietnick_urbanplan' );
    
    add_settings_field( 'sidebar-name', 'Name', 'urbanplan_sidebar_name', 'lawlietnick_urbanplan', 'urbanplan-sidebar-options' );
    add_settings_field( 'sidebar-nickname', 'Nick name', 'urbanplan_sidebar_nickname', 'lawlietnick_urbanplan', 'urbanplan-sidebar-options' );


    add_settings_field( 'sidebar-facebook', 'Facebook', 'urbanplan_sidebar_facebook', 'lawlietnick_urbanplan', 'urbanplan-sidebar-options' );
    add_settings_field( 'sidebar-github', 'Github', 'urbanplan_sidebar_github', 'lawlietnick_urbanplan', 'urbanplan-sidebar-options' );
    add_settings_field( 'sidebar-linkedin', 'LinkedIn', 'urbanplan_sidebar_linkedin', 'lawlietnick_urbanplan', 'urbanplan-sidebar-options' );
    add_settings_field( 'sidebar-snapchat', 'Snapchat', 'urbanplan_sidebar_snapchat', 'lawlietnick_urbanplan', 'urbanplan-sidebar-options' );
    add_settings_field( 'sidebar-soundcloud', 'Soundcloud', 'urbanplan_sidebar_soundcloud', 'lawlietnick_urbanplan', 'urbanplan-sidebar-options' );
    add_settings_field( 'sidebar-twitter', 'Twitter', 'urbanplan_sidebar_twitter', 'lawlietnick_urbanplan', 'urbanplan-sidebar-options' );
    add_settings_field( 'sidebar-youtube', 'YouTube', 'urbanplan_sidebar_youtube', 'lawlietnick_urbanplan', 'urbanplan-sidebar-options' );
    
}

function urbanplan_sidebar_options() {
    echo 'Custom your sidebar info';
}

function urbanplan_sidebar_name() {
    $firstName = esc_attr( get_option( 'fist_name' ) );
    $lastName = esc_attr( get_option( 'last_name' ) );
    
    echo '<input type="text" name="first_name" value="'.$fistName.'" placeholder="First Name" />
          <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
}

function urbanplan_sidebar_nickname() {
    $nickName = esc_attr( get_option( 'nick_name' ) );
    echo '<input type="text" name="nick_name" value="'.$nickName.'" placeholder="Nick Name" />';
}


// Social Media Handlers
function urbanplan_sidebar_facebook() {
    $facebook = esc_attr( get_option( 'facebook_handler' ) );
    echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook" />';
}

function urbanplan_sidebar_github() {
    $github = esc_attr( get_option( 'github_handler' ) );
    echo '<input type="text" name="github_handler" value="'.$github.'" placeholder="Github" />';
}

function urbanplan_sidebar_linkedin() {
    $linkedin = esc_attr( get_option( 'linkedin_handler' ) );
    echo '<input type="text" name="linkedin_handler" value="'.$linkedin.'" placeholder="LinkedIn" />';
}

function urbanplan_sidebar_snapchat() {
    $snapchat = esc_attr( get_option( 'snapchat_handler' ) );
    echo '<input type="text" name="snapchat_handler" value="'.$snapchat.'" placeholder="Snapchat" />';
}

function urbanplan_sidebar_soundcloud() {
    $soundcloud = esc_attr( get_option( 'soundcloud_handler' ) );
    echo '<input type="text" name="soundcloud_handler" value="'.$soundcloud.'" placeholder="Soundcloud" />';
}

function urbanplan_sidebar_twitter() {
    $twitter = esc_attr( get_option( 'twitter_handler' ) );
    echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter" />
    <p class="description">Input your Twitter username without the @ character.</p>';
}

function urbanplan_sidebar_youtube() {
    $youtube = esc_attr( get_option( 'youtube_handler' ) );
    echo '<input type="text" name="youtube_handler" value="'.$youtube.'" placeholder="YouTube" />';
}


// Sanitization settings
function urbanplan_sanitize_twitter_handler( $input ){
    return str_replace('@', '', sanitize_text_field( $input ));
}


function urbanplan_theme_create_page() {
    // Generate admin page
    require_once( get_template_directory() . '/inc/templates/urbanplan-admin.php' );   
}

function urbanplan_settings_page() {
    // 
}