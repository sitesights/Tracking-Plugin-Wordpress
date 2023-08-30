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

        if(is_admin()) {

        }

        

    }

    public function onLoadTextDomain() {

        load_plugin_textdomain("sitesights-tracking", false, dirname(PLAUSIBLE_ANALYTICS_PLUGIN_BASENAME) . "/languages/");

    }

    public function onActivate($network_wide = false) {

        $settingsAvailable = get_option(SITESIGHTS_SETTINGS_KEY_AVAILABLE, false);

        if(!$settingsAvailable) {

            update_option(SITESIGHTS_SETTINGS_KEY_WEBSITE_ID, "");
            update_option(SITESIGHTS_SETTINGS_KEY_URL, "");
            update_option(SITESIGHTS_SETTINGS_KEY_THEME, "light");
            update_option(SITESIGHTS_SETTINGS_KEY_ENABLED, true);

            update_option(SITESIGHTS_SETTINGS_KEY_AVAILABLE, true);

        }

    }

    public function onDeactivate() {

        //nothing needed here

    }

}