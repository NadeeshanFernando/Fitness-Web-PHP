<?php
error_reporting(0);
session_start();
include '../Connection/connection.php';
$id = $_SESSION['id'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

  <title>X-TEAM</title>

  <link rel="stylesheet" type="text/css" href="../Home/assets/css/bootstrap.min.css" />
  <!-- <link rel="stylesheet" type="text/css" href="./assets1/bootstrap.min.css"> -->

  <link rel="stylesheet" type="text/css" href="../Home/assets/css/font-awesome.css" />
  <link rel="stylesheet" href="./assets1/newcss.css" />

  <link rel="stylesheet" href="../Home/assets/css/style.css" />
</head>

<body>
  <!-- ** Preloader Start ** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ** Preloader End ** -->

  <!-- ** Header Area Start ** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ** Logo Start ** -->
            <a href="../Home/" class="logo">Fitness<em>App</em></a>
            <!-- ** Logo End ** -->
            <!-- ** Menu Start ** -->
            <ul class="nav">
              <li>
                <?php echo "<a  href='../home/index.php?&id=" . $id . "'>Home</a>"; ?>
              </li>

              <li>
                <?php echo "<a    href='../Shop/allRestuarants.php?&id=" . $id . "'>Shops</a>"; ?>
              </li>
              <li>
                <?php echo "<a class='active' href='../Shop/viewpromotions.php?&id=" . $id . "'>Promotions</a>"; ?>
              </li>
              <li>
                <?php echo "<a href='../Home/about.php?&id=" . $id . "'>About US</a>"; ?>
              </li>
              <li>
                <?php echo "<a  href='../Home/contact.php?&id=" . $id . "'>Contact US</a>"; ?>
              </li>
              <!-- <ul class="nav">
            <li><a href="../Home/">Home</a></li>
              <li><a href="../Restuarant/allRestuarants.php" >Restaurants</a></li>
              <li><a href="../Restuarant/viewpromotions.php" class="active">Promotions</a></li>
              <li><a href="../Home/about.php">About Us</a></li>
              <li><a href="../Home/contact.php">Contact</a></li> -->
              <?php
              $sql = "SELECT * FROM users WHERE id='$id' ";
              $RES = mysqli_query($con, $sql);
              $result = mysqli_fetch_assoc($RES);
              if ($result['usertype'] != 'Customer') {
              ?>
                <li>
                  <a href="../home/">
                    <button type="button" class="btn btn-outline-danger">
                      Sign up
                    </button></a>
                </li>
                <li>
                  <a href="../login/login.php">
                    <button type="button" class="btn btn-outline-success">
                      Log In
                    </button></a>
                </li>
              <?php } else { ?>
                <li class="dropdown">


                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">My Profile</a>

                  <div class="dropdown-menu">

                    <a class="dropdown-item" href="../Customer/editdetails.php">Edit Details</a>
                    <a class="dropdown-item" href="">Order Details</a>
                    <a class="dropdown-item" href="../Home/logout.php">Log Out</a>
                  </div>
                </li>
              <?php } ?>
            </ul>
            <a class="menu-trigger">
              <span>Menu</span>
            </a>
            <!-- ** Menu End ** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ** Header Area End ** -->

  <section class="section section-bg" id="call-to-action" style="background-image: url(../Home/assets/images/banner-image-1-1920x500.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br />
            <br />
            <h2>Have a look at <em>Our Promotions</em></h2>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <!-- ** Cars Starts ** -->
    <section class="section" id="trainers">
      <div class="container">
        <br />
        <br />

        <div class="row mt-2 pb-3">
          <?php
          include '../Connection/connection.php';
          $stmt = $con->prepare('SELECT * FROM promotions WHERE status= "1"');
          $stmt->execute();
          $result = $stmt->get_result();
          while ($row = $result->fetch_assoc()) :
          ?>
            <div class="flip-card card border-danger mb-3">
              <div class="flip-card-inner">
                <!-- <div class="card p-2 border-secondary mb-2"> -->
                <div class="flip-card-front">

                  <img src="../Shop/assets1/promotions/<?= $row['image'] ?>" height="" class="card-img-top" height="250">
                </div>
                <div class="flip-card-back">
                  <h5 class="card-title text-center text-success text-uppercase font-weight-bold"><?= $row['promoname'] ?></h5>
                  <h6 class="card-title text-center text-danger"> <?= $row['restname'] ?> Offer</h6>
                  <h7 class="card-title text-center text-danger"> <?= $row['description'] ?></h7>

                  <span>
                    <del><sup>$</sup><?= $row['price'] ?></del> <sup>$</sup><?= $row['nprice'] ?>
                  </span>
                  <!-- <h6 class="card-title text-center text-danger">Telephone: <?= $row['telephone'] ?></h6>
                  <h6 class="card-title text-center text-danger">Address: <?= $row['address'] ?></h6> -->

                  <form action="" class="form-submit">
                    <div class="row p-2">
                      <div class="col-md-6 py-1 pl-4">
                      </div>
                    </div>



                    <!-- echo "<span text-center'><a class='btn btn-success' href='./allFoodItems.php?type=view&code=" . $row['code'] . "'><i class='fas fa-receipt'></i>&nbsp;&nbsp;View Menu</a></span>"; -->

                    <!-- ?> -->
                    <!-- <a href='./allFoodItems.php?type=view$id=".$row['id']."'><button class="btn btn-success text-center"><i class="fas fa-receipt"></i>&nbsp;&nbsp;View Menu</a> -->

                  </form>

                </div>
                <!-- <div class="card-footer p-1"> -->

                <!-- </div> -->
                <!-- </div> -->
              </div>
            </div>
            <!-- </div> -->
          <?php endwhile; ?>
        </div>

        </br>
      </div>
    </section>

    <div>
    <?php include('../Home/footer.php'); ?>
  </div>


    <!-- 
        <div class="main-button text-center">
          <a href="#">View more restuarants.</a>
        </div>
      </div> -->

    <!-- ** Footer Start ** -->


    <!-- jQuery -->
    <script src="../Home/assets/js/jquery-2.1.0.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>


    <script src="../Home/assets/js/jquery-2.1.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="../Home/assets/js/popper.js"></script>
    <script src="../Home/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../Home/assets/js/scrollreveal.min.js"></script>
    <script src="../Home/assets/js/waypoints.min.js"></script>
    <script src="../Home/assets/js/jquery.counterup.min.js"></script>
    <script src="../Home/assets/js/imgfix.min.js"></script>
    <script src="../Home/assets/js/mixitup.js"></script>
    <script src="../Home/assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="../Home/assets/js/custom.js"></script>



</body>

</html>