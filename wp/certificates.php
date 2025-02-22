<? 
/* 
    Template Name: certificates
*/

        get_header();

        $certificateArray = get_posts([
            'post_type' => 'certificate',
            'post_status' => 'publish',
            'numberposts' => 100,
        ]);

        $firstId = $certificateArray[0]->ID;
        $allTags = get_field_object('type', 21)['choices'];
?>

    <div class="block">
        <div class="certif">
            <p class="section-title">Сертификаты</p>

            <div class="tag tag-swap">
                <button class="tag__item active" data-teg="">
                    Все
                </button>

                <? foreach ($allTags as $value): ?>
                    <button class="tag__item" data-teg="<?=$value;?>">
                        <?=$value;?>
                    </button>
                <? endforeach;?>
            </div>

            <div class="certif__content">
                <? foreach ($certificateArray as $value): ?>
                    <?
                        $id = $value->ID;
                        $tag = get_field('type', $id);
                        $images = get_field('images', $id);
                        $imagesUrl = $images['url'];
                        $text = $value->post_content;
                    ?>

                    <div class="certif__item tag-swap__item" data-teg="<?=$tag;?>">
                        <img src="<?=$imagesUrl;?>" alt="" class="certif__img">

                        <p class="certif__text">
                            <?=$text;?>
                        </p>
                    </div>
                <? endforeach;?>
            </div>
        </div>
    </div>


<? get_footer();?>