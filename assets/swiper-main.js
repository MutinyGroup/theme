// cant add data-attribute to wp:tags
// document.addEventListener("DOMContentLoaded", function(event) {
//   new Swiper('[data-swiper-services="init"]', {
//     direction: "horizontal",
//     slidesPerView: 'auto',
//     clickable: true,
//     grabCursor: true,
//     navigation: {
//       nextEl: '[data-swiper-services="next"]',
//       prevEl: '[data-swiper-services="prev"]',
//     },
//   });

//   new Swiper('[data-swiper-test="init"]', {
//     direction: "horizontal",
//     slidesPerView: 2,
//     spaceBetween: 30,
//     autoplay: {
//       delay: 2000,
//       disableOnInteraction: false,
//     },
//   });

//   new Swiper('[data-swiper-opinions="init"]', {
//     clickable: true,
//     grabCursor: true,
//     pagination: {
//       el: '[data-swiper-opinions="pagination"]',
//       type: 'fraction',
//       formatFractionCurrent: function (number) {
//         return ('0' + number).slice(-2);
//       },
//       formatFractionTotal: function (number) {
//         return ('0' + number).slice(-2);
//       },
//       renderFraction: function (currentClass, totalClass) {
//         return '<span class="mr-[10px] ' + currentClass + '"></span>' +
//                 ' / ' +
//                 '<span class="ml-[10px] text-white text-[20px] ' + totalClass + '"></span>';
//       }
//     },
//     navigation: {
//       nextEl: '[data-swiper-opinions="next"]',
//       prevEl: '[data-swiper-opinions="prev"]',
//     },
//   });

//   new Swiper('[data-swiper-blog="init"]', {
//     direction: "horizontal",
//     slidesPerView: 'auto',
//     clickable: true,
//     grabCursor: true,
//     navigation: {
//       nextEl: '[data-swiper-blog="next"]',
//       prevEl: '[data-swiper-blog="prev"]',
//     },
//   });
// });



document.addEventListener("DOMContentLoaded", function(event) {
  new Swiper('#services', {
    direction: "horizontal",
    slidesPerView: 'auto',
    clickable: true,
    grabCursor: true,
    navigation: {
      nextEl: '#services-next',
      prevEl: '#services-prev',
    },
  });

  new Swiper('#logos', {
    direction: "horizontal",
    slidesPerView: 2,
    slidesPerGroup: 2,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        grid: {
          fill: 'row',
          rows: 2,
        },
        slidesPerView: 4,
        // slidesPerGroup: 4,
      },
    },
  });

  new Swiper('#opinions-dark', {
    direction: "horizontal",
    slidesPerView: 'auto',
    clickable: true,
    grabCursor: true,
    pagination: {
      el: '#opinions-pagination',
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
      nextEl: '#opinions-next',
      prevEl: '#opinions-prev',
    },
  });

  new Swiper('#opinions-bright', {
    direction: "horizontal",
    slidesPerView: 'auto',
    clickable: true,
    grabCursor: true,
    pagination: {
      el: '#opinions-pagination',
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
                '<span class="ml-[10px] text-black text-[20px] ' + totalClass + '"></span>';
      }
    },
    navigation: {
      nextEl: '#opinions-next',
      prevEl: '#opinions-prev',
    },
  });

  new Swiper('#blog', {
    direction: "horizontal",
    slidesPerView: 'auto',
    clickable: true,
    grabCursor: true,
    navigation: {
      nextEl: '#blog-next',
      prevEl: '#blog-prev',
    },
  });

  new Swiper('#marketing', {
    direction: "horizontal",
    slidesPerView: 'auto',
    clickable: true,
    grabCursor: true,
  });

  new Swiper('#marketing2', {
    direction: "horizontal",
    slidesPerView: 'auto',
    clickable: true,
    grabCursor: true,
    navigation: {
      nextEl: '#marketing2-next',
      prevEl: '#marketing2-prev',
    },
  });
});
