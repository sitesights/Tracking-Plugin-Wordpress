<?php

namespace SiteSights\Tracking\WP;

if(!defined("ABSPATH")) {
	exit;
}

class OptionsPage extends Renderer {

    public function __construct() {
        
        add_action("admin_menu", [$this, "init"]);

    }

    public function init() {

        $requiredCapability = "manage_options";

        add_options_page("SiteSights Options", "SiteSights Options", $requiredCapability, 
            SITESIGHTS_PAGE_SETTINGS, [$this, "render"]);

    }

    public function render() {

        ?> <div class="sitesights-main"> <?php

        $this->renderHeader();
        ?>
            <div class="sitesights-stages">

            </div>
        <?php

        ?> </div> <?php

    }

}
