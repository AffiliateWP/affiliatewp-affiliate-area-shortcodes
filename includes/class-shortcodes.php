<?php

class AffiliateWP_AAS {

	public function __construct() {

        // force front-end scripts
        add_filter( 'affwp_force_frontend_scripts', array( $this, 'force_frontend_scripts' ) );

        // affiliate area tabs

        // [affiliate_area_graphs]
        add_shortcode( 'affiliate_area_graphs', array( $this, 'affiliate_area_graphs' ) );

        // [affiliate_area_settings]
        add_shortcode( 'affiliate_area_settings', array( $this, 'affiliate_area_settings' ) );

        // [affiliate_area_creatives]
        add_shortcode( 'affiliate_area_creatives', array( $this, 'affiliate_area_creatives' ) );

        // [affiliate_area_referrals]
        add_shortcode( 'affiliate_area_referrals', array( $this, 'affiliate_area_referrals' ) );

        // [affiliate_area_stats]
        add_shortcode( 'affiliate_area_stats', array( $this, 'affiliate_area_stats' ) );

        // [affiliate_area_urls]
        add_shortcode( 'affiliate_area_urls', array( $this, 'affiliate_area_urls' ) );

        // [affiliate_area_visits]
        add_shortcode( 'affiliate_area_visits', array( $this, 'affiliate_area_visits' ) );

        // individual stats

        // [affiliate_referrals]
        add_shortcode( 'affiliate_referrals', array( $this, 'affiliate_referrals' ) );

        // [affiliate_earnings]
        add_shortcode( 'affiliate_earnings', array( $this, 'affiliate_earnings' ) );

        // [affiliate_visits]
        add_shortcode( 'affiliate_visits', array( $this, 'affiliate_visits' ) );

        // [affiliate_conversion_rate]
        add_shortcode( 'affiliate_conversion_rate', array( $this, 'affiliate_conversion_rate' ) );

        // [affiliate_commission_rate]
        add_shortcode( 'affiliate_commission_rate', array( $this, 'affiliate_commission_rate' ) );

        // other

        // [affiliate_logout]
        add_shortcode( 'affiliate_logout', array( $this, 'affiliate_logout' ) );

	}

    /**
     * Force the frontend scripts to load on pages with the shortcodes
     *
     * @since  1.0
     */
    public function force_frontend_scripts( $ret ) {
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

    /**
    * [affiliate_area_graphs] shortcode
    *
    * @since  1.0
    */
    public function affiliate_area_graphs( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	ob_start();

    	echo '<div id="affwp-affiliate-dashboard">';

    	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'graphs' );

    	echo '</div>';

    	$content = ob_get_clean();

    	return do_shortcode( $content );
    }


    /**
    * [affiliate_area_settings] shortcode
    *
    * @since  1.0
    */
    public function affiliate_area_settings( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	ob_start();

    	echo '<div id="affwp-affiliate-dashboard">';

    	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'settings' );

    	echo '</div>';

    	$content = ob_get_clean();

