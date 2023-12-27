<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
IncludeTemplateLangFile(__FILE__);
global $APPLICATION;
?>
<!DOCTYPE HTML>
<html lang="<?= LANGUAGE_ID?>">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php
    $APPLICATION->SetAdditionalCSS('/local/templates/.default/template_styles.css');
    $APPLICATION->AddHeadScript('/local/templates/.default/js/jquery-1.8.2.min.js');
    $APPLICATION->AddHeadScript('/local/templates/.default/js/functions.js');
    ?>
    <link rel="shortcut icon" type="image/x-icon" href="/local/templates/.default/favicon.ico"/>

    <!--[if gte IE 9]>
    <style type="text/css">.gradient {
        filter: none;
    }</style><![endif]-->
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>
<div class="wrap">
    <div class="hd_header_area">
        <?php include_once($_SERVER['DOCUMENT_ROOT']."/local/templates/.default/include/header.php");?>
    </div>

    <!--- // end header area --->
    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "breadcrumbs_nav",
        Array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    );?>
    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <h1>
                            <?php $APPLICATION->ShowTitle(false);
                            $APPLICATION->ShowViewContent('rating');
                            ?>
                        </h1>
                    </div>
                    <!-- workarea -->
