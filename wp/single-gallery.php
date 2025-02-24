<? 

$post = get_queried_object();

setup_postdata( $post );

$id = $post->ID;
$images = get_field('images', $id);
$imagesUrl = $images['url'];

$gallery = get_post_meta($id, 'images_prop');


$my_posts = get_posts([
  'category_name' => 'gallery',
  'posts_per_page' => -1,
  'order' => 'ASC',
]);

$preIdPost;
$nextIdPost;

foreach ($my_posts as $key => $value) {
  if ($value->ID == $id) {
    if ($my_posts[$key - 1]) {
      $preIdPost = $my_posts[$key - 1]->ID;
    }

    if ($my_posts[$key + 1]) {
      $nextIdPost = $my_posts[$key + 1]->ID;
    }
  }
}
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
            <?if ($preIdPost):?>
              <a href="<?=get_permalink($preIdPost);?>" class="gallery-banner-footer__back">Предыдущий</a>
            <? endif;?>
            
            <?if ($nextIdPost):?>
              <a href="<?=get_permalink($nextIdPost);?>" class="gallery-banner-footer__next">Следующий объект</a>
            <? endif;?>
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