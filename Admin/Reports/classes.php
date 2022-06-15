<table border="1" align="center" style="width:50%;">
<!-- giving table column names to the report -->
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Last name</th>
        <th scope="col">Email</th>
        <th scope="col">DOB</th>
        <th scope="col">Message</th>
    </tr>
    <tr>
        <?php
// assigning the DB Cred.
        $con = mysqli_connect("localhost", "root", "", "fitness-app-db");
        // create the select statement
        $result = mysqli_query($con, "SELECT * FROM schedules");
        // run the select statement in a while loop
        while ($row = mysqli_fetch_array($result)) {
            echo "<td>" . $row['id'] . "</font></td>";
            echo "<td>" . $row['name'] . "</font></td>";
            echo "<td>" . $row['lastname'] . "</font></td>";
            echo "<td>" . $row['email'] . "</font></td>";
            echo "<td>" . $row['dob'] . "</font></td>";
            echo "<td>" . $row['message'] . "</font></td></tr>";
            $df = "Summary-Report-Classes-" . date('Ymd') . ".xls"; //file format
            header("Content-Type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=\"$df\"");
            // header("Pragma: no-cache");
            // header("Expires: 0");
        }
        echo "</table>";
        // close the DB connection
        mysqli_close($con);
        ?>