<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('ArmSwissBank | Home');
?>

<?php

$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_slider", 
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
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "Slider",
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
		"PAGER_TITLE" => "Slider",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "SLIDER_DESCRIPTION",
			1 => "SLIDER_LINK",
			2 => "SLIDER_TITLE",
			3 => "",
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
		"COMPONENT_TEMPLATE" => "main_slider",
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
                        <span class="statistic-num numscroller" data-min='1' data-max='100' data-delay='10' data-increment='1'></span>
                        <span class="statistic-title">tears</span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="statistic">
                        <span class="statistic-num numscroller" data-min='1' data-max='260' data-delay='10' data-increment='1'></span>
                        <span class="statistic-title">projects</span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="statistic">
                        <span class="statistic-num numscroller" data-min='1' data-max='1000' data-delay='10' data-increment='1'></span>
                        <span class="statistic-title">collected</span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="statistic">
                        <span class="statistic-num numscroller" data-min='1' data-max='500' data-delay='10' data-increment='1'></span>
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
                        <div class="col-md-6">
                            <div class="cover">
                                <div class="card">
                                    <img src="./img/covers/cover1.png" class="card-img" alt="cover">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-solar-panel"></i> solar station</a>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-map-marker-alt"></i> power</a>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-bolt"></i> location</a>
                                        <p class="card-text"><a href="./pages/otherProjects.html"><i class="fas fa-cloud"></i> location</a>
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
                            <?$APPLICATION->IncludeComponent(
                    "altasib:feedback.form",
                    "contact_us",
                                    array(
                                        "ACTIVE_ELEMENT" => "Y",
                                        "ADD_HREF_LINK" => "Y",
                                        "ADD_LEAD" => "N",
                                        "ALX_LINK_POPUP" => "N",
                                        "BBC_MAIL" => "",
                                        "CATEGORY_SELECT_NAME" => "Выберите категорию",
                                        "CHECKBOX_TYPE" => "CHECKBOX",
                                        "CHECK_ERROR" => "Y",
                                        "COLOR_SCHEME" => "BRIGHT",
                                        "COLOR_THEME" => "",
                                        "COMPOSITE_FRAME_MODE" => "A",
                                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                                        "EVENT_TYPE" => "ALX_FEEDBACK_FORM",
                                        "FB_TEXT_NAME" => "",
                                        "FB_TEXT_SOURCE" => "PREVIEW_TEXT",
                                        "FORM_ID" => "1",
                                        "IBLOCK_ID" => "7",
                                        "IBLOCK_TYPE" => "altasib_feedback",
                                        "INPUT_APPEARENCE" => array(
                                            0 => "DEFAULT",
                                        ),
                                        "JQUERY_EN" => "jquery",
                                        "LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
                                        "LOCAL_REDIRECT_ENABLE" => "N",
                                        "MASKED_INPUT_PHONE" => array(
                                            0 => "PHONE",
                                        ),
                                        "MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
                                        "NAME_ELEMENT" => "ALX_DATE",
                                        "PROPERTY_FIELDS" => array(
                                            0 => "FIO",
                                            1 => "EMAIL",
                                            2 => "FEEDBACK_TEXT",
                                        ),
                                        "PROPERTY_FIELDS_REQUIRED" => array(
                                            0 => "FIO",
                                            1 => "EMAIL",
                                            2 => "FEEDBACK_TEXT",
                                        ),
                                        "PROPS_AUTOCOMPLETE_EMAIL" => array(
                                            0 => "EMAIL",
                                        ),
                                        "PROPS_AUTOCOMPLETE_NAME" => array(
                                            0 => "FIO",
                                        ),
                                        "PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(
                                            0 => "PHONE",
                                        ),
                                        "PROPS_AUTOCOMPLETE_VETO" => "N",
                                        "REQUIRED_SECTION" => "N",
                                        "SECTION_FIELDS_ENABLE" => "N",
                                        "SECTION_MAIL_ALL" => "artminasyanart96@gmail.com",
                                        "SEND_IMMEDIATE" => "Y",
                                        "SEND_MAIL" => "N",
                                        "SHOW_LINK_TO_SEND_MORE" => "Y",
                                        "SHOW_MESSAGE_LINK" => "Y",
                                        "SPEC_CHAR" => "N",
                                        "USERMAIL_FROM" => "N",
                                        "USER_CONSENT" => "N",
                                        "USER_CONSENT_ID" => "0",
                                        "USER_CONSENT_INPUT_LABEL" => "",
                                        "USER_CONSENT_IS_CHECKED" => "Y",
                                        "USER_CONSENT_IS_LOADED" => "N",
                                        "USE_CAPTCHA" => "N",
                                        "WIDTH_FORM" => "100%",
                                        "COMPONENT_TEMPLATE" => "contact_us",
                                        "COLOR_OTHER" => "#009688"
                                    ),
	false
                            );?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>