<?php
/**
 *
 * @link              https://www.talater.com/
 * @since             0.0.1
 * @package           Header_Bar_Color_WP_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Header Bar Color for WordPress
 * Plugin URI:        https://www.talater.com/
 * Description:       Customize the color of Chrome's address bar on your site
 * Version:           0.0.1
 * Author:            Tal Ater
 * Author URI:        https://www.talater.com/
 * License:           MIT
 *
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

// Define constants
define('HEBACOWP_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Initiate plugin
require_once(HEBACOWP_PLUGIN_DIR.'class.header-bar-color-wp.php');
add_action('init', array('Header_Bar_Color_WP', 'init'));

// Initiate admin interface
if (is_admin()) {
  require_once(HEBACOWP_PLUGIN_DIR.'class.header-bar-color-wp-admin.php');
  add_action('init', array('Header_Bar_Color_WP_Admin', 'init'));
}
