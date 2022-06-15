<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
        .button {
            display: inline-block;
            border-radius: 5px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 20px;
            width: 200px;
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

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>

</head>

<body>

    <button class="button" style="vertical-align:middle" onclick="window.location.href='../Customer/Workout/eObese/week1.php'"><span>Get Your Plan </span></button>
    <!-- <button class="button" style="vertical-align:middle" onclick="window.location.href='../Customer/Workout/normal/week2.php'"><span>Week 2 </span></button>
    <button class="button" style="vertical-align:middle" onclick="window.location.href='../Customer/Workout/normal/week3.php'"><span>Week 3 </span></button>
    <button class="button" style="vertical-align:middle" onclick="window.location.href='../Customer/Workout/normal/week4.php'"><span>Week 4 </span></button> -->

</body>

</html>