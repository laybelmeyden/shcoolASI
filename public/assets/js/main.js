$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        navText: ["", ""],
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });
});
if (window.matchMedia("(max-width: 920px)").matches) {
    shape = document.getElementsByTagName("svg")[0];
    shape.setAttribute("viewBox", "-10 300 550 400");
};
let url = window.location.href;
if (url.indexOf('http://127.0.0.1:8000/new') != -1) {
    document.querySelector("nav").style.background = "rgba(250, 240, 231, 0.65)";
    document.querySelector("nav").classList.add("nav_12");
};