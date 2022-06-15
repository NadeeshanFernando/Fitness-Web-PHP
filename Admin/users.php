<?php
session_start();
error_reporting(0);
include '../Connection/connection.php';
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE usertype='Customer' order by  id asc;";
$res = mysqli_query($con, $sql);



if ($id == 0) {
  header('location: ../login/login.php');
} else {
  $deltid = $_GET['id'];
  $type = $_GET['type'];
  if ($type == 'delete') {
    echo $deltid;
    $sqlpic = "SELECT * FROM users WHERE id='$deltid'";
    $res    = mysqli_fetch_assoc(mysqli_query($con, $sqlpic));
    $pic  = $res['image'];

    $dltsql = "DELETE FROM users WHERE id='$deltid'";
    unlink("../Customer/assets/images/" . $pic);
    mysqli_query($con, $dltsql);
    $msg  = "Successfully Deleted";

    echo "<script type='text/javascript'> document.location = './users.php'; </script>";
  } elseif ($type == 'deactivate') {
    $edit = "UPDATE users SET status=0 WHERE id='$deltid';";
    mysqli_query($con, $edit);
    echo "<script type='text/javascript'> document.location = './users.php'; </script>";
  } elseif ($type == 'activate') {
    // echo $deltid;
    // echo $type;
    $edit = "UPDATE users SET status=1 WHERE id='$deltid';";
    mysqli_query($con, $edit);
    echo "<script type='text/javascript'> document.location = './users.php'; </script>";
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
      <h2>Users Management </h2>
      <form method="post" action="./Reports/Users.php">
        <input type="submit" value="Generate Report" class="btn btn-primary"></input>
      </form>
      <!-- <table class="table table-striped">
        <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">date</th>
      <th scope="col">action</th>

    </tr>
  </thead>
  <tbody> -->
      <div id="result">
      </div>
      </table>
     


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
<!-- <img src="" alt=""> -->
<script>
  $(document).ready(function() {
    load_data();

    function load_data(query) {
      $.ajax({
        url: "usersearch.php",
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