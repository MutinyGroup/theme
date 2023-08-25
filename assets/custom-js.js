window.addEventListener("load", function () {
      // ANIMATIONS
      const servicesTile = document.querySelectorAll('.servicesTile');

      function scrollPage() {
        let scrollPos = window.scrollY;
      
        if (scrollPos > 1200) {
          console.log('>1200');
          // for(let i = 0 ; i < 10 ; i++){
          //   servicesTile[i].classList.add('test01');
          //   servicesTile[i].classList.replace('opacity-0', 'opacity-100');
          //   console.log(i);
          // };
          servicesTile[0].classList.add('test01');
          servicesTile[0].classList.replace('opacity-0', 'opacity-100');
          console.log('>1200');
          scrollStarted = true;
        } 
        if (scrollPos > 1300) {
          console.log('>1300');

          servicesTile[1].classList.add('test01');
          servicesTile[1].classList.replace('opacity-0', 'opacity-100');
        }
        if (window.scrollY > 1400) {
          console.log('>1400');

          servicesTile[2].classList.add('test01');
          servicesTile[2].classList.replace('opacity-0', 'opacity-100');
        }
      }
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

