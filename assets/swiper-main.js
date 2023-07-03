const swiper = new Swiper('[data-swiper-services]', {
  direction: "horizontal",
  loop: false,
  slidesPerView: 3,
  spaceBetween: 50,
  navigation: {
    nextEl: "[data-swiper-services] [data-swiper-next]",
    prevEl: "[data-swiper-services] [data-swiper-prev]",
  },
});

const swiper2 = new Swiper('[data-swiper-opinions]', {
  spaceBetween: 30,
  pagination: {
    el: "[data-swiper-opinions] [data-swiper-pagination]",
    type: "fraction",
  },
  navigation: {
    nextEl: "[data-swiper-opinions] [data-swiper-next]",
    prevEl: "[data-swiper-opinions] [data-swiper-prev]",
  },
});

const swiper3 = new Swiper("[data-swiper-blog]", {
  spaceBetween: 30,
  pagination: {
    el: "[data-swiper-blog] [data-swiper-pagination]",
    type: "fraction",
  },
});

