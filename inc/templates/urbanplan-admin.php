
<h1>UrbanPlan Options</h1>


<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields( 'urbanplan-setting-group' ); ?>
    <?php do_settings_sections( 'lawlietnick_urbanplan' ); ?>
    <?php submit_button(); ?>
</form>

