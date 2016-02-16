<div class="wrap">
  <h2>Header Bar Color Plugin</h2>

  <form method="post" action="options.php" id="hebacowp_settings_form">
    <?php
    // Render form using Settings API
    settings_fields('hebacowp-section-settings');
    do_settings_sections('hebacowp-settings');
    submit_button();
    ?>
  </form>
</div>
