const dark = document.querySelectorAll(".mode_icon");

function darkMode() {
  dark[0].style.display = "none";
  dark[1].style.display = "block";
}
function lightMode() {
  dark[0].style.display = "block";
  dark[1].style.display = "none";
}

const page = document.querySelectorAll("#ChangePage"),
  listPage = document.querySelectorAll(".ListPage");

page.forEach((x) => {
  x.addEventListener("click", () => {
    listPage.forEach((x) => {
      x.style.display = "none";
    });
    const $data = x.getAttribute("data-page"),
      $pages = document.getElementById($data);
    $pages.style.display = "block";
  });
});
