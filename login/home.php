<?php
error_reporting(0);
session_start();
include '../Connection/connection.php';
if (isset($_POST['select'])) {
    $id = $_SESSION['id'];
    $sql = "SELECT usertype FROM users WHERE usertype='Customer' and id='$id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<script type='text/javascript'> document.location = '../Customer/profile.php'; </script>";
    } else {
        echo "<script type='text/javascript'> document.location = '../Shop/profile.php'; </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<title>
    Home
</title>

<head>

</head>
<h1>Home</h1>
<form method="POST">
    <input type="submit" name="select" value="Profile">
</form>

</html>