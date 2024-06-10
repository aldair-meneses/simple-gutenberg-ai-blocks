<?php

namespace App\SimpleBlocksEnhancerAI\Pages;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class SettingsPage extends AdminPage {
	public function __construct() {

	}

	protected function get_slug(): string {
		return PLUGIN_PREFIX . '_settings';
	}
}
