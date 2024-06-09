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

use App\SimpleBlocksEnhancerAI\Init;

 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/src/Init.php';

$plugin = new Init();

