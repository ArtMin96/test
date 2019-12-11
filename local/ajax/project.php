<?php

require($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");




if($_GET['id'] == 'co2'){
    $code = 'F_CO2';
    $val  =  'Y';
}

if($_GET['id'] == 'power'){
    $code = 'F_POWER';
    $val  =   'Y';
}

if($_GET['id'] == 'location'){
    $code = 'F_LOCATION';
    $val  =   'Y';
}

if($_GET['id'] == 'project-type'){
    $code = 'F_PROJECT_TYPE';
    $val  =   'Y';
}

global $arFilter;
$arFilter = ['PROPERTY_'.$code.'_VALUE' => $val];

//print_r($arFilter);die;

$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "projects_ajax",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FILE_404" => "",
        "FILTER_NAME" => 'arFilter',
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "Projects",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "4",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "show_more",
        "PAGER_TITLE" => "Projects",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "120",
        "PROPERTY_CODE" => array(
            0 => "F_CO2",
            1 => "F_POWER",
            2 => "F_LOCATION",
            3 => "F_PROJECT_TYPE",
            4 => "RUSSIAN_TITLE",
            5 => "RUSSIAN_PREVIEW_TEXT",
            6 => "",
            7 => "",
            8 => "",
            9 => "",
            10 => "",
        ),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "Y",
        "SHOW_404" => "Y",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "projects_ajax"
    ),
    false
);
