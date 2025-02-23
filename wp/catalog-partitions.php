<? 
// параметры type, fire, material, filling (виды, огонь, материал, заполнение)

// arr страницы все остальные под типы

$urlDivided = parse_url(((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
parse_str($urlDivided['query'], $query);

// получение всех подкатегорий
$arrCategory = array();
foreach ($query as $key => $value) {
    array_push($arrCategory, $value);
}

// сatalog
$myposts = new WP_Query([
    'category_name' => 'сatalog',
    'category__and' => $arrCategory,
    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => -1,
]);
$myposts = $myposts->posts;
?>

    <div class="block">
      <p class="section-title">Противопожарные перегоротки</p>

      <p class="text">
        Мы создаём окна, которые обеспечивают защиту от огня. Они могут быть разных размеров и форм. В соответствии с требованиями Федерального закона №123, такие окна могут быть глухими или иметь специальные люки, которые автоматически закрываются при пожаре. По желанию заказчика мы можем изготовить окна с открывающимися створками, фрамугами или форточками.
      </p>

      <div class="banner-prod">
        <div class="banner-prod__content">
          <p class="banner-prod-content__title">Противопожарные окна 1 типа</p>
          <p class="banner-prod-content__text">Lorem ipsum dolor sit amet consectetur. Orci integer aliquet porttitor magna. In morbi id arcu sit proin orci risus. Nisl turpis egestas tempus faucibus euismod duis odio. Tempus auctor dui ipsum vel.</p>

          <div class="banner-prod-content__item">
            <p class="banner-prod-content-item__title">Огнестойкость:</p>

            <ul class="banner-prod-content-item__list">
              <li>E 60</li>
              <li>Параметры IW — по запросу.</li>
            </ul>
          </div>
          <div class="banner-prod-content__item">
            <p class="banner-prod-content-item__title">Материал рамной конструкции:</p>
            <ul class="banner-prod-content-item__list">
              <li>Алюминиевый профиль с усиливающими охлаждающими вставками</li>
              <li>Профиль из углеродистой или нержавеющей стали.</li>
            </ul>
          </div>
        </div>

        <img src="<?= get_template_directory_uri();?>/assets/img/page/products/products.png" alt="" class="banner-prod__img">
      </div>

      <div class="banner-prod banner-prod_reverse">
        <div class="banner-prod__content">
          <p class="banner-prod-content__title">Противопожарные окна 1 типа</p>
          <p class="banner-prod-content__text">Lorem ipsum dolor sit amet consectetur. Orci integer aliquet porttitor magna. In morbi id arcu sit proin orci risus. Nisl turpis egestas tempus faucibus euismod duis odio. Tempus auctor dui ipsum vel.</p>

          <div class="banner-prod-content__item">
            <p class="banner-prod-content-item__title">Огнестойкость:</p>

            <ul class="banner-prod-content-item__list">
              <li>E 60</li>
              <li>Параметры IW — по запросу.</li>
            </ul>
          </div>
          <div class="banner-prod-content__item">
            <p class="banner-prod-content-item__title">Материал рамной конструкции:</p>
            <ul class="banner-prod-content-item__list">
              <li>Алюминиевый профиль с усиливающими охлаждающими вставками</li>
              <li>Профиль из углеродистой или нержавеющей стали.</li>
            </ul>
          </div>
        </div>

        <img src="<?= get_template_directory_uri();?>/assets/img/page/products/products.png" alt="" class="banner-prod__img">
      </div>
    </div>

    <div class="block">
        <? foreach($myposts as $post):?>
            <?
                setup_postdata( $post );

                $id = $post->ID;
                $images = get_field('images', $id);
                $imagesUrl = $images['url'];
                ?>
            <div class="products">
                <img src="<?=$imagesUrl;?>" alt="" class="products__img">

                <div class="products__content">
                    <a href="<?=the_permalink();?>" class="products-content__title"><?=the_title();?></a>
                    <p class="products-content__text"><?=get_field('description_card', $id);?></p>
                    
                    <div class="products-content__description">
                        <?=get_field('characteristics', $id);?>
                    </div>

                    <div class="products-content__price">
                        <p class="products-content-price__name">Цена за м <sup>2</sup></p>

                        <p class="products-content-price__value"><?=get_field('price', $id);?></p>
                    </div>
                </div>
            </div>
            <?wp_reset_postdata();?>
        <?endforeach;?>

        <? if (!$myposts):?>
          <p style="text-align: center;" class="section-title">Товар не найден</p>
        <? endif;?>
    </div>

    <div class="block">
      <?=get_template_part('/php-content/catalog/calculation');?>
    </div>

    <div class="block">
      <p class="section-title">О продукте</p>

      <p class="text text_w-880">
        Lorem ipsum dolor sit amet consectetur. Penatibus bibendum porttitor viverra iaculis at nullam consectetur sed. Sit odio cum velit aliquet a sed arcu. Fermentum facilisi bibendum pharetra cursus enim ornare sit vitae sapien. Rhoncus dolor id magna tortor. Cursus interdum enim aliquet et sed neque leo vulputate. Imperdiet id ut imperdiet ac. 
        Nibh orci porttitor ut sed est urna adipiscing at. Feugiat fringilla porta euismod facilisis fermentum dui mauris. Egestas integer commodo tincidunt dui duis ac consectetur fusce quis. Accumsan velit arcu viverra lectus eget lacus facilisis donec.
      </p>

      <div class="description">
        <img src="<?= get_template_directory_uri();?>/assets/img/page/products/description.png" alt="" class="description__img">

        <div class="description__content">
          <div class="description__item">
            <p>Lorem</p>
            <p>Lorem ipsum</p>
          </div>

          <div class="description__item">
            <p>Lorem ipsum</p>
            <p>Lorem ipsum dolor sit amet consectetur</p>
          </div>

          <div class="description__item">
            <p>Lorem</p>
            <p>Lorem ipsum</p>
          </div>

          <div class="description__item">
            <p>Lorem ipsum</p>
            <p>Lorem ipsum dolor sit amet consectetur</p>
          </div>

          <div class="description__item">
            <p>Lorem</p>
            <p>Lorem ipsum</p>
          </div>

          <div class="description__item">
            <p>Lorem ipsum</p>
            <p>Lorem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </div>

      <div class="description__certificates">
        <?=get_template_part('/php-content/main/certificates');?>
      </div>
    </div>

    <div class="block">
      <?=get_template_part('/php-content/catalog/form');?>
    </div>

    <div class="block">
      <p class="section-title">Часто задаваемые вопросы</p>

      <div class="questions">
        <div class="questions__element">
          <div class="questions__item">
            <p class="questions__title">Lorem ipsum dolor sit amet consectetur.</p>

            <div class="questions__content">
              <p class="questions__text">
                Lorem ipsum dolor sit amet consectetur. Sem in vitae habitant massa integer morbi tristique ac imperdiet. Molestie mattis quam a quis arcu suscipit pharetra. Faucibus ullamcorper a ut proin erat amet consectetur velit. Tempus mauris nunc nulla morbi.
              </p>
            </div>
          </div>

          <div class="questions__item">
            <p class="questions__title">Lorem ipsum dolor sit amet consectetur.</p>

            <div class="questions__content">
              <p class="questions__text">
                Lorem ipsum dolor sit amet consectetur. Sem in vitae habitant massa integer morbi tristique ac imperdiet. Molestie mattis quam a quis arcu suscipit pharetra. Faucibus ullamcorper a ut proin erat amet consectetur velit. Tempus mauris nunc nulla morbi.
              </p>
            </div>
          </div>
        </div>

        <div class="questions__element">
          <div class="questions__item">
            <p class="questions__title">Lorem ipsum dolor sit amet consectetur.</p>

            <div class="questions__content">
              <p class="questions__text">
                Lorem ipsum dolor sit amet consectetur. Sem in vitae habitant massa integer morbi tristique ac imperdiet. Molestie mattis quam a quis arcu suscipit pharetra. Faucibus ullamcorper a ut proin erat amet consectetur velit. Tempus mauris nunc nulla morbi.
              </p>
            </div>
          </div>

          <div class="questions__item">
            <p class="questions__title">Lorem ipsum dolor sit amet consectetur.</p>

            <div class="questions__content">
              <p class="questions__text">
                Lorem ipsum dolor sit amet consectetur. Sem in vitae habitant massa integer morbi tristique ac imperdiet. Molestie mattis quam a quis arcu suscipit pharetra. Faucibus ullamcorper a ut proin erat amet consectetur velit. Tempus mauris nunc nulla morbi.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block">
      <p class="section-title">Испытания стекла</p>

      <div class="tests">
        <div class="tests__item">
          <div class="tests-item__video">
            <video src="<?= get_template_directory_uri();?>/assets/img/page/products/video.mp4" type="video/mp4"></video>
          </div>

          <p class="tests__name">
            Испытание противопожарного окна Е60
          </p>
        </div>

        <div class="tests__item">
          <div class="tests-item__video">
            <video src="<?= get_template_directory_uri();?>/assets/img/page/products/video.mp4" type="video/mp4"></video>
          </div>

          <p class="tests__name">
            Испытание противопожарного окна Е60
          </p>
        </div>
      </div>
    </div>