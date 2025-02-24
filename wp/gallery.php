<? 
/* 
    Template Name: gallery
*/
?>

<? 
get_header();?>
<?  
    $maElPage = 12;

    // разбор url
    $urlDivided = parse_url(((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    parse_str($urlDivided['query'], $query);
    
    $tag = $query['tag'] or '';
    $city = $query['city'] or '';
    $idPage = $query['id_page'] == '' ? 1 : $query['id_page'];

    // получение рубрик
    $allHeading = getHeadings(array(7,10));

    $allTags = $allHeading[0];
    $allCities = $allHeading[1];

    // получение всех выбранных рубрик
    $category = array();
    
    if ($tag != '') {
        array_push($category, $tag);
    }

    if ($city != '') {
        array_push($category, $city);
    }

    $arrPosts = getPost('gallery', $category, $maElPage, $idPage);
    $redyPosts = $arrPosts['posts'];

    $countPages = $arrPosts['count_pages'];

?>

<div class="block">
    <p class="section-title">Галерея</p>

    <div class="catalog-gal">
        <div class="catalog-gal__controller">
            <div class="tag tag-active">
                <a href="<?=urlPage($urlDivided, 'tag', 0, true, true);?>" class="tag__item <?if($tag == ''){echo 'active';}?>" data-teg="">
                    Все
                </a>
    
                <? foreach($allTags as $value): ?>
                    <a href="<?=urlPage($urlDivided, 'tag', $value->term_id, true);?>" class="tag__item <?if($value->term_id == $tag){echo 'active';}?>" data-teg="<?=$value->slug;?>">
                        <?=$value->name;?>
                    </a>
                <? endforeach; ?>
            </div>

            <div class="select">
                <button class="select__value">
                    <? if($city):?>
                        <?=get_the_category_by_ID($city)?>
                    <? else:?>
                        Города
                    <? endif;?>
                </button>

                <div class="select__block">
                    <ul class="select__list">
                        <li>
                            <a href="<?=urlPage($urlDivided, 'city', 0, true, true);?>">
                                Все
                            </a>
                        </li>

                        <? foreach($allCities as $value): ?>
                            <li>
                                <a href="<?=urlPage($urlDivided, 'city', $value->term_id, true);?>">
                                    <?=$value->name;?>
                                </a>
                            </li>
                        <? endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="catalog-gal__catalog">
            <?php
                if( $redyPosts){
                    foreach( $redyPosts as $key => $post ){
                        setup_postdata( $post );

                        $id = $post->ID;
                        $images = get_field('images', $id);
                        $imagesUrl = $images['url'];
                        ?>
                        
                        <a href="<?=the_permalink();?>" class="catalog-gal__item" data-id="<?=$id;?>">
                            <img src="<?=$imagesUrl;?>" alt="">

                            <div class="catalog-gal__text">
                                <?=the_title();?>
                            </div>
                        </a>

                        <?php
                    }
                } else {
                    // Постов не найдено
                }
            ?>
        </div>
        
        <div class="catalog-gal__footer">
            <? if($countPages > 1):?>
                <? if($countPages != $idPage):?>
                    <a href="#" class="btn btn__transparent btn-posts">Показать ещё</a>
                <? endif;?>

            <div class="pagination" style="margin-left: auto;">
                <? for ($i=1; $i <= $countPages; $i++): ?>
                    <a href="<?=urlPage($urlDivided, 'id_page', $i);?>" class="pagination__item <?if($idPage == $i or $idPage == '' and $i == 1){echo 'active';}?>">
                        <?=$i;?>
                    </a>
                <? endfor;?>
            </div>
            <? endif;?>
        </div>
    </div>
</div>

<script type="module">
    import {getParameters} from 'https://n3.fireclass.pro/wp-content/themes/euroglass/scripts/getParameters.js';


    
    let button = document.querySelector('.btn-posts');

    button.onclick = function (event) {
        event.preventDefault();

        let currentURL = new URL(window.location.href),
        urlPresentation = 'https://n3.fireclass.pro/wp-content/themes/euroglass/ajax/gallery.php',
        flagPresentation = false;
        
        let lastElement = document.querySelector('.catalog-gal__item:last-child');
        
        if (!flagPresentation) {
            flagPresentation = true;

            let nextDate  = {
                slug: 'gallery',
                meta: getParameters(currentURL.search.slice(1)),
                max: <?=$maElPage;?>,
            }
            
            fetch(urlPresentation, {
                method: 'POST', // Здесь так же могут быть GET, PUT, DELETE
                body: JSON.stringify(nextDate),
            })
            .then((response) => response.json())
            .then((data) => {
                let newElements = '',
                    newPage = data.page,
                    posts = data.posts;

                // вывод постов
                posts.forEach(post => {                    

                    let id = post.id,
                        title = post.title,
                        img = post.img,
                        link = post.link;
                    
                    newElements += `<a href="${link}" class="catalog-gal__item" data-id="${id}">
                                        <img src="${img}" alt="">

                                        <div class="catalog-gal__text">
                                            ${title}
                                        </div>
                                    </a>`;
                });

                document.querySelector('.catalog-gal__catalog').insertAdjacentHTML('beforeend', newElements);

                // переключение страниц
                document.querySelectorAll('.pagination__item').forEach((pag, index) => {
                    let numberPag = index + 1;
                    if (numberPag == newPage) {
                        pag.classList.add('active');
                    }else{
                        pag.classList.remove('active');
                    }
                });

                // изменение url
                let thisPage = Number(nextDate.meta.page);
                let newPar =''
                
                if (currentURL.search) {
                    newPar = currentURL.search.replace(`page=${thisPage}`, `page=${thisPage + 1}`);
                }else{
                    newPar = '?id_page=2';
                }

                history.replaceState({ detail: 'update' }, '',newPar);

                // пагинация
                let lastPage = Number(document.querySelector('.pagination__item:last-child').textContent);

                if (thisPage + 1 == lastPage) {
                    document.querySelector('.btn-posts').style.display = 'none';
                }                

                flagPresentation = false;
            })
        }
    }
</script>
<? get_footer();?>