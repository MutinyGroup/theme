document.addEventListener("DOMContentLoaded", function(event) {
  new Swiper('[data-swiper-services="init"]', {
    direction: "horizontal",
    slidesPerView: 'auto',
    cssMode: true,
    navigation: {
      nextEl: '[data-swiper-services="next"]',
      prevEl: '[data-swiper-services="prev"]',
    },
  });

  new Swiper('[data-swiper-test="init"]', {
    direction: "horizontal",
    slidesPerView: 'auto',
    cssMode: true,
    navigation: {
      nextEl: '[data-swiper-test="next"]',
      prevEl: '[data-swiper-test="prev"]',
    },
  });

  new Swiper('[data-swiper-opinions="init"]', {
    cssMode: true,
    clickable: true,
    grabCursor: true,
    rewind: true,
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
            return '<span class="test ' + currentClass + '"></span>' +
                   ' / ' +
                   '<span class="text-white text-[20px] ' + totalClass + '"></span>';
        }
    },
    
    navigation: {
      nextEl: '[data-swiper-opinions="next"]',
      prevEl: '[data-swiper-opinions="prev"]',
    },
  });

  new Swiper('[data-swiper-blog="init"]', {
    cssMode: true,
    pagination: {
      el: '[data-swiper-blog="pagination"]',
      type: "fraction",
    },
  });
});