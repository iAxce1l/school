const mobile = document.querySelector(".hideonmobile");
const desktop = document.querySelector(".hideondesktop");

desktop.addEventListener("click", () => {
    mobile.classList.toggle("active");
    desktop.classList.toggle("active");
})