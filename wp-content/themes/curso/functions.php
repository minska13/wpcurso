<?php

// Requerendo o arquivo Customizer
require_once get_template_directory() . '/inc/customizer.php';

// Carregando nossos scripts e folhas de estilos
function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', array(), '5.0.1', true ) ;
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', array(), '5.0.1', 'all' );
    wp_enqueue_style( 'font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css', array(), '5.11.2', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri().'/css/template.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Função de configuração do tema
function wpcurso_config(){
    // Registrando nossos menus
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );

    $args = array( 'height' => 225, 'width' => 1920);
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'video', 'image' ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array( 'height' => 110, 'width' => 200 ) );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __('Blood Red', 'wpcurso'),
            'slug' => 'blood-red',
            'color' => '#b9121b'
        ),
        array(
            'name' => __('White', 'wpcurso'),
            'slug' => 'white',
            'color' => '#ffffff'
        ),
    ));
    add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'wpcurso_config', 0 );

add_action( 'widgets_init', 'wpcurso_sidebars' );

function wpcurso_sidebars(){
    register_sidebar(
        array(
            'name' => 'Home Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar to be used on Home Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-2',
            'description' => 'Sidebar to be used on Blog Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Services 1',
            'id' => 'services-1',
            'description' => 'First Services Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Services 2',
            'id' => 'services-2',
            'description' => 'Second Services Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Services 3',
            'id' => 'services-3',
            'description' => 'Third Services Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Social Icons',
            'id' => 'social-media',
            'description' => 'Place your media icons here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}