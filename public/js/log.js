document.addEventListener("DOMContentLoaded", function() {
    const carrusel = document.querySelector(".luciernaga");
    const imagenes = carrusel.querySelectorAll("img");
    let indice = 0;

    setInterval(function() {
        imagenes.forEach(img => img.classList.remove("active"));
        imagenes[indice].classList.add("active");
        indice = (indice + 1) % imagenes.length;
    }, 5000); // Cambia cada 5 segundos
});
