<? 
/* 
    Template Name: products
*/
get_header();
?>

<? 
// параметры type, fire, material, filling (виды, огонь, материал, заполнение)

// arr страницы все остальные под типы

$id = get_the_ID();

$query = explode(",", get_field('sorting_id', $id));

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

$idPageCatalog = get_field('page_id', $id); // id шаблона

$whyArr = get_field('why_all', $idPageCatalog);


if(gettype($whyArr) != 'boolean'){
  $whyArr = array_chunk($whyArr, ceil(count($whyArr) /2));
}
?>
    <div class="block">
    <p class="section-title"><?=get_the_title($idPageCatalog);?></p>

      <p class="text">
        <?=get_the_content( null, false,$idPageCatalog);?>
      </p>

      <? if (get_field('card', $idPageCatalog)):?>
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
      <?endif;?>
    </div>
    
    <? if (count($myposts) > 0):?> 
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
    <?endif;?>
    
    <? if(get_field('short_code', $idPageCatalog)):?>
      <div class="block">
        <?=do_shortcode(get_field('short_code', $idPageCatalog));?>
      </div>
    <?endif;?>

    <? if (get_field('about', $idPageCatalog)['description']):?>
    <div class="block">
      <p class="section-title">О продукте</p>
          <?
            $about = get_field('about', $idPageCatalog);
          ?>
      <? if ($about['description']):?>
      <p class="text text_w-880">
        <?=$about['description'];?>
      </p>
      <?endif;?>
      
      <? if ($about['images']['url']):?>
      <div class="description">
        <img src="<?=$about['images']['url'];?>" alt="" class="description__img">

        <div class="description__content">
          <?=$about['text'];?>
        </div>
      </div>
      <?endif;?>

      <div class="description__certificates">
        <?=get_template_part('/php-content/main/certificates', null, $arrCategory);?>
      </div>
    </div>
    <?endif;?>

    <div class="block">
      <?=get_template_part('/php-content/catalog/form');?>
    </div>

    <? if (gettype($whyArr) != 'boolean'):?>
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
    <?endif;?>

    <? if (get_field('tests', $idPageCatalog)):?>
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
    <?endif;?>

<?=get_template_part('/php-content/main/years');?>

<?=get_template_part('/php-content/main/map');?>

<? get_footer();?>