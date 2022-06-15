<?php
session_start();
// error_reporting(0);  
include('../Connection/connection.php');
$id = $_GET['id'];
$f = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM shops WHERE id='$id'"));

$sql = "SELECT * FROM promotions WHERE rid = '$id'";
$res = mysqli_query($con, $sql);

if ($id == 0) {
  header('location: ../login/login.php');
}
$delid = $_GET['id'];

$type = $_GET['type'];
if ($type == 'delete') {
  $sql1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM promotions WHERE id='$delid'"));
  $pic = $sql1['image'];
  $sqlnew = "DELETE FROM promotions WHERE id = '$delid'";
  unlink("./assets1/promotions" . $pic);
  mysqli_query($con, $sqlnew);
  $msg =  "Sucessfully Deleted";
  echo "<script type='text/javascript'> document.location = './promotions.php'; </script>";
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
          <h2>Promotions</h2>
          <br />
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Promo Name</th>
                <th scope="col">image</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>

                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                // $i=1;
                while ($row = mysqli_fetch_assoc($res)) { ?>
                  <td><?php echo $row['promoname'] ?></td>
                  <td> <img src="./assets1/promotions<?php echo $row['image'] ?>" alt=""></td>
                  <td><?php echo $row['description'] ?></td>
                  <td><?php echo $row['price'] ?></td>

                  <td>
                    <?php
                    echo "<a href='../Restuarant/promotions.php&id?'.$id.'type=delete&Rid=" . $row['id'] . "'><button type='button' class='btn btn-danger'>Delete</button></a>";
                    ?>
                    <!-- <a href="./promotions.php"></a> -->

                  </td>
              </tr>


              </tr>
            <?php
                } ?>
            </tbody>
          </table>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- <a
                href="./newPromotions.php"
                  type="button"
                  class="btn btn-warning"
            
                >
                  Add New Promotions
                </a> -->
          <?php echo "<a class='btn btn-warning'  href='./newPromotions.php?&id=" . $id . "'> Add New Promotions</a>"; ?>
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