const mode = document.querySelectorAll(".mode_icon");
mode.forEach((e) => {
  e.addEventListener("click", () => {
    changeMode();
    mode.forEach((e) => {
      e.style.display = "block";
    });
    const $data = e.getAttribute("data-page"),
      $mode = document.getElementById($data);
    $mode.style.display = "none";
  });
});

const page = document.querySelectorAll("#ChangePage"),
  listPage = document.querySelectorAll(".ListPage");

page.forEach((e) => {
  e.addEventListener("click", () => {
    page.forEach((e) => {
      e.classList.remove("active");
    });
    e.classList.add("active");
    listPage.forEach((e) => {
      e.style.display = "none";
    });
    const $data = e.getAttribute("data-page"),
      $pages = document.getElementById($data);
    $pages.style.display = "block";
  });
});
