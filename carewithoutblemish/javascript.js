const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function nextSlide() {
  slides[currentSlide].classList.remove('active');
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].classList.add('active');
}

setInterval(nextSlide, 2000); // Change slide every 2 seconds

// select a country.........................
//Get thge video element
const video = document.getElementById('autoplay-video');

//set background color
video.style.backgroundColor = 'blue';

//hide and show contect
 
var toggleButtonAfrica = document.getElementById("toggleButtonAfrica");
var toggleButtonAsia = document.getElementById("toggleButtonAsia");
var countryListAfrica = document.getElementById("countryListAfrica");
var countryListAsia = document.getElementById("countryListAsia");

toggleButtonAfrica.addEventListener("click", function() {
  countryListAfrica.classList.toggle("show");
  countryListAsia.classList.remove("show"); // Close other section
});

toggleButtonAsia.addEventListener("click", function() {
  countryListAsia.classList.toggle("show");
  countryListAfrica.classList.remove("show"); // Close other section
});