<? 
    $productionArray = get_posts([
        'post_type' => 'productions',
        'numberposts' => 5,
        'post_status' => 'publish',
    ]);
?>

<section class="production">
        <?
            $firstProduction = $productionArray[0]; 
            
            $firstId = $firstProduction->ID;

            $firstImgArray = get_field('images', $firstId);
            $firstImgUrl = $firstImgArray['url'];

            $firstText = $firstProduction->post_content;
        ?>

        <div class="production__big-img" style="background-image: url(<?=$firstImgUrl;?>);">
            <?=$firstText;?>
        </div>

        <div class="swiper-production swiper">
            <div class="swiper-wrapper">

                <? foreach ($productionArray as $key =>$value): ?>
                    <?
                        $postId = $value->ID;

                        $imgArray = get_field('images', $postId);
                        $imgUrl = $imgArray['url'];

                        $text = $value->post_content;
                    ?>

                    <div class="swiper-slide">
                        <button class="production__img <?if($key == 0):?>active<?endif;?>" style="background-image: url(<?=$imgUrl;?>);">
                            <?=$text;?>
                        </button>
                    </div>
                    
                <? endforeach;?>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>

</section>