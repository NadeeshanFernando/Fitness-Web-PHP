<?php
session_start();
error_reporting(0);
include('../Connection/connection.php');
$id = $_GET['id'];
if ($id == 0) {
    header('location: ../login/login.php');
} else {
    $sql = "SELECT * FROM shops WHERE id='$id' ";
    $f = mysqli_fetch_assoc(mysqli_query($con, $sql));
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

    <link rel="stylesheet" href="../Home/assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

</head>

<body>
    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <div>
        <?php include('../Shop/navigation.php'); ?>
    </div>



    <!-- ***** Header Area End ***** -->

    <br />
    <br />

    <section class="section">
        <div class="container">
            <div class="
            row
            align-items-center
            justify-content-lg-start justify-content-center
          ">
                <div class="col-xl-6 col-md-5 col-md-10" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                    <div class="content-img position-relative z-index-1">
                        <img src="./assets1/images/<?php echo $f['image'] ?>" alt="" class="w-100" />
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-lg-7 col-md-9" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                    <div class="content section-heading-5">
                        <ul>
                            <li> Description: <?php echo $f['description'] ?>
                            <li> Phone: <?php echo $f['telephone'] ?></li>
                            <li> Email: <?php echo $f['email'] ?></li>
                            <li> Location: <?php echo $f['address'] ?></li>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Footer Start ***** -->
    <br />
    <hr />

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