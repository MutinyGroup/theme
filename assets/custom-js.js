// navbar mobile handling

window.addEventListener("load", function () {
  const btnOpenMenu = document.querySelector(".btn-open-menu");
  const mainNavContainer = document.querySelector(".mobile-nav-menu");
  const navMobile = document.querySelector(".nav-mobile");

  btnOpenMenu.addEventListener("click", () => {
    if (mainNavContainer.classList.contains("opacity-[0]")) {
      mainNavContainer.classList.remove("opacity-[0]");
      mainNavContainer.classList.add("opacity-[1]");
      navMobile.classList.add('bg-[#101010]')
    } else if (mainNavContainer.classList.contains("opacity-[1]")) {
      mainNavContainer.classList.remove("opacity-[1]");
      mainNavContainer.classList.add("opacity-[0]");
      navMobile.classList.remove('bg-[#101010]')
    }
  });
});