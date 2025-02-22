<? 

$post = get_queried_object();

setup_postdata( $post );

$id = $post->ID;
$images = get_field('images', $id);
$imagesUrl = $images['url'];

$gallery = get_post_meta($id, 'images_prop');



?>

<div class="block">
      <div class="gallery-banner">
        <img src="<?=$imagesUrl;?>" alt="" class="gallery-banner__img">

        <div class="gallery-banner__content">
          <div class="gallery-banner__header">
            <p class="section-title"><?=the_title();?></p>
            <?=the_content();?>
          </div>

          <div class="gallery-banner__footer">
                <!-- <a href="#" class="gallery-banner-footer__back">Предыдущий</a>

            <a href="#" class="gallery-banner-footer__next">Следующий объект</a> -->
          </div>
        </div>
      </div>

      <div class="gallery-img">
        <? foreach ($gallery as $key => $value):?>
            <?
                $imgUrl = get_post($value)->guid;
                ?>
            <img src="<?=$imgUrl;?>" alt="" class="gallery-img__item">
        <? endforeach;?>
      </div>
</div>