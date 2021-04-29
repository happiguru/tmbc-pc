
var slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

$("#news-slider").owlCarousel({
	items : 3,
	itemsDesktop:[1199,3],
	itemsDesktopSmall:[980,2],
	itemsMobile : [600,1],
	navigation:true,
	navigationText:["",""],
	pagination:true,
	autoPlay:true
});

$("#testimonial-slider").owlCarousel({
  items:1,
  itemsDesktop:[1000,1],
  itemsDesktopSmall:[979,1],
  itemsTablet:[768,1],
  pagination:true,
  navigation:false,
  navigationText:["",""],
  slideSpeed:1000,
  singleItem:true,
  autoPlay:true
});