<?php
session_start();
error_reporting(0);
include '../Connection/connection.php';
$id = $_GET['id'];
if ($id == 0) {
  header('location: ../login/login.php');
} else {
  $sql = "select * from shops where id='$id'";
  $qu = mysqli_query($con, $sql);
  $f = mysqli_fetch_assoc($qu);
  $re =   $f['password'];
  $pre = $f['image'];

  if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $address = $_POST['address'];

    if ($_FILES['img1']['name']) {
      unlink("./assets/images" . $pre);
      move_uploaded_file($_FILES['img1']['tmp_name'], "./assets/images/" . $_FILES['img1']['name']);
      $img = "/" . $_FILES['img1']['name'];
    } else {
      $img = $_POST['img'];
    }

    $sql4 = "UPDATE shops SET name='$name', email='$email', description='$description',telephone='$telephone', address='$address', image='$img' WHERE id='$id'";
    $sql5 = "UPDATE products SET restuarantName='$name'  WHERE rid='$id'";

    mysqli_query($con, $sql4);
    mysqli_query($con, $sql5);

    $msg = "Sucessfully updated";
    echo "<script type='text/javascript'> document.location = '../Shop/editdetails.php'; </script>";
  } else if (isset($_POST['Change'])) {
    $new     = $_POST['npassword'];
    $confirm = $_POST['cpassword'];
    $current = $_POST['password'];

    $hash = md5($current);
    $hasnew = md5($new);

    if ($re != $hash) {
      $error = "Current Password is wrong";
    } elseif ($new != $confirm) {
      $error = "Passwords are Mis match";
    } else {
      $sql3 = "UPDATE shops SET password='$hasnew' WHERE id='$id'";
      mysqli_query($con, $sql3);
      $msg = "Sucesssfully updated";
      // echo "<script type='text/javascript'> document.location = '../Restuarant/editdetails.php'; </script>";
    }
  }
}

?>

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
  <!-- <link rel="stylesheet" href="../Home/assets/css/style.css"> -->


</head>

<body>


  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <div>
    <?php include('../Shop/navigation.php'); ?>
  </div>
  <!-- ***** Header Area End ***** -->



  <section class="section">
    <div class="container">
      <br>
      <br>
      <div class="row">
        <div class="col-md-8">
          <div class="contact-form">
            <?php if ($error) { ?> <div class="alert alert-danger"><strong></strong><?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="alert success"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php } ?>

            <form id="contact" action="" method="post">
              <div class="row">

                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input id="name" type="text" name="name" value="<?php echo $f['name'] ?>" placeholder="Shop Name">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea id="description" type="text" name="description" placeholder="description" rows="5" cols="50"><?php echo $f['description'] ?></textarea>
                  </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input id="telephone" type="tel" name="telephone" placeholder="telephone" maxlength="10" value="<?php echo $f['telephone'] ?>">
                  </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input id="address" type="text" name="address" placeholder="Address" value="<?php echo $f['address'] ?>">
                  </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                  <fieldset>


                    <input type="hidden" name="img" value="<?php echo $f['image'] ?>">
                    <input id="image" type="file" name="img1" placeholder="file">
                  </fieldset>
                </div>

                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input id="email" type="email" name="email" placeholder="Email" value="<?php echo $f['email'] ?>">
                  </fieldset>
                </div>


                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" name="update" class="main-button">Update</button>
                    <!-- <input type="submit" name="update" value="Update"> -->


                  </fieldset>
                </div>
              </div>
            </form>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="tabs-content">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">

                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input id="password" type="password" name="password" placeholder="Current Password">
                    </fieldset>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input id="password" type="password" name="npassword" placeholder="New Password">
                    </fieldset>
                  </div>


                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input id="password" type="password" name="cpassword" placeholder="Confirm Password">
                    </fieldset>
                  </div>


                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button" name="Change">Update</button>

                    </fieldset>
                  </div>
                </div>
              </form>
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