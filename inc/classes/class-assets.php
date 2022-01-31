<?php
/**
 * Enqueue theme assets
 *
 * @package LIGHT
 */
namespace Light_THEME\Inc;

use Light_THEME\Inc\Traits\Singleton;


class Assets {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
	}

	public function register_styles() {
		// Register styles.
		wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( LIGHT_DIR_PATH . '/lib/assets/css/style.css' ), 'all' );
		wp_register_style( 'bootstrap-css', LIGHT_DIR_URI . '/lib/assets/css/vendor/bootstrap-css/bootstrap.min.css', [], false, 'all' );

		// Enqueue Styles.
		wp_enqueue_style( 'style-css' );
		wp_enqueue_style( 'bootstrap-css' );
	}

	public function register_scripts() {
		// Register scripts.
		wp_register_script( 'main-js', LIGHT_DIR_URI . '/lib/assets/js/main.js', [], filemtime( LIGHT_DIR_PATH . '/lib/assets/js/main.js' ), true );
		wp_register_script( 'bootstrap-js', LIGHT_DIR_URI . '/lib/assets/js/vendor/bootstrap-js/bootstrap.min.js', [ 'jquery' ], false, true );



		// Enqueue Scripts.
		wp_enqueue_script( 'main-js' );
		wp_enqueue_script( 'bootstrap-js' );
	}

}