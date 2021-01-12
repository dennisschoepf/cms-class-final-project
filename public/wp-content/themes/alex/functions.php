<?php

function getHashedStyleSheet()
{
  $dirCSS = new DirectoryIterator(get_stylesheet_directory());
  foreach ($dirCSS as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
      $fullName = basename($file);
      if (strpos($fullName, 'admin') !== false) {
        return $fullName;
      }
    }
  }
}

function add_theme_scripts()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/' . getHashedStyleSheet(), array('style'));
  wp_enqueue_script('main-script', get_template_directory_uri() . '/main.js');
  wp_enqueue_script('admin-script', get_template_directory_uri() . '/admin.js');
}

function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu')
    )
  );
}

function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');
add_action('init', 'register_my_menus');
add_action('wp_enqueue_scripts', 'add_theme_scripts');
add_theme_support('post-thumbnails');
add_filter('acf/settings/remove_wp_meta_box', '__return_false');
