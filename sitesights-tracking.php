<?php

/**
 * Plugin Name: SiteSights Analytics
 * Plugin URI: https://sitesights.io/
 * Description: Easy and privacy focused web analytics.
 * Author: Sitesights.io
 * Author URI: https://sitesights.io/
 * Version: 1.0.0
 * Text Domain: sitesights-tracking
 * Domain Path: /languages
 */

namespace SiteSights\Tracking\WP;

if(!defined("ABSPATH")) { exit; }
define("SITESIGHTS_TRACKING_VERSION", "1.0.0");

require_once __DIR__ . "/config.php";
require_once SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "common/Utils.php";

require_once SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "common/OwnerFilters.php";
require_once SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "common/OwnerActions.php";

require_once SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "common/Filters.php";
require_once SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "common/Actions.php";

require_once SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "common/pages/Renderer.php";
require_once SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "common/pages/OptionsPage.php";
require_once SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "common/pages/DashboardPage.php";

require_once SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "common/Tracking.php";

$tracking = new Tracking();
$tracking->enable();
