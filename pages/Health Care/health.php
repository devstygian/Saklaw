
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Saklaw</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f02a36f28e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../assets/css/health.css">
   <script src="../Saklaw/assets/js/home.js"></script>
</head>
<body>
  <header class="site-header">
    <div class="wrap header-inner">
      <div class="logo">
        <img src="https://imgs.search.brave.com/ln_ju330B84pQ05S5Y941vpBrCrGWaJqRw5jIcPPf-I/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy9h/L2EzL1BHUF9OZXdf/T2ZmaWNpYWxfU2Vh/bC5wbmc" alt="Barangay Seal" />
        <div class="logo-text">
          <strong>BARANGAY</strong>
          <span class="sub">Digital Citizen Portal</span>
        </div>
      </div>

      <nav class="main-nav" aria-label="Main navigation">
        <a href="../../home.php">Home</a>
        <a href="../../home.php #services">Services</a>
        <a href="../../home.php #announcements">Announcements</a>
        <a href="../../home.php #about">About</a>
      </nav>
    </div>
  </header>

  <div class="sidebar">
    <h2>Health Care Services Hotline</h2>
    <h3>Fire Fighters:</h3>
    <ul>
      <li><i class="fa-solid fa-phone"></i> Fire Emergency: 911</li>
      <li><i class="fa-solid fa-phone"></i> Local Fire Department: (123) 456-7890</li>
    </ul>
    <h3>Hospital:</h3>
    <ul>
      <li><i class="fa-solid fa-phone"></i> Ambulance Service: 911</li>
      <li><i class="fa-solid fa-phone"></i> Local Hospital: (098) 765-4321</li>
    </ul>
    <h3>Police:</h3>
    <ul>
      <li><i class="fa-solid fa-phone"></i> Police Department: 1-800-222-1222</li>   
    <ul>
  </div>

  <main class="main">
  <section id="health-centers" class="section health-section">
    <h2 class="section-title">Hospitals and Clinics in the Barangay</h2>

    <div class="health-list">
      <div class="health-item">
        <h3>Barangay Health Center 1</h3>
        <p>Address: 123 Main Street</p>
        <p>Contact: (0917) 123-4567</p>
      </div>

      <div class="health-item">
        <h3>Ace Hospital</h3>
        <p>Address: 456 Health Avenue</p>
        <p>Contact: (0918) 765-4321</p>
      </div>

      <div class="health-item">
        <h3>Vet Clinic</h3>
        <p>Address: 321 Care Street</p>
        <p>Contact: (0921) 333-4444</p>
      </div>
    </div>
  </section>
</main>

<style>
  .main {
  margin-left: 300px; 
  padding: 20px;
  background-color: var(--background);
  min-height: 100vh;
  margin-top: -40%; 
  }
.health-list {
  display: flex;
  flex-direction: column; 
  gap: var(--gap);
}

.health-item {
  background: var(--card);
  padding: 15px 20px;
  width: 80%;
  border-radius: var(--radius);
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s, box-shadow 0.3s;
}

.health-item h3 {
  margin-top: 0;
  margin-bottom: 8px;
  color: var(--primary);
}

.health-item p {
  margin: 4px 0;
  color: var(--text);
  font-size: 14px;
}

.health-item:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}
</style>


  </body>
</html>