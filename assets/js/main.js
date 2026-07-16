// Exportemos los iconos desde el cdn de lucide
lucide.createIcons();

// Boton modo oscuro
const darkMode = document.getElementById("darkMode");
const logo = document.getElementById("logoMenu");
const icon = document.getElementById("themeIcon");

darkMode.addEventListener("click", function () {

    document.body.classList.toggle("dark");

    if (document.body.classList.contains("dark")) {
        logo.src = "/assets/icons/logo_M_hex_bgB.svg";
        darkMode.innerHTML = '<i data-lucide="sun"></i>';
    } else {
        logo.src = "/assets/icons/logo_M_hex_bgW.svg";
        darkMode.innerHTML = '<i data-lucide="moon"></i>';
    }
    lucide.createIcons();
});