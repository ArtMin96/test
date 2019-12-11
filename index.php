<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('ArmSwissBank | Home');
?>

<?php

$APPLICATION->IncludeComponent("bitrix:news.list", "main_slider", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Date display format
    "ADD_SECTIONS_CHAIN" => "N",	// Add Section name to breadcrumb navigation
    "AJAX_MODE" => "N",	// Enable AJAX mode
    "AJAX_OPTION_ADDITIONAL" => "",	// Additional ID
    "AJAX_OPTION_HISTORY" => "N",	// Emulate browser navigation
    "AJAX_OPTION_JUMP" => "N",	// Enable scrolling to component's top
    "AJAX_OPTION_STYLE" => "Y",	// Enable styles loading
    "CACHE_FILTER" => "N",	// Cache if the filter is active
    "CACHE_GROUPS" => "Y",	// Respect Access Permissions
    "CACHE_TIME" => "36000000",	// Cache time (sec.)
    "CACHE_TYPE" => "A",	// Cache type
    "CHECK_DATES" => "N",	// Show only currently active elements
    "COMPOSITE_FRAME_MODE" => "A",	// Default component template vote
    "COMPOSITE_FRAME_TYPE" => "AUTO",	// Component content
    "DETAIL_URL" => "",	// Detail page URL (from information block settings by default)
    "DISPLAY_BOTTOM_PAGER" => "N",	// Display at the bottom of the list
    "DISPLAY_DATE" => "N",	// Display element date
    "DISPLAY_NAME" => "N",	// Display element title
    "DISPLAY_PICTURE" => "Y",	// Display element preview picture
    "DISPLAY_PREVIEW_TEXT" => "N",	// Display element preview text
    "DISPLAY_TOP_PAGER" => "N",	// Display at the top of the list
    "FIELD_CODE" => array(	// Fields
        0 => "",
        1 => "",
    ),
    "FILTER_NAME" => "",	// Filter
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Hide link to the details page if no detailed description provided
    "IBLOCK_ID" => "1",	// Information block code
    "IBLOCK_TYPE" => "Slider",	// Type of information block (used for verification only)
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Include information block into navigation chain
    "INCLUDE_SUBSECTIONS" => "N",	// Show elements from subsections
    "MESSAGE_404" => "",	// Show this message (a component provided message is used by default)
    "NEWS_COUNT" => "20",	// News per page
    "PAGER_BASE_LINK_ENABLE" => "N",	// Enable link processing
    "PAGER_DESC_NUMBERING" => "N",	// Use reverse page navigation
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Cache time for pages with reverse page navigation
    "PAGER_SHOW_ALL" => "N",	// Show the ALL link
    "PAGER_SHOW_ALWAYS" => "N",	// Always show the pager
    "PAGER_TEMPLATE" => ".default",	// Breadcrumb navigation template
    "PAGER_TITLE" => "Slider",	// Category name
    "PARENT_SECTION" => "",	// Section ID
    "PARENT_SECTION_CODE" => "",	// Section code
    "PREVIEW_TRUNCATE_LEN" => "",	// Maximum preview text length (for Text type only)
    "PROPERTY_CODE" => array(	// Properties
        0 => "",
        1 => "",
    ),
    "SET_BROWSER_TITLE" => "N",	// Set browser window title
    "SET_LAST_MODIFIED" => "N",	// Set page last modified date to response header
    "SET_META_DESCRIPTION" => "N",	// Set page description
    "SET_META_KEYWORDS" => "N",	// Set page keywords
    "SET_STATUS_404" => "N",	// Set status 404
    "SET_TITLE" => "N",	// Set page title
    "SHOW_404" => "N",	// Show page
    "SORT_BY1" => "ACTIVE_FROM",	// Field for the news first sorting pass
    "SORT_BY2" => "SORT",	// Field for the news second sorting pass
    "SORT_ORDER1" => "DESC",	// Direction for the news first sorting pass
    "SORT_ORDER2" => "ASC",	// Direction for the news second sorting pass
    "STRICT_SECTION_CHECK" => "N",	// Check parent section when showing list
    "COMPONENT_TEMPLATE" => ".default",
    "TEMPLATE_THEME" => "blue",
    "MEDIA_PROPERTY" => "",
    "SLIDER_PROPERTY" => "",
    "SEARCH_PAGE" => "/search/",
    "USE_RATING" => "N",
    "USE_SHARE" => "N"
),
false
);
?>

    <section id="mission">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mission-box">
                        <div class="mission-bg">
                            <div class="mission-cover"></div>
                            <article class="mission-content">
                                <h1><?= GetMessage('OUR_MISSION'); ?></h1>
                                <p>
                                    <?= GetMessage('OUR_MISSION_DESC'); ?>
                                </p>
                                <a href="#" class="btn">
                                    <?= GetMessage('LEARN_MORE'); ?>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"home_page_services", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "Projects",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "News",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "RUSSIAN_DESCRIPTION",
			1 => "RUSSIAN_INPUT",
			2 => "",
		),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "home_page_services"
	),
	false
);
?>

    <section id="statistics">
        <div class="statistics-list">
            <div class="row">
                <div class="col-3">
                    <div class="statistic">
                        <span class="statistic-num">15</span>
                        <span class="statistic-title">tears</span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="statistic">
                        <span class="statistic-num">260</span>
                        <span class="statistic-title">projects</span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="statistic">
                        <span class="statistic-num">1000</span>
                        <span class="statistic-title">collected</span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="statistic">
                        <span class="statistic-num">500</span>
                        <span class="statistic-title">volunteers</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="covers">
        <aside>
            <div class="container">
                <div class="covers-list">
                    <div class="row">
                        <div class="col-12">
                            <div class="cover">
                                <div class="card">
                                    <img src="./img/covers/cover1.png" class="card-img" alt="cover">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-cloud"></i> CO2</a>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-bolt"></i> power</a>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-map-marker-alt"></i> location</a>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-th-large"></i> project type</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cover">
                                <div class="card">
                                    <img src="./img/covers/cover2.png" class="card-img" alt="cover">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-cloud"></i> CO2</a>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-bolt"></i> power</a>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-map-marker-alt"></i> location</a>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-th-large"></i> project type</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cover">
                                <div class="card">
                                    <img src="./img/covers/cover3.png" class="card-img" alt="cover">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-cloud"></i> CO2</a>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-bolt"></i> power</a>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-map-marker-alt"></i> location</a>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-th-large"></i> project type</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </section>

<!-- EVENTS & NEWS -->
<?php

$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "events_and_news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "show_more",
		"PAGER_TITLE" => "News",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "RUSSIAN_TITLE",
			1 => "RUSSIAN_LOCATION",
			2 => "ENGLISH_LOCATION",
			3 => "RUSSIAN_PREVIEW_TEXT",
			4 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "news",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N",
		"FILE_404" => ""
	),
	false
);
?>

<!-- BRANDS -->
<?php

$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"brands", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "brands",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Brands",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "brands",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	),
	false
);
?>

    <section id="contact">
        <div class="container">
            <h2><?= GetMessage('CONTACT_US'); ?></h2>
            <div class="box-wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <div class="address-box order-first order-md-last">
                            <img src="<?= SITE_TEMPLATE_PATH.'/img/contact/address-cover.png' ?>" class="address-cover" alt="address">
                            <address>
                                <ul class="addresses">
                                    <li class="address">
                                        <i class="fas fa-envelope"></i>
                                        <span>green@armswissbank.am</span>
                                    </li>
                                    <li class="address">
                                        <i class="fas fa-phone-alt"></i>
                                        <span>+374 60 757-000</span>
                                        <span>+374 11 757-000</span>
                                    </li>
                                    <li class="address">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>10 Vazgen Sargsyan, Yerevan 0010, Republic of Armenia</span>
                                    </li>
                                </ul>
                            </address>

                            <ul class="soc">
                                <li><a href="https://www.facebook.com/armswissbank/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/armswissbank" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 order-first order-md-last">
                        <div class="form-box">
                            <?php
                            $APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"contact_us", 
	array(
		"USE_CAPTCHA" => "N",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "my@email.com",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"COMPONENT_TEMPLATE" => "contact_us",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>