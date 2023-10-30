document.addEventListener("DOMContentLoaded", function(event) {
  new Swiper('#services', {
    direction: "horizontal",
    slidesPerView: 'auto',
    slideClass: 'post',
    spaceBetween: 10,
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

  new Swiper('#blog2', {
    direction: "horizontal",
    slidesPerView: 'auto',
    clickable: true,
    grabCursor: true,
    slideClass: 'post',
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
