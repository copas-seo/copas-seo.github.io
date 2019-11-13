<?php
/**
 * Mobile logo.
 *
 * @package Page Builder Framework
 * @subpackage Template Parts
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

$menu_alt_tag    = get_theme_mod( 'menu_logo_alt', get_bloginfo( 'name' ) );
$menu_title_tag  = get_theme_mod( 'menu_logo_title', get_bloginfo( 'name' ) );
$menu_logo_url   = get_theme_mod( 'menu_logo_url', home_url() );
$custom_logo_id  = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_src( $custom_logo_id, 'full' );
$custom_logo_url = apply_filters( 'wpbf_logo_mobile', $custom_logo_url[0] );
$tagline         = get_bloginfo( 'description' );
$tagline_toggle  = get_theme_mod( 'menu_logo_description_mobile' );

if ( has_custom_logo() ) {

	echo '<div class="wpbf-mobile-logo" itemscope="itemscope" itemtype="https://schema.org/Organization">';
	echo '<a href="' . esc_url( $menu_logo_url ) . '" itemprop="url">';
	echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="' . esc_attr( $menu_alt_tag ) . '" title="' . esc_attr( $menu_title_tag ) . '" itemprop="logo" />';
	echo '</a>';
	echo '</div>';

} else {

	echo '<div class="wpbf-mobile-logo" itemscope="itemscope" itemtype="https://schema.org/Organization">';
	echo '<span class="site-title" itemprop="name">';
	echo '<a href="' . esc_url( $menu_logo_url ) . '" rel="home" itemprop="url">' . esc_html( get_bloginfo( 'name' ) ) . '</a>';
	echo '</span>';
	if ( ! empty( $tagline ) && $tagline_toggle ) {
		echo '<p class="site-description wpbf-tagline" itemprop="description">' . esc_html( $tagline ) . '</p>';
	}
	echo '</div>';

}
