<?php

/**
 * Plugin Name: Venue Builder
 * Description: Add Highly customized data into CPT-Venues. Its a custom plugin built for a specific purpose.
 * Plugin URI: https://www.dailyvatives.com
 * Version: 1.0.0
 * Author: Gaurav Panwar - gauravpanwar99@gmail.com, gauravpanwarninetynine@gmail.com
 * Text Domain: vb
 * WC requires at least: 6.0
 * WC tested up to: 9.0
 */

if (! defined('ABSPATH')) {
    exit;
}

define('VB_VERSION', '1.0.0');
define('VB_CPT_NAME', 'venue');
define('VB_DIR', plugin_dir_path(__FILE__));
define('VB_URL', plugin_dir_url(__FILE__));


require_once VB_DIR . 'includes/class-vb.php';
require_once VB_DIR . 'includes/ajax-admin.php';
require_once VB_DIR . 'includes/ajax-frontend.php';
// require_once VB_DIR . 'includes/helpers.php';


add_action('plugins_loaded', function () {
    VB_Builder::get_instance();
});

