<?php
error_reporting(0);
session_start();
include '../Connection/connection.php';
if (isset($_POST['new'])) {
  $uname      = $_POST['email'];
  $fname      = $_POST['fname'];
  $lname      = $_POST['lname'];
  $telephone  = $_POST['telephone'];
  $password   = $_POST['password'];
  $cpassword  = $_POST['cpassword'];
  $hash = md5($cpassword);
//$dob        =$_POST['dob'];

  if ($_FILES['file']['name']) {
    move_uploaded_file($_FILES['file']['tmp_name'], "./assets/images/" . $_FILES['file']['name']);
    $img = "/" . $_FILES['file']['name'];
  }
  // sql queries
  $sql1 = "SELECT *  FROM users WHERE email='$uname' or telephone='$telephone'";
  $sql2 = "INSERT INTO users (usertype, email, password, fname, lname, telephone, image, status) VALUES ('Customer','$uname','$hash','$fname','$lname','$telephone','$img', 1)";

 // $sql1 = "SELECT *  FROM users WHERE email='$uname' or telephone='$telephone'";
 // $sql2 = "INSERT INTO users (usertype, email, password, fname, lname, telephone, image, status,dob) VALUES ('Customer','$uname','$hash','$fname','$lname','$telephone','$img','dob', 1)";



  if ($password != $cpassword) {
    $error = "Password are mis match";
  } else if (mysqli_num_rows(mysqli_query($con, $sql1)) > 0) {
    $error = "User Already registered ";
  } else if (!filter_var($uname, FILTER_VALIDATE_EMAIL)) {
    $error = "Invalid email format";
  } else {
    $result1 = mysqli_query($con, $sql2);
    $msg = "Successfuly Registered a new cusomter";
    echo "<script type='text/javascript'> document.location = '../login/login.php'; </script>";
  }
}


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>   
</head>
<body>
<form method="post" enctype="multipart/form-data">
        <input id="email" type="email" name="email" placeholder="email" required>
         <input id="fname" type="text" name="fname" placeholder="First Name" required>
        <input id="lname" type="text" name="lname" placeholder="Last Name" required>
        <input id="address" type="text" name="address" placeholder="Address" required>
        <input id="telephone" type="text" name="telephone" placeholder="Telephone" maxlength="10" required>
        <input id="password" type="password" name="password" placeholder="password"  required>
        <input id="password" type="password" name="cpassword" placeholder="cpasswrord" required>
        <input id="image" type="file" name="file" placeholder="file" required>
        <input type="submit" name="new" value="Registration">
    </form>
</body>
</html> -->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <title>Sign Up-Customer</title>
  <link rel="stylesheet" type="text/css" href="./assets/style.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>


  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('./assets/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">

              <h3><strong>Customer Sign Up</strong></h3>
              <?php if ($error) { ?> <div class="alert alert-danger"><strong></strong><?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="alert alert-success"><strong></strong><?php echo htmlentities($msg); ?> </div><?php } ?>


              <form method="post" enctype="multipart/form-data">
                <div class="form-group first">
                  <input type="text" class="form-control" placeholder="First Name" id="firstname" name="fname" required>
                </div>
                <div class="form-group first">
                  <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lname" required>
                </div>
                <div class="form-group first">
                  <input type="text" class="form-control" placeholder="947XXXXXXXX" id="name" maxlength="10" name="telephone" required>
                </div>
                <div class="form-group first">
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                </div>
                <div class="form-group last mb-3">
                  <input type="password" class="form-control" placeholder="Re-type Password" id="re-password" name="cpassword" required>
                </div>
                <div class="form-group first">
                  <label for="name">Profile Image</label><br>
                  <input type="file" name="file">
                </div>

                <div class="text-center mb-5">
                  <h4><strong>I have an account</strong>
                    <a href="../login/login.php">Login</a>
                  </h4>
                  <P><a href="../Home/">Back To Home </a></P>
                </div>

                <input type="submit" name="new" value="Registration" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</body>

</html>