// Burger menu behavior
const burgerMenuButton = document.querySelector(
  ".navbar__list__element__button"
);
const responsiveMenu = document.querySelector(".responsive-menu");

burgerMenuButton.addEventListener("click", () => {
  if (!responsiveMenu.style.height || responsiveMenu.style.height === "0px") {
    burgerMenuButton.style.transform = "rotate(-90deg)";
    responsiveMenu.style.height = "255.6px";
  } else if (responsiveMenu.style.height === "255.6px") {
    burgerMenuButton.style.transform = "rotate(0deg)";
    responsiveMenu.style.height = "0px";
  }
});

// Responsive menu button behavior
const responsiveMenuButton = document.querySelector(
  ".responsive-menu__list__element__up-button"
);

responsiveMenuButton.addEventListener("click", () => {
  burgerMenuButton.style.transform = "rotate(0deg)";
  responsiveMenu.style.height = "0px";
});
