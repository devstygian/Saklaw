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
// Modal close handling (click overlay or close button, Esc key) with dialog API fallback
    function closeModal(modal){
      if (!modal) return;
      if (typeof modal.close === 'function') modal.close();
      else modal.classList.remove('open');
    }

    // Open the login modal when clicking the login button
document.querySelector('.btn-login')?.addEventListener('click', function(e) {
    e.preventDefault(); // prevent default anchor jump
    const modal = document.getElementById('login');
    if (!modal) return;

    // Use dialog API if available
    if (typeof modal.showModal === 'function') {
        modal.showModal();
    } else {
        // Fallback for browsers without <dialog>
        modal.classList.add('open');
    }
});

    document.addEventListener('keydown', function(e){
      if (e.key === 'Escape'){
        const modal = document.getElementById('login');
        // If using class-based fallback, check class; if dialog, close regardless
        if (modal && (modal.classList.contains('open') || typeof modal.close === 'function')) closeModal(modal);
      }
    });
      // Event listeners
      dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
          showSlide(index);
          stopAutoplay();
        });
      });

      carousel.addEventListener('mouseenter', stopAutoplay);
      carousel.addEventListener('mouseleave', startAutoplay);

      // Initialize
      showSlide(0);
      startAutoplay();
    }

    // Initialize carousel when DOM is loaded
    document.addEventListener('DOMContentLoaded', initCarousel);

    // Smooth scroll for anchor links, with special handling for the login modal
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click', function(e){
        const id = this.getAttribute('href');

        // If this is the login link, open native dialog if available, else fallback to class toggle
        if (id === '#login'){
          e.preventDefault();
          const modal = document.getElementById('login');
          if (modal) {
            if (typeof modal.showModal === 'function') modal.showModal();
            else modal.classList.add('open');
          }
          return;
        }

        if (id.length>1) {
          e.preventDefault();
          const el = document.querySelector(id);
          if (el) el.scrollIntoView({behavior:'smooth', block:'start'});
        }
      });
    });

    