let backgroundColor = document.querySelector(".main-content"),
  $ = true,
  textBlack = document.querySelectorAll(".text-black"),
  textWhite = document.querySelectorAll(".text-white");
const changeMode = () => {
  if ($) {
    $ = false;
    console.log($);
    backgroundColor.classList.remove("bg-secondary-subtle");
    backgroundColor.classList.add("bg-dark");
    textBlack.forEach((e) => {
      e.setAttribute("class", "text-white-50");
    });
    textWhite.forEach((e) => {
      e.classList.remove("text-white");
      e.classList.add("text-black");
    });
  } else {
    $ = true;
    console.log($);
    backgroundColor.classList.remove("bg-dark");
    backgroundColor.classList.add("bg-secondary-subtle");
    textBlack.forEach((e) => {
      e.setAttribute("class", "text-black");
    });
    textWhite.forEach((e) => {
        e.classList.remove("text-black");
        e.classList.add("text-white");
      });
  }
};
