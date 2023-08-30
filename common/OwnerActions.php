<?php

namespace SiteSights\Tracking\WP;

if(!defined("ABSPATH")) {
	exit;
}

class OwnerActions {

    public function __construct() {
        
        add_action("admin_enqueue_scripts", [$this, "initStatics"]);

    }

    public function initStatics($page) {

        if($page != SITESIGHTS_PAGE_SETTINGS && $page != SITESIGHTS_PAGE_DASHBOARD) {
            return;
        }

        wp_enqueue_style("sitesights-owner", SITESIGHTS_TRACKING_PLUGIN_URL . "statics/css/SiteSightsOwner.css", "", 
            filemtime(SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "statics/css/SiteSightsOwner.css"), "all");

        wp_enqueue_script("sitesights-owner", SITESIGHTS_TRACKING_PLUGIN_URL . "statics/js/SiteSightsOwner.js", "",
            filemtime(SITESIGHTS_TRACKING_PLUGIN_DIRECTORY . "statics/js/SiteSightsOwner.js"), true);

    }

}