var slaiderItem = document.getElementsByClassName("slaider-item");

var shift = 0;
if (document.documentElement.clientWidth > 450) {
	var width = 73.9375;
} else {
	var width = 40;
}
var minShift = 0;
var maxShift = 5 * width;

function SaveShift() {
	for (let i = 0; i < slaiderItem.length; i++) {
		slaiderItem[i].style.transform = `translate(${-shift}rem, 0)`;
	}
}
function Prev() {
	shift -= width;
	if (shift < minShift) {
		shift = maxShift;
	}
	SaveShift();
}
function Next() {
	shift += width;
	if (shift > maxShift) {
		shift = minShift;
	}
	SaveShift();
}
