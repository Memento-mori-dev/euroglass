if (document.querySelector('.header')) {
  // header
  let pcMenus = document.querySelectorAll('.menu-pc'),
    pcSubMenu = document.querySelectorAll('.sub-menu'),
    pcContentMenu = document.querySelector('.header__sub-menu');

  pcMenus.forEach((menu, index) => {
    menu.onmouseover = function () {
      pcSubMenu[index].classList.add('active');

      pcContentMenu.classList.add('active');
    }

    pcSubMenu[index].onmouseleave = function () {
      pcContentMenu.classList.remove('active');

      setTimeout(() => {
        pcSubMenu[index].classList.remove('active');
      }, 300);
    }
  })

  let pcListMenu = document.querySelectorAll('.header-sub-menu__list li'),
    pcDetailMenu = document.querySelectorAll('.detail-menu');

  pcListMenu.forEach((li, index) => {
    li.onmouseover = function () {
      let liActive = document.querySelector('.header-sub-menu__list .active');

      if (li == liActive) return;

      let detailActive = document.querySelector('.detail-menu.active'),
        nextDetail = pcDetailMenu[index],
        activeHeight = nextDetail.offsetHeight,
        nextHeight = ((activeHeight <= 208) ? 286 : activeHeight + 80) + 'px';

      liActive.classList.remove('active');
      li.classList.add('active');

      detailActive.classList.remove('active');
      nextDetail.classList.add('active');

      document.querySelector('.sub-menu.active').style.height = nextHeight;
    }
  })

  // header

  // header phone
  let btnPhoneMenu = document.querySelector('.header__btn-menu'),
    phoneContentMenu = document.querySelector('.header-phone-menu__content'),
    phoneBlockMenu = document.querySelector('.header__phone-menu');

  btnPhoneMenu.onclick = function () {
    let newHeight = phoneContentMenu.offsetHeight + 'px';

    if (!btnPhoneMenu.classList.contains('active')) {
      btnPhoneMenu.classList.add('active');
      phoneBlockMenu.style.height = newHeight;

      setTimeout(() => {
        phoneBlockMenu.style.height = 'auto';
      }, 300);
    } else {
      if (document.querySelector('.header-phone-next__item.active')) {
        document.querySelector('.header__phone-next.active').classList.remove('active');
        setTimeout(() => {
          document.querySelector('.header-phone-next__item.active').classList.remove('active');
        }, 300);
      }

      phoneBlockMenu.style.height = newHeight;
      btnPhoneMenu.classList.remove('active');

      setTimeout(() => {
        phoneBlockMenu.style.height = 0;
      }, 0);
    }
  }

  let liPhone = document.querySelectorAll('.header-phone-menu__menu > li');

  liPhone.forEach(li => {
    let liLink = li.querySelector('a'),
      liBlock = li.querySelector('.header-phone-menu__sub-menu'),
      liContent = li.querySelector('.header-phone-menu-sub-menu__content');

    liLink.onclick = function () {
      let liHeight = liContent.offsetHeight + 'px';

      if (!li.classList.contains('active')) {
        li.classList.add('active');
        liBlock.style.height = liHeight;

        setTimeout(() => {
          liBlock.style.height = 'auto';
        }, 300);
      } else {
        li.classList.remove('active');
        liBlock.style.height = liHeight;

        setTimeout(() => {
          liBlock.style.height = 0;
        }, 0);
      }
    }
  });

  let phoneBtnNext = document.querySelectorAll('.phone-next'),
    phoneNextContent = document.querySelector('.header__phone-next'),
    phoneNextItems = document.querySelectorAll('.header-phone-next__item');

  phoneBtnNext.forEach((next, index) => {
    next.onclick = function () {
      phoneNextItems[index].classList.add('active');
      phoneNextContent.classList.add('active');
    }
  })

  let exitPhoneNext = document.querySelectorAll('.header-phone-next__item');

  exitPhoneNext.forEach((exitPhone, index) => {
    let btnExit = exitPhone.querySelector('.header-phone-next__close');

    btnExit.onclick = function () {
      document.querySelector('.header__phone-next.active').classList.remove('active');

      setTimeout(() => {
        document.querySelector('.header-phone-next__item.active').classList.remove('active');
      }, 300);
    }
  })


  // header phone 
}

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
    }, breakpoints: {
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
      } else {
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
      } else {
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

  buttonsDescription.forEach((button, index) => {
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
      } else {
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


// input-radio
if (document.querySelector('.input-radio')) {

  let inputRadios = document.querySelectorAll('.input-radio');

  inputRadios.forEach(radio => {
    let btns = radio.querySelectorAll('button'),
      input = radio.querySelector('input');

    btns.forEach(btn => {
      btn.onclick = function (event) {
        event.preventDefault();

        let active = radio.querySelector('.active');

        if (btn == active) return;

        let value = btn.textContent;

        input.value = value;
        active.classList.remove('active');
        btn.classList.add('active');
      }
    });




  });

}
// input-radio


// tag swap
if (document.querySelector('.tag-swap')) {

let tags = document.querySelectorAll('.tag-swap .tag__item'),
    itemTags = document.querySelectorAll('.tag-swap__item');

tags.forEach(tag => {
  tag.onclick = function () {
    let tagActive = document.querySelector('.tag__item.active');

    if (tagActive == tag) return;

    tagActive.classList.remove('active');
    tag.classList.add('active');

    let thisTag = tag.dataset.teg;

    itemTags.forEach(item => {
      let itemTag = item.dataset.teg;

      if (thisTag != itemTag) {
        item.classList.add('hide'); 
      }

      if (thisTag == itemTag || thisTag == '') {
        item.classList.remove('hide')
      }
      
    });
  }
})
}
// tag swap


// modal
if (document.querySelector('.open-modal')) {
  let modalOpens = document.querySelectorAll('.open-modal');

  modalOpens.forEach(btn => {
    btn.onclick = function () {
      let nameModalItem = btn.dataset.modal;

      document.querySelector(`.${nameModalItem}`).classList.add('active');

      document.querySelector('.modal').classList.add('active');
    }
  })

  let closeModalBtn = document.querySelector('.close-modal');

  closeModalBtn.onclick = function () {
    document.querySelector('.modal').classList.remove('active');
    document.querySelector('.modal__item.active').classList.remove('active');
  }
}
