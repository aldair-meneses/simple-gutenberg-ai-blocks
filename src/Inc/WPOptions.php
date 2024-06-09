<?php

namespace App\SimpleBlocksEnhancerAI\Inc;

class WPOptions implements Options {

	private $plugin_options;

	public function __construct() {
		if($this->plugin_options = get_option( PLUGIN_PREFIX ) );
	}

	public function get( string $name ) {
		// return get_option( $name );
	}

	public function set( string $name, mixed $value, string $section_id ) {
		// return update_option( $name, $value );
	}

	public function delete( string $name, string $value) {
		// return delete_option( $name, $value );
	}

}
