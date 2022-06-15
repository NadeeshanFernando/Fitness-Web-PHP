<?php
session_start();
// error_reporting(0);
$error = '';
$msg = '';

include('../Connection/connection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM shops where id='$id'";
$f = mysqli_fetch_assoc(mysqli_query($con, $sql));


$result = mysqli_query($con, $sql);
$res = mysqli_fetch_assoc($result);
$sname = $res['name'];
$code = $res['code'];





if ($id == 0) {
  header('location: ../login/login.php');
} else {
  if (isset($_POST['add'])) {
    $name        = $_POST['name'];
    $description = $_POST['description'];
    $price       = $_POST['price'];
    $qty         = $_POST['qty'];


    if ($_FILES['image']['name']) {
      move_uploaded_file($_FILES['image']['tmp_name'], "./assets1/productItem/" . $_FILES['image']['name']);
      $img = "/" . $_FILES['image']['name'];
    }

    $sql1 = "SELECT * FROM products WHERE name='$name' or image='$img'";


    $sql2 = "INSERT INTO products (rid, shopName, name, image, description, price, code , qty) 
            VALUES ('$id','$sname','$name','$img','$description', $price , '$code', '$qty') ";

    if (mysqli_num_rows(mysqli_query($con, $sql1)) > 0) {
      $error = "Product is Already registered ";
    } else {
      $result12 = mysqli_query($con, $sql2);
      $msg =   "Successfuly added a new Product";
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

    <div>
        <?php include('../Shop/navigation.php'); ?>
    </div>

    <br />
    <br />

  <section class="section">
    <div class="container">
      <br>
      <br>
      <div class="row">

        <div class="col-md-8">
          <h2>Add New Product</h2>
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
                    <input id="price" type="number" placeholder="QTY" min="0" name="qty" required>
                  </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input id="image" type="file" name="image">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" name="add" class="main-button">Add Product</button>
                    <a href="./Products.php">Back</a>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>

          <br>



        </div>
      </div>

      <br>

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