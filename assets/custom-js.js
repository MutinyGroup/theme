window.addEventListener("load", function () {
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
  const clickBar = document.querySelectorAll("#click-bar");
  const stepParagraph = document.querySelector("#step-paragraph");

  clickBar.forEach(function(item) {
    item.addEventListener("click", () => {
      if (!stepParagraph.classList.contains('active')) { 
        console.log('test');
        stepParagraph.classList.add('active')
      } else if (stepParagraph.classList.contains('active')) {
        console.log('test2');
        stepParagraph.classList.remove('active')
      }
    });
  })

});



