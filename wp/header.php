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

$typesArr = getHeadings(array(17))[0];
?>

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
        <a href="/" class="header__logo">
          <img src="<?= get_template_directory_uri();?>/assets/img/page/main/logo.svg" alt="">
        </a>

        <ul class="header__menu">
          <li><a href="#" class="menu-pc">Продукция</a></li>

          <? foreach ($mainMenuArr as $key => $value):?>
            <li><a href="<?=$value->url;?>"><?=$value->title;?></a></li>
          <? endforeach;?>
          
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
            <? foreach ($typesArr as $key => $value):?>
              <li class="<? if($key == 0){echo 'active';}?>"> <a href="#"><?=$value->name;?></a></li>
            <?endforeach;?>
          </ul>

          <div class="header-sub-menu__detail">
            <? foreach ($typesArr as $key => $value):?>
              <?
                $idType = $value->term_id;
              ?>

              <div class="header-sub-menu-detail__item detail-menu <? if($key == 0){echo 'active';}?>">
                <? foreach ($allPar as $key => $value):?>
                  <?
                    $id = $value[0];
                    $name = $value[1];
                    ?>
                    <? if ($id == '16'): ?>
                      <div class="header-sub-menu__item">
                        <p class="header-sub-menu__title"><?=$name;?></p>
          
                        <ul class="header-sub-menu-item__list">
                        
                          <? foreach (getHeadings(array($id))[0] as $key => $value):?>
                            <?
                              $id = $value->term_id;
                              $name = $value->name;

                              $myposts = new WP_Query([
                                  'category_name' => 'сatalog',
                                  'category__and' => array($id,$idType),
                                  'post_status' => 'publish',
                                  'order' => 'ASC',
                                  'posts_per_page' => -1,
                              ]);
                              $myposts = $myposts->posts;

                              $idPost = $myposts[0]->ID;
                              ?>

                              <? if($idPost):?>
                                <li><a href="<?=get_permalink($idPost);?>"><?=$name;?></a></li>
                              <?endif;?>
                          <?endforeach;?>
                        </ul>
                      </div>
                    <? else: ?>
                      <div class="header-sub-menu__item">
                        <p class="header-sub-menu__title"><?=$name;?></p>
          
                        <ul class="header-sub-menu-item__list">
                        
                          <? foreach (getHeadings(array($id))[0] as $key => $value):?>
                            <?
                              $id = $value->term_id;
                              $name = $value->name;
                              ?>

                              <li><a href="/catalog/?type=<?=$idType;?>&add=<?=$id;?>"><?=$name;?></a></li>
                          <?endforeach;?>
                        </ul>
                      </div>
                    <? endif; ?>
                    
                <?endforeach;?>
              </div>

            <?endforeach;?>
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
                  <? foreach ($typesArr as $key => $value):?>
                    <li>
                      <a href="#" class="phone-next"><?=$value->name;?></a>
                    </li>
                  <? endforeach;?>
                </ul>
              </div>
            </li>
            
            <? foreach ($mainMenuArr as $key => $value):?>
              <li><a href="<?=$value->url;?>"><?=$value->title;?></a></li>
            <? endforeach;?>
          </ul> 
        </div>
      </div>

      <div class="header__phone-next">
        <? foreach ($typesArr as $key => $value):?>
          <?
              $idType = $value->term_id;
            ?>
          <div class="header-phone-next__item">
            <div class="header-phone-next__header">
              <button class="header-phone-next__close">
              </button>

              <p class="header-phone-next__name">
                <?=$value->name;?>
              </p>
            </div>

            <div class="header-phone-next__content">
                <? foreach ($allPar as $key => $value):?>
                  <?
                    $id = $value[0];
                    $name = $value[1];
                    ?>
                    <? if ($id == '16'): ?>
                      <div class="header-phone-next__element">
                        <p class="header-phone-next__title"><?=$name;?></p>
          
                        <ul class="header-phone-next__list">
                        
                          <? foreach (getHeadings(array($id))[0] as $key => $value):?>
                            <?
                              $id = $value->term_id;
                              $name = $value->name;

                              $myposts = new WP_Query([
                                  'category_name' => 'сatalog',
                                  'category__and' => array($id,$idType),
                                  'post_status' => 'publish',
                                  'order' => 'ASC',
                                  'posts_per_page' => -1,
                              ]);
                              $myposts = $myposts->posts;

                              $idPost = $myposts[0]->ID;
                              ?>

                              <? if($idPost):?>
                                <li><a href="<?=get_permalink($idPost);?>"><?=$name;?></a></li>
                              <?endif;?>
                          <?endforeach;?>
                        </ul>
                      </div>
                    <? else: ?>
                      <div class="header-phone-next__element">
                        <p class="header-phone-next__title"><?=$name;?></p>
          
                        <ul class="header-phone-next__list">
                        
                          <? foreach (getHeadings(array($id))[0] as $key => $value):?>
                            <?
                              $id = $value->term_id;
                              $name = $value->name;
                              ?>

                              <li><a href="/catalog/?type=<?=$idType;?>&add=<?=$id;?>"><?=$name;?></a></li>
                          <?endforeach;?>
                        </ul>
                      </div>
                    <? endif; ?>
                    
                <?endforeach;?>
            </div>
          </div>
        <? endforeach;?>
      </div>
    </div>
  </header>

  <main>