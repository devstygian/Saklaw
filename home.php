
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Saklaw</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f02a36f28e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./assets/css/home.css">
  <script src="../Saklaw/assets/js/home.js"></script>
</head>
<body>
  <header class="site-header">
    <div class="wrap header-inner">
      <div class="logo">
        <img src="https://imgs.search.brave.com/ln_ju330B84pQ05S5Y941vpBrCrGWaJqRw5jIcPPf-I/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy9h/L2EzL1BHUF9OZXdf/T2ZmaWNpYWxfU2Vh/bC5wbmc" alt="Barangay Seal" />
        <div class="logo-text">
          <strong>Barangay Profiling </strong>&
          <span class="sub">Household Information Management System</span>
        </div>
      </div>

      <nav class="main-nav" aria-label="Main navigation">
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#announcements">Announcements</a>
        <a href="#about">About</a>
        <a class="btn-login" href="../Saklaw/pages/auth/login.php" id="Cliklogin"><i class="fa-solid fa-user"></i></a>
      </nav>
    </div>
  </header>

  <main id="home">
    <section class="hero">
      <div class="hero-overlay"></div>
      <div class="wrap hero-inner">
        <h1>Empowering Citizens<br>Through Digital Services</h1>
        <p class="lead">Request documents, file complaints, apply for permits, and get barangay updates — all in one portal.</p>
        <a class="btn-primary" href="#services">Access Services</a>
      </div>
    </section>

    <!--Services-->
    <section id="services" class="section services-section">
      <div class="wrap">
        <h2 class="section-title">Services</h2>

        <div class="cards">

          <a href="../Saklaw/pages/Barangay Clearance/clearance.php" class="card">
            <div class="icon"><i class="fa-solid fa-paperclip"></i></div>
            <h3>Barangay Clearance</h3>
            <p>Request official barangay clearances quickly.</p>
          </a>

           <a href="#" class="card"  id="BC">
            <div class="icon"><i class="fa-solid fa-briefcase"></i></div>
            <h3>BUSINESS CLEARANCE</h3> 
            <p>Request Business Clearance Now!</p>
          </a>

          <a href="#" class="card" id="sed">
            <div class="icon"><i class="fa-solid fa-address-card"></i></div>
            <h3>SEDULA</h3>
            <p>Request to get Sedula</p>
          </a>

          <a href="#" class="card" id="CI">
            <div class="icon"><i class="fa-solid fa-chart-simple"></i></div>
            <h3>CERTIFICATE OF INDIGENCY</h3>
            <p>Need proof of financial hardship? requests Now!</p>
          </a>

          <a href="#" class="card" id="donate">
            <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
            <h3>Charity</h3>
            <p>Help The One Who In Needs.</p>
          </a>
          
          <a href="../Saklaw/pages/Health Care/health.php" class="card">
              <div class="icon"><i class="fa-solid fa-heart-circle-bolt"></i></div>
              <h3>Health Care</h3>
              <p>See the nearest Healthcare at your area.</p>
          </a>

          <a href="#" class="card" id="educ">
            <div class="icon"><i class="fa-solid fa-school-flag"></i></div>
            <h3>Education</h3>
            <p>See the all the available offer of the Barangay.</p>
          </a>

          <a href="../Saklaw/pages/Complaints/complaints.php" class="card">
            <div class="icon"><i class="fa-solid fa-circle-exclamation"></i></div>
            <h3>Complaints</h3>
            <p>File complaints or incident reports confidentially.</p>
          </a>

           <a href="#" class="card" id="click">
            <div class="icon"><i class="fa-solid fa-clipboard-list"></i></div>
            <h3>Survey</h3>
            <p>See the latest Barangay click.</p>
          </a>
        </div>
      </div>
    </section>
<dialog id="comingSoon" class="modal" aria-labelledby="comingSoon-title">
  <div class="modal-dialog"> 
    <button class="modal-close" aria-label="Close">×</button> 
    <h3 id="comingSoon-title"><i class="fa-solid fa-bullhorn">
    </i> Coming Soon</h3> 
    <p>Stay tuned for updates!</p> 
  </div> 
</dialog>
<<style>
    .modal-content {
      border: none;
      border-radius: 10px;
      padding: 25px 30px;
      background: #dbdbdaff;
      text-align: center;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.25);
      max-width: 400px;
      width: 100%;
    }
    dialog::backdrop {
      background: rgba(0, 0, 0, 0.5);
    }
    .modal-close {  
      padding: 8px
      color: #0a0a0aff;
      cursor: pointer;
      font-size: 0.95rem;
      transition: background 0.2s ease;
    }
</style>

