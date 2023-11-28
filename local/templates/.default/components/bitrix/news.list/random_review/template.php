<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="sb_reviewed">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <? if (is_array($arItem["PREVIEW_PICTURE"])): ?>
            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="sb_rw_avatar" alt=""/>
        <? endif; ?>
        <span class="sb_rw_name"><? echo $arItem["NAME"] ?></span>
        <span class="sb_rw_job"><?= $arItem["PROPERTIES"]['JOB_TITLE']['VALUE'] ?> “<?= $arItem["PROPERTIES"]['COMPANY_NAME']['VALUE'] ?>”</span><br>
        <p>“<? echo $arItem["PREVIEW_TEXT"] ?>”</p><br>
        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="sb_action_more">Подробнее &rarr;</a>
        <div class="clearboth"></div>
        <div class="sb_rw_arrow"></div>
    <? endforeach; ?>
</div>