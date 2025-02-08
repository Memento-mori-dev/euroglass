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

// Production

const swiperProduction = new Swiper('.swiper-production', {
  // Optional parameters
  direction: 'vertical',
  slidesPerView: 5,
  spaceBetween: 16,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
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

// Production