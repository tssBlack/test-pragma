<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Акции");
?><h1>Акции и спецпредложения</h1>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"promo_cards",
	[
		"IBLOCK_ID" => "5",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"FIELD_CODE" => [
			0 => "NAME",
			1 => "DATE_ACTIVE_TO",
		],
		"PROPERTY_CODE" => [
			0 => "DISCOUNT_PERCENT",
			1 => "BADGE",
		],
		"IBLOCK_TYPE" => "news",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => "main:promo_cards",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	],
	false
);?>

<style>
.promo-cards-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
    margin: 20px 0;
    box-sizing: border-box;
}

.promo-cards-container * {
    box-sizing: border-box;
}

.promo-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    position: relative;
}

.promo-card__image-box {
    position: relative;
    width: 100%;
    height: 180px;
    background: #f1f5f9;
}

.promo-card__image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.promo-card__badges {
    position: absolute;
    top: 10px;
    left: 10px;
    display: flex;
    flex-direction: column;
    gap: 5px;
    z-index: 2;
}

.badge {
    display: inline-block;
    padding: 4px 8px;
    font-size: 12px;
    font-weight: bold;
    border-radius: 4px;
    color: #ffffff;
    text-transform: uppercase;
}

.badge--hot {
    background-color: #dc2626;
}

.badge--info {
    background-color: #2563eb;
}

.promo-card__content {
    padding: 15px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.promo-card__discount {
    font-size: 22px;
    font-weight: 800;
    color: #dc2626;
    margin-bottom: 5px;
}

.promo-card__title {
    font-size: 18px;
    font-weight: 700;
    margin: 0 0 8px 0;
    line-height: 1.4;
}

.promo-card__text {
    font-size: 14px;
    color: #64748b;
    line-height: 1.4;
    margin: 0;
}

</style><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>