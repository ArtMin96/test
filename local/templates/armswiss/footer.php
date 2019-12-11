<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<footer>
    <div class="footer">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/l">
                    <img src="<?= SITE_TEMPLATE_PATH.'/img/logo/logo.png' ?>" alt="armswiss">
                </a>
                <div class="navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <?php

                        $checkSessionForMenu = (isset($_SESSION['LANG_UI']))? $_SESSION['LANG_UI']."_top" : "en_top";

                        $APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                            "ALLOW_MULTI_SELECT" => "N",	// Allow several menu items to be highlighted as active
                            "CHILD_MENU_TYPE" => "left",	// Menu type for child levels
                            "COMPOSITE_FRAME_MODE" => "A",	// Default component template vote
                            "COMPOSITE_FRAME_TYPE" => "AUTO",	// Component content
                            "DELAY" => "N",	// Delay building of menu template
                            "MAX_LEVEL" => "1",	// Menu depth level
                            "MENU_CACHE_GET_VARS" => "",	// Important query variables
                            "MENU_CACHE_TIME" => "3600",	// Cache time (sec.)
                            "MENU_CACHE_TYPE" => "N",	// Cache type
                            "MENU_CACHE_USE_GROUPS" => "Y",	// Respect Access Permissions
                            "ROOT_MENU_TYPE" => $checkSessionForMenu,	// Menu type for root level
                            "USE_EXT" => "Y",	// Use files .menu-type.menu_ext.php for menus
                            "COMPONENT_TEMPLATE" => "bootstrap_v4",
                            "MENU_THEME" => "site",	// Menu theme
                        ),
                            false
                        );
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</footer>
</body>
</html>
