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

		// [affiliate_area_payouts]
        add_shortcode( 'affiliate_area_payouts', array( $this, 'affiliate_area_payouts' ) );

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

		// [affiliate_campaign_stats]
        add_shortcode( 'affiliate_campaign_stats', array( $this, 'affiliate_campaign_stats' ) );

		// [affiliate_id]
        add_shortcode( 'affiliate_id', array( $this, 'affiliate_id' ) );

		// [affiliate_username]
        add_shortcode( 'affiliate_username', array( $this, 'affiliate_username' ) );

		// [affiliate_name]
        add_shortcode( 'affiliate_name', array( $this, 'affiliate_name' ) );

		// [affiliate_website]
        add_shortcode( 'affiliate_website', array( $this, 'affiliate_website' ) );

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
	* [affiliate_area_payouts] shortcode
	*
	* @since 1.1.4
	*/
	function affiliate_area_payouts( $atts, $content = null ) {

		if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
			return;
		}

		ob_start();

		echo '<div id="affwp-affiliate-dashboard">';

		affiliate_wp()->templates->get_template_part( 'dashboard-tab', 'payouts' );

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
     * Show an affiliate's campaign stats
     *
     * [affiliate_campaign_stats]
     *
     * @since  1.1.1
     */
    function affiliate_campaign_stats( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

		ob_start();

		?>

		<div id="affwp-affiliate-dashboard-campaign-stats" class="affwp-tab-content">
			<table class="affwp-table">
				<thead>
					<tr>
						<th><?php _e( 'Campaign', 'affiliatewp-affiliate-area-shortcodes' ); ?></th>
						<th><?php _e( 'Visits', 'affiliatewp-affiliate-area-shortcodes' ); ?></th>
						<th><?php _e( 'Unique Links', 'affiliatewp-affiliate-area-shortcodes' ); ?></th>
						<th><?php _e( 'Converted', 'affiliatewp-affiliate-area-shortcodes' ); ?></th>
						<th><?php _e( 'Conversion Rate', 'affiliatewp-affiliate-area-shortcodes' ); ?></th>
					</tr>
				</thead>

				<tbody>
					<?php if( $campaigns = affwp_get_affiliate_campaigns( affwp_get_affiliate_id() ) ) : ?>
						<?php foreach( $campaigns as $campaign ) : ?>
							<tr>
								<td><?php echo ! empty( $campaign->campaign ) ? esc_html( $campaign->campaign ) : __( 'None set', 'affiliatewp-affiliate-area-shortcodes' ); ?></td>
								<td><?php echo esc_html( $campaign->visits ); ?></td>
								<td><?php echo esc_html( $campaign->unique_visits ); ?></td>
								<td><?php echo esc_html( $campaign->referrals ); ?></td>
								<td><?php echo esc_html( affwp_format_amount( $campaign->conversion_rate ) ); ?>%</td>
							</tr>
						<?php endforeach; ?>
					<?php else : ?>
						<tr>
							<td colspan="5"><?php _e( 'You have no referrals or visits that included a campaign name.', 'affiliatewp-affiliate-area-shortcodes' ); ?></td>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>

			<?php do_action( 'affwp_affiliate_dashboard_after_campaign_stats', affwp_get_affiliate_id() ); ?>

		</div>

		<?php

		$content = ob_get_clean();

    	return do_shortcode( $content );
    }

	/**
     * Show an affiliate's ID
     *
     * [affiliate_id]
     *
     * @since  1.1.1
     */
    function affiliate_id( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

		$content = affwp_get_affiliate_id();

    	return do_shortcode( $content );
    }

	/**
     * Show an affiliate's username
     *
     * [affiliate_username]
     *
     * @since  1.1.1
     */
    function affiliate_username( $atts, $content = null ) {

    	if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

		$content = affwp_get_affiliate_username();

    	return do_shortcode( $content );
    }

	/**
     * Show an affiliate's name
     *
     * [affiliate_name]
     *
     * @since  1.1.1
     */
    function affiliate_name( $atts, $content = null ) {

		if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
			return;
		}

		$atts = shortcode_atts( array(
    		'first_name_only' => ''
    	), $atts, 'affiliate_name' );

		if ( isset( $atts['first_name_only'] ) && 'yes' === $atts['first_name_only'] ) {

			$current_user = wp_get_current_user();
			$content      = $current_user->user_firstname;

		} else {
			$content = affiliate_wp()->affiliates->get_affiliate_name( affwp_get_affiliate_id() );
		}

		return do_shortcode( $content );
    }

	/**
	 * Show an affiliate's website url
	 *
	 * [affiliate_website]
	 *
	 * @since  1.1.3
	 */
	public function affiliate_website( $atts, $content = null ) {

		if ( ! ( affwp_is_affiliate() && affwp_is_active_affiliate() ) ) {
    		return;
    	}

		$current_user = wp_get_current_user();
		$content      = $current_user->user_url;

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
