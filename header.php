<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alterra_bill
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="c-header__menu js-mobile-menu">
    <ul class="js-scrollto">
        <li><a href="#why">Why Us</a></li>
        <li><a href="#start">How To Start</a></li>
        <li><a href="#contactus">Contact Us</a></li>
    </ul>
</nav>
<header class="c-header">
    <div class="container">
        <div class="c-header__dekstop">
            <div class="c-header__logo">
                <a href="<?php echo home_url( '/' ); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo pdam pintar">
                </a>
            </div>
            <div class="c-header__nav">
                <ul class="js-scrollto">
                    <li><a href="#why">Why Us</a></li>
                    <li><a href="#start">How To Start</a></li>
                    <li><a href="#contactus">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="c-header__mobile">
            <div class="c-header__wrapper" id="js-sidebar-trigger-effects">
                <div class="c-header__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo pdam pintar">
                </div>
                <button data-effect="js-sidebar-effect" class="c-header__burger js-burger-menu ml-auto"></button>
            </div>
        </div>
    </div>
</header>
<div class="u-nav-helper"></div>