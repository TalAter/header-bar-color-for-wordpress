<?php
class Header_Bar_Color_WP {
  private static $initiated = false;

  public static $defaultColor = '#dcdcdc';

  /**
   * initializes Header Bar Color for WordPress Plugin
   */
  public static function init() {
    if (!self::$initiated) {
      self::init_hooks();
      self::$initiated = true;
    }
  }

  /**
   * Registers hooks for plugin actions
   */
  private static function init_hooks() {
    add_action('wp_head', array('Header_Bar_Color_WP', 'add_headers'));
  }

  private static function getHeaderColor() {
    $color = get_option('hebacowp-color');
    if (empty($color)) {
      $color = Header_Bar_Color_WP::$defaultColor;
    }
    return $color;
  }

  /**
   *
   */
  public static function add_headers() {
    $color = self::getHeaderColor();
    echo
      PHP_EOL.
      '<!-- Header Bar Color for WordPress Plugin -->'.PHP_EOL.
      '<meta name="theme-color" content="'.$color.'">'.PHP_EOL.
      '<meta name="msapplication-navbutton-color" content="'.$color.'">'.PHP_EOL.
      '<meta name="apple-mobile-web-app-status-bar-style" content="'.$color.'">'.PHP_EOL;
  }

}
