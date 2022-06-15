<table border="1" align="center" style="width:50%;">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
        <th scope="col">Date</th>
    </tr>
    <tr>
        <?php
        $con = mysqli_connect("localhost", "root", "", "fitness-app-db");
        $result = mysqli_query($con, "SELECT * FROM inquiries");
        while ($row = mysqli_fetch_array($result)) {
            echo "<td>" . $row['id'] . "</font></td>";
            echo "<td>" . $row['name'] . "</font></td>";
            echo "<td>" . $row['email'] . "</font></td>";
            echo "<td>" . $row['subject'] . "</font></td>";
            echo "<td>" . $row['message'] . "</font></td>";
            echo "<td>" . $row['date'] . "</font></td></tr>";
            $df = "Summary-Report-Inquiries-" . date('Ymd') . ".xls";
            header("Content-Type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=\"$df\"");
            // header("Pragma: no-cache");
            // header("Expires: 0");
        }
        echo "</table>";
        mysqli_close($con);
        ?>