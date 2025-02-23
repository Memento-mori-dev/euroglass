<? 
setup_postdata( $post );

$id = $post->ID;
$images = get_field('images', $id);
$imagesUrl = $images['url'];



?>

<div class="block block_width">
        <div class="card__baner">
            <div class="wrapper">
                <img src="<?=$imagesUrl;?>" alt="" class="card-baner__img">

                <div class="card-baner__content">
                    <div>
                        <p class="card-baner__title"><?=the_title();?></p>

                        <p class="card-baner__description">
                            <?=get_the_content();?>
                        </p>

                        <p class="card-baner__pre-price">
                            Цена за м2
                        </p>

                        <p class="card-baner__price">
                            <?=get_field('price', $id);?>
                        </p>
                    </div>

                    <div class="card-baner__extra">
                        <a href="#" class="btn btn__transparent">Заказать</a>

                        <a href="<?=get_field('documentation', $id)['url'];?>" class="card-baner__link" download>Скачать документацию</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="card__description">
            <div class="card-description__control">
                <? if(get_field('characteristics', $id)):?>
                    <button class="card-description-control__item active">
                        Характеристики
                    </button>
                <? endif;?>

                <? if(get_field('equipment', $id)):?>
                    <button class="card-description-control__item">
                        Комплектация
                    </button>
                <? endif;?>

                <? if(get_field('certificates', $id)):?>
                    <button class="card-description-control__item">
                        Сертификаты
                    </button>
                <? endif;?>

                <? if(get_field('scope_application', $id)):?>
                    <button class="card-description-control__item">
                        Область применения
                    </button>
                <? endif;?>
            </div>

            <div class="card-description__content">
                <? if(get_field('characteristics', $id)):?>
                    <div class="card-description__item active">
                        <?=get_field('characteristics', $id);?>
                    </div>
                <? endif;?>

                <? if(get_field('equipment', $id)):?>
                    <div class="card-description__item">
                        <?=get_field('equipment', $id);?>
                    </div>
                <? endif;?>

                <? if(get_field('certificates', $id)):?>
                    <div class="card-description__item">
                        <?=get_field('certificates', $id);?>
                    </div>
                <? endif;?>

                <? if(get_field('scope_application', $id)):?>
                    <div class="card-description__item">
                        <?=get_field('scope_application', $id);?>
                    </div>
                <? endif;?>
                
            </div>
        </div>
    </div>

    <div class="block">
        <div class="card__form" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/page/card/card-form.png);">
            <p class="card-form__title">Lorem ipsum dolor sit amet</p>
            <p class="card-form__text">Lorem ipsum dolor sit amet consectetur. Ultricies nulla cras a sit urna lacus.</p>

            <form action="" class="card-form__content">
                <input type="text" class="input" placeholder="Имя">

                <input type="text" class="input" placeholder="Ваш телефон">

                <button class="file">
                    <p class="file__name">Прикрепить</p>
                    <p class="file__description">*docx, pdf, zip, rar</p>

                    <input type="file" name="" id="">
                </button>

                <a href="#" class="btn btn__transparent-white">Оставить заявку</a>

                <p class="card-form__conditions">Я даю согласие на обработку своих персональных данных
                    в соответствии с <a href="#">политикой конфиденциальности</a>.</p>
            </form>
        </div>

        
    </div>