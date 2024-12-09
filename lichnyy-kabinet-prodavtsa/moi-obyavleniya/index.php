<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мои объявления");
?>

<?php
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "",
	)
);?>

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/images/hero_bg_2.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">About Us</h1>
            <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <strong class="text-white">About</strong></div>
          </div>
        </div>
      </div>
    </div>

<?$userId = $GLOBALS['USER']->GetID();?>

<?$filterForCurrentUser = array("CREATED_BY" => $userId);?>  

<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"bulletin_news", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "NAME",
			3 => "PREVIEW_TEXT",
			4 => "PREVIEW_PICTURE",
			5 => "DETAIL_TEXT",
			6 => "DETAIL_PICTURE",
			7 => "IBLOCK_ID",
			8 => "IBLOCK_CODE",
			9 => "TIMESTAMP_X",
			10 => "PROPERTY_AREA",
			11 => "PROPERTY_LOCATION",
			12 => "PROPERTY_PRICE",
			13 => "PROPERTY_GARAGE_CHECK",
			14 => "PROPERTY_BATH_COUNT",
			15 => "PROPERTY_BED_COUNT",
			16 => "PROPERTY_FLOOR_COUNT",
			17 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LOCATION",
			1 => "BATH_COUNT",
			2 => "BED_COUNT",
			3 => "FLOOR_COUNT",
			4 => "GARAGE_CHECK",
			5 => "AREA",
			6 => "PRIORITY_CHECK",
			7 => "LINKS_EXTERNAL",
			8 => "PRICE",
			9 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_NAME" => "filterForCurrentUser",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "bulletin",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "NAME",
			3 => "PREVIEW_PICTURE",
			4 => "DETAIL_TEXT",
			5 => "IBLOCK_ID",
			6 => "IBLOCK_CODE",
			7 => "CREATED_BY",
			8 => "TIMESTAMP_X",
			9 => "PROPERTY_AREA",
			10 => "PROPERTY_LOCATION",
			11 => "PROPERTY_PRICE",
			12 => "PROPERTY_GARAGE_CHECK",
			13 => "PROPERTY_BATH_COUNT",
			14 => "PROPERTY_BED_COUNT",
			15 => "PROPERTY_FLOOR_COUNT",
			16 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "LOCATION",
			1 => "BATH_COUNT",
			2 => "BED_COUNT",
			3 => "FLOOR_COUNT",
			4 => "GARAGE_CHECK",
			5 => "AREA",
			6 => "PRIORITY_CHECK",
			7 => "LINKS_EXTERNAL",
			8 => "PRICE",
			9 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "pagination",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/obyavleniya/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"COMPONENT_TEMPLATE" => "bulletin_news",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>