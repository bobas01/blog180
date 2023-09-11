const menuBurger = document.getElementById("menuBurger");
const menu = document.getElementById("menu-menu-1");

menuBurger.addEventListener('click', function() {
    menu.classList.toggle("active")
})