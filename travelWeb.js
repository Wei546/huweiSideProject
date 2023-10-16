let iconList = document.querySelector(".fa-list");
let aside = document.querySelector("aside");
let isAsideHidden = true;

iconList.addEventListener("click", () => {
  if (isAsideHidden) {
    aside.style.animation = "slideRight 0.5s ease-in forwards";
    iconList.style.animation = "rotate_180 2s ease-in forwards";
  } else {
    aside.style.animation = "slideLeft 0.5s ease-in forwards";
  }
  // 切換狀態
  isAsideHidden = !isAsideHidden;
});
