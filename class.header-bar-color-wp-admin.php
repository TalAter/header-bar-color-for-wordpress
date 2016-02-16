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
    add_action('admin_init', array('Header_Bar_Color_WP_Admin', 'settings_init'));
  }

  /**
   * Initializes all the settings used by plugin
   */
  public static function settings_init()
  {
    // add the settings section - hebacowp-section-settings
    add_settings_section(
      'hebacowp-section-settings',  // section id
      null,                         // title
      null,                         // callback
      'hebacowp-settings'           // page name
    );

    // add the setting fields
    add_settings_field(
      'hebacowp-color',                                         // setting id
      'Header Bar Color',                                       // title
      array('Header_Bar_Color_WP_Admin', 'display_input_color'), // callback function
      'hebacowp-settings',                                      // page id
      'hebacowp-section-settings',                              // section id
      array(                                                    // arguments to pass callback
        'setting_id' => 'hebacowp-color',
        'placeholder' => 'Header color e.g. #4682B4'
      )
    );

    // Register all settings
    register_setting('hebacowp-section-settings', 'hebacowp-color', array('Header_Bar_Color_WP_Admin', 'sanitize_color'));
  }

  /**
   * Receives an string from input and sanitizes it
   *
   * @param $input string
   * @return boolean
   */
  public static function sanitize_color($input) {
    if (strlen($input) == 6 || strlen($input) == 3) {
      $input = '#'.$input;
    }
    if (preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', $input)) {
      return $input;
    } else {
      return Header_Bar_Color_WP::$defaultColor;
    }
  }

  /**
   * Renders a text input
   * @param $args
   */
  public static function display_input_color($args)
  {
    echo '<input name="'.$args['setting_id'].'" type="color" value="'.get_option($args['setting_id']).'" placeholder="'.$args['placeholder'].'" />';
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
