window.addEventListener("load", function () {





  // test observer
  const animatedElements = document.querySelectorAll('.data-fade-left-invisible')
  

    const observer = new IntersectionObserver(entries => {
      
      entries.forEach(entry => {
        // const id = entry.target.getAttribute('id');
        const id = entry.target.classList.contains('data-fade-left-invisible')
        const id2 = entry.target.getAttribute('id');
        console.log('id' + id);
        console.log('id2' + id2);

        setTimeout(() => {
          if (entry.intersectionRatio > 0 && id2 != null) {
            // document.querySelector(`#${id2}`).classList.replace('data-fade-left-invisible', 'data-fade-left-visible');
            document.querySelector(`#${id2}`).classList.add('data-fade-left-visible');
          } else if(id != false && id2 != null){
            // document.querySelector(`#${id2}`).classList.replace('data-fade-left-visible','data-fade-left-invisible');
            document.querySelector(`#${id2}`).classList.remove('data-fade-left-visible');
          }
        },100);
      },{ rootMargin: "-30px" });
    });
  
      // observer.observe(document.querySelector('.data-fade-left-invisible'));
      animatedElements.forEach((element) => {
        observer.observe(element);
      });
    

  // end test

  


// services sticky title
const paginationScroll = document.querySelector('.paginationScroll');
const titleImg1 = document.querySelector('.title-img1');
const titleImg2 = document.querySelector('.title-img2');
const titleImg3 = document.querySelector('.title-img3');



function titleImgChange(){
  let currentScrollY = window.scrollY;
  if(window.innerWidth > 480){
    // desktop
    if(currentScrollY > 4530 && currentScrollY < 4630){
      titleImg1.classList.replace('opacity-1', 'opacity-0');
      titleImg2.classList.replace('opacity-0', 'opacity-1');
      paginationScroll.classList.replace('translate-y-[0px]','translate-y-[-42px]');
    }else if(currentScrollY > 5100 && currentScrollY < 5200){
      titleImg2.classList.replace('opacity-1', 'opacity-0');
      titleImg3.classList.replace('opacity-0', 'opacity-1');
      paginationScroll.classList.replace('translate-y-[-42px]', 'translate-y-[-84px]');
    }
    if(currentScrollY < 4530 && currentScrollY > 4000){
      titleImg1.classList.replace('opacity-0', 'opacity-1');
      titleImg2.classList.replace('opacity-1', 'opacity-0');
      paginationScroll.classList.replace('translate-y-[-42px]', 'translate-y-[0px]');
    };
    if(currentScrollY < 5100 && currentScrollY > 4530){
      titleImg2.classList.replace('opacity-0', 'opacity-1');
      titleImg3.classList.replace('opacity-1', 'opacity-0');
      paginationScroll.classList.replace('translate-y-[-84px]', 'translate-y-[-42px]');
    };
  }else{
    // mobile
    if(currentScrollY > 4000 && currentScrollY < 4100){
      titleImg1.classList.replace('opacity-1', 'opacity-0');
      titleImg2.classList.replace('opacity-0', 'opacity-1');
      paginationScroll.classList.replace('translate-y-[0px]','translate-y-[-42px]');
    }else if(currentScrollY > 4600 && currentScrollY < 4700){
      titleImg2.classList.replace('opacity-1', 'opacity-0');
      titleImg3.classList.replace('opacity-0', 'opacity-1');
      paginationScroll.classList.replace('translate-y-[-42px]', 'translate-y-[-84px]');
    }
    if(currentScrollY < 4000 && currentScrollY > 3500){
      titleImg1.classList.replace('opacity-0', 'opacity-1');
      titleImg2.classList.replace('opacity-1', 'opacity-0');
      paginationScroll.classList.replace('translate-y-[-42px]', 'translate-y-[0px]');
    };
    if(currentScrollY < 4600 && currentScrollY > 4000){
      titleImg2.classList.replace('opacity-0', 'opacity-1');
      titleImg3.classList.replace('opacity-1', 'opacity-0');
      paginationScroll.classList.replace('translate-y-[-84px]', 'translate-y-[-42px]');
    };
  }
};

if(document.body.classList.contains('page-id-101')){
  window.addEventListener('scroll', titleImgChange, false); 
}




  // posts page show more
  const realizationsContainer = document.querySelector('#realizationsContainer');
  const blogContainer = document.querySelector('#blogContainer');
  const showMoreBtn = document.querySelector('#showMore');
  const showMoreBlogPostsBtn = document.querySelector('#showMorePosts');
  let more = 900;
  (window.innerWidth > 480) ? more = 900 : more = 1100;
  let more2 = 1520;

  

  if(document.body.classList.contains('page-id-110')){
    showMoreBtn.addEventListener('click',()=>{
      realizationsContainer.style.maxHeight = ((window.innerWidth > 480) ? 1500 : 1820) + more + 'px';
      (window.innerWidth > 480) ? more += 900 : more += 1100;
      console.log(more);
    });
};
  if(document.body.classList.contains('blog')){
    showMoreBlogPostsBtn.addEventListener('click',()=>{
      blogContainer.style.maxHeight = 1460 + more2 + 'px';
      more2 += 1520;
    });
  }
  
  // floating navbar
  const siteHeader = document.querySelector('#Menu-desktop');
  const siteHeaderMobile = document.querySelector('#Mobile');
  const siteContent = document.querySelector('#main');
  let siteHeaderHeight = siteHeader.offsetHeight;
  let siteHeaderHeightMobile = siteHeaderMobile.offsetHeight;
  let screenWidth = window.innerWidth;

  if(screenWidth > 500) {
    //  desktop
    siteHeader.classList.add('header-position-fixed');
    function updateHeaderPadding() {
      siteHeaderHeight = siteHeader.offsetHeight;
      siteContent.style.transition = '0.3s ease-in-out';
    };

    setInterval(updateHeaderPadding, 500);
    let refOffset = 0;

    const headerAppearsOnScrollUp = () => {
      const newOffset = window.scrollY || window.pageYOffset;

      if(newOffset > siteHeaderHeight) {
          if(newOffset > refOffset) {
            siteHeader.classList.remove('animateIn');
            siteHeader.classList.add('animateOut');

            if(document.body.classList.contains('home')){
              siteHeader.classList.add('bg-dark');
            }else{
              siteHeader.classList.add('bg-bright');
            };
          }else {
            siteHeader.classList.remove('animateOut');
            siteHeader.classList.add('animateIn');
          };
          refOffset = newOffset;
      };
      if(this.window.scrollY == 0){
        if(document.body.classList.contains('home')){
          siteHeader.classList.remove('bg-dark');
        }else{
          siteHeader.classList.remove('bg-bright');
        };
      };
    };
    window.addEventListener('scroll', headerAppearsOnScrollUp, false); 
  }else{
    //  mobile
    siteHeaderMobile.classList.add('header-position-fixed');
    siteContent.style.paddingTop = siteHeaderHeightMobile + 'px';
    function updateHeaderMobilePadding() {
      siteHeaderMobileHeight = siteHeaderMobile.offsetHeight;
      siteContent.style.transition = 'padding-top 0.3s ease-in-out';
      siteContent.style.paddingTop = siteHeaderMobileHeight + 'px';
    };

    setInterval(updateHeaderMobilePadding, 500);
    let refOffsetMobile = 0;

    const headerMobileAppearsOnScrollUp = () => {
      const newOffsetMobile = window.scrollY || window.pageYOffset;

      if(newOffsetMobile > siteHeaderMobileHeight) {
          if(newOffsetMobile > refOffsetMobile) {
            siteHeaderMobile.classList.remove('animateIn');
            siteHeaderMobile.classList.add('animateOut');
          }
          else {
            siteHeaderMobile.classList.remove('animateOut');
            siteHeaderMobile.classList.add('animateIn');
          };
          refOffsetMobile = newOffsetMobile;
      };
    };

    window.addEventListener('scroll', headerMobileAppearsOnScrollUp, false); 

  }

  // ANIMATIONS
  AOS.init({
    duration: 1200,
  });
  const servicesTiles = document.querySelectorAll('.servicesTile');
  const slidesBlog = document.querySelectorAll('.slideBlog');
  const eventTiles = document.querySelectorAll('.event-tile');
  // const header = document.querySelector('.Menu-desktop');

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
  if(document.body.classList.contains('page-id-606') || document.body.classList.contains('page-id-11') || document.body.classList.contains('page-id-13')){
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