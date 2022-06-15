<?php
session_start();
error_reporting(0);

include '../Connection/connection.php';
if (isset($_POST['new'])) {
  // assign dv variables to local variables
  $name        = $_POST['name'];
  $description = $_POST['description'];
  $email       = $_POST['email'];
  $telephone   = $_POST['telephone'];
  $address     = $_POST['address'];
  $password    = $_POST['password'];
  $cpassword   = $_POST['cpassword'];
  $hash        = md5($cpassword);
  $code        = md5($name);

  if ($_FILES['img']['name']) {
    move_uploaded_file($_FILES['img']['tmp_name'], "./assets1/images/" . $_FILES['img']['name']);
    $img = "/" . $_FILES['img']['name'];
  }

  // select statement
  $sql1 = "SELECT *  FROM shops WHERE email='$email' or telephone='$telephone' or name='$name'";
  // insert statement
  $sql2 = "INSERT INTO shops (name, email, password, description, telephone, address, image, status, code) VALUES ('$name','$email','$hash','$description', '$telephone', '$address', '$img',1, '$code')";


  // check passwords
  if ($password != $cpassword) {
    $error =  "Password are mis match";
    // check shop is already registered or not
  } else if (mysqli_num_rows(mysqli_query($con, $sql1)) > 0) {
    $error = "This Shop is Already registered ";
    // register a new shop
  } else {
    $result1 = mysqli_query($con, $sql2);
    $msg = "Successfully Registered a new Shop";
    echo "<script type='text/javascript'> document.location = '../Home/'; </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <title>Sign Up-Seller</title>
  <link rel="stylesheet" type="text/css" href="./assets1/style.css" />

  <!-- Bootstrap CSS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <title>Sign Up - Shop</title>
</head>

<body>


<div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('./assets/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              
            <div class="text-center mb-5">
              <h3><strong>New Shop Registration</strong></h3>
            </div>
            <?php if ($error) { ?> <div class="alert alert-danger"><strong></strong><?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="alert alert-success"><strong></strong><?php echo htmlentities($msg); ?> </div><?php } ?>


            <form method="post" enctype="multipart/form-data">
              <div class="form-group first">


                <input type="text" class="form-control" placeholder="Shop Name" id="name" name="name" required>
              </div>
              <div class="form-group first">
                <!-- <input type="text" class="form-control" placeholder="Brief Description" id="description" name="description" required > -->
                <textarea id="description" type="text" name="description" placeholder="description" rows="5" cols="45" required></textarea>

              </div>
              <div class="form-group first">

                <input type="text" class="form-control" placeholder="947XXXXXXXX or 9411xxxxxxx" id="name" name="telephone" maxlength="10" required>
              </div>
              <div class="form-group first">
                <input type="text" class="form-control" placeholder="Shop Address" id="address" name="address" required>
              </div>
              <div class="form-group first">
                <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="email" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
              </div>
              <div class="form-group last mb-3">
                <input type="password" class="form-control" placeholder="Re-type Password" id="re-password" name="cpassword" required>
              </div>
              <div class="form-group first">
                <input type="file" name="img" required>
              </div>
              <div class="text-center mb-5">
                <h4><strong>I have an account</strong>
                  <a href="../login/login.php">Login</a>
                </h4>
                <P><a href="../Home/">Back To Home </a></P>
              </div>
              <input type="submit" name="new" value="Register" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>