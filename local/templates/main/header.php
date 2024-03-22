<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog.php");?>
<?php
    use \Bitrix\Main\Page\Asset;
    $APPLICATION->ShowHead();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        Asset::getInstance()->addString('<meta charset="UTF-8">');
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
    ?>
    <title><?php $APPLICATION->ShowTitle();?></title>
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH;?>/icons/favicon.ico" type="image/x-icon">
    <?php
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.min.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-reboot.min.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-grid.min.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "https://use.fontawesome.com/releases/v5.8.2/css/all.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic-ext");
    ?>
</head>
<body>
    <div id="#panel"><?php $APPLICATION->ShowPanel();?></div>
    <header>
        <nav>
            <div class="container">
                <ul class="menu">
                    <li class="menu_item"><a href="#" class="menu_link">Главная</a></li>
                    <li class="menu_item"><a href="#require" class="menu_link">Со своим автомобилем</a></li>
                    <li class="menu_item"><a href="#require" class="menu_link">На автомобиле компании</a></li>
                    <li class="menu_item"><a href="#" class="menu_link">Требования</a></li>
                    <li class="menu_item"><a href="#" class="menu_link">Контакты</a></li>
                    <li class="menu_item"><a href="#" class="menu_link">Оставить заявку</a></li>
                </ul>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <div class="subheader">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-4 offset-md-1">
                        <a href="#" class="subheader_logo"><img src="<?=SITE_TEMPLATE_PATH;?>/icons/logo.png" alt="logo"></a>
                        <div class="subheader_official">Официальный партнер Uber в Москве</div>
                    </div>
    
                    <div class="xs-hidden col-md-3 offset-md-1 col-xl-2 offset-xl-2">
                        <div class="subheader_call">Звоните нам ежедневно</div>
                        <a href="tel:84957970988" class="subheader_phone">8 495 797 09 88</a>
                    </div>
    
                    <div class="col-md-3">
                        <a href="tel:84957970988" class="xs-visible subheader_phone">8 495 797 09 88</a>
                        <button class="subheader_btn">заказать звонок</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