    	return do_shortcode( $content );
    }


    /**
    * [affiliate_area_creatives] shortcode
    *
    * @since  1.0
    */
    public function affiliate_area_creatives( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	ob_start();

    	echo '<div id="affwp-affiliate-dashboard">';

    	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'creatives' );

    	echo '</div>';

    	$content = ob_get_clean();

    	return do_shortcode( $content );
    }


    /**
    * [affiliate_area_referrals] shortcode
    *
    * @since  1.0
    */
    public function affiliate_area_referrals( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	ob_start();

    	echo '<div id="affwp-affiliate-dashboard">';

    	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'referrals' );

    	echo '</div>';

    	$content = ob_get_clean();

    	return do_shortcode( $content );
    }


    /**
    * [affiliate_area_stats] shortcode
    *
    * @since  1.0
    */
    public function affiliate_area_stats( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	ob_start();

    	echo '<div id="affwp-affiliate-dashboard">';

    	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'stats' );

    	echo '</div>';

    	$content = ob_get_clean();

    	return do_shortcode( $content );
    }


    /**
    * [affiliate_area_urls] shortcode
    *
    * @since  1.0
    */
    function affiliate_area_urls( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	ob_start();

    	echo '<div id="affwp-affiliate-dashboard">';

    	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'urls' );

    	echo '</div>';

    	$content = ob_get_clean();

    	return do_shortcode( $content );
    }

    /**
    * [affiliate_area_visits] shortcode
    *
    * @since  1.0
    */
    function affiliate_area_visits( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	ob_start();

    	echo '<div id="affwp-affiliate-dashboard">';

    	affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'visits' );

    	echo '</div>';

    	$content = ob_get_clean();

    	return do_shortcode( $content );
    }


    /**
     * Show the total number of unpaid/paid referrals for the logged in affiliate
     *
     * [affiliate_referrals status="paid"]
     * [affiliate_referrals status="unpaid"]
     *
     * @since  1.1
     */
    function affiliate_referrals( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	$atts = shortcode_atts( array(
    		'status'    => ''
    	), $atts, 'affiliate_referrals' );

    	switch ( $atts['status'] ) {

    		case 'paid':
    			$content = affwp_count_referrals( affwp_get_affiliate_id(), 'paid' );
    			break;

    		case 'unpaid':
    			$content = affwp_count_referrals( affwp_get_affiliate_id(), 'unpaid' );
    			break;

    	}

    	return do_shortcode( $content );
    }

    /**
     * Show an affiliate's total unpaid/paid earnings
     *
     * [affiliate_earnings status="paid"]
     * [affiliate_earnings status="unpaid"]
     *
     * @since  1.1
     */
    function affiliate_earnings( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	$atts = shortcode_atts( array(
    		'status'    => ''
    	), $atts, 'affiliate_earnings' );

    	switch ( $atts['status'] ) {

    		case 'paid':
    			$content = affwp_get_affiliate_earnings( affwp_get_affiliate_id(), true );
    			break;

    		case 'unpaid':
    			$content = affwp_get_affiliate_unpaid_earnings( affwp_get_affiliate_id(), true );
    			break;

    	}

    	return do_shortcode( $content );
    }


    /**
     * Show the total number of visits an affiliate has had
     *
     * [affiliate_visits]
     *
     * @since  1.1
     */
    function affiliate_visits( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	$content = affwp_count_visits( affwp_get_affiliate_id() );

    	return do_shortcode( $content );
    }


    /**
     * Show an affiliate's conversion rate
     *
     * [affiliate_conversion_rate]
     *
     * @since  1.1
     */
    function affiliate_conversion_rate( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	$content = affwp_get_affiliate_conversion_rate( affwp_get_affiliate_id() );

    	return do_shortcode( $content );
    }

    /**
     * Show an affiliate's commission rate
     *
     * [affiliate_commission_rate]
     *
     * @since  1.1
     */
    function affiliate_commission_rate( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	$content = affwp_get_affiliate_rate( affwp_get_affiliate_id(), true );

    	return do_shortcode( $content );
    }

    /**
     * Show a logout link for the affiliate
     *
     * [affiliate_logout]
     *
     * @since  1.1
     */
    function affiliate_logout( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

    	$redirect = function_exists( 'affiliate_wp' ) && affiliate_wp()->settings->get( 'affiliates_page' ) ? affiliate_wp()->login->get_login_url() : home_url();
    	$redirect = apply_filters( 'affwp_aas_logout_redirect', $redirect );

    	$content = apply_filters( 'affwp_aas_logout_link', '<a href=" ' . wp_logout_url( $redirect ) . '">' . __( 'Log out', 'affiliatewp-affiliate-area-shortcodes' ) . '</a>', $redirect );

    	return do_shortcode( $content );

    }

}
new AffiliateWP_AAS;
