const testimonialSlides = document.querySelectorAll('.testimonial-slide');
let currentSlide = 0;

function showSlide(index) {
  testimonialSlides.forEach((slide, i) => {
    if (i === index) {
      slide.classList.add('active');
    } else {
      slide.classList.remove('active');
    }
  });
}

function nextSlide() {
  currentSlide++;
  if (currentSlide >= testimonialSlides.length) {
    currentSlide = 0;
  }
  showSlide(currentSlide);
}

setInterval(nextSlide, 5000); // Change the duration as desired

showSlide(currentSlide);
