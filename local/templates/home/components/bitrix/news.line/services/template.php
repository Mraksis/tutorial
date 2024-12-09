<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?
use Bitrix\Main\Localization\Loc;
?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<div class="news-line">
	<div class="row justify-content-center">
		<div class="col-md-7 text-center mb-5">
			<div class="site-section-title">
				<h2><?= Loc::getMessage("OUR_SERVICES")?></h2>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<?foreach($arResult["ITEMS"] as $arItem):?>	
		<div class="col-md-6 col-lg-4 mb-4" id=<?=$this->GetEditAreaId($arItem['ID']);?>>
			<a href="<?=$arItem["PROPERTY_SERVICE_LINK_VALUE"]?>" class="service text-center border rounded">
				<span class="icon flaticon-house"></span>
				<h2 class="service-heading"><?= $arItem["NAME"];?></h2>
				<p><span class="read-more"><?= Loc::getMessage("LEARN_MORE")?></span></p>
			</a>
		</div>
	<?endforeach;?>
</div>