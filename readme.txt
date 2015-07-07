=== AffiliateWP - Affiliate Area Shortcodes ===
Contributors: sumobi, mordauk
Tags: AffiliateWP, affiliate, Pippin Williamson, Andrew Munro, mordauk, pippinsplugins, sumobi, ecommerce, e-commerce, e commerce, selling, referrals, easy digital downloads, digital downloads, woocommerce, woo, shortcodes
Requires at least: 3.9
Tested up to: 4.2.2
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Provides shortcodes for each tab of the Affiliate Area

== Description ==

> This plugin requires [AffiliateWP](http://affiliatewp.com/ "AffiliateWP") in order to function.

Once activated, this plugin provides a shortcode for each tab of the affiliate area:

[affiliate_area_graphs]

[affiliate_area_settings]

[affiliate_area_creatives]

[affiliate_area_referrals]

[affiliate_area_stats]

[affiliate_area_urls]

[affiliate_area_visits]

Since v1.1 the following shortcodes were also added:

[affiliate_logout]
Show the affiliate a log out link

[affiliate_referrals status="paid"]
Show the affiliate's paid referral count

[affiliate_referrals status="unpaid"]
Show the affiliate's unpaid referral count

[affiliate_earnings status="paid"]
Show the affiliate's paid earnings

[affiliate_earnings status="unpaid"]
Show the affiliate's unpaid earnings

[affiliate_visits]
Show the affiliate's visit count

[affiliate_conversion_rate]
Show the affiliate's conversion rate

[affiliate_commission_rate]
Show the affiliate's commission rate

Although the tabs in the affiliate area can be easily removed or reordered using the [dashboard.php template file](http://docs.affiliatewp.com/article/118-modifying-template-files "Modifying template files"), some customers prefer the use of shortcodes.

With the above shortcodes you'll be able to:

1. Create an Affiliate Area and stack them in any order on one page.
2. Put each shortcode on a separate page, essentially creating your own page structure.
3. Have more control over which areas the affiliates see, without having to modify the [template files](http://docs.affiliatewp.com/article/118-modifying-template-files "Modifying template files").

Just remember to set your Affiliate Area page in Affiliates &rarr; Settings to be your [login page](http://docs.affiliatewp.com/article/98-affiliatelogin "Affiliate Login Shortcode") or your affiliates will have nowhere to log in from via emails etc.

**What is AffiliateWP?**

[AffiliateWP](http://affiliatewp.com/ "AffiliateWP") provides a complete affiliate management system for your WordPress website that seamlessly integrates with all major WordPress e-commerce and membership platforms. It aims to provide everything you need in a simple, clean, easy to use system that you will love to use.

== Installation ==

1. Unpack the entire contents of this plugin zip file into your `wp-content/plugins/` folder locally
1. Upload to your site
1. Navigate to `wp-admin/plugins.php` on your site (your WP Admin plugin page)
1. Activate this plugin

OR you can just install it with WordPress by going to Plugins &rarr; Add New &rarr; and type this plugin's name

== Changelog ==

= 1.1 =
* New: [affiliate_referrals status="paid"] and [affiliate_referrals status="unpaid"] shortcodes
* New: [affiliate_earnings status="paid"] and [affiliate_earnings status="unpaid"] shortcodes
* New: [affiliate_visits] shortcode
* New: [affiliate_conversion_rate] shortcode
* New: [affiliate_commission_rate] shortcode
* New: [affiliate_logout] shortcode
* New: affwp_aas_logout_link filter
* New: affwp_aas_logout_redirect filter
* Fix: Inactive affiliates could still see the shortcode content

= 1.0 =
* Initial release
