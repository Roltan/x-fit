function Scroll(str) {
    var y = document.getElementById(str).offsetTop;
    window.scrollTo({
        top: y,
        behavior: "smooth",
    });
}

function ScrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}

window.addEventListener("scroll", function () {
    const footerFixed = document.querySelector(".footer__fixed");

    if (window.scrollY > 300) {
        footerFixed.classList.add("up");
    } else {
        footerFixed.classList.remove("up");
    }
});
