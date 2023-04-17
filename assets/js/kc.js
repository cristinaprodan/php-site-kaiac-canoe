let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
	showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n) {
	let i;
	let slides = document.getElementsByClassName("mySlides");
	let dots = document.getElementsByClassName("dot");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
}


	function initMap() {
	// The location of Uluru
	const uluru = { lat: 44.31503951941943, lng: 23.83783833734021 };
	// The map.js, centered at Uluru
	const map = new google.maps.Map(document.getElementById("map"), {
	zoom: 10,
	center: uluru,
});
	// The marker, positioned at Uluru
	const marker = new google.maps.Marker({
	position: uluru,
	map: map,
});
}





