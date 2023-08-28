<?php

if(!defined("ABSPATH")) {
	exit;
}

if(!defined("SITESIGHTS_TRACKING_PLUGIN_FILE")) {
	define("SITESIGHTS_TRACKING_PLUGIN_FILE", dirname(dirname( __FILE__ )) . "/sitesights-tracking.php");
}

if(!defined("SITESIGHTS_TRACKING_PLUGIN_BASENAME")) {
	define('PLAUSIBLE_ANALYTICS_PLUGIN_BASENAME', plugin_basename(SITESIGHTS_TRACKING_PLUGIN_FILE));
}

if(!defined("SITESIGHTS_TRACKING_PLUGIN_DIRECTORY")) {
	define("SITESIGHTS_TRACKING_PLUGIN_DIRECTORY", plugin_dir_path(SITESIGHTS_TRACKING_PLUGIN_FILE));
}

if(!defined("SITESIGHTS_TRACKING_PLUGIN_URL")) {
	define("SITESIGHTS_TRACKING_PLUGIN_URL", plugin_dir_url(SITESIGHTS_TRACKING_PLUGIN_FILE));
}
