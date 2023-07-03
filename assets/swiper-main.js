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
    pagination: {
      el: '[data-swiper-opinions="pagination"]',
      type: "fraction",
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