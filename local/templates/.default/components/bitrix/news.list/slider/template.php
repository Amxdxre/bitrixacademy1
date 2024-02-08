<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<?php
$APPLICATION->AddHeadScript('/local/templates/.default/js/slides.min.jquery.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery-1.8.2.min.js');
?>

<script type="text/javascript">
    $().ready(function () {
        $(function () {
            $('#slides').slides({
                preload: true,
                generateNextPrev: false,
                autoHeight: true,
                play: 4000,
                effect: 'fade'
            });
        });
    });
</script>
<div class="sl_slider" id="slides">
    <div class="slides_container">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <div>
                <div>
                    <? if (is_array($arItem["PREVIEW_PICTURE"])):?>
                        <a href="<?=$arResult['ELEM'][$arItem['PROPERTIES']['LINK_SYKA_BLYAT']['VALUE']]['DETAIL_PAGE_URL'] ?>"><img style="width: <?= $arParams['LIST_PREV_PICT_W']?>;height: <?= $arParams['LIST_PREV_PICT_H']?>;" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""/></a>
                    <? endif; ?>
                    <h2><a><?=$arResult['ELEM'][$arItem['PROPERTIES']['LINK_SYKA_BLYAT']['VALUE']]['NAME'] ?></a></h2>
                    <p><?=$arResult['ELEM'][$arItem['PROPERTIES']['LINK_SYKA_BLYAT']['VALUE']]['NAME'] ?> всего за <?=$arResult['ELEM'][$arItem['PROPERTIES']['LINK_SYKA_BLYAT']['VALUE']]['PROPERTY_PRICE_VALUE'] ?> руб.</p>
                    <a href="<?=$arResult['ELEM'][$arItem['PROPERTIES']['LINK_SYKA_BLYAT']['VALUE']]['DETAIL_PAGE_URL'] ?>" class="sl_more">Подробнее →</a>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>

