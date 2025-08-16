<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Donation Response</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #8b5df5, #2575fc);
      font-family: 'Poppins', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .box {
      background: #fff;
      padding: 40px;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    }
    h2 {
      color: #8b5df5;
      font-weight: bold;
    }
    a {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background: #8b5df5;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      transition: 0.3s;
    }
    a:hover {
      background: #2575fc;
    }
  </style>
</head>
<body>
  <div class="box">

<?php
// Database connection settings
$servername = "localhost";
$username = "root";   // default in XAMPP
$password = "";       // default in XAMPP
$dbname = "donation_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$age = $_POST['age'];
$blood_group = $_POST['blood_group'];
$country = $_POST['country'];

// Insert into database
$sql = "INSERT INTO donors (name, age, blood_group, country) 
        VALUES ('$name', '$age', '$blood_group', '$country')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Data saved successfully!</h2>";
    echo "<a href='form.php'>Go back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
  </div>
</body>
</html>
