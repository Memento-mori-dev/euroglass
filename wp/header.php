<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <!-- <link rel="icon" type="image/svg+xml" href="/vite.svg" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <? wp_head();?>
</head>

<body>
  <header class="header">
    <div class="header__pre">
      <div class="wrapper">
        <a href="tel:<?=preg_replace('/[^0-9]/', '', get_field('phone', 39));?>" class="header-pre__phone">+<?=get_field('phone', 39);?></a>

        <a href="malto:<?=get_field('email', 39);?>" class="header-pre__mail"><?=get_field('email', 39);?></a>
      </div>
    </div>

    <div class="wrapper">
      <div class="header__wrapper">
        <a href="#" class="header__logo">
          <img src="<?= get_template_directory_uri();?>/assets/img/page/main/logo.svg" alt="">
        </a>

        <ul class="header__menu">
          <li><a href="#" class="menu-pc">Продукция</a></li>
          <li><a href="#">Огнестойкое стекло</a></li>
          <li><a href="#">О нас</a></li>
          <li><a href="#">Документация</a></li>
          <li><a href="#">Наши работы</a></li>
        </ul>

        <div class="header__additionally">
          <div class="header__contact">
            <a href="tel:<?=preg_replace('/[^0-9]/', '', get_field('phone', 39));?>" class="header__phone">+<?=get_field('phone', 39);?></a>

            <a href="malto:<?=get_field('email', 39);?>" class="header__mail"><?=get_field('email', 39);?></a>
          </div>
          
          <div class="header__buttons">
            <button class="btn btn__orange header__btn-pc">Заявка на расчет</button>

            <button class="btn btn__transparent header__btn-ph">Заявка на расчет</button>

            <button class="header__btn-menu header__btn-ph">
              
            </button>
          </div>
        </div>
      </div>

      <div class="header__sub-menu">
        <div class="header-sub-menu__content sub-menu" style="height: 362px;">
          <ul class="header-sub-menu__list">
            <li class="active"><a href="#">Противопожарные окна</a></li>
            <li><a href="#">Противопожарные двери</a></li>
            <li><a href="#">Противопожарные перегородки</a></li>
            <li><a href="#">Противопожарные фасады</a></li>
            <li><a href="#">Противопожарный междуэтажный пояс</a></li>
          </ul>

          <div class="header-sub-menu__detail">
            <div class="header-sub-menu-detail__item detail-menu active">
              <div class="header-sub-menu__item">
                <p class="header-sub-menu__title">По огнестойкости</p>
  
                <ul class="header-sub-menu-item__list">
                  <li><a href="#">E 90</a></li>
                  <li><a href="#">E 15</a></li>
                  <li><a href="#">E 30</a></li>
                  <li><a href="#">E 45</a></li>
                  <li><a href="#">E 60</a></li>
                </ul>
              </div>
  
              <div class="header-sub-menu__item">
                <p class="header-sub-menu__title">По типу заполнения</p>
  
                <ul class="header-sub-menu-item__list">
                  <li><a href="#">1 тип</a></li>
                  <li><a href="#">2 тип</a></li>
                  <li><a href="#">3 тип</a></li>
                </ul>
              </div>
  
              <div class="header-sub-menu__item">
                <p class="header-sub-menu__title">По материалу</p>
  
                <ul class="header-sub-menu-item__list">
                  <li><a href="#">Алюминиевый профиль</a></li>
                  <li><a href="#">Профиль из нержавеющей стали</a></li>
                </ul>
              </div>
            </div>

            <div class="header-sub-menu-detail__item detail-menu">
              <div class="header-sub-menu__item">
                <p class="header-sub-menu__title">По огнестойкости 2</p>
  
                <ul class="header-sub-menu-item__list">
                  <li><a href="#">E 90</a></li>
                  <li><a href="#">E 15</a></li>
                  <li><a href="#">E 30</a></li>
                  <li><a href="#">E 45</a></li>
                  <li><a href="#">E 60</a></li>
                </ul>
              </div>
  
              <div class="header-sub-menu__item">
                <p class="header-sub-menu__title">По типу заполнения</p>
  
                <ul class="header-sub-menu-item__list">
                  <li><a href="#">1 тип</a></li>
                  <li><a href="#">2 тип</a></li>
                  <li><a href="#">3 тип</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="header__phone-menu">
        <div class="header-phone-menu__content">
          <ul class="header-phone-menu__menu">
            <li>
              <a href="#">Продукция</a>
              <div class="header-phone-menu__sub-menu">
                <ul class="header-phone-menu-sub-menu__content">
                  <li>
                    <a href="#" class="phone-next">Противопожарные окна</a>
                  </li>

                  <li>
                    <a href="#" class="phone-next">Противопожарные окна</a>
                  </li>
                </ul>
              </div>
            </li>

            <li>
              <a href="#">Продукция</a>
              <div class="header-phone-menu__sub-menu">
                <ul class="header-phone-menu-sub-menu__content">
                  <li>
                    <a href="#">Противопожарные окна</a>
                  </li>

                  <li>
                    <a href="#">Противопожарные окна</a>
                  </li>
                </ul>
              </div>
            </li>

            <li>
              <a href="#">Продукция</a>
              <div class="header-phone-menu__sub-menu">
                <ul class="header-phone-menu-sub-menu__content">
                  <li>
                    <a href="#">Противопожарные окна</a>
                  </li>

                  <li>
                    <a href="#">Противопожарные окна</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="header__phone-next">
        <div class="header-phone-next__item">
          <div class="header-phone-next__header">
            <button class="header-phone-next__close">
            </button>

            <p class="header-phone-next__name">
              Противопожарные окна
            </p>
          </div>

          <div class="header-phone-next__content">
            <div class="header-phone-next__element">
              <p class="header-phone-next__title">
                По огнестойкости
              </p>

              <ul class="header-phone-next__list">
                <li><a href="#">E 90</a></li>
                <li><a href="#">E 15</a></li>
                <li><a href="#">E 30</a></li>
                <li><a href="#">E 45</a></li>
                <li><a href="#">E 60</a></li>
              </ul>
            </div>

            <div class="header-phone-next__element">
              <p class="header-phone-next__title">
                По типу заполнения
              </p>

              <ul class="header-phone-next__list">
                <li><a href="#">1 тип</a></li>
                <li><a href="#">2 тип</a></li>
                <li><a href="#">3 тип</a></li>
              </ul>
            </div>

            <div class="header-phone-next__element">
              <p class="header-phone-next__title">
                По материалу
              </p>

              <ul class="header-phone-next__list">
                <li><a href="#">Алюминиевый профиль</a></li>
                <li><a href="#">Профиль из нержавеющей стали</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="header-phone-next__item">
          <div class="header-phone-next__header">
            <button class="header-phone-next__close">
            </button>

            <p class="header-phone-next__name">
              Противопожарные окна 1
            </p>
          </div>

          <div class="header-phone-next__content">
            <div class="header-phone-next__element">
              <p class="header-phone-next__title">
                По огнестойкости
              </p>

              <ul class="header-phone-next__list">
                <li><a href="#">E 90</a></li>
                <li><a href="#">E 15</a></li>
                <li><a href="#">E 30</a></li>
                <li><a href="#">E 45</a></li>
                <li><a href="#">E 60</a></li>
              </ul>
            </div>

            <div class="header-phone-next__element">
              <p class="header-phone-next__title">
                По типу заполнения
              </p>

              <ul class="header-phone-next__list">
                <li><a href="#">1 тип</a></li>
                <li><a href="#">2 тип</a></li>
                <li><a href="#">3 тип</a></li>
              </ul>
            </div>

            <div class="header-phone-next__element">
              <p class="header-phone-next__title">
                По материалу
              </p>

              <ul class="header-phone-next__list">
                <li><a href="#">Алюминиевый профиль</a></li>
                <li><a href="#">Профиль из нержавеющей стали</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>