<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Our Staff - HOPE FOUNDATION</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: url("about-bg.jpg") no-repeat center center fixed;
      background-size: cover;
      color: #333;
    }
    .navbar {
      background: linear-gradient(90deg, #8b5df5, #2575fc);
    }
    .navbar .navbar-brand { font-weight: bold; }
    .content-box {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      padding: 40px;
      margin-top: 40px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    }
    .Blood {
      min-height: 40px;
      width: 40px;
      margin-right: 10px;
    }

    h2 { color: #8b5df5; font-weight: 700; }
    footer {
      background: linear-gradient(90deg, #8b5df5, #2575fc);
      color: #fff;
    }
    .team-member { text-align: center; margin-bottom: 30px; }
    .team-member img {
      width: 120px; height: 120px; object-fit: cover;
      border-radius: 50%; margin-bottom: 10px;
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


<div class="container">
  <div class="content-box">
    <h2>Our Staff</h2>
    <div class="row">
      <div class="col-md-4 team-member">
        <img src="staff1.webp" alt="Staff">
        <h5 class="fw-bold">Emily Johnson</h5>
        <p>Operations Manager</p>
      </div>
      <div class="col-md-4 team-member">
        <img src="staff2.webp" alt="Staff">
        <h5 class="fw-bold">Michael Roberts</h5>
        <p>Program Coordinator</p>
      </div>
      <div class="col-md-4 team-member">
        <img src="staff3.jpg" alt="Staff">
        <h5 class="fw-bold">Sophia Williams</h5>
        <p>Volunteer Lead</p>
      </div>
    </div>
  </div>
</div>

<footer class="text-center py-3 mt-4">
  © 2025 HOPE FOUNDATION | All Rights Reserved
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
