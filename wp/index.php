<? get_header();?>

  <section class="banner">
    <div class="wrapper">
      <div class="banner__content">
        <p class="banner__title">
          Lorem ipsum dolor sit amet consectetur
        </p>
        
        <p class="banner__text">
          Lorem ipsum dolor sit amet consectetur. Aliquam amet posuere id volutpat. Lectus ut consectetur venenatis porta habitant ultrices cras habitant. Velit eget orci varius ut quisque nisl praesent maecenas facilisis. Sed amet id cursus cras mauris commodo dictumst diam libero. 
          Elementum in scelerisque tincidunt aliquam vitae malesuada purus augue convallis. Massa ultrices elementum tristique volutpat viverra elementum ut sed. Malesuada posuere nulla urna at ipsum maecenas ante.
        </p>

        <a href="#" class="banner__link">
          Читать полностью
        </a>
      </div>

      <img src="<?= get_template_directory_uri();?>/assets/img/page/index/banner.png" alt="" class="banner__img">
    </div>
  </section>

  <div class="block">
    <div class="block__header">
      <p class="section-title">Наша продукция</p>
    </div>
    
    <div class="block__first">
      <section class="our-products">
        <a href="#" class="our-products__item" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/page/index/our-products.png);">
          <p class="our-products__title">Противопожарные окна</p>
          <p class="our-products__text">Lorem ipsum dolor sit amet consectetur. Velit elit vestibulum faucibus vitae.</p>
        </a>

        <a href="#"  class="our-products__item" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/page/index/our-products.png);">
          <p class="our-products__title">Противопожарные окна</p>
          <p class="our-products__text">Lorem ipsum dolor sit amet consectetur. Velit elit vestibulum faucibus vitae.</p>
        </a>

        <a href="#"  class="our-products__item" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/page/index/our-products.png);">
          <p class="our-products__title">Противопожарные окна</p>
          <p class="our-products__text">Lorem ipsum dolor sit amet consectetur. Velit elit vestibulum faucibus vitae.</p>
        </a>

        <a href="#"  class="our-products__item" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/page/index/our-products.png);">
          <p class="our-products__title">Противопожарные окна</p>
          <p class="our-products__text">Lorem ipsum dolor sit amet consectetur. Velit elit vestibulum faucibus vitae.</p>
        </a>

        <a href="#"  class="our-products__item" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/page/index/our-products.png);">
          <p class="our-products__title">Противопожарные окна</p>
          <p class="our-products__text">Lorem ipsum dolor sit amet consectetur. Velit elit vestibulum faucibus vitae.</p>
        </a>

        <a href="#"  class="our-products__item" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/page/index/our-products.png);">
          <p class="our-products__title">Противопожарные окна</p>
          <p class="our-products__text">Lorem ipsum dolor sit amet consectetur. Velit elit vestibulum faucibus vitae.</p>
        </a>
      </section>
    </div>
  </div>

  <div class="block">
    <div class="block__header completed-works__header">
      <p class="section-title">Произодство</p>
    </div>

    <?=get_template_part('/php-content/index/productions');?>

  </div>

  <div class="block">
    <div class="block__header completed-works__header">
      <p class="section-title">Примеры выполненных работ</p>

      <a href="#" class="btn btn__transparent completed-works__btn-pc">Все работы</a>
    </div>

    <section class="completed-works">
        <div class="swiper-works swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="completed-works__img" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/page/index/completed-works.png);">
                <p>Здание системы организации воздушного движения аэропорта Кольцово</p>
              </div>
            </div> 
            
            <div class="swiper-slide">
              <div class="completed-works__img" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/page/index/completed-works.png);">
                <p>Здание системы организации воздушного движения аэропорта Кольцово</p>
              </div>
            </div> 
            
            <div class="swiper-slide">
              <div class="completed-works__img" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/page/index/completed-works.png);">
                <p>Здание системы организации воздушного движения аэропорта Кольцово</p>
              </div>
            </div> 

            <div class="swiper-slide">
              <div class="completed-works__img" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/page/index/completed-works.png);">
                <p>Здание системы организации воздушного движения аэропорта Кольцово</p>
              </div>
            </div> 

            <div class="swiper-slide">
              <div class="completed-works__img" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/page/index/completed-works.png);">
                <p>Здание системы организации воздушного движения аэропорта Кольцово</p>
              </div>
            </div> 
          </div>

          <div class="swiper-pagination"></div>

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
    </section>

    <div class="completed-works__btn-ph">
      <a href="#" class="btn btn__transparent">Все работы</a>
    </div>
  </div>

  <section class="years">
    <div class="wrapper">
      <p class="years__sub-title">Мы в цифрах</p>
      <p class="years__title section-title">16 лет на рынке остекления</p>

      <div class="years__content">
        <div class="years__item">
          <div class="years__img">
            <img src="<?= get_template_directory_uri();?>/assets/img/page/index/years-1.svg" alt="">
          </div>

          <p class="years__number">150+</p>
          <p class="years__text">сотрудников</p>
        </div>

        <div class="years__item">
          <div class="years__img">
            <img src="<?= get_template_directory_uri();?>/assets/img/page/index/years-2.svg" alt="">
          </div>

          <p class="years__number">25 000</p>
          <p class="years__text">изделий сделано</p>
        </div>

        <div class="years__item">
          <div class="years__img">
            <img src="<?= get_template_directory_uri();?>/assets/img/page/index/years-3.svg" alt="">
          </div>

          <p class="years__number">15 000 м2</p>
          <p class="years__text">производственных площадей</p>
        </div>
      </div>
    </div>
  </section>

  <div class="block">
    
    <?=get_template_part('/php-content/main/certificates');?>

  </div>

  
  <?=get_template_part('/php-content/main/map');?>

<? get_footer(); ?>