<?php
session_start();
error_reporting(0);
include('../Connection/connection.php');
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id='$id' ";
$RES = mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($RES);


if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $sqlcheck = "SELECT * FROM inquiries WHERE Subject='$subject' or  Message='$message' ";
  $sqlinsert = "INSERT INTO inquiries(Name, Email, Subject, Message)VALUES('$name', '$email','$subject','$message')";

  // if (mysqli_num_rows(mysqli_query($con, $sqlcheck))) {
  //   $error = "Inquire is already exist";
  // } else {
  $insertresult = mysqli_query($con, $sqlinsert);
  $msg = "Success";
  // }
}

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

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />

  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

  <div>
    <?php include('../Customer/navigation.php'); ?>
  </div>

  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/contact.jpeg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br />
            <br />
            <h2>Feel free to <em>Contact Us</em></h2>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ***** Features Item Start ***** -->
  <section class="section" id="features">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>contact <em> info</em></h2>
            <img src="assets/images/line-dec.png" alt="waves" />
          </div>
        </div>

        <div class="col-md-4">
          <div class="icon">
            <i class="fa fa-phone"></i>
          </div>

          <h5><a href="#">contact number</a></h5>

          <br />
        </div>

        <div class="col-md-4">
          <div class="icon">
            <i class="fa fa-envelope"></i>
          </div>

          <h5><a href="#">email address</a></h5>

          <br />
        </div>

        <div class="col-md-4">
          <div class="icon">
            <i class="fa fa-map-marker"></i>
          </div>

          <h5>
            <a href="#"> your address
            </a>
          </h5>

          <br />
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Features Item End ***** -->

  <!-- ***** Contact Us Area Starts ***** -->
  <section class="section" id="contact-us" style="margin-top: 0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d126697.78276954635!2d79.93095020781111!3d7.0905170560401345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x3ae2fb7a0d0561e1%3A0x2593bb6d87e82f65!2sShera%20Aerobics%2C%20No%3A%20263%2F2%20Gampaha%20Optical%20Building%2C%20Colombo%20Rd%2C%2011000!3m2!1d7.0905223!2d80.0009908!5e0!3m2!1sen!2slk!4v1644078238155!5m2!1sen!2slk" width="100%" height="600px" frameborder="0" style="border: 0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="contact-form section-bg" style="background-image: url(assets/images/contact2.png)">
            <form id="contact" method="post">
              <?php if ($error) { ?> <div class="alert alert-danger"><strong></strong><?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="alert alert-success"><strong></strong><?php echo htmlentities($msg); ?> </div><?php } ?>

              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <label for="subject">Username:</label>
                  <fieldset>
                    <input name="name" type="text" id="name" placeholder="Your Name*" required />
                  </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                  <label for="subject">Email:</label>
                  <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required />
                  </fieldset>
                </div>
                <div class="col-md-12 col-sm-12">
                  <label for="subject">Select Your Subject:</label>
                  <select name=subject id=subject>
                    <option value="Feedback">Feedback</option>
                    <option value="Counseling">Counselling</option>
                    <!-- <input name="subject" type="text" id="subject" placeholder="Subject" required /> -->
                  </select>
                </div>
                <div class="col-lg-12">
                  <label for="subject">Message:</label>
                  <fieldset>
                    <textarea name="message" rows="6" id="message" placeholder="Type here..." required></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" name="submit" id="form-submit" class="main-button">
                      Send Now
                    </button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Contact Us Area Ends ***** -->

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