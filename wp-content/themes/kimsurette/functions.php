<?php

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function ks_scripts() {

	wp_enqueue_style( 'ks-google-fonts', 'http://fonts.googleapis.com/css?family=Oxygen:400,700,300' );

	wp_enqueue_style( 'ks-google-fonts', 'http://fonts.googleapis.com/css?family=Dancing+Script' );


}