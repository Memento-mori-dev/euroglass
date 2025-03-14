<?
  $mainMenuArr = wp_get_nav_menu_items('footer-menu');
  $productsMenuArr = wp_get_nav_menu_items('products-footer'); 
?>

</main>

  <footer class="footer">
    <div class="footer__content">
      <div class="wrapper">
        <div class="footer-content__logo">
          <img src="<?= get_template_directory_uri();?>/assets/img/svg/logo-footer.svg" alt="" class="footer-content-logo__img">

          <button class="btn btn__orange open-modal" data-modal="call">Бесплатная консультация</button>
        </div>

        <div class="footer-content__menu">
          <div class="footer-content-menu__item">
            <a href="#" class="footer-content-menu__title">Продукция</a>
            <ul class="footer-content-menu__list">
              <? foreach ($productsMenuArr as $key => $value):?>
                <li> <a href="<?=$value->url;?>"><?=$value->title;?></a> </li>
              <? endforeach;?>
            </ul>
          </div>

          <div class="footer-content-menu__item">
            <a href="#" class="footer-content-menu__title">О нас</a>
            <ul class="footer-content-menu__list">
              <? foreach ($mainMenuArr as $key => $value):?>
                <li> <a href="<?=$value->url;?>"><?=$value->title;?></a> </li>
              <? endforeach;?>
            </ul>
          </div>
        </div>

        <div class="footer-content__call">
          <a href="#" class="footer-content-menu__title">Контакты</a>

          <a href="tel:<?=preg_replace('/[^0-9]/', '', get_field('phone', 39));?>" class="footer-content-call__phone">+<?=get_field('phone', 39);?></a>
          <p class="footer-content-call__sub-phone">Пн–Пт | с 9:00 до 18:00</p>

          <a href="malto:<?=get_field('email', 39);?>" class="footer-content-call__mail"><?=get_field('email', 39);?></a>
        </div>

        <div class="footer-content__social">
          <?foreach (get_field('social', 39) as $key => $value):?>
            <a href="<?=$value['link'];?>" class="footer-content-social__item">
              <?=$value['svg'];?>
            </a>
          <? endforeach;?>
        </div>
      </div>
    </div>

    <div class="footer__about">
      <div class="wrapper">
        <p>ООО «ЕВРОГЛАСС-ТЕХНО»</p>

        <div class="footer-about__right">
          <p>Политика конфиденциальности</p>
          <p>© 2004-2022 | Все права защищены.</p>
        </div>
      </div>
    </div>

  </footer>
  
  <div class="modal">
        <div class="modal__close">
          <button class="btn btn__orange close-modal">Закрыть</button>
        </div>

        <div class="block">
            <div class="modal__item call">
              <?=get_template_part('/php-content/main/modal-form');?>
            </div>
        </div>
    </div>

    <? wp_footer();?>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
</body>

</html>