<? get_header();?>

  <section class="banner">
	  
	   
    <?php if( get_field('kartinka_bannera', 266) ): ?>
    <img src="<?php the_field('kartinka_bannera', 266); ?>"  alt="" class="banner__img" />
<?php endif; ?>
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
        <? foreach (get_field('our', 266) as $key => $value): ?>
          <a href="<?=$value['link'];?>" class="our-products__item" style="background-image: url(<?=$value['images']['url'];?>);">
            <p class="our-products__title"><?=$value['title'];?></p>
            <p class="our-products__text"><?=$value['description'];?></p>
          </a>
        <? endforeach;?>       
      </section>
    </div>
  </div>

  <div class="block">
    <div class="block__header completed-works__header">
      <p class="section-title">Производство</p>
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