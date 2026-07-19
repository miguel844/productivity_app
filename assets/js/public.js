// INICIALIZACION ******************************************************************
init();

function init() {
    applyTheme();
    setupDarkMode();
    lucide.createIcons();
}
// FIN DE LA INICIALIZACION ********************************************************

// Boton modo oscuro
function setupDarkMode() {

    const darkMode = document.getElementById("darkMode");

    darkMode.addEventListener("click", function () {

        if (document.body.classList.contains("dark")) {
            localStorage.setItem("theme", "light");
        } else {
            localStorage.setItem("theme", "dark");
        }

        applyTheme();
    });
}

function applyTheme() {

    const logo = document.getElementById("logo");
    const darkMode = document.getElementById("darkMode");

    const theme = localStorage.getItem("theme");

    if (theme === "dark") {
        document.body.classList.add("dark");
        logo.src = "../assets/icons/logo_M_hex_dark.svg";
        darkMode.innerHTML = '<i data-lucide="sun"></i>';
    } else {
        document.body.classList.remove("dark");
        logo.src = "../assets/icons/logo_M_hex_light.svg";
        darkMode.innerHTML = '<i data-lucide="moon"></i>';
    }

    lucide.createIcons();
}
