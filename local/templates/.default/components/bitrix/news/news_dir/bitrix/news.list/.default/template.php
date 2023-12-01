<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="ps_head"><a class="ps_head_link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h2 class="ps_head_h"><?=$arItem["NAME"]?></h2></a><span class="ps_date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span></div>
	<div class="ps_content">
		<img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" align="left" alt="<?=$arItem["NAME"]?>"/> 
		<?echo $arItem["PREVIEW_TEXT"];?>
		<div style="clear:both"></div>
	</div>
<?endforeach;?>
