<?php
// Stöd för utvald bild
function add_thumbnail_support() {
    add_theme_support('post-thumbnails');
    add_image_size('mobil', '336', '223');
    add_image_size('desktop', '440', '248');
}
add_action('after_setup_theme', 'add_thumbnail_support');
// Registrera menyer
function register_menu() {
    register_nav_menus(array(
        'main-nav' => 'Huvudmeny',
        'subnav' => 'Undermeny'));   
}
add_action('init', 'register_menu');
// Registrera widget-area
function register_widget_area() {
    register_sidebar(array(
        'name' => 'Widgetområde',
        'id' => 'widget-area',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'register_widget_area');
// Räkna/returnera antal inlägg
function count_posts($category) {
    if (is_string($category)) {
        $catID = get_cat_ID($category);
    } else if (is_numeric($category)) {
        $catID = $category;
    } else {
        return 0;
    }
    $cat = get_category($catID);
    return $cat->count;
}
// Gör det möjligt för redaktörer att uppdatera plugins/teman om så krävs
function add_capabilities() {
    $role = get_role('editor');
    $role->add_cap('update_plugins', true);
    $role->add_cap('update_themes', true);
}
add_action('init', 'add_capabilities');
