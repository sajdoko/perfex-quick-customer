<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Quick Customer
Description: Add customers directly from invoice creation page via modal
Version: 1.0.0
Requires at least: 2.3.*
Author: sajdoko
Author URI: https://sajdoko.com
*/

define('QUICK_CUSTOMER_MODULE_NAME', 'quick_customer');
define('QUICK_CUSTOMER_MODULE_VERSION', '1.0.0');

// Register activation hook
register_activation_hook(QUICK_CUSTOMER_MODULE_NAME, 'quick_customer_activation_hook');

// Register language files
register_language_files(QUICK_CUSTOMER_MODULE_NAME, [QUICK_CUSTOMER_MODULE_NAME]);

// Initialize module
hooks()->add_action('admin_init', 'quick_customer_init_menu_items');
hooks()->add_action('app_admin_head', 'quick_customer_add_assets');
hooks()->add_action('app_admin_footer', 'quick_customer_add_modal');

/**
 * Activation hook
 */
function quick_customer_activation_hook()
{
    $CI = &get_instance();
    require_once(__DIR__ . '/install.php');
}

/**
 * Initialize module menu items (optional, for settings)
 */
function quick_customer_init_menu_items()
{
    // No menu items needed for this module
}

/**
 * Add module assets (CSS/JS) to admin head
 */
function quick_customer_add_assets()
{
    $CI = &get_instance();

    // Load on invoice pages (segment 1 = admin, segment 2 = invoices)
    $segment1 = $CI->uri->segment(1);
    $segment2 = $CI->uri->segment(2);

    // Load on any invoice-related page
    if ($segment1 === 'admin' && ($segment2 === 'invoices' || $segment2 === 'invoice')) {
        echo '<link href="' . module_dir_url(QUICK_CUSTOMER_MODULE_NAME, 'assets/quick_customer.css') . '?v=' . QUICK_CUSTOMER_MODULE_VERSION . '" rel="stylesheet" type="text/css" />';
        echo '<script src="' . module_dir_url(QUICK_CUSTOMER_MODULE_NAME, 'assets/quick_customer.js') . '?v=' . QUICK_CUSTOMER_MODULE_VERSION . '"></script>';
    }
}

/**
 * Add customer modal to invoice page
 */
function quick_customer_add_modal()
{
    $CI = &get_instance();

    // Load on invoice pages (segment 1 = admin, segment 2 = invoices)
    $segment1 = $CI->uri->segment(1);
    $segment2 = $CI->uri->segment(2);

    // Load on any invoice-related page
    if ($segment1 === 'admin' && ($segment2 === 'invoices' || $segment2 === 'invoice')) {
        $CI->load->model('currencies_model');
        $currencies = $CI->currencies_model->get();

        // Include the view file directly
        $viewFile = __DIR__ . '/views/customer_modal.php';

        if (file_exists($viewFile)) {
            // Make variables available to the view
            $data = ['currencies' => $currencies];
            extract($data);

            // Include the view
            include $viewFile;
        } else {
            echo '<!-- Quick Customer Modal view file not found -->';
        }
    }
}
