<?php 
  # While Developing the theme
  # Must add the hard coded version number in production
wp_enqueue_style('woo_commerce_style', get_stylesheet_uri(), array(), fileatime( get_template_directory(). '/style.css'), 'all' );
