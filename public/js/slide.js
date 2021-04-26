
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


// $(document).ready(function () {
//   $('#navbar ul li a').click(function(e) {

//       $('#navbar ul li.active').removeClass('active');

//       var $parent = $(this).parent();
//       $parent.addClass('active');
//       e.preventDefault();
//   });
// });

$(function(){
  $('#navbar li a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
  $('.#navbar li a').click(function(){
      $(this).parent().addClass('active').siblings().removeClass('active')    
  })
})