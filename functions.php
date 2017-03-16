<?php
include 'resources/functions/utilities.php';
include 'resources/functions/clean_the_head.php';
include 'resources/functions/customize_admin.php';
include 'resources/functions/scripts.php';
include 'resources/functions/menus.php';
include 'resources/functions/sidebars.php';
include 'resources/functions/stop_user_enumeration.php';
include 'resources/functions/theme_support.php';
include 'resources/functions/options_pages.php';
include 'resources/functions/wp_bootstrap_navwalker.php';

function theme_img($path){
    return get_template_directory_uri() . '/public/img/' . $path;
}
