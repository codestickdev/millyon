<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mill-Yon
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
<div id="page" class="site">
	<header id="masthead" class="siteHeader">
		<div class="siteHeader__wrap container">
			<div class="siteHeader__logo">
				<?php the_custom_logo(); ?>
			</div>
			<div class="siteHeader__menu">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'millyon' ); ?></button>
				<div class="siteHeader__lang">
					<?php pll_the_languages( array( 'show_flags' => 0, 'show_names' => 1, 'display_names_as' => 'slug', ) ); ?>
				</div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'	 => 'menu-ul',
						)
					);
				?>
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="menuMobile">
		<div class="menuMobile__close"></div>
		<div class="menuMobile__wrap">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'	 => 'menu-ul',
					)
				);
			?>
		</div>
	</div>
