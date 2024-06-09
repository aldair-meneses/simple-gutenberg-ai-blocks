<?php
/**
 * Plugin Name:       Simple Blocks AI Enhancer
 * Plugin URI:        github.com/aldair-meneses/gutenberg-ai-blocks
 * Description:       Sample plugins used in my studies about Gutenberg Blocks.
 * Version:           0.0.1
 * Author:            Aldrick
 * Text Domain:       simple-blocks-enhancer-ai
 * Domain Path:       /languages
 * GitHub Plugin URI: http://localhost
 */

namespace App\SimpleBlocksEnhancerAI;


use App\SimpleBlocksEnhancerAI\Inc\WPOptions;

 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Init {

	public WPOptions $options;

	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'init' ) );
	}

	public function setup_constants() {
		if ( ! defined( 'PLUGIN_URL' ) ) {
            define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
        }

        if ( ! defined( 'PLUGIN_VERSION' ) ) {
            define( 'PLUGIN_VERSION', '0.0.1' );
        }

		if ( ! defined( 'PLUGIN_PREFIX' ) ) {
			define('PLUGIN_PREFIX' , 'simple_blocks_enhancer_ai' );
		}
	}

	public function init() {
		$this->setup_constants();
		// TODO: load options
		// TODO: load blocks
		// TODO: load rest api
		// TODO:load settings
	}
}
