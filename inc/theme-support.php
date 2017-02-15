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

/*
    ========================
        SIDEBAR FUNCTIONS
    ========================
*/
function urbanplan_sidebar_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Urbanplan Sidebar', 'urbanplantheme'),
            'id' => 'urbanplan-sidebar',
            'description' => 'Dynamic Right Sidebar',
            'before_widget' => '<section id="%1$s" class="sunset-widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="sunset-widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'urbanplan_sidebar_init');

/*
    ========================
        WALKER NAV CLASS
    ========================
*/
class UrbanPlan_Walker_Nav_Primary extends Walker_Nav_menu
{
    public function start_lvl(&$output, $depth = 0, $args = array())
    { //ul
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    { //li a span
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $li_attributes = '';
        $class_names = $value = '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
        $classes[] = 'menu-item-'.$item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-submenu';
        }
        $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="'.esc_attr($class_names).'"';
        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen($id) ? ' id="'.esc_attr($id).'"' : '';
        $output .= $indent.'<li'.$id.$value.$class_names.$li_attributes.'>';
        $attributes = !empty($item->attr_title) ? ' title="'.esc_attr($item->attr_title).'"' : '';
        $attributes .= !empty($item->target) ? ' target="'.esc_attr($item->target).'"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="'.esc_attr($item->xfn).'"' : '';
        $attributes .= !empty($item->url) ? ' href="'.esc_attr($item->url).'"' : '';
        $attributes .= ($args->walker->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
        $item_output = $args->before;
        $item_output .= '<a'.$attributes.'>';
        $item_output .= $args->link_before.apply_filters('the_title', $item->title, $item->ID).$args->link_after;
        $item_output .= ($depth == 0 && $args->walker->has_children) ? ' <b class="caret"></b></a>' : '</a>';
        $item_output .= $args->after;
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}