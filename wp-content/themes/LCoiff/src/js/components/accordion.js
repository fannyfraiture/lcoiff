const titres = document.querySelectorAll(".info-blocks__info-block__title");
const underlines = document.querySelectorAll(
  ".info-blocks__info-block__title__underline"
);
const paragraph = document.querySelectorAll(
  ".info-blocks__info-block__paragraph"
);
const crosses = document.querySelectorAll(".info-blocks__info-block__plus");

for (let i = 0; i < titres.length; i++) {
  //default value
  // paragraph[i].style.display = "none";
  crosses[i].style.transform = "rotate(0deg)";
  underlines[i].style.width = "100%";
  paragraph[i].style.transform = "translateY(-500px)";
  paragraph[i].style.height = "0%";
  console.log(paragraph[i].style.display);
  console.log(crosses[i].style.transform);

  titres[i].addEventListener("click", () => {
    // paragraph[i].style.display =
    //   paragraph[i].style.display === "block" ? "none" : "block";
    paragraph[i].style.height =
      paragraph[i].style.height === "100%" ? "0%" : "100%";

    paragraph[i].style.transform =
      paragraph[i].style.transform === "translateY(0px)"
        ? "translateY(-500px)"
        : "translateY(0px)";

    crosses[i].style.transform =
      crosses[i].style.transform === "rotate(45deg)"
        ? "rotate(0deg)"
        : "rotate(45deg)";
    underlines[i].style.width =
      underlines[i].style.width === "50%" ? "100%" : "50%";
  });
  //   titres[i].addEventListener("mouseenter", () => {

  //     underlines[i].style.width = "75%";

  //     setTimeout (() => {
  //       underlines[i].style.width = "100%"
  //     }, 2000);
  // },false);
}
