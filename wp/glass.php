<? 
/* 
    Template Name: glass
*/
get_header();
?>

<?
$allHeading = getHeadings(array(17));

$allTags = $allHeading[0];
$allTagsId = array();
$allTagsName = array();

foreach ($allTags as $key => $value) {
    array_push($allTagsId, $value->term_id);
    array_push($allTagsName, $value->description);
}

if(get_field('why_all', $idPost)){
  $whyArr = get_field('why_all', $idPost);
  $whyArr = array_chunk($whyArr, ceil(count($whyArr) /2));
}

$idPost = get_the_ID();
?>
    <div class="block">
        <p class="section-title"><?=the_title();?></p>

        <?if(get_field('start_text', $idPost)):?>
          <p class="text">
            <?=get_field('start_text', $idPost);?>    
          </p>
        <?endif;?>

        <?if(get_field('card', $idPost)):?>
          <div class="glass-card">
            <? foreach (get_field('card', $idPost) as $key => $value):?>
              <div class="glass-card__item">
                  <div class="glass-card__img">
                      <?=$value['svg'];?>
                  </div>

                  <div class="glass-card__content">
                      <p class="glass-card__title"><?=$value['title'];?></p>

                      <p class="glass-card__text"><?=$value['text'];?></p>
                  </div>
              </div>
            <? endforeach;?>
          </div>
        <?endif;?>
    </div>

    <div class="block">
        <div class="tag tag-swap">
            <button class="tag__item active" data-teg="">
                Все
            </button>

            <? foreach ($allTagsId as $key => $value):?>
                <button class="tag__item" data-teg="<?=$value?>">
                    <?=$allTagsName[$key];?>
                </button>
            <? endforeach;?>
        </div>

        <div class="glass-catalog">
            <? foreach ($allTagsId as $key => $value):?>
                <?
                    $myposts = new WP_Query([
                        'cat' => -29,
                        'category_name' => 'types',
                        'category__and' => $value,
                        'post_status' => 'publish',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                    ]);
                    
                    $myposts = $myposts->posts;
                ?>
                <? foreach ($myposts as $post):?>
                    <?
                        setup_postdata( $post );
                        
                        $id = $post->ID;
                        $images = get_field('images', $id);
                        $imagesUrl = $images['url'];

                        ?>
                        <a href="<?=the_permalink();?>" class="glass-catalog__item tag-swap__item" data-teg="<?=$value?>">
                            <img src="<?=$imagesUrl;?>" alt="" class="glass-catalog__img">

                            <p class="glass-catalog__title"><?=the_title();?></p>
                            <p class="glass-catalog__text"><?=get_field('description_card', $id);?></p>

                            <div class="glass-catalog__price">
                                <p class="glass-catalog-price__description">Цена за м <sup>2</sup></p>
                                <p class="glass-catalog-price__value"><?=get_field('price', $id);?></p>
                            </div>
                        </a>
                <? endforeach;?>
            <? endforeach;?>
        </div>
    </div>
    
    <?if(get_field('why', $idPost)):?>
      <div class="block">
          <p class="section-title">Почему наше стекло лучше?</p>

          <table class="glass-why">
              <thead>
                  <tr>
                      <td>

                      </td>

                      <td>
                          EUROGLASS
                      </td>

                      <td>
                          Другие бренды
                      </td>
                  </tr>
              </thead>
              <tbody>
                <? foreach (get_field('why', $idPost) as $key => $value):?>
                  <tr>
                      <td><?=$value['title'];?></td>
                      <td><?=$value['euroglass'];?></td>
                      <td><?=$value['other'];?></td>
                  </tr>
                <? endforeach;?>
              </tbody>
          </table>

          <div class="glass-why__phone" style="background-image: url(<?=get_template_directory_uri();?>/assets/img/page/glass/glass-why.png);">
              <a href="#" class="glass-why-phone__link"></a>
          </div>
      </div>
    <?endif;?>

    <?if(get_field('about_text', $idPost)):?>
      <div class="block">
          <p class="section-title">О продукте</p>

          <p class="text text_w-880">
            <?=get_field('about_text', $idPost);?>
          </p>

          <div class="glass-product">
              <p class="glass-product__title">Стекло используется в нашей продукции</p>

              <div class="glass-product__content">
                <? foreach (get_field('our_products', $idPost) as $key => $value):?>
                    <div class="glass-product__item" style="background-image: url(<?=$value['images']['url'];?>);">
                      <?=$value['title'];?>
                    </div>
                <? endforeach;?>
              </div>
          </div>
      </div>
    <?endif;?>

    <div class="block">
        <?=get_template_part('/php-content/main/certificates');?>
    </div>

    <div class="block">
        <?=get_template_part('/php-content/catalog/form-card');?>
    </div>

    <?if($whyArr):?>
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

    <?if(get_field('tests', $idPost)):?>
      <div class="block">
        <p class="section-title">Испытания стекла</p>

        <div class="tests">
          <? foreach (get_field('tests', $idPost) as $key => $value):?>
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