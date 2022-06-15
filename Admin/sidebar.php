<?php
session_start();
error_reporting(0);
include '../Connection/connection.php';
$id = $_SESSION['id'];

// $sql = "SELECT * FROM inquiries order by id asc;";
// $res = mysqli_query($con, $sql);

// $sql2 = "SELECT * FROM classes order by id asc;";
// $res2 = mysqli_query($con, $sql2);

if ($id == 0) {
  header('location: ../login/login.php');
} else {

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
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class=''></i>
        <span class="logo_name">X-TEAM</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="./index.php">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="./users.php">
            <i class='bx bx-user'></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="./shops.php">
            <i class='bx bx-store'></i>
            <span class="links_name">Shops</span>
          </a>
        </li>
        <li>
          <a href="./products.php">
            <i class='bx bx-pie-chart-alt-2'></i>
            <span class="links_name">Products</span>
          </a>
        </li>
        <li>
          <a href="./classes.php">
            <i class='bx bx-pie-chart-alt-2'></i>
            <span class="links_name">Classes</span>
          </a>
        </li>
        <li>
          <a href="./inquiries.php" class="active">
            <i class='bx bx-book-alt'></i>
            <span class="links_name">Inquiries</span>
          </a>
        </li>

        <li>
          <a href="../Home/">
            <i class='bx bx-cog'></i>
            <span class="links_name">Web Site</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../Home/logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>

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
<?php
}
?>