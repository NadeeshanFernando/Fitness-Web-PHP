<?php
error_reporting(0);
session_start();
$error = '';
$msg = '';
include '../Connection/connection.php';
$id = $_GET['id'];

if ($id == 0) {
  header('location: ../login/login.php');
}
$details = "SELECT * FROM shops WHERE id='$id' ";
$f = mysqli_fetch_assoc(mysqli_query($con, $details));

$sql = "select * from products WHERE rid='$id'";
$res = mysqli_query($con, $sql);

$delid = $_GET['fid'];
$type = $_GET['type'];

// echo $delid;


if ($type == 'delete') {
  $sql1 = "select * from products WHERE fid='$delid'";
  $res =    mysqli_fetch_assoc(mysqli_query($con, $sql1));
  $pic = $res['image'];
  $sql2 = "DELETE FROM products WHERE fid='$delid'";
  unlink("./assets1/foodItem/" . $pic);
  mysqli_query($con, $sql2);
  $msg =  "Sucessfully Deleted";
  echo "<script type='text/javascript'> document.location = './Products.php?id=" . $id . "; </script>";
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
  <!-- <link rel="stylesheet" href="../Home/assets/css/style.css"> -->


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
          <h2>Products</h2>

          <?php if ($error) { ?> <div class="alert alert-danger"><strong></strong><?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="alert success"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php } ?>

          <br />
          <table class="table table-hover">

            <thead>

              <tr>

                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Qty</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>

              </tr>
            </thead>

            <tbody>

              <tr>
                <?php
                // $i=1;
                while ($row = mysqli_fetch_assoc($res)) { ?>
                  <td><?php echo $row['name'] ?></td>
                  <td><img src="./assets1/productItem<?php echo $row['image'] ?>" width = 90px> </td>
                  <td><?php echo $row['description'] ?></td>
                  <td><?php echo $row['qty'] ?></td>
                  <td><?php echo $row['price'] ?></td>
                  <td>
                    <?php

                    echo "<a href='./newProducts.php?type=edit&id=" . $row['id'] . "'><button type='button' class='btn btn-success'>Edit</button></a>";
                    echo "<a href='./Products.php?&id=" . $id . "&type=delete&fid=" . $row['fid'] . "'><button type='button' class='btn btn-danger'>Delete</button></a>";

                    ?>




                  </td>
              </tr>
            <?php
                } ?>
            </tbody>
          </table>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">



          <?php echo "<a class='btn btn-warning'  href='./newProducts.php?&id=" . $id . "'>Add New Product</a>"; ?>


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