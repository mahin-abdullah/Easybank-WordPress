<?php

  function easybank_theme_files() {
    wp_enqueue_style('easybank_main_styles', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'easybank_theme_files')
?>