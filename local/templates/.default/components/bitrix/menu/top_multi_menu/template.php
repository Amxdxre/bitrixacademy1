<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
    <div class="nv_topnav">
        <ul>

            <?php
            $previousLevel = 0;
            foreach ($arResult

            as $arItem): ?>

            <?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
                <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
            <?php endif ?>

            <?php if ($arItem["IS_PARENT"]): ?>

            <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>
            <li><a href="<?= $arItem["LINK"] ?>" <?php if (isset($arItem['PARAMS']['IMG'])): ?>class="menu-img-fon"
                   style="background-image: url(<?= $arItem['PARAMS']['IMG'] ?>);"<?php endif ?>><span><?= $arItem["TEXT"] ?></span></a>
                <ul>
                    <?php else: ?>
                    <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                        <ul>
                            <?php endif ?>

                            <?php else: ?>

                                <?php if ($arItem["PERMISSION"] > "D"): ?>

                                    <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>
                                        <li><a href="<?= $arItem["LINK"] ?>"
                                               <?php if (isset($arItem['PARAMS']['IMG'])): ?>class="menu-img-fon"
                                               style="background-image: url(<?= $arItem['PARAMS']['IMG'] ?>);"<?php endif ?>><span><?= $arItem["TEXT"] ?></span></a>
                                        </li>
                                    <?php else: ?>
                                        <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                                    <?php endif ?>

                                <?php endif ?>

                            <?php endif ?>

                            <?php $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

                            <?php endforeach ?>

                            <?php if ($previousLevel > 1)://close last item tags?>
                                <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                            <?php endif ?>
                            <div class="clearboth"></div>
                        </ul>
    </div>
<?php endif ?>