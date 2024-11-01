// JavaScript to handle menu toggle
const menuToggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.menu');

menuToggle.addEventListener('click', () => {
  menu.classList.toggle('active'); // Toggle the active class
});


// handle carousel
let currentIndex = 0;
const testimonials = document.querySelectorAll('.testimonial');
const totalTestimonials = testimonials.length;

// Initialize the first testimonial as active
testimonials[currentIndex].classList.add('active');

function changeSlide() {
    // Remove active class from the current testimonial
    testimonials[currentIndex].classList.remove('active');

    // Calculate new index
    currentIndex = (currentIndex + 1) % totalTestimonials;

    // Add active class to the new current testimonial
    testimonials[currentIndex].classList.add('active');

    // Move the carousel
    const carousel = document.querySelector('.carousel');
    const offset = -currentIndex * 100; // Each testimonial takes 100% of width
    carousel.style.transform = `translateX(${offset}%)`;
}

// Auto-slide every 5 seconds
setInterval(changeSlide, 5000);



// to top
function scrollToTop() {
  window.scrollTo({
      top: 0,
      behavior: 'smooth' // Smooth scroll effect
  });
}