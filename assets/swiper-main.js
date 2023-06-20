const swiper = new Swiper('.swiper', {
  direction: "horizontal",
  loop: false,
  slidesPerView: 3,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});