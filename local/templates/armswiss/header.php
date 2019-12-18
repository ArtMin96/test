<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeModuleLangFile(__FILE__);

?>

<!doctype html>
<html lang="en">
<head>

    <?php

    use Bitrix\Main\Page\Asset;

    // String
    Asset::getInstance()->addString("<meta http-equiv='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>");
    Asset::getInstance()->addString("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>");
    Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='ie=edge'>");
    ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php

    // CSS Files
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/all.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slick.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/media.css');

    CJSCore::Init(array("jquery2"));

    // JS Files
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/all.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/slick.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/popper.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/numScroller.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/index.js');

    $APPLICATION->ShowHead();
    ?>
</head>
<body>
    <div id="panel">
        <?$APPLICATION->ShowPanel();?>
    </div>

    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="<?= SITE_TEMPLATE_PATH.'/img/logo/logo.png' ?>" class="d-inline-block align-top" alt="armswiss">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <menu class="navbar-nav">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                               aria-expanded="false">
                                <?php
                                if(LANGUAGE_ID == 'en') {
                                    ?>
                                    <img src="<?= SITE_TEMPLATE_PATH.'/img/languages/eng.png' ?>" alt="eng">
                                <?php
                                } else {
                                    ?>
                                <img src="<?= SITE_TEMPLATE_PATH.'/img/languages/rus.png'; ?>" alt="rus">
                                <?php
                                }
                                ?>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="?lang_ui=en">
                                    <img src="<?= SITE_TEMPLATE_PATH.'/img/languages/eng.png' ?>" alt="rus">
                                    <span>eng</span>
                                </a>
                                <a class="dropdown-item" href="?lang_ui=ru">
                                    <img src="<?= SITE_TEMPLATE_PATH.'/img/languages/rus.png' ?>" alt="rus">
                                    <span>rus</span>
                                </a>
                            </div>
                        </li>

                        <div class="lang-boox">
                            <a class="lang-box-item" href="?lang_ui=en">
                                <img src="<?= SITE_TEMPLATE_PATH.'/img/languages/eng.png' ?>" alt="eng">
                                <span>eng</span>
                            </a>
                            <a class="lang-box-item" href="?lang_ui=ru">
                                <img src="<?= SITE_TEMPLATE_PATH.'/img/languages/rus.png' ?>" alt="rus">
                                <span>rus</span>
                            </a>
                        </div>
                        <a href="http://www.armswissbank.am/" target="_blank" class="go-to btn  my-2 my-sm-0"><?= GetMessage('GO_TO_WEB'); ?></a>
                    </menu>
                </div>
            </nav>
        </div>
    </header>

