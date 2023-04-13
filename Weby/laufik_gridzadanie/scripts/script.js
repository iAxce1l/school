const menubutton = document.querySelector(
  "nav div:nth-child(3) button:nth-child(2)"
);
const menu = document.querySelector("#nav-items");

var click = 0;

menubutton.addEventListener("click", () => {
  click++;
  if (click % 2 == 0) {
    menu.style.left = "-200%";
    menu.style.right = "200%";
  } else {
    menu.style.right = "0";
    menu.style.left = "0";
  }
});
