<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>X-TEAM</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../Home/assets/css/style.css">


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

                    <a href="../Home/logout.php">
                        <div class="container text-right" id="topContent" style="padding-top: 1px;"> <strong><?php echo $f['name'] ?> Seller Profile</strong> &nbsp; <button type="button" class="btn btn-outline-danger">
                                Sign Out
                            </button>
                    </a>
                </div>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="margin-top: 40px;">
                    <div class="container">
                        <a href="index.html" class="logo">X<em>-</em>Team</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">


                                <li class="nav-item">
                                    <!-- <a class="nav-link" href="../Restuarant/profile.php?">Restaurant</a> -->
                                    <?php echo "<a class='nav-link'  href='../Shop/profile.php?&id=" . $id . "'>Profile</a>"; ?>

                                </li>
                                <li class="nav-item">
                                    <!-- <a class="nav-link" href="../Restuarant/Fooditems.php">Menu Items</a> -->
                                    <?php echo "<a class='nav-link'  href='../Shop/Products.php?&id=" . $id . "'>Products</a>"; ?>
                                </li>
                                <li class="nav-item">
                                    <!-- <a class="nav-link" href="./orders.php">Order</a> -->
                                    <?php echo "<a class='nav-link'  href='../Shop/orders.php?&id=" . $id . "'>Order</a>"; ?>
                                </li>
                                <li class="nav-item">
                                    <!-- <a class="nav-link" href="./editdetails.php">Edit Resturant</a> -->
                                    <?php echo "<a class='nav-link'  href='../Shop/editdetails.php?&id=" . $id . "'>Edit Shop</a>"; ?>
                                </li>


                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets1/images/<?php echo $f['image'] ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><?php echo $f['name'] ?><em> Seller Profile</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>

</html>