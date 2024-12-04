<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="col-md-6 col-lg-6">
<ul class="list-unstyled">
        <?if (!empty($arResult)):?>
            <?$menuItems = array_chunk($arResult, ceil(count($arResult) / 2));?>
            <?foreach ($menuItems[0] as $arItem):?>
                <?if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;?>
                <?if ($arItem["SELECTED"]):?>
                    <li><a href="<?= $arItem["LINK"] ?>" class="selected"><?= $arItem["TEXT"] ?></a></li>
                <?else: ?>
                    <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                <?endif;?>
            <?endforeach;?>
        <?endif;?>
</ul>
</div>
<div class="col-md-6 col-lg-6">
<ul class="list-unstyled">
    <?if (!empty($arResult)):?>
        <?foreach ($menuItems[1] as $arItem):?>
            <?if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;?>
            <?if ($arItem["ED"]):?>
                <li><a href="<?= $arItem["LINK"] ?>" class="selected"><?= $arItem["TEXT"] ?></a></li>
            <?else: ?>
                <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
            <?endif;?>
        <?endforeach;?>
    <?endif;?>
</ul>
</div>