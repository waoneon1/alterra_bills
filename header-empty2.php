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
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="c-header">
    <div class="container">
        <div class="c-header__dekstop">
            <div class="c-header__logo">
                <a href="<?php echo home_url( '/' ); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="alterra bills logo">
                </a>
            </div>
            <div class="c-header__nav">
            </div>
        </div>
        <div class="c-header__mobile">
            <div class="c-header__wrapper" id="js-sidebar-trigger-effects">
                <button data-effect="js-sidebar-effect" class="c-header__burger js-burger-menu"></button>
                <div class="c-header__logo">
                    <a href="<?php echo home_url( '/' ); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="alterra bills logo">
                    </a>
                </div>
            </div>
            <div class="c-header__right">
                
            </div>
        </div>
    </div>
</header>

<?php $cls = is_front_page() ? '' : '--single'; ?>

<div class="u-nav-helper<?php echo $cls ?>"></div>