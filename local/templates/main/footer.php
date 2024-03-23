<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog.php");?>
<?php
    use \Bitrix\Main\Page\Asset;
?>

<footer>
    <div class="wrapper">
      <div class="footer">
        <div class="footer__sources">
          <img class="footer__logo" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/whiteLogo.svg" alt="whiteLogo">
          <div class="footer__icon-list">
            <a class="footer__icon" href="https://www.youtube.com/"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/youtube.svg" alt="youtube"></a><a class="footer__icon" href="https://web.telegram.org"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/telegram.svg" alt="telegram"></a><a class="footer__icon" href="https://vk.com"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/vk.svg" alt="vk"></a>
          </div>
        </div>
        <nav>
          <ul class="footer__nav">
            <li class="footer__nav-item">
              <a class="link" href="#">О нас</a>
            </li>
            <li class="footer__nav-item">
              <a class="link" href="#projects">Проекты</a>
            </li>
            <li class="footer__nav-item">
              <a class="link" href="#news">Новости</a>
            </li>
            <li class="footer__nav-item">
              <a class="link" href="#faq">FAQ</a>
            </li>
            <li class="footer__nav-item">
              <a class="link" href="#subscribe">Контакты</a>
            </li>
          </ul>
        </nav>
        <div class="footer__info">
          <a>г. Горгород,<br>
          ул. Мегаполисная, 1</a> <a class="link" href="tel:+70000000000">+7 (000) 000-00-00</a> <a class="link" href="mailto:john@example.com">email@email.ru</a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>