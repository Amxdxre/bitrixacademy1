<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
IncludeTemplateLangFile(__FILE__);
global $APPLICATION;
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <link rel="stylesheet" href="/local/templates/.default/template_styles.css"/>
    <script type="text/javascript" src="/local/templates/.default/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/local/templates/.default/js/slides.min.jquery.js"></script>
    <script type="text/javascript" src="/local/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script type="text/javascript" src="/local/templates/.default/js/functions.js"></script>

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
                            <?php $APPLICATION->ShowTitle(false); ?>
                        </h1>
                    </div>
                    <!-- workarea -->
