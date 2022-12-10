// todo sticky menu
window.addEventListener("scroll", function () {
    var navMenu = document.querySelector(".js-navmenu");
    navMenu.classList.toggle("sticky", window.scrollY > 0);
});
