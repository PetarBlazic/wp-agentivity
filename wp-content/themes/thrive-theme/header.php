<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thrive-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

?>
<!doctype html>
<html <?php language_attributes(); ?><?php thrive_html_class(); ?>>
<head>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php Thrive\Theme\AMP\Main::print_amp_permalink(); ?>

	<?php thrive_meta_description(); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class( '' ); ?>>
