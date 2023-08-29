window.addEventListener("load", function () {
  // realizations page show more
  const realizationsContainer = document.querySelector('#realizationsContainer');
  // const realizationsEventyUl = document.querySelector('#Eventy');
  const showMoreBtn = document.querySelector('#showMore');
  let more = 900;

  showMoreBtn.addEventListener('click',()=>{
    realizationsContainer.style.height = 1500 + more + 'px';
    // realizationsEventyUl.style.height = 850 + more + 'px';
    more += 900;
    console.log(more);
  });







  // ANIMATIONS
  const servicesTiles = document.querySelectorAll('.servicesTile');
  const slidesBlog = document.querySelectorAll('.slideBlog');
  const eventTiles = document.querySelectorAll('.event-tile');
  // const header = document.querySelector('.Menu-desktop');

// test
 const siteHeader = document.querySelector('#Menu-desktop');
 const siteContent = document.querySelector('#main');
 let siteHeaderHeight = siteHeader.offsetHeight;
 
 siteHeader.classList.add('header-position-fixed');
 siteContent.style.paddingTop = siteHeaderHeight + 'px';
 
 
 function updateHeaderPadding() {
     siteHeaderHeight = siteHeader.offsetHeight;
     siteContent.style.transition = 'padding-top 0.3s ease-in-out';
     siteContent.style.paddingTop = siteHeaderHeight + 'px';
 }
 
 setInterval(updateHeaderPadding, 500);
 
 // initial reference offset for header animation -- top of window
 let refOffset = 0;
 
 const headerAppearsOnScrollUp = () => {
     // get current offset
     const newOffset = window.scrollY || window.pageYOffset;
 
     //below bottom of header
     if(newOffset > siteHeaderHeight) {
         if(newOffset > refOffset) {
             // scrolled down; animate header off screen
             siteHeader.classList.remove('animateIn');
             siteHeader.classList.add('animateOut');
         }
         else {
             // scrolled up; animate header on screen
             siteHeader.classList.remove('animateOut');
             siteHeader.classList.add('animateIn');
         }
 
         // update offset to current value
         refOffset = newOffset;
     }
 }
 
 window.addEventListener('scroll', headerAppearsOnScrollUp, false); 

//  end test
 








  function scrollPage() {
    let scrollPos = window.scrollY;
    let screenWidth = window.innerWidth;


    // if (servicesTiles.length > 0 && scrollPos > 1000)  {
    //   for(let i = 0 ; i < servicesTiles.length+1 ; i++){
    //     if (scrollPos > 1100 + ((i*1.2) * 200 )) {
    //     servicesTiles[i].classList.add('test02');
    //     servicesTiles[i].classList.remove('opacity-0');
    //     servicesTiles[i+1].classList.add('test02');
    //     servicesTiles[i+1].classList.remove('opacity-0');

    //     i=i+1;
    //     // (screenWidth > 500) ? console.log('desktop') : console.log('mobile');
    //     // console.log(screenWidth);
    //     };
    //   };
    // };
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
    // if (eventTiles.length > 0 && scrollPos >= 0)  {
    //   for(let i = 0 ; i < eventTiles.length ; i++){
    //     if (scrollPos >= 0 + (i>1 ? (((i*1.5)*150) + i*130) : ((i*1.5)*150))) {
    //     eventTiles[i].classList.add('test02');
    //     eventTiles[i].classList.remove('opacity-0');
    //     };
    //   };
    // };
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