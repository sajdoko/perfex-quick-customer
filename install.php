<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Quick Customer Module Installation
 * No database changes required for this module
 */

$CI = &get_instance();

// Update module version in database to prevent migration errors
$CI->load->model('app_modules');
$CI->app_modules->update_version('quick_customer', '1.1.0');

// Log activation
log_activity('Quick Customer Module Activated (v1.1.0)');
