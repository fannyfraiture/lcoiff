const titres = document.querySelectorAll(".info-blocks__info-block__title");
const crosses = document.querySelectorAll(
  ".info-blocks__info-block__plus"
);
const cross = crosses[0];

let titre = titres[0];
const underLine = getComputedStyle(titre, ":after");

const paragraph = document.querySelectorAll(
  ".info-blocks__info-block__paragraph"
);

for (let i = 0; i < titres.length; i++) {
  paragraph[i].style.display = "none";
  crosses[i].style.transform = "rotate(90deg)";

  console.log(paragraph[i].style.display);
  console.log(crosses[i].style.transform);

  titres[i].addEventListener("click", () => {
    paragraph[i].style.display =
      paragraph[i].style.display === "block" ? "none" : "block";

    crosses[i].style.transform =
      crosses[i].style.transform === "rotate(90deg)"
        ? "rotate(45deg)"
        : "rotate(90deg)";
  });
}

// Display Bank account number in bold
