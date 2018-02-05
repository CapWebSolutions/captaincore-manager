<?php $screen = get_current_screen(); ?>
<h2 class="nav-tab-wrapper" style="margin-top:30px;">
  <a class="nav-tab dashicons-before dashicons-admin-multisite<?php if( $screen->post_type == "website" ) { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=website" title="Websites"></a>
  <a class="nav-tab dashicons-before dashicons-groups<?php if( $screen->post_type == "customer") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=customer" title="Customers"></a>
	<a class="nav-tab dashicons-before dashicons-admin-users<?php if( $screen->post_type == "contact") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=contact" title="Contacts"></a>
	<a class="nav-tab dashicons-before dashicons-welcome-widgets-menus<?php if( $screen->post_type == "domain") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=domain" title="Domains"></a>
	<a class="nav-tab dashicons-before dashicons-media-spreadsheet<?php if( $screen->post_type == "changelog") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=changelog" title="Web Logs"></a>
	<a class="nav-tab dashicons-before dashicons-controls-repeat<?php if( $screen->post_type == "process") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=process" title="Processes"></a>
	<a class="nav-tab dashicons-before dashicons-media-spreadsheet<?php if( $screen->post_type == "process_log") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=process_log" title="Process Log"></a>
	<a class="nav-tab dashicons-before dashicons-building<?php if( $screen->post_type == "server") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=server" title="Server"></a>
	<a class="nav-tab dashicons-before dashicons-backup<?php if( $screen->post_type == "snapshot") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=snapshot" title="Snapshots"></a>
</h2>
<script>
jQuery(document).ready(function() {
	jQuery('li#toplevel_page_captaincore').removeClass("wp-not-current-submenu").addClass("wp-has-current-submenu wp-menu-open");
	jQuery('li#toplevel_page_captaincore > a').addClass("wp-has-current-submenu");
	jQuery('.wp-submenu .wp-first-item').addClass("current");
});
</script>
