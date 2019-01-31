<?php
    // include all styles
    function themebs_enqueue_styles() {

      wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
      wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ));
      wp_enqueue_style( 'bootstrap.min', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
      wp_enqueue_style( 'menu', get_stylesheet_directory_uri(). '/css/menu.css', array(), rand(111,9999), 'all');
      wp_enqueue_style( 'form', get_stylesheet_directory_uri(). '/css/form.css', array(), rand(111,9999), 'all');
    }
    add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');

    // include all JS
    function themebs_enqueue_scripts() {
      wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array( 'jquery' ) );
      wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . '/js/custom-scripts.js', array( 'jquery' ), rand(111,9999), true);
    }
    add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');

  ?>