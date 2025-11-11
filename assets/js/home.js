function toggleAboutDescription() {
    const description = document.getElementById('about-description');
    const btn = document.querySelector('.learn-more-btn');
    const btnText = btn.querySelector('.btn-text');
    const icon = btn.querySelector('i');
    
    description.classList.toggle('expanded');
    
    if (description.classList.contains('expanded')) {
      btnText.textContent = 'Show Less';
      icon.classList.remove('fa-chevron-down');
      icon.classList.add('fa-chevron-up');
    } else {
      btnText.textContent = 'Learn More';
      icon.classList.remove('fa-chevron-up');
      icon.classList.add('fa-chevron-down');
    }
  }

  // Carousel functionality
function initCarousel() {
  const carousel = document.querySelector('.carousel');
  if (!carousel) return;

  const slides = carousel.querySelectorAll('.carousel-slide');
  const dots = carousel.querySelectorAll('.dot');
  let currentSlide = 0;
  let autoplayInterval;

  function showSlide(index) {
    slides.forEach(slide => {
      slide.classList.remove('active');
      slide.style.transform = '';
    });
    dots.forEach(dot => {
      dot.classList.remove('active');
      dot.setAttribute('aria-selected', 'false');
    });

    slides[index].classList.add('active');
    dots[index].classList.add('active');
    dots[index].setAttribute('aria-selected', 'true');
    currentSlide = index;
  }

  function nextSlide() {
    showSlide((currentSlide + 1) % slides.length);
  }

  function prevSlide() {
    showSlide((currentSlide - 1 + slides.length) % slides.length);
  }

  function startAutoplay() {
    stopAutoplay();
    autoplayInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
  }

  function stopAutoplay() {
    if (autoplayInterval) {
      clearInterval(autoplayInterval);
    }
  }
