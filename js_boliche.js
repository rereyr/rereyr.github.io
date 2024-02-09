
window.addEventListener("scroll", function() {
    var redesSociales = document.getElementById("redes-sociales");
    var menu = document.getElementById("menu");

    var scrollY = window.scrollY || window.pageYOffset;
    var scrollThreshold = 100;

    if (scrollY > scrollThreshold) {
        redesSociales.style.display = "none";
        menu.style.position = "fixed";
        menu.style.top = "0";
        menu.style.left = "0";
        menu.style.background = "rgba(0, 0, 0, 0.6)";
    } else {
        menu.style.position = "absolute"; // Cambia a posición absoluta
        menu.style.top = "initial"; // Limpia la propiedad 'top'
        menu.style.left = "initial"; // Limpia la propiedad 'left'
        menu.style.background = "rgba(0, 0, 0, 0.7)";
        redesSociales.style.display = "flex"; // Cambia el display a 'flex'
    }
});

window.addEventListener("scroll", function() {
    var logo = document.querySelector(".logo");
    var scrollY = window.scrollY || window.pageYOffset;
    var scrollThreshold = 100;

    if (scrollY > scrollThreshold) {
        logo.style.opacity = "0.3"; // Cambiar opacidad cuando haga scroll
    } else {
        logo.style.opacity = "1"; // Restaurar opacidad cuando vuelva hacia arriba
    }
});
/*para pantallas de tablet*/
// Selecciona el elemento del logo
// Selecciona el elemento del logo

