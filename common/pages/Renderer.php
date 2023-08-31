<?php

namespace SiteSights\Tracking\WP;

if(!defined("ABSPATH")) {
	exit;
}

class Renderer {

    public function renderHeader() {

        ?>

            <div class="sitesights-bar">
                <div class="sitesights-logo">
                    <div class="sitesights-image">
                        <img src="<?php echo SITESIGHTS_TRACKING_PLUGIN_URL . "/statics/images/brand.png" ?>" alt="..." width="48" height="48" />
                    </div>
                    <div class="sitesights-name">
                        SiteSights Analytics
                    </div>
                </div>
            </div>

        <?php

    }

}