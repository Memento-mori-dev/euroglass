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
    'cat' => array(-29, -30),
    'category_name' => 'сatalog',
    'category__and' => $arrCategory,
    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => -1,
]);
$myposts = $myposts->posts;

$pageCatalog = new WP_Query([
  'category_name' => 'pages_catalog',
  'category__and' => $arrCategory[0], 
  'post_status' => 'publish',
  'order' => 'ASC',
  'posts_per_page' => -1,
]);

$pagePostCatalog = $pageCatalog->post;
$idPageCatalog = $pagePostCatalog->ID;

$whyArr = get_field('why_all', $idPageCatalog);
$whyArr = array_chunk($whyArr, ceil(count($whyArr) /2));

// echo '<pre>';
// print_r();
// echo '</pre>';
?>

    <div class="block">
      <p class="section-title"><?=$pagePostCatalog->post_title;?></p>

      <p class="text">
        <?=$pagePostCatalog->post_content;?>  
      </p>

      <? foreach(get_field('card', $idPageCatalog) as $key => $value):?>
        <div class="banner-prod <?if(($key + 1) % 2 === 0){echo 'banner-prod_reverse';}?>">
          <div class="banner-prod__content">
            <p class="banner-prod-content__title"><?=$value['title'];?></p>
            <p class="banner-prod-content__text"><?=$value['description'];?></p>

            <?=$value['text'];?>
          </div>

          <img src="<?=$value['images']['url'];?>" alt="" class="banner-prod__img">
        </div>
      <?endforeach;?>
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
    </div>

    <div class="block">
      <?=get_template_part('/php-content/catalog/calculation');?>
    </div>

    <div class="block">
      <p class="section-title">О продукте</p>
          <?
            $about = get_field('about', $idPageCatalog);
          ?>
      <p class="text text_w-880">
        <?=$about['description'];?>
      </p>

      <div class="description">
        <img src="<?=$about['images']['url'];?>" alt="" class="description__img">

        <div class="description__content">
          <?=$about['text'];?>
        </div>
      </div>

      <div class="description__certificates">
        <?=get_template_part('/php-content/main/certificates', null, $arrCategory);?>
      </div>
    </div>

    <div class="block">
      <?=get_template_part('/php-content/catalog/form');?>
    </div>

    <div class="block">
      <p class="section-title">Часто задаваемые вопросы</p>

      <div class="questions">
        <? foreach ($whyArr as $key => $why):?>
          <div class="questions__element">
            <? foreach ($why as $key => $value):?>
              <div class="questions__item">
                <p class="questions__title"><?=$value['title'];?></p>

                <div class="questions__content">
                  <p class="questions__text">
                  <?=$value['text'];?>
                  </p>
                </div>
              </div>
            <? endforeach;?>
          </div>
        <? endforeach;?>
      </div>
    </div>

    <div class="block">
      <p class="section-title">Испытания стекла</p>

      <div class="tests">
        <? foreach (get_field('tests', $idPageCatalog) as $key => $value):?>
          <div class="tests__item">
            <div class="tests-item__video">
              <video src="<?=$value['video']['url'];?>" type="video/mp4"></video>
            </div>

            <p class="tests__name">
              <?=$value['title'];?>
            </p>
          </div>
        <? endforeach;?>
      </div>
    </div>