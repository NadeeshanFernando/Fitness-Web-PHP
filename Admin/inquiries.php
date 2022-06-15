<?php
session_start();
error_reporting(0);
include '../Connection/connection.php';
$id = $_SESSION['id'];

$sql = "SELECT * FROM inquiries order by id asc;";
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
        <h2>Inquiries Management </h2>
        <form method="post" action="./Reports/Inquiries.php">
          <input type="submit" class="btn btn-primary" value="Generate Report">
        </form>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Subject</th>
              <th scope="col">Message</th>
              <th scope="col">date</th>


            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              // $i=1;
              while ($row = mysqli_fetch_assoc($res)) { ?>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['subject'] ?></td>
                <td><?php echo $row['message'] ?></td>
                <td><?php echo $row['date'] ?></td>


            </tr>
          <?php
              } ?>
          <tr>

          </tbody>
        </table>
        <!-- <table>
               <thead>
                   <tr>
                       <th>Name</th>
                       <th>email</th>
                       <th>telphone</th>
                       <th>date</th>
                       <th>action</th>
                   </tr>
                   <TD>THARINDU</TD>
                   <td>tharinu413</td>
                   <td>0775398171</td>
                   <td>2021/112/12</td>
                   <td>delete and disable</td>
               </thead>
           </table> -->


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