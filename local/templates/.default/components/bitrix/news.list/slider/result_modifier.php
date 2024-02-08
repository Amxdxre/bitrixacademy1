<?php
foreach ($arResult["ITEMS"] as $arItem):
$ID = $arItem['PROPERTIES']['LINK_SYKA_BLYAT']['VALUE'];
$link = $arItem['DISPLAY_PROPERTIES']['LINK_SYKA_BLYAT']['LINK_ELEMENT_VALUE'][$ID]['DETAIL_PAGE_URL'];
$name = $arItem['DISPLAY_PROPERTIES']['LINK_SYKA_BLYAT']['LINK_ELEMENT_VALUE'][$ID]['NAME'];
$iBlockID[] = $arItem['PROPERTIES']['LINK_SYKA_BLYAT']['VALUE']
?>
<?endforeach;?>
<?php
$arSort = false;
$arFilter = array(
    'IBLOCK_ID' => 2,
    'ACTIVE' => 'Y',
    'ID' => $iBlockID,
);
$arGroupBy = false;
$arNavStartParams = false;
$arSelect = array('NAME','PROPERTY_PRICE','DETAIL_PAGE_URL');
$BDRes = CIBlockElement::GetList(
    $arSort,
    $arFilter,
    $arGroupBy,
    $arNavStartParams,
    $arSelect,
);
$arResult['ELEM'] = array();
while ($arRes = $BDRes->GetNext())
{
    $arResult['ELEM'][$arRes['ID']] = $arRes;
}
?>


