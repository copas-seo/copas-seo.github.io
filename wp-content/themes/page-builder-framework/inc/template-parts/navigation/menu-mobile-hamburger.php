<?php
/**
 * Hamburger mobile menu.
 *
 * @package Page Builder Framework
 * @subpackage Template Parts
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

?>

<div class="wpbf-mobile-menu-hamburger wpbf-hidden-large">

	<div class="wpbf-mobile-nav-wrapper wpbf-container">

		<div class="wpbf-mobile-logo-container wpbf-2-3">

			<?php get_template_part( 'inc/template-parts/logo/logo-mobile' ); ?>

		</div>

		<div class="wpbf-menu-toggle-container wpbf-1-3">

			<?php do_action( 'wpbf_before_mobile_toggle' ); ?>

			<button id="wpbf-mobile-menu-toggle" class="wpbf-mobile-nav-item wpbf-mobile-menu-toggle wpbff wpbff-hamburger" aria-label="<?php _e( 'Site Navigation', 'page-builder-framework' ); ?>" aria-controls="navigation" aria-expanded="false" aria-haspopup="true">
				<span class="screen-reader-text"><?php _e( 'Menu Toggle', 'page-builder-framework' ); ?></span>
			</button>

			<?php do_action( 'wpbf_after_mobile_toggle' ); ?>

		</div>

	</div>

	<div class="wpbf-mobile-menu-container">

		<nav id="navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" aria-labelledby="wpbf-mobile-menu-toggle">

			<?php
			wp_nav_menu( array(
				'theme_location' => 'mobile_menu',
				'container'      => false,
				'menu_class'     => 'wpbf-mobile-menu',
				'depth'          => 4,
				'fallback_cb'    => 'wpbf_mobile_menu_fallback',
			) );
			?>

		</nav>

	</div>

</div>
