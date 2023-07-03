new Swiper('[data-swiper-services="init"]', {
  direction: "horizontal",
  loop: false,
  slidesPerView: 3,
  spaceBetween: 50,
  navigation: {
    nextEl: '[data-swiper-services="next"]',
    prevEl: '[data-swiper-services="prev"]',
  },
});

new Swiper('[data-swiper-opinions="init"]', {
  spaceBetween: 30,
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
  spaceBetween: 30,
  pagination: {
    el: '[data-swiper-blog="pagination"]',
    type: "fraction",
  },
});

