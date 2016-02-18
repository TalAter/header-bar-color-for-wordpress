<div class="wrap">

  <div id="poststuff" class="skitt-welcome">
    <div id="post-body" class="metabox-holder columns-2">
      <div id="post-body-content" style="position: relative;">
        <div class="postbox">
          <h3>Header Bar Color Plugin</h3>
          <div class="inside">
            <img src="<?php echo Header_Bar_Color_WP_Admin::getPublicFile('/img/header-bar-color-samples.gif');?>" id="hebaco_sample_headers">
            <p>Header Bar Color is a WordPress plugin that lets you change the color of the browser's address bar when people visit your site.</p>
            <p>You can easily customize the color to match your site or brand, and any user visiting your site on a modern phone (including most new Android phones) will get a customized browsing experience.
            </p>
            <br class="clear">
          </div>
        </div>
      </div>

      <div id="postbox-container-1" class="postbox-container">
        <div class="postbox">
          <h3>Choose Header Color</h3>
          <div class="inside">
            <form method="post" action="options.php" id="hebacowp_settings_form">
              <?php
              // Render form using Settings API
              settings_fields('hebacowp-section-settings');
              do_settings_sections('hebacowp-settings');
              submit_button();
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br class="clear">
  </div>

</div>

<style>
  img#hebaco_sample_headers {
    float: right;
    margin-left: 30px;
    height: 296px;
  }
  #post-body-content .postbox, #postbox-container-1 .postbox {
    min-height: 360px;
  }
  #post-body-content .postbox p {
    font-size: 15px;
    margin-left: 9px;
  }
  .postbox h3 {
    color: #444!important;
    padding: 8px 20px 6px!important;
    margin: 0;
    border-bottom: 1px solid rgb(238, 238, 238);
    font-size: 16px!important;
  }
  #hebacowp_settings_form th {
    display: none;
  }
  #submit {
    margin-left: 10px;
  }
</style>