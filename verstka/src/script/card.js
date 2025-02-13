'use strict';

let buttonsDescription = document.querySelectorAll('.card-description-control__item'),
    contentDescription = document.querySelector('.card-description__content'),
    itemsDescription = document.querySelectorAll('.card-description__item');

buttonsDescription.forEach((button, index) =>{
    button.onclick = function () {
        let activeButton = document.querySelector('.card-description-control__item.active');

        if (activeButton == button) return;

        activeButton.classList.remove('active');
        button.classList.add('active');
        
        let activeItem = document.querySelector('.card-description__item.active'),
            newItem = itemsDescription[index],
            activeHeight = activeItem.offsetHeight;

        contentDescription.style.height = `${activeHeight}px`;
        newItem.classList.add('active');
        
        let newHeight = newItem.offsetHeight;

        activeItem.classList.remove('active');
        contentDescription.style.height = `${newHeight}px`;

        setTimeout(() => {
            contentDescription.style.height = 'auto';
        }, 300);
    }
});