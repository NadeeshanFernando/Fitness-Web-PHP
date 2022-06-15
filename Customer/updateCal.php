<?php
session_start();

require_once("../Connection/connection.php");
// Check Availabilty for user mobile number


if (!empty($_POST["bmi"])) {
    $userId = $_SESSION['id'];
    $bmiValue = $_POST["bmi"];

    print_r($userId);

    $query = "update users set bmi='$bmiValue' where id='$userId'";
    $result = mysqli_query($con, $query);
}

if (!empty($_POST["bmr"])) {
    $userId = $_SESSION['id'];
    $bmrValue = $_POST["bmr"];

    print_r($userId);

    $query = "update users set bmr='$bmrValue' where id='$userId'";
    $result = mysqli_query($con, $query);
}

if (!empty($_POST["bfc"])) {

    $userId = $_SESSION['id'];
    $bfc = $_POST["bfc"];

    print_r($userId);

    $query = "update users set body_fat='$bfc' where id='$userId'";
    $result = mysqli_query($con, $query);
}
