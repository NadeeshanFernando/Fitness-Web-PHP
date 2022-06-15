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

<style>
  .grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 20px;
    align-items: center;
    justify-items: center;
  }

  .grid img {
    border: 1px solid #ccc;
    box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
    max-width: 100%;
  }
</style>

<body>
  <!-- ***** home navigation bar ***** -->
  <div>
    <?php include('../Customer/navigation.php'); ?>
  </div>

  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner" id="top">
    <!-- home page video -->
    <video autoplay muted loop id="bg-video">
      <source src="assets/images/video1.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="caption">
        <h6></h6>
        <h2>What hurts today makes you <em>stronger</em> tomorrow</h2>
        <?php
        if ($result['usertype'] != 'Customer') {
        ?>
          <div class="main-button">
            <a href="../login/login.php">Login</a>
            <a href="../Shop/seller.php">Seller Sign up</a>
            <a href="../Customer/customer.php">Customer Sign up </a>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

  <!-- ***** Cars Starts ***** -->
  <section class="section" id="trainers">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Our <em>Achievements</em></h2>
            <img src="assets/images/line-dec.png" alt="" />
            <p>
              You can have RESULTS or EXCUSES, not both
            </p>
          </div>
        </div>
      </div>

      <!-- Achievements -->
      <div class="grid">


        <img src="" alt="Avatar" class="image">
        <div class="overlay">
          <div class="text">“No pain, no gain. Shut up and train.”</div>
        </div>

        <img src="assets/images/achieve/F2.png" alt="Avatar" class="image">
        <div class="overlay">
          <div class="text">“Your body can stand almost anything. It’s your mind that you have to convince.”</div>
        </div>

        <img src="assets/images/achieve/M1.jpg" alt="Avatar" class="image">
        <div class="overlay">
          <div class="text">“Train insane or remain the same.”</div>
        </div>

        <img src="assets/images/achieve/M2.png" alt="Avatar" class="image">
        <div class="overlay">
          <div class="text">“Push yourself because no one else is going to do it for you.”</div>
        </div>

        <img src="assets/images/achieve/F3.jpg" alt="Avatar" class="image">
        <div class="overlay">
          <div class="text">“Motivation is what gets you started. Habit is what keeps you going.”</div>
        </div>

        <img src="assets/images/achieve/F1.png" alt="Avatar" class="image">
        <div class="overlay">
          <div class="text">“Exercise is like telling your body “you’re gonna hate me for this, but you’ll thank me later.”</div>
        </div>

        <img src="assets/images/achieve/M3.jpeg" alt="Avatar" class="image">
        <div class="overlay">
          <div class="text">“First they will laugh. Then they will copy. Don’t give up.”</div>
        </div>

        <img src="" alt="Avatar" class="image">
        <div class="overlay">
          <div class="text"></div>
        </div>

      </div>


    </div>
  </section>

  <!-- ***** Footer Start ***** -->
  <div>
    <?php include('../Home/footer.php'); ?>
  </div>

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