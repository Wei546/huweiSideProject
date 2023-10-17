asideEffect();
searchBarAppear();
searchBarClose();
function asideEffect() {
  let iconList = document.querySelector(".fa-list");
  let aside = document.querySelector("aside");
  let isAsideHidden = true;

  iconList.addEventListener("click", () => {
    if (isAsideHidden) {
      aside.style.animation = "slideRight 0.5s ease-in forwards";
      iconList.style.animation = "rotate_180 0.5s ease-in forwards";
    } else {
      aside.style.animation = "slideLeft 0.5s ease-in forwards";
      iconList.style.animation = "rotate_0 0.5s ease-in forwards";
    }
    // 切換狀態
    isAsideHidden = !isAsideHidden;
  });
}
function searchBarAppear() {
  let iconSearch = document.querySelector(".fa-magnifying-glass");
  let searchBar = document.querySelector(".searchBar");
  iconSearch.addEventListener("click", () => {
    searchBar.style.display = "inline";
  });
}
function searchBarClose() {
  let iconClose = document.querySelector(".fa-circle");
  iconClose.addEventListener("click", () => {
    searchBar.style.display = "none";
  });
}
