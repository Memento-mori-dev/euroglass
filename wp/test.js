'use strict';

import {sayHi, sayBye} from  '';

sayHi('John'); // Hello, John!
sayBye('John'); // Bye, John!

let currentURL = new URL(window.location.href),
    urlPresentation = 'https://n3.fireclass.pro/wp-content/themes/euroglass/ajax/gallery.php',
    flagPresentation = false,
    button = document.querySelector('.btn-posts');

button.onclick = function (event) {
    event.preventDefault();
    
    let lastElement = document.querySelector('.catalog-gal__item:last-child');

    let date  = {
        slug: 'gallery',
        id: lastElement.dataset.id,
        meta: getParameters(currentURL.search.slice(1)),
        max: 2,
    }
    
    if (!flagPresentation) {
        flagPresentation = true;
        
        fetch(urlPresentation, {
            method: 'POST', // Здесь так же могут быть GET, PUT, DELETE
            body: JSON.stringify(date),
        })
        .then((response) => response.json())
        .then((data) => {
            let newElements = '',
                newPage = data.page,
                posts = data.posts;

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
            
            document.querySelectorAll('.pagination__item').forEach((pag, index) => {
                let numberPag = index + 1;
                if (numberPag == newPage) {
                    pag.classList.add('active');
                }else{
                    pag.classList.remove('active');
                }
            })

            flagPresentation = false;
        })
    }
}