import './bootstrap';

let bars = document.querySelector("#navBarsBtn");
let navLinks = document.querySelector("#navLinks");

function toggleNavLinks(){    // toggle nav links show on mobile
    navLinks.classList.toggle("hidden");
    navLinks.classList.toggle("absolute");
    navLinks.classList.toggle("right-0");
    navLinks.classList.toggle("top-16");
    navLinks.classList.toggle("text-right");
    navLinks.classList.toggle("border");
    navLinks.classList.toggle("border-red-700");
    navLinks.classList.toggle("rounded-lg");
    navLinks.classList.toggle("m-2");
    navLinks.classList.toggle("p-5");
}

bars.onclick = toggleNavLinks;