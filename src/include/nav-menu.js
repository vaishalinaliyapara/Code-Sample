window.addEventListener("DOMContentLoaded", (event) => {
    let headerDiv = document.getElementById("site-header-wrap");
    let menuBar = document.getElementById("menu-bar");
    let menuClose = document.getElementById("menu-close");
    let headerNav = document.getElementById("site-header-nav");
    let header = document.getElementById("site-header");
    let headerCTA = document.getElementById("header-cta-primary"); 

    if (menuBar && headerNav) {
        menuBar.addEventListener('click', function () {
            headerDiv.classList.add("bg-black");
            headerDiv.classList.remove("bg-trans-black");
            headerDiv.classList.add("h-screen");
            menuBar.classList.add("hidden");
            menuClose.classList.remove("hidden");
            headerCTA.classList.add("hidden");
        });
        menuClose.addEventListener('click', function () {
            setTimeout( () => {
                headerDiv.classList.remove("bg-black");
                headerDiv.classList.add("bg-trans-black");
                menuBar.classList.remove("hidden");
                menuClose.classList.add("hidden");
                headerCTA.classList.remove("hidden");
            },305);
            headerDiv.classList.remove("h-screen");
        });
    }
});