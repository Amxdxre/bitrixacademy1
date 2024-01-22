<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (is_array('AUTHOR')) {
    $str = $arResult['NAME'] . ', ' . implode(',', $arResult['AUTHOR']) . ', ' . $arResult['DETAIL_TEXT_50'];
} else {
    $str = $arResult['NAME'];
}

echo $str;

$APPLICATION->SetPageProperty('description', $str);
