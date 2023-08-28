<?php

namespace SiteSights\Tracking\WP;

if(!defined("ABSPATH")) {
	exit;
}

class Utils {

    public static function getDefaultDomain() {

        $home = home_url();
        $parsed = parse_url($home);

        return $parsed["host"];

    }

}