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

// Fecha
const currentDate = document.getElementById("currentDate");

const date = new Date();
const formatEs = new Intl.DateTimeFormat('es-ES', {
    dateStyle: 'full'
}).format(date);

currentDate.textContent = "Hoy es " + formatEs;

// Buenos dias, buenas tardes o buenas noches
const currentHours = date.getHours();
const goodDay = document.getElementById("goodDay");
const nameUser = "Miguel Ángel";

if (currentHours >= 6 && currentHours < 12) {
    goodDay.textContent = "Buenos dias, " + nameUser + "!";
} else if (currentHours >= 12 && currentHours < 21) {
    goodDay.textContent = "Buenas tardes, " + nameUser + "!";
} else {
    goodDay.textContent = "Buenas noches, " + nameUser + "!";
}
console.log(date.getHours());