// navbar mobile handling

window.addEventListener("load", function () {
  const btnOpenMenu = document.querySelector(".btn-open-menu");
  const mainNavContainer = document.querySelector(".mobile-nav-wrapper");

  btnOpenMenu.addEventListener("click", () => {
    if (mainNavContainer.classList.contains("opacity-[0]")) {
      mainNavContainer.classList.remove("opacity-[0]");
      mainNavContainer.classList.add("opacity-[1]");
      console.log('open');
    } else if (mainNavContainer.classList.contains("opacity-[1]")) {
      mainNavContainer.classList.remove("opacity-[1]");
      mainNavContainer.classList.add("opacity-[0]");
      console.log('close');
    }
  });
});