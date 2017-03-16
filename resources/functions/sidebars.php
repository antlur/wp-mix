<?php

// Register Sidebar
function register_my_sidebars()
{
    register_sidebar( array(
        'name'         => __( 'Right Hand Sidebar' ),
        'id'           => 'sidebar-1',
        'description'  => __( 'Widgets in this area will be shown on the right-hand side.' ),
        'before_title' => '<h1>',
        'after_title'  => '</h1>',
    ) );
}

add_action( 'init', 'register_my_sidebars' );
