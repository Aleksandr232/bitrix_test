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
    <?php
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;display=swap");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "https://fonts.googleapis.com");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "https://fonts.gstatic.com");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/bundle.js");
    ?>
</head>
<body>
    <div id="#panel"><?php $APPLICATION->ShowPanel();?></div>
    <header>
    <div class="wrapper">
      <div class="header">
        <img class="header__logo" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/Logo.svg" alt="Logo">
        <div class="header__menu">
          <nav>
            <ul class="header__nav">
              <li class="header__nav-item header__nav-item_paragraph">
                <div class="header__nav-point"><a href="#">О нас</a> <img class="arrow" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/Arrow.svg" alt="Arrow"></div>
                <div class="header__links">
                  <div class="header__links-wrapper">
                    <a class="link">О 500на700</a> <a class="link">Документы</a> <a class="link">Устойчивое развитие</a> <a class="link">Команда</a> <a class="link">Стратегия</a>
                  </div>
                </div>
              </li>
              <li class="header__nav-item header__nav-item_paragraph">
                <div class="header__nav-point"><a href="#projects">Проекты</a> <img class="arrow" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/Arrow.svg" alt="Arrow"></div>
                <div class="header__links">
                  <div class="header__links-wrapper">
                    <a class="link">О 500на700</a> <a class="link">Документы</a> <a class="link">Устойчивое развитие</a> <a class="link">Команда</a> <a class="link">Стратегия</a>
                  </div>
                </div>
              </li>
              <li class="header__nav-item">
                <a class="link" href="#news">Новости</a>
              </li>
              <li class="header__nav-item">
                <a class="link" href="#faq">FAQ</a>
              </li>
              <li class="header__nav-item">
                <a class="link" href="#subscribe">Контакты</a>
              </li>
            </ul>
          </nav><button class="button_white button_open-modal">Связаться с нами</button>
        </div>
        <div class="burger burger_main"></div>
      </div>
    </div>
  </header>
