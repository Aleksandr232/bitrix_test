<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");


    


$APPLICATION->SetTitle("Bitrix");

?>




  <div class="modal">
    <form class="contact-us">
      <div class="burger burger_active burger_contact-us"></div>
      <h2 class="contact-us__title">Связаться с нами</h2>
      <p class="message message_contact-us"></p><input class="contact-us__input" type="text" placeholder="Имя" required=""> <input class="contact-us__input input_phone" type="tel" placeholder="Телефон" required="">
      <div class="checkbox checkbox_contact-us">
        <input type="checkbox" required=""> <label class="caption">Я согласен (-а) на обработку персональных данных</label>
      </div><button type="submit" class="button__contact-us">Отправить</button>
    </form>
  </div>
  <main>
    <div class="wrapper">
    <section class="projects slider" id="projects">
    <div class="slider__arrows slider__arrows_projects">
        <img class="slider__arrow-previous slider__arrow-previous_projects" src="<?=SITE_TEMPLATE_PATH?>/assets/img/SliderArrow.svg" alt="SliderArrow">
        <img class="slider__arrow-next slider__arrow-next_projects" src="<?=SITE_TEMPLATE_PATH?>/assets/img/SliderArrow.svg" alt="SliderArrow">
    </div>
    <div class="projects-list">
        <?php
        if (CModule::IncludeModule("iblock")) {
            $res = CIBlockElement::GetList(array(), array('IBLOCK_ID' => $iblockId), false, false, array('ID'));
            echo '<div class="slides-container">'; // открываем контейнер для слайдов
            while ($ar_res = $res->GetNext()) {
                $slider = CIBlockElement::GetByID($ar_res['ID'])->GetNextElement();
                $sliderFields = $slider->GetFields();
                $sliderProps = $slider->GetProperties();
                ?>
                <div class="slide slide_projects slide_active">
                    <div class="projects__description">
                        <span class="projects__tag caption"><?= $sliderProps['TAG']['VALUE'] ?></span>
                        <h1 class="projects__title"><?= $sliderFields['NAME'] ?></h1>
                        <p class="projects__subtitle"><?= $sliderProps['DESCRIPTION']['VALUE'] ?></p>
                    </div>
                    <div class="projects__img">
                        <img src="<?= CFile::GetPath($sliderProps['IMAGE']['VALUE']) ?>" alt="<?= $sliderFields['NAME'] ?>">
                    </div>
                </div>
                
                <?php
            }
            echo '</div>'; 
        }
        ?>
        </div>
    </section>
      <section class="news slider" id="news">
        <h1 class="section-title">Новости</h1>
        <div class="news__list">
          <div class="slide slide_news slide_active">
            <div class="news__img"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/new1.png" alt="new1"></div>
            <h2 class="news__title">Заголовок новости 1</h2>
            <p class="news__subtitle">Описание новости в 3 строки Описание новости в 3 строкиОписание новости в 3 строкиОписание новости в 3 строки Описание новости в 3 строки</p>
            <p class="news__date">01 января 1990</p>
          </div>
          <div class="slide slide_news">
            <div class="news__img"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/new2.png" alt="new2"></div>
            <h2 class="news__title">Заголовок новости 2</h2>
            <p class="news__subtitle">Описание новости в 3 строки Описание новости в 3 строкиОписание новости в 3 строкиОписание новости в 3 строки Описание новости в 3 строки</p>
            <p class="news__date">01 января 1990</p>
          </div>
          <div class="slide slide_news">
            <div class="news__img"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/new3.png" alt="new3"></div>
            <h2 class="news__title">Заголовок новости 3</h2>
            <p class="news__subtitle">Описание новости в 3 строки Описание новости в 3 строкиОписание новости в 3 строкиОписание новости в 3 строки Описание новости в 3 строки</p>
            <p class="news__date">01 января 1990</p>
          </div>
          <div class="slide slide_news">
            <div class="news__img"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/new4.png" alt="new4"></div>
            <h2 class="news__title">Заголовок новости 4</h2>
            <p class="news__subtitle">Описание новости в 3 строки Описание новости в 3 строкиОписание новости в 3 строкиОписание новости в 3 строки Описание новости в 3 строки</p>
            <p class="news__date">01 января 1990</p>
          </div>
          <div class="slide slide_news">
            <div class="news__img"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/new5.png" alt="new5"></div>
            <h2 class="news__title">Заголовок новости 5</h2>
            <p class="news__subtitle">Описание новости в 3 строки Описание новости в 3 строкиОписание новости в 3 строкиОписание новости в 3 строки Описание новости в 3 строки</p>
            <p class="news__date">01 января 1990</p>
          </div>
          <div class="slide slide_news">
            <div class="news__img"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/new6.png" alt="new6"></div>
            <h2 class="news__title">Заголовок новости 6</h2>
            <p class="news__subtitle">Описание новости в 3 строки Описание новости в 3 строкиОписание новости в 3 строкиОписание новости в 3 строки Описание новости в 3 строки</p>
            <p class="news__date">01 января 1990</p>
          </div>
        </div>
        <div class="slider__arrows slider__arrows_news"><img class="slider__arrow-previous slider__arrow-previous_news" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/SliderArrow.svg" alt="SliderArrow"> <img class="slider__arrow-next slider__arrow-next_news" src="assets/img/SliderArrow.svg" alt="SliderArrow"></div>
      </section>
      <section class="faq" id="faq">
        <h1 class="section-title">FAQ</h1>
        <div class="accordion-list">
          <div class="accordion">
            <div class="accordion__header">
            <h2 class="accordion__title">Какие услуги предоставляет ваша студия?</h2><img class="accordion__arrow" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/Arrow.svg" alt="Arrow"></div>
            <div class="accordion__body">
              <p>Мы придерживаемся высоких стандартов качества и стремимся создавать уникальный дизайн, отвечающий потребностям и ожиданиям наших клиентов. Наши дизайнеры постоянно совершенствуют свои навыки и следят за новыми трендами в дизайне.</p>
            </div>
          </div>
          <div class="accordion">
            <div class="accordion__header">
            <h2 class="accordion__title">Как вы обеспечиваете качество и уникальность дизайна?</h2><img class="accordion__arrow" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/Arrow.svg" alt="Arrow"></div>
            <div class="accordion__body">
              <p>Мы придерживаемся высоких стандартов качества и стремимся создавать уникальный дизайн, отвечающий потребностям и ожиданиям наших клиентов. Наши дизайнеры постоянно совершенствуют свои навыки и следят за новыми трендами в дизайне.</p>
            </div>
          </div>
          <div class="accordion">
            <div class="accordion__header">
            <h2 class="accordion__title">Предоставляете ли вы услуги по созданию контента для сайтов и приложений?</h2><img class="accordion__arrow" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/Arrow.svg" alt="Arrow"></div>
            <div class="accordion__body">
              <p>Мы придерживаемся высоких стандартов качества и стремимся создавать уникальный дизайн, отвечающий потребностям и ожиданиям наших клиентов. Наши дизайнеры постоянно совершенствуют свои навыки и следят за новыми трендами в дизайне.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="white-background">
      <div class="wrapper">
        <section class="subscribe" id="subscribe">
          <div class="subscribe__description">
            <h1 class="subscribe__title">Подпишись на рассылку</h1>
            <p class="subscribe__subtitle">Отправляем анонсы новых статей, выпусков и трансляций</p>
            <p class="message message_subscribe"></p>
          </div>
          <form class="subscribe__form">
            <div class="subscribe__input-list">
              <input class="input_email" type="email" placeholder="Электронная почта" required=""> <input class="input_date" type="text" placeholder="Дата (например, 01.01.1990)" required=""> <input class="input_phone" type="tel" placeholder="Телефон" required=""> <input class="input_time" type="text" placeholder="Время (например, 10:00)" required="">
            </div>
            <div class="checkbox checkbox_subscribe">
              <input type="checkbox" required=""> <label class="caption">Я согласен (-а) на обработку персональных данных</label>
            </div><button type="submit" class="button__contact-u s">Отправить</button>
          </form>
        </section>
      </div>
    </div>
  </main>
  

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>