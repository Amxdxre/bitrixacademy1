<?
AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", array("CIBLockHandler", "OnBeforeIBlockElementUpdateHandler"));

class CIBLockHandler
{
//    // создаем обработчик события "OnBeforeIBlockElementUpdate"
//    public static function OnBeforeIBlockElementUpdateHandler(&$arFields)
//    {
//        global $APPLICATION;
//        if ($arFields['ACTIVE'] == 'N')
//        {
//            $arFields['ACTIVE'] = 'Y';
//            $APPLICATION->throwException('Вы деактивировали свежую новость');
//            dump($arFields,true);
//        }
//        DateTime::createFromFormat('D, d M y H:i:s O');
//    }

    public static function OnBeforeIBlockElementDeleteHandler($ID)
    {
        CModule::IncludeModule("iblock");
        $res = CIBlockElement::GetByID($ID);

        if($ar_res = $res->GetNext())
        {
            if($ar_res["SHOW_COUNTER"]>=1){

                $el = new CIBlockElement;
                $arLoadProductArray = Array(
                    "ACTIVE"         => "N",            //не активен
                );
                $PRODUCT_ID = $ar_res["ID"];
                $res = $el->Update($PRODUCT_ID, $arLoadProductArray);


                global $APPLICATION;
                $APPLICATION->throwException("Количество просмотров товара ".$ar_res["NAME"]." = ".$ar_res["SHOW_COUNTER"]);
                return false;
                dump($ar_res,true);

            }
        }
    }

}