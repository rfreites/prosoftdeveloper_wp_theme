<?php
/*
Plugin Name: Logo Carousel Free
Plugin URI: https://wplimb.com/plugins/logo-carousel-pro/
Description: A powerful Logo Carousel plugin to display and manage logos in a simple and unique style. Ideal for
logos, clients, partners, sponsors, supporters.
Author: WPLimb
Author URI: https://wplimb.com
Version: 2.0
License: GPL2
Text Domain: logo-carousel-free
*/


/*** SetUp plugin url ***/
define( 'WPL_FREE_PLUGIN_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname( __FILE__ ) ) . '/' );
define( 'WPL_FREE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );


/*** Including all files ***/
require_once("inc/functions.php");



// Redirect after active
function wpl_logo_carousel_free_active_redirect( $plugin ) {
	if ( $plugin == plugin_basename( __FILE__ ) ) {
		exit( wp_redirect( admin_url( 'options-general.php' ) ) );
	}
}

add_action( 'activated_plugin', 'wpl_logo_carousel_free_active_redirect' );


// admin menu
function wpl_logo_carousel_free_options_framwrork() {
	add_options_page( 'Logo Carousel Pro Info', '', 'manage_options', 'wpl-lcf-settings', 'wpl_lcf_options_framwrork' );
}

add_action( 'admin_menu', 'wpl_logo_carousel_free_options_framwrork' );


if ( is_admin() ) : // Load only if we are viewing an admin page

	function wpl_logo_carousel_free_register_settings() {
		// Register settings and call sanitation functions
		register_setting( 'wpl_lcf_p_options', 'wpl_lcf_options', 'wpl_lcf_validate_options' );
	}

	add_action( 'admin_init', 'wpl_logo_carousel_free_register_settings' );


// Function to generate options page
	function wpl_lcf_options_framwrork() {

		if ( ! isset( $_REQUEST['updated'] ) ) {
			$_REQUEST['updated'] = false;
		} // This checks whether the form has just been submitted. ?>


		<div class="wrap about-wrap">

			<h1>Welcome to Logo Carousel Free</h1>

			<div class="about-text">Thank you for using our Logo Carousel Free plugin.</div>


			<hr>

			<h3>Want some cool features of this plugin?</h3>

			<p>We've added many extra features in our <a href="https://wplimb.com/plugins/logo-carousel-pro/">Premium
					Version</a> of this
				plugin. Let see some amazing features. <a href="https://wplimb.com/plugins/logo-carousel-pro/">Buy Premium Version Now.</a></p>



			<div class="feature-section two-col">
				<h2>Pro Version Features</h2>
				<div class="col">
					<ul>
						<li><span class="dashicons dashicons-yes"></span> Powerful & Modern Logo Carousel</li>
						<li><span class="dashicons dashicons-yes"></span> 30+ Theme Styles or Demo</li>
						<li><span class="dashicons dashicons-yes"></span> Carousel Slider with multiple features</li>
						<li><span class="dashicons dashicons-yes"></span> Carousel, Grid, List, Filter, Pagination, Inline View Layouts</li>
						<li><span class="dashicons dashicons-yes"></span> Create Unlimited Logo Showcase in anywhere</li>
						<li><span class="dashicons dashicons-yes"></span> Custom Logo Re-sizing</li>
						<li><span class="dashicons dashicons-yes"></span> Ability to add links to each logo if you want</li>
						<li><span class="dashicons dashicons-yes"></span> Category wise Logo Filtering</li>
						<li><span class="dashicons dashicons-yes"></span> Grayscale image effect</li>
						<li><span class="dashicons dashicons-yes"></span> Logo Display with custom number</li>
						<li><span class="dashicons dashicons-yes"></span> Logo Showcase with title & description</li>
						<li><span class="dashicons dashicons-yes"></span> All text, hover color & list alignment Control</li>
						<li><span class="dashicons dashicons-yes"></span> Show/hide Most of logo elements</li>
						<li><span class="dashicons dashicons-yes"></span> Tooltip Enable/Disable option</li>
						<li><span class="dashicons dashicons-yes"></span> Set different Tooltips Position</li>
						<li><span class="dashicons dashicons-yes"></span> Tooltips background and text color change</li>
						<li><span class="dashicons dashicons-yes"></span> Fully accessible with arrow key navigation</li>
						<li><span class="dashicons dashicons-yes"></span> Two different navigation style</li>
						<li><span class="dashicons dashicons-yes"></span> Navigation hover background and color change</li>
						<li><span class="dashicons dashicons-yes"></span> Different Navigation position</li>
						<li><span class="dashicons dashicons-yes"></span> Navigation arrows on hover logos</li>
						<li><span class="dashicons dashicons-yes"></span> Box Highlight Enable/Disable</li>

					</ul>
				</div>
				<div class="col">
					<ul>
						<li><span class="dashicons dashicons-yes"></span> Box Highlight color and hover color change</li>
						<li><span class="dashicons dashicons-yes"></span> Set Logo inner padding</li>
						<li><span class="dashicons dashicons-yes"></span> Auto Play on/off</li>
						<li><span class="dashicons dashicons-yes"></span> Logo Infinite Looping</li>
						<li><span class="dashicons dashicons-yes"></span> Logo Showcase order by (date, menu order, rand, title)</li>
						<li><span class="dashicons dashicons-yes"></span> Logo Showcase order (DESC, ASC)</li>
						<li><span class="dashicons dashicons-yes"></span> Tons of useful Shortcodes attributes</li>
						<li><span class="dashicons dashicons-yes"></span> Display logo title on hover</li>
						<li><span class="dashicons dashicons-yes"></span> Logo Border color & hover Color change</li>
						<li><span class="dashicons dashicons-yes"></span> Logo Title show/hide Option</li>
						<li><span class="dashicons dashicons-yes"></span> Set Logo Title Position</li>
						<li><span class="dashicons dashicons-yes"></span> Title Color change</li>
						<li><span class="dashicons dashicons-yes"></span> Stop on hover option</li>
						<li><span class="dashicons dashicons-yes"></span> Control Logo Slide Speed</li>
						<li><span class="dashicons dashicons-yes"></span> Logo Pagination settings</li>
						<li><span class="dashicons dashicons-yes"></span> Logo Grid in-line view</li>
						<li><span class="dashicons dashicons-yes"></span> Desktop mouse dragging</li>
						<li><span class="dashicons dashicons-yes"></span> Unlimited Styling & Color Options</li>
						<li><span class="dashicons dashicons-yes"></span> Translation Ready & POT files included</li>
						<li><span class="dashicons dashicons-yes"></span> RTL Supported</li>
						<li><span class="dashicons dashicons-yes"></span> Extensive online documentation</li>
						<li><span class="dashicons dashicons-yes"></span> 24/7 Support forum & Free Updates</li>
					</ul>
				</div>
			</div>

			<h2><a href="https://wplimb.com/plugins/logo-carousel-pro/" class="button button-primary button-hero">Buy
					PRO Version Now</a>
			</h2>
			<br>
			<br>

		</div>

		<?php
	}


endif;  // EndIf is_admin()


register_activation_hook( __FILE__, 'wplimb_lcf_activate' );
add_action( 'admin_init', 'wplimb_lcf_redirect' );

function wplimb_lcf_activate() {
	add_option( 'wplimb_lcf_activation_redirect', true );
}

function wplimb_lcf_redirect() {
	if ( get_option( 'wplimb_lcf_activation_redirect', false ) ) {
		delete_option( 'wplimb_lcf_activation_redirect' );
		if ( ! isset( $_GET['activate-multi'] ) ) {
			wp_redirect( "options-general.php?page=wpl-lcf-settings" );
		}
	}
}

/* Plugin Action Links */
function wpl_logo_carousel_free_action_links( $links ) {
	$links[] = '<a href="https://wplimb.com/plugins/logo-carousel-pro/" style="color: red; font-weight: bold;">Go Pro!</a>';

	return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wpl_logo_carousel_free_action_links' );