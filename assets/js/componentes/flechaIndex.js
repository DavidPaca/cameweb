// // Obtén el elemento de la flecha y el enlace
// var scrollToTop = document.getElementById("scroll-to-top");
// var scrollToTopLink = document.getElementById("scroll-to-top-link");

// // Agrega un evento para detectar el desplazamiento
// window.addEventListener("scroll", function () {
//     // Verifica la posición actual del usuario
//     if (window.pageYOffset > 200) {
//         scrollToTopLink.setAttribute("href", "#home");
//         scrollToTop.classList.remove("hidden");
//     } else {
//         scrollToTopLink.removeAttribute("href");
//         scrollToTop.classList.add("hidden");
//     }
// });

// Agrega un evento para detectar el desplazamiento con jQuery
$(window).scroll(function () {
    // Verifica la posición actual del usuario
    if ($(this).scrollTop() > 200) {
        scrollToTopLink.attr("href", "#home");
        scrollToTop.removeClass("hidden");
    } else {
        scrollToTopLink.removeAttr("href");
        scrollToTop.addClass("hidden");
    }
});