<div class="block__header certificates__header">
    <p class="section-title">Сертификаты и лицензии</p>

    <a href="/certificates/" class="btn btn__transparent certificates__btn-pc">Все сертификаты</a>
</div>

<?
$certificateArray = new WP_Query([
    'category_name' => 'certificate',
    'category__and' => $args[0],
    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => 10,
]);

$certificateArray = $certificateArray->posts;

$urlImgArr = array();
?>

<? if (count($certificateArray) > 0):?>
<section class="certificates">
    <div class="swiper swiper-certificates">
        <div class="swiper-wrapper">
                <? foreach ($certificateArray as $key => $value): ?>
                    <?
                        $id = $value->ID;
                        $images = get_field('images', $id);
                        $imagesUrl = $images['url'];
                        $imagesAlt = $images['alt'];

                        array_push($urlImgArr, $imagesUrl);
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
<? endif;?>

<script>
    let gallery = [
          <?foreach ($urlImgArr as $key => $value):?>
            {src: '<?=$value;?>'},
          <?endforeach;?>
      ];
      

      document.querySelectorAll('.certificates__img').forEach((btn, index) => {
          btn.onclick = function (e) { 
              e.preventDefault();
              const startIndex = Number(index || 0)
              Fancybox.show(gallery, {
              startIndex
              });
          }
      });
</script>