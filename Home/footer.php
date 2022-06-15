<?php
error_reporting(0);
session_start();

include '../Connection/connection.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

  <title>X-TEAM</title>

  <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.css" />

  <link rel="stylesheet" href="./assets/css/style.css" />
</head>


<body>

  <footer class="footer-distributed">

    <div class="footer-left">

      <h3>X-TEAM<span></span></h3>

    </div>

    <div class="footer-center">

      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>your address,</span> your address</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p>contact number</p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@company.com">email address</a></p>
      </div>

    </div>

    <div class="footer-right">



      <div class="footer-icons">

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>


      </div>

    </div>

  </footer>

  <!-- jQuery -->
  <script src="./assets/js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="./assets/js/popper.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="./assets/js/scrollreveal.min.js"></script>
  <script src="./assets/js/waypoints.min.js"></script>
  <script src="./assets/js/jquery.counterup.min.js"></script>
  <script src="./assets/js/imgfix.min.js"></script>
  <script src="./assets/js/mixitup.js"></script>
  <script src="./assets/js/accordions.js"></script>

  <!-- Global Init -->
  <script src="./assets/js/custom.js"></script>
</body>

</html>