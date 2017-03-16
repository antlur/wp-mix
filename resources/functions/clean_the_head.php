<?php

// Hide the admin bar at the top when user is logged in
show_admin_bar( false );

// Remove all the extra crap Wordpress outputs
function clean_the_head()
{
    // category feeds
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    // post and comment feeds
    remove_action( 'wp_head', 'feed_links', 2 );
    // EditURI link
    remove_action( 'wp_head', 'rsd_link' );
    // windows live writer
    remove_action( 'wp_head', 'wlwmanifest_link' );
    // index link
    remove_action( 'wp_head', 'index_rel_link' );
    // previous link
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
    // start link
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
    // links for adjacent posts
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    // WP version
    remove_action( 'wp_head', 'wp_generator' );
}

add_action( 'init', 'clean_the_head' );

// Remove Yoast mentioning of Wordpress
function is_yoast()
{
    return file_exists(WP_PLUGIN_DIR . '/wordpress-seo/wp-seo.php');
}

function remove_yoast()
{
  global $wpseo_front;
  remove_action( 'wpseo_head', array($wpseo_front, 'debug_marker') , 2 );
}

if(is_yoast()){
    add_action('wp_enqueue_scripts','remove_yoast');
}

