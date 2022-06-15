<?php
session_start();
// error_reporting(0);
include '../Connection/connection.php';
$id = $_SESSION['id'];
if ($id == 0) {
  header('location: ../login/login.php');
} else {
  $sql = "select * from users where id='$id'";
  $qu = mysqli_query($con, $sql);
  $f = mysqli_fetch_assoc($qu);
  $number = $f['telephone'];

  $order = "SELECT * FROM orders WHERE  phone='$number' ";
  $result1 = (mysqli_query($con, $order));
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

  <link rel="stylesheet" type="text/css" href="../Home/assets/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="../Home/assets/css/font-awesome.css" />

  <link rel="stylesheet" href="../Home/assets/css/style.css" />

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

  <!-- ***** Preloader Start ***** -->

  <!-- ***** Header Area Start ***** -->
  <div>
    <?php include('../Customer/navigation.php'); ?>
  </div>
  <!-- ***** Header Area End ***** -->

  <section class="section section-bg" id="call-to-action" style="background-image: url(../Home/assets/images/orderL.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br />
            <br />
            <h2>Have a look at <em>Your Orders</em></h2>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <section class="section">
      <div class="container">
        <br />
        <br />
        <div class="row">
          <div class="col-md-12">
            <h2>Orders</h2>
            <br />
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Order Code</th>
                  <th scope="col">Items</th>
                  <th scope="col">Date</th>
                  <th scope="col">Amount</th>
                  <!-- <th scope="col">Action</th> -->
                </tr>
              </thead>
              <?php
              while ($order1 = mysqli_fetch_assoc($result1)) { ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $order1['id']  ?></th>
                    <td><?php echo $order1['products']  ?></td>
                    <td><?php echo $order1['date']  ?></td>
                    <td>$<?php echo $order1['amount_paid']  ?></td>

                  </tr>
                <?php } ?>

                </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>







    <!-- ***** Footer Start ***** -->
    <div>
    <?php include('../Home/footer.php'); ?>
  </div>


    <!-- jQuery -->
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