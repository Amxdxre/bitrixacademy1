<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php global $arResult; ?>
<?php
foreach ($arResult['ITEMS'] as $ID=>$arItems){
    $arItems= CFile::ResizeImageGet($arItems['DETAIL_PICTURE '], array('width'=>$arParams['LIST_PREV_PICT_W'], 'height'=>$arParams['LIST_PREV_PICT_H']), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult['ITEMS'][$ID]['DETAIL_PICTURE'] = $arImage;
}
?>
