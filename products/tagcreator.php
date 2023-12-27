<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');

$Iblock=2;// Id инфоблока с продукцией
$matCode='MATERIAL'; // Код своства "Материал"
$manufCode='MANUFACTURER'; // Код своства "Производитель"

$arSelect = Array("ID","IBLOCK_ID", "NAME","PROPERTY_*");
$arFilter = Array("IBLOCK_ID"=>IntVal($Iblock));
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()){ 
   $arFields = $ob->GetFields();  
   $arFields['PROPERTIES'] = $ob->GetProperties();
   $strTags=$arFields['PROPERTIES'][$matCode]['VALUE'].', '.$arFields['PROPERTIES'][$manufCode]['VALUE'];
   $el = new CIBlockElement;
   $result = $el->Update($arFields['ID'],Array('TAGS'=>$strTags));
}
echo "Done!";
?>