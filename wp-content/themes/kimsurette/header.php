<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sanctuary
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url'); ?>">
</head>


<body <?php body_class(); ?>>
		<div class="menu-container">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="site-description"><?php bloginfo('description'); ?></div>
		</div>

<nav>
<!-- <div class="menu-container"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>
 -->
<div class="menu-container">
 <?php wp_nav_menu(array(
	'menu' => 'Main Menu', 
	'container_id' => 'cssmenu', 
	'walker' => new CSS_Menu_Walker()
)); ?>
</div>
</nav>
