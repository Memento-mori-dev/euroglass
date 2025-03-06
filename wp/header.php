<?
$mainMenuArr = wp_get_nav_menu_items('header-menu');

// для меню
include 'php-content/my_posts.php';
$arr = getHeadings(array(13))[0];

$allPar = array();

foreach ($arr as $key => $value) {
  if ($value->slug != 'types') {
    array_push($allPar, array($value->term_id, $value->name));
  }
}

// $typesArr = getHeadings(array(17))[0];
?>

<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <!-- <link rel="icon" type="image/svg+xml" href="/vite.svg" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <? wp_head(); ?>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
</head>

<body>
  <header class="header">
    <div class="header__pre">
      <div class="wrapper">
        <a href="tel:<?= preg_replace('/[^0-9]/', '', get_field('phone', 39)); ?>" class="header-pre__phone">+<?= get_field('phone', 39); ?></a>

        <a href="malto:<?= get_field('email', 39); ?>" class="header-pre__mail"><?= get_field('email', 39); ?></a>
      </div>
    </div>

    <div class="wrapper">
      <div class="header__wrapper">
        <a href="/" class="header__logo">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/page/main/logo.svg" alt="">
        </a>

        <ul class="header__menu">
          <li><a href="#" class="menu-pc">Продукция</a></li>

          <? foreach ($mainMenuArr as $key => $value): ?>
            <li><a href="<?= $value->url; ?>"><?= $value->title; ?></a></li>
          <? endforeach; ?>

        </ul>

        <div class="header__additionally">
          <div class="header__contact">
            <a href="tel:<?= preg_replace('/[^0-9]/', '', get_field('phone', 39)); ?>" class="header__phone">+<?= get_field('phone', 39); ?></a>

            <a href="malto:<?= get_field('email', 39); ?>" class="header__mail"><?= get_field('email', 39); ?></a>
          </div>

          <div class="header__buttons">
            <button class="btn btn__orange header__btn-pc open-modal" data-modal="call">Заявка на расчет</button>

            <button class="btn btn__transparent header__btn-ph open-modal" data-modal="call">Заявка на расчет</button>

            <button class="header__btn-menu header__btn-ph">

            </button>
          </div>
        </div>
      </div>

      <div class="header__sub-menu">
        <div class="header-sub-menu__content sub-menu" style="height: 362px;">
            <?
              $menuArray = get_posts([
                'post_type' => 'menu-catalog',
                'order' => 'ASC',
                'post_status' => 'publish',
                'posts_per_page' => -1,
              ]);
            ?>

          <ul class="header-sub-menu__list">
            <? foreach ($menuArray as $key => $value): ?>
              <?
                $idMenu = $value->ID;
                ?>

              <li class="<? if ($key == 0) {
                            echo 'active';
                          } ?>"> <a href="<?=get_field('link', $idMenu);?>"><?=$value->post_title;?></a></li>
            <? endforeach; ?>
          </ul>
          
          <div class="header-sub-menu__detail">
          <? foreach ($menuArray as $key => $value): ?>
            <div class="header-sub-menu-detail__item detail-menu <? if ($key == 0) { echo 'active'; } ?>">
              <? foreach (get_field('menu', $value->ID) as $key => $value): ?>
                <div class="header-sub-menu__item">
                  <p class="header-sub-menu__title"><?=$value['imya'];?></p>
                  <ul class="header-sub-menu-item__list">
                    <? foreach ($value['podkatalog'] as $key => $value): ?>
                    <li><a href="<?=$value['link'];?>"><?=$value['imya'];?></a></li>
                    <? endforeach; ?>
                  </ul>
                </div>
              <? endforeach; ?>
            </div>
          <? endforeach; ?>
          </div>
          
      </div>

      <div class="header__phone-menu">
        <div class="header-phone-menu__content">
          <ul class="header-phone-menu__menu">
            <li>
              <a href="#">Продукция</a>
              <div class="header-phone-menu__sub-menu">
                <ul class="header-phone-menu-sub-menu__content">
                  <? foreach ($typesArr as $key => $value): ?>
                    <li>
                      <a href="/catalog/?type=<?= $value->term_id;?>" class=""><?= $value->name; ?></a>
                    </li>
                  <? endforeach; ?>
                </ul>
              </div>
            </li>

            <? foreach ($mainMenuArr as $key => $value): ?>
              <li><a href="<?= $value->url; ?>"><?= $value->title; ?></a></li>
            <? endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main>