<?php

namespace App\SimpleBlocksEnhancerAI\Inc;

class WPOptions implements Options {

	private $options;

	const DEFAULT_OPTIONS = array(
		'general_options' => array(
			'api_key' => '1234567890',
		)
	);

	public function __construct () {

		$all_options = array();

		foreach ( self::DEFAULT_OPTIONS as $section_id => $section_default_options ) {
            $db_option_name  = PLUGIN_PREFIX . '_' . $section_id;
            $section_options = get_option( $db_option_name );

            if ( $section_options === false ) {
                add_option( $db_option_name, $section_default_options );
                $section_options = $section_default_options;
            }

            $all_options = array_merge( $all_options, $section_options );
        }

		$this->options = $all_options;
	}


	public function get( string $name ) {
		if ( ! isset( $this->options[ $name ] ) ) {
			return false;
		}

		return $this->options[ $name ];
		}
	public function set( string $name, mixed $value, string $section_id = 'state' ) {
		$db_option_name = PLUGIN_PREFIX . '_' . $section_id;
		$stored_option = get_option( $db_option_name );

		$stored_option[ $name ] = $value;

		return update_option( $db_option_name, $stored_option );
	}

	public function delete( string $name, string $section_id = 'state') {
		$initial_value = array();

    	if ( isset( self::DEFAULT_OPTIONS[ $section_id ][ $name ] ) ) {
        	$initial_value = self::DEFAULT_OPTIONS[ $section_id ][ $name ];
    	}

    	return $this->set( $name, $initial_value, $section_id );
	}
}
