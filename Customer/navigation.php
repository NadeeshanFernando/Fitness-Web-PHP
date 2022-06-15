<?php
error_reporting(0);
session_start();

include '../Connection/connection.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

    <title>X-TEAM</title>

    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.css" />

    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="../Home/index.php?&id=" class="logo">X<em>-</em>Team</a>

                        <ul class="nav">
                            <li>
                                <?php echo "<a href='../Home/index.php?&id=" . $id . "'>Home</a>"; ?>
                            </li>

                            <li>
                                <?php echo "<a  href='../Shop/allShops.php?&id=" . $id . "'>Shops</a>"; ?>
                            </li>
                            <li>
                                <?php echo "<a  href='../Customer/calculation.php?&id=" . $id . "'>Calculations</a>"; ?>
                            </li>
                            <li>
                                <?php echo "<a href='../Home/about.php?&id=" . $id . "'>About Us</a>"; ?>
                            </li>
                            <li>
                                <?php echo "<a href='../Classes/index.php?&id=" . $id . "'>Classes</a>"; ?>
                            </li>
                            <li>
                                <?php echo "<a  href='../Home/contact.php?&id=" . $id . "'>Contact US</a>"; ?>
                            </li>

                            <?php
                            $sql = "SELECT * FROM users WHERE id='$id' ";
                            $RES = mysqli_query($con, $sql);
                            $result = mysqli_fetch_assoc($RES);
                            if ($result['usertype'] != 'Customer') {
                            ?>
                                <li>
                                    <a href="../home/">
                                        <button type="button" class="btn btn-outline-danger">
                                            Sign up
                                        </button></a>
                                </li>
                                <li>
                                    <a href="../login/login.php">
                                        <button type="button" class="btn btn-outline-success">
                                            Log In
                                        </button></a>
                                </li>
                            <?php } else { ?>
                                <li class="dropdown">


                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">My Profile</a>

                                    <div class="dropdown-menu">

                                        <?php echo "<a class='dropdown-item' href='../Customer/editdetails.php?&id=" . $id . "'>Edit Details</a>"; ?>
                                        <?php echo "<a class='dropdown-item' href='../Customer/Order.php?&id=" . $id . "'>Order Details</a>"; ?>
                                        <a class="dropdown-item" href="../Home/logout.php">Log Out</a>

                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- jQuery -->
    <script src="./assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="./assets/js/popper.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="./assets/js/scrollreveal.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/imgfix.min.js"></script>
    <script src="./assets/js/mixitup.js"></script>
    <script src="./assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="./assets/js/custom.js"></script>
</body>

</html>