<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
$objectComponent = $this->__component;
if ($arResult['PROPERTIES']['AUTHOR']['VALUE']){
    $rsUser = CUser::GetByID($arResult['PROPERTIES']['AUTHOR']['VALUE']);
    $arUser = $rsUser->Fetch();
    $arResult['AUTHOR'] = array($arUser['NAME'],$arUser['LAST_NAME']);

    $objectComponent->SetResultCacheKeys(array('AUTHOR'));
}

$arResult['DETAIL_TEXT_50']=substr($arResult['DETAIL_TEXT'],0,100).'...';
$objectComponent->SetResultCacheKeys(array('DETAIL_TEXT_50'));
?>