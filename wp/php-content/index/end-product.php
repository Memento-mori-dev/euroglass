<?

$myposts = new WP_Query([
    'category_name' => 'gallery',
    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => 20,
]);

$myposts = $myposts->posts;
?>



<div class="block">
    <div class="block__header completed-works__header">
      <p class="section-title">Примеры выполненных работ</p>

      <a href="/gallery/" class="btn btn__transparent completed-works__btn-pc">Все работы</a>
    </div>

    <section class="completed-works">
        <div class="swiper-works swiper">
          <div class="swiper-wrapper">
            <? foreach ($myposts as $key => $post):?>
                <?setup_postdata( $post );
                
                $id = $post->ID;
                $images = get_field('images', $id);
                $imagesUrl = $images['url'];
                ?>
                <div class="swiper-slide">
                    <a href="<?=the_permalink();?>" class="completed-works__img" style="background-image: url(<?=$imagesUrl;?>);">
                        <p><?=the_title();?></p>
                    </a>
                </div> 
            <? endforeach;?>
          </div>

          <div class="swiper-pagination"></div>

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
    </section>

    <div class="completed-works__btn-ph">
      <a href="#" class="btn btn__transparent">Все работы</a>
    </div>
</div>