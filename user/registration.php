<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?php $APPLICATION->IncludeComponent(
    "bitrix:main.register",
    "",
    array(
        "AUTH" => "Y",
        "REQUIRED_FIELDS" => array(),
        "SET_TITLE" => "Y",
        "SHOW_FIELDS" => array(),
        "SUCCESS_PAGE" => "",
        "USER_PROPERTY" => array(),
        "USER_PROPERTY_NAME" => "",
        "USE_BACKURL" => "Y"
    )
); ?><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>