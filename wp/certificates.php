<? 
/* 
    Template Name: certificates
*/
get_header();?>

<?
// $certificateArray = new WP_Query([
//     'category_name' => 'certificate',
//     // 'category__and' => $args[0],
//     'post_status' => 'publish',
//     'order' => 'ASC',
//     'posts_per_page' => -1,
// ]);

$certificateArray = $certificateArray->posts;


$allHeading = getHeadings(array(17));
$allTags = $allHeading[0];
$allTagsId = array();
$allTagsName = array();

foreach ($allTags as $key => $value) {
    array_push($allTagsId, $value->term_id);
    array_push($allTagsName, $value->description);
}


?>

    <div class="block">
        <div class="certif">
            <p class="section-title">Сертификаты</p>

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

            <div class="certif__content">
                <? foreach ($allTagsId as $key => $value):?>
                    <?
                        $myposts = new WP_Query([
                            'category_name' => 'certificate',
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
                            <div class="certif__item tag-swap__item" data-teg="<?=$value?>">
                                <img src="<?=$imagesUrl;?>" alt="" class="certif__img">

                                <p class="certif__text">
                                    <?=the_title();?>
                                </p>
                            </div>
                    <? endforeach;?>
                <? endforeach;?>
            </div>
        </div>
    </div>


<? get_footer();?>