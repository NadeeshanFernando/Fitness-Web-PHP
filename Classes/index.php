<?php
session_start();
error_reporting(0);

include '../Connection/connection.php';
if (isset($_POST['book'])) {
    // assign dv variables to local variables
    $name        = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email       = $_POST['email'];
    $dob   = $_POST['dob'];
    $message     = $_POST['message'];

    if ($_FILES['image']['name']) {
        move_uploaded_file($_FILES['image']['tmp_name'], "../Classes/assets1/schedules/" . $_FILES['image']['name']);
        $img = "/" . $_FILES['image']['name'];
    }

    // select statement
    $sql1 = "SELECT *  FROM schedules WHERE email='$email'";
    // insert statement
    $sql2 = "INSERT INTO schedules (name, lastname, email, dob, message, image) VALUES ('$name', '$lastname', '$email', '$dob', '$message', '$img')";


    if (mysqli_num_rows(mysqli_query($con, $sql1)) > 0) {
        $error = "You have already booked for this class ";
        // register a new shop
    } else {
        $result1 = mysqli_query($con, $sql2);
        $msg = "Successfully booked a class";
        // echo "<script type='text/javascript'> document.location = '../Classes/index.php'; </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />


    <link rel="stylesheet" href="assets2/fonts/icomoon/style.css">
    <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/css/jquery-ui.css">
    <link rel="stylesheet" href="assets2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets2/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets2/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets2/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets2/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets2/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="assets2/css/aos.css">
    <link href="assets2/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets2/css/style.css">





    <title>X-TEAM</title>

    <link rel="stylesheet" type="text/css" href="assets1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets1/css/font-awesome.css" />
    <link rel="stylesheet" href="assets1/css/style.css" />
</head>

<body>

    <div>
        <?php include('../Customer/navigation.php'); ?>
    </div>

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets1/images/classes_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br />
                        <br />
                        <h2>Our <em>Classes</em></h2>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="site-section" style="margin-top:-75px" id="schedule-section">
        <div class="container">

            <br></br>

            <div class="row">
                <div class="col-12">
                    <ul class="nav days d-flex" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="sunday-tab" data-toggle="tab" href="#nav-sunday" role="tab" aria-controls="sunday" aria-selected="true">S</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="monday-tab" data-toggle="tab" href="#nav-monday" role="tab" aria-controls="monday" aria-selected="false">M</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#nav-tuesday" role="tab" aria-controls="tuesday" aria-selected="false">T</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#nav-wednesday" role="tab" aria-controls="wednesday" aria-selected="false">W</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#nav-thursday" role="tab" aria-controls="thursday" aria-selected="false">T</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="friday-tab" data-toggle="tab" href="#nav-friday" role="tab" aria-controls="friday" aria-selected="false">F</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#nav-saturday" role="tab" aria-controls="saturday" aria-selected="false">S</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-sunday" role="tabpanel" aria-labelledby="nav-sunday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/zumba.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>7.00a.m.-9.00a.m.</span>
                                    <h2>Zumba Online Classes</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/cardio.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>9.30a.m.-11.30a.m.</span>
                                    <h2>Cardio Online Program</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/kids.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>2.30p.m.-4.30p.m.</span>
                                    <h2>Kids Online Program</h2>
                                    <span>Kids Only(below 18)</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/workout/eUnderWeight/euGif7.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>4.30p.m.-7.00p.m.</span>
                                    <h2>Virtual Training</h2>
                                    <span>No Age Limit</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-monday" role="tabpanel" aria-labelledby="nav-monday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/yoga.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>7.00a.m.-9.00a.m.</span>
                                    <h2>Yoga Online Classes</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/cardio.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>9.30a.m.-11.30a.m.</span>
                                    <h2>Cardio Online Program</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/zumba.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>2.30p.m.-4.30p.m.</span>
                                    <h2>Zumba Online Classes</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/workout/eUnderWeight/euGif7.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>4.30p.m.-7.00p.m.</span>
                                    <h2>Virtual Training</h2>
                                    <span>No Age Limit</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-tuesday" role="tabpanel" aria-labelledby="nav-tuesday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/zumba.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>7.00a.m.-9.00a.m.</span>
                                    <h2>Zumba Online Classes</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/aerobics.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>9.30a.m.-11.30a.m.</span>
                                    <h2>Aerobics Online Program</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/kids.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>2.30p.m.-4.30p.m.</span>
                                    <h2>Kids Online Program</h2>
                                    <span>Kids Only(below 18)</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/workout/eUnderWeight/euGif7.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>4.30p.m.-7.00p.m.</span>
                                    <h2>Virtual Training</h2>
                                    <span>No Age Limit</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-wednesday" role="tabpanel" aria-labelledby="nav-wednesday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/aerobics.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>7.00a.m.-9.00a.m.</span>
                                    <h2>Aerobics Online Classes</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/zumba.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>9.30a.m.-11.30a.m.</span>
                                    <h2>Zumba Online Program</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/kids.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>2.30p.m.-4.30p.m.</span>
                                    <h2>Kids Online Program</h2>
                                    <span>Kids Only(below 18)</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/workout/eUnderWeight/euGif7.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>4.30p.m.-7.00p.m.</span>
                                    <h2>Virtual Training</h2>
                                    <span>No Age Limit</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-thursday" role="tabpanel" aria-labelledby="nav-thursday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/zumba.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>7.00a.m.-9.00a.m.</span>
                                    <h2>Zumba Online Classes</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/cardio.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>9.30a.m.-11.30a.m.</span>
                                    <h2>Cardio Online Program</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/kids.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>2.30p.m.-4.30p.m.</span>
                                    <h2>Kids Online Program</h2>
                                    <span>Kids Only(below 18)</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/workout/eUnderWeight/euGif7.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>4.30p.m.-7.00p.m.</span>
                                    <h2>Virtual Training</h2>
                                    <span>No Age Limit</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-friday" role="tabpanel" aria-labelledby="nav-friday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/aerobics.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>7.00a.m.-9.00a.m.</span>
                                    <h2>Aerobics Online Classes</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/cardio.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>9.30a.m.-11.30a.m.</span>
                                    <h2>Cardio Online Program</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/yoga.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>2.30p.m.-4.30p.m.</span>
                                    <h2>Yoga Online Program</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/workout/eUnderWeight/euGif7.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>4.30p.m.-7.00p.m.</span>
                                    <h2>Virtual Training</h2>
                                    <span>No Age Limit</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-saturday" role="tabpanel" aria-labelledby="nav-saturday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/zumba.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>7.00a.m.-9.00a.m.</span>
                                    <h2>Zumba Online Classes</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/cardio.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>9.30a.m.-11.30a.m.</span>
                                    <h2>Cardio Online Program</h2>
                                    <span>Male/Female</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/classes/kids.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>2.30p.m.-4.30p.m.</span>
                                    <h2>Kids Online Program</h2>
                                    <span>Kids Only(below 18)</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="assets2/images/workout/eUnderWeight/euGif7.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>4.30p.m.-7.00p.m.</span>
                                    <h2>Virtual Training</h2>
                                    <span>No Age Limit</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="half">
        <div class="bg order-1 order-md-2">
            <div class="contents order-2 order-md-1"> </div>

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">
                            <div class="text-center mb-5">
                                <h3><strong>Book Your Class Here</strong></h3>
                            </div>
                            <?php if ($error) { ?> <div class="alert alert-danger"><strong></strong><?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="alert alert-success"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php } ?>

                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group first">
                                    <label for="username">First name</label>
                                    <input type="text" class="form-control" placeholder="first name" id="name" name="name">
                                </div>
                                <div class="form-group first">
                                    <label for="username">Last name</label>
                                    <input type="text" class="form-control" placeholder="last name" id="lastname" name="lastname">
                                </div>
                                <div class="form-group first">
                                    <label for="username">Email</label>
                                    <input type="text" class="form-control" placeholder="your-email@gmail.com" id="email" name="email">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Date of Birth</label>
                                    <input type="date" class="form-control" placeholder="your birthday" id="dob" name="dob">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Message</label>
                                    <input type="textarea" class="form-control" placeholder="message..." id="message" name="message">
                                </div>
                                <div class="form-group first">
                                    <input type="file" id="image" name="image" required>
                                </div>

                        </div>
                        <input type="submit" name="book" value="Book now" class="btn btn-block btn-primary">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- ***** Features Item Start ***** -->

    <!-- ***** Features Item End ***** -->


    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <div>
        <?php include('../Home/footer.php'); ?>
    </div>

    <!-- jQuery -->
    <script src="assets1/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets1/js/popper.js"></script>
    <script src="assets1/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets1/js/scrollreveal.min.js"></script>
    <script src="assets1/js/waypoints.min.js"></script>
    <script src="assets1/js/jquery.counterup.min.js"></script>
    <script src="assets1/js/imgfix.min.js"></script>
    <script src="assets1/js/mixitup.js"></script>
    <script src="assets1/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets1/js/custom.js"></script>


    <script src="assets2/js/jquery-3.3.1.min.js"></script>
    <script src="assets2/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets2/js/jquery-ui.js"></script>
    <script src="assets2/js/popper.min.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>
    <script src="assets2/js/owl.carousel.min.js"></script>
    <script src="assets2/js/jquery.stellar.min.js"></script>
    <script src="assets2/js/jquery.countdown.min.js"></script>
    <script src="assets2/js/bootstrap-datepicker.min.js"></script>
    <script src="assets2/js/jquery.easing.1.3.js"></script>
    <script src="assets2/js/aos.js"></script>
    <script src="assets2/js/jquery.fancybox.min.js"></script>
    <script src="assets2/js/jquery.sticky.js"></script>
    <script src="assets2/js/jquery.mb.YTPlayer.min.js"></script>

    <script src="assets2/js/main.js"></script>
</body>

</html>