<?php
class Header_Bar_Color_WP {
  private static $initiated = false;

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
  }

}
