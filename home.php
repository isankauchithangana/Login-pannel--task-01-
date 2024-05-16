<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home Page</title>
</head>
<body>
<nav class="navbar">
  <div class="navbar-brand">
    <img src="images/logo.png" alt="Logo">
  </div>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">AboutUs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">ContactUs</a>
    </li>
  </ul>
  <div class="profile">
    <a href="php/logout.php" class="nav-link">Logout</a>
    <div class="profile-img">
      <a href="editprofile.php"><img src="images/profile.png" alt="Profile"></a>
    </div>
  </div>
</nav>

<div class="container edit-container">
        <header style="text-align: center; ">welcome, <?php echo $_SESSION['firstname']; ?></header>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
