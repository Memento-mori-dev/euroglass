<div class="block__header certificates__header">
    <p class="section-title">Примеры выполненных работ</p>

    <a href="/certificates/" class="btn btn__transparent certificates__btn-pc">Все работы</a>
</div>

<?
$certificateArray = get_posts([
    'post_type' => 'certificate',
    'post_status' => 'publish',
    'numberposts' => 100,
]);
?>

<section class="certificates">
    <div class="swiper swiper-certificates">
        <div class="swiper-wrapper">
                <? foreach ($certificateArray as $value): ?>
                    <?
                        $id = $value->ID;
                        $images = get_field('images', $id);
                        $imagesUrl = $images['url'];
                        $imagesAlt = $images['alt'];
                    ?>

                    <div class="swiper-slide">
                        <img src="<?=$imagesUrl;?>" alt="<?=$imagesAlt;?>" class="certificates__img">
                    </div>

                <? endforeach;?>
        </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<div class="certificates__btn-tb">
    <a href="/certificates/" class="btn btn__transparent">Все сертификаты</a>
</div>