const menubutton = document.querySelector(
  "nav div:nth-child(3) button:nth-child(2)"
);
const menu = document.querySelector(".flex-container");

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

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

const vozidla = document.querySelector(".vozidla");
const modely = document.querySelector(".modely");
const kat = document.querySelector(".kat");
const modely1 = document.querySelector(".modely1");

vozidla.addEventListener("click", () => {
  if (modely.style.display == "initial") {
    modely.style.display = "none";
  } else {
    modely.style.display = "initial";
  }
});

kat.addEventListener("click", () => {
  if (modely1.style.display == "initial") {
    modely1.style.display = "none";
  } else {
    modely1.style.display = "initial";
  }
});

const sluzby = document.querySelector(".sluzby");
const diely = document.querySelector(".diely");
const sluzby1 = document.querySelector(".sluzby1");
const kat1 = document.querySelector(".kat1");

sluzby.addEventListener("click", () => {
  if (diely.style.display == "initial") {
    diely.style.display = "none";
  } else {
    diely.style.display = "initial";
  }
});

kat1.addEventListener("click", () => {
  if (sluzby1.style.display == "initial") {
    sluzby1.style.display = "none";
  } else {
    sluzby1.style.display = "initial";
  }
});

// const elektro = document.querySelector(".elektro");
// const ele = document.querySelector(".ele");

// elektro.addEventListener("click", () => {
//   if (ele.style.display == "initial") {
//     ele.style.display = "none";
//   } else {
//     ele.style.display = "initial";
//   }
// });

// const kontakt = document.querySelector(".kontakt");
// const kontakty = document.querySelector(".kontakty");

// kontakt.addEventListener("click", () => {
//   if (kontakty.style.display == "initial") {
//     kontakty.style.display = "none";
//   } else {
//     kontakty.style.display = "initial";
//   }
// });
