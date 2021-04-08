<?php
// Add dynamic title tag support
function getgroup_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
};

// Add Menus Function
function get_group_menus(){
    $loactions = array(
        'primary' => 'Main Menu',
        'footer-left-1' => 'Footer Left 1',
        'footer-left-2' => 'Footer Left 2',
        'footer'  => 'Footer Menu'
    );
    register_nav_menus($loactions);
}

add_action('init', 'get_group_menus');

add_action('after_setup_theme', 'getgroup_theme_support');
// Register Styles
function getgroup_register_styles(){
    $version = wp_get_theme()->get( "Version");
    wp_enqueue_style('styles', get_template_directory_uri() . "/style.css", array('bootstrap-styles'), $version, "all" );
    wp_enqueue_style('bootstrap-styles', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array(), "4.5.2", "all" );
    wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), "5.15.3", "all" );
}

add_action("wp_enqueue_scripts", "getgroup_register_styles");

// Register Scripts
function getgroup_register_scripts(){
    wp_enqueue_script('bootstrap-jquery', "https://code.jquery.com/jquery-3.2.1.slim.min.js", array(), '3.2.1', true);
    wp_enqueue_script('bootstrap-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", array(), '1.12.9', true);
    wp_enqueue_script('bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array(), '3.2.1', true);
    wp_enqueue_script('my-js', get_template_directory_uri() . "/assets/js/main.js", array(), '3.2.1', true);
}

add_action("wp_enqueue_scripts", "getgroup_register_scripts");

// Add wedgits
function getgroup_widget_areas(){
    register_sidebar(
        array(
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
            'name'  => 'Sidebar Area',
            'id'    => 'sidebar-1',
            'description' => 'Sidebar Widget Area' 
        )
    );
    register_sidebar(
        array(
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
            'name'  => 'Footer Area',
            'id'    => 'footer-1',
            'description' => 'Footer Widget Area' 
        )
    );
}

add_action('widgets_init', 'getgroup_widget_areas');

//Header Image
function getgroup_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 200,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'getgroup_custom_header_setup' );
?>

