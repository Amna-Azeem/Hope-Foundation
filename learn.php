<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Learn - HOPE FOUNDATION</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      background: url("learn4.jpg") no-repeat center center fixed;
      background-size: cover;
      color: #2d2d2d;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg,  #8b5df5, #2575fc); /* purple to blue */
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

    /* Content Box */
    .content-box {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      padding: 40px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .content-box h1 {
      color: #8b5df5;
      font-weight: 700;
    }

    /* Card Custom */
    .info-card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .info-card h3 {
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

<!-- Main Content -->
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="content-box text-center">
        <h1 class="mb-4">Learn About Blood Donation</h1>
        <p class="lead mb-5">Here are some resources to understand the importance of blood donation.</p>

        <div class="row g-4">
          <!-- Card 1 -->
          <div class="col-md-4">
            <div class="card info-card h-100 p-3">
              <div class="card-body">
                <h3>Eligibility</h3>
                <p>Most healthy individuals between 18–60 years can donate. Basic health checks are done before every donation.</p>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-md-4">
            <div class="card info-card h-100 p-3">
              <div class="card-body">
                <h3>Donation Process</h3>
                <ul class="text-start">
                  <li>Registration and basic health screening</li>
                  <li>Safe blood collection (only 8–10 minutes)</li>
                  <li>Refreshments and rest afterward</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-md-4">
            <div class="card info-card h-100 p-3">
              <div class="card-body">
                <h3>Facts</h3>
                <p>Every 2 seconds, someone in the world needs blood. Donating regularly ensures hospitals never run short.</p>
              </div>
            </div>
          </div>
        </div> <!-- row -->
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-white text-center py-3">
  © 2025 HOPE FOUNDATION
</footer>

</body>
</html>
