<?php

function bootstrapstarter_enqueue_styles() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style('style', get_template_directory_uri() . '/bootstrap/css/styles.css' );
    $dependencies = array('bootstrap');
	wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
    wp_enqueue_style( 'header-style', get_template_directory_uri().'/header.css' );
    wp_enqueue_style( 'header-style', get_template_directory_uri().'/home.css' ); 
    wp_enqueue_style( 'header-style', get_template_directory_uri().'/iou.css' ); 
	wp_enqueue_script( 'masonry', get_template_directory_uri().'/bootstrap/js/masonry.pkgd.min.js' , array(), '', true); 
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', array(''), '', true );
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );
    // wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.bundle.min.js', $dependencies, '', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
// add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );
?>