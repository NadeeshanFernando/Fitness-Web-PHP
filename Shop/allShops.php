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
  <div>
    <?php include('../Customer/navigation.php'); ?>
  </div>
  <!-- ** Header Area End ** -->

  <section class="section section-bg" id="call-to-action" style="background-image: url(../Home/assets/images/allShop.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br />
            <br />
            <h2>Have a look at <em>Our Shops</em></h2>

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
          $stmt = $con->prepare('SELECT * FROM shops');
          $stmt->execute();
          $result = $stmt->get_result();
          while ($row = $result->fetch_assoc()) :
          ?>
            <div class="flip-card card border-danger mb-3">
              <div class="flip-card-inner">
                <!-- <div class="card p-2 border-secondary mb-2"> -->
                <div class="flip-card-front">
                  <img src="./assets1/images/<?= $row['image'] ?>" height="" class="card-img-top" height="250">
                </div>
                <div class="flip-card-back">
                  <h5 class="card-title text-center text-success text-uppercase font-weight-bold"><?= $row['name'] ?></h5>
                  <h6 class="card-title text-center text-danger">About: <?= $row['description'] ?></h6>
                  <h6 class="card-title text-center text-danger">Telephone: <?= $row['telephone'] ?></h6>
                  <h6 class="card-title text-center text-danger">Address: <?= $row['address'] ?></h6>

                  <form action="" class="form-submit">
                    <div class="row p-2">
                      <div class="col-md-6 py-1 pl-4">
                      </div>
                    </div>
                    <input type="hidden" class="id" value="<?= $row['id'] ?>">


                    <?php
                    $value = $row['code'];
                    if ($id == 0) {
                      echo "<span text-center'><a class='btn btn-success' href='../login/login.php''><i class='fas fa-receipt'></i>&nbsp;&nbsp;View Products</a></span>";
                    } else {
                      echo "<span text-center'><a class='btn btn-success' href='./allProducts.php?type=view&code=" . $row['code'] . "'><i class='fas fa-receipt'></i>&nbsp;&nbsp;View Products</a></span>";
                    }
                    ?>
                    <!-- <a href='./allProducts.php?type=view$id=".$row['id']."'><button class="btn btn-success text-center"><i class="fas fa-receipt"></i>&nbsp;&nbsp;View Menu</a> -->

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