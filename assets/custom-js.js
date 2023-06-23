// navbar mobile handling

window.addEventListener("load", function () {
  const btnOpenMenu = document.querySelector(".btn-open-menu");
  const mainNavContainer = document.querySelector(".mobile-nav-menu");
  const navMobile = document.querySelector(".nav-mobile");

  btnOpenMenu.addEventListener("click", () => {
    if (mainNavContainer.classList.contains("opacity-[0]")) {
      mainNavContainer.classList.remove("opacity-[0]");
      mainNavContainer.classList.add("opacity-[1]");
      mainNavContainer.classList.replace('z-[-2]','z-[3]')
    } else if (mainNavContainer.classList.contains("opacity-[1]")) {
      mainNavContainer.classList.remove("opacity-[1]");
      mainNavContainer.classList.add("opacity-[0]");
      mainNavContainer.classList.replace('z-[3]', 'z-[-2]')

    }
  });
});