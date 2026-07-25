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

    const btnDarkMode = document.getElementById("btnDarkMode");

    btnDarkMode.addEventListener("click", function () {

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
    const btnDarkMode = document.getElementById("btnDarkMode");

    const theme = localStorage.getItem("theme");

    if (theme === "dark") {
        document.body.classList.add("dark");
        logo.src = "../assets/icons/logo_M_hex_dark.svg";
        btnDarkMode.innerHTML = '<i data-lucide="sun"></i>';
    } else {
        document.body.classList.remove("dark");
        logo.src = "../assets/icons/logo_M_hex_light.svg";
        btnDarkMode.innerHTML = '<i data-lucide="moon"></i>';
    }

    lucide.createIcons();
}

const sidebar = document.getElementById("sidebar");
const btnPanel = document.getElementById("iconPanel");

const iconOpen = document.getElementById("iconOpen");
const iconClose = document.getElementById("iconClose");

btnPanel.addEventListener("click", () => {

    sidebar.classList.toggle("sidebar-collapsed");

    iconOpen.classList.toggle("hidden");
    iconClose.classList.toggle("hidden");
});



console.log("Estamos a full");