<?php
/**
 * Tyche functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tyche
 */

/**
 * Start Tyche theme framework
 */
require_once 'inc/class-tyche-autoloader.php';
$tyche = new Tyche();

//Create Vertical Menu
     register_nav_menus(array('Vertical'=>esc_html__('Vertical Menu','Tyche'),));