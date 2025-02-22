<? 
    $cardArray = get_posts([
        'post_type' => 'cards-about',
        'numberposts' => 4,
        'post_status' => 'publish',
    ]);
?>


<div class="about-card">
    <? foreach ($cardArray as $value): ?>
        <?  
            $title = $value->post_title;

            $postId = $value->ID;
            $imgArray = get_field('images', $postId);
            $imgUrl = $imgArray['url'];
        ?>

        <a href="<?=get_field('link', $postId);?>" class="about-card__item" style="background-image: url(<?=$imgUrl;?>);">
            <div class="about-card-item__text">
                <?=$title;?>
            </div>
        </a>

    <? endforeach;?>

</div>