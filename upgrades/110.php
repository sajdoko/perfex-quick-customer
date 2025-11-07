<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Upgrade to version 1.1.0
 * No database changes required - this version adds support for estimates and proposals
 */

// This file is intentionally empty as no database migrations are needed
// Version 1.1.0 adds inline customer creation to estimates and proposals pages
// without requiring any database schema changes

log_activity('Quick Customer Module upgraded to v1.1.0');
