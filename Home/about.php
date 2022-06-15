<?php
session_start();
error_reporting(0);
include('../Connection/connection.php');
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id='$id' ";
$RES = mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($RES);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

  <title>X-TEAM-About US</title>

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

  <div>
    <?php include('../Customer/navigation.php'); ?>
  </div>
  <!-- ***** Header Area End ***** -->

  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/about.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br>
            <br>
            <h2><em>About Us</em></h2>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ***** Our Classes Start ***** -->
  <section class="section" id="our-classes">
    <div class="container">
      <br>
      <br>
      <br>
      <div class="row" id="tabs">
        <div class="col-lg-4">
          <ul>
            <li><a href='#tabs-1'><i class="fa fa-soccer-ball-o"></i> The Best Routine</a></li>
            <li><a href='#tabs-2'><i class="fa fa-briefcase"></i> 5 Day Workout</a></a></li>
            <li><a href='#tabs-3'><i class="fa fa-heart"></i> Workout Every Day?</a></a></li>
          </ul>
        </div>
        <div class="col-lg-8">
          <section class='tabs-content'>
            <article id='tabs-1'>
              <img src="assets/images/ex.jpg" alt="">
              <h4>What is the best routine for the gym?</h4>

              <p>The best routine for the gym is one that is flexible with your schedule and you actually enjoy. These two factors will contribute greatly to your ability to be consistent with your workouts. Consistency with your workouts and progressing as you perform them is what will lead to results.</p>

              <p>That being said, there are plenty of great workout program styles one can do to build muscle, lose fat, or build strength. The body composition goals (building muscle and losing fat) will be accomplished through similar style workouts combined with differing nutritional principles, while those looking for strength gains may need to focus on programs that are centered on the idea of specificity.</p>

              <p>To sum that statement up, if you want to change your body composition, you’ll want to train with volume. If you want to build strength, you’ll want a program that is strength specific for the lifts you want to improve such as the bench press, squat and deadlift.</p>
            </article>
            <article id='tabs-2'>
              <img src="assets/images/ex2.jpg" alt="">
              <h4>What is a good 5 day workout routine?</h4>
              <p>A good 5 day workout routine would be an upper/lower workout or push/pull/legs workout performed in a rotating training day fashion. You could also do an upper/lower or push/pull split with a “weaknesses” day as your 5th training day in the week.</p>
              <p>I’d recommend avoiding the traditional body part split if optimizing your training is your goal. However, they can still be useful if you’re simply working out for pure enjoyment purposes.</p>

            </article>
            <article id='tabs-3'>
              <img src="assets/images/about-image-3-940x460.jpg" alt="">
              <h4>Is it better to do a full body workout every day?</h4>
              <p>Certain advanced bodybuilders can benefit from full body workouts 6 times per week. However, it’s not a common practice.</p>
              <p>Performing full body workouts every day might not be harmful depending on how you structure your training and the intensity in which you train with from session to session.</p>
              <p>For most though, it would be recommended to perform full body workouts 3-4 times per week. This would be more optimal for the larger portion of recreational lifters.</p>
            </article>
          </section>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Our Classes End ***** -->

  <!-- ***** Call to Action Start ***** -->
  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <h2>Send us a <em>message</em></h2>
            <div class="main-button">
              <a href="./contact.php">Contact us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Call to Action End ***** -->

  <!-- ***** Footer Start ***** -->
  <div>
    <?php include('../Home/footer.php'); ?>
  </div>

  <!-- jQuery -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="assets/js/scrollreveal.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imgfix.min.js"></script>
  <script src="assets/js/mixitup.js"></script>
  <script src="assets/js/accordions.js"></script>

  <!-- Global Init -->
  <script src="assets/js/custom.js"></script>

</body>

</html>