// INICIALIZACION ******************************************************************
init();
function init() {

    lucide.createIcons(); // Exportamos los iconos desde el cdn de lucide
    setupDarkMode(); // Inicializamos el modo oscuro

}
// FIN DE LA INICIALIZACION ********************************************************

// Boton modo oscuro
function setupDarkMode() {
    const btnDarkMode = document.getElementById("icoDarkMode");
    const logo = document.getElementById("logoMenu");
    btnDarkMode.addEventListener("click", function () {
        document.body.classList.toggle("dark");
        if (document.body.classList.contains("dark")) {
            logo.src = "/assets/icons/logo_M_hex_dark.svg";
            btnDarkMode.innerHTML = '<i data-lucide="sun"></i>';
        } else {
            logo.src = "/assets/icons/logo_M_hex_light.svg";
            btnDarkMode.innerHTML = '<i data-lucide="moon"></i>';
        }
        lucide.createIcons();
    });
}
