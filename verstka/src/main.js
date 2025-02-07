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
      slidesPerView: 4,
    },
  }
});