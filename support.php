<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Support - HOPE FOUNDATION</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      background: url("support-bg.jpg") no-repeat center center fixed;
      background-size: cover;
      color: #2d2d2d;
    }

    .navbar {
      background: linear-gradient(90deg,  #8b5df5, #2575fc);
    }

    .navbar .navbar-brand {
      margin-left: 10px;
      color: #fff !important;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-weight: bold;
      font-size: larger;
    }

    .Blood {
      min-height: 40px;
      width: 40px;
      margin-right: 10px;
    }

    /* Hero */
    .hero {
      background: rgba(255, 255, 255, 0.9);
      border-radius: 15px;
      padding: 40px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }
    .hero h1 {
      color: #8b5df5;
      font-weight: 700;
    }

    /* Info Section */
    .info-section {
      margin-top: 60px;
    }

    .info-img {
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
      max-width: 100%;
      height: 300px;
      margin-left: 90px;
    }
    .support-text
    {
      padding-left: 150px;
    }
    /* Cards */
    .support-card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .support-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    .support-card h4 {
      color: #2575fc;
      font-weight: 600;
    }

    /* Footer */
    footer {
      background: linear-gradient(90deg, #8b5df5, #2575fc);
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow">
  <div class="container">
    <a class="navbar-brand" href="Hope.php"> 
      <img class="Blood" src="blood.png" alt="icon"> HOPE FOUNDATION
    </a>
  </div>
</nav>

<!-- Hero -->
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="hero text-center">
        <h1>Support Our Mission</h1>
        <p class="lead">Your contribution helps save lives and bring hope to those in need. Together, we can make a difference.</p>
      </div>
    </div>
  </div>
</div>

<!-- Info Section -->
<div class="container info-section">
  <div class="row align-items-center">
    <div class="col-md-6 support-text">
      <h2 class="text-primary fw-bold  mb-4">Why Support Us?</h2>
      <p>Every donation, every volunteer hour, and every awareness effort brings us closer to a world where no one suffers due to lack of blood supply. With your help, we can expand our reach and save countless lives.</p>
      <p><strong>Support means hope, and hope saves lives.</strong></p>
    </div>
    <div class="col-md-6">
      <img src="support.avif" alt="Support Image" class="info-img">
    </div>
  </div>
</div>

<!-- Support Options -->
<div class="container my-5">
  <div class="row g-4 text-center">
    <div class="col-md-4">
      <div class="card support-card h-100 p-4">
        <h4>💖 Donate</h4>
        <p>Your financial contributions help us organize donation camps, medical checkups, and awareness drives.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card support-card h-100 p-4">
        <h4>🤝 Volunteer</h4>
        <p>Join our dedicated team of volunteers to spread awareness and assist during blood donation events.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card support-card h-100 p-4">
        <h4>📢 Spread Awareness</h4>
        <p>Share our mission with your friends, family, and community to help us reach more people in need.</p>
      </div>
    </div>
  </div>
</div>

<!-- CTA -->
<div class="container text-center my-5">
  <a href="contact.php" class="btn btn-lg text-white" style="background: linear-gradient(90deg, #8b5df5, #2575fc); border-radius: 30px; padding: 12px 30px;">Contact Us for Support</a>
</div>

<!-- Footer -->
<footer class="text-white text-center py-3">
  © 2025 HOPE FOUNDATION
</footer>

</body>
</html>
