<?php
class Header_Bar_Color_WP_Admin {
  private static $initiated = false;

  /**
   * initializes Header Bar Color for WordPress Plugin Admin
   */
  public static function init() {
    if (!self::$initiated) {
      self::init_hooks();
      self::$initiated = true;
    }
  }

  /**
   * Registers hooks for admin actions
   */
  private static function init_hooks() {
    add_action('admin_menu', array('Header_Bar_Color_WP_Admin', 'add_menu'));
  }

  /**
   * Adds the options menu item
   */
  public static function add_menu() {
    add_submenu_page('themes.php', 'Header Bar Color', 'Header Bar Color', 'manage_options', 'hebacowp-settings', array('Header_Bar_Color_WP_Admin', 'admin_page_settings'));
  }

  public static function admin_page_settings() {
    self::view('admin_page_settings');
  }

  /**
   * Renders a view
   *
   * @param $view_name string Name of the view to render
   */
  private static function view($view_name) {
    include(HEBACOWP_PLUGIN_DIR.'views'.DIRECTORY_SEPARATOR.$view_name.'.php');
  }

}
