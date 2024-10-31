<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.xtendify.com/en/user/2-rosinghal
 * @since      1.0.0
 *
 * @package    Rs_Google_Plus_Sidebar
 * @subpackage Rs_Google_Plus_Sidebar/public/partials
 */
?>

<?php
$options = get_option($this->plugin_name);
$social_sidebar_google_plus = $options['google_plus_page_id'];
$social_sidebar_widget_alignment = $options['widget_alignment'];
$social_sidebar_icon_alignment = $options['icon_alignment'];
?>
<?php if($social_sidebar_google_plus) { ?>
<div class="ss-wrapper first-wrapper first-wrapper-<?php echo $social_sidebar_icon_alignment.'-'.$social_sidebar_widget_alignment; ?>">
	<div class="ss-icon google-plus-icon first-icon-<?php echo $social_sidebar_icon_alignment.'-'.$social_sidebar_widget_alignment; ?>"></div>
	<div class="google-plus-body">
		<!-- Place this tag in your head or just before your close body tag. -->
		<script src="https://apis.google.com/js/platform.js" async defer></script>

		<!-- Place this tag where you want the widget to render. -->
		<div class="g-page" data-width="240" data-href="https://plus.google.com/<?php echo $social_sidebar_google_plus; ?>" data-showcoverphoto="false" data-rel="publisher"></div>
    </div>
</div>
<?php } ?>