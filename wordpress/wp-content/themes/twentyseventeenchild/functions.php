<?php

function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
    array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css',
    array(), false, 'all');
    wp_enqueue_style('style');
    wp_enqueue_script('gallery-bootstrap-js',get_template_directory_uri() . '/js/script.js',array('jquery'));
}
add_action('wp_enqueue_scripts', 'load_stylesheets');



function include_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.3.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}
//add_action('wp_enqueue_scripts', 'include_jquery');




function loadjs(){
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gallery_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Blog Sidebar', 'gallery' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'mytheme' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Footer 1', 'gallery' ),
            'id'            => 'sidebar-2',
            'description'   => __( 'Add widgets here to appear in your footer.', 'gallery' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Footer 2', 'gallery' ),
            'id'            => 'sidebar-3',
            'description'   => __( 'Add widgets here to appear in your footer.', 'gallery' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'gallery_widgets_init' ); 


register_nav_menus(
    array(
            'top-menu'    => __('Top Menu', 'theme'),
            'footer-menu' => __('Footer Menu', 'theme'),
    )
    );

add_theme_support('post-thumbnails');


add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);






?>