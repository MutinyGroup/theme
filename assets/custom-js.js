window.addEventListener("load", function () {
      // ANIMATIONS
      const servicesTile = document.querySelectorAll('.servicesTile');
      const slideBlog = document.querySelectorAll('.slideBlog');

      function scrollPage() {
        let scrollPos = window.scrollY;

        if (servicesTile && scrollPos > 1000)  {
          console.log('>1200');
          for(let i = 0 ; i < servicesTile.length ; i++){
            if (scrollPos > 1000 + ((i*1.8)*150)) {
            servicesTile[i].classList.add('test02');
            servicesTile[i].classList.remove('opacity-0');
            servicesTile[i+1].classList.add('test02');
            servicesTile[i+1].classList.remove('opacity-0');
            i=i+1;
            };
          };
        };
        if (slideBlog && scrollPos > 1000)  {
          console.log('>1200');
          for(let i = 0 ; i < slideBlog.length ; i++){
            if (scrollPos > 1000 + ((i*1.8)*200)) {
            slideBlog[i].classList.add('test02');
            slideBlog[i].classList.remove('opacity-0');
            slideBlog[i+1].classList.add('test02');
            slideBlog[i+1].classList.remove('opacity-0');
            i=i+1;
            };
          };
        };
      };
    document.addEventListener("scroll", (event) => {
      scrollPage();
    });


  // navbar mobile handling
  const btnOpenMenu = document.querySelector(".btn-open-menu");
  const mainNavMenu = document.querySelector(".mobile-nav-menu");

  btnOpenMenu.addEventListener("click", () => {
    if (mainNavMenu.classList.contains("opacity-[0]")) {
      mainNavMenu.classList.remove("opacity-[0]");
      mainNavMenu.classList.add("opacity-[1]");
      mainNavMenu.classList.replace('z-[-2]','z-[3]');
      mainNavMenu.classList.remove('translate-x-[100%]');
      btnOpenMenu.classList.add("active");
    } else if (mainNavMenu.classList.contains("opacity-[1]")) {
      mainNavMenu.classList.remove("opacity-[1]");
      mainNavMenu.classList.add("opacity-[0]");
      mainNavMenu.classList.replace('z-[3]', 'z-[-2]');
      mainNavMenu.classList.add('translate-x-[100%]');
      btnOpenMenu.classList.remove("active");
    }
  });

  // page services-marketing
  const clickBar = document.querySelectorAll(".click-bar");
  const stepParagraph = document.querySelectorAll(".step-paragraph");
  const iconArrow = document.querySelectorAll(".icon-arrow");

  clickBar.forEach(function(item,index) {
    item.addEventListener("click", () => {
      if (!stepParagraph[index].classList.contains('active')) {
        stepParagraph[index].classList.replace('inactive','active');
        iconArrow[index].classList.replace('rotate-90', 'rotate-[-90deg]');
        iconArrow[index].classList.add('rotate-[-90deg]');
      } else if (stepParagraph[index].classList.contains('active')) {
        stepParagraph[index].classList.replace('active', 'inactive');
        iconArrow[index].classList.replace('rotate-[-90deg]','rotate-90');
      }
    });
  })

  // video background image
  const videoWrapper = document.querySelector('.js-videoWrapper');
  const videoBtn = document.querySelector('.js-videoBtn');
  const videoYt = document.querySelector('.video-yt');


  videoBtn.addEventListener('click', () =>{
    videoYt.classList.replace('opacity-0', 'opacity-1');
    videoWrapper.classList.add('after:opacity-0');
    videoBtn.classList.add('opacity-0');
    setTimeout(() => {
      videoWrapper.classList.replace('after:z-[1]', 'after:z-[-1]');
      videoBtn.classList.replace('z-[2]', 'z-[-1]');
    },300);
  });


});

