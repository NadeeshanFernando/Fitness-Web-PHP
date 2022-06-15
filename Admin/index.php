<?php
session_start();
error_reporting(0);
include '../Connection/connection.php';
$id = $_SESSION['id'];
$sql = "SELECT COUNT(0)
  FROM users where usertype='Customer';";
$result = (mysqli_query($con, $sql));
$data = mysqli_fetch_assoc($result);


//count of the admin panel 
$rest = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(0)
  FROM shops;"));

$foods = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(0)
    FROM products;"));

$book = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(0)
    FROM schedules;"));

// if ($id == 0) {
//   header('location: ../login/login.php');
// } 

?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> X-TEAM-Admin Dashboard </title>
  <link rel="stylesheet" href="style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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

      <div class="profile-details">
        <i class='bx bxs-user-rectangle'></i>
        <span class="admin_name">Admin</span>

    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Users</div>
            <div class="number"><?php echo $data['COUNT(0)']  ?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up to now</span>
            </div>
          </div>
          <i class='bx bxs-user-pin cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Shops</div>
            <div class="number"><?php echo $rest['COUNT(0)']  ?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up to now</span>
            </div>
          </div>
          <i class='bx bx-store cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Products</div>
            <div class="number"><?php echo $foods['COUNT(0)']  ?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up to now</span>
            </div>
          </div>
          <i class='bx bx-dumbbell cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Classes</div>
            <div class="number"><?php echo $book['COUNT(0)'] ?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt '></i>
              <span class="text">Up to now</span>
            </div>
          </div>
          <i class='bx bxs-conversation cart'></i>
        </div>
      </div>


      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title"></div>
          <div class="sales-details">
            <img src="../Home/assets/images/about-fullscreen-1-1920x700.jpg" width="100%" alt="">
          </div>
        </div>
      </div>
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