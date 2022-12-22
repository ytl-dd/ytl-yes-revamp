<?php

/**
 * The header for FWM site
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yes-twentytwentyone
 */

?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Cache-Control" content="no-cache" />
	
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<title><?php wp_title(''); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri() . '/assets/css/fwm-style.css' ?>" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri() . '/assets/js/bootstrap.bundle.js' ?>" rel="stylesheet" />

	<?php wp_head(); ?>
	
	<script type="text/javascript">var $ = jQuery.noConflict();</script>

	<?php get_template_part('template-parts/header/tracking'); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/header/tracking-body'); ?>

	<?php wp_body_open(); ?>

	<!-- Layer Page STARTS -->
	<div class="layer-page">
		<?php get_template_part('template-parts/header/fwm-site-header'); ?>