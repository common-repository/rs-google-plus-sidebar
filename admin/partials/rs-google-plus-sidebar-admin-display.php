<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.xtendify.com/en/user/2-rosinghal
 * @since      1.0.0
 *
 * @package    Rs_Google_Plus_Sidebar
 * @subpackage Rs_Google_Plus_Sidebar/admin/partials
 */
?>

<div class="wrap">

    <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

    <form method="post" name="sidebar_options" action="options.php">

    <?php 
	    //Grab all options      
	    $options = get_option($this->plugin_name);

	    $google_plus_page_id = $options['google_plus_page_id'];
	    $widget_alignment = $options['widget_alignment'];
	    $icon_alignment = $options['icon_alignment'];
    ?>


    <?php
        settings_fields( $this->plugin_name );
        do_settings_sections( $this->plugin_name );
    ?>

	    <!-- insert google_plus_page_id -->
	    <fieldset>
	        <legend class="screen-reader-text"><span><?php _e('Google Plus page ID', $this->plugin_name);?></span></legend>
	        <label for="<?php echo $this->plugin_name;?>-google_plus_page_id">
	            <input type="text" id="<?php echo $this->plugin_name;?>-google_plus_page_id" name="<?php echo $this->plugin_name;?>[google_plus_page_id]" value="<?php echo $google_plus_page_id; ?>" />
	            <span><?php esc_attr_e( 'Google Plus page ID', $this->plugin_name ); ?></span>
	        </label>
	    </fieldset>

	    <hr>
	    
	    <fieldset>
	        <legend class="screen-reader-text"><span><?php _e('Icon Alignment', $this->plugin_name);?></span></legend>
	        <label for="<?php echo $this->plugin_name;?>-icon_alignment">
	        	<select id="<?php echo $this->plugin_name;?>-icon_alignment" name="<?php echo $this->plugin_name;?>[icon_alignment]">
	        		<option value="top" <?php selected( $icon_alignment, "top"); ?>><?php _e('Top', $this->plugin_name);?></option>
	        		<option value="bottom" <?php selected( $icon_alignment, "bottom"); ?>><?php _e('Bottom', $this->plugin_name);?></option>
	        	</select>
	            <span><?php esc_attr_e( 'Icon Alignment', $this->plugin_name ); ?></span>
	        </label>
	    </fieldset>
	    
	    <fieldset>
	        <legend class="screen-reader-text"><span><?php _e('Widget Alignment', $this->plugin_name);?></span></legend>
	        <label for="<?php echo $this->plugin_name;?>-widget_alignment">
	        	<select id="<?php echo $this->plugin_name;?>-widget_alignment" name="<?php echo $this->plugin_name;?>[widget_alignment]">
	        		<option value="left" <?php selected( $widget_alignment, "left"); ?>><?php _e('Left', $this->plugin_name);?></option>
	        		<option value="right" <?php selected( $widget_alignment, "right"); ?>><?php _e('Right', $this->plugin_name);?></option>
	        	</select>
	            <span><?php esc_attr_e( 'Widget Alignment', $this->plugin_name ); ?></span>
	        </label>
	    </fieldset>

        <?php submit_button(__('Save all changes', $this->plugin_name), 'primary','submit', TRUE); ?>


    </form>

</div>