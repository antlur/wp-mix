<?php
// Add Admin Stylesheet
add_action('admin_head', 'add_admin_stylesheet');
function add_admin_stylesheet() {
  echo '<link rel="stylesheet" href="'. get_template_directory_uri() .'/css/admin.css" type="text/css" media="all" />';
}

// Remove Defalt Dashboard Widgets
function remove_dashboard_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );
remove_action( 'welcome_panel', 'wp_welcome_panel' );

// Edit Footer Text
function wpse_edit_footer()
{
    add_filter( 'admin_footer_text', 'wpse_edit_text', 11 );
}

function wpse_edit_text($content) {
    return 'Custom Development Solutions by <a href="http://antlur.co" target="_blank">Antlur, LLC</a>';
}
add_action( 'admin_init', 'wpse_edit_footer' );

// Remove Wordpress Version Number
function my_footer_shh() {
    remove_filter( 'update_footer', 'core_update_footer' );
}
add_action( 'admin_menu', 'my_footer_shh' );
