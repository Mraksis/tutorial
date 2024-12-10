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
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
Loc::loadLanguageFile(__FILE__);
?>

<div class="site-blocks-cover overlay aos-init aos-animate" style="background-image: url('<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>'); background-position: 50% 220.008px;" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center text-center">
			<div class="col-md-10">
				<span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?= Loc::getMessage('INTRO')?></span>
				<h1 class="mb-2"><?= $arResult["NAME"];?></h1>
				<p class="mb-5"><strong class="h2 text-success font-weight-bold"><?= $arResult["PROPERTY_PRICE_VALUE"] ?></strong></p>
			</div>
		</div>
	</div>
</div>

<div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">
              <div class="slide-one-item home-slider owl-carousel">\
                <?foreach ($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["VALUE"] as $imageId):?>
                  <?$image = CFile::GetFileArray($imageId);?>
                  <div><img src="<?= $image["SRC"] ?>" alt="<?= $arResult["NAME"] ?>" class="img-fluid"></div>
                <? endforeach;?>
              </div>
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?= $arResult["PROPERTY_PRICE_VALUE"] ?> </strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                    <li>
                      <span class="property-specs"><?= Loc::getMessage('UPDATE_DATE')?></span>
                      <span class="property-specs-number"><?= $arResult["TIMESTAMP_X"] ?></span>
                      
                    </li>
                    <li>
                      <span class="property-specs"><?= Loc::getMessage('FLOORS')?></span>
                      <span class="property-specs-number"><?= $arResult["PROPERTY_FLOOR_COUNT_VALUE"] ?></span>
                      
                    </li>
                    <li>
                      <span class="property-specs"><?= Loc::getMessage('AREA')?></span>
                      <span class="property-specs-number"><?= $arResult["PROPERTY_AREA_VALUE"] ?></span>
                      
                    </li>
                  </ul>
              </div>
            </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?= Loc::getMessage('BATHS')?></span>
                  <strong class="d-block"><?= $arResult["PROPERTY_BATH_COUNT_VALUE"] ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?= Loc::getMessage('GARAGE')?></span>
                  <strong class="d-block"><?= $arResult["PROPERTY_GARAGE_CHECK_VALUE"] ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?= Loc::getMessage('BEDS')?></span>
                  <strong class="d-block"><?= $arResult["PROPERTY_BED_COUNT_VALUE"] ?></strong>
                </div>
              </div>
              <h2 class="h4 text-black"><?= Loc::getMessage('MORE_INFO')?></h2>
              <p><?= $arResult["DETAIL_TEXT"] ?></p>
              <p><?= $arResult["DETAIL_TEXT"] ?></p>
              <p><?= $arResult["DETAIL_TEXT"] ?></p>

              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3"><?= Loc::getMessage('GALLERY')?></h2>
                </div>
                <?foreach ($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["VALUE"] as $imageId):?>
                  <?$image = CFile::GetFileArray($imageId)?>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="<?= $image["SRC"] ?>" class="image-popup gal-item">
                      <img src="<?= $image["SRC"] ?>" alt="<?= $arResult["NAME"] ?>" class="img-fluid">
                    </a>
                </div>
                <?endforeach;?>
              </div>
            </div>
          </div>
          <div class="col-lg-4 pl-md-5">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
            </div>

          </div>
          <div class="col-md-12">
            <div>
              <h2 class="h4 text-black"><?= Loc::getMessage('MATS')?></h2>
                <?foreach ($arResult["DISPLAY_PROPERTIES"]["MATERIALS_ADD"]["VALUE"] as $mat):?>
                  <p><?=CFile::ShowImage($mat, 200, 200, "border=0", "", true)?></p>
                <?endforeach?>
            </div>
          </div>
          <div class="col-md-12">
            <div>
              <h2 class="h4 text-black"><?= Loc::getMessage('LINKS')?></h2>
                <?foreach ($arResult["DISPLAY_PROPERTIES"]["LINKS_EXTERNAL"]["VALUE"] as $link):?>
                  <p><a href="<?=$link?>"><?=$link?></a></p>
                <?endforeach?>
            </div>
          </div>
    </div>
  </div>
</div>