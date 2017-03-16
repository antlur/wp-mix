<?php
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
		'page_title' 	=> 'Global Settings and Options',
		'menu_title'	=> 'Global Options',
		'menu_slug' 	=> 'global-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Header Settings',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

}
