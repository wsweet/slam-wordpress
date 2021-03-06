<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Slam-Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700|PT+Sans:400,700" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'slam' ); ?></a>
	<header class="site-header" role="banner">
		<div class="navbar navbar-expand-md navbar-light bg-light" role="navigation">

				<a class="navbar-brand" href="/"></a> <!--<img src="wp-content/uploads/2018/02/Iman_sweetlifemort_crop2.png" >-->
				<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

					<?php
						wp_nav_menu( array(
							'theme_location'	=> 'primary',
							'menu'				=> 'Primary',
							'container'			=> 'nav',
							'container_class'	=> 'collapse navbar-collapse navbar-expand-md',
							'container_id'		=> 'navbarNav',
							'menu_class'		=> 'navbar-nav navbar-expand-md ml-auto'
						) );
					?>


		</div>
	</header>