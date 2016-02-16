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
  }
}
