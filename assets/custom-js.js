// navbar mobile handling

const btnOpenMenu = document.querySelector(".btn-open-menu");
const mainNavContainer = document.querySelector(".mobile-nav-wrapper");
const mainNavUl = document.querySelector(".main-nav");
const menuInput = document.querySelector(".menuInput");

btnOpenMenu.addEventListener("click", () => {
  if (mainNavContainer.classList.contains("opacity-[0]")) {
    mainNavContainer.classList.remove("opacity-[0]");
    mainNavContainer.classList.add("opacity-[1]");
  } else if (mainNavContainer.classList.contains("opacity-[1]")) {
    mainNavContainer.classList.remove("opacity-[1]");
    mainNavContainer.classList.add("opacity-[0]");
  }
});