<?php

namespace SiteSights\Tracking\WP;

if(!defined("ABSPATH")) {
	exit;
}

class OwnerFilters {

    public function __construct() {
        
        add_filter("plugin_action_links_" . SITESIGHTS_TRACKING_PLUGIN_BASENAME, [$this, "addPluginActions"]);

    }

}