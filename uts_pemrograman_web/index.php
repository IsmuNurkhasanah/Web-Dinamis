<!doctype html>
<html lang="en">

<head>
  <link rel="icon" href="assets/img/Code.jpeg" type="image/x-icon">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/DataTables/datatables.css">

  <title>UTS Pemrograman Web</title>
</head>

<body>
  <header class="text-center p-3">
  <img src="assets/img/logo.png" alt="logo" width="100" height="75">
    <h2>Website Dinamis Ulangan Tengah Semester</h2>
    <h6>Teknik Informatika - Universitas Pelita Bangsa</h6>
  </header>

  <?php include "includes/navbar.php" ?>

  <div class="container mt-3">
    <?php include "content.php" ?>
  </div>

  <footer>
    <div class="p-3 mb-2 bg-dark text-light text-center mt-5">
      Pemrograman Web 1 @ <?= date("Y") ?>
    </div>
  </footer>

  <script src="assets/jquery/jquery-3.7.1.min.js"></script>
  <script src="assets/DataTables/datatables.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script>
    new DataTable('#example');
  </script>
</body>

</html>