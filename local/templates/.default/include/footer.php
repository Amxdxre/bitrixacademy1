<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
IncludeTemplateLangFile(__FILE__);
global $APPLICATION;
?>

<div class="ft_container">
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "ft_about_menu",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "COMPONENT_TEMPLATE" => ".default",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => "",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "bottom",
            "USE_EXT" => "N"
        )
    );?>
    <div class="ft_catalog">
        <h4>Каталог товаров</h4>
        <ul>
            <li><a href="">Кухни</a></li>
            <li><a href="">Кровати и кушетки</a></li>
            <li><a href="">Гарнитуры</a></li>
            <li><a href="">Тумобчки и прихожие</a></li>
            <li><a href="">Спальни и матрасы</a></li>
            <li><a href="">Аксессуары</a></li>
            <li><a href="">Столы и стулья</a></li>
            <li><a href="">Каталоги мебели</a></li>
            <li><a href="">Раскладные диваны</a></li>
            <li><a href="">Кресла</a></li>
        </ul>

    </div>
    <div class="ft_contacts">
        <h4><?php echo GetMessage('CONTACT_INFO'); ?></h4>
        <!-- vCard        http://help.yandex.ru/webmaster/hcard.pdf      -->
        <p class="vcard">
						<span class="adr">
							<span class="street-address">ул. Летняя стр.12, офис 512</span>
						</span>
            <span class="tel"><?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/phone.php"
                    )
                );?></span>
            <strong><?php echo GetMessage('WORKING_TIME'); ?></strong> <br/> <span class="workhours">ежедневно с 9-00 до 18-00</span><br/>
        </p>
        <ul class="ft_solcial">
            <li><a href="" class="fb"></a></li>
            <li><a href="" class="tw"></a></li>
            <li><a href="" class="ok"></a></li>
            <li><a href="" class="vk"></a></li>
        </ul>
        <div class="ft_copyright">© 2000 - 2012 "<?php echo GetMessage('FURNITURE_SHOP'); ?>"</div>


    </div>

    <div class="clearboth"></div>
</div>
