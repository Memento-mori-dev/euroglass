<? 
    $cardArray = get_field('repeat', 59);

?>
<div class="about-card">
    <? foreach ($cardArray as $value): ?>
        <?  
            $title = $value['name'];
            $link = $value['link'];
            $imgUrl = $value['images']['url'];
        ?>

        <a href="<?=$link;?>" class="about-card__item" style="background-image: url(<?=$imgUrl;?>);">
            <div class="about-card-item__text">
                <?=$title;?>
            </div>
        </a>

    <? endforeach;?>

</div>