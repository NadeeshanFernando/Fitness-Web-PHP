<?php
session_start();
// error_reporting(0);
include('../Connection/connection.php');
$id = $_GET['id'];
if ($id == 0) {
  header('location: ../login/login.php');
} else {

  $sql = "SELECT * FROM shops WHERE id='$id' ";
  $f = mysqli_fetch_assoc(mysqli_query($con, $sql));
  $rescode = $f['code'];


  $sqlorders = "SELECT * FROM orders WHERE code='$rescode'";
  $order = mysqli_query($con, $sqlorders);
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
  <!-- ***** Preloader Start ***** -->
  <div>
    <?php include('../Shop/navigation.php'); ?>
  </div>

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
                <th scope="col">Customer Name</th>
                <th scope="col">Products</th>
                <th scope="col">Contact</th>
                <th scope="col">Date</th>
                <!-- <th scope="col">Action</th> -->
              </tr>
            </thead>
            <?php
            while ($num = mysqli_fetch_assoc($order)) { ?>
              <tbody>
                <tr>
                  <th scope="row"><?php echo $num['id'] ?></th>
                  <td><?php echo $num['name'] ?></td>
                  <td><?php echo $num['products'] ?></td>
                  <td><?php echo $num['phone'] ?></td>
                  <td><?php echo $num['date'] ?></td>


                </tr>
              <?php } ?>

              </tbody>
          </table>
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