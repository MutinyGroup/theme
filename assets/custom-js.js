window.addEventListener("load", function () {
  // ANIMATIONS
  const servicesTiles = document.querySelectorAll('.servicesTile');
  const slidesBlog = document.querySelectorAll('.slideBlog');
  const eventTiles = document.querySelectorAll('.event-tile');
  const servicesSwiper = document.querySelectorAll('.swiperServices');

  const observer = new IntersectionObserver((entries) => { 
    entries.forEach((entry) => {
        console.log(entry.target);
        console.log('visible');
    })
  }); 

  document.addEventListener("scroll", (event) => {
    observer.observe(document.querySelector('.swiperServices'));
    });


  // function update() {
  //   let container = document.getElementById("controls");
  //   let elem = document.getElementById("#services");
  //   let rect = elem.getBoundingClientRect();
  
  //   container.innerHTML = "";
  //   for (let key in rect) {
  //     if (typeof rect[key] !== "function") {
  //       let para = document.createElement("p");
  //       para.textContent = `${key} : ${rect[key]}`;
  //       container.appendChild(para);
  //     }
  //   }
  // }
  
  document.addEventListener("scroll", update);
  // update();

  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  document.addEventListener("scroll", (event) => {
    console.log(isInViewport(servicesSwiper));

    });





  document.addEventListener("scroll", (event) => {
    const box = document.querySelector('#services');
    const rect2 = box.getBoundingClientRect();
  
    console.log(rect2);

    });
  



  function scrollPage() {
    let scrollPos = window.scrollY;

    if (servicesTiles.length > 0 && scrollPos > 1000)  {
      for(let i = 0 ; i < servicesTiles.length+1 ; i++){
        if (scrollPos > 1100 + ((i*1.2)*200)) {
        servicesTiles[i].classList.add('test02');
        servicesTiles[i].classList.remove('opacity-0');
        servicesTiles[i+1].classList.add('test02');
        servicesTiles[i+1].classList.remove('opacity-0');
        i=i+1;
        };
      };
    };
    if (slidesBlog.length > 0 && scrollPos >= 0)  {
      for(let i = 0 ; i < slidesBlog.length ; i++){
        if (scrollPos >= 0 + ((i*1.5)*150)) {
        slidesBlog[i].classList.add('test02');
        slidesBlog[i].classList.remove('opacity-0');
        slidesBlog[i+1].classList.add('test02');
        slidesBlog[i+1].classList.remove('opacity-0');
        i=i+1;
        };
      };
    };
    if (eventTiles.length > 0 && scrollPos >= 0)  {
      for(let i = 0 ; i < eventTiles.length ; i++){
        if (scrollPos >= 0 + (i>1 ? (((i*1.5)*150) + i*130) : ((i*1.5)*150))) {
        eventTiles[i].classList.add('test02');
        eventTiles[i].classList.remove('opacity-0');
        };
      };
    };
  };
  scrollPage();

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
  if(document.body.classList.contains('page-id-99')){
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
  };

});