<script>
  const modals = document.querySelectorAll("dialog");

  modals.forEach(modal => {
    // x button
    modal.querySelectorAll(".modal-close").forEach(btn => {
      btn.addEventListener("click", () => {
        if (typeof modal.close === "function") modal.close();
        else modal.classList.remove("open");
      });
    });

    // overlay closed
    modal.addEventListener("click", (e) => {
      const dialogBox = modal.querySelector(".modal-content");
      if (!dialogBox.contains(e.target)) {
        if (typeof modal.close === "function") modal.close();
        else modal.classList.remove("open");
      }
    });
  });

  // ESC key
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      modals.forEach(m => {
        if (m.open || m.classList.contains("open")) {
          if (typeof m.close === "function") m.close();
          else m.classList.remove("open");
        }
      });
    }
  });

  // Trigger open for multiple buttons/links
  const comingSoon = document.getElementById("comingSoon");
  const triggerIDs = ["donate", "educ", "click" , "sed" , "CI" ,"BC"]; // Example IDs

  triggerIDs.forEach(id => {
    const link = document.getElementById(id);
    if (link) {
      link.addEventListener("click", e => {
        e.preventDefault();
        if (typeof comingSoon.showModal === "function") comingSoon.showModal();
        else comingSoon.classList.add("open");
      });
    }
  });
</script>

    <!--Announcements-->
  <section id="announcements" class="section announcements-section">
      <div class="wrap">
        <h2 class="section-title">Announcements</h2>
        <div class="carousel">
          <div class="carousel-inner">
            <a class="carousel-slide active">
              <h4>Barangay Clean-Up Drive</h4>
              <p>Our scheduled clean-up drive will be on September 20. Join us at 7:00 AM at the community center.</p>
              <time datetime="2025-09-20">Sep 20, 2025</time>
            </a>

            <a class="carousel-slide">
              <h4>Community Center Renovation</h4>
              <p>The barangay community center will start renovations on October 1. Services will be temporarily relocated.</p>
              <time datetime="2025-10-01">Oct 1, 2025</time>
            </a>

            <a class="carousel-slide">
              <h4>Vaccination Drive</h4>
              <p>Free vaccination for children under 5 years old. Visit the health center from October 15-20.</p>
              <time datetime="2025-10-15">Oct 15, 2025</time>
            </a>
          </div>

          <div class="carousel-dots" role="tablist" aria-label="Carousel navigation">
            <button role="tab" aria-selected="true" aria-label="Slide 1" class="dot active"></button>
            <button role="tab" aria-selected="false" aria-label="Slide 2" class="dot"></button>
            <button role="tab" aria-selected="false" aria-label="Slide 3" class="dot"></button>
          </div>
        </div>
      </div>
    </section>
    <<script>
      const slides = document.querySelectorAll('.carousel-slide');
      const dots = document.querySelectorAll('.dot');
      let current = 0;

      function showSlide(index) {
        slides.forEach((slide, i) => slide.classList.toggle('active', i === index));
        dots.forEach((dot, i) => dot.classList.toggle('active', i === index));
        current = index;
      }

      // Auto-rotate every 5 seconds
      setInterval(() => {
        showSlide((current + 1) % slides.length);
      }, 5000);

      // Dot click navigation
      dots.forEach((dot, i) => dot.addEventListener('click', () => showSlide(i)));
    </script>

<!--About-->
    <section id="about" class="section about-section">
      <div class="wrap">
        <h2 class="section-title">About</h2>
        <div class="about-container">
          <div class="about-content">
            <div class="about-card">
              <div class="about-icon">
                <i class="fa-solid fa-globe"></i>
              </div>
              <h3>Digital Access</h3>
              <p>Access barangay services anytime, anywhere through our secure online platform.</p>
            </div>
            
            <div class="about-card">
              <div class="about-icon">
                <i class="fa-solid fa-handshake"></i>
              </div>
              <h3>Community First</h3>
              <p>Bringing governance closer to the people through accessible digital solutions.</p>
            </div>

            <div class="about-card">
              <div class="about-icon">
                <i class="fa-solid fa-shield-halved"></i>
              </div>
              <h3>Secure & Efficient</h3>
              <p>Safe, streamlined processes for all your documentary and service needs.</p>
            </div>
          </div>
          
          <div class="about-actions">
            <button class="btn-primary learn-more-btn" onclick="toggleAboutDescription()">
              <span class="btn-text">Learn More</span>
              <i class="fa-solid fa-chevron-down"></i>
            </button>
          </div>

          <div id="about-description" class="about-description">
            <div class="about-description-content">
              <h3>About Barangay Profiling and Household Information Management System</h3>
              <p>Our group aims to create an innovative system that will not only benefit one or a few
                  people but everyone, including all areas covered and reachable by the project we will
                  implement. The project we will undertake is about a system that can help and speed
                  up work and processes for everyone.
                  With this system, people can also save on transportation costs and will no longer
                  need to travel to the barangay just to process requirements for their needs because
                  the system we will create will be very helpful, not only for one person but for all
                  people who need it and want to make their document processing easier and faster.
                </p> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>   

  <footer class="footer">
 
    <div class="wrap" style="padding-top:8px;">
      <p style="text-align:center; margin:0;"> © 2025 Barangay Digital Portal | All Rights Reserve</p>
    </div>
  </footer>
  </body>
</html>