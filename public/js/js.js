//Scrolled Navbar
window.addEventListener('scroll', function () {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

//BacttoTop Btn
// Get the button element
const backToTopBtn = document.getElementById("backToTopBtn");

// Listen for scroll events to show or hide the button
window.addEventListener("scroll", () => {
  // Show button if scrolled down more than 300px, otherwise hide it
  if (window.scrollY > 300) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
});

// Smoothly scroll back to the top when clicked
backToTopBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth" // Enables the smooth scrolling animation
  });
});



//Swiper Js
var swiper = new Swiper(".card_slider", {
    slidesPerView: "auto",
    spaceBetween: 30,
    loop: true,

    speed: 6500,

    allowTouchMove: false,

    autoplay: {
        delay: 0,
        disableOnInteraction: false,
        pauseOnMouseEnter: false,
    },

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    }
});