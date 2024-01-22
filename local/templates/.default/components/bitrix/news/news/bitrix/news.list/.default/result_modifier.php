<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
$resizeHeight = intval($arParams['LIST_PREV_PICT_H']);
$resizeWidth = intval($arParams['LIST_PREV_PICT_W']);

foreach ($arResult['ITEMS'] as $ID=>$arItems){
    $resizedImage = CFile::ResizeImageGet($arItems['PREVIEW_PICTURE'], array('width'=> $resizeWidth, 'height'=> $resizeHeight),true);
    $arResult['ITEMS'][$ID]['PREVIEW_PICTURE'] = $resizedImage;
}
?>
