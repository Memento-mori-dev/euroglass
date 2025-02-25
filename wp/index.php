<? get_header();?>

  <section class="banner">
    <img src="<?= get_template_directory_uri();?>/assets/img/page/index/banner.png" alt="" class="banner__img">
    <div class="wrapper">
      <div class="banner__content">
        <p class="banner__title">
          <?=get_field('title', 266);?>
        </p>
        
        <p class="banner__text">
          <?=get_field('text', 266);?>
        </p>

        <a href="<?=get_field('link', 266);?>" class="banner__link">
          Читать полностью
        </a>
      </div>
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

  <?=get_template_part('/php-content/index/end-product');?>

  <?=get_template_part('/php-content/main/years');?>

  <div class="block">
    <?=get_template_part('/php-content/main/certificates');?>
  </div>

  
  <?=get_template_part('/php-content/main/map');?>

<? get_footer(); ?>