<?php
session_start();
error_reporting(0);
include '../Connection/connection.php';
$id = $_SESSION['id'];

$sql = "SELECT * FROM schedules order by id asc;";
$res = mysqli_query($con, $sql);

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
    <link rel="stylesheet" href="./assets2/style.css">

    <!-- Boxicons CDN Link -->
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

        <div class="profile-details">
          <i class='bx bxs-user-rectangle'></i>
          <span class="admin_name">Admin</span>
      </nav>
      <div class="home-content1">
        <h2>Classes Management </h2>
        <!-- calling the /Reports/classes.php -->
        <form method="post" action="./Reports/classes.php">
          <input type="submit" class="btn btn-primary" value="Generate Report">
        </form>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Last name</th>
              <th scope="col">Email</th>
              <th scope="col">DOB</th>
              <th scope="col">Message</th>
              <th scope="col">Receipt</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              // $i=1;
              while ($row = mysqli_fetch_assoc($res)) { ?>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['lastname'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['dob'] ?></td>
                <td><?php echo $row['message'] ?></td>
                <td>
                  <div class="thumb"> <img src="../Classes/assets1/schedules<?php echo $row['image'] ?>" width=90px>
                  </div>
                </td>
            </tr>
          <?php
              } ?>
          <tr>

          </tbody>
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
<?php
}
?>