<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
$rsUser = CUser::GetByID($arResult['PROPERTIES']['AUTHOR']['VALUE']);
$arUser = $rsUser->Fetch();
$arResult['AUTHOR'] = $arUser;
?>
