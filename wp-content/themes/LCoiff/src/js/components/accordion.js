const titres = document.querySelectorAll(".info-blocks__info-block__title");
const underlines = document.querySelectorAll(".info-blocks__info-block__title__underline")
const paragraph = document.querySelectorAll(".info-blocks__info-block__paragraph");
const crosses = document.querySelectorAll(".info-blocks__info-block__plus");
const cross = crosses[0];

for (let i = 0; i < titres.length; i++) {
  //default value
  paragraph[i].style.display = "none";
  crosses[i].style.transform = "rotate(90deg)";
  underlines[i].style.width = "100%";
  console.log(paragraph[i].style.display);
  console.log(crosses[i].style.transform);

  titres[i].addEventListener("click", () => {
    paragraph[i].style.display =
      paragraph[i].style.display === "block" ? "none" : "block";
    crosses[i].style.transform =
      crosses[i].style.transform === "rotate(90deg)"
        ? "rotate(45deg)"
        : "rotate(90deg)";
    underlines[i].style.width =    
      underlines[i].style.width === "50%"
        ? "100%"
        : "50%";
});
}


