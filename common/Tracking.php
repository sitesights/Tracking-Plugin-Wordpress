<?php

namespace SiteSights\Tracking\WP;

if(!defined("ABSPATH")) {
	exit;
}

class Tracking {

    public function enable() {

        register_activation_hook(SITESIGHTS_TRACKING_PLUGIN_FILE, [$this, "onActivate"]);
        register_deactivation_hook(SITESIGHTS_TRACKING_PLUGIN_FILE, [$this, "onDeactivate"]);

        add_action("plugins_loaded", [$this, "onLoad", 9]);
        add_action("init", [$this, "onLoadTextDomain"]);

    }

    public function onLoad() {



    }

    public function onLoadTextDomain() {



    }

    public function onActivate($network_wide = false) {

        

    }

    public function onDeactivate() {

        //nothing needed here

    }

}