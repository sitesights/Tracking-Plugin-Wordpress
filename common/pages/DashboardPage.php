<?php

namespace SiteSights\Tracking\WP;

if(!defined("ABSPATH")) {
	exit;
}

class DashboardPage extends Renderer {

    public function __construct() {
        
        add_action("admin_menu", [$this, "init"]);
        
    }

    public function init() {

        $requiredCapability = "manage_options";

        add_dashboard_page("SiteSights Dashboard", "SiteSights Dashboard", $requiredCapability, 
            SITESIGHTS_PAGE_DASHBOARD, [$this, "render"]);

    }

    public function render() {

        ?>
            <div>Test Dashboard</div>
        <?php

    }

}

