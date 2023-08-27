window.addEventListener("load", function () {
  let scrollPos = window.scrollY;
  const servicesTile = document.querySelectorAll('.servicesTile');
  const slideBlog = document.querySelectorAll('.slideBlog');
  const eventTile = document.querySelectorAll('.event-tile');
  const bannerAbout = document.querySelector('.about-banner-img');

  function scrollPage() {
    if (servicesTile && scrollPos > 1000)  {
      for(let i = 0 ; i < servicesTile.length ; i++){
        if (scrollPos > 1000 + ((i*1.3)*180)) {
        servicesTile[i].classList.add('test02');
        servicesTile[i].classList.remove('opacity-0');
        servicesTile[i+1].classList.add('test02');
        servicesTile[i+1].classList.remove('opacity-0');
        i=i+1;
        };
      };
    };
    if (slideBlog && scrollPos >= 0)  {
      for(let i = 0 ; i < slideBlog.length ; i++){
        if (scrollPos >= 0 + ((i*1.5)*150)) {
        slideBlog[i].classList.add('test02');
        slideBlog[i].classList.remove('opacity-0');
        slideBlog[i+1].classList.add('test02');
        slideBlog[i+1].classList.remove('opacity-0');
        i=i+1;
        };
      };
    };
    if (eventTile && scrollPos >= 0)  {
      for(let i = 0 ; i < eventTile.length ; i++){
        if (scrollPos >= 0 + (i>1 ? (((i*1.5)*150) + i*130) : ((i*1.5)*150))) {
        eventTile[i].classList.add('test02');
        eventTile[i].classList.remove('opacity-0');
        };
      };
    };
  };
  scrollPage();




  document.addEventListener("scroll", (event) => {
  scrollPage();
  });
});
