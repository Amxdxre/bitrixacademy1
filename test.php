<?php
global $APPLICATION;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое значение");
$APPLICATION->SetTitle("Тестовая страница");
?><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>