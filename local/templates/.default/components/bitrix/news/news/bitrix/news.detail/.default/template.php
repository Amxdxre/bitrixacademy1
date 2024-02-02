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
<div class="main_title">
    <p class="title"><? echo $arResult["NAME"] ?></p>
    <span class="main_date"><? echo $arResult["DISPLAY_ACTIVE_FROM"] ?></span>
</div>

    <? if (is_array($arResult["DETAIL_PICTURE"])): ?>
    <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" align="left" alt=""/>
    <? endif ?>
    <p><? echo $arResult["PREVIEW_TEXT"]; ?></p>
    <p><? echo $arResult["DETAIL_TEXT"]; ?></p>
<?php
if ($arResult['AUTHOR']):?>
    Автор: <?php echo $arResult['AUTHOR'][0];?> <?php echo $arResult['AUTHOR'][1]?>
<?php endif ?>
