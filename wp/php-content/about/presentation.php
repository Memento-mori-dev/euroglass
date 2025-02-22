<? 
    $presentationArray = get_posts([
        'post_type' => 'presentations',
        'numberposts' => 2,
        'post_status' => 'publish',
    ]);
?>

<div class="presentation">
    <div class="presentation__title">
        <p class="section-title">Презентации компании</p>
    </div>

    <div class="presentation__content">
        <? foreach ($presentationArray as $key =>$value): ?>
            <?  
                $title = $value->post_title;

                $postId = $value->ID;
                $imgArray = get_field('images', $postId);
                $imgUrl = $imgArray['url'];

                $files = get_field('file', $postId);
                $urlFiles = $files['url'];
            ?>
            
            <div class="presentation__item" data-id="<?=$key;?>">
                <img src="<?=$imgUrl;?>" alt="<?=$title;?>" class="presentation-item__img">

                <a href="<?=$urlFiles;?>" class="presentation-item__link" download></a>
            </div>

        <? endforeach;?>
    </div>

    <div class="presentation__add">
        <a href="#" class="btn btn__transparent btn-presentation">Показать ещё</a>
    </div>
</div>


<script>
    let urlPresentation = 'https://n3.fireclass.pro/wp-content/themes/euroglass/ajax/presentation.php',
        flagPresentation = false,
        buttonPresentation = document.querySelector('.btn-presentation');
        
    buttonPresentation.onclick = function (event) {
        event.preventDefault();
        
        let lastElement = document.querySelector('.presentation__item:last-child');

        let index  = {
            id: lastElement.dataset.id,
        }
        
        if (!flagPresentation) {
            flagPresentation = true;
            
            fetch(urlPresentation, {
                method: 'POST', // Здесь так же могут быть GET, PUT, DELETE
                body: JSON.stringify(index),
            })
            .then((response) => response.json())
            .then((data) => {
                let newElements = '';
                
                data.array.forEach(presentation => {
                    let id = presentation.id,
                        file = presentation.file,
                        img = presentation.img;
                    
                    newElements += `<div class="presentation__item" data-id="${id}">
                        <img src="${img}" alt="5" class="presentation-item__img">

                        <a href="${file}" class="presentation-item__link" download=""></a>
                    </div>`;
                });

                document.querySelector('.presentation__content').insertAdjacentHTML('beforeend', newElements);
                
                if (!data.flag) {
                    buttonPresentation.style.display = 'none';
                }

                flagPresentation = false;
            })
        }

    }    
</script>