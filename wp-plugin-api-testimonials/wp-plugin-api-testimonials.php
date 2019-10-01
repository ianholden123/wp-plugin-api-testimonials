<?php
/**
 * Plugin Name: API Testimonials
 * Description: A simple plugin that adds testimonials to your site and exposes this content to the WordPress API.
 * Version: 1.0.0
 * Author: Ian Holden
 * Author URI: www.ianholden.co.uk
 * Text Domain: api-testimonials
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) { exit; }

/** 
 * Define our plugin constants (if not already defined)
 */
defined( 'API_TEST_DIR' ) || define( 'API_TEST_DIR', plugin_dir_path( __FILE__ ) );
defined( 'API_TEST_INC' ) || define( 'API_TEST_INC', API_TEST_DIR . 'includes/' );

/**
 * Require and execute all required files
 */
// Activation scripts are executed whenever the plugin is activated or deactivated in the backend.
require_once API_TEST_INC . 'plugin-activation-scripts.php';
// To create testimonials in the backend, we need a new post type.
require_once API_TEST_INC . 'register-post-type.php';