<?php
session_start();
if (isset($_SESSION["name"])) {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/template.css" />
    <link rel="stylesheet" href="./css/deduruoya.css" />
    <link rel="stylesheet" href="./css/dashboard.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/f65110973c.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <header class="header" id="blurredDiv">
      <nav>
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <i class="fa fa-bars"></i>
        </label>
        <a href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
        <a href="#news">
          <?php
          echo "<i class='fa-solid fa-circle-user'></i>" . $_SESSION["name"] . "";
          ?>
        </a>
      </nav>
    </header>

    <div class="main">
      <!--Start Menu Bar Section -->
      <div class="menu" id="myDiv">
        <ul>
          <li id="logo">
            <a href="#"><i class="fa-solid fa-seedling"></i>Sri Lanka
              Energies</a>
          </li>
          <hr />
          <li>
            <a href="./dboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
          </li>
          <li>
            <a href="#news"><i class="fa fa-wrench" aria-hidden="true"></i>Meter
              Manufacturing</a>
          </li>
          <li>
            <a href="#about"><i class="fa fa-retweet" aria-hidden="true"></i>Aluminum
              Recycling</a>
          </li>
          <li>
            <a href="./deduruoya.php"><i class="fa fa-university" aria-hidden="true"></i>Deduruoya
              Plant</a>
          </li>
          <li>
            <a href="#about"><i class="fa fa-university" aria-hidden="true"></i>Kumbalgamuwa
              Plant</a>
          </li>
          <li>
            <a href="#about"><i class="fa fa-university" aria-hidden="true"></i>Biomed
              Plant</a>
          </li>
          <li>
            <a href="#about"><i class="fa fa-university" aria-hidden="true"></i>Sithawaka-I</a>
          </li>
          <li>
            <a href="#about"><i class="fa fa-university" aria-hidden="true"></i>Sithawaka-II</a>
          </li>
          <li>
            <a href="./generaterevenue.php"><i class="fa fa-spinner" aria-hidden="true"></i>Generaterevenue</a>
          </li>
          <?php
          if ($_SESSION['role'] == 'admin') {
            echo '<li><a href="./employee.php"><i class="fa-solid fa-user-tie"></i>Empolyee</a></li>';
          }
          ?>


        </ul>
      </div>
      <!--End Menu Bar Section -->
      <?php
} else {
  header("Location:./index.html");
}
?>