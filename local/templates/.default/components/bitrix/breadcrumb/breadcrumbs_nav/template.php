<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;
Bitrix\Main\Diag\Debug::dumpToFile($arResult,'$arResult','__breadcrumb.htm');
Bitrix\Main\Diag\Debug::dumpToFile($arParams,'$arParams','__breadcrumb.htm');
if (empty($arResult))
    return "";

$strReturn = '<div class="bc_breadcrumbs"><ul>';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= '<li><a href="' . $arResult[$index]["LINK"] . '">' . $title . '</a></li>';
    } else {
        $strReturn .= '<li><a href="">' . $title . '</a></li>';
    }
}

$strReturn .= '</ul><div class="clearboth"></div></div>';

return $strReturn;
