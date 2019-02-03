<?php
/*
INCLUDE SCRIPTS
*/

function cats_script_enqueue() {
  //CSS
  wp_enqueue_style ('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.2.1', 'all');
  wp_enqueue_style ('customstyle', get_template_directory_uri() . '/assets/css/cats.css', array(), '1.0.0', 'all');
  //JS
  // wp_enqueue_script ('jquery');
  wp_enqueue_script ('customsjs', get_template_directory_uri() . '/assets/js/cats.js', array(), '0.0.1', true);
  wp_enqueue_script ('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.2.1', true);
}

add_action('wp_enqueue_scripts', 'cats_script_enqueue');

// Get educational alert - UNCOMMENT BEFORE HAND IN
// require get_parent_theme_file_path('./addons/educational_alert.php');

require get_parent_theme_file_path('/addons/custom-customizer.php');

require get_parent_theme_file_path('/addons/custom-post-types.php');

?>
