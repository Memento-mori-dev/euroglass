if (document.querySelector('.swiper-certificates')) {

const swiperCertificates = new Swiper('.swiper-certificates', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 5.8,
    spaceBetween: 16,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      660: {
        slidesPerView: 3,
      },
      900: {
        slidesPerView: 4,
      },
      1000: {
        slidesPerView: 5.5,
      },
      1400: {
        slidesPerView: 5.8,
      },
    }
});

}


if (document.querySelector('.swiper-works')) {

const swiperWorks = new Swiper('.swiper-works', {
  // Optional parameters
  direction: 'horizontal',
  spaceBetween: 16,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    0: {
      slidesPerView: 1.06,
      spaceBetween: 12,
    },
    660: {
      slidesPerView: 2,
    },
    900: {
      slidesPerView: 3,
    },
    1400: {
      slidesPerView: 4,
    },
  }
});

}


// Production
if (document.querySelector('.swiper-production')) {

const swiperProduction = new Swiper('.swiper-production', {
  // Optional parameters
  direction: 'vertical',
  slidesPerView: 5,
  spaceBetween: 16,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },breakpoints: {
    0: {
      slidesPerView: 3,
      spaceBetween: 12,
      direction: 'horizontal',
    },
    600: {
      slidesPerView: 2,
      direction: 'horizontal',
    },
    1400: {
      slidesPerView: 5,
    },
  }
});

let buttonsProduction = document.querySelectorAll('.production__img'),
    imgProduction = document.querySelector('.production__big-img');

buttonsProduction.forEach(button => {
  button.onclick = function () {
    let active = document.querySelector('.production__img.active');
        
    active.classList.remove('active');
    button.classList.add('active');


    let newImg = button.style.backgroundImage,
        newText = button.textContent,
        marker = imgProduction.classList.contains('transition');

    imgProduction.style.backgroundImage = newImg;
    imgProduction.textContent = newText;

    if (!marker) {
      imgProduction.classList.add('transition');

      setTimeout(() => {
        imgProduction.classList.remove('transition');
      }, 300);
    }
    
  }
})

}
// Production

// tag
if (document.querySelector('.tag')) {

let tagButtons = document.querySelectorAll('.tag__item');

tagButtons.forEach(button => {
  button.onclick = function () {
    let active = document.querySelector('.tag__item.active');

    if (button == active) return;

    active.classList.remove('active');
    button.classList.add('active');
  }
});
}
// tag

// select
if (document.querySelector('.select')) {

let selects = document.querySelectorAll('.select');

selects.forEach(select => {
  let selectOpen = select.querySelector('.select__value'),
      selectBlock = select.querySelector('.select__block'),
      selectContent = select.querySelector('.select__list');

  selectOpen.onclick = function () {
    let newHeight = selectContent.offsetHeight + 'px';
    

    if (!selectOpen.classList.contains('active')) {
      selectOpen.classList.add('active');

      selectBlock.style.height = newHeight;

      setTimeout(() => {
        selectBlock.style.height = 'auto';
      }, 300);
    }else{
      selectOpen.classList.remove('active');
      selectBlock.style.height = newHeight;

      setTimeout(() => {
        selectBlock.style.height = 0;
      }, 0);
    }
  }
});

}
// select

// pagination
if (document.querySelector('.pagination')) {

let paginations = document.querySelectorAll('.pagination__item');

paginations.forEach(pagination => {
  pagination.onclick = function () {
    let active = document.querySelector('.pagination__item.active');

    if (pagination == active) return;

    active.classList.remove('active');
    pagination.classList.add('active');
  }
});

}
// pagination

// input-checkbox
if (document.querySelector('.input-checkbox')) {

let inputCheckbox = document.querySelectorAll('.input-checkbox');

inputCheckbox.forEach(checkbox => {
  let input = checkbox.querySelector('input');

  checkbox.onclick = function (event) {
    if (!checkbox.classList.contains('active')) {
      checkbox.classList.add('active');
      input.checked = 1;
    }else{
      checkbox.classList.remove('active');
      input.checked = 0;
    }
  }
});
}
// input-checkbox

// card__description
if (document.querySelector('.card__description')) {
  
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

}
// card__description

// file
if (document.querySelector('.file')) {

let files = document.querySelectorAll('.file');

files.forEach(file => {
  let inputFile = file.querySelector('input'),
      nameFile = file.querySelector('.file__name');
      
  inputFile.addEventListener('change', (e) => {
    nameFile.textContent = e.target.files[0].name;
  });
});

}
// file

// questions
if (document.querySelector('.questions')) {

let questions = document.querySelectorAll('.questions__item');

questions.forEach(question => {
  let btn = question.querySelector('.questions__title');

  btn.onclick = function () {
    let block = question.querySelector('.questions__content'),
        content = question.querySelector('.questions__text'),
        newHeight = content.offsetHeight + 'px';

    if (!question.classList.contains('active')) {
      question.classList.add('active');
      block.style.height = newHeight;

      setTimeout(() => {
        block.style.height = 'auto';
      }, 300);
    }else{
      if (block.style.height == 'auto') {
        block.style.height = newHeight;

        setTimeout(() => {
          block.style.height = 0;
          question.classList.remove('active');
        }, 0);
      }
    }


  }
  
  
});
}
// questions

// tests
if (document.querySelector('.tests')) {
  
let tests = document.querySelectorAll('.tests__item');

tests.forEach(test => {
  let video = test.querySelector('.tests-item__video'),
      window = video.querySelector('video');

  video.onclick = function () {
    if (!video.classList.contains('active')) {
      video.classList.add('active');
      window.controls = true;
    }
  }

  window.addEventListener("pause", (event) => {
    video.classList.remove('active');
    window.controls = false;
  });
});

}
// tests
