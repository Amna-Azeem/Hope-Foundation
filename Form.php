<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Donation Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="style2.css">
</head>

<body>

<div class="container outer mt-5">
  <div class=" card shadow p-4">
    <h2 class="mb-4 text-center">Donation Form</h2>
    <form action="save.php" method="post">
      
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Age</label>
        <input type="number" class="form-control" name="age" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Blood Group</label>
        <select class="form-control" name="blood_group" required>
          <option value="">Select</option>
          <option>A+</option>
          <option>A-</option>
          <option>B+</option>
          <option>B-</option>
          <option>AB+</option>
          <option>AB-</option>
          <option>O+</option>
          <option>O-</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Country</label>
        <input type="text" class="form-control" name="country" required>
      </div>

      <button type="submit" class="btn submit-btn w-100">Submit</button>
    </form>
  </div>
</div>

</body>
</html>
