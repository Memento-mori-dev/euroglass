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

// 

?>

    <div class="block">
        <p class="section-title">Статьи</p>

        <p class="text">
            Lorem ipsum dolor sit amet consectetur. Penatibus bibendum porttitor viverra iaculis at nullam consectetur sed. Sit odio cum velit aliquet a sed arcu. Fermentum facilisi bibendum pharetra cursus enim ornare sit vitae sapien. Rhoncus dolor id magna tortor. Cursus interdum enim aliquet et sed neque leo vulputate. Imperdiet id ut imperdiet ac.
            Nibh orci porttitor ut sed est urna adipiscing at. Feugiat fringilla porta euismod facilisis fermentum dui mauris. Egestas integer commodo tincidunt dui duis ac consectetur fusce quis. Accumsan velit arcu viverra lectus eget lacus facilisis donec.    
        </p>

        <div class="glass-card">
            <div class="glass-card__item">
                <div class="glass-card__img">
                    <img src="<?=get_template_directory_uri();?>/assets/img/page/glass/glass-car-1.svg" alt="">
                </div>

                <div class="glass-card__content">
                    <p class="glass-card__title">Lorem ipsum dolor</p>

                    <p class="glass-card__text">Lorem ipsum dolor sit amet consectetur. Donec pulvinar amet ac eget dictum. Neque s arcu amet gravida eget.</p>
                </div>
            </div>

            <div class="glass-card__item">
                <div class="glass-card__img">
                    <img src="<?=get_template_directory_uri();?>/assets/img/page/glass/glass-car-2.svg" alt="">
                </div>

                <div class="glass-card__content">
                    <p class="glass-card__title">Lorem ipsum dolor</p>

                    <p class="glass-card__text">Lorem ipsum dolor sit amet consectetur. Donec pulvinar amet ac eget dictum. Neque s arcu amet gravida eget.</p>
                </div>
            </div>

            <div class="glass-card__item">
                <div class="glass-card__img">
                    <img src="<?=get_template_directory_uri();?>/assets/img/page/glass/glass-car-3.svg" alt="">
                </div>

                <div class="glass-card__content">
                    <p class="glass-card__title">Lorem ipsum</p>

                    <p class="glass-card__text">Lorem ipsum dolor sit amet consectetur. Donec pulvinar amet ac eget dictum. Neque s arcu amet gravida eget.</p>
                </div>
            </div>
        </div>
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
                <tr>
                    <td>Lorem ipsum dolor</td>
                    <td>Lorem ipsum dolor sit amet consectetur. Nisl vel dignissim tellus sollicitudin ut proin convallis vel rhoncus. Sit non in nulla aliquam eget aenean.</td>
                    <td>Libero sit lacus proin praesent ac nisl est. Fusce diam scelerisque.</td>
                </tr>

                <tr>
                    <td>Penatibus bibendum porttitor viverra iaculis</td>
                    <td>Lorem ipsum dolor sit amet consectetur. Nisl vel dignissim tellus sollicitudin ut proin convallis vel rhoncus. Sit non in nulla aliquam eget aenean. Faucibus elementum in nibh integer feugiat. Libero sit lacus proin praesent ac nisl est. Fusce diam scelerisque.</td>
                    <td>Libero sit lacus proin praesent ac nisl est. Fusce diam scelerisque.</td>
                </tr>
            </tbody>
        </table>

        <div class="glass-why__phone" style="background-image: url(<?=get_template_directory_uri();?>/assets/img/page/glass/glass-why.png);">
            <a href="#" class="glass-why-phone__link"></a>
        </div>
    </div>

    <div class="block">
        <p class="section-title">О продукте</p>

        <p class="text text_w-880">
            Lorem ipsum dolor sit amet consectetur. Penatibus bibendum porttitor viverra iaculis at nullam consectetur sed. Sit odio cum velit aliquet a sed arcu. Fermentum facilisi bibendum pharetra cursus enim ornare sit vitae sapien. Rhoncus dolor id magna tortor. Cursus interdum enim aliquet et sed neque leo vulputate. Imperdiet id ut imperdiet ac.
            Nibh orci porttitor ut sed est urna adipiscing at. Feugiat fringilla porta euismod facilisis fermentum dui mauris. Egestas integer commodo tincidunt dui duis ac consectetur fusce quis. Accumsan velit arcu viverra lectus eget lacus facilisis donec.    
        </p>

        <div class="glass-product">
            <p class="glass-product__title">Стекло используется в нашей продукции</p>

            <div class="glass-product__content">
                <div class="glass-product__item" style="background-image: url(<?=get_template_directory_uri();?>/assets/img/page/index/our-products.png);">
                    Противопожарные окна
                </div>

                <div class="glass-product__item" style="background-image: url(<?=get_template_directory_uri();?>/assets/img/page/index/our-products.png);">
                    Противопожарные окна
                </div>

                <div class="glass-product__item" style="background-image: url(<?=get_template_directory_uri();?>/assets/img/page/index/our-products.png);">
                    Противопожарные окна
                </div>

                <div class="glass-product__item" style="background-image: url(<?=get_template_directory_uri();?>/assets/img/page/index/our-products.png);">
                    Противопожарные окна
                </div>

                <div class="glass-product__item" style="background-image: url(<?=get_template_directory_uri();?>/assets/img/page/index/our-products.png);">
                    Противопожарные окна
                </div>
            </div>
        </div>
    </div>

    <div class="block">
        <?=get_template_part('/php-content/main/certificates');?>
    </div>

    <div class="block">
        <?=get_template_part('/php-content/catalog/form-card');?>
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
            <video src="https://n3.fireclass.pro/wp-content/themes/euroglass/assets/img/page/products/video.mp4" type="video/mp4"></video>
          </div>

          <p class="tests__name">
            Испытание противопожарного окна Е60
          </p>
        </div>

        <div class="tests__item">
          <div class="tests-item__video">
            <video src="https://n3.fireclass.pro/wp-content/themes/euroglass/assets/img/page/products/video.mp4" type="video/mp4"></video>
          </div>

          <p class="tests__name">
            Испытание противопожарного окна Е60
          </p>
        </div>
      </div>
    </div>

    <?=get_template_part('/php-content/main/years');?>

    <?=get_template_part('/php-content/main/map');?>

<? get_footer();?>