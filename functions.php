<?php

 
/**
 * Theme Setup Function
 *
 * Hooked into the after_setup_theme hook, which runs after theme is activated
 */
if (!function_exists('wpstarter_theme_setup')):
function wpstarter_theme_setup(){
 
  // Enable support for theme translations
  load_theme_textdomain('wordpress-starter', get_template_directory() . '/languages');


  // Enable support for custom logo 
  add_theme_support('custom-logo');

  
  // Enable support for custom background support
  add_theme_support('custom-background', array(
    'default-position-x' => 'center',
    'default-position-y' => 'center',
    'default-size' => 'cover',
    'default-repeat' => 'no-repeat',
    'default-attachment' => 'fixed'
  ));

  
  // Enable feed links for post and comments in the head
  add_theme_support('automatic-feed-links');

  
  // Allow HTML5 markup on forms
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

  
  // Enable support for post thumbnails and featured images.
  add_theme_support('post-thumbnails');

  // Additional sizes
  add_image_size('thumbnail', 150, 150, true); 
  add_image_size('small', 300, 9999); 
  add_image_size('medium', 600, 9999); 
  add_image_size('large', 1200, 9999); 
  add_image_size('extra-large', 1900, 9999); 

  
  // Add support for two custom navigation menus.
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'wordpress-starter'),
    'secondary' => __('Secondary Menu', 'wordpress-starter')
  ));

  
  // Enable support for the following post formats
  add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

  // Hide admin bar
  show_admin_bar(false);

}
endif; // wpstarter_theme_setup
add_action('after_setup_theme', 'wpstarter_theme_setup');




/**
 * Theme Scripts/Styles function
 *
 * Registers and enqueues theme script and style files
 */
function wpstarter_theme_scripts(){

  // Styles
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap.css', array(), 3.3);
  wp_enqueue_style('style', get_template_directory_uri() . '/styles/style.css', array('bootstrap'), 1);
  
  // Scripts
  wp_enqueue_script('script', get_template_directory_uri() . '/scripts/script.js', array('jquery'), 1, true);

}
add_action('wp_enqueue_scripts', 'wpstarter_theme_scripts');




/**
 * Registers a widget area
 */
function wpstarter_widgets_init(){
  register_sidebar(array(
    'name' => __('Sidebar Widget Area', 'wordpress-starter'),
    'id' => 'sidebar-widget-area-1',
    'description' => __('Add widgets to appear in sidebar', 'wordpress-starter'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'wpstarter_widgets_init');





/**
 * Custom post classes
 */
function wpstart_post_classes($classes) {

  // Adds custom class to posts with thumbnails
  if(current_theme_supports('post-thumbnails')){
    if(has_post_thumbnail()){
      $classes[] = "post-has-thumbnail";
    }
  }

  return $classes;
} 
add_filter('post_class', "wpstart_post_classes");