<table border="1" align="center" style="width:50%;">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">fname</th>
        <th scope="col">lname</th>
        <th scope="col">email</th>
        <th scope="col">telephone</th>
    </tr>
    <tr>
        <?php
        $con = mysqli_connect("localhost", "root", "", "fitness-app-db");
        $result = mysqli_query($con, "SELECT * FROM users");
        while ($row = mysqli_fetch_array($result)) {
            echo "<td>" . $row['id'] . "</font></td>";
            echo "<td>" . $row['fname'] . "</font></td>";
            echo "<td>" . $row['lname'] . "</font></td>";
            echo "<td>" . $row['email'] . "</font></td>";
            echo "<td>" . $row['telephone'] . "</font></td></tr>";
            $df = "Summary-Report-Vendors";
            header("Content-Type: application/x-msdownload");
            header("Content-Disposition: attachment; filename='$df'.xls");
            header("Pragma: no-cache");
            header("Expires: 0");
        }
        echo "</table>";
        mysqli_close($con);
        ?>