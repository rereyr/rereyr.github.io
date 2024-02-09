const menuIcon = document.getElementById("menu-icon");
const menuList = document.getElementById("menu-list");

// Agrega un evento de clic al ícono de hamburguesa
menuIcon.addEventListener("click", () => {
    // Alternar la clase 'clicked' en el ícono de hamburguesa
    menuIcon.classList.toggle("clicked");

    // Muestra u oculta el menú
    if (menuIcon.classList.contains("clicked")) {
        // Si el ícono tiene la clase 'clicked', muestra el menú
        menuList.style.display = "block";
    } else {
        // Si no, oculta el menú
        menuList.style.display = "none";
    }
});