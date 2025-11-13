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

