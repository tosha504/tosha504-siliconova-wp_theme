<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package siliconova
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
<?php wp_body_open(); ?>
<div id="page" class="wrapper">

	<header id="masthead" class="header">
		<div class="container">
			<div class="header__box">
				<?php
				$logo = get_field('logo', 'options');
				if( $logo ) { ?>  
					<div class="header__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ) ?>">
						<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"></a>  
					</div>
				<?php } ?> 
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header_menu',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'header__menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<div class="header__burger"></div>
			</div>
		</div>
	</header><!-- #masthead -->
