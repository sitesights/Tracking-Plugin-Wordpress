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

        $link = trim(get_option(SITESIGHTS_SETTINGS_KEY_URL, ""));
        $theme = get_option(SITESIGHTS_SETTINGS_KEY_THEME, "light");

        if(strlen($link) == 0) {

            ?> <div class="sitesights-main"> <?php

            $this->renderHeader();
            ?>
                <div class="sitesights-stages">
                    <div class="notice">
                        You have to setup your public share link in the SiteSights Options 
                        <a href="<?php echo admin_url("admin.php?page=" . SITESIGHTS_PAGE_SETTINGS) ?>">here</a>.
                    </div>
                </div>
            <?php

            ?> </div> <?php

        } else {

            ?>

            <div class="sitesights-frame">
                <iframe width="100%" height="700px" src="<?php echo $link . "&theme=" . $theme ?>">
                </iframe>
            </div>

            <?php

        }

    }

}

