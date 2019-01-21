<?php

      // Include custom navwalker
    require_once('bs4navwalker.php');
    // Register WordPress nav menu
    register_nav_menu('primary', 'Top menu');

    // include bootstrap files
    function themebs_enqueue_styles() {

      wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
      wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' )
      );
      wp_enqueue_style( 'developer1-menu', get_template_directory_uri() . '/css/menu.css', array(), filemtime( get_stylesheet_directory() . '/css/menu.css' ));
      wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), filemtime( get_stylesheet_directory() . '/css/bootstrap.min.css' ));
    }
    add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');

    function themebs_enqueue_scripts() {
      wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array( 'jquery' ) );
    }
    add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');

  ?>