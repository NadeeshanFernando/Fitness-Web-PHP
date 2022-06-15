<?php
session_start();
error_reporting(0);
include('../Connection/connection.php');
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id='$id' ";
$RES = mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($RES);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>X-TEAM-About US</title>

    <link rel="stylesheet" type="text/css" href="../Home/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../Home/assets/css/font-awesome.css">

    <link rel="stylesheet" href="../Home/assets/css/style.css">

    <!-- <style>
        #workoutTable {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #workoutTable td {
            text-align: center;
        }

        #workoutTable th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #workoutTable tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #workoutTable tr:hover {
            background-color: #ddd;
        }

        #workoutTable th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style> -->

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div>
        <?php include('../Customer/navigation.php'); ?>
    </div>
    <!-- ***** Header Area End ***** -->

    <section class="section section-bg" id="call-to-action" style="background-image: url(../Home/assets/images/calculation.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Check Your <em>Healthiness</em></h2>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'><i class="fa fa-child"></i> BMI Calculation</a></li>
                        <li><a href='#tabs-2'><i class="fa fa-male"></i> BMR Calculation</a></a></li>
                        <li><a href='#tabs-3'><i class="fa fa-heartbeat"></i> Fat Calculation</a></a></li>
                        <li><a href='#tabs-4'><i class="fa fa-trophy"></i> Workout Plan</a></a></li>
                        <li><a href='#tabs-5'><i class="fa fa-cutlery"></i> Diet Plan</a></a></li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="../Home/assets/images/bmical.jpg" alt="">
                            <h4>BMI Calculation</h4>

                            <form id="calculateBmi">

                                <!-- Basic Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="height" name="height" placeholder="Enter Your height" required="true">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter your weight" required="true">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <select class="form-control form-control-sm" id="heightunits">
                                                        <option value="metres" selected="selected">CM </option>
                                                        <option value="inches">Inch</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mt-4">
                                                    <select type="multiple" class="form-control form-control-sm" id="weightunits">
                                                        <option value="kg" selected="selected">Kg</option>
                                                        <option value="lb">pounds</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-user btn-block" id="submit" value="Compute BMI">
                                        </div>
                                    </div>


                                </div>

                            </form>

                            <div class="outputBmi">
                                <div class="d-flex flex-row">
                                    <h5 class="m-0 font-weight-bold  text-primary" id="statusBmi_title" style="display: none;">Your BMI :</h5> &nbsp;&nbsp;&nbsp;
                                    <h5 id="bmi" class="m-0 font-weight-bold text-success"></h5>
                                </div>
                                <h5 id="statusBmi" class="mt-2 font-weight-bold"></h5>
                            </div>
                        </article>

                        <article id='tabs-2'>
                            <img src="../Home/assets/images/bmrCal.jpg" alt="">
                            <h4>BMR Calculation</h4>

                            <form id="calculateBmr">

                                <!-- Basic Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="age" name="age" placeholder="Enter Your age" required="true">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="height" name="height" placeholder="Enter Your height" required="true">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter your weight" required="true">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <select type="multiple" class="form-control form-control-sm" id="heightunits">
                                                        <option value="metres" selected="selected">CM </option>
                                                        <option value="inches">Inch</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mt-4">
                                                    <select type="multiple" class="form-control form-control-sm" id="weightunits">
                                                        <option value="kg" selected="selected">Kg</option>
                                                        <option value="lb">pounds</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="gender" id="inlineRadio1" value="male">
                                                <label class="form-check-label text-secondary" for="inlineRadio1">Male</label>

                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="gender" id="inlineRadio2" value="female">
                                                <label class="form-check-label text-secondary" for="inlineRadio1">Female</label>

                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-user btn-block mt-2" id="submit" value="Compute BMR">
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="outputBmr">
                                <div class="d-flex flex-row">
                                    <h5 class="ml-2 font-weight-bold text-primary" id="bmrText" style="display: none;">Your BMR :</h5> &nbsp;&nbsp;&nbsp;
                                    <h5 id="bmr" class="m-0 font-weight-bold text-success"></h5>
                                </div>
                                <h5 id="statusBmr" class="mt-2 font-weight-bold"></h5>
                            </div>

                        </article>

                        <article id='tabs-3'>
                            <img src="../Home/assets/images/fatCal1.jpg" alt="">
                            <img src="../Home/assets/images/fatCal2.jpg" alt="">
                            <h4>Fat Calculation</h4>

                            <form id="calculateBodyFat">

                                <!-- Basic Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select id="sf" class="form-control">
                                                <option value="m">Male
                                                <option value="f">Female
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Height (Cms)</label>
                                            <input type="number" class="form-control" id="hf">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Neck Girth (Cms)</label>
                                            <input type="number" class="form-control" id="neck">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Waist (Cms)</label>
                                            <input type="number" class="form-control" id="waist">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Hips (Cms)</label>
                                            <input type="number" class="form-control" id="hips">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-user btn-block" id="submit" value="Compute Fat">
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="d-flex flex-row">
                                <h5 id="statusFat_title" style="display: none;" class="ml-2 font-weight-bold text-primary">Your Body Fat :</h5> &nbsp;&nbsp;&nbsp;
                                <h5 id="statusFat" class="m-0 font-weight-bold text-success"></h5>
                            </div>

                        </article>

                        <article id='tabs-4'>
                            <img src="../Home/assets/images/workout.jpg" alt="">
                            <h4>Workout Plan</h4>

                            <?php $uid = $_SESSION['uid'];
                            $query1 = mysqli_query($con, "select bmi from users where id='$id'");
                            $result = mysqli_fetch_assoc($query1);
                            $bmi = $result['bmi'] ?>

                            <div class="container-fluid">
                                <div class="top-description w-75 my-3">
                                    <h4>Workout schedule for BMI ( <span style="color: green;"><?php echo  $bmi ?> </span>) </h4>
                                    <p class="text-justify">Exercise is defined D as any movement that makes your muscles work and requires your body to burn calories.
                                        There are many types of physical activity, including swimming, running, jogging, walking, and dancing, to name a few.
                                        Being active has been shown to have many health benefits, both physically D and mentally. It may even help you live longer (1Trusted SourceTrusted Source).
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Select Your List:</label>
                                    <select class="form-control w-50" id="sel1" onchange="choose(this)">
                                        <option value="" disabled selected hidden>Your choice</option>
                                        <option value="1">Equipment</option>
                                        <option value="2">Non Equipment</option>

                                    </select>
                                </div>
                                <div class="non-equipment" id="non-equipment" style="display: none;">
                                    <?php if ($bmi < 18.5) : ?>
                                        <div>
                                            <?php include('../Customer/Workout/underWeight/underWeight.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 18.5 && $bmi <= 24.9) : ?>
                                        <div>
                                            <!-- ('../Customer/Workout/underWeight/underWeight.php') -->
                                            <!-- ('../Customer/Workout/normal/normal.php') -->
                                            <!-- ('../Customer/Workout/overWeight/overWeight.php') -->
                                            <!-- ('../Customer/Workout/obese/obese.php') -->
                                            <!-- ('../Customer/Workout/extremely/extremely.php') -->

                                            <?php include('../Customer/Workout/normal/normal.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 25 && $bmi <= 29.9) : ?>
                                        <div>
                                            <?php include('../Customer/Workout/overWeight/overWeight.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 30 && $bmi <= 34.9) : ?>
                                        <div>
                                            <?php include('../Customer/Workout/obese/obese.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 35) : ?>
                                        <div>
                                            <?php include('../Customer/Workout/extremely/extremely.php'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="equipment" id="equipment" style="display: none;">
                                    <?php if ($bmi < 18.5) : ?>
                                        <div>
                                            <?php include('../Customer/Workout/eUnderWeight/eUnderWeight.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 18.5 && $bmi <= 24.9) : ?>
                                        <div>
                                            <!-- ('../Customer/Workout/eUnderWeight/eUnderWeight.php') -->
                                            <!-- ('../Customer/Workout/eNormal/eNormal.php') -->
                                            <!-- ('../Customer/Workout/eOverWeight/eOverWeight.php') -->
                                            <!-- ('../Customer/Workout/eObese/eObese.php') -->
                                            <!-- ('../Customer/Workout/eExtremely/eExtremely.php') -->

                                            <?php include('../Customer/Workout/eNormal/eNormal.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 25 && $bmi <= 29.9) : ?>
                                        <div>
                                            <?php include('../Customer/Workout/eOverWeight/eOverWeight.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 30 && $bmi <= 34.9) : ?>
                                        <div>
                                            <?php include('../Customer/Workout/eObese/eObese.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 35) : ?>
                                        <div>
                                            <?php include('../Customer/Workout/eExtremely/eExtremely.php'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!-- End of Main Content -->
                            </div>

                            <div class="outputBmi">
                                <div class="d-flex flex-row">
                                    <h5 class="m-0 font-weight-bold  text-primary" id="statusBmi_title" style="display: none;">Your BMI :</h5> &nbsp;&nbsp;&nbsp;
                                    <h5 id="bmi" class="m-0 font-weight-bold text-success"></h5>
                                </div>
                                <h5 id="statusBmi" class="mt-2 font-weight-bold"></h5>
                            </div>
                        </article>

                        <article id='tabs-5'>
                            <img src="../Home/assets/images/diet.jpg" alt="">
                            <h4>Diet Plan</h4>

                            <?php $uid = $_SESSION['uid'];
                            $query1 = mysqli_query($con, "select bmi from users where id='$id'");
                            $result = mysqli_fetch_assoc($query1);
                            $bmi = $result['bmi'] ?>

                            <div class="container-fluid">
                                <div class="top-description w-75 my-3">
                                    <h4>Diet schedule for BMI ( <span style="color: green;"><?php echo  $bmi ?> </span>) </h4>
                                    <p class="text-justify">In general, scheduling what and when you eat will help you maintain a balanced diet and create a more stable energy source,
                                        as your metabolism will be engaged at optimal levels all day long.
                                        The goal is to eat every 3 to 4 hours in order to keep your blood sugar consistent and for your stomach to optimally digest.
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Select Your List:</label>
                                    <select class="form-control w-50" id="sel1" onchange="choose(this)">
                                        <option value="" disabled selected hidden>Your choice</option>
                                        <option value="3">Vegi</option>
                                        <option value="4">Non Vegi</option>

                                    </select>
                                </div>
                                <!-- for non-vegi -->
                                <div class="non-vegi" id="non-vegi" style="display: none;">
                                    <?php if ($bmi < 18.5) : ?>
                                        <div>
                                            <?php include('../Customer/Diet/underWeight.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 18.5 && $bmi <= 24.9) : ?>
                                        <div>
                                            <!-- ('../Customer/Workout/eUnderWeight/eUnderWeight.php') -->
                                            <!-- ('../Customer/Workout/eNormal/eNormal.php') -->
                                            <!-- ('../Customer/Workout/eOverWeight/eOverWeight.php') -->
                                            <!-- ('../Customer/Workout/eObese/eObese.php') -->
                                            <!-- ('../Customer/Workout/eExtremely/eExtremely.php') -->
                                            <!-- ('../Customer/Diet/nornnal.php') ?> -->

                                            <?php include('../Customer/Diet/normal.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 25 && $bmi <= 29.9) : ?>
                                        <div>
                                            <?php include('../Customer/Diet/overWeight.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 30 && $bmi <= 34.9) : ?>
                                        <div>
                                            <?php include('../Customer/Diet/obese.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 35) : ?>
                                        <div>
                                            <?php include('../Customer/Diet/extremely.php'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- for vegi -->
                                <div class=" vegi" id="vegi" style="display: none;">
                                    <?php if ($bmi < 18.5) : ?>
                                        <div>
                                            <?php include('../Customer/Diet/vUnderWeight.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 18.5 && $bmi <= 24.9) : ?>
                                        <div>
                                            <!-- ('../Customer/Workout/eUnderWeight/eUnderWeight.php') -->
                                            <!-- ('../Customer/Workout/eNormal/eNormal.php') -->
                                            <!-- ('../Customer/Workout/eOverWeight/eOverWeight.php') -->
                                            <!-- ('../Customer/Workout/eObese/eObese.php') -->
                                            <!-- ('../Customer/Workout/eExtremely/eExtremely.php') -->

                                            <?php include('../Customer/Diet/vNormal.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 25 && $bmi <= 29.9) : ?>
                                        <div>
                                            <?php include('../Customer/Diet/vOverWeight.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 30 && $bmi <= 34.9) : ?>
                                        <div>
                                            <?php include('../Customer/Diet/vObese.php'); ?>
                                        </div>
                                    <?php elseif ($bmi >= 35) : ?>
                                        <div>
                                            <?php include('../Customer/Diet/vExtremely.php'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!-- End of Main Content -->
                            </div>

                            <div class="outputBmi">
                                <div class="d-flex flex-row">
                                    <h5 class="m-0 font-weight-bold  text-primary" id="statusBmi_title" style="display: none;">Your BMI :</h5> &nbsp;&nbsp;&nbsp;
                                    <h5 id="bmi" class="m-0 font-weight-bold text-success"></h5>
                                </div>
                                <h5 id="statusBmi" class="mt-2 font-weight-bold"></h5>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->



    <!-- ***** Footer Start ***** -->
    <div>
    <?php include('../Home/footer.php'); ?>
  </div>

    <!-- jQuery -->
    <script src="../Home/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../Home/assets/js/popper.js"></script>
    <script src="../Home/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../Home/assets/js/scrollreveal.min.js"></script>
    <script src="../Home/assets/js/waypoints.min.js"></script>
    <script src="../Home/assets/js/jquery.counterup.min.js"></script>
    <script src="../Home/assets/js/imgfix.min.js"></script>
    <script src="../Home/assets/js/mixitup.js"></script>
    <script src="../Home/assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="../Home/assets/js/custom.js"></script>

    <script>
        $('#calculateBmi').on('submit', function(e) {
            $('#submit').prop("disabled", true);
            e.preventDefault();
            var height = Number(document.getElementById("height").value);
            var heightunits = document.getElementById("heightunits").value;
            var weight = Number(document.getElementById("weight").value);
            var weightunits = document.getElementById("weightunits").value;

            if (heightunits == "inches") height /= 39.3700787;
            if (weightunits == "lb") weight /= 2.20462;
            var BMI = Math.round(weight / Math.pow(height, 2) * 10000);

            document.getElementById("bmi").innerText = Math.round(BMI * 100) / 100;
            document.getElementById("statusBmi_title").style.display = "block";
            var outputBmi = Math.round(BMI * 100) / 100
            var status = document.getElementById("statusBmi")


            if (outputBmi < 18.5) {
                var array = ["slide 1", "slide 2", "slide 3", "slide 4", "slide 5"]

                status.innerText = "UNDERWEIGHT";
                status.style.color = "blue"

            } else if (outputBmi >= 18.5 && outputBmi <= 24.9) {
                var array = ["slide 1", "slide 2", "slide 3", "slide 4", "slide 5"]

                status.innerText = "NORMAL";
                status.style.color = "green"

            } else if (outputBmi >= 25 && outputBmi <= 29.9) {
                var array = ["slide 1", "slide 2", "slide 3", "slide 4", "slide 5"]

                status.innerText = "OVER WEIGHT";
                status.style.color = "yellow"

            } else if (outputBmi >= 30 && outputBmi <= 34.9) {
                var array = ["slide 1", "slide 2", "slide 3", "slide 4", "slide 5"]

                status.innerText = "OBESE";
                status.style.color = "orange"

            } else if (outputBmi > 35) {
                var array = ["slide 1", "slide 2", "slide 3", "slide 4", "slide 5"]

                status.innerText = "EXTREMELY OBESE";
                status.style.color = "red";
                // array.forEach(function(item) {
                //     var li = document.createElement("li");
                //     li.className = "list-group-item";

                //     var text = document.createTextNode(item);
                //     li.appendChild(text);
                //     document.getElementById("myUl").appendChild(li);
                //     document.getElementById("myUl").style.display="true"

                // });
                // document.getElementById("answer").value = output; 
            }

            $.ajax({
                type: 'post',
                url: 'updateCal.php',
                data: 'bmi=' + BMI,
                success: function(data) {

                }
            });

        });
    </script>

    <script>
        $(function() {
            $('#calculateBmr').on('submit', function(e) {
                $('#submit').prop("disabled", true);
                e.preventDefault();
                var height = Number(document.getElementById("height").value);
                var heightunits = document.getElementById("heightunits").value;
                var weight = Number(document.getElementById("weight").value);
                var weightunits = document.getElementById("weightunits").value;
                var age = Number(document.getElementById("age").value);
                var gender = document.querySelector('input[name="gender"]:checked').value;

                if (heightunits == "inches") height /= 39.3700787;
                if (weightunits == "lb") weight /= 2.20462;

                if (gender == "male") {
                    bmr = (88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age))
                } else {
                    bmr = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age)
                }
                console.log(bmr);
                var bmrText = document.getElementById("bmrText");
                bmrText.style.display = "block"
                var bmrValue = document.getElementById("bmr").innerText = bmr;


                // if ( output< 18.5) {
                //     var array = ["slide 1", "slide 2", "slide 3", "slide 4", "slide 5"]

                //     status.innerText = "Underweight";
                //     status.style.color = "red"
                //     array.forEach(function(item) {
                //         var li = document.createElement("li");
                //         li.className = "list-group-item";
                //         var text = document.createTextNode(item);
                //         li.appendChild(text);
                //         document.getElementById("myUl").appendChild(li);
                //         document.getElementById("myUl").style.display = "block"

                //     });
                // } else if (output >= 18.5 && output <= 25) {
                //     var array = ["slide 1", "slide 2", "slide 3", "slide 4", "slide 5"]

                //     status.innerText = "Normal";
                //     status.style.color = "green"
                //     array.forEach(function(item) {
                //         var li = document.createElement("li");
                //         li.className = "list-group-item";

                //         var text = document.createTextNode(item);
                //         li.appendChild(text);
                //         document.getElementById("myUl").appendChild(li);
                //         document.getElementById("myUl").style.display = "true"
                //     });
                // } else if (output >= 25 && output <= 30) {
                //     var array = ["slide 1", "slide 2", "slide 3", "slide 4", "slide 5"]

                //     status.innerText = "black";
                //     array.forEach(function(item) {
                //         var li = document.createElement("li");
                //         li.className = "list-group-item";

                //         var text = document.createTextNode(item);
                //         li.appendChild(text);
                //         document.getElementById("myUl").appendChild(li);
                //         document.getElementById("myUl").style.display = "true"

                //     });
                // } else if (output > 30) {
                //     var array = ["slide 1", "slide 2", "slide 3", "slide 4", "slide 5"]

                //     status.innerText = "over weight";
                //     status.style.color = "orange";
                //     array.forEach(function(item) {
                //         var li = document.createElement("li");
                //         li.className = "list-group-item";

                //         var text = document.createTextNode(item);
                //         li.appendChild(text);
                //         document.getElementById("myUl").appendChild(li);
                //         document.getElementById("myUl").style.display = "true"

                //     });
                //     // document.getElementById("answer").value = output; 
                // }

                $.ajax({
                    type: 'post',
                    url: 'updateCal.php',
                    data: 'bmr=' + bmr,
                    success: function(data) {

                    }
                });

            });

        });
    </script>

    <script>
        $('#calculateBodyFat').on('submit', function(e) {
            $('#submit').prop("disabled", true);

            $('#submit').prop("disabled", true);
            e.preventDefault();
            console.log("ok");

            var sex = $('#sf').val();
            var height = $('#hf').val();
            var neck = $('#neck').val();
            var waist = $('#waist').val();
            var hips = $('#hips').val();
            var bfc;

            if (sex === "m") {
                bfc = Math.round((86.010 * (Math.log(waist * 1 - neck * 1) / Math.log(10)) - 70.041 * (Math.log(height) / Math.log(10)) + 30.30 * 1) * 100) / 100;
            } else if (sex === "f") {
                bfc = Math.round((163.205 * (Math.log(waist * 1 + hips * 1 - neck * 1) / Math.log(10)) - 97.684 * (Math.log(height) / Math.log(10)) - 104.912 * 1) * 100) / 100;

            }
            document.getElementById("statusFat").innerText = bfc + " " + "%";
            document.getElementById("statusFat_title").style.display = "block";

            $.ajax({
                type: 'post',
                url: 'updateCal.php',
                data: 'bfc=' + bfc,
                success: function(data) {

                }
            });
        });
    </script>

    <script>
        function choose(selectObject) {
            var value = selectObject.value;
            console.log(value);
            document.getElementById('vegi').style.display = "none"
            document.getElementById('non-vegi').style.display = "none"
            document.getElementById('equipment').style.display = "none"
            document.getElementById('non-equipment').style.display = "none"

            if (value == 1) {
                document.getElementById('equipment').style.display = "block"
            } else if (value == 2) {
                document.getElementById('non-equipment').style.display = "block"

            } else if (value == 3) {
                document.getElementById('vegi').style.display = "block"

            } else if (value == 4) {
                document.getElementById('non-vegi').style.display = "block"

            }
        }
    </script>

    <!-- <script>
        function choose(selectObject) {
            var value = selectObject.value;
            console.log(value);
            document.getElementById('equipment').style.display = "none"
            document.getElementById('non-equipment').style.display = "none"
            if (value == 1) {
                document.getElementById('equipment').style.display = "block"
            } else {
                document.getElementById('non-equipment').style.display = "block"

            }
        }
    </script> -->

</body>

</html>