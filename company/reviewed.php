<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое значение");
$APPLICATION->SetPageProperty("title", "Заголовок окна браузера");
$APPLICATION->SetPageProperty("keywords", "Отзывы, компания, мебель");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы");
?>

    <p>Заголовок - <?php $APPLICATION->ShowTitle() ?></p>
    <p>Заголовок - <?php $APPLICATION->ShowTitle(false) ?></p>
    <p>test - <?php $APPLICATION->ShowProperty("test") ?></p>
    <p>title - <?php $APPLICATION->ShowProperty("title") ?></p>
    <p>keywords - <?php $APPLICATION->ShowProperty("keywords") ?></p>
    <p>description - <?php $APPLICATION->ShowProperty("description") ?></p>

<?php $APPLICATION->SetPageProperty("test", "Значение 2"); ?>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>