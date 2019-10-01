<?php

/**
 * Run the following commands when the plugin is activated
 */
function plugin_activation() {
    // Reference plugin activation functions here
}

/**
 * Run the following commands when the plugin is deactivated
 */
function plugin_deactivation() {
    // Reference plugin deactivation functions here
}

register_activation_hook( __FILE__, 'plugin_activation' );
register_deactivation_hook( __FILE__, 'plugin_deactivation' );
