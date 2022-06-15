<?php
    session_start();
    error_reporting(0);
    include('../Connection/connection.php');
    $id = $_SESSION['id'];
        if ($id == 0) {
            header('location: ../login/login.php');
        } else {

            echo $id;
           
        }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- <h1>Tharindu</h1> -->
    </head>

    <body>
        
        <a href="../logout.php"></i>LOGOUT</a>
        <a href="./editdetails.php"></i>Edit Details</a>
        <a href="../cart/"></i>all food Details</a>


    </body>

</html>