<?php

namespace App\SimpleBlocksEnhancerAI\Inc;

interface Options {

	public function get( string $name );

	public function set( string $name, mixed $value, string $section_id );

	public function delete( string $name, string $value);

}

