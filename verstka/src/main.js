const swiper = new Swiper('.swiper', {
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