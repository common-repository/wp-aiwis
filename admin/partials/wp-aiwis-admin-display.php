<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://aiwis.io
 * @since      1.0.0
 *
 * @package    Wp_Aiwis
 * @subpackage Wp_Aiwis/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="aiwis_options" action="options.php">
        <?php
            //Grab all options
            $options = get_option($this->plugin_name);

            // ScriptId
            $scriptId = $options['script_id'];
        ?>

        <?php
            settings_fields($this->plugin_name);
            do_settings_sections($this->plugin_name);
        ?>

        <!-- remove injected CSS from comments widgets -->
        <fieldset>
            <legend class="screen-reader-text"><span>Script Id</span></legend>
            <label for="<?php echo $this->plugin_name; ?>-script-id">
                <span><?php esc_attr_e('Script ID', $this->plugin_name); ?></span>
                <input type="text" id="<?php echo $this->plugin_name; ?>-script-id" name="<?php echo $this->plugin_name; ?>[script_id]"
                       placeholder="cb8bb824-2a20-40f2-9e47-e66f346b9f8c" style="width: 300px;" value="<?php echo htmlspecialchars($scriptId); ?>" required/>
            </label>
        </fieldset>

        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>
    </form>

</div>
