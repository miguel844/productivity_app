console.log("La privada funciona");

document.addEventListener("DOMContentLoaded", () => {
    initNavbar();
    setActiveLink();
});

function initNavbar() {
    const btn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobileMenu");
    const bars = document.querySelectorAll(".bar");
    const headerHamburger = document.getElementById("headerHamburger");

    if (!btn || !mobileMenu) return;

btn.addEventListener("click", () => {

    if (mobileMenu.classList.contains("translate-x-full")) {

        // Abrir
        mobileMenu.classList.remove("translate-x-full");
        mobileMenu.classList.add("translate-x-0");
        headerHamburger.classList.remove("rounded-tr-2xl");
        headerHamburger.classList.add("rounded-r-2xl");
        
      } else {
        
        // Cerrar
        mobileMenu.classList.remove("translate-x-0");
        mobileMenu.classList.add("translate-x-full");
        headerHamburger.classList.remove("rounded-r-2xl");
        headerHamburger.classList.add("rounded-tr-2xl");

    }

    // Animación hamburguesa -> X
    bars[0].classList.toggle("rotate-45");
    bars[0].classList.toggle("translate-y-3.5");
    bars[0].classList.toggle("h-2");

    bars[1].classList.toggle("opacity-0");

    bars[2].classList.toggle("-rotate-45");
    bars[2].classList.toggle("-translate-y-3.5");
    bars[2].classList.toggle("h-2");
});
}

function setActiveLink() {
    const currentPage = new URLSearchParams(window.location.search).get("page");

    document.querySelectorAll("#mobileMenu a").forEach(link => {
        if (link.dataset.page === currentPage) {
            link.classList.add("active-page");
        }
    });
}