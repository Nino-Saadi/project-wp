<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );


// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


function skampo_register_assets() {

    // Déclarer jQuery
    wp_enqueue_script('jquery' );

    // Déclarer le JS
	wp_enqueue_script(
        'skmp',
        get_template_directory_uri() . '/js/main.js',
        array( 'jquery' ),
        '1.0',
        true
    );

    wp_enqueue_script(
          'skmp',
          get_template_directory_uri() . '/js/util.js',
          array( 'jquery' ),
          '1.0',
          true
      );

      wp_enqueue_script(
            'skmp',
            get_template_directory_uri() . '/js/browser.min.js',
            array( 'jquery' ),
            '1.0',
            true
        );

        wp_enqueue_script(
              'skmp',
              get_template_directory_uri() . '/js/breakpoint.min.js',
              array( 'jquery' ),
              '1.0',
              true
          );

    // Déclarer style.css à la racine du thème
    wp_enqueue_style(
        'style_css',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // Déclarer un autre fichier CSS
    wp_enqueue_style(
           'main',
           get_template_directory_uri() . '/assets/css/main.css',
           array(),
           rand(111, 9999),
           'all'
       );

       wp_enqueue_style(
              'main',
              get_template_directory_uri() . '/assets/css/fontawesome-all.min.css',
              array(),
              rand(111, 9999),
              'all'
          );

}
add_action( 'wp_enqueue_scripts', 'skampo_register_assets' );

// Ajout Menu
  // register_nav_menus( array(
  // 'home' => 'PluginBuddy Mobile Navigation Menu',
  // 'footer_menu' => 'My Custom Footer Menu',
// ) );
