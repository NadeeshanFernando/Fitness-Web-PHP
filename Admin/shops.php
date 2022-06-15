<?php
session_start();
error_reporting(0);
include '../Connection/connection.php';
$id = $_SESSION['id'];
$sql = "SELECT * FROM shops order by  id asc;";
$res = mysqli_query($con, $sql);

if ($id == 0) {
  header('location: ../login/login.php');
} else {
  $deltid = $_GET['id'];
  $type = $_GET['type'];

  if ($type == 'delete') {
    $sqlpic = "SELECT * FROM shops WHERE id='$deltid'";
    $res    = mysqli_fetch_assoc(mysqli_query($con, $sqlpic));
    $pic  = $res['image'];

    $dltsql = "DELETE FROM shops WHERE id='$deltid'";
    unlink("../Restuarant/assets1/images/" . $pic);
    mysqli_query($con, $dltsql);
    $msg  = "Successfully Deleted";

    echo "<script type='text/javascript'> document.location = './shops.php'; </script>";
  } elseif ($type == 'deactivate') {
    $edit = "UPDATE shops SET status=0 WHERE id='$deltid';";
    mysqli_query($con, $edit);
    echo "<script type='text/javascript'> document.location = './shops.php'; </script>";
  } elseif ($type == 'activate') {
    $edit = "UPDATE shops SET status=1 WHERE id='$deltid';";
    mysqli_query($con, $edit);
    echo "<script type='text/javascript'> document.location = './shops.php'; </script>";
  }
}




?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> X-TEAM-Admin Dashboard </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./assets/style.css">

  <!-- Boxicons CDN Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div>
    <?php include('../Admin/sidebar.php'); ?>
  </div>
  
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" name="search_text" id="search_text" placeholder="Search...">
        <i class='bx bx-search'></i>
      </div>
      <div class="profile-details">
        <i class='bx bxs-user-rectangle'></i>
        <span class="admin_name">Admin</span>

    </nav>
    <div class="home-content1">
      <h2>Shops Management </h2>
      <form method="post" action="./Reports/Restaurants.php">

        <input type="submit" value='Generate Report' class="btn btn-primary">
      </form>
      <div id="result">
      </div>
  </section>





  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>

</body>

</html>
<script>
  $(document).ready(function() {
    load_data();

    function load_data(query) {
      $.ajax({
        url: "restsearch.php",
        method: "post",
        data: {
          query: query
        },
        success: function(data) {
          $('#result').html(data);
        }
      });
    }

    $('#search_text').keyup(function() {
      var search = $(this).val();
      if (search != '') {
        load_data(search);
      } else {
        load_data();
      }
    });
  });
</script>