<?php
global $APPLICATION;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
?><?php $APPLICATION->IncludeComponent("bitrix:furniture.vacancies", ".default", array(
    "IBLOCK_TYPE" => "vacancies",
    "IBLOCK_ID" => "4",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_SHADOW" => "Y",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "36000000",
    "CACHE_GROUPS" => "Y",
    "AJAX_OPTION_ADDITIONAL" => ""
),
    false
);
?>
    <p>keywords - <?php $APPLICATION->ShowProperty("keywords") ?></p>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>