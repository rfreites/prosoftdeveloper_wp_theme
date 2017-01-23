<?php

// show shortcode
add_filter( 'views_edit-logo-carousel-free', function ( $view_shortcode ) {
	echo '<p>Shortcode <input style="background: #ffffff;max-width: 230px;padding: 6px;" type="text" onClick="this.select();"
value="[logo_carousel_free]" /></p>';

	return $view_shortcode;
} );

// Register Logo Carousel Free Post type
function wpl_logo_carousel_free_post_type() {

	$labels = array(
		'name'               => esc_html__( 'Logos', 'logo-carousel-free' ),
		'singular_name'      => esc_html__( 'Logo', 'logo-carousel-free' ),
		'add_new'            => esc_html_x( 'Add New Logo', 'logo-carousel-free', 'logo-carousel-free' ),
		'add_new_item'       => esc_html__( 'Add New Logo', 'logo-carousel-free' ),
		'edit_item'          => esc_html__( 'Edit Logo', 'logo-carousel-free' ),
		'new_item'           => esc_html__( 'New Logo', 'logo-carousel-free' ),
		'view_item'          => esc_html__( 'View Logo', 'logo-carousel-free' ),
		'search_items'       => esc_html__( 'Search Logo', 'logo-carousel-free' ),
		'not_found'          => esc_html__( 'No Logo found', 'logo-carousel-free' ),
		'not_found_in_trash' => esc_html__( 'No Logo found in Trash', 'logo-carousel-free' ),
		'parent_item_colon'  => esc_html__( 'Parent Logo:', 'logo-carousel-free' ),
		'menu_name'          => esc_html__( 'Logo Carousel Free', 'logo-carousel-free' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => WPL_FREE_PLUGIN_URL . 'assets/images/icon.png',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => false,
		'exclude_from_search' => false,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'thumbnail'
		)
	);

	register_post_type( 'logo-carousel-free', $args );
}

add_action( 'init', 'wpl_logo_carousel_free_post_type' );


// Carousel custom post image settings
add_theme_support( 'post-thumbnails', array( 'logo-carousel-free' ) );


// Register custom meta box
function wpl_logo_carousel_free_meta_box() {
	add_meta_box( 'wpl_lcf_url_meta_box', esc_html__('Pro Version Features', 'logo-carousel-free'), 'display_wpl_lcf_url_meta_box', 'logo-carousel-free', 'normal', 'high' );
}
add_action( 'admin_init', 'wpl_logo_carousel_free_meta_box' );


function display_wpl_lcf_url_meta_box( ) { ?>

	<div class="feature-section wpl-two-col">
		<div class="wpl-col">
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
		<div class="wpl-col">
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
	<br>
	<h2 style="text-align: center;"><a href="https://wplimb.com/plugins/logo-carousel-pro/" class="button button-primary
	button-hero">Buy PRO Version Now</a>
	</h2>
	<br>

	<?php
}


require_once( WPL_FREE_PLUGIN_PATH . 'inc/scripts.php' );
require_once( WPL_FREE_PLUGIN_PATH . 'inc/shortcodes.php' );