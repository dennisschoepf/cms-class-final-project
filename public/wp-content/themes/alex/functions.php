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
  wp_enqueue_script('script', get_template_directory_uri() . '/admin.js');
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
