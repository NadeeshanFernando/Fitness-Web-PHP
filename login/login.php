<?php
error_reporting(0);
session_start();
include '../Connection/connection.php';
if (isset($_POST['signin'])) {
  $emil = $_POST['email'];
  $password = $_POST['password'];
  $hash = md5($password);

  $sql = "SELECT * FROM users WHERE email='$emil' and password='$hash' and usertype='Customer'";
  $result = mysqli_query($con, $sql);

  $sql1 = "SELECT * FROM shops WHERE email='$emil' and password='$hash'";
  $result1 = mysqli_query($con, $sql1);

  $sqladmin = "SELECT * FROM users WHERE email='$emil' and password='$hash' and usertype='Admin'";
  $adminresult = mysqli_query($con, $sqladmin);


  if (mysqli_num_rows($result) > 0) {
    $res = mysqli_fetch_assoc($result);
    $_SESSION[('id')] = $res['id'];
    if ($res['status'] == 0) {
      $error = "Your account has been deactivated by admin. Please Contact the admin.";
    } else {
      // echo "<script type='text/javascript'> document.location = '../Home/'; </script>";
      echo "<script type='text/javascript'> document.location = '../Home/index.php?&id=" . $res['id'] . "'; </script>";
    }
  } elseif (mysqli_num_rows($result1) > 0) {
    $rres = mysqli_fetch_assoc($result1);
    $_SESSION[('id')] = $rres['id'];

    if ($rres['status'] == '0') {
      $error = "Your account has been deactivated by admin. Please Contact the admin.";
    } else {
      echo "<script type='text/javascript'> document.location = '../Shop/profile.php?&id=" . $rres['id'] . "'; </script>";
      // echo "<a href='../Restuarant/profile.php?&id=" . $rres['id'] . "'></a>";
    }
  } elseif (mysqli_num_rows($adminresult) > 0) {
    $ares = mysqli_fetch_assoc($adminresult);
    $_SESSION[('id')] = $ares['id'];
    echo "<script type='text/javascript'> document.location = '../Admin/index.php'; </script>";
  } else {
    $error = "Invalid Details";
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

  <link rel="stylesheet" type="text/css" href="./assets/style.css" />

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <!-- Style -->



  <title>Sign In</title>
</head>

<body>

  <div class="half">
    <div class="bg order-1 order-md-2">
      <div class="contents order-2 order-md-1"> </div>

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
                <h3><strong>Sign In</strong></h3>
              </div>
              <?php if ($error) { ?> <div class="alert alert-danger"><strong></strong><?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="alert alert-success"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php } ?>

              <form method="post">
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="email">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                </div>

                <div class="text-center mb-5">
                  <h4><strong>I don’t have an account</strong>
                    <a href="../Home/">Sign Up</a>
                  </h4>

                </div>
                <input type="submit" name="signin" value="Log In" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>