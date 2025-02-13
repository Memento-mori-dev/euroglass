'use strict';


let tags = document.querySelectorAll('.tag__item'),
    items = document.querySelectorAll('.certif__item');

tags.forEach((button, index) => {
    button.onclick = function () {
        let activeTag = document.querySelector('.tag__item.active');

        if (button == activeTag) return;
    
        activeTag.classList.remove('active');
        button.classList.add('active');

        let tag = button.dataset.teg;
    
        items.forEach(item => {
            let itemTag = item.dataset.teg;

            if (tag != itemTag) {
                item.classList.add('hide');
            }

            if (tag == itemTag || tag == '') {
                item.classList.remove('hide');
            }
        });
    }
})