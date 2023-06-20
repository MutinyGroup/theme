const swiper = new Swiper('.swiper', {
  direction: "horizontal",
  loop: false,
  slidesPerView: 3,
  spaceBetween: 50,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});