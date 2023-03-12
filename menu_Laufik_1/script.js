const menubutton = document.querySelector("nav div:nth-child(3) button:nth-child(2)");
const menu = document.querySelector(".flex-container");

var click = 0;

menubutton.addEventListener("click", () => {
    click++;
    if (click % 2 == 0) {
        menu.style.left = "-200%";
        menu.style.right = "200%";
    }

    else {
        menu.style.right = "0";
        menu.style.left = "0";
    }
})





const vozidla = document.querySelector(".vozidla");
const modely = document.querySelector(".modely");


vozidla.addEventListener("click", () => {
    if (modely.style.display == "initial") {
        modely.style.display = "none";
    }

    else {
        modely.style.display = "initial";
    }
})


const sluzby = document.querySelector(".sluzby");
const lists = document.querySelector(".lists");


sluzby.addEventListener("click", () => {
    if (lists.style.display == "initial") {
        lists.style.display = "none";
    }

    else {
        lists.style.display = "initial";
    }
})

const elektro = document.querySelector(".elektro");
const ele = document.querySelector(".ele");


elektro.addEventListener("click", () => {
    if (ele.style.display == "initial") {
        ele.style.display = "none";
    }

    else {
        ele.style.display = "initial";
    }
})

const kontakt = document.querySelector(".kontakt");
const kontakty = document.querySelector(".kontakty");


kontakt.addEventListener("click", () => {
    if (kontakty.style.display == "initial") {
        kontakty.style.display = "none";
    }

    else {
        kontakty.style.display = "initial";
    }
})

