<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--  -->

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href=".../../assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../../assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../../assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../../assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../../assets/css/aos.css">
    <link href="../../assets/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../../assets/css/style.css">

    <style>
        .button {
            display: inline-block;
            border-radius: 5px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 15px;
            padding: 20px;
            width: 125px;
            height: auto;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:before {
            content: '\00ab';
            position: absolute;
            opacity: 0;
            top: 0;
            left: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-left: 25px;
        }

        .button:hover span:before {
            opacity: 1;
            left: 0;
        }
    </style>

</head>

<body>

    <div class="site-section" style="margin-top:-75px" id="schedule-section">
        <div class="container">

            <button class="button" style="vertical-align:middle" onclick="history.back()"><span>Go Back</span></button>

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
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 16</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 10 sec</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 10</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
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
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 16</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 10 sec</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 10</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
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
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 16</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 10 sec</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 10</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
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
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 16</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 10 sec</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 10</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
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
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 16</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 10 sec</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 10</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
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
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 16</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 10 sec</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 10</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
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
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 16</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 10 sec</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obImg5.jpg" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>00:30 sec</span>
                                    <h2>Side-Lying Floor Stretch Left</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif1.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Triceps Kickbacks</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif2.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 12</span>
                                    <h2>Incline Push-Ups</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif3.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 10</span>
                                    <h2>Hyperextension</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="" class="class-item-thumbnail">
                                    <img src="../../assets/images/workout/obese/obGif4.gif" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>x 14</span>
                                    <h2>Triceps Dips</h2>
                                    <span>Rest 15 sec</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <br />

    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../../assets/js/jquery-ui.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script src="../../assets/js/jquery.stellar.min.js"></script>
    <script src="../../assets/js/jquery.countdown.min.js"></script>
    <script src="../../assets/js/bootstrap-datepicker.min.js"></script>
    <script src="../../assets/js/jquery.easing.1.3.js"></script>
    <script src="../../assets/js/aos.js"></script>
    <script src="../../assets/js/jquery.fancybox.min.js"></script>
    <script src="../../assets/js/jquery.sticky.js"></script>
    <script src="../../assets/js/jquery.mb.YTPlayer.min.js"></script>




    <script src="../../assets/js/main.js"></script>

</body>

</html>