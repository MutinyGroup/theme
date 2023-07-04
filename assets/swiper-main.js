document.addEventListener("DOMContentLoaded", function(event) {
  new Swiper('[data-swiper-services="init"]', {
    direction: "horizontal",
    slidesPerView: 'auto',
    clickable: true,
    grabCursor: true,
    navigation: {
      nextEl: '[data-swiper-services="next"]',
      prevEl: '[data-swiper-services="prev"]',
    },
  });

  new Swiper('[data-swiper-test="init"]', {
    direction: "horizontal",
    slidesPerView: 2,
    spaceBetween: 30,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
  });

  new Swiper('[data-swiper-opinions="init"]', {
    clickable: true,
    grabCursor: true,
    pagination: {
      el: '[data-swiper-opinions="pagination"]',
      type: 'fraction',
      formatFractionCurrent: function (number) {
        return ('0' + number).slice(-2);
      },
      formatFractionTotal: function (number) {
        return ('0' + number).slice(-2);
      },
      renderFraction: function (currentClass, totalClass) {
        return '<span class="mr-[10px] ' + currentClass + '"></span>' +
                ' / ' +
                '<span class="ml-[10px] text-white text-[20px] ' + totalClass + '"></span>';
      }
    },
    navigation: {
      nextEl: '[data-swiper-opinions="next"]',
      prevEl: '[data-swiper-opinions="prev"]',
    },
  });

  new Swiper('#blog', {
    direction: "horizontal", 
    slidesPerView: 'auto',
    clickable: true,
    grabCursor: true,
    navigation: {
      nextEl: "#next",
      prevEl: "#prev",
    },
  });
});