<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<header id="site-header" class="g01">
			<nav id="site-navigation" class="g01__main-navigation container">
				<div class="g01__heading">
					<h3 class="g01__title"><?php esc_html_e( 'EDEN HAWKES' ); ?></h3>
					<p class="g01__sub-title">
						<?php esc_html_e( '2D Animation, Rigging Artist' ); ?>
					</p>
				</div>
				<?php
				wp_nav_menu(
					array(
						'menu'					 => '2',
						'menu_id'        => 'primary-menu',
						'menu_class'		 => 'g01__menu'
					)
				);
				?>
				<div class="g01__toggle-nav">
					<div class="g01__bar bar1"></div>
					<div class="g01__bar bar2"></div>
					<div class="g01__bar bar3"></div>
				</div>
			</nav><!-- #site-navigation -->

			<?php
				wp_nav_menu(
					array(
						'menu'					 => '2',
						'menu_id'        => 'primary-menu',
						'menu_class'		 => 'g01__menu-mobile'
					)
				);
			?>
		</header><!-- #site-header -->
