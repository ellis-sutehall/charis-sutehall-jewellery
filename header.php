<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Charis Sutehall
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'charis-sutehall' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php
                      //  echo file_get_contents( "http://www.charissutehall.co.uk/wp-content/uploads/2015/11/charis-logo.svg" );
                    ?>
					<img src="https://www.charissutehall.co.uk/wp-content/uploads/2015/11/charis-logo.svg" width="240" height="auto" alt="Charis Sutehall Logo" />
				</a>
			<div class="search-login-holder clearfix">
				<!-- Search Widget -->
				<div id="search-bar">
				<?php
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-2') ) : endif;
				?>
				</div> <!-- Search Widget -->
				<div class="login-box clearfix">
        <?php global $current_user;
					if ( is_user_logged_in() ) {
	          echo "<a class='my-account' href='/my-account/'>My Account</a> <a class='log-out' href='".wp_logout_url('/my-account/customer-logout')."' title='Logout'>Logout</a>";
					} else {
						echo "<a href='https://www.charissutehall.co.uk/my-account' id='login' title='login'>Login/Register</a>";
					}
				?>
				</div>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!-- Basket Button -->
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'charis-sutehall' ); ?></button>
			<!-- Basket Button Mobile -->
				<a href="/?page_id=6" class="basket">
					<button class="basket-mobile">
							<!-- Basket Count -->
							<?php
								$count = WC()->cart->cart_contents_count;
								if ( $count > 0 ) {
									echo "<span class='basket-count'>{$count}</span>";
								}
							?>
					</button>
				</a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			<a class="site-title-mobile" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php
                     //   echo file_get_contents( "http://www.charissutehall.co.uk/wp-content/uploads/2015/11/charis-logo.svg" );
                    ?>
				<img src="https://www.charissutehall.co.uk/wp-content/uploads/2016/02/charis-logo-white.svg" width="240" height="auto" alt="Charis Sutehall Logo" />
			</a>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
