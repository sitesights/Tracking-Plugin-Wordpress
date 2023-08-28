<?php

/**
 * Plugin Name: SiteSights Analytics
 * Plugin URI: https://sitesights.io/
 * Description: Easy and privacy friendly alternative to Google Analytics.
 * Author: Sitesights.io
 * Author URI: https://sitesights.io/
 * Version: 0.0.1
 * Text Domain: sitesights-tracking
 * Domain Path: /languages
 */

namespace SiteSights\Tracking\WP;

if(!defined("ABSPATH")) { exit; }
define("SITESIGHTS_TRACKING_VERSION", "0.0.1");

require_once SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "common/Utils.php";

require_once SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "config.php";
require_once SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "common/Tracking.php";



$tracking = new Tracking();
$tracking->enable();
