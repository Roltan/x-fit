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
	if (window.scrollY > 300) {
		var button = document.getElementById("scrollToTopButton");
		if (!button) {
			var button = (document.body.innerHTML += '<button id="scrollToTopButton" onclick="ScrollToTop()" class="ScrollBTN submit-form">Наверх</button>');
		}
	} else {
		button = document.getElementById("scrollToTopButton");
		if (button) {
			button.remove();
		}
	}
});
