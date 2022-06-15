<?php
session_start();
error_reporting(0);
include('../Connection/connection.php');
$id = $_GET['id'];
$edit = $_GET['id'];
$sql = "SELECT * FROM shops where id='$id'";

$result = mysqli_query($con, $sql);
$res = mysqli_fetch_assoc($result);
$resname = $res['name'];
$code = $res['code'];

$sql1 = "SELECT * FROM products WHERE id='$edit' ";
$editresult =  mysqli_fetch_assoc(mysqli_query($con, $sql1));



if ($id == 0) {
  header('location: ../login/login.php');
} else {
  if (isset($_POST['add'])) {
    $name        = $_POST['name'];
    $description = $_POST['description'];
    $price       = $_POST['price'];
    $nprice         = $_POST['nprice'];


    if ($_FILES['image']['name']) {
      move_uploaded_file($_FILES['image']['tmp_name'], "./assets1/promotions/" . $_FILES['image']['name']);
      $img = "/" . $_FILES['image']['name'];
    }

    $sql1 = "SELECT * FROM products WHERE name='$name' or image='$img'";


    $sql2 = "INSERT INTO promotions (rid, restname, promoname, image, description, price, nprice , status) 
            VALUES ('$id','$resname','$name','$img', '$description', $price , '$nprice', '0') ";

    if (mysqli_num_rows(mysqli_query($con, $sql1)) > 0) {
      $error = "Food Item is Already registered ";
    } else {
      $result12 = mysqli_query($con, $sql2);
      $msg =   "Successfuly added a new Item";
    }
  }
}
?>
<!-- <img src="./assets1/foodItem/pizza1.jpg" alt=""> -->
<!-- <!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>


    <form method="post" enctype="multipart/form-data">

    <input id="name" type="text" placeholder="Food Items Name" name="name" required>
    <textarea id="description" type="text" name="description" placeholder="description" rows="5" cols="54" required></textarea>
    <input id="price" type="number" placeholder="Price" min="0" name="price" required>
    <input id="image"  type="file"  name="image">


        <input type="submit" name="add" value="Register">
    </form>





</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

  <title>X-TEAM</title>

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="../Home/assets/css/style.css">


</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="container text-right" id="topContent" style="padding-top: 1px;"><strong><?php echo $res['name'] ?> Seller Profile</strong>
            <a href="../Home/logout.php"> <button type="button" class="btn btn-outline-danger"> Sign Out
              </button></a>
          </div>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="margin-top: 40px;">
            <div class="container">
              <a href="index.html" class="logo">Fitness<em>App</em></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                  <li class="nav-item">
                    <!-- <a class="nav-link" href="../Restuarant/profile.php?">Restaurant</a> -->
                    <?php echo "<a class='nav-link'  href='./profile.php?&id=" . $id . "'>Restaurant</a>"; ?>

                  </li>
                  <li class="nav-item">
                    <!-- <a class="nav-link" href="../Restuarant/Fooditems.php">Menu Items</a> -->
                    <?php echo "<a class='nav-link'  href='./Products.php?&id=" . $id . "'>Menu Items</a>"; ?>
                  </li>
                  <li class="nav-item">
                    <!-- <a class="nav-link" href="./orders.php">Order</a> -->
                    <?php echo "<a class='nav-link'  href='./orders.php?&id=" . $id . "'>Order</a>"; ?>
                  </li>
                  <li class="nav-item">
                    <!-- <a class="nav-link" href="./promotions.php">Manage Promotions</a> -->
                    <?php echo "<a class='nav-link'  href='./promotions.php?&id=" . $id . "'>Manage Promotions</a>"; ?>
                  </li>
                  <li class="nav-item">
                    <!-- <a class="nav-link" href="./editdetails.php">Edit Resturant</a> -->
                    <?php echo "<a class='nav-link'  href='./editdetails.php?&id=" . $id . "'>Edit Restaurant</a>"; ?>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/restaurant-banner.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br>
            <br>
            <h2><?php echo $res['name'] ?><em> Seller Profile</em></h2>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <br>
      <br>
      <div class="row">

        <div class="col-md-8">
          <h2>Add New Promotions</h2>
          <br />
          <div class="contact-form">
            <?php if ($error) { ?> <div class="alert alert-danger"><strong></strong><?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="alert success"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php } ?>

            <form id="contact" method="post" enctype="multipart/form-data">
              <div class="row">

                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input id="name" type="text" placeholder="Product Name" name="name" required>
                  </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input id="price" type="text" placeholder="Price" min="0" name="price" required>
                  </fieldset>
                </div>

                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <textarea name="description" rows="6" id="description" placeholder="Description" required></textarea>
                  </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input id="nprice" type="text" placeholder="New Price" min="0" name="nprice" required>
                  </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input id="image" type="file" name="image">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" name="add" class="main-button">Add Promotion</button>
                    <a href="./Products.php">Back</a>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>

      <br>

    </div>
    </div>


    </div>
    </div>
    </div>
  </section>

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