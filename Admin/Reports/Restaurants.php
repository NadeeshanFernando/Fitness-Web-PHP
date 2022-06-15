<table border="1" align="center" style="width:50%;">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Telephone</th>
        <th scope="col">Register Date</th>
    </tr>
    <tr>
        <?php
        $con = mysqli_connect("localhost", "root", "", "fitness-app-db");
        $result = mysqli_query($con, "SELECT * FROM shops");
        while ($row = mysqli_fetch_array($result)) {
            echo "<td>" . $row['id'] . "</font></td>";
            echo "<td>" . $row['name'] . "</font></td>";
            echo "<td>" . $row['email'] . "</font></td>";
            echo "<td>" . $row['telephone'] . "</font></td>";
            echo "<td>" . $row['date'] . "</font></td></tr>";
            $df = "Summary-Report-Restaurants-" . date('Ymd') . ".xls";
            header("Content-Type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=\"$df\"");
            // header("Pragma: no-cache");
            // header("Expires: 0");
        }
        echo "</table>";
        mysqli_close($con);
        ?>