<?php
/**
 * Plugin Name: AffiliateWP - Affiliate Area Shortcodes
 * Plugin URI: http://affiliatewp.com
 * Description: Provides shortcodes for each tab of the Affiliate Area
 * Author: Pippin Williamson and Andrew Munro
 * Author URI: http://affiliatewp.com
 * Version: 1.0
 */

/**
 * Force the frontend scripts to load on pages with the shortcodes
 * 
 * @since  1.0
 */
function affwp_aas_force_frontend_scripts( $ret ) {
	global $post;

	if ( 
		has_shortcode( $post->post_content, 'affiliate_area_creatives' ) ||
		has_shortcode( $post->post_content, 'affiliate_area_graphs' )    ||
		has_shortcode( $post->post_content, 'affiliate_area_referrals' ) ||
		has_shortcode( $post->post_content, 'affiliate_area_settings' )  ||
		has_shortcode( $post->post_content, 'affiliate_area_stats' )     ||
		has_shortcode( $post->post_content, 'affiliate_area_urls' )      ||
		has_shortcode( $post->post_content, 'affiliate_area_visits' ) 
	) {
		$ret = true;
	}
	
	return $ret;
}
add_filter( 'affwp_force_frontend_scripts', 'affwp_aas_force_frontend_scripts' );

/**
* [affiliate_area_graphs] shortcode
*
* @since  1.0
*/
function affwp_aas_affiliate_graphs_shortcode( $atts, $content = null ) {

	if ( ! ( is_user_logged_in() && affwp_is_affiliate() ) ) {
		return $content;
	}

	ob_start();

	echo '<div id="affwp-affiliate-dashboard">';

	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'graphs' );

	echo '</div>';

	$content = ob_get_clean();

	return $content;
}
add_shortcode( 'affiliate_area_graphs', 'affwp_aas_affiliate_graphs_shortcode' );

/**
* [affiliate_area_settings] shortcode
*
* @since  1.0
*/
function affwp_aas_affiliate_settings_shortcode( $atts, $content = null ) {

	if ( ! ( is_user_logged_in() && affwp_is_affiliate() ) ) {
		return $content;
	}

	ob_start();

	echo '<div id="affwp-affiliate-dashboard">';

	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'settings' );

	echo '</div>';

	$content = ob_get_clean();

	return $content;
}
add_shortcode( 'affiliate_area_settings', 'affwp_aas_affiliate_settings_shortcode' );

/**
* [affiliate_area_creatives] shortcode
*
* @since  1.0
*/
function affwp_aas_affiliate_creatives_shortcode( $atts, $content = null ) {

	if ( ! ( is_user_logged_in() && affwp_is_affiliate() ) ) {
		return $content;
	}

	ob_start();

	echo '<div id="affwp-affiliate-dashboard">';

	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'creatives' );

	echo '</div>';

	$content = ob_get_clean();

	return $content;
}
add_shortcode( 'affiliate_area_creatives', 'affwp_aas_affiliate_creatives_shortcode' );

/**
* [affiliate_area_referrals] shortcode
*
* @since  1.0
*/
function affwp_aas_affiliate_referrals_shortcode( $atts, $content = null ) {

	if ( ! ( is_user_logged_in() && affwp_is_affiliate() ) ) {
		return $content;
	}

	ob_start();

	echo '<div id="affwp-affiliate-dashboard">';

	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'referrals' );

	echo '</div>';

	$content = ob_get_clean();

	return $content;
}
add_shortcode( 'affiliate_area_referrals', 'affwp_aas_affiliate_referrals_shortcode' );


/**
* [affiliate_area_stats] shortcode
*
* @since  1.0
*/
function affwp_aas_affiliate_stats_shortcode( $atts, $content = null ) {

	if ( ! ( is_user_logged_in() && affwp_is_affiliate() ) ) {
		return $content;
	}

	ob_start();

	echo '<div id="affwp-affiliate-dashboard">';

	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'stats' );

	echo '</div>';

	$content = ob_get_clean();

	return $content;
}
add_shortcode( 'affiliate_area_stats', 'affwp_aas_affiliate_stats_shortcode' );


/**
* [affiliate_area_urls] shortcode
*
* @since  1.0
*/
function affwp_aas_affiliate_urls_shortcode( $atts, $content = null ) {

	if ( ! ( is_user_logged_in() && affwp_is_affiliate() ) ) {
		return $content;
	}

	ob_start();

	echo '<div id="affwp-affiliate-dashboard">';

	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'urls' );

	echo '</div>';

	$content = ob_get_clean();

	return $content;
}
add_shortcode( 'affiliate_area_urls', 'affwp_aas_affiliate_urls_shortcode' );


/**
* [affiliate_area_visits] shortcode
*
* @since  1.0
*/
function affwp_aas_affiliate_visits_shortcode( $atts, $content = null ) {

	if ( ! ( is_user_logged_in() && affwp_is_affiliate() ) ) {
		return $content;
	}

	ob_start();

	echo '<div id="affwp-affiliate-dashboard">';

	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'visits' );

	echo '</div>';

	$content = ob_get_clean();

	return $content;
}
add_shortcode( 'affiliate_area_visits', 'affwp_aas_affiliate_visits_shortcode' );