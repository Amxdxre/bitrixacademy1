<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <?php
    $ID = $arItem['PROPERTIES']['LINK_SYKA_BLYAT']['VALUE'];
    $link = $arItem['DISPLAY_PROPERTIES']['LINK_SYKA_BLYAT']['LINK_ELEMENT_VALUE'][$ID]['DETAIL_PAGE_URL'];
    $name = $arItem['DISPLAY_PROPERTIES']['LINK_SYKA_BLYAT']['LINK_ELEMENT_VALUE'][$ID]['NAME'];
    ?>

    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="ps_head"><a class="ps_head_link" href="<? echo $link ?>"><h2 class="ps_head_h"><? echo $name; ?></h2></a>
            <span class="ps_date"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
        </div>
        <div class="ps_content">
            <img style="width: <?= $arParams['LIST_PREV_PICT_W']?>;height: <?= $arParams['LIST_PREV_PICT_H']?>;" src="<? echo $arItem['PREVIEW_PICTURE']['SRC']; ?>" align="left" alt=""/>
            <p><? echo $arItem["PREVIEW_TEXT"]; ?></p><br>
            <p><? echo $name; ?> всего за <?= $arItem["PROPERTIES"]['PRICE']['VALUE'] ?> руб. </p>
            <div style="clear:both"></div>
            <a href="<? echo $link ?>">Подробнее &rarr;</a>
        </div>
    </div>
<? endforeach; ?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
