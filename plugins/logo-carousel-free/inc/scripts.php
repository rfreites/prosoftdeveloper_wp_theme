<?php
if ( ! defined('ABSPATH')) exit;  // if direct access

class LogoCarouselFreeScriptsStyle{

	public function __construct(){
		add_action( 'wp_enqueue_scripts', array( $this, 'wpl_logo_carousel_free_scripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'wpl_logo_carousel_free_admin_scripts' ) );
		add_action( 'plugins_loaded', array( $this, 'wpl_lcf_load_text_domain' ));
	}

	public function wpl_lcf_load_text_domain() {
		load_plugin_textdomain( 'logo-carousel-free', false, plugin_basename( dirname( __FILE__ ) ) . '/languages/' );
	}


	/*** Plugin Scripts and CSS ***/
	function wpl_logo_carousel_free_scripts(){
		// CSS Files
		wp_enqueue_style('slick', WPL_FREE_PLUGIN_URL . 'assets/css/slick.css', array(), NULL);
		wp_enqueue_style('font-awesome-min', WPL_FREE_PLUGIN_URL . 'assets/css/font-awesome.min.css', array(), NULL);
		wp_enqueue_style('lcf-style', WPL_FREE_PLUGIN_URL . 'assets/css/style.css');

		//JS Files
		wp_enqueue_script( 'slick-min-js', WPL_FREE_PLUGIN_URL . 'assets/js/slick.min.js', array('jquery'), NULL, TRUE );
	}

	public function wpl_logo_carousel_free_admin_scripts(){
		wp_enqueue_style( 'lcf-admin-style', WPL_FREE_PLUGIN_URL . 'assets/css/admin-style.css' );
	}


}

new LogoCarouselFreeScriptsStyle();