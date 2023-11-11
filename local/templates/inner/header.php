<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <script type="text/javascript" src="/local/templates/main/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/local/templates/main/js/slides.min.jquery.js"></script>
    <script type="text/javascript" src="/local/templates/main/js/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script type="text/javascript" src="/local/templates/main/js/functions.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="/local/templates/main/favicon.ico"/>

    <!--[if gte IE 9]>
    <style type="text/css">.gradient {
        filter: none;
    }</style><![endif]-->
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>
<div class="wrap">
    <div class="hd_header_area">
        <div class="hd_header">
            <table>
                <tr>
                    <td rowspan="2" class="hd_companyname">
                        <h1><a href="">Мебельный магазин</a></h1>
                    </td>
                    <td rowspan="2" class="hd_txarea">
                        <span class="tel">8 (495) 212-85-06</span> <br/>
                        <?php echo GetMessage('WORKING_TIME'); ?> <span class="workhours">ежедневно с 9-00 до 18-00</span>
                    </td>
                    <td style="width:232px">
                        <form action="">
                            <div class="hd_search_form" style="float:right;">
                                <input placeholder="Поиск" type="text"/>
                                <input type="submit" value=""/>
                            </div>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 11px;">
							<span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>
							<div class="hd_loginform">
								<span class="hd_title_loginform">Войти на сайт</span>
								<form name="" method="" action="">

									<input placeholder="Логин" type="text">
									<input placeholder="Пароль" type="password">
									<a href="/" class="hd_forgotpassword">Забыли пароль</a>

									<div class="head_remember_me" style="margin-top: 10px">
										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
										<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере">Запомнить меня</label>
									</div>
									<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
									</form>
								<span class="hd_close_loginform">Закрыть</span>
							</div>
							</span><br>
                        <a href="" class="hd_signup">Зарегистрироваться</a>
                    </td>
                </tr>
            </table>
            <div class="nv_topnav">
                <ul>
                    <li><a href="" class="menu-img-fon" style="background-image: url(images/nv_home.png);"><span></span></a>
                    </li>
                    <li><a href=""><span>Компания</span></a>
                        <ul>
                            <li><a href="">Пункт 1</a></li>
                            <li><a href="">Пункт 2</a></li>
                            <li><a href="">Пункт 3</a></li>
                            <li><a href="">Пункт 4</a></li>
                        </ul>
                    </li>
                    <li><a href=""><span>Новости</span></a></li>
                    <li><a href=""><span>Каталог</span></a></li>
                    <li><a href=""><span>Акции</span></a>
                        <ul>
                            <li><a href="">Пункт 1</a>
                                <ul>
                                    <li><a href="">Пункт 1</a></li>
                                    <li><a href="">Пункт 2</a></li>
                                </ul>
                            </li>
                            <li><a href="">Пункт 2</a></li>
                            <li><a href="">Пункт 3</a></li>
                            <li><a href="">Пункт 4</a></li>
                        </ul>
                    </li>
                    <li><a href=""><span>Партнерам</span></a></li>
                    <li><a href=""><span>Контакты</span></a></li>
                    <div class="clearboth"></div>
                </ul>
            </div>
        </div>
    </div>

    <!--- // end header area --->
    <div class="bc_breadcrumbs">
        <ul>
            <li><a href="">Каталог</a></li>
            <li><a href="">Мебель</a></li>
            <li><a href="">Выставки и события</a></li>
        </ul>
        <div class="clearboth"></div>
    </div>
    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title">Заголовок страницы</p>
                    </div>
                    <!-- workarea -->
