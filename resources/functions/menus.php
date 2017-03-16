<?php

// Register Menus
function register_my_menus()
{
  register_nav_menus(
    array(
      'header' => __( 'Header Menu' ),
      'footer' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
