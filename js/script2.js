
// slide script for next and previous
let currentSlide = 0;
const slides = document.querySelectorAll('.question-slide');
const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');
const submitBtn = document.getElementById('submitBtn');

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.style.display = i === index ? 'block' : 'none';
  });
  prevBtn.style.display = index === 0 ? 'none' : 'inline-block';
  nextBtn.style.display = index === slides.length - 1 ? 'none' : 'inline-block';
  submitBtn.style.display = index === slides.length - 1 ? 'inline-block' : 'none';
}

function showNext() {
  if (currentSlide < slides.length - 1) {
    currentSlide++;
    showSlide(currentSlide);
  }
}

function showPrev() {
  if (currentSlide > 0) {
    currentSlide--;
    showSlide(currentSlide);
  }
}

// Initialize the form with the first slide visible
showSlide(currentSlide);
