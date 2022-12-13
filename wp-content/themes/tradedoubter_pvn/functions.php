<?php

if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
  add_action('admin_notices', function () {
    echo '<div class="error"><p>Timber not installed. Make sure you run a composer install in the theme directory</p></div>';
  });
  return;
  exit;
} else {
  require_once(__DIR__ . '/vendor/autoload.php');
}

$loader = new Nette\Loaders\RobotLoader;

$directories = glob(get_stylesheet_directory() . '/app/*', GLOB_ONLYDIR);
foreach ($directories as $directory)
  $loader->addDirectory($directory);

$loader->setTempDirectory(get_stylesheet_directory() . '/app/temp');
$loader->register(); // Run the RobotLoader

global $slug;
$slug = 'pas';

$config = [];

require_once(__DIR__ . "/config/config.php");
require_once(__DIR__ . "/app/app.php");
require_once("post-types/SF_post.php");
// require_once("post-types/SF_products.php");
require_once("post-types/SF_markers.php");


ini_set('upload_max_size', '64M');
ini_set('post_max_size', '64M');
ini_set('max_execution_time', '300');

// add_action( 'admin_menu', 'my_remove_admin_menus' );
// function my_remove_admin_menus() {
//   remove_menu_page( 'edit-comments.php' );
//   remove_menu_page( 'edit.php' );
// }


function reg_tag() {
  register_taxonomy_for_object_type('post_tag', 'products');
}
add_action('init', 'reg_tag');


if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title' 	=> 'Title Button Global Settings',
      'menu_title'	=> 'Title Button Global Settings',
      'menu_slug' 	=> 'title_button_global_settings',
      'capability'	=> 'edit_posts',
  ));

  acf_add_options_page(array(
    'page_title' 	=> 'Social media',
    'menu_title'	=> 'Social media',
    'menu_slug' 	=> 'social_media',
    'capability'	=> 'edit_posts',
    'icon_url' => 'dashicons-share',
));
  acf_add_options_page(array(
    'page_title' 	=> 'Settings contact',
    'menu_title'	=> 'Settings contact',
    'menu_slug' 	=> 'Settings_contact',
    'capability'	=> 'edit_posts',
    'icon_url' => 'dashicons-phone',
  ));
  acf_add_options_page(array(
    'page_title' 	=> 'Newsletter Form',
    'menu_title'	=> 'Newsletter Form',
    'menu_slug' 	=> 'Newsletter_Form',
    'capability'	=> 'edit_posts',
    'icon_url' => 'dashicons-format-aside',
  ));
}

function wpex_add_menu_home_link( $items, $args ) {

	if ( 'main' != $args->theme_location ) {
		return $items;
	}
	$home_link = '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
	$items = $home_link . $items;
	return $items;

}
add_filter( 'wp_nav_menu_items', 'wpex_add_menu_home_link', 10, 2 );
add_filter( 'wp_lazy_loading_enabled', '__return_false' );